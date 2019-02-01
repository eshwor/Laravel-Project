<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    public $table = 'posts';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
