<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Get the post that the comment is attached to.
     */
    public function post()
    {
      return $this->belongsTo('App\Post');
    }

    /**
     * Get the user who wrote the comment.
     */
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
