<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Activity; // from now on \App\Movie will be accessible just with name Movie

class activityController extends Controller
{
    //
        /**
         * list of movies
         */
        public function listing()
        {
            $view = view('activities/listing'); // resources/views/  movies/listing  .blade.php
    
            $all_activities = Activity::orderBy('name', 'asc')->get();
            $view->activities = $all_activities;
            
            return $view;
        }
    
        /**
         * detail of a movie
         */
        public function detail($id)
        {
            $view = view('activities/detail'); // resources/views/  movies/detail  .blade.php
    
            
            // find one movie by it's primary key (`id` column)
            $activity = Activity::find($id);
            // $movie = Movie::where('id', 1)->first(); // equivalent to the above
    
            // put that movie into the view as variable $movie
            $view->activity = $activity;
    

            // return $activity->category()->first();
            // return $activity->category;
            
            return $view;
        }
    
        /**
         * create a new movie
         */
        public function create()
        {
            $view = view('activities/edit');
            $view->activity = new Activity();

            $view->activityCategories = \App\Activity_Category::all(); // added category
    
            return $view;
        }
    
        public function edit($id)
        {
            $activity = Activity::findOrFail($id);
    
            
            $view = view('activities/edit');
            $view->activity = $activity;

            $view->activityCategories = \App\Activity_Category::all(); // added category
            
            return $view;
        }
    
        public function store($id = null)
        {
            if($id) // if this is edit
            {
                // select movie from DB
                $activity = Activity::findOrFail($id);
            }
            else
            {
                // create empty object Movie
                $activity = new Activity();
            }
    
            // fill it with selected data from the request
            $activity->fill(request()->only([
                'name',
                'description',
                'picture',
                'company_provider',
                'price',
                'activity_category_id'
            ]));
            
            // save the movie
            $activity->save();

            if(request()->hasFile('picture'))
            {
                // handle file upload
                $file = request()->file('picture');
            
                // store the file on the disk uploads in subfolder actors
                // with a hashed unique name
                $filepath = $file->store('activities', 'uploads');
                $activity->picture = $filepath;
                $activity->save();
            }

            // inform the user of success
            // \Session::flash('success_message', 'The movie was successfully saved!');
            session()->flash('success_message', 'The activity was successfully saved!');
    
            // redirect
            return redirect()->action('activityController@edit', ['id' => $activity->id]);
        }
    
        /**
         * handle submission of the form
         */
        public function store_old($id = null)
        {
            $request = request();
    
            if($request->has('name'))
            {
                $name = $request->input('name');
            }
    
            $request->all(); // all request data
            $request_data = $request->only([ // only those request items that are present in the array
                'name',
                'description',
                'picture',
                'company_provider',
                'price',
                'activity_category_id'
            ]);
            $request_data = $request->except([ // everything except the items that are present in the array
                '_token',
                'description'
            ]);
            
            // create new object of class Movie
            $activity = new Activity();
    
            // add some data from request into this object
            $activity->fill($request->all());
    
            $activity->fill($request->only([
                'name',
                'description',
                'picture',
                'company_provider',
                'price',
                'activity_category_id'
            ]));
    
            // $movie->title = $request->input('title');
            // $movie->year = $request->input('year');
            // $movie->plot = $request->input('plot');
    
            dd($activity);
            // $movie->save();
    
            // redirect somewhere
        }
    
        /**
         * inserts a record in the movies table for testing purposes
         */
        public function test_insert()
        {
            // create an object of the model class
            // $movie = new \App\Movie();
            $activity = new Activity();
    
            // modify it's properties
            $activity->name = 'LEGO Jewish History Private Tour';
            $activity->price = 2017;
            $activity->description = 'Join me for a unique private tour tailored around you! We will explore the former Jewish ghetto and I will give you all the insights. I will tell you lots of stories about the history of the area and point out the main landmarks. The Holocaust has left a deep mark on Prague. 
            
            Start your tour in the Old Town and join discovering the history behind it. Hear the great tales of this area and learn about the local lifestyle.
            
            We ll walk through the Old Jewish Cemetery, home to around 12,000 tombs. Let me tell you about the famous figures buried here and their lives.
            
            You will not miss the Old New Synagogue which dates from 1270 and s rumored to hold the body of the mythical Golem. End your tour back in Old Town and ask me for further recommendations before we say goodbye to each other.
            
            Let me know if you have any questions or want to change something in our itinerary and I will do my best to adjust the tour according to your wishes!';
    
            // save the object
            // $movie->save();
    
            // happily inform the user
            return 'Activity was saved!';
        }
    }
    

