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
            <h3 class="title-bg">Hello {{$username}}!</h3>
            <div id="div_foto_profil">
                <img id="foto_profil" src="{{URL::to('assets/img/gallery/blog-med-img-1.jpg')}}">
            </div>
            <ul class="post-category-list">
                <li style="font-size:1.5em;"><a href="#"><i class="icon-plus-sign"></i>WRITE ARTICLE</a></li>
            </ul>

        </div>
        <!-- Blog Posts
        ================================================== --> 
        <div id="user_news" class="span8 blog">
            <h3 class="title-bg"><a href="blog-single.htm">Write Article</a></h3>
            <div class="form_group_bridge">
                <h5>Upload Thumbnail Picture</h5>
                <input id="input_gambar" name="gambar" type="file" class="file" data-preview-file-type="text" >
            </select>
            </div>
            <div class="form_group_bridge">
                <h5>Categories</h5>
                <select id="list_article" >
                <option>Bidding</option>
                <option>Convention</option>
                <option>Defence</option>
                <option>Play</option>
                </select>
            </div>
            <textarea name="konten" id="textbox"></textarea>
            <button id="submit_button" type="button" class="btn btn-warning">Submit</button>
        </div>

    </div>
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->
	@include('master.footer')  
    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>