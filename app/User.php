<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     *get the all roles belong to current user
     */
    public function roles(){

        return $this->belongsToMany('App\Role');
    }

    /**
     * Get all user reviews that user participated as a reviewer
     */
    public function userReviewer(){
        //second parameter is foreign_key
        return $this->hasMany('App\Models\User_Review','reviewer');
    }

    /**
     * Get all user reviews that user participated as a reviewee
     */
    public function userReviewee(){
        //second parameter is foreign_key
        return $this->hasMany('App\Models\User_Review','reviewee');
    }

    /**
     * Get all affiliate reviews that user participated as a reviewer
     */
    public function affiliateReviewer(){
        return $this->hasMany('App\Models\Affiliate_Review','reviewer');
    }

    /**
     * Get all affiliate reviews that user participated as a reviewee
     */
    public function affiliateReviewee(){
        return $this->hasMany('App\Models\Affiliate_Review','reviewee');
    }

    /**
     * Get average rate of user participated as user
     */
    public function avgRateAsUser(){

        $rate = 0;//initial rate
        $num = count($this->affiliateReviewee); //get the number of reviews to this user

        //if no any review
        if($num == 0){

            return 5;
        }
        else{

            //get all reviews
            foreach($this->affiliateReviewee as $review){
                $rate += $review->rate; //rate of each revieew
            }

            $rate = $rate/$num; //calculate average rate
        }

        return $rate;

    }

    /**
     * Get average rate of user participated as affiliate
     */
    public function avgRateAsAffiliate(){

        $rate = 0;//initial rate
        $num = count($this->userReviewee); //get the number of reviews to this user

        //if no any review
        if($num == 0){

            return 5;
        }
        else{

            //get all reviews
            foreach($this->userReviewee as $review){
                $rate += $review->rate; //rate of each revieew
            }

            $rate = $rate/$num; //calculate average rate
        }

        return $rate;

    }

    /**
     * Return all posted tasks by user
     * @return HasMany
     */
    public function tasks(){

        return $this->hasMany('App\Models\Posted_Task','task_poster');

    }

    /**
     * return all offers by affiliates
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public  function offers(){
        return $this->hasMany('App\Models\Sent_Offer','offer_maker');
    }

}
