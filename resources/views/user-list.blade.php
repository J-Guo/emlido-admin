@extends('layouts.admindesign')

@section('content')


<!-- Begin: Topbar -->
@include('partials.content-header',['title'=>'User List'])
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
                        <th>braintree id</th>
                        <th>display name</th>
                        <th>age</th>
                        <th>gender</th>
                        <th>latitude</th>
                        <th>longitude</th>
                        <th>Action at</th>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td><a href="{{url('users/'.$user->id)}}">{{$user->mobile}}</a></td>
                            <td>{{$user->braintree_id}}</td>
                            <td>{{$user->display_name}}</td>
                            <td>{{$user->age}}</td>
                            <td>{{$user->gender}}</td>
                            <td>{{$user->latitude}}</td>
                            <td>{{$user->longitude}}</td>
                            <td>{{$user->updated_at}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>


</section>



@stop
