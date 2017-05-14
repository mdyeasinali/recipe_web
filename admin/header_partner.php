
    <!-- loading animation -->
    <div id="qLoverlay"></div>
    <div id="qLbar"></div>
        
    <div id="header">

        <div class="navbar">
            <div class="navbar-inner">
              <div class="container-fluid">
                <a class="brand" href="index.php">Supr.<span class="slogan">admin</span></a>
                <div class="nav-no-collapse">
                    <ul class="nav">
                        <li class="active"><a href="index.php<?php echo $_['url_prm']; ?>"><span class="icon16 icomoon-icon-screen-2"></span> Dashboard</a></li>

                    </ul>
                  
                    <ul class="nav pull-right usernav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="icon16 icomoon-icon-bell-2"></span><span class="notification">3</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="menu">
                                    <ul class="notif">
                                        <li class="header"><strong>Notifications</strong> (3) items</li>
                                        <li>
                                            <a href="#">
                                                <span class="icon"><span class="icon16 icomoon-icon-user-3"></span></span>
                                                <span class="event">1 User is registred</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon"><span class="icon16 icomoon-icon-comments-4"></span></span>
                                                <span class="event">Jony add 1 comment</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon"><span class="icon16 icomoon-icon-new-2"></span></span>
                                                <span class="event">admin Julia added post with a long description</span>
                                            </a>
                                        </li>
                                        <li class="view-all"><a href="#">View all notifications <span class="icon16 icomoon-icon-arrow-right-8"></span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                                <img src="<?php echo $_['base_url']. $admin->admin_data('user_img'); ?>" alt="" class="image" /> 
                                <span class="txt"><?php echo $admin->admin_data('user_first_name'); ?></span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="menu">
                                    <ul>
                                       
                                        <li>
                                            <a href="admin_profile.php<?php echo $_['url_prm'] ?>"><span class="icon16 icomoon-icon-user-3"></span>Account Settings</a>
                                        </li>
                                        <li>
                                            <a href="admin_pass.php<?php echo $_['url_prm'] ?>"><span class="icon16 icomoon-icon-comments-2"></span>Edit Password</a>
                                        </li>
                                    </ul>
                                   
                                </li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $_['action']; ?>?log-out=true&token=<?php echo $tk ?>"><span class="icon16 icomoon-icon-exit"></span> Logout</a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
              </div>
            </div><!-- /navbar-inner -->
          </div><!-- /navbar --> 

    </div><!-- End #header -->