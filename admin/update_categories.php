<?php 
 require_once('../include/admin_class.php');
  require_once('../include/categories_class.php');
  
  $admin = new admin();
  $category = new categories();
  
  $admin->globals();
  $token = $_REQUEST['token'];
  $cat_id = $_REQUEST['cat_id'];  
  $admin->check_admin_login();
  $admin->check_admin_token($token);
  $row = $category->edit_show_category($cat_id);
  $cat = $category->category();
  
 if($_SERVER['REQUEST_METHOD'] == "POST"){

			  $ct = $_POST['cat_name'];
			  $cat_des = $_POST['cat_des'];
			  if($_POST['p_id'] != ''){
				  $p_id = $_POST['p_id'];
				  }else{
					  $p_id = $_POST['p_id'];
					  }
			  if(empty($_POST['cat_top'])){
							$cat_top = '0';
						}else{
							$cat_top ='1';
						}			  
			  $tkn = $_POST['token'];
			  $cat_id = $_POST['cat_id'];
			  $hidden_img = $_POST['hidden_img'];
			 $category->update_category($ct,$cat_des,$p_id,$cat_top,'img',$hidden_img,$tkn,$cat_id);
			 #$category->update_category($ct,$cat_des,$cat_m_title,$cat_meta_key,$cat_meta_descrip,$p_id,$cat_top,'img',$tkn,$cat_id,$hidden_img);
			 
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
    
    
    <!---================================================================END Squriping======================================================-->
    </head>
      
    <body>
<?php 
	include('header.php');
?>

    <div id="wrapper">

<?php 
	include('side_bar.php');
?>

        <!--Body content-->
        <div id="content" class="clearfix">
            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

                    <h3>Update Page</h3>                    

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
                        <li class="active"> Update Category Page</li>
                    </ul>

                </div><!-- End .heading-->

                <!-- Build page from here: -->
                <div class="row-fluid">

                        <div class="span12">

                            <div class="box gradient">

                                <div class="title">
                                    <h4>
                                        <span class="eco-list ">Update Categories</span>                                        
                                        <button class="label btn btn-primary btn-minibtn btn-danger" onclick="window.history.back()">Cansel</button>
                                        <button type="button" id="myButton"class="label btn btn-primary btn-mini">Save changes</button>
                                    
                                    </h4>
                       
                                </div>
                                
                            <div class="content noPad clearfix">
								<form class="form-horizontal" id="form-validate" action="<?php echo $_['action']; ?>" method="post" enctype="multipart/form-data">	
                                          
                                <input type="hidden" name="token" value="<?php echo $token; ?>" />	
                                <input type="hidden" name="cat_id" value="<?php echo $cat_id; ?>" />
                                
                                <div style="margin-bottom: 20px;">
                                	<ul id="myTab" class="nav nav-tabs pattern">
                                        <li class="active"><a href="#general" data-toggle="tab">General</a></li>
                                        <li><a href="#data" data-toggle="tab">Data</a></li>
                                                                          
                                	</ul>
                                  <?php 								 
									foreach($row as $val){										
										} 
								?>
<input type="hidden" name="hidden_img" value="<?php  echo $val['cat_img'];?>" />
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="general">
                                      <div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="row-fluid">
                                                    <label class="form-label span2" for="required"><b>Category Name</b></label>
                                                    <input class="span9" id="required" name="cat_name" value="<?php echo $val['title'];?>" placeholder="Category Name" type="text" />
                                                </div>
                                            </div>
                                        </div>
                                     
									  <div class="form-row row-fluid">
                                            <div class="span12">
                                                <div class="form-row">
                                                <label class="form-label span2" for="required"><b>Description</b></label>
                                                    <textarea class="tinymce " name="cat_des" style="width:75%;"><?php echo $val['cat_des'];?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                     
                                      


                                        
                                    </div><!--tab1-->
                                    <!--===============================================END tab1==============================-->                                   
                                  
                                        <div class="tab-pane fade " id="data">
											<div class="form-row row-fluid">
												<div class="span12">
													<div class="row-fluid">
														<label class="form-label span2" for="required"><b>Parent</b></label>
														<input type="text" id="autocomplete" placeholder="Parent" name="cat_parent" class="span9" />													
														<script>
															
																	$(function(){
																	var currencies = [
																	<?php foreach($cat as $key){ ?>
																	{ value: '<?php echo $key['name'] ?>', cat_id: '<?php echo $key['id']?>' },
																	<?php  } ?>
																  ];
																  
																  // setup autocomplete function pulling from currencies[] array
																  $('#autocomplete').autocomplete({
																	lookup: currencies,
																	onSelect: function (suggestion) {
																	  var thehtml = '<input type="hidden" name="p_id" value="' + suggestion.cat_id + '" /> ';
																	  $('#hides').html(thehtml);
																	}
																  });
																  

																});
																							
														</script>
														<div id="hides" style=""></div>
												  
													</div>
														
												</div>
											</div>
											
											  <div class="form-row row-fluid">
												<div class="span12">
													<div class="row-fluid">
														<label class="form-label span2" for="disabledInput"><b>SEO Keyword</b></label>
														<input class="span9 disabled" id="disabledInput" type="text" placeholder="Disabled SEO Keyword…" disabled="disabled" />
													</div>
												</div>
											</div>
											
											
											
											<div class="form-row row-fluid">
												<div class="span12">
													<div class="row-fluid">
													
														<label class="form-label span2" for="username"><b>Image:</b></label>
														<img  id="uploadPreview"  style="height:70px; width:70px;" data-placeholder="imglibrary/autoimage/no_image-100x100.png" class="image marginR10" src="../<?php echo $val['cat_img'];?>" alt="" >
														<input id="uploadImage"  type="file"  name="img"  onchange="PreviewImage();" />
													</div>
												</div>
											</div> 

											<div class="form-row row-fluid">
											<div class="span12">
												<div class="row-fluid">												
													<label class="form-label span2" for="username">Top</label>
													<div class="left marginR10">
														<input type="checkbox" id="inlineCheckbox4" name="cat_top" <?php echo $val['cat_top'];  ?> class="ibutton nostyle" /> 
													</div>
												</div>
											</div>
										</div>										
                                        
                                    </div><!--tab2-->
                                    <!--===============================================tab2==============================-->
                                    <!--tab3-->
                                    <!--===============================================tab3==============================-->
                                   
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
 
		
    <!-- Fix plugins -->
    <script type="text/javascript" src="plugins/fix/ios-fix/ios-orientationchange-fix.js"></script>
     
    <!-- Important Place before main.js  -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
    <script type="text/javascript" src="plugins/fix/touch-punch/jquery.ui.touch-punch.min.js"></script><!-- Unable touch for JQueryUI -->

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/supr-theme/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript" src="js/supr-theme/jquery-ui-sliderAccess.js"></script>
   
   
	<script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>

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
