
        <!--Responsive navigation button-->  
        <div class="resBtn">
            <a href="#"><span class="icon16 minia-icon-list-3"></span></a>
        </div>
        
        <!--Left Sidebar collapse button-->  
        

        <!--Sidebar background-->
        <div id="sidebarbg"></div>
        <!--Sidebar content-->
        <div id="sidebar">

            <div class="shortcuts">
                <ul>
                </ul>
            </div>
			<!-- End search -->            

            <div class="sidenav">

                <div class="sidebar-widget" style="margin: -1px 0 0 0;">
                    <h5 class="title" style="margin-bottom:0">Navigation</h5>
                </div><!-- End .sidenav-widget -->

                <div class="mainnav">
                    <ul>
                        <li>
                            <a href="#"><span class="icon16 icomoon-icon-list-view-2"></span>Recipes<span class="notification red"><?php /*echo $admin->admin_count(); */?></span></a>
                            <ul class="sub">
                                <li><a href="categories.php<?php echo $_['url_prm']; ?>"><span class="icon16 icomoon-icon-file"></span>Categories</a></li>
                                <li><a href="recipe.php<?php echo $_['url_prm']; ?>"><span class="icon16 icomoon-icon-file"></span>Recipe</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="icon16 icomoon-icon-list-view-2"></span>Users<span class="notification red"><?php /*echo $admin->admin_count(); */?></span></a>
                            <ul class="sub">
								<li><a href="users.php<?php echo $_['url_prm']; ?>"><span class="icon16 icomoon-icon-file"></span>users</a></li>
                            </ul>
                        </li>
                        <!----->
						 <li>
                            <a href="#"><span class="icon16 icomoon-icon-list-view-2"></span>CMS<span class="notification red"><?php /*echo $admin->admin_count(); */?></span></a>
                            <ul class="sub">
								<li><a href="information.php<?php echo $_['url_prm']; ?>"><span class="icon16 icomoon-icon-file"></span>Information</a></li>
                            </ul>
                        </li>
						
						<!--/----->
                        
                        <li>
                            <a href="#"><span class="icon16 icomoon-icon-list-view-2"></span>Settings<span class="notification red"><?php /*echo $admin->admin_count(); */?></span></a>
                            <ul class="sub">
								<li><a href="slider.php<?php echo $_['url_prm']; ?>"><span class="icon16 icomoon-icon-file"></span>Slider</a></li>
								<li><a href="frontend.php<?php echo $_['url_prm']; ?>"><span class="icon16 icomoon-icon-file"></span>Frontend</a></li>
								<li><a href="advertiseing.php<?php echo $_['url_prm']; ?>"><span class="icon16 icomoon-icon-file"></span>Advertiseing</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="icon16 icomoon-icon-list-view-2"></span>Marketting<span class="notification red"><?php /*echo $admin->admin_count(); */?></span></a>
                            <ul class="sub">
								<li><a href="newsletter.php<?php echo $_['url_prm']; ?>"><span class="icon16 icomoon-icon-file"></span>Newsletters</a></li>
								<li><a href="email.php<?php echo $_['url_prm']; ?>"><span class="icon16 icomoon-icon-file"></span>Emails</a></li>
								
                            </ul>
                        </li>
						 <li><a href="file.php<?php echo $_['url_prm']; ?>"><span class="icon16 icomoon-icon-upload"></span>File Manager</a></li>
                    </ul>
                </div>
            </div><!-- End sidenav -->




        </div><!-- End #sidebar -->