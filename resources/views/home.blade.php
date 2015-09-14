@extends('master.master')
@section('content')

        <!-- Main Navigation
        ================================================== -->
        @include('master.navbar')
        <!-- main navigation -->
        
      </div><!-- End Header -->
    <div class="row headline"><!-- Begin Headline -->
        <div id="feature" class="span6">
                <h5 class="title-bg" style="width:97%;">NEWS 
                    <small>All the latest news</small>
                    <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                    <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
                </h5>
            <div id="blogCarousel" class="carousel slide ">
                <!-- Carousel items -->
                <div class="carousel-inner">
                     <!-- Blog Item 1 -->
                     <?php $x = 1;?>
                     @foreach($news as $berita)
                     <?php if($x == 1) {  ?>
                        <div class="active item">
                            <div class="gambar_slider">
                                <a href="blog-single.htm"><img id="foto_slider" src="{{URL::to(substr($berita->gambar,6))}}" alt="" class="align-left blog-thumb-preview" /></a>
                            </div>
                                <div class="post-info clearfix">
                                    <h4><a href="blog-single.htm">{{$berita->judul}}</a></h4>
                                    <ul class="blog-details-preview">
                                        <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015<li>
                                        <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a><li>
                                        <li><i class="icon-tags"></i> <a href="#">photoshop</a></li>
                                    </ul>
                                    <p class="blog-summary"><?php echo substr(nl2br($berita->konten),0,100)." ..."; ?><a href="{{URL::to('shownews/'.$berita->id)}}">Read more</a><p>
                                </div>
                        </div>
                    <?php $x++; } 
                    elseif($x>1)
                        {
                    ?>
                        <div class="item">
                            <div class="gambar_slider">
                            <a href="blog-single.htm"><img id="foto_slider" src="{{URL::to(substr($berita->gambar,6))}}" alt="" class="align-left blog-thumb-preview" /></a>
                            </div>
                            <div class="post-info clearfix">
                                <h4><a href="blog-single.htm">{{$berita->judul}}</a></h4>
                                <ul class="blog-details-preview">
                                    <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015<li>
                                    <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a><li>
                                    <li><i class="icon-tags"></i> <a href="#">photoshop</a></li>
                                </ul>
                            <p class="blog-summary"><?php echo substr(nl2br($berita->konten),0,100)." ..."; ?><a href="{{URL::to('shownews/'.$berita->id)}}">Read More</a><p>
                            </div>
                        </div>
                    <?php } ?>
                    @endforeach
                </div>
            </div>  
        </div>

        <div id="feature_2" class="span6">
                <h5 class="title-bg" style="width:97%;">LATEST EVENT
                </h5>
                <table id="data_table" class="table">
                    <thead>
                            <th>Event's Name</th>
                            <th>Date</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>UNAIR</td>
                            <td>October, 10 2015</td>
                        </tr>
                    </tbody>
                </table>
        </div>
        </div>
    
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
                    <ul class="span3" id="list_post">
                            <li>
                                <h6><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></h6>
                            </li>
                            <li>
                                <h6><a href="#">Nulla iaculis mattis lorem, quis gravida nunc iaculis</a></h6>
                            </li>
                            <li>
                                <h6><a href="#">Vivamus tincidunt sem eu magna varius elementum maecenas felis</a></h6>
                            </li>
                            <li>
                                <h6><a href="#">Vivamus tincidunt sem eu magna varius elementum maecenas felis</a></h6>
                            </li>
                    </ul>
                </ul>
            </div>
        </div>
    </div><!-- End Gallery Row -->

    <div id="convention" class="row gallery-row">
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
                    <ul class="span3" id="list_post">
                            <li>
                                <h6><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></h6>
                            </li>
                            <li>
                                <h6><a href="#">Nulla iaculis mattis lorem, quis gravida nunc iaculis</a></h6>
                            </li>
                            <li>
                                <h6><a href="#">Vivamus tincidunt sem eu magna varius elementum maecenas felis</a></h6>
                            </li>
                            <li>
                                <h6><a href="#">Vivamus tincidunt sem eu magna varius elementum maecenas felis</a></h6>
                            </li>
                    </ul>
                </ul>
            </div>
        </div>
    </div><!-- End Gallery Row -->

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
                    <ul class="span3" id="list_post">
                            <li>
                                <h6><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></h6>
                            </li>
                            <li>
                                <h6><a href="#">Nulla iaculis mattis lorem, quis gravida nunc iaculis</a></h6>
                            </li>
                            <li>
                                <h6><a href="#">Vivamus tincidunt sem eu magna varius elementum maecenas felis</a></h6>
                            </li>
                            <li>
                                <h6><a href="#">Vivamus tincidunt sem eu magna varius elementum maecenas felis</a></h6>
                            </li>
                    </ul>
                </ul>
            </div>
        </div>
    </div><!-- End Gallery Row -->

    <div id="convention" class="row gallery-row">
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
                    <ul class="span3" id="list_post">
                            <li>
                                <h6><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></h6>
                            </li>
                            <li>
                                <h6><a href="#">Nulla iaculis mattis lorem, quis gravida nunc iaculis</a></h6>
                            </li>
                            <li>
                                <h6><a href="#">Vivamus tincidunt sem eu magna varius elementum maecenas felis</a></h6>
                            </li>
                            <li>
                                <h6><a href="#">Vivamus tincidunt sem eu magna varius elementum maecenas felis</a></h6>
                            </li>
                    </ul>
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