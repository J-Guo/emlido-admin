@extends('layouts.admindesign')

@section('content')


<!-- Begin: Topbar -->
@include('partials.content-header',['title'=>'Task List'])
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
                        <th>Task Poster</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Last Action</th>
                        <th>Status</th>
                    </tr>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td><a href="{{url('users/'.$task->poster->id)}}">{{$task->poster->display_name}}</a></td>
                            <td>{{$task->price}}</td>
                            <td>{{$task->date}}</td>
                            <td>{{$task->updated_at}}</td>
                            <td>@include('partials.task-status',['status'=>$task->status])</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>


</section>



@stop
