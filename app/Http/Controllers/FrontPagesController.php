<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Http\Requests\ReviewRequest;
use App\Models\Order;
use App\Models\Review;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class FrontPagesController extends Controller
{
    public function index()
    {
        $masters = User::whereHas(
            'roles', function($q){
            $q->where('name', 'master');
        })->get();
        $services = Service::all();
        return view('frontend.index')->with('masters', $masters)->with('services', $services);
    }

    public function about()
    {
        $reviews = Review::select()->orderBy('id', 'desc')->limit(3)->get();
//        dd($reviews);
        return view('frontend.about')->with('reviews', $reviews);
    }

    public function models()
    {
        return view('frontend.model');
    }

    public function modelDetails()
    {
        return view('frontend.model-details');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function blogDetails()
    {
        return view('frontend.blog-details');
    }

    public function service()
    {
        return view('frontend.service');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function orderStore(OrderRequest $request)
    {
        $order = new Order;
        $order->name = $request->name;
        $order->service_id = $request->service_id;
        $order->phone = (integer)$request->phone;
        $order->user_id = (integer)$request->user_id;
        $order->save();

        return redirect()->back();
    }

    public function reviewStore(ReviewRequest $request)
    {
        $review = new Review();
        $review->name = $request->name;
        $review->body = $request->body;
        $review->phone = (integer)$request->phone;
        $review->save();

        return redirect()->back();
    }
}
