<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{ 
	protected $guarded = ['id'];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function comments(){
    	return $this->hasMany(Comment::class); //finds what is the comment on Post.
    }

    public function addComment($body) {
    
    	 $this->comments()->create(compact('body'));
    }
}
