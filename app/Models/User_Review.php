<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_Review extends Model
{
    protected $connection='mysql2';

    protected  $table = "user_reviews";

    protected $fillable=[
        'comments',
    ];
}
