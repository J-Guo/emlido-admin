<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affiliate_Review extends Model
{
    protected $table="affiliate_reviews";

    protected $fillable =[
        'comments',
    ];
}
