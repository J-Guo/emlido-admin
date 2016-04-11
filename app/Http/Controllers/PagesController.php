<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Services_Twilio_RestException;

class PagesController extends Controller
{
    use SmsTrait;

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
    public function sendMessage(Request $request){

        $this->validate($request,[

            'mobile' =>'required|numeric',
            'smsBody' =>'required',

        ]);

        $mobile  = $request->input('mobile');
        $smsBody = $request->input('smsBody');

        try{
        $this->sendSMS($mobile,$smsBody);

        return redirect('send-sms')->with('message','Message has been sent successfully');
        }
        catch(Services_Twilio_RestException $e){
        return redirect('send-sms')->with('twilioError',$e->getMessage());
        }

    }


}
