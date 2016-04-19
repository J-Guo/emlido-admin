<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Client;

class UsersController extends Controller
{
    /**
     * Get all users instance
     * @return $this
     */
    public function showUserList(){

        $users = Client::whereHas('roles',function($query){
            $query->where('name','user');
        })->get();

        return view('user-list')->with('users',$users);
    }

    /**
     * Show user detail
     * View
     */
    public function showUserDetail($userid){

        $user =Client::find($userid);

//        dd($user);

        return view('user')->with('user',$user);

    }


    /**
     * show affiliate list
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAffiliateList(){

        //get all affiliates
        $affiliates = Client::whereHas('roles',function($query){
            $query->where('name','affiliate');})
            ->orderBy('id','asc')
            ->get();

        return view('affiliate-list')->with('affiliates',$affiliates);
    }

    /**
     * Show one affiliate detail
     * @param $id
     * @return $this
     */
    public function showAffiliate($id){

        $affiliate = Client::find($id);

        return view('affiliate')->with('affiliate',$affiliate);

    }


}
