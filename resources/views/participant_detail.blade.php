@extends('master.master')
@section('content')
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
        	<a href="index.htm"><img src="img/piccolo-logo.png" alt="" /></a>
            <h5>Big Things... Small Packages</h5>
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        @include('master.navbar')
        
      </div><!-- End Header -->
     
    <!-- Page Content
    ================================================== --> 
    
    <!-- Title Header -->
        <div class="row">
            <div class="span12">
                <h1>List of Participant from xxxx Event</h1>
                <div class="span1"></div>
                <div class="span1"></div>
                <div class="span8">
                    aaaaaaaa
                </div>
                <div class="span1"></div>
                <div class="span1"></div>
            </div>
        </div>
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->
    @include('master.footer')
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
@endsection