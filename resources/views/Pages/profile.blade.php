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
                        <li class="breadcrumb-item active">User Profile Setting</li>
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
                                <h4 class="card-title">Hello - {{Auth::user()->name}}! </h4>
                                <h6 class="card-subtitle"> Make your own Preferance!</h6>
                                @include('inc.messages')
                                <div class="row">
                                        <div class="col-lg-12 card-outline-info">
                                            <div class="card-header">
                                                <h4 class="m-b-0 text-white">Updated your Information</h4>
                                            </div>
                                            <div class="card">
                                                <div class="card-title">
                                                </div>
                                                <div class="card-body">
                                                    <div class="basic-elements">
                                                    {!! Form::open(['action' => ['DashboardController@updateUser',1], 'role' => 'form', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!} 
                                                    {{Form::hidden('_method', 'PUT')}}
                                                    <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label>Name</label>
                                                                        <input type="text" id="name" readonly value="{{Auth::user()->name}}" name="name" class="form-control" required placeholder="User Name">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>E-mail</label>
                                                                        <input name="email" id="email" readonly value="{{Auth::user()->email}}" class="form-control" type="email" required placeholder="Email">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Password</label>
                                                                        <input id="password" type="password" readonly name="password" class="form-control" required >
                                                                    </div>
                                                                    <div class="form-group" id="pwd_confirm" style="display:none">
                                                                        <label>Confirm Password</label>
                                                                        <input type="password" id="password-confirm" readonly name="password_confirmation" class="form-control" required>
                                                                    </div>
                                                                    
                                                                    <hr>
                                                                        <div class="wizard-actions">
                                                                        <button type="button" id="edit_btn" class="btn btn-success">Edit Profile</button>
                                                                        <button style="display:none" type="reset" id="reset_btn" class="btn btn-info">Reset</button>
                                                                        {{Form::hidden('_method', 'PUT')}}
                                                                        {{ Form::submit('Submit',['class'=>'btn btn-warning','style'=>'display:none', 'id'=>'submit_btn' ,'name'=>'Save changes'])}}
                                                                        <button style="display:none" type="reset" class="btn" id="cancel_btn">Cancel</button>
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
    <script>
        //:Edit button Event
        document.getElementById('edit_btn').onclick = function() {
            document.getElementById('name').readOnly = false;
            document.getElementById('email').readOnly = false;
            document.getElementById('password').readOnly = false;
            document.getElementById('password-confirm').readOnly = false;
            var edit_btn=document.getElementById('edit_btn');
            var submit_btn=document.getElementById('submit_btn');
            var cancel_btn=document.getElementById('cancel_btn');
            var reset_btn=document.getElementById('reset_btn');
            var pwdConfirm=document.getElementById('pwd_confirm');
            
            //:Hide the button
            edit_btn.style.display='none';

            //: Show the button
            submit_btn.style.display='';
            cancel_btn.style.display='';
            reset_btn.style.display='';
            pwdConfirm.style.display='';
            document.getElementById('password').value="";
        };

        //:Cancel button Event
        document.getElementById('cancel_btn').onclick = function() {
            document.getElementById('name').readOnly = true;
            document.getElementById('email').readOnly = true;
            document.getElementById('password').readOnly = true;
            var edit_btn=document.getElementById('edit_btn');
            var submit_btn=document.getElementById('submit_btn');
            var cancel_btn=document.getElementById('cancel_btn');
            var reset_btn=document.getElementById('reset_btn');
            var pwdConfirm=document.getElementById('pwd_confirm');
            
            //:Hide the button
            edit_btn.style.display='';

            //: Show the button
            submit_btn.style.display='none';
            cancel_btn.style.display='none';
            reset_btn.style.display='none';
            pwdConfirm.style.display='none';
        };
</script>
@endsection