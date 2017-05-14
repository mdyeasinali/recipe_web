<?php 
  require_once('../include/admin_class.php');
  require_once('../include/adv_class.php');
  
  
  $admin = new admin();
  $advertise = new advertise();
  $admin->globals();
  $token = $_REQUEST['token'];
  $adv_id = $_REQUEST['adv_id'];
  
  $admin->check_admin_login();
  $admin->check_admin_token($token);
  
  
	
	if($_SERVER['REQUEST_METHOD'] == "POST"){		  	
			  
			  $ad_title = $_POST['ad_title'];
			  $ad_des = $_POST['ad_url'];
			  if(empty($_POST['ad_footer'])){
							$ad_footer = '0';
						}else{
							$ad_footer ='1';
						}
						if(empty($_POST['ad_c_page'])){
							$ad_c_page = '0';
						}else{
							$ad_c_page ='1';
						}
						if(empty($_POST['ad_cat'])){
							$ad_cat = '0';
						}else{
							$ad_cat ='1';
						}
			  if(empty($_POST['ad_st'])){
							$ad_st = '0';
						}else{
							$ad_st ='1';
						}			  
			  $tkn = $_POST['token'];
			  $hidden_img = $_POST['hidden_img'];
			  $adv_id = $_POST['adv_id'];
			  
			  $advertise->update_adv($ad_title, $ad_des, $ad_footer, $ad_c_page, $ad_cat, $ad_st, $tkn,'img',$hidden_img,$adv_id);
			   
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
    <link href="plugins/forms/inputlimiter/jquery.inputlimiter.css" type="text/css" rel="stylesheet" />
    <link href="plugins/forms/ibutton/jquery.ibutton.css" type="text/css" rel="stylesheet" />
    <link href="plugins/forms/uniform/uniform.default.css" type="text/css" rel="stylesheet" />
    <link href="plugins/forms/color-picker/color-picker.css" type="text/css" rel="stylesheet" />
    <link href="plugins/forms/select/select2.css" type="text/css" rel="stylesheet" />
    <link href="plugins/forms/validate/validate.css" type="text/css" rel="stylesheet" />	 
    <link href="plugins/forms/smartWizzard/smart_wizard.css" type="text/css" rel="stylesheet" />             
    <link href="plugins/tables/dataTables/jquery.dataTables.css" type="text/css" rel="stylesheet" />    
    <link href="plugins/gallery/jpages/jPages.css" rel="stylesheet" type="text/css" />
    <link href="plugins/gallery/pretty-photo/prettyPhoto.css" type="text/css" rel="stylesheet" />               
    
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
    <?php include('header.php');?>


    <div id="wrapper">

<?php include('side_bar.php');?>

        <!--Body content-->
        <div id="content" class="clearfix">
            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

                    <h3>Edit Advertiseing Page</h3>                    

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
                        <li class="active">Edit Advertiseing Page</li>
                    </ul>

                </div><!-- End .heading-->

                <!-- Build page from here: -->
                <div class="row-fluid">

                        <div class="span12">
						<div class="box gradient">

                               <div class="title">
                                    <h4>
                                        <span class="eco-list ">Edit Advertiseing</span>                                         
                                        <button class="label btn btn-primary btn-minibtn btn-danger" onclick="window.history.back()">Cansel</button>
                                        <button type="button" id="myButton"class="label btn btn-primary btn-mini">Save changes</button>                                    
                                    </h4>
                       
                                </div>
                                
                             <div class="content noPad clearfix">
                              <form class="form-horizontal" id="form-validate" action="<?php echo $_['action']; ?>" method="post" enctype="multipart/form-data">    
                                     
                             	
								
							<div style="margin-bottom: 20px;">
                            <?php 
									$es = $advertise->edit_show_adv($adv_id);
									foreach($es as $val){
										
										}
								?>
							
                                <input type="hidden" name="token" value="<?php echo $token; ?>" />
                                <input type="hidden" name="adv_id" value="<?php echo $adv_id; ?>" />	
                                <input type="hidden" name="hidden_img" value="<?php echo $val['img']; ?>" />                                 	

                                <div class="tab-content">                                 
                                    <div class="form-row row-fluid">
										<div class="span12">
											<div class="row-fluid">
												<label class="form-label span2" for="required">Title</label>
												<input type="text" class="span9 required " id="required" value="<?php echo $val['title']; ?>"  name="ad_title" placeholder="Advertiseing Title "  />
											</div>
										</div>
									</div>
									<div class="form-row row-fluid">
										<div class="span12">
											<div class="row-fluid">
												<label class="form-label span2" for="required">Script</label>
												<textarea type="text" class="span9 required " id="required"  name="ad_url"><?php echo $val['url']; ?></textarea>
											</div>
										</div>
									</div>
									<!---
									<div class="form-row row-fluid">
										<div class="span12">
											<div class="row-fluid">												
												<label class="form-label span2" for="username">Advertiseing Image</label>
												<img  id="uploadPreview"  style="height:70px; width:70px;" data-placeholder="" class="image marginR10" src="../<?php echo $val['img'];  ?>" alt="" >
												<input id="uploadImage" type="file" name="img" onChange="PreviewImage();" />
											</div>
										</div>
									</div> 
									--->
									<!---
									<div class="form-row row-fluid">
										<div class="span12">
											<div class="row-fluid">
												<label class="form-label span2" for="required">Advertiseing URL</label>
												<input type="text" class="span9 " id="required" name="ad_url"value="<?php echo $val['title']; ?>" placeholder="Advertiseing URL"  />
											</div>
										</div>
									</div>
									--->
									<div class="form-row row-fluid">
										<div class="span12">
											<div class="row-fluid">												
												<label class="form-label span2" for="username">Footer</label>
												<div class="left marginR10">
													<input type="checkbox" id="inlineCheckbox4" name="ad_footer" <?php echo $val['ad_footer'];  ?>  class="ibutton nostyle" /> 
												</div>
											</div>
										</div>
									</div>
									<div class="form-row row-fluid">
										<div class="span12">
											<div class="row-fluid">												
												<label class="form-label span2" for="username">Recipe</label>
												<div class="left marginR10">
													<input type="checkbox" id="inlineCheckbox4" name="ad_c_page" <?php echo $val['ad_c_page'];  ?>  class="ibutton nostyle" /> 
												</div>
											</div>
										</div>
									</div>
									<div class="form-row row-fluid">
										<div class="span12">
											<div class="row-fluid">												
												<label class="form-label span2" for="username">Category</label>
												<div class="left marginR10">
													<input type="checkbox" id="inlineCheckbox4" name="ad_cat" <?php echo $val['ad_cat'];  ?>  class="ibutton nostyle" /> 
												</div>
											</div>
										</div>
									</div>
									<div class="form-row row-fluid">
										<div class="span12">
											<div class="row-fluid">												
												<label class="form-label span2" for="username">Status</label>
												<div class="left marginR10">
													<input type="checkbox" id="inlineCheckbox4" name="ad_st" <?php echo $val['ad_st'];  ?>  class="ibutton nostyle" /> 
												</div>
											</div>
										</div>
									</div>
							    </div><!-- tab-content-->
                               
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
                        

                           

                        </div>               

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
    <script type="text/javascript" src="plugins/misc/qtip/jquery.qtip.min.js"></script><!-- Custom tooltip plugin -->
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
    <?php include('msg.php');?>  
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

    </body>
</html>
