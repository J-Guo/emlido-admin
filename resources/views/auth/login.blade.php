@extends('layouts.login')

@section('content')
    <section id="content">

        <div class="admin-form theme-info" id="login1">

            <div class="panel panel-info mt10 br-n">

                <!-- end .form-header section -->
                <form action="{{url('login')}}" method="POST" id="loginForm">
                    {{csrf_field()}}
                    <div class="panel-body bg-light p30">
                        <div class="row">
                            <div class="col-sm-7 pr30">

                                <div class="section">
                                    <label for="email" class="field-label text-muted fs18 mb10">Username</label>
                                    <label for="email" class="field prepend-icon">
                                        <input type="text" name="email" id="email" class="gui-input" placeholder="Email">
                                        <label for="username" class="field-icon">
                                            <i class="fa fa-email"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- end section -->

                                <div class="section">
                                    <label for="username" class="field-label text-muted fs18 mb10">Password</label>
                                    <label for="password" class="field prepend-icon">
                                        <input type="password" name="password" id="password" class="gui-input" placeholder="Password">
                                        <label for="password" class="field-icon">
                                            <i class="fa fa-lock"></i>
                                        </label>
                                    </label>
                                </div>
                                <!-- end section -->

                            </div>
                            <div class="col-sm-5 br-l br-grey pl30">
                                <h3 class="mb25"> You'll Have Access To:</h3>
                                <p class="mb15">
                                    <span class="fa fa-check text-success pr5"></span> User List</p>
                                <p class="mb15">
                                    <span class="fa fa-check text-success pr5"></span> Affiliate List</p>
                                <p class="mb15">
                                    <span class="fa fa-check text-success pr5"></span> Offer List</p>
                                <p class="mb15">
                                    <span class="fa fa-check text-success pr5"></span> Task List</p>
                            </div>
                        </div>
                    </div>
                    <!-- end .form-body section -->
                    <div class="panel-footer clearfix p10 ph15">
                        <input type="submit" form="loginForm" class="button btn-primary mr10 " value="Sign In">
                    </div>
                    <!-- end .form-footer section -->
                </form>
            </div>
        </div>

    </section>
@stop