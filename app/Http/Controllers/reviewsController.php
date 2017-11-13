<?php

namespace App\Http\Controllers;

use App\Review;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


class reviewsController extends Controller
{
    //

    public function store(Request $request)
    {
        if(Auth::check()) {
            $review = Review::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'comment' => $request->input('comment'),
                // 'activity_id' => $request->input('activity_id'),
                // 'activity_category_id' => $request->input('activity_category_id'),
                // 'user_id' => Auth::user()->id
            ]);

            if($review){
                return back()->with('success', 'Review is successfully posted');
            }

            return back()->withInput()->with('errors', 'Error posting the review');
        }
    }
}
