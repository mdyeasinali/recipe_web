<?php 
  require_once('../include/admin_class.php');
  
  
  $admin = new admin();
  $admin->globals();
  $token = $_REQUEST['token'];
  $admin->check_admin_login();
  $admin->check_admin_token($token);
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Supr admin</title>
    <meta name="author" content="SuggeElson" />
    <meta name="description" content="Supr admin template - new premium responsive admin template. This template is designed to help you build the site administration without losing valuable time.Template contains all the important functions which must have one backend system.Build on great twitter boostrap framework" />
    <meta name="keywords" content="admin, admin template, admin theme, responsive, responsive admin, responsive admin template, responsive theme, themeforest, 960 grid system, grid, grid theme, liquid, masonry, jquery, administration, administration template, administration theme, mobile, touch , responsive layout, boostrap, twitter boostrap" />
    <meta name="application-name" content="Supr admin template" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Le styles -->

    <!-- Use new way for google web fonts 
    http://www.smashingmagazine.com/2012/07/11/avoiding-faux-weights-styles-google-web-fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css' /> <!-- Headings -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' /> <!-- Text -->
    <!--[if lt IE 9]>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
    <![endif]-->

    <!-- Core stylesheets do not remove -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
    <link href="css/supr-theme/jquery.ui.supr.css" rel="stylesheet" type="text/css"/>
    <link href="css/icons.css" rel="stylesheet" type="text/css" />

    <!-- Plugin stylesheets -->
    <link href="plugins/misc/qtip/jquery.qtip.css" rel="stylesheet" type="text/css" />        
    <link href="plugins/forms/uniform/uniform.default.css" type="text/css" rel="stylesheet" />    
    
    <link href="plugins/files/elfinder/elfinder.css" type="text/css" rel="stylesheet" />
    <link href="plugins/files/plupload/jquery.ui.plupload/css/jquery.ui.plupload.css" type="text/css" rel="stylesheet" />
    
    <!-- Main stylesheets -->
    <link href="css/main.css" rel="stylesheet" type="text/css" /> 

    <!-- Custom stylesheets ( Put your own changes here ) -->
    <link href="css/custom.css" rel="stylesheet" type="text/css" />  

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png" />

    <script type="text/javascript">
        //adding load class to body and hide page
        document.documentElement.className += 'loadstate';
    </script>
    
    </head>
      
    <body>

    <!-- loading animation -->
    <div id="qLoverlay"></div>
    <div id="qLbar"></div>
    
    <?php 
		include('header.php');
	?>
			
			<div id="wrapper">
			
			<?php 
				include('side_bar.php');
			?>
       
        <div id="content" class="clearfix">
            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

                    <h3>File Upload</h3>                    

                    <div class="resBtnSearch">
                        <a href="#"><span class="icon16 icomoon-icon-search-3"></span></a>
                    </div>

                    
                    <ul class="breadcrumb">
                        <li>You are here:</li>
                        <li>
                            <a href="#" class="tip" title="back to dashboard">
                                <span class="icon16 icomoon-icon-screen-2"></span>
                            </a> 
                            <span class="divider">
                                <span class="icon16 icomoon-icon-arrow-right-2"></span>
                            </span>
                        </li>
                        <li class="active">File upload</li>
                    </ul>

                </div><!-- End .heading-->
    				
                <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

                    <div class="row-fluid">

                        <div class="span12">

                            <div class="box gradient">
                                <div class="title">
                                    <h4>
                                        <span class="icon16 icomoon-icon-folder"></span>
                                        <span>File manager and upload</span>
                                    </h4>
                                </div>
                                <div class="content noPad">
                                    <div id="elfinder"></div>
                                </div>

                            </div><!-- End .box -->

                        </div><!-- End .span12 -->

                    </div><!-- End .row-fluid -->

                    <div class="row-fluid">

                        <div class="span12">

                            <div class="box gradient">
                                <div class="title">
                                    <h4>
                                        <span class="icon16 icomoon-icon-upload"></span>
                                        <span>Upload manager</span>
                                    </h4>
                                </div>
                                <div class="content noPad">
                                    <div id="html4_uploader" style="width: 100%; height: 100%;">You browser doesn't have HTML 4 support.</div>
                                </div>

                            </div><!-- End .box -->

                        </div><!-- End .span12 -->

                    </div><!-- End .row-fluid -->
               
    			<!-- Page end here -->
    				
                <div class="modal fade hide" id="myModal1">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span class="icon12 minia-icon-close"></span></button>
                        <h3>Chat layout</h3>
                    </div>
                    <div class="modal-body">
                        <ul class="messages">
                            <li class="user clearfix">
                                <a href="#" class="avatar">
                                    <img src="images/avatar2.jpeg" alt="" />
                                </a>
                                <div class="message">
                                    <div class="head clearfix">
                                        <span class="name"><strong>Lazar</strong> says:</span>
                                        <span class="time">25 seconds ago</span>
                                    </div>
                                    <p>
                                        Time to go i call you tomorrow.
                                    </p>
                                </div>
                            </li>
                            <li class="admin clearfix">
                                <a href="#" class="avatar">
                                    <img src="images/avatar3.jpeg" alt="" />
                                </a>
                                <div class="message">
                                    <div class="head clearfix">
                                        <span class="name"><strong>Sugge</strong> says:</span>
                                        <span class="time">just now</span>
                                    </div>
                                    <p>
                                        OK, have a nice day.
                                    </p>
                                </div>
                            </li>

                            <li class="sendMsg">
                                <form class="form-horizontal" action="#">
                                    <textarea class="elastic" id="textarea" rows="1" placeholder="Enter your message ..." style="width:98%;"></textarea>
                                    <button type="submit" class="btn btn-info marginT10">Send message</button>
                                </form>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn" data-dismiss="modal">Close</a>
                    </div>
                </div>
                
            </div><!-- End contentwrapper -->
        </div><!-- End #content -->
    
    </div><!-- End #wrapper -->
	<!-- footer area -->
	<div id="footer_area">
		<div class="footer_area_inner">
			
				   <?php include 'footer.php';?>
			
		</div>
	</div><!-- End wrapper -->
	<!--/ footer area -->
    <!-- Le javascript
    ================================================== -->
    <!-- Important plugins put in all pages -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>  
    <script type="text/javascript" src="js/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>

    <!-- Charts plugins -->
    <script type="text/javascript" src="plugins/charts/sparkline/jquery.sparkline.min.js"></script><!-- Sparkline plugin -->

    <!-- Misc plugins -->    
    <script type="text/javascript" src="plugins/misc/qtip/jquery.qtip.min.js"></script><!-- Custom tooltip plugin -->    
    <script type="text/javascript" src="plugins/misc/totop/jquery.ui.totop.min.js"></script> 

    <!-- Search plugin -->
    <script type="text/javascript" src="plugins/misc/search/tipuesearch_set.js"></script>
    <script type="text/javascript" src="plugins/misc/search/tipuesearch_data.js"></script><!-- JSON for searched results -->
    <script type="text/javascript" src="plugins/misc/search/tipuesearch.js"></script>

    <!-- Form plugins -->
    <script type="text/javascript" src="plugins/forms/watermark/jquery.watermark.min.js"></script>   
    <script type="text/javascript" src="plugins/forms/uniform/jquery.uniform.min.js"></script>        
    
    <!-- Fix plugins -->
    <script type="text/javascript" src="plugins/fix/ios-fix/ios-orientationchange-fix.js"></script>
    
    <!-- File upload & file manager plugins -->
    <script type="text/javascript" src="plugins/files/elfinder/elfinder.min.js"></script>
    <script type="text/javascript" src="plugins/files/plupload/plupload.js"></script>
    <script type="text/javascript" src="plugins/files/plupload/plupload.html4.js"></script>
    <script type="text/javascript" src="plugins/files/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>

    <!-- Important Place before main.js  -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
    <script type="text/javascript" src="plugins/fix/touch-punch/jquery.ui.touch-punch.min.js"></script><!-- Unable touch for JQueryUI -->

    <!-- Init plugins -->
    <script type="text/javascript" src="js/main.js"></script><!-- Core js functions -->
    <script type="text/javascript" src="js/file.js"></script><!-- Init plugins only for page -->
   
    </body>
</html>
