<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movie = new Movie();
        $movie->title = 'My new movie';
        return $movie;
        
        return [
            'hello' => 'world'
        ];
    }

    public function suggest()
    {
        $text = request()->input('t', null);

        $movies = Movie::where('title', 'like', '%'.$text.'%')
                    ->orderBy('title', 'asc')
                    ->limit(20)
                    ->get();
                
        return $movies;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return __METHOD__;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $movie = Movie::find($id);
        if($movie)
        {
            // output the movie object as JSON string 
            // and use the default HTTP code 200 (OK)
            return $movie;
        }
        else
        {
            // output an empty array [] as JSON string
            // and use the HTTP code 404 (Not Found)
            return response()->json([], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        return __METHOD__;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return __METHOD__;
    }
}
