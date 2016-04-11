@extends('layouts.admindesign')


@section('content')

<!-- Begin: Topbar -->
@include('partials.content-header',['title'=>'SMS Sender'])
<!-- End: Topbar -->

<!-- Begin: Content -->
<section id="content">

    <!-- Show Session Message-->
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="fa fa-check pr10"></i>
            SMS Sent Successful!
        </div>
    @endif

    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">SMS Sender Form</span>
        </div>
        <div class="panel-body">

            <form id="smsForm" class="form-horizontal" role="form" action="{{url('send-sms')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="mobile" class="col-lg-3 control-label">Receiver Mobile</label>
                    <div class="col-lg-8">
                        <div class="bs-component">
                            <input type="text" id="mobile" name="mobile"
                                   class="form-control" placeholder="Input Mobile Heres">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label" for="smsBody">Message</label>
                    <div class="col-lg-8">
                        <div class="bs-component">
                            <textarea class="form-control" style="resize:none;" name="smsBody" id="smsBody" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="panel-footer text-center">
            <button type="submit" form="smsForm" class="btn btn-lg btn-info">Send</button>
        </div>
    </div>

</section>
<!-- End: Content -->

@stop