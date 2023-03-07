@extends('layout.admin')
@section('contitle')
<title>{{$pagetitle}}</title>
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
                        <li class="breadcrumb-item"><a href="/videoSection">Videos</a></li>
                        <li class="breadcrumb-item active">Create video link</li>
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
                                <h4 class="card-title">Create Video Link</h4>
                                <h6 class="card-subtitle"> Make your video links!</h6>
                                @include('inc.messages')
                                <div class="row">
                                        <div class="col-lg-12 card-outline-info">
                                            <div class="card-header">
                                                    <h4 class="m-b-0 text-white">Fill the Video Information</h4>
                                            </div>
                                            <div class="card">
                                                <div class="card-title">
                                                </div>
                                                <div class="card-body">
                                                    <div class="basic-elements">
                                                    {!! Form::open(['action' => 'VideoController@store', 'role' => 'form', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label>Title</label>
                                                                        <input type="text" name="title" class="form-control" required placeholder="Title">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>URL</label>
                                                                        <input type="text" name="url" class="form-control" required placeholder="Video URL">
                                                                    </div>
                                                                    <hr>
                                                                        <div class="wizard-actions">
                                                                            <a href="/videoSection" class="btn btn-danger">
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