<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;
use App\Activity;

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

    public function filter()
    {
        $text = request()->input('t', null);
        $price_cap = request()->input('cap', null);
        $nr_of_people = request()->input('ppl', null);
        $date = request()->input('date', null);
    
        // $sortBy = null;
        
        // $activities = DB::table('activitiess')
        //                 ->when($sortBy, function ($query) use ($sortBy) {
        //                     return $query->orderBy($sortBy);
        //                 }, function ($query) {
        //                     return $query->orderBy('name');
        //                 })
        //                 ->get();


        $activities = Activity::select('*')
                    ->whereNull('t', 'cap', 'ppl', 'date', '%'.$text.'%')
                    ->orderBy('name', 'cap', 'ppl', 'asc')
                    ->limit(20)
                    ->get();
 
        return $activities;
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
        $activity = Activity::find($id);
        if($activity)
        {
            // output the movie object as JSON string 
            // and use the default HTTP code 200 (OK)
            return $activity;
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
