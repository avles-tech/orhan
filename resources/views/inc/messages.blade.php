@if(count($errors)>0)
    @foreach($errors->all() as $error)
	<div class="alert alert-warning alert-dismissible fade show">
    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <i class="ace-icon fa fa-info-circle yellow"></i>
        <strong Style="color:red">Error!</strong>{{$error}}
    </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-info alert-dismissible fade show">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<i class="ace-icon fa fa-check green"></i>
		<strong Style="color:green"> Success! </strong>{{ session('success') }}
	</div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<i class="ace-icon fa fa-remove red"></i>
		<strong Style="color:red"> Error! </strong>{{ session('error') }}
	</div>
@endif 
