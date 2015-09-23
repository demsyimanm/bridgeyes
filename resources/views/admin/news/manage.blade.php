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
	        <a href="{{ URL::to('admin/news/create') }}" class="btn btn-block btn-social btn-instagram">
            	<i class="fa fa-plus"></i> Tambah News
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
		        <th width="20%">Judul</th>
		        <th width="25%">Konten</th>
	        	<th width="15%">Tanggal</th>
	        	<th width="10%">Poster</th>
	        	<th width="15%">Penulis</th>
	        	<th width="10%">Action</th>
	      	</tr>
	    </thead>
	    <tbody>
	    	@foreach($news as $new)
	      	<tr>
	      		<td class="text-center"><?php echo $i++ ?></td>
	      		<td><a href="{{ URL::to('admin/news/update/'. $new->id) }}" >{{$new->judul}}</td>
	      		<td><?php echo substr(nl2br($new->konten),0,30)." ..."; ?></td>
	      		<td>{{$new->tanggal }}</td>
	      		<td><img src="{{URL::to(substr($new->gambar,6))}}" style="width:90%"> </td>
	      		<td>{{$new->users->username }}</td>
	      		<td>
	      				<a href="{{ URL::to('admin/news/update/'. $new->id) }}" class="btn btn-default"><i class="fa fa-pencil"></i>
	      				<a href="{{ URL::to('admin/news/delete/'. $new->id) }}" class="btn btn-default" ><i class="fa fa-times"></i>
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
	        	<th>Action</th>
	      	</tr>
	    </tfoot>
	  	</table>
	</div><!-- /.box-body -->
    </section><!-- /.content -->
@endsection
