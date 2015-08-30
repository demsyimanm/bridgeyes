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
            <h2>Full Width Page</h2>
            <p class="lead">When you need all the room you can get. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie.</p>

            <!-- Carousel
            ================================================== -->
            <div class="row">
                <div class="span6">
                    <div class="flexslider">
                      <ul class="slides">
                        <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                        <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                        <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                        <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                        <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                      </ul>
                    </div>
                </div>

                <div class="span6">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <p>Vivamus augue nulla, vestibulum ac ultrices posuere, vehicula ac arcu. Quisque nisi lacus, bibendum quis commodo eget, lobortis eget elit. Cras venenatis mauris eu tortor consequat a convallis nulla molestie. Phasellus malesuada malesuada velit et fermentum. Proin ut leo nec mauris pulvinar volutpat. Sed ac neque nec leo condimentum rhoncus. Nunc dapibus odio et lacus elementum congue. Praesent nulla arcu, condimentum eu lobortis sit amet, pretium vitae metus. </p>

                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Praesent nulla arcu, condimentum eu lobortis.</p>
                        <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                    </blockquote>

                    <button class="btn btn-small btn-inverse" type="button">Find out more</button>
                </div>

            </div>

            <h3 class="title-bg"> This is a sub head divider</h3>
            <div class="row">
                <div id="gambar_participant" class="span3">
                    <a href="{{URL::to('user')}}"><img src="{{URL::to('assets/img/participant.png')}}"></a>
                </div>
                <div id="gambar_result" class="span3">
                    <a href="{{URL::to('user')}}"><img src="{{URL::to('assets/img/result.png')}}"></a>
                </div>
                <div id="gambar_bulletins" class="span3">
                    <a href="{{URL::to('user')}}"><img src="{{URL::to('assets/img/bulletins.png')}}"></a>
                </div>
                <div id="gambar_gallery" class="span3">
                    <a href="{{URL::to('user')}}"><img src="{{URL::to('assets/img/gallery.png')}}"></a>
                </div>
            </div>

        </div> 
    </div>
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->
    @include('master.footer')
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
@endsection