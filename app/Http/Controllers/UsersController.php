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
        // Create a client with a base URI
        $client = new \GuzzleHttp\Client(['base_uri' => 'https://maps.googleapis.com/maps/api/geocode/']);

        //set paramaters
        $latitude = $user->latitude;
        $longitude = $user->longitude;
        $googleMapAPIKey = 'AIzaSyAomTWe6-_JXMoza7hm9olIQLZ8TEq5PdY';
        $result_type = 'political'; //Google Map Api Address Types

        //Send a request to Google Map Geocoding Reverse API
        $response = $client->request('GET', "json?latlng=$latitude,$longitude&result_type=$result_type&key=$googleMapAPIKey");
        //Get response body
        $address_result = json_decode($response->getBody());
        $address ='';

        //if response is ok
        if($address_result->status == 'OK'){

            //get format address from response
            $formatted_address = explode(',',$address_result->results[0]->formatted_address);
            $address = $formatted_address[0];
        }
        else
            $address = "Not Found";

//        dd($user);

        return view('user')->with('user',$user)->with('address',$address);

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
