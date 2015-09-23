@extends('admin.master')
@section('content')
    <section class="content-header">
        <h1>
        	Event Dashboard
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
	        <a href="{{ URL::to('admin/event/create') }}" class="btn btn-block btn-social btn-instagram">
            	<i class="fa fa-plus"></i> Tambah Event
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
		        <th width="28%">Judul<span style="font-size:10px;"> &nbsp;(click the title to edit/view contents)</span></th>
		        <th width="17%">Konten</th>
		        <th width="10%">Tanggal</th>
		        <th width="10%">Poster</th>
	        	<th width="10%">Penulis</th>
	        	<th width="10%">File</th>
	        	<th width="10%">Action</th>
	      	</tr>
	    </thead>
	    <tbody>
	    	@foreach($event as $eve)
	      	<tr>
	      		<td class="text-center"><?php echo $i++ ?></td>
	      		<td><a href="{{ URL::to('admin/event/update/'.$eve->id) }}" >{{ $eve->judul }}</td>
	      		<td><?php echo substr(nl2br($eve->konten),0,30)." ..."; ?></td>
	      		<td>{{$eve->tanggal}}</td>
	      		<td><img src="{{URL::to(substr($eve->gambar,6))}}" style="width:80%"></td>
	      		<td>{{$eve->users->username }}</td>
	      		<td>
	      			@if(!empty($eve->file))
	      				<a href="{{URL::to(substr($eve->file,6)) }}" class="btn btn-default" style="margin:auto;position:relative;display:block" download><i class="fa fa-download"></i> Download</a>
	      			@else 
	      				<p>No File</p>
	      			@endif
	      		</td>
	      		<td>
	      				<a href="{{ URL::to('admin/event/update/'.$eve->id) }}" class="btn btn-default"><i class="fa fa-pencil"></i>
	      				<a href="{{ URL::to('admin/event/delete/'.$eve->id) }}" class="btn btn-default" ><i class="fa fa-times"></i>
	      		</td>
	      	</tr>
	      	@endforeach
	    </tbody>
	    <tfoot>
	      	<tr>
	       		<th class="text-center">No</th>
		        <th>Judul</th>
		        <th>Konten</th>
		        <th>Tanggal</th>
		        <th>Poster</th>
	        	<th>Penulis</th>
	        	<th>File</th>
	        	<th>Action</th>
	      	</tr>
	    </tfoot>
	  	</table>
	</div><!-- /.box-body -->
    </section><!-- /.content -->
@endsection
