
    <!-- Color Bars (above header)-->
    <div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll <= 100) {
                $("#header_fix").css("display","none");
            }
            else {
                $("#header_fix").css("display","");
            }
        });
    });
    </script>

    <!-- navbar_move -->
    <div id="header_fix" style="border-bottom:2px  solid #EFEFEF;border-left:100px;">
        <ul class="navbar" style="list-style-type:none;text-align:center;">
            <li class="navbar_ikut"><a style="text-decoration:none;" href="{{URL::to('/')}}">HOME</a></li>
            <li class="navbar_ikut"><a style="text-decoration:none;" href="">NEWS</a></li>
            <li class="navbar_ikut dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">ARTICLE <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="blog-style1.htm" style="font-size: 12px;color:white;">BIDDING</a></li>
                    <li><a href="blog-style1.htm" style="font-size: 12px;color:white;">CONVENTION</a></li>
                    <li><a href="blog-style1.htm" style="font-size: 12px;color:white;">DEFENCE</a></li>
                    <li><a href="blog-style1.htm" style="font-size: 12px;color:white;">PLAY</a></li>
                </ul>
            </li>
            <li class="navbar_ikut dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">BRIDGE TOURNAMENT <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="blog-style1.htm" style="font-size: 12px;color:white;">SCHEDULE</a></li>
                    <li><a href="blog-style1.htm" style="font-size: 12px;color:white;">RECENT RESULT</a></li>
                </ul>
            </li>
            <li class="navbar_ikut"><a style="text-decoration:none;" href="">ABOUT US</a></li>
            <li class="navbar_ikut"><a style="text-decoration:none;" href="">CONTACT US</a></li>
        </ul>
    </div>
    <!-- end of navbar move -->

    <div class="container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
            <a href="index.htm"><img src="{{URL::to('assets/img/logo.png')}}" alt="" /></a>
            <!-- <h5>BRIDGE YES</h5> -->
        </div>

<div class="span7 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
            <li><a href="{{URL::to('/')}}">HOME</a></li>
            <li><a href="{{URL::to('/')}}">NEWS</a></li>
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">ARTICLE <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="blog-style1.htm">BIDDING</a></li>
                    <li><a href="blog-style1.htm">CONVENTION</a></li>
                    <li><a href="blog-style1.htm">DEFENCE</a></li>
                    <li><a href="blog-style1.htm">PLAY</a></li>
                </ul>
             </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">BRIDGE TOURNAMENT <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{URL::to('allevent')}}">SCHEDULE</a></li>
                    <li><a href="blog-style1.htm">RECENT RESULTS</a></li>
                </ul>
            </li>
            <li><a href="{{URL::to('/')}}">ABOUT US</a></li>
            <li id="tombol_login"><a href="{{URL::to('/')}}" data-toggle="modal" data-target="#LoginModal" >LOG IN</a></li>
            </ul>
           
            </div>

            <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="">Navigate...</option>
                    <option value="index.htm">HOME</option>
                    <option value="index.htm">NEWS</option>
                    <option value="page-full-width.htm">ARTICLE</option>
                        <option value="page-full-width.htm">- BIDDING</option>
                        <option value="page-right-sidebar.htm">- CONVENTION</option>
                        <option value="page-full-width.htm">- DEFENCE</option>
                        <option value="page-right-sidebar.htm">- PLAY</option>
                    <option value="gallery-4col.htm">BRIDGE TOURNAMENT</option>
                        <option value="gallery-3col.htm">- SCHEDULE</option>
                        <option value="gallery-4col.htm">- RECENT RESULTS</option>
                    <option value="index.htm">ABOUT US</option>
                    <option value="index.htm">LOG IN</option>
                </select>
                </div>
                </form>

</div>