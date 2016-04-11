<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class PagesController extends Controller
{
    public function showMainPage(){


        return view('main');

    }

    /**
     * show FAQ modifier
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showFAQModifier(){

        return view('faq-modifier');

    }

    /**
     * show send sms page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showSendSMS(){

        return view('send-sms');
    }

    /**
     * handle send SMS action
     */
    public function sendSMS(Request $request){

//        dd($request->input());

        $mobile  = $request->input('mobile');

        return redirect('send-sms')->with('message','Review has been made');

    }


}
