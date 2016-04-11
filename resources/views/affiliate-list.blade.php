@extends('layouts.admindesign')

@section('content')


<!-- Begin: Topbar -->
@include('partials.content-header',['title'=>'Affiliate List'])
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
                        <th>mobile</th>
                        <th>display name</th>
                        <th>age</th>
                        <th>gender</th>
                        <th>latitude</th>
                        <th>longitude</th>
                        <th>Action at</th>
                    </tr>
                    @foreach($affiliates as $affiliate)
                        <tr>
                            <td>{{$affiliate->id}}</td>
                            <td><a href="{{url('affiliates/'.$affiliate->id)}}">{{$affiliate->mobile}}</a></td>
                            <td>{{$affiliate->display_name}}</td>
                            <td>{{$affiliate->age}}</td>
                            <td>{{$affiliate->gender}}</td>
                            <td>{{$affiliate->latitude}}</td>
                            <td>{{$affiliate->longitude}}</td>
                            <td>{{$affiliate->updated_at}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>


</section>



@stop
