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
                    <li><a href="blog-style1.htm">SCHEDULE</a></li>
                    <li><a href="blog-style1.htm">RECENT RESULTS</a></li>
                </ul>
            </li>
            <li><a href="{{URL::to('/')}}">ABOUT US</a></li>
            <li id="tombol_login"><a href="{{URL::to('/')}}" data-toggle="modal" data-target="#LoginModal" >LOG IN</a></li>
            <li style="background-color:rgb(216, 69, 11);color:white;"><a href="{{URL::to('/')}}" style="color:white;" data-toggle="modal" data-target="#SignupModal" >SIGN UP</a></li>
            </ul>
           
            </div>

            <!-- Modal -->
            <div id="LoginModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">LOG IN</h4>
                  </div>
                  <div id="form_login">
                     <form role="form" method="POST" action="{{URL::to('user/login')}}">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group" style="margin-bottom:3%;">
                        <label for="email">Username:</label>
                        <input type="text" class="form-control" id="email" name="username" style="margin: 0 auto;display: block;width:100%;">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password" style="margin: 0 auto;display: block;width:100%;">
                      </div>
                      <button type="submit" class="btn btn-warning" style="margin-top:5%;">LOG IN</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <div id="SignupModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">SIGN UP</h4>
                  </div>
                  <div id="form_login">
                     <form role="form" method="POST" action="{{URL::to('signup/auth')}}">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group" style="margin-bottom:3%;">
                        <label for="email">Username:</label>
                        <input type="text" class="form-control" id="email" name="username" style="margin: 0 auto;display: block;width:100%;">
                      </div>
                      <div class="form-group" style="margin-bottom:3%;">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password" style="margin: 0 auto;display: block;width:100%;">
                      </div>
                      <div class="form-group" style="margin-bottom:3%;">
                        <label for="email">Full Name:</label>
                        <input type="text" class="form-control" id="email" name="nama" style="margin: 0 auto;display: block;width:100%;">
                      </div>
                      <button type="submit" class="btn btn-warning" style="margin-top:5%;">SIGN ME UP!</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
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