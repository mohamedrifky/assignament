<nav class="navbar navbar-static-top">
            <div class="container-fluid">
                <a class="navbar-brand text-xs-center" href="">
                    <h4 class="text-white" style="margin-top:4px;margin-bottom:4px"><img src="{{ asset('img/logo1_small.png')}}" alt="logo" width="" style="border-radius:5px" > <!--SKILLS FOR INCLUSIVE GROWTH--></h4>
                </a>
                <div class="menu">
                    <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars text-white"></i>
                    </span>
                </div>

                <!-- Toggle Button -->
                <div class="text-xs-right xs_menu">
                    <button class="navbar-toggler hidden-xs-up" type="button" data-toggle="collapse" data-target="#nav-content">
                        ☰
                    </button>
                </div>
                <!-- Nav Content -->
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="topnav dropdown-menu-right float-xs-right" style="margin:0 !important;">
                    <!--<div class="btn-group" style="visibility:hidden;">
                        <div class="notifications no-bg">
                            <a class="btn btn-default btn-sm messages" data-toggle="dropdown"> <i class="fa fa-envelope fa-1x text-white"></i>
                                <span class="tag tag-warning">8</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu">
                               
                                <div id="messages">
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="btn-group" style="visibility:hidden;">
                        <div class="notifications messages no-bg">
                            <a class="btn btn-default btn-sm" data-toggle="dropdown"> <i class="fa fa-bell text-white"></i>
                                <span class="tag tag-danger">9</span>
                            </a>
                            <div class="dropdown-menu drop_box_align" role="menu">
                             
                                <div id="notifications">
                                   
                                    
                                    
                                </div>

                               
                            </div>
                        </div>
                    </div>-->
                    <!-- <div class="btn-group">
                        <a class="btn btn-default btn-sm messages toggle-right">
                            &nbsp;
                            <i class="fa fa-cog text-white"></i>
                            &nbsp;
                        </a>
                    </div> -->
                    <div class="btn-group">
                        <div class="notifications no-bg">
                    <a class="btn btn-default btn-sm" data-toggle="dropdown">
                    <h4 class="text-white" style="margin-top:4px;margin-bottom:4px"> <!--SKILLS FOR INCLUSIVE GROWTH--></h4>
                	</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                <img src="{{ asset('img/admin.jpg')}}" class="admin_img2 rounded-circle avatar-img" alt="avatar"> 
                                <strong> {{Auth::user()->username}}</strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <!--<a class="dropdown-item title" href="#">
                                    Admire Admin</a>
                                <a class="dropdown-item" href="edit_user.html"><i class="fa fa-cogs"></i>
                                    Account Settings</a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-user"></i>
                                    User Status
                                </a>
                                <a class="dropdown-item" href="mail_inbox.html"><i class="fa fa-envelope"></i>
                                    Inbox</a>

                                <a class="dropdown-item" href="lockscreen.html"><i class="fa fa-lock"></i>
                                    Lock Screen</a>-->
                                <a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-sign-out"></i>
                                    Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- /.container-fluid --> 
        </nav>