<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adventurerController extends Controller
{
    public function listing()
    {
        $view = view('adventurers/listing'); // resources/views/  movies/listing  .blade.php

        $all_adventurers = Adventurer::orderBy('name', 'asc')->get();
        $view->adventurers = $all_adventurers;
        
        return $view;
    }

    /**
     * detail of a movie
     */
    public function detail($id)
    {
        $view = view('adventurers/detail'); // resources/views/  movies/detail  .blade.php

        // find one movie by it's primary key (`id` column)
        $adventurer = Adventurer::find($id);
        // $movie = Movie::where('id', 1)->first(); // equivalent to the above

        // put that movie into the view as variable $movie
        $view->adventurer = $adventurer;

        return $view;
    }

    /**
     * create a new movie
     */
    public function create()
    {
        $view = view('adventurers/edit');
        $view->adventurer = new Adventurer();

        return $view;
    }

    public function edit($id)
    {
        $adventurer = Adventurer::findOrFail($id);

        $view = view('adventurers/edit');
        $view->adventurer = $adventurer;
        
        return $view;
    }

    public function store($id = null)
    {
        if($id) // if this is edit
        {
            // select movie from DB
            $adventurer = Adventurer::findOrFail($id);
        }
        else
        {
            // create empty object Movie
            $adventurer = new Adventurer();
        }

        // fill it with selected data from the request
        $adventurer->fill(request()->only([
            'email',
            'password',
            'gender',
            'name',
            'surname',
            'date_of_birth',
            'nationality',
            'mobile_number',
            'is_admin',
            'permission_level'
        ]));
        
        // save the movie
        $adventurer->save();

        // inform the user of success
        // \Session::flash('success_message', 'The movie was successfully saved!');
        session()->flash('success_message', 'Your booking is recorded!');

        // redirect
        return redirect()->action('adventurerController@edit', ['id' => $activity->id]);
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
            'email',
            'password',
            'gender',
            'name',
            'surname',
            'date_of_birth',
            'nationality',
            'mobile_number',
            'is_admin',
            'permission_level'
        ]);
        $request_data = $request->except([ // everything except the items that are present in the array
            '_token',
            'surname'
        ]);
        
        // create new object of class Movie
        $adventurer = new Adventurer();

        // add some data from request into this object
        $adventurer->fill($request->all());

        $adventurer->fill($request->only([
            'email',
            'password',
            'gender',
            'name',
            'surname',
            'date_of_birth',
            'nationality',
            'mobile_number',
            'is_admin',
            'permission_level'
        ]));

        // $movie->title = $request->input('title');
        // $movie->year = $request->input('year');
        // $movie->plot = $request->input('plot');

        dd($adventurer);
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
        return 'Your registration is successful !';
    }
    
}
