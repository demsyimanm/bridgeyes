@extends('admin.master')
@section('content')
    <section class="content-header">
        <h1>
        	Users Dashboard
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
	<div class="box-body">
		<br><div class="col-xs-3 text-left">
	        <a href="{{ URL::to('admin/users/create') }}" class="btn btn-block btn-social btn-instagram">
            	<i class="fa fa-plus"></i> Tambah User
          	</a>
      	</div><br><br><br>
		<script> 
		    $(function () {
		    	$("#data_table").DataTable();
		    });
	    </script>
	  	<table id="data_table" class="table table-bordered table-striped">
	  	<?php $i = 1;?>
	    <thead>
		    <tr>
		        <th width="5%" class="text-center">No</th>
		        <th width="20%">Nama</th>
		        <th width="20%">Username</th>
		        <th width="30%">Foto Profil</th>
		        <th width="10%">Role</th>
	        	<th width="15%">Action</th>
	      	</tr>
	    </thead>
	    <tbody>
	    	@foreach($users as $user)
	      	<tr>
	      		<td class="text-center"><?php echo $i++ ?></td>
	      		<td><a href="" >{{ $user->nama }}</td>
	      		<td>{{ $user->username }}</td>
	      		<td><img src="{{$user->gambar}}" style="width:25%"></td>
	      		<td>{{ $user->role_id }}</td>
	      		<td>
	      				<a href="{{ URL::to('admin/users/update/'.$user->id) }}" class="btn btn-default"><i class="fa fa-pencil"></i>
	      				<a href="{{ URL::to('admin/users/delete/'.$user->id) }}" class="btn btn-default" ><i class="fa fa-times"></i>
	      		</td>
	      	</tr>
	      	@endforeach
	    </tbody>
	    <tfoot>
	      	<tr>
	       		<th class="text-center">No</th>
		        <th>Nama</th>
		        <th>Username</th>
		        <th>Foto Profil</th>
	        	<th>Role</th>
	        	<th>Action</th>
	      	</tr>
	    </tfoot>
	  	</table>
	</div><!-- /.box-body -->
    </section><!-- /.content -->
@endsection
