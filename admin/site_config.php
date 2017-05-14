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
    <!-- Headings -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css' />  -->
    <!-- Text -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' /> --> 
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
    <link href="plugins/tables/dataTables/jquery.dataTables.css" type="text/css" rel="stylesheet" />
    
    <!-- Main stylesheets -->
    <link href="css/main.css" rel="stylesheet" type="text/css" /> 

    <!-- Custom stylesheets ( Put your own changes here ) -->
    <link href="css/custom.css" rel="stylesheet" type="text/css" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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

 
<?php  include('header.php'); ?>
    <div id="wrapper">

        <?php  include('side_bar.php'); ?>

        <!--Body content-->
        <div id="content" class="clearfix">
            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

                    <h3>Recipe</h3>

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
                        <li class="active">Recipes</li>
                    </ul>

                </div><!-- End .heading-->
    				
                <!-- Build page from here: Usual with <div class="row-fluid"></div> -->
					
					<div class="row-fluid">
<div class="box">

                                <div class="title">

                                   
                                        <h4>
                                        <span class="eco-list ">Add Categories </span>                                         
                                        <button class="label btn btn-primary btn-minibtn btn-danger">Cancel</button>
                                        <button type="button" id="myButton"class="label btn btn-primary btn-mini">Save changes</button>                                    
                                    </h4> 
                                    
                                    
                                </div>
                                <div class="content">
                                   
                                    
                                        
                                        
                                        <form class="form-horizontal" id="form-validate" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                         <input type="hidden" name="token" value="<?php echo ($_GET['token']); ?>" />            
                             	<div style="margin-bottom: 20px;">
                                	<ul id="myTab" class="nav nav-tabs pattern">
                                        <li class="active"><a href="#general" data-toggle="tab">Header </a></li>
                                        <li><a href="#data" data-toggle="tab">Footer </a></li>
                                        <li><a href="#Contact" data-toggle="tab">Contact</a></li>
                                        <li><a href="#media" data-toggle="tab">media url</a></li>
                                        <li><a href="#ads" data-toggle="tab">ads</a></li>
                                        			                                                                       
                                	</ul>

                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="general">
                                      <input type="hidden" name="token" value="<?php echo ($_GET['token']); ?>" />
                                     <div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="row-fluid">
                                                    <label class="form-label span4" for="normal"><b>Button Link</b></label>
                                                    <input class="span8" id="normalInput" type="text" value="" name="butt_link"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row row-fluid">
											<div class="span12">
												<div class="row-fluid">
												
													<label class="form-label span4" for="username"><b>Image:</b></label>
                                                  <img id="uploadPreview" style=" height:60px; width:60px; " data-placeholder="imglibrary/autoimage/no_image-100x100.png" src="imglibrary/autoimage/no_image-100x100.png" border="1px" class="image marginR10"/>
													<input id="uploadImage" type="file" name="img" onChange="PreviewImage();" />
												</div>
											</div>
										</div>
                                        	
   
                                    </div><!--tab1-->
                                    <!--===============================================END tab1==============================-->                                   
                                  
                                        <div class="tab-pane fade" id="data"> 
										  
										<div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="row-fluid">
                                                    <label class="form-label span4" for="normal"><b>Button Link</b></label>
                                                    <input class="span8" id="normalInput" type="text" value="" name="butt_link"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row row-fluid">
											<div class="span12">
												<div class="row-fluid">
												
													<label class="form-label span4" for="username"><b>Image:</b></label>
                                                  <img id="uploadPreview" style=" height:60px; width:60px; " data-placeholder="imglibrary/autoimage/no_image-100x100.png" src="imglibrary/autoimage/no_image-100x100.png" border="1px" class="image marginR10"/>
													<input id="uploadImage" type="file" name="img" onChange="PreviewImage();" />
												</div>
											</div>
										</div>	
                                    </div><!--tab2-->
                                    <!--===============================================END tab2==============================-->
                                    <div class="tab-pane fade" id="Contact"> 
										  
										<div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="row-fluid">
                                                    <label class="form-label span4" for="normal"><b>Contact map Address</b></label>
                                                    <input class="span8" id="normalInput" type="text" value="" name="butt_link"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="row-fluid">
                                                    <label class="form-label span4" for="normal"><b>Contact Content</b></label>
                                                    <input class="span8" id="normalInput" type="text" value="" name="butt_link"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="row-fluid">
                                                    <label class="form-label span4" for="normal"><b>Contact Address</b></label>
                                                    <input class="span8" id="normalInput" type="text" value="" name="butt_link"/>
                                                </div>
                                            </div>
                                        </div>

                                        	
                                    </div><!--tab3-->
                                    <!--===============================================END tab3==============================-->
                                    <div class="tab-pane fade" id="media"> 
                                    
										  
										<div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="row-fluid">
                                                    <label class="form-label span4" for="normal"><b>Twitter Url</b></label>
                                                    <input class="span8" id="normalInput" type="text" value="<?php /* echo $siteconfig->show_update_sitecinfig('t_url'); */?>" name="t_url"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="row-fluid">
                                                    <label class="form-label span4" for="normal"><b>Vine Url</b></label>
                                                    <input class="span8" id="normalInput" type="text" value="<?php /* echo $siteconfig->show_update_sitecinfig('v_url'); */?>" name="v_url"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="row-fluid">
                                                    <label class="form-label span4" for="normal"><b>Reddit Url</b></label>
                                                    <input class="span8" id="normalInput" type="text" value="<?php /* echo $siteconfig->show_update_sitecinfig('r_url'); */?>" name="r_url"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="row-fluid">
                                                    <label class="form-label span4" for="normal"><b>Instagram Url</b></label>
                                                    <input class="span8" id="normalInput" type="text" value="<?php /* echo $siteconfig->show_update_sitecinfig('i_url'); */?>" name="i_url"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="ads"> 
                                    <div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="form-row">
                                                <label class="form-label span2" for="required"><b>Home page right</b></label>
                                                    <textarea class="" name="h_p_r" style="width:80%;"><?php /* echo $siteconfig->show_update_sitecinfig('h_p_r'); */?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="form-row">
                                                <label class="form-label span2" for="required"><b>Home page bottom</b></label>
                                                    <textarea class="" name="h_p_b" style="width:80%;"><?php /* echo $siteconfig->show_update_sitecinfig('h_p_b'); */?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="form-row">
                                                <label class="form-label span2" for="required"><b>Categories page right</b></label>
                                                    <textarea class="" name="c_p_r" style="width:80%;"><?php /* echo $siteconfig->show_update_sitecinfig('c_p_r'); */?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="form-row">
                                                <label class="form-label span2" for="required"><b>Categories page bottom</b></label>
                                                    <textarea class="" name="c_p_b" style="width:80%;"><?php /* echo $siteconfig->show_update_sitecinfig('c_p_b'); */?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="form-row">
                                                <label class="form-label span2" for="required"><b>Video page right</b> </label>
                                                    <textarea class="" name="v_p_r" style="width:80%;"><?php /* echo $siteconfig->show_update_sitecinfig('v_p_r'); */?></textarea>
                                                </div>
                                            </div>
                                        </div>                                        
                                        
                                        <div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="form-row">
                                                <label class="form-label span2" for="required"><b> Video page bottom</b> </label>
                                                    <textarea class="" name="v_p_b" style="width:80%;"><?php /* echo $siteconfig->show_update_sitecinfig('v_p_b'); */?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="form-row">
                                                <label class="form-label span2" for="required"><b>Single Video page right</b> </label>
                                                    <textarea class="" name="s_v_p_r" style="width:80%;"><?php /* echo $siteconfig->show_update_sitecinfig('s_v_p_r'); */?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="form-row">
                                                <label class="form-label span2" for="required"><b>Single Video page bottom</b> </label>
                                                    <textarea class="" name="s_v_p_b" style="width:80%;"><?php /* echo $siteconfig->show_update_sitecinfig('s_v_p_b'); */?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
										
                                        
                                        

                                        	
                                    </div>
                                    
                                    </div>
                                     <!--===============================================END tab4==============================-->
                                     <!--===============================================Start tab5==============================-->
                                     
                                    <!--tab5-->
                                   
                                </div><!-- tab-content-->
                                
                            </div>
                                    <div class="form-actions">
                                                                                <div class="span3"></div>
                                                                                <div class="span4 controls">
                                                                                     <button type="submit" style="display:none" class="btn btn-info marginR10">Save changes</button>
                                                                                </div>
                                                                                </div>   
                                       </form>
                                     
                                 
                                </div>

                            </div>
                  <!-- End .row-fluid -->
               
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
	</div><!-- End  -->
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

    <!-- Table plugins -->
    <script type="text/javascript" src="plugins/tables/dataTables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="plugins/tables/responsive-tables/responsive-tables.js"></script><!-- Make tables responsive -->

    <!-- Important Place before main.js  -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
    <script type="text/javascript" src="plugins/fix/touch-punch/jquery.ui.touch-punch.min.js"></script><!-- Unable touch for JQueryUI -->

    <!-- Init plugins -->
    <script type="text/javascript" src="js/main.js"></script><!-- Core js functions -->
    <script type="text/javascript" src="js/datatable.js"></script><!-- Init plugins only for page -->

	<script type="text/javascript" src="js/widgets.js"></script><!-- Init plugins only for page -->
  <script src="js/jquery.autocomplete.min.js"></script>
	<script type="text/javascript" src="js/datatable.js"></script><!-- Init plugins only for page -->
			

			<script>

			  $(document).ready(function() {
				$('#selecctall').click(function(event) {  //on click
					if(this.checked) { // check select status
						$('.checkbox1').each(function() { //loop through each checkbox
							this.checked = true;  //select all checkboxes with class "checkbox1"              
						});
					}else{
						$('.checkbox1').each(function() { //loop through each checkbox
							this.checked = false; //deselect all checkboxes with class "checkbox1"                      
						});        
					}
				});
			   
			});
			
			
			function confirm_delete() {
				var txt;
				var r = confirm("Are You Sure to do this?");
				if (r == true) {					
					$( "#form-delete" ).submit();					
				}			
			}
			
			

			</script>


   
    </body>
</html>
