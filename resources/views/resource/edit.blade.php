@extends('layout.admin')
@section('contitle')
<title>{{$pagetitle}}</title>
<link rel="stylesheet" href="{{asset('/Admin/css/lib/html5-editor/bootstrap-wysihtml5.css')}}" />
@endsection
@section('content')
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="/resourceSection">Resource</a></li>
                        <li class="breadcrumb-item active">Edit Resource</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Resource</h4>
                                <h6 class="card-subtitle"> Make your own artical!</h6>
                                @include('inc.messages')
                                <div class="row">
                                        <div class="col-lg-12 card-outline-info">
                                            <div class="card-header">
                                                <h4 class="m-b-0 text-white">Fill the Resource Information</h4>
                                            </div>
                                            <div class="card">
                                                <div class="card-title">
                                                </div>
                                                <div class="card-body">
                                                    <div class="basic-elements">
                                                    {!! Form::open(['action' => ['ResourceController@update',$resources->id], 'role' => 'form', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!} 
                                                    {{Form::hidden('_method', 'PUT')}}
                                                    <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label>Name</label>
                                                                        <input type="text" value="{{$resources->name}}" name="name" class="form-control" required placeholder="News Title">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Description</label>
                                                                        <textarea class="textarea_editor form-control" name="description" rows="3" required style="height:250px" placeholder="" >{{$resources->description}}</textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Attach File</label>
                                                                        <div class="form-group">
                                                                            <ul class="list-group w3-agile">
                                                                            
                                                                                <li class="list-group-item">Exsist file: <b>{{$resources->file}}</b> <button type="button" class="close" ><i class="fa fa-check" style="color:green"></i></button></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input class="well" name="image" type="file" />
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                        <div class="wizard-actions">
                                                                            <a href="/resourceSection" class="btn btn-danger">
                                                                                <i class="ace-icon fa fa-arrow-left"></i>
                                                                                Back
                                                                            </a>
                                                                            <button type="reset" class="btn btn-warning">
                                                                                <i class="ace-icon fa fa-refresh"></i>
                                                                                Reset
                                                                            </button>
                                                                            <button type="submit" class="btn btn-success btn-next" data-last="Finish">
                                                                                Submit
                                                                                <i class="ace-icon fa fa-check icon-on-right"></i>
                                                                            </button>
                                                                        </div>
                                                                </div>
                                                                
                                                            </div>
                                                        {!! Form::close() !!} 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div> <!--row end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
@endsection