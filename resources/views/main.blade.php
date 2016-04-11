@extends('layouts.admindesign')


@section('content')

    <!-- Begin: Topbar -->
    @include('partials.content-header',['title'=>'Dashboard'])
    <!-- End: Topbar -->

    <!-- Begin: Content -->
    <section id="content">

        <div class="row mb10" id="spy4">

            <div class="col-sm-4 col-md-3">
                <div class="bs-component">
                    <div class="panel panel-tile text-center br-a br-light">
                        <div class="panel-body bg-light">
                            <i class="fa fa-male text-info-darker fs45 br64 bg-light dark p15 ph20 mt10"></i>
                            <h1 class="fs35 mbn">45</h1>
                            <h4 class="text-system">Users</h4>
                        </div>
                        <div class="panel-footer bg-light dark br-t br-light p12">
                            <button type="button" onclick="location.href='{{url('users')}}'" class="btn btn-lg btn-primary btn-block">User List</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="bs-component">
                    <div class="panel panel-tile text-center br-a br-light">
                        <div class="panel-body bg-light">
                            <i class="fa fa-female text-alert-light fs45 br64 bg-light dark p15 ph20 mt10"></i>
                            <h1 class="fs35 mbn">26</h1>
                            <h4 class="text-system">Affiliates</h4>
                        </div>
                        <div class="panel-footer bg-light dark br-t br-light p12">
                            <button type="button"  onclick="location.href='{{url('affiliates')}}'" class="btn btn-lg btn-alert btn-block">Affiliate List</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="bs-component">
                    <div class="panel panel-tile text-center br-a br-light">
                        <div class="panel-body bg-light">
                            <i class="fa fa-check text-danger-dark fs45 br64 bg-light dark p15 ph20 mt10"></i>
                            <h1 class="fs35 mbn">18</h1>
                            <h4 class="text-system">Completed Tasks</h4>
                        </div>
                        <div class="panel-footer bg-light dark br-t br-light p12">
                            <button type="button"  onclick="location.href='{{url('tasks')}}'" class="btn btn-lg btn-danger btn-block">Task List</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-md-3">
                <div class="bs-component">
                    <div class="panel panel-tile text-center br-a br-light">
                        <div class="panel-body bg-light">
                            <i class="fa fa-dollar text-warning-lighter fs45 br64 bg-light dark p15 ph20 mt10"></i>
                            <h1 class="fs35 mbn">26</h1>
                            <h4 class="text-system">Sent Offers</h4>
                        </div>
                        <div class="panel-footer bg-light dark br-t br-light p12">
                            <button type="button"  onclick="location.href='{{url('offers')}}'" class="btn btn-lg btn-warning btn-block">Offer List</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End: Content -->

@stop