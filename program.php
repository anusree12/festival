<?php
    session_start();
 
    if (!isset($_SESSION['id']))
     {
        header('location:index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
<meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
<meta name="author" content="PIXINVENT">
<title>Gokulolsavam</title>
<link rel="shortcut icon" type="image/png" href="">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!-- font icons-->
<link rel="stylesheet" type="text/css" href="fonts/icomoon.css"> 
<link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css"> 
<link rel="stylesheet" type="text/css" href="fonts/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" type="text/css" href="css/pace.css">
<!-- END VENDOR CSS-->
<!-- BEGIN ROBUST CSS-->
<link rel="stylesheet" type="text/css" href="css/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="css/app.css">
<link rel="stylesheet" type="text/css" href="css/colors.css">
<link rel="stylesheet" type="text/css" href="css/summernote.css">
<link rel="stylesheet" type="text/css" href="css/select2.min.css">
<!-- END ROBUST CSS-->
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href="css/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="css/vertical-overlay-menu.css">
<link rel="stylesheet" type="text/css" href="css/datatables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-switch.css">
<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap-datepicker3.min.css" crossorigin="anonymous">
<link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="css/mdtimepicker.css" rel="stylesheet" type="text/css">


<!-- END Custom CSS-->
</head>

<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns fixed-navbar">

<!-- navbar-fixed-top-->
	<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-light navbar-shadow">
		<div class="navbar-wrapper"style="background-color: #006666">
			<div class="navbar-header">
				<ul class="nav navbar-nav">
					<li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
					<li class="nav-item">
					<a href="masterhome.php" class="navbar-brand nav-link">
					<h2 style="color:white">Gokulolsavam</h2>
					</a>
					</li>
					<li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
				</ul>
			</div>
			<div class="navbar-container content container-fluid">
				<div id="navbar-mobile" class="collapse navbar-toggleable-sm">
					<ul class="nav navbar-nav">
						<li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5"></i></a></li>
					</ul>
					<ul class="nav navbar-nav float-xs-right">
						<li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="images/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name" style="color:white">Master</span></a>
						<div class="dropdown-menu dropdown-menu-right">
						<a href="index.php" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
						</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>




<!-- main menu-->
	<div data-scroll-to-active="true" class="main-menu menu-fixed menu-light menu-accordion menu-shadow">

		<div class="main-menu-header">
		<!-- <input type="text" placeholder="Search" class="menu-search form-control round"/> -->
		</div>


		<div class="main-menu-content">
			<ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

				<li class=" nav-item"><a href="home.php"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Home</span></a>
				</li>
				<li class=" nav-item"><a href="program.php"><i class="icon-file-text"></i><span data-i18n="nav.icons.main" class="menu-title">Program</span></a>
				</li>

				<li class=" nav-item"><a href="part.php"><i class="glyphicon glyphicon-th-list"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">Part Registration</span></a>
				</li>

				<li class=" nav-item"><a href="category.php"><i class="glyphicon glyphicon-th-list"></i><span data-i18n="nav.bootstrap_tables.table_basic" class="menu-title">Category Registration</span></a>
				</li>

				<li class=" nav-item"><a href="items.php"><i class="glyphicon glyphicon-th-list"></i><span data-i18n="nav.google_charts.main" class="menu-title">Items Registration</span></a></li>

				<li class=" nav-item"><a href="area.php"><i class="glyphicon glyphicon-th-list"></i><span data-i18n="nav.chartjs.main" class="menu-title">Area Registration</span></a></li>

				
			</ul>
		</div>

	</div>
<!-- / main menu-->

<!-- ////////////////////////////////////////////////////////////////////////////-->


<div class="app-content content container-fluid">
	<div class="content-wrapper">
		
				<div class="row">
					<div class="col-xs-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Programs</h4>
								<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
								<div class="heading-elements">
									<ul class="list-inline mb-0">
										<li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
										<li><a data-action="reload"><i class="icon-reload"></i></a></li>
										<li><a data-action="expand"><i class="icon-expand2"></i></a></li>
										<li><a data-action="close"><i class="icon-cross2"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="card-body collapse in">
								<div class="card-block card-dashboard">
									

									<div class="responsive-table">
										<div id="datatables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
											<div class="row">
												<div class="col-sm-6 style="overflow-x: auto;">
													<?php
	
													include("dbconnect.php");
													$sql="SELECT * FROM tbl_program";
													$result=$conn->query($sql);
													if($result->num_rows>0)
														{
														echo "<table id='datatables-example' class='table table-hover table-bordered dataTable no-footer' width='100%' cellspacing='0' role='grid' aria-describedby='datatables-example_info' style='width: 100%;''>
														<thead>
															<tr role='row'>
															
																<th class='sorting_asc' tabindex='0' aria-controls='datatables-example' rowspan='1' colspan='1' aria-sort='ascending' aria-label='Name: activate to sort column descending' style='width: 169px;'>Sl No</th>
																<th class='sorting' tabindex='0' aria-controls='datatables-example' rowspan='1' colspan='1' aria-label='Position: activate to sort column ascending' style='width: 263px;'>Program</th>
																
																
																<!--<th class='sorting' tabindex='0' aria-controls='datatables-example' rowspan='1' colspan='1' aria-label='Start date: activate to sort column ascending' style='width: 119px;'>Action</th>-->
															</tr>
														</thead>
														";

														while($row=$result->fetch_assoc())
														{
														echo "
														<tbody>
															<tr role='row' class='odd'>
															<td class='sorting_1'>".$row['id']."</td>
																<td class='sorting_1'>".$row['program']."</td>
																
																<td>
																<!--<a class='btn btn-primary' href='#0' data-toggle= 'modal' data-target='#myModal'>
																 <i class='glyphicon glyphicon-eye-open'></i></a>
																<a class='btn btn-info' href='#0'>
																<i class='glyphicon glyphicon-pencil'></i></a>
																<a href='delete.php?id=".$row['id']."' onclick='return confirm('Are you sure want to delete this post?')''><span style='color:#fff;' class='btn btn-danger glyphicon glyphicon-trash' title='Delete post'>
																	
																</span></a> -->
																
																</td>

															</tr>
															
														</tbody>";
														}
												echo "</table>";

													}
												else
												{
													echo "0 result";
												}
									$conn->close();

								?>
												</div>
											</div>
										</div>
									</div>

							</div>
						</div>
					</div>
				</div>


			</section>

		</div>

	</div>
</div>


<!-- ////////////////////////////////////////////////////////////////////////////-->


<footer class="footer footer-static footer-light navbar-border">
<p class="clearfix text-muted text-sm-center mb-0 px-2">
	<span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2019 <a href="" target="_blank" class="text-bold-700 black footer_logo">Gokulolsavam </span>
	<span class="float-md-right d-xs-block d-md-inline-block"><a href="" target="_blank" class="text-bold-500 grey darken-2"> </a></span></p>
</footer>


<div class="modal myModal" id="myModal">
	    <div class="modal-dialog">
	        <button type="button" class="close" data-dismiss="modal"></button>
	      <div class="modal-content">

	        <div class="modal-body" id="">
	        	<form class="form">
										<div class="form-body">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
													<label for="">Name</label>
													<input type="text" id="" class="form-control" placeholder="First Name" name="fname" autocomplete="off">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													<label for="">Mail</label>
													<input type="mail" id="" class="form-control" placeholder="Last Name" name="lname"" autocomplete="off">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													<label for="">File</label>
													<input type="file" id="" class="form-control" placeholder="Last Name" name="lname">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group sandbox-container">
													<label for="">Datepicker</label>
													<input type="text" id="" class="form-control" placeholder="Last Name" name="lname" autocomplete="off">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													<label for="">Timepicker</label>
													<input type="text" id="" class="form-control timepicker" placeholder="Last Name" name="lname" autocomplete="off">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="projectinput6">Select</label>
														<select class="select2-B form-control" multiple="multiple">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													<label for="">Checkbox</label>
													<div class="input-group">
													<label class="display-inline-block custom-control custom-checkbox">
													<input type="checkbox" name="customer1" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">Home Visible</span>
													</label>
													<label class="display-inline-block custom-control custom-checkbox">
													<input type="checkbox" name="customer1" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">Home Visible</span>
													</label>
													</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
													<label for="projectinput2">Radio</label>
													<div class="input-group">
													<label class="display-inline-block custom-control custom-radio">
													<input type="radio" name="customer1" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">Home Visible</span>
													</label>
													<label class="display-inline-block custom-control custom-radio">
													<input type="radio" name="customer1" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description">Home Visible</span>
													</label>
													</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
													<label for="">Textarea</label>
													<textarea id="" rows="5" class="form-control summernote hidden" name="comment" placeholder="About Project"></textarea>
													</div>
												</div>
												<div class="col-md-12">
												<div class="form-group">
												<button type="submit" class="btn btn-primary">
												<i class="icon-check2"></i> Submit</button>
												</div>
												</div>
											</div>
										</div>
									</form>
	        </div>

	        
	      </div>
	    </div>
	</div>


<!-- BEGIN VENDOR JS-->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/tether.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="js/unison.min.js" type="text/javascript"></script>
<script src="js/blockUI.min.js" type="text/javascript"></script>
<script src="js/jquery.matchHeight-min.js" type="text/javascript"></script>
<script src="js/screenfull.min.js" type="text/javascript"></script>
<script src="js/pace.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->

<script src="js/jquery.datatables.min.js"></script>
<script src="js/datatables.bootstrap.min.js"></script>
<!-- BEGIN ROBUST JS-->
<script src="js/app-menu.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script>
<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="js/dashboard-lite.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
    $('#datatables-example2').DataTable();
  });
</script>
<!-- <script src="assets/js/bootstrap-switch.js"></script> -->
<!-- <script type="text/javascript">

    $(document).ready(function()
    {
        $("[name='status-change']").bootstrapSwitch();
        $('input[name="status-change"]').on('switchChange.bootstrapSwitch', function(event, state) {
            var this_=$(this);
            var id=$(this).data('id');
            var checkbox = $(this);  
            var status = checkbox.is(':checked');
            //alert(status);
            $.ajax({
                type: 'POST',
                //url: 'http://tnmonlinesolutions.com/foodzer/admin/super_admin/change_category_home_visible',
                //beforeSend: function(){$('input[name="status-change"]').bootstrapSwitch('toggleDisabled', true, true);},
                //complete: function(){},
                data: {category_id: id, status: status},
                success: function(html)
                {
                    //$('input[name="status-change"]').bootstrapSwitch('toggleDisabled', false, false);
                }
            });
        });

    });

</script> -->
<script src="js/summernote.min.js"></script>
<script src="js/select2.full.min.js"></script>
<script type="text/javascript">
	(function(jQuery){
          $('.summernote').summernote({
            height: 260
          });

          $(".select2-B").select2({
            tags: true
          });

    })(jQuery);
 </script>

<script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		$('.sandbox-container input').datepicker({
			format: "dd-mm-yyyy",
		});
	});
</script>
<script src="js/mdtimepicker.js"></script>
<script>
  $(document).ready(function(){
    $('.timepicker').mdtimepicker(); //Initializes the time picker
  });
</script>

</body>
</html>
