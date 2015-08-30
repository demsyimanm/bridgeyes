@extends('master.master')
@section('content')
    <!-- Color Bars (above header)-->
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
        	<a href="index.htm"><img src="img/piccolo-logo.png" alt="" /></a>
            <h5>BRIDGE YES</h5>
        </div>
        <!-- Main Navigation
        ================================================== -->
        @include('master.navbar')
        
      </div><!-- End Header -->
    <div class="row headline"><!-- Begin Headline -->
        <div id="feature" class="span6">
                <h5 class="title-bg" style="width:97%;">News and Event 
                    <small>All the latest news</small>
                    <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                    <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
                </h5>

            <div id="blogCarousel" class="carousel slide ">
                <!-- Carousel items -->
                <div class="carousel-inner">
                     <!-- Blog Item 1 -->
                    <div class="active item">
                        <a href="blog-single.htm"><img id="foto_slider" src="{{URL::to('assets/img/gallery/blog-med-img-1.jpg')}}" alt="" class="align-left blog-thumb-preview" /></a>
                        <div class="post-info clearfix">
                            <h4><a href="blog-single.htm">A subject that is beautiful in itself</a></h4>
                            <ul class="blog-details-preview">
                                <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015<li>
                                <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a><li>
                                <li><i class="icon-tags"></i> <a href="#">photoshop</a>
                            </ul>
                        </div>
                        <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus tellus, aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a><p>
                    </div>
                    <div class="item">
                        <a href="blog-single.htm"><img id="foto_slider" src="{{URL::to('assets/img/gallery/blog-med-img-1.jpg')}}" alt="" class="align-left blog-thumb-preview" /></a>
                        <div class="post-info clearfix">
                            <h4><a href="blog-single.htm">A subject that is beautiful in itself</a></h4>
                            <ul class="blog-details-preview">
                                <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015<li>
                                <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a><li>
                                <li><i class="icon-tags"></i> <a href="#">photoshop</a>
                            </ul>
                        </div>
                        <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus tellus, aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a><p>
                    </div>

                </div>

            </div>  
        </div>
    </div><!-- End Headline -->
    
    <div id="bidding" class="row gallery-row"><!-- Begin Gallery Row --> 
      
    	<div class="span12">
            <h5 class="title-bg">LATEST ARTICLE 
                <small>Latest news about BIDDING</small>
            </h5>
    	</div>
        <div id="home" class="span9 blog">

            <div class="row clearfix">
                <ul class="blog-post-grid">

                    <!-- Blog Post 1 -->
                    <li class="span3 blog-post-item">
                        <div class="blog-post-hover hidden-phone hidden-tablet">
                            <p><a href="blog-single.htm" class="clearfix">A subject that is beautiful in itself</a>
                            posted on 9/01/15<br /> 12 comments<br /> posted in photoshop</p>
                        </div>
                        <a href="blog-single.htm"><img src="{{URL::to('image/belly.jpg')}}" alt="Post Thumb"></a>
                    </li>

                    <!-- Blog Post 2 -->
                    <li class="span3 blog-post-item">
                        <div class="blog-post-hover hidden-phone hidden-tablet">
                            <p><a href="blog-single.htm" class="clearfix">A great artist is always before his time</a>
                            posted on 9/01/15<br /> 12 comments<br /> posted in photoshop</p>
                        </div>
                        <a href="blog-single.htm"><img src="{{URL::to('assets/img/gallery/gallery-img-1-4col.jpg')}}" alt="Post Thumb"></a>
                    </li>

                </ul>
            </div>
        </div>
    </div><!-- End Gallery Row -->

    <div id="convention" class="row gallery-row"><!-- Begin Gallery Row --> 
      
        <div class="span12">
            <h5 class="title-bg">LATEST ARTICLE 
                <small>Latest news about CONVENTION</small>
            </h5>
        </div>
        <div id="home" class="span9 blog">

            <div class="row clearfix">
                <ul class="blog-post-grid">

                    <!-- Blog Post 1 -->
                    <li class="span3 blog-post-item">
                        <div class="blog-post-hover hidden-phone hidden-tablet">
                            <p><a href="blog-single.htm" class="clearfix">A subject that is beautiful in itself</a>
                            posted on 9/01/15<br /> 12 comments<br /> posted in photoshop</p>
                        </div>
                        <a href="blog-single.htm"><img src="{{URL::to('assets/img/gallery/gallery-img-1-4col.jpg')}}" alt="Post Thumb"></a>
                    </li>

                    <!-- Blog Post 2 -->
                    <li class="span3 blog-post-item">
                        <div class="blog-post-hover hidden-phone hidden-tablet">
                            <p><a href="blog-single.htm" class="clearfix">A great artist is always before his time</a>
                            posted on 9/01/15<br /> 12 comments<br /> posted in photoshop</p>
                        </div>
                        <a href="blog-single.htm"><img src="{{URL::to('assets/img/gallery/gallery-img-1-4col.jpg')}}" alt="Post Thumb"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- End Gallery Row -->

    <div id="defense" class="row gallery-row"><!-- Begin Gallery Row --> 
      
        <div class="span12">
            <h5 class="title-bg">LATEST ARTICLE 
                <small>Latest news about DEFENSE</small>
            </h5>
        </div>
        <div id="home" class="span9 blog">

            <div class="row clearfix">
                <ul class="blog-post-grid">

                    <!-- Blog Post 1 -->
                    <li class="span3 blog-post-item">
                        <div class="blog-post-hover hidden-phone hidden-tablet">
                            <p><a href="blog-single.htm" class="clearfix">A subject that is beautiful in itself</a>
                            posted on 9/01/15<br /> 12 comments<br /> posted in photoshop</p>
                        </div>
                        <a href="blog-single.htm"><img src="{{URL::to('assets/img/gallery/gallery-img-1-4col.jpg')}}" alt="Post Thumb"></a>
                    </li>

                    <!-- Blog Post 2 -->
                    <li class="span3 blog-post-item">
                        <div class="blog-post-hover hidden-phone hidden-tablet">
                            <p><a href="blog-single.htm" class="clearfix">A great artist is always before his time</a>
                            posted on 9/01/15<br /> 12 comments<br /> posted in photoshop</p>
                        </div>
                        <a href="blog-single.htm"><img src="{{URL::to('assets/img/gallery/gallery-img-1-4col.jpg')}}" alt="Post Thumb"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- End Gallery Row -->

    <div id="play" class="row gallery-row"><!-- Begin Gallery Row --> 
      
        <div class="span12">
            <h5 class="title-bg">LATEST ARTICLE 
                <small>Latest news about PLAY</small>
            </h5>
        </div>
        <div id="home" class="span9 blog">

            <div class="row clearfix">
                <ul class="blog-post-grid">

                    <!-- Blog Post 1 -->
                    <li class="span3 blog-post-item">
                        <div class="blog-post-hover hidden-phone hidden-tablet">
                            <p><a href="blog-single.htm" class="clearfix">A subject that is beautiful in itself</a>
                            posted on 9/01/15<br /> 12 comments<br /> posted in photoshop</p>
                        </div>
                        <a href="blog-single.htm"><img src="{{URL::to('assets/img/gallery/gallery-img-1-4col.jpg')}}" alt="Post Thumb"></a>
                    </li>

                    <!-- Blog Post 2 -->
                    <li class="span3 blog-post-item">
                        <div class="blog-post-hover hidden-phone hidden-tablet">
                            <p><a href="blog-single.htm" class="clearfix">A great artist is always before his time</a>
                            posted on 9/01/15<br /> 12 comments<br /> posted in photoshop</p>
                        </div>
                        <a href="blog-single.htm"><img src="{{URL::to('assets/img/gallery/gallery-img-1-4col.jpg')}}" alt="Post Thumb"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- End Gallery Row -->
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->
    @include('master.footer')
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
@endsection