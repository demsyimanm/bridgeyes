@extends('master.master')
@section('content')
        <!-- Main Navigation
        ================================================== -->
        @include('master.navbar')

      </div><!-- End Header -->
     
    <!-- Blog Content
    ================================================== --> 
    <div class="row"><!--Container row-->

        <!-- Blog Full Post
        ================================================== --> 
        <div class="span8 blog">

            <!-- Blog Post 1 -->
            <article>
                <h3 class="title-bg"><a href="#">{{$news->judul}}</a></h3>
                <div class="post-content">
                    <a href="#"><img src="{{URL::to(substr($news->gambar,6))}}" alt="Post Thumb"></a>

                    <div class="post-body">
                        <?php print_r($news->konten); ?>
                    </div>

                    <div class="post-summary-footer">
                        <ul class="post-data">
                            <li><i class="icon-calendar"></i> 09/04/15</li>
                            <li><i class="icon-user"></i> <a href="#">Admin</a></li>
                        </ul>
                    </div>
                </div>
            </article>

            <!-- About the Author -->
            <?php if($news->users_id==1) { ?>
            <section class="post-content">
                <div class="post-body about-author">
                    <img src="{{URL::to('assets/img/logo.png')}}" alt="author">
                    <h4>About Administrator</h4>
                    Official Writer from BridgeYes Website.
                </div>
            </section>
            <?php } 
            else { ?>
            <section class="post-content">
                <div class="post-body about-author">
                    <img src="{{URL::to('assets/img/logo.png')}}" alt="author">
                    <h4>About Administrator</h4>
                    Official Writer from BridgeYes Website.
                </div>
            </section>
            <?php } ?>

        

        </div><!--Close container row-->

        <!-- Blog Sidebar
        ================================================== --> 
        <div class="span4 sidebar">

            <!--Popular Posts-->
            <h5 class="title-bg">Advertising</h5>
            
        </div>

    </div>
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->
        @include('master.footer')
	<!-- End Footer --> 

    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
@endsection