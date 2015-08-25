<!DOCTYPE html>
<html lang="en">
@include('admin.header')
<body class="hold-transition skin-blue fixed sidebar-mini">
	<div class="wrapper">
		@include('admin.navadmin')
		<div class="content-wrapper">
			@yield('content')
		</div>
    </div>
@include('admin.footer')	
</body>
</html>
