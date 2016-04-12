<?php

namespace App\Http\Controllers;

use App\Models\Posted_Task;
use App\Models\Sent_Offer;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Services_Twilio_RestException;

class PagesController extends Controller
{
    use SmsTrait;

    /**
     * show dashboard page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showMainPage(){

        //get the number of users
        $user_num = User::whereHas('roles',function($query){
            $query->where('name','user');
        })->count();

        //get the number of affiliates
        $affiliate_num = User::whereHas('roles',function($query){
            $query->where('name','affiliate');
        })->count();

        //get the number of tasks
        $task_num = Posted_Task::all()->count();
        //get the number of offers
        $offer_num = Sent_Offer::all()->count();

        return view('main')->with('user_num',$user_num)
                           ->with('affiliate_num',$affiliate_num)
                           ->with('task_num',$task_num)
                           ->with('offer_num',$offer_num);
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
