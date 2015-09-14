@extends('master.master')
@section('content')

        <!-- Main Navigation
        ================================================== -->
        @include('master.navbar')
        
      </div><!-- End Header -->
     
    <!-- Page Content
    ================================================== --> 
    
    <!-- Title Header -->
    <div class="row">
        <div class="span12">
            <h2 class="title-bg">{{$event->judul}}</h2>
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
                    <p style="margin-top:10%;"><?php print_r($event->konten); ?></p>
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