<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    //not mandatory
    protected $table = 'posts';

    //by default all the columns are protected
    protected $fillable = [
        'title',
        'body',
    ];

    //To convert to Carbon object
    protected $dates = [
        'reviewed_at',
    ];

    public function getFullText(){
        return $this->title . ' ' .$this->body;
    }
        

 
}