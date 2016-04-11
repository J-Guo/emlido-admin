@if($status == "sent" )
<span class="label label-warning">{{$status}}</span>
@elseif($status == "assigned")
<span class="label label-danger">{{$status}}</span>
@elseif($status == "requested")
<span class="label label-info">{{$status}}</span>
@elseif($status == "reviewed")
<span class="label label-success">{{$status}}</span>
@else($status == "expired")
<span class="label label-default">{{$status}}</span>
@endif