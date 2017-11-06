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
}
