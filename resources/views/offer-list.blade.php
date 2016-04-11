@extends('layouts.admindesign')

@section('content')


<!-- Begin: Topbar -->
@include('partials.content-header',['title'=>'Offer List'])
<!-- End: Topbar -->

<!-- Begin: Content -->
<section id="content">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <table id="userTable"
                       class="table table-striped" style="white-space: nowrap">
                    <tr>
                        <th>id</th>
                        <th>Offer Sender</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Last Action</th>
                        <th>Status</th>
                    </tr>
                    @foreach($offers as $offer)
                        <tr>
                            <td>{{$offer->id}}</td>
                            <td><a href="{{url('affiliates/'.$offer->sender->id)}}">{{$offer->sender->display_name}}</a></td>
                            <td>{{$offer->price}}</td>
                            <td>{{$offer->date}}</td>
                            <td>{{$offer->updated_at}}</td>
                            <td>@include('partials.offer-status',['status'=>$offer->status])</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>


</section>



@stop
