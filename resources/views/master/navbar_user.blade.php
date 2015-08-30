<div class="span7 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
            <li><a href="{{URL::to('/')}}">HOME</a></li>
            <li><a href="{{URL::to('/')}}">NEWS</a></li>
            <li class="dropdown active">
                <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">USER <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="{{URL::to('user')}}">PROFILE</a></li>
                    <li><a href="blog-style1.htm">EDIT PROFILE</a></li>
                    <li><a href="blog-style1.htm">LOG OUT</a></li>
                </ul>
            </li>
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
                    <li><a href="blog-style1.htm">SCHEDULE</a></li>
                    <li><a href="blog-style1.htm">RECENT RESULTS</a></li>
                </ul>
            </li>
            <li><a href="{{URL::to('/')}}">ABOUT US</a></li>
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