@extends('admin.master')
@section('content')
    <section class="content-header">
        <h1>
        	Update User
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    @if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="box-body">
			<div class="form-group">
				<label class="col-md-2 control-label">Name</label>
				<div class="col-md-6">
					<input type="text" class="form-control" name="nama" value="{{$user->nama}}">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Username</label>
				<div class="col-md-6">
					<input type="text" class="form-control" name="username" value="{{$user->username}}">
				</div>
			</div>

			<div class="form-group">
	          <label class="col-md-2 control-label">Foto Profil</label>
	          <div class="col-md-6">
	             <input type='file'  id="imginp" class="form-control" style="" name="imginp" value="<?php echo URL::to(substr($user->gambar,3)); ?>" />
	            <input type='hidden' class="form-control" style="" name="img_temp" value="{{$user->gambar}}" />           
	          </div>
	        </div>
	       <div class="form-group">
	          <div class="col-md-6">
	            <label class="col-md-4 control-label"></label>
	            <img id="blah" src="<?php echo URL::to(substr($user->gambar,3)); ?>" style="margin-left:2%;width:30%" />
	            </div>
	       </div>
	       <div class="form-group">
				<label class="col-md-2 control-label">Deskripsi diri</label>
				<div class="col-md-6">
					<textarea type="text" class="form-control" name="deskripsi" style="height:100px;resize:vertical;">{{$user->deskripsi}}</textarea>
				</div>
			</div>
			<div class=" col-md-6 col-md-offset-2 box-footer">
            	<button type="submit" class="btn btn-primary pull-right">Update</button>
        	</div><!-- /.box-footer -->
			
		</div><!-- /.box-body -->
        
	</form>
    </section><!-- /.content -->
     <script>
   function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
            $('#blah').attr('width', "50%");
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#imginp").change(function(){
      readURL(this);
    });
  </script>
@endsection
