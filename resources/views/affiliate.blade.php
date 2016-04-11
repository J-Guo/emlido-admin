@extends('layouts.admindesign')

@section('content')

<!-- Begin: Topbar -->
@include('partials.content-header',['title'=>'Affiliate Information'])
<!-- End: Topbar -->

<!-- Begin: Content -->
<section id="content">

    <!-- User Basic Information -->

    <div class="row">
        <div class="col-md-4">
            <div class="profile-pic text-center">
                <img src="{{url("avatars/".$affiliate->profile_photo)}}"
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
                            <td>{{$affiliate->display_name}}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-map-marker text-primary"></span>
                            </td>
                            <td>Last Location</td>
                            <td>{{$affiliate->latitude}}</td>
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
                            <td>Sent Offers</td>
                            <td>{{sizeof($affiliate->offers)}}</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-check text-primary"></span>
                            </td>
                            <td>Completed Offer</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>
                                <span class="fa fa-dollar text-info"></span>
                            </td>
                            <td>Total Earned</td>
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
                <span class="fa fa-table"></span>Sent Offers</span>
            </div>
            <div class="panel-body pn">
                <div class="bs-component">
                    <!-- If user has posted any task-->
                    @if($affiliate->offers)
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
                            @foreach($affiliate->offers as $offer)
                                <tr>
                                    <td>{{$offer->id}}</td>
                                    <td>{{$offer->price}}</td>
                                    <td>{{$offer->date}}</td>
                                    <td>{{$offer->updated_at}}</td>
                                    <td>@include('partials.offer-status',['status'=>$offer->status])</td>
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
