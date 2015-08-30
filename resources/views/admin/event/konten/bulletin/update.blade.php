@extends('admin.master')
@section('content')
    <section class="content-header">
        <h1>
          Update Bulletin for {{$event->judul}}
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
    <br><br>
    <div style="border:solid 2px #D9DCE0;background-color:#F5F5F5">
      <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="form-group" style="margin-top:1%">
          <label class="col-md-2 control-label">Tanggal</label>
          <div class="col-md-6">
            <input type="text" class="form-control datepicker" name="tanggal" valeu="{{$bull->tanggal}}" placeholder="Tanggal">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">File</label>
          <div class="col-md-6">
             <input type='file' class="form-control" style="" name="file"/>
             <input type='hidden' class="form-control" style="" name="file_temp" value="{{$bull->file }}" />     
             <br><b>Uploaded File : </b><p style="margin-left:5%;font-size:16px"><?php echo substr($bull->file,28); ?></p>
          </div>
        </div><br>
        <div class="form-group">
            <label class="col-md-2 control-label"></label>
            <div class="col-md-6">
              <button type="submit" class="btn btn-primary" style="">Submit</button>
            </div>
            
        </div>
      </form>
    </div>
      
    <br><br>
    
  </div><!-- /.box-body -->
    </section><!-- /.content -->
    <script type="text/javascript">
        $('.datepicker').datepicker({
          format: 'yyyy/mm/dd',
          startDate: '-3d',
          clearBtn: true,
           autoclose: true
      });
    </script>
@endsection
