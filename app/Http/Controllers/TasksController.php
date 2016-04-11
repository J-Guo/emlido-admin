<?php

namespace App\Http\Controllers;

use App\Models\Posted_Task;
use App\Models\Sent_Offer;
use Illuminate\Http\Request;
use App\Http\Requests;

class TasksController extends Controller
{

    /**
     * show posted tasks list
     * @return $this
     */
    public function showTaskList(){


        //get all posted tasks
        $tasks = Posted_Task::all();

        return view('task-list')->with('tasks',$tasks);
    }

    public function showOfferList(){

        //get all offers
        $offers = Sent_Offer::all();

        return view('offer-list')->with('offers',$offers);
    }
}
