@extends('layouts.admindesign')


@section('content')

<!-- Begin: Topbar -->
@include('partials.content-header',['title'=>'FAQ Modifier'])
<!-- End: Topbar -->

<!-- Begin: Content -->
<section id="content">

    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">Standard Fields</span>
        </div>
        <div class="panel-body">

            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Static Field</label>
                    <div class="col-lg-8">
                        <div class="bs-component">
                            <p class="form-control-static text-muted">email@example.com</p>
                            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputStandard" class="col-lg-3 control-label">Standard</label>
                    <div class="col-lg-8">
                        <div class="bs-component">
                            <input type="text" id="inputStandard" class="form-control" placeholder="Type Here...">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputSelect" class="col-lg-3 control-label">Select List</label>
                    <div class="col-lg-8">
                        <div class="bs-component">
                            <select class="form-control">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="disabledInput" class="col-lg-3 control-label">Disabled</label>
                    <div class="col-lg-8">
                        <div class="bs-component">
                            <input class="form-control" id="disabledInput" type="text" placeholder="A Disabled Form" disabled="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea1">Text Area Expand</label>
                    <div class="col-lg-8">
                        <div class="bs-component">
                            <textarea class="form-control textarea-grow" id="textArea1" rows="4"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea2">Text Area</label>
                    <div class="col-lg-8">
                        <div class="bs-component">
                            <textarea class="form-control" id="textArea2" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label" for="textArea3">Disabled Text Area</label>
                    <div class="col-lg-8">
                        <div class="bs-component">
                            <textarea class="form-control" id="textArea3" rows="3" disabled=""></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="panel-footer text-center">
            <button type="button" class="btn btn-lg btn-info">Submit</button>

        </div>
    </div>

</section>
<!-- End: Content -->

@stop