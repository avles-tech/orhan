@extends('layout.admin')
@section('contitle')
<title>{{$pagetitle}}</title>
<!-- Lightbox links -->
<link rel="stylesheet" type="text/css" href="{{asset('/Admin/css/strip.css')}}"/>
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
                        <li class="breadcrumb-item active">Galleries Images</li>
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
                                <h4 class="card-title">Orhan's Gallery Images</h4>
                                <h6 class="card-subtitle">Publish your creative images!</h6>
                                @include('inc.messages')
                                <div class="table-responsive m-t-40">
                                    <div class="clearfix">
                                        <a href="/galleryImageSection/create" class="btn btn-sm btn-success"><i class="ace-icon fa fa-upload bigger-80"></i> Upload Images</a>
                                         <a href="/galleryImageSection" class="btn btn-sm btn-warning"><i class="ace-icon fa fa-refresh bigger-80"></i> Relaod</a>
                                        <div class="pull-right tableTools-container"></div>
                                    </div>
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Image</th>
                                                <th>Gallery Name</th>
                                                <th>Description</th>
                                                <th>Updated Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        @if(count($gallery_images)>0)
                                            @foreach($gallery_images as $gallery)
                                            
                                            <tr class="center">
                                            {!!Form::open(['action' => ['GalleryImageController@destroy', $gallery->id], 'method' => 'POST', 'class' => 'pull-right', 'onsubmit' => 'return confirmDelete()'])!!}
                                            {!! Form::hidden('_method', 'DELETE')!!}
                                                <td>{{$gallery->id}}</td>
                                                <td>
                                                    <a href="/Uploads/gallery_images/{{$gallery->image}}" class="strip"  data-strip-group="shared-options" data-strip-caption="{{$gallery->image}}" data-strip-options="side: 'top' " data-strip-group-options="loop: false"><img style="width:100px;height:60px; border-style: solid;
                                                    border-color: #92a8d1;border-width: 1.5px;" src="/Uploads/gallery_images/{{$gallery->image}}" class="img-responsive" alt="{{$gallery->image}}"></a>
                                                </td>
                                                <td>
                                                    <?php
                                                    $getgalName=DB::table('galleries')->where('id',$gallery->gallery_id)->first();
                                                    echo $getgalName->name;
                                                    ?>

                                                </td>
                                                <td>{{$gallery->description}}</td>
                                                <td>{{$gallery->updated_at}}</td>
                                                <td>
                                                    
                                                <a class="btn btn-success btn-rounded" target="_blank" href="/Portfolio/{{$getgalName->name}}">
                                                    <i class="fa fa-eye"></i>                                            
                                                </a>
                                                <a class="btn btn-info btn-rounded" href="/galleryImageSection/{{$gallery->id}}/edit">
                                                    <i class="fa fa-edit"></i>                                            
                                                </a>                                                
                                                <button type="submit" class="btn btn-danger btn-rounded">                                            
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                </td>
                                                {!!Form::close()!!}
                                            </tr>
                                            @endforeach
                                            @else
                                            <tr>
                                                <td>
                                                    <div class="alert alert-danger alert-dismissible fade show">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <strong><i class="ace-icon fa fa-exclamation-triangle bigger-120"></i> OOP's!</strong> No results found!<br />
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
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
    <!-- All Jquery -->
    <script type="text/javascript">
        function confirmDelete() {
            var result = confirm('Are you sure you want to remove?');
            if (result) { return true; }
            else { return false; }
        }
    </script>
    <script src="{{asset('/Admin/js/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/Admin/js/lib/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('/Admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('/Admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('/Admin/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')}}"></script>
    <script src="{{asset('/Admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('/Admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('/Admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('/Admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('/Admin/js/lib/datatables/datatables-init.js')}}"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="{{asset('/Admin/js/strip.pkgd.min.js')}}"></script>
@endsection
