<?php 
  require_once('../include/admin_class.php');
  require_once('../include/categories_class.php');
  
  $admin = new admin();
  $category = new categories();
  
  $admin->globals();
  $token = $_REQUEST['token'];
  $admin->check_admin_login();
  $admin->check_admin_token($token);
  $row = $category->category();
  
  if($_SERVER['REQUEST_METHOD'] == "POST"){		
	$tkn = $_POST['token'];
	$delecte_id = $_POST['check[]'];

	$category->delete_cat($delecte_id,$tkn);		
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
   
    </head>
      
    <body>
 <?php 
	include('header.php');
?>
			
			<div id="wrapper">
			
			<?php 
				include('side_bar.php');
			?>
                <div id="content" class="clearfix">
                                  
                    <div class="heading">

                        <h3 >Categories page</h3>                    

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
                            <li class="active">Email page</li>
                        </ul>

                    </div><!-- End .heading-->

                    <!-- Build page from here: -->
                   
  						<div class="row-fluid">
  
                          <div class="span12">
  
                              <div class="box gradient">
  
                                 <div class="title">
                                      <h4>
                                          <span>Email </span>
  										<a href="#"onclick="confirm_delete()" id="delete"><span class=" label btn btn-danger btn-mini">Delete</span></a>
                                          <a href="add_categories.php<?php echo $_['url_prm']; ?>"><span class="label btn btn-primary btn-mini">Add New</span></a>
                                      </h4>
                                  </div>
                                  <div class="content noPad clearfix email">
									<form method="post" id="form-delete" action="<?php echo $_['action']; ?>">
										
										<div class="form-row row-fluid">
											<div class="span12">
												<div class="row-fluid">
													<div class="span12">
														<div class="form-row">
															<label class="form-label span2" for="required"><b>From</b></label>
															<input class="span9 required" id="required" placeholder="From" name="st_n" type="text" value="" />
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span12">
														<div class="form-row">
															<label class="form-label span2" for="required"><b>To</b></label>
															<select class="span3" id="required" name="st_slogan" placeholder="To" type="text" value="">
																<option value="volvo">Volvo</option>
																<option value="saab">Saab</option>
																<option value="opel">Opel</option>
																<option value="audi">Audi</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span12">
														<div class="form-row">
															<label class="form-label span2" for="required"><b>Subject</b></label>
															<input class="span9" id="required" name="st_slogan" placeholder="Subject" type="text" value=""  />

														</div>
													</div>
												</div>
												<div class="row-fluid">
													<div class="span12">
														<div class="form-row">
															<label class="form-label span2" for="required"><b>Message</b></label>
															<textarea class="span9 elastic" id="textarea" rows="8"></textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
                                  
                                      </form>
                                  </div>
  
                              </div><!-- End .box -->
  
                          </div><!-- End .span12 -->
  
                      </div>




					
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
                                        <textarea class="elastic" id="textarea1" rows="1" placeholder="Enter your message ..." style="width:98%;"></textarea>
                                        <button type="submit" class="btn btn-info marginT10">Send message</button>
                                    </form>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn" data-dismiss="modal">Close</a>
                        </div>
                    </div>


                </div>

            </div><!-- End .span9 -->                
        </div><!-- End #wrapper .row -->

    </div><!-- End .container -->
    <!-- footer area -->
	<div id="footer_area">
		<div class="footer_area_inner">
			
				   <?php include 'footer.php';?>
			
		</div>
	</div><!-- End wrapper -->
	<!--/ footer area -->
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
             <!------------------------------------image ----------------------------------->
<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
	
		//Regular success
    

</script>

 <?php include('msg.php');?>


    </body>
</html>
