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
            <h5>Big Things... Small Packages</h5>
        </div>
        @foreach ($artikel as $artik)
            {{$artik->judul}}
            {{$artik->konten}}
        @endforeach
        <!-- Main Navigation
        ================================================== -->
 
        
      </div><!-- End Header -->
     
    <div class="row headline"><!-- Begin Headline -->
    <div class="span6">

            <h5 class="title-bg">From the Blog 
                <small>All the latest news</small>
                <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5>

        <div id="blogCarousel" class="carousel slide ">

            <!-- Carousel items -->
            <div class="carousel-inner">

                 <!-- Blog Item 1 -->
                <div class="active item">
                    <a href="blog-single.htm"><img src="img/gallery/blog-med-img-1.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                    <div class="post-info clearfix">
                        <h4><a href="blog-single.htm">A subject that is beautiful in itself</a></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015<li>
                            <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a><li>
                            <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a><li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a>
                        </ul>
                    </div>
                    <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus tellus, aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a><p>
                </div>

                <!-- Blog Item 2 -->
                 <div class="item">
                    <a href="blog-single.htm"><img src="img/gallery/blog-med-img-1.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                    <div class="post-info clearfix">
                        <h4><a href="blog-single.htm">A great artist is always before his time</a></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015<li>
                            <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a><li>
                            <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a><li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a>
                        </ul>
                    </div>
                    <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus tellus, aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a><p>
                </div>

                 <!-- Blog Item 3 -->
                 <div class="item">
                    <a href="blog-single.htm"><img src="img/gallery/blog-med-img-1.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                    <div class="post-info clearfix">
                        <h4><a href="blog-single.htm">Is art everything to anybody?</a></h4>
                        <ul class="blog-details-preview">
                            <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015<li>
                            <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a><li>
                            <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a><li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a>
                        </ul>
                    </div>
                    <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus tellus, aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a><p>
                </div>
                
            </div>
            </div>  
        </div>
    </div><!-- End Headline -->
    
    <div class="row gallery-row"><!-- Begin Gallery Row --> 
      
    	<div class="span12">
            <h5 class="title-bg">Recent Work 
                <small>That we are most proud of</small>
                <button class="btn btn-mini btn-inverse hidden-phone" type="button">View Portfolio</button>
            </h5>
    	</div>
        <div class="span9 blog">

            <div class="row clearfix">
                <ul class="blog-post-grid">

                    <!-- Blog Post 1 -->
                    <li class="span3 blog-post-item">
                        <div class="blog-post-hover hidden-phone hidden-tablet">
                            <p><a href="blog-single.htm" class="clearfix">A subject that is beautiful in itself</a>
                            posted on 9/01/15<br /> 12 comments<br /> posted in photoshop</p>
                        </div>
                        <a href="blog-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Post Thumb"></a>
                    </li>

                    <!-- Blog Post 2 -->
                    <li class="span3 blog-post-item">
                        <div class="blog-post-hover hidden-phone hidden-tablet">
                            <p><a href="blog-single.htm" class="clearfix">A great artist is always before his time</a>
                            posted on 9/01/15<br /> 12 comments<br /> posted in photoshop</p>
                        </div>
                        <a href="blog-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Post Thumb"></a>
                    </li>

                    <!-- Blog Post 3 -->
                    <li class="span3 blog-post-item">
                        <div class="blog-post-hover hidden-phone hidden-tablet">
                            <p><a href="blog-single.htm" class="clearfix">Is art everything to anybody?</a>
                            posted on 9/01/15<br /> 12 comments<br /> posted in photoshop</p>
                        </div>
                        <a href="blog-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Post Thumb"></a>
                    </li>

                     <!-- Blog Post 4 -->
                    <li class="span3 blog-post-item">
                        <div class="blog-post-hover hidden-phone hidden-tablet">
                            <p><a href="blog-single.htm" class="clearfix">A subject that is beautiful in itself</a>
                            posted on 9/01/15<br /> 12 comments<br /> posted in photoshop</p>
                        </div>
                        <a href="blog-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Post Thumb"></a>
                    </li>

                    <!-- Blog Post 5 -->
                    <li class="span3 blog-post-item">
                        <div class="blog-post-hover hidden-phone hidden-tablet">
                            <p><a href="blog-single.htm" class="clearfix">A great artist is always before his time</a>
                            posted on 9/01/15<br /> 12 comments<br /> posted in photoshop</p>
                        </div>
                        <a href="blog-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Post Thumb"></a>
                    </li>

                    <!-- Blog Post 6 -->
                    <li class="span3 blog-post-item">
                        <div class="blog-post-hover hidden-phone hidden-tablet">
                            <p><a href="blog-single.htm" class="clearfix">Is art everything to anybody?</a>
                            posted on 9/01/15<br /> 12 comments<br /> posted in photoshop</p>
                        </div>
                        <a href="blog-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Post Thumb"></a>
                    </li>

                     <!-- Blog Post 7 -->
                    <li class="span3 blog-post-item">
                        <div class="blog-post-hover hidden-phone hidden-tablet">
                            <p><a href="blog-single.htm" class="clearfix">A subject that is beautiful in itself</a>
                            posted on 9/01/15<br /> 12 comments<br /> posted in photoshop</p>
                        </div>
                       <a href="blog-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Post Thumb"></a>
                    </li>

                    <!-- Blog Post 8 -->
                    <li class="span3 blog-post-item">
                        <div class="blog-post-hover hidden-phone hidden-tablet">
                            <p><a href="blog-single.htm" class="clearfix">A great artist is always before his time</a>
                            posted on 9/01/15<br /> 12 comments<br /> posted in photoshop</p>
                        </div>
                        <a href="blog-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Post Thumb"></a>
                    </li>

                    <!-- Blog Post 9 -->
                    <li class="span3 blog-post-item">
                        <div class="blog-post-hover hidden-phone hidden-tablet">
                            <p><a href="blog-single.htm" class="clearfix">Is art everything to anybody?</a>
                            posted on 9/01/15<br /> 12 comments<br /> posted in photoshop</p>
                        </div>
                        <a href="blog-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Post Thumb"></a>
                    </li>

                </ul>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <ul>
                <li class="active"><a href="#">Prev</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Next</a></li>
                </ul>
            </div>
        </div>

        <!-- Blog Sidebar
        ================================================== --> 

 
    </div><!-- End Gallery Row -->
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->

	<div class="footer-container"><!-- Begin Footer -->
    	<div class="container">
        	<div class="row footer-row">
                <div class="span3 footer-col">
                    <h5>About Us</h5>
                   <img src="img/piccolo-footer-logo.png" alt="Piccolo" /><br /><br />
                    <address>
                        <strong>Design Team</strong><br />
                        123 Main St, Suite 500<br />
                        New York, NY 12345<br />
                    </address>
                    <ul class="social-icons">
                        <li><a href="#" class="social-icon facebook"></a></li>
                        <li><a href="#" class="social-icon twitter"></a></li>
                        <li><a href="#" class="social-icon dribble"></a></li>
                        <li><a href="#" class="social-icon rss"></a></li>
                        <li><a href="#" class="social-icon forrst"></a></li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Latest Tweets</h5>
                    <ul>
                        <li><a href="#">@room122</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li><a href="#">@room122</a> In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Morbi blandit ultricies ultrices.</li>
                        <li><a href="#">@room122</a> Vivamus nec lectus sed orci molestie molestie. Etiam mattis neque eu orci rutrum aliquam.</li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Latest Posts</h5>
                     <ul class="post-list">
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Consectetur adipiscing elit est lacus gravida</a></li>
                        <li><a href="#">Lectus sed orci molestie molestie etiam</a></li>
                        <li><a href="#">Mattis consectetur adipiscing elit est lacus</a></li>
                        <li><a href="#">Cras rutrum, massa non blandit convallis est</a></li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Flickr Photos</h5>
                    <ul class="img-feed">
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                    </ul>
                </div>
            </div>

            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2012 Piccolo Theme. All rights reserved.</span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="#">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Features</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Gallery</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Blog</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Contact</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->

        </div>
    </div><!-- End Footer --> 
    
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
@endsection