@extends('admin.master')
@section('content')
    <section class="content-header">
        <h1>
        	News
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
		<br><div class="col-xs-2 text-left">
	        <a href="{{ URL::to('admin/user/create') }}" class="btn btn-block btn-social btn-instagram">
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
		        <th width="25%">Judul</th>
		        <th width="25%">Konten</th>
	        	<th width="25%">Tanggal</th>
	        	<th width="10%" class="text-center">Poster</th>
	        	<th width="10%">Action</th>
	      	</tr>
	    </thead>
	    <tbody>
	    	
	    </tbody>
	    <tfoot>
	      	<tr>
	       		<th class="text-center">No</th>
		        <th>Judul</th>
		        <th>Konten</th>
	        	<th>Tanggal</th>
	        	<th class="text-center">Poster</th>
	        	<th>Action</th>
	      	</tr>
	    </tfoot>
	  	</table>
	</div><!-- /.box-body -->
    </section><!-- /.content -->
@endsection
