@extends('layouts.admindesign')

@section('content')

<!-- Begin: Topbar -->
@include('partials.content-header',['title'=>'User Information'])
<!-- End: Topbar -->

<!-- Begin: Content -->
<section id="content">

    <!-- User Basic Information -->

    <div class="row">
        <div class="col-md-4">
            <div class="profile-pic text-center">
                <img src="{{url("avatars/".$user->profile_photo)}}"
                style="    width: 100px;
                            height: 100px;
                            border-radius: 50%;
                            -webkit-border-radius: 50%;
                            border: 10px solid #f1f2f7;
                            margin-top: 20px;">
                <div class="media-links">
                    <ul class="list-inline list-unstyled">
                        <li>
                            <a href="#" title="View Profile">
                                <span class="fa fa-picture-o fs35 text-danger"></span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#" title="Braintree">
                                <span class="fa fa-dollar fs35 text-system"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Send SMS">
                                <span class="fa fa-envelope-square fs35 text-muted"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- User Recent Activities-->
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading">
                  <span class="panel-icon">
                    <i class="fa fa-star"></i>
                  </span>
                    <span class="panel-title">Personal Information</span>
                </div>
                <div class="panel-body pn">
                    <table class="table mbn tc-icon-1 tc-med-2 tc-bold-last">
                        <tbody>
                        <tr>
                            <td>
                                <span class="fa fa-user text-warning"></span>
                            </td>
                            <td>Display Name</td>
                            <td>{{$user->display_name}}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-map-marker text-primary"></span>
                            </td>
                            <td>Last Location</td>
                            <td>{{$address}}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-star text-info"></span>
                            </td>
                            <td>Avage Rates</td>
                            <td>
                                <span class="fa fa-star fs26 text-warning-light"></span>
                                <span class="fa fa-star fs26 text-warning-light"></span>
                                <span class="fa fa-star fs26 text-warning-light"></span>
                                <span class="fa fa-star fs26 text-warning-light"></span>
                                <span class="fa fa-star fs26"></span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- User Recent Activities-->
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading">
                  <span class="panel-icon">
                    <i class="fa fa-star"></i>
                  </span>
                    <span class="panel-title">Recent Activity</span>
                </div>
                <div class="panel-body pn">
                    <table class="table mbn tc-icon-1 tc-med-2 tc-bold-last">
                        <tbody>
                        <tr>
                            <td>
                                <span class="fa fa-tasks text-warning"></span>
                            </td>
                            <td>Posted Task</td>
                            <td>{{sizeof($user->tasks)}}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-check text-primary"></span>
                            </td>
                            <td>Completed Task</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-dollar text-info"></span>
                            </td>
                            <td>Total Cost</td>
                            <td>
                               $200
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Posted Tasks By User-->
    <div class="row">
    <div class="panel">
        <div class="panel-heading">
              <span class="panel-title">
                <span class="fa fa-table"></span>Posted Tasks</span>
        </div>
        <div class="panel-body pn">
            <div class="bs-component">
                <!-- If user has posted any task-->
                @if($user->tasks)
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Last Action</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user->tasks as $task)
                            <tr>
                                <td>{{$task->id}}</td>
                                <td>{{$task->price}}</td>
                                <td>{{$task->date}}</td>
                                <td>{{$task->updated_at}}</td>
                                <td>@include('partials.task-status',['status'=>$task->status])</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                @endif

            </div>
        </div>
    </div>
    </div>



</section>

@stop
