<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'comment',
        // 'activity_id',
        // 'activity_category_id',
        // 'user_id',
    ];

    public function review()
    {
        return $this->morphTo();
    }
}
