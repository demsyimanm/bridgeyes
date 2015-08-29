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
        @include('master.navbar_user')

      </div><!-- End Header -->
     
    <!-- Blog Content
    ================================================== --> 
    <div class="row">


        <!-- Blog Sidebar
        ================================================== --> 
        <div class="span4 sidebar">

            <!--Categories-->
            <h3 class="title-bg">Hello {{$username}} </h3>
            <div id="div_foto_profil">
                <img id="foto_profil" src="{{URL::to('assets/img/gallery/blog-med-img-1.jpg')}}">
            </div>
            <ul class="post-category-list">
                <li style="font-size:1.5em;"><a href="{{URL::to('user/write_news')}}"><i class="icon-plus-sign"></i>WRITE NEWS</a></li>
                <li style="font-size:1.5em;"><a href="{{URL::to('user/write_article')}}"><i class="icon-plus-sign"></i>WRITE ARTICLE</a></li>
            </ul>

        </div>
        <!-- Blog Posts
        ================================================== --> 
        <div id="user_news" class="span8 blog">

            <!-- Blog Post 1 -->
            <article>
                <h3 class="title-bg"><a href="blog-single.htm">A subject that is beautiful in itself</a></h3>
                <div class="post-summary">
                    <a href="blog-single.htm"><img src="img/gallery/post-img-1.jpg" alt="Post Thumb"></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>
                    <div class="post-summary-footer">
                        <button class="btn btn-small btn-inverse" type="button">Edit Article</button>
                        <ul class="post-data">
                            <li><i class="icon-calendar"></i> 09/04/15</li>
                            <li><i class="icon-user"></i> <a href="#">Admin</a></li>
                            <li><i class="icon-comment"></i> <a href="#">5 Comments</a></li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a></li>
                        </ul>
                    </div>
                </div>
            </article>

            <!-- Blog Post 2 -->
             <article>
                <h3 class="title-bg"><a href="blog-single.htm">A great artist is always before his time</a></h3>
                <div class="post-summary">
                    <a href="blog-single.htm"><img src="img/gallery/post-img-1.jpg" alt="Post Thumb"></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>
                    <div class="post-summary-footer">
                        <button class="btn btn-small btn-inverse" type="button">Edit Article</button>
                        <ul class="post-data">
                            <li><i class="icon-calendar"></i> 09/04/15</li>
                            <li><i class="icon-user"></i> <a href="#">Admin</a></li>
                            <li><i class="icon-comment"></i> <a href="#">5 Comments</a></li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a></li>
                        </ul>
                    </div>
                </div>
            </article>

             <!-- Blog Post 3 -->
             <article>
                <h3 class="title-bg"><a href="blog-single.htm">Is art everything to anybody?</a></h3>
                <div class="post-summary">
                    <a href="blog-single.htm"><img src="img/gallery/post-img-1.jpg" alt="Post Thumb"></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>
                    <div class="post-summary-footer">
                        <button class="btn btn-small btn-inverse" type="button">Edit Article</button>
                        <ul class="post-data">
                            <li><i class="icon-calendar"></i> 09/04/15</li>
                            <li><i class="icon-user"></i> <a href="#">Admin</a></li>
                            <li><i class="icon-comment"></i> <a href="#">5 Comments</a></li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a></li>
                        </ul>
                    </div>
                </div>
            </article>

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
    </div>
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->
	@include('master.footer')  
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>