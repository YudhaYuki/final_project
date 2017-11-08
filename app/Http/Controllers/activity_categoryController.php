<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Activity_Category;

class activity_categoryController extends Controller
{
    public function create()
    {
        $view = view('activityCategories/edit');
        $view->activityCategory = new Activity_Category();
        return $view;
    }

    public function edit($id)
    {
        $activityCategory = Activity_Category::findOrFail($id);

        $view = view('activityCategories/edit');
        $view->activityCategory = $activityCategory;
        
        return $view;
    }


    public function store($id = null)
    {
        if($id) // if this is edit
        {
            // select movie from DB
            $activityCategory = Activity_Category::findOrFail($id);
        }
        else
        {
            // create empty object Movie
            $activityCategory = new Activity_Category();
        }

        // fill it with selected data from the request
        $activityCategory->fill(request()->only([
            'name',
            'description'
        ]));
        
        // save the movie
        $activityCategory->save();

        // inform the user of success
        session()->flash('success_message', 'Activity category has been saved!');

        // redirect
        return redirect()->action('activity_categoryController@edit', ['id' => $activityCategory->id]);
    }


   public function listing()
   {
       $view = view('activityCategories/listing'); // resources/views/  movies/listing  .blade.php

       $all_activityCategories = Activity_Category::orderBy('name', 'asc')->get();
       $view->activityCategories = $all_activityCategories;
       
       return $view;
   }

   /**
    * detail of a movie
    */
   public function detail($id)
   {
       $view = view('activityCategories/detail'); // resources/views/  movies/detail  .blade.php

       // find one movie by it's primary key (`id` column)
       $activityCategory = Activity_Category::find($id);
       // $movie = Movie::where('id', 1)->first(); // equivalent to the above

       // put that movie into the view as variable $movie
       $view->activityCategory = $activityCategory;

       return $view;
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
           'description'
       ]);
       $request_data = $request->except([ // everything except the items that are present in the array
           '_token',
           'name', 
           'description'
       ]);
       
       // create new object of class Movie
       $activityCategory = new Activity_Category();

       // add some data from request into this object
       $activityCategory->fill($request->all());

       $activityCategory->fill($request->only([
           'name',
           'description'
       ]));

       dd($activityCategory);
       // $movie->save();

       // redirect somewhere
   }
   
}


