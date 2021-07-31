<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasFactory, Notifiable, CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    protected $table = 'users';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = ['name', 'email', 'password', 'info', 'phone', 'role', 'image', 'profile_image',];
    protected $hidden = ['password', 'remember_token',];
    protected $casts = ['email_verified_at' => 'datetime', 'image' => 'array',];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public function uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path)
    {
        $request = Request::instance();
        $attribute_value = (array) $this->{$attribute_name};
        $files_to_clear = $request->get('clear_'.$attribute_name);
        // if a file has been marked for removal,
        // delete it from the disk and from the db

        if ($files_to_clear) {
            $attribute_value = (array) $this->{$attribute_name};
            foreach ($files_to_clear as $key => $filename) {
                Storage::disk($disk)->delete($filename);
            }
            $attribute_value = array_diff($attribute_value, $files_to_clear);
        }

        // if a new file is uploaded, store it on disk and its filename in the database
        if ($request->hasFile($attribute_name)) {
            foreach ($request->file($attribute_name) as $file) {
                if ($file->isValid()) {
                    // 1. Generate a new file name
                    $new_file_name = $file->getClientOriginalName();
                    // 2. Move the new file to the correct path
                    $file_path = Storage::disk('s3')->put('images', $file, $new_file_name);
                    // 3. Add the public path to the database
                    $attribute_value[] = $file_path;
                }
            }
        }
        $this->attributes[$attribute_name] = json_encode($attribute_value);
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function skills() {
        return $this->hasMany(Skill::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }

    public function services() {
        return $this->hasMany(Service::class);
    }

    public function images() {
        return $this->hasMany(Image::class)->latest();
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "s3";
        $destination_path = "images";

        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }

    public function setProfileImageAttribute($value)
    {
        $attribute_name = "profile_image";
        $disk = 's3';
        $destination_path = 'profile';

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }

}
