<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $table = 'activities';
    
        public $timestamps = false;
    
        protected $guarded = ['id'];
    
        public function getImageUrl()
        {
            if(!$this->picture) // if the file has not been uploaded
            {
                return null;
            }
            
            return asset('uploads/' . $this->picture);
        }

        public function category(){
            return $this->belongsTo(Activity_Category::class, 'activity_category_id');
        }

        public function reviews()
        {
            return $this->morphMany('App\Review');
        }

        public function comments()
        {
            return $this->hasMany('App\Comment');
        }
}
