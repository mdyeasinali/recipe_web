<?php 
  require_once('../include/admin_class.php');
  require_once('../include/frontend_class.php');
  
  $admin = new admin();
  $frontend = new frontEnd();
  $admin->globals();
  $token = $_REQUEST['token'];
  $admin->check_admin_login();
  $admin->check_admin_token($token);
  
  if($_SERVER['REQUEST_METHOD'] == "POST"){
	   $site_n = $_POST['st_n'];
	   $st_slogan = $_POST['st_slogan'];
	   
	   $st_n = $_POST['store_name'];
	   $st_ow_n = $_POST['st_ow_n'];
	   $st_ph = $_POST['st_ph'];
	   $st_em = $_POST['st_em'];
	   $st_add = $_POST['st_add'];
	  
	   $mta_key = $_POST['mta_key'];
	   $mta_title = $_POST['mta_title'];
	   $mta_des = $_POST['mta_des'];
	   $copy_text = $_POST['copy_text'];
	   
	   $s_fac = $_POST['s_fac'];
	   $s_twit = $_POST['s_twit'];
	   $s_goog = $_POST['s_goog'];
	   $s_you = $_POST['s_you'];
	   $hidden_logo = $_POST['hidden_logo'];
	   
	   $tkn = $_POST['token'];
	  $frontend->update_frontEnd($site_n,$st_slogan,$st_n,$st_ow_n,$st_ph,$st_em,$st_add,$mta_key,$mta_title,$mta_des,$copy_text,$s_fac,$s_twit,$s_goog,$s_you,$tkn,'img',$hidden_logo);
	  }
  
  
  
  
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
    <link href="plugins/misc/prettify/prettify.css" type="text/css" rel="stylesheet" />
    <link href="plugins/misc/pnotify/jquery.pnotify.default.css" type="text/css" rel="stylesheet" />               
    
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
    
    
    <!---================================================================END Squriping======================================================-->
    </head>
      
    <body>
    <?php include('header.php');?>


    <div id="wrapper">

<?php include('side_bar.php');?>

        <!--Body content-->
        <div id="content" class="clearfix">
            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

                    <h3>Category Page</h3>                    

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
                        <li class="active">Frontend Page</li>
                    </ul>

                </div><!-- End .heading-->

                <!-- Build page from here: -->
                <div class="row-fluid">

					<div class="span12">

						<div class="box gradient">

							<div class="title">
								<h4>
									<span class="eco-list ">Add Frontend</span>                                        
									<button class="label btn btn-primary btn-minibtn btn-danger">Cansel</button>
									<button type="button" id="myButton"class="label btn btn-primary btn-mini">Save changes</button>
								
								</h4>
				   
							</div>
                                
                            <div class="content noPad clearfix">
								<form class="form-horizontal" id="form-validate" action="<?php echo $_['action']; ?>" method="post" enctype="multipart/form-data">	
                                <?php 
									$get_data = $frontend->get_frontEnd_data();
									foreach($get_data as $key){ 
								?>
                                          
                             	<input type="hidden" name="token" value="<?php echo $token; ?>" />	
                                <input type="hidden" name="hidden_logo" value="<?php echo $key['logo']; ?>" />
                            <div style="margin-bottom: 20px;">
                                	<ul id="myTab" class="nav nav-tabs pattern">
                                        <li class="active"><a href="#general" data-toggle="tab">General</a></li>
                                        <li><a href="#store" data-toggle="tab">Store</a></li>
                                        <li><a href="#seo" data-toggle="tab">Seo</a></li>
                                        <li><a href="#footer" data-toggle="tab">Footer</a></li>
                                        <li><a href="#social" data-toggle="tab">social</a></li>
                                                                          
                                	</ul>
								 
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="general">
                                      
										<div class="form-row row-fluid">
											<div class="span12">
												<div class="row-fluid">
													<div class="span12">
														<div class="form-row">
															<label class="form-label span2" for="required"><b>Site Title</b></label>
															<input class="span9 required" id="required" placeholder="Produce Name" name="st_n" type="text" value="<?php echo $key['title']; ?>" />
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span12">
														<div class="form-row">
															<label class="form-label span2" for="required"><b>Site Slogan</b></label>
															<input class="span9" id="required" name="st_slogan" placeholder="Meta Tag Title" type="text" value="<?php echo $key['slogan']; ?>"  />
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span12">
														<div class="form-row">
															<label class="form-label span2" for="username"><b>Logo:</b></label>
															<img  id="uploadPreview"  data-placeholder="images/defalt-image.png" class="image marginR10" src="../<?php echo $key['logo']; ?>" alt="" >
															<input id="uploadImage"  type="file"  name="img"  onchange="PreviewImage();" />
														</div>
													</div>
												</div>
											</div>
										</div>
											
									</div><!--tab1-->
                                    <!--===============================================END tab1==============================-->                                   
                                  
                                    <div class="tab-pane fade " id="store">
										<div class="form-row row-fluid">
											<div class="span12">
												<div class="row-fluid">
													<div class="span12">
														<div class="form-row">
															<label class="form-label span2" for="required"><b>Store name</b></label>
															<input class="span9 required" id="required" placeholder="Produce Name" name="store_name" type="text" value="<?php echo $key['store_name']; ?>" />
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span12">
														<div class="form-row">
															<label class="form-label span2" for="required"><b>Store Owner Name</b></label>
															<input class="span9 required" id="required" placeholder="Produce Name" name="st_ow_n" type="text" value="<?php echo $key['store_owner_name']; ?>" />
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span12">
														<div class="form-row">
															<label class="form-label span2" for="required"><b>Phone No:</b></label>
															<input class="span9 required" id="required" placeholder="Produce Name" name="st_ph" type="text" value="<?php echo $key['phone']; ?>" />
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span12">
														<div class="form-row">
															<label class="form-label span2" for="required"><b>Store Email:</b></label>
															<input class="span9 required" id="required" placeholder="Produce Name" name="st_em" type="text" value="<?php echo $key['email']; ?>" />
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span12">
														<div class="form-row">
															<label class="form-label span2" for="required"><b>Address</b></label>
															<textarea class="" name="st_add" style="width:75%;"><?php echo $key['address']; ?></textarea>
														</div>
													</div>
												</div>
											</div>
										</div>	
                                        
                                    </div><!--tab2-->
                                    <div class="tab-pane fade " id="seo">
										<div class="form-row row-fluid">
											<div class="row-fluid">
												<div class="span12">
													<div class="form-row">
														<label class="form-label span2" for="disabledInput"><b>Meta Keyword</b></label>
														<input class="span9" id="required" name="mta_key" placeholder="Meta Tag Title" type="text" value="<?php echo $key['meta_keyword']; ?>" />
													</div>
												</div>
											</div>
											<div class="row-fluid">
												<div class="span12">
													<div class="form-row">
														<label class="form-label span2" for="disabledInput"><b>Meta Title</b></label>
														<input class="span9" id="required" name="mta_title" placeholder="Meta Tag Title" type="text" value="<?php echo $key['meta_title']; ?>" />
													</div>
												</div>
											</div>
											<div class="row-fluid">
												<div class="span12">
													<div class="form-row">
														<label class="form-label span2" for="disabledInput"><b>Meta Description</b></label>
														<textarea class="" name="mta_des" style="width:75%;"><?php echo $key['meta_dis']; ?></textarea>
													</div>
												</div>
											</div>
										</div>	
                                        
                                    </div><!--tab3-->
                                    <div class="tab-pane fade " id="footer">
										<div class="form-row row-fluid">
											<div class="span12">
												<div class="form-row">
													<label class="form-label span2" for="required"><b>Copyright</b></label>
													<textarea class="" name="copy_text" style="width:75%;"><?php echo $key['copy_text']; ?></textarea>
												</div>
											</div>
										</div>

                                        
                                    </div><!--tab4-->
                                    <div class="tab-pane fade " id="social">
										<div class="form-row row-fluid">
											<div class="span12">
												<div class="form-row">
													<label class="form-label span2" for="required"><b>Facebook</b></label>
													<input class="span9" id="required" name="s_fac" placeholder="Facebook" type="text" value="<?php echo $key['facebook']; ?>" />
												</div>
												<div class="form-row">
													<label class="form-label span2" for="required"><b>Twitter</b></label>
													<input class="span9" id="required" name="s_twit" placeholder="Twitter" type="text" value="<?php echo $key['twitter']; ?>" />
												</div>
												<div class="form-row">
													<label class="form-label span2" for="required"><b>Google</b></label>
													<input class="span9" id="required" name="s_goog" placeholder="Google" type="text" value="<?php echo $key['google']; ?>" />
												</div>
												<div class="form-row">
													<label class="form-label span2" for="required"><b>Youtubbe</b></label>
													<input class="span9" id="required" name="s_you" placeholder="Youtubbe" type="text" value="<?php echo $key['youtube']; ?>" />
												</div>
											</div>
										</div>

                                        
                                    </div><!--tab5-->
                                                                  
                                </div><!-- tab-content-->
                                <?php } ?>
                            </div>
						   <div class="form-actions">
								<div class="span3"></div>
									<div class="span4 controls">
										 <button type="submit" style="display:none" class="btn btn-info marginR10">Save changes</button>
									   
									</div>
							</div>    
                        </form>                                                                 
                    </div><!--content noPad clearfix---->      
                                     
				</div>

            </div><!-- End .box -->

        </div><!-- End .row-fluid -->
                <!--End page -->
                
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
    <script type="text/javascript" src="plugins/misc/prettify/prettify.js"></script><!-- Code view plugin -->
    <script type="text/javascript" src="plugins/misc/qtip/jquery.qtip.min.js"></script><!-- Custom tooltip plugin -->
    <script type="text/javascript" src="plugins/misc/animated-progress-bar/jquery.progressbar.js"></script>
    <script type="text/javascript" src="plugins/misc/pnotify/jquery.pnotify.min.js"></script>
    <script type="text/javascript" src="plugins/misc/totop/jquery.ui.totop.min.js"></script>  

    <!-- Search plugin -->
    <script type="text/javascript" src="plugins/misc/search/tipuesearch_set.js"></script>
    <script type="text/javascript" src="plugins/misc/search/tipuesearch_data.js"></script><!-- JSON for searched results -->
    <script type="text/javascript" src="plugins/misc/search/tipuesearch.js"></script>

    <!-- Form plugins -->
    <script type="text/javascript" src="plugins/forms/watermark/jquery.watermark.min.js"></script>
    <script type="text/javascript" src="plugins/forms/uniform/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="plugins/forms/select/select2.min.js"></script>
    <script type="text/javascript" src="plugins/forms/validate/jquery.validate.min.js"></script>
    <script type="text/javascript" src="plugins/forms/smartWizzard/jquery.smartWizard-2.0.min.js"></script>
        <!------------------------------------------------------------------------------------>
		
    <script type="text/javascript" src="plugins/forms/elastic/jquery.elastic.js"></script>
    <script type="text/javascript" src="plugins/forms/inputlimiter/jquery.inputlimiter.1.3.min.js"></script>
    <script type="text/javascript" src="plugins/forms/maskedinput/jquery.maskedinput-1.3.min.js"></script>
    <script type="text/javascript" src="plugins/forms/ibutton/jquery.ibutton.min.js"></script>
    
    <script type="text/javascript" src="plugins/forms/stepper/ui.stepper.js"></script>
    <script type="text/javascript" src="plugins/forms/color-picker/colorpicker.js"></script>
    <script type="text/javascript" src="plugins/forms/timeentry/jquery.timeentry.min.js"></script>
   
    <script type="text/javascript" src="plugins/forms/dualselect/jquery.dualListBox-1.3.min.js"></script>
    <script type="text/javascript" src="plugins/forms/tiny_mce/jquery.tinymce.js"></script>
 
		<!------------------------------------------------------------------------------------>
    <!-- Fix plugins -->
    <script type="text/javascript" src="plugins/fix/ios-fix/ios-orientationchange-fix.js"></script>
     
    <!-- Important Place before main.js  -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
    <script type="text/javascript" src="plugins/fix/touch-punch/jquery.ui.touch-punch.min.js"></script><!-- Unable touch for JQueryUI -->
<!-- ------------------------------------->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/supr-theme/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript" src="js/supr-theme/jquery-ui-sliderAccess.js"></script>
    <!-----------------------------------autocomplete------------------------------------------------->
   
	<script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
   
<!------------------------------------------------------------------------------------>
    <!-- Init plugins -->
	<script type="text/javascript" src="js/main.js"></script><!-- Core js functions -->
    <script type="text/javascript" src="js/forms.js"></script><!-- Init plugins only for page -->
    <script type="text/javascript" src="js/form-validation.js"></script><!-- Init plugins only for page -->
    <script type="text/javascript">
    // document ready function
    $(document).ready(function() { 
     
        $("#tags").select2({
            tags:["red", "green", "blue", "orange"]
        });

        $(".ibuttonCheck").iButton({
             labelOn: "<span class='icon16 icomoon-icon-checkmark-2 white'></span>",
             labelOff: "<span class='icon16 icomoon-icon-cancel-3 white'></span>",
             enableDrag: false
        });
    });//End document ready functions
    </script>
       <script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
<!------------------------save-------------------------->
<script type="text/javascript">
    $(document).ready(function() {
       $("#myButton").click(function() {
           $("#form-validate").submit();
       });
    });
</script>
<?php include 'msg.php'; ?>
    </body>
</html>
