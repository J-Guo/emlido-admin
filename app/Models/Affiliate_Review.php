<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affiliate_Review extends Model
{
    protected $connection='mysql2';

    protected $table="affiliate_reviews";

    protected $fillable =[
        'comments',
    ];
}
