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
      	</div><br><br>

      	<div class="small-box bg-aqua col-md-3">
	        <div class="inner">
	          <h3>150</h3>
	          <p>New Orders</p>
	        </div>
	        <div class="icon">
	          <i class="fa fa-shopping-cart"></i>
	        </div>
	        <a href="#" class="small-box-footer">
	          More info <i class="fa fa-arrow-circle-right"></i>
	        </a>
        </div>
	</div><!-- /.box-body -->
    </section><!-- /.content -->
@endsection
