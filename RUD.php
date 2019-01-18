<?php
session_start();
  //echo $_SESSION['use']; die;
  if(!isset($_SESSION['use'])) {
    header("Location: login.php");
  }

  require_once('functions/database.php');

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="assets/img/favicon.png">

	<title>QuillPro - Bootstrap 4 Dashboard Template</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&amp;subset=latin-ext" rel="stylesheet">

	<!-- CSS - REQUIRED - START -->
	<!-- Batch Icons -->
	<link rel="stylesheet" href="assets/fonts/batch-icons/css/batch-icons.css">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap/mdb.min.css">
	<!-- Custom Scrollbar -->
	<link rel="stylesheet" href="assets/plugins/custom-scrollbar/jquery.mCustomScrollbar.min.css">
	<!-- Hamburger Menu -->
	<link rel="stylesheet" href="assets/css/hamburgers/hamburgers.css">

	<!-- CSS - REQUIRED - END -->

	<!-- CSS - OPTIONAL - START -->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
	<!-- JVMaps -->
	<link rel="stylesheet" href="assets/plugins/jvmaps/jqvmap.min.css">
	<!-- CSS - OPTIONAL - END -->

	<!-- QuillPro Styles -->
	<link rel="stylesheet" href="assets/css/quillpro/quillpro.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<!-- Add MEDIA Queries -->

<body>

	<div class="container-fluid">
		<div class="row">
			<nav id="sidebar" class="px-0 bg-dark bg-gradient sidebar">
				<ul class="nav nav-pills flex-column">
					<li class="logo-nav-item">
						<a class="navbar-brand" href="#">
							<h3 style="font-size: 18px;">Template Website <br> Generator</h3>
						</a>

					</li>
          <li class="nav-item">
            <a class="nav-link nav-parent" href="#">
              <i class="fas fa-tachometer-alt" style="padding-right: 10px;"></i>
            Dashboard / Logout
            </a>
            <ul class="nav nav-pills flex-column">
              <li id="Dashboard_TotalUser" class="nav-item">
                <a class="nav-link" href="index.php">- &nbsp; Create</a>
              </li>
              <li id="Dashboard_Patientformedicationcollection" class="nav-item">
                <a class="nav-link" href="RUD.php">- &nbsp; RUD</a>
              </li>
            </ul>
          </li>

				</ul>
				</nav>
				</div>


			<div class="right-column">
				<nav class="navbar navbar-expand-lg navbar-light bg-white" style="width: 101%;">
					<button class="hamburger hamburger--slider" type="button" data-target=".sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle Sidebar">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>



					<div class="navbar-collapse" id="navbar-header-content">
						<ul class="navbar-nav navbar-language-translation mr-auto">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" id="navbar-dropdown-menu-link" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
									<i class="batch-icon batch-icon-book-alt-"></i>
									English
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbar-dropdown-menu-link">
									<li><a class="dropdown-item" href="#">Français</a></li>
									<li><a class="dropdown-item" href="#">Deutsche</a></li>
									<li><a class="dropdown-item" href="#">Español</a></li>
								</ul>
							</li>
						</ul>

						<ul class="navbar-nav ml-5 navbar-profile">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" id="navbar-dropdown-navbar-profile" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
									<div class="profile-name">
										Dinesh Mittal <!-- Dynamic Character Value via PHP to the left -->
									</div>
									<div class="profile-picture bg-gradient bg-primary has-message float-right">
										<img src="assets/img/profile-pic.jpg" width="44" height="44">
									</div>
								</a>
								<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-dropdown-navbar-profile">
                  <!--
									<li><a class="dropdown-item" href="profiles-member-profile.html">Profile</a></li>
									<li>
										<a class="dropdown-item" href="mail-inbox.html">
											Messages
											<span class="badge badge-danger badge-pill float-right">3</span>
										</a>
									</li>
									<li><a class="dropdown-item" href="profiles-member-profile.html">Settings</a></li>
                -->
									<li><a class="dropdown-item" href="logout.php">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>



				<!--<main class="main-content p-5" role="main">-->
				<!--
        <div style="width: 1500px; height: 100%; position: relative; left: 30%; margin-top: 4%;">
					<div class="row">
						<div class="col-md-6 col-lg-6 col-xl-3 mb-5">
							<div id="Card-TotalUsers" class="card card-tile card-xs bg-primary bg-gradient text-center">
								<div class="card-body p-4">
									<!-- Accepts .invisible: Makes the items. Use this only when you want to have an animation called on it later -->
				<!--
									<div class="tile-left">
										<i class="fas fa-users fa-5x"></i>
									</div>
									<div class="tile-right">
										<div class="tile-number">26</div> <!-- Dynamic numerical value to the left PHP -->
				<!--
										<div class="tile-description">Total Users</div>
									</div>
								</div>
							</div>
						</div>
            <div class="col-md-6 col-lg-6 col-xl-3 mb-5">
							<div id="Card_MedicationCollections" class="card card-tile card-xs bg-primary bg-gradient text-center">
								<div class="card-body p-4">
									<!-- Accepts .invisible: Makes the items. Use this only when you want to have an animation called on it later -->
				<!--
									<div class="tile-left">
										<i class="fas fa-handshake fa-5x"></i>
									</div>
									<div class="tile-right">
										<div class="tile-number">14</div> <!-- Dynamic numerical value to the left PHP -->
				<!--
										<div class="tile-description">Medication Collections</div>
									</div>
								</div>
							</div>
						</div>
          </div>

          <div class="row">
						<div class="col-md-6 col-lg-6 col-xl-3 mb-5">
							<div id="Card_TotalStaff" class="card card-tile card-xs bg-primary bg-gradient text-center">
								<div class="card-body p-4">
									<div class="tile-left">
										<i class="fas fa-stethoscope fa-5x"></i>
									</div>
									<div class="tile-right">
										<div class="tile-number">17</div> <!-- Dynamic numerical value to the left PHP -->

								<!--
										<div class="tile-description">Total Staff</div>
									</div>
								</div>
							</div>
						</div>
            <div class="col-md-6 col-lg-6 col-xl-3 mb-5">
							<div id="Card_MedicationDelivery" class="card card-tile card-xs bg-primary bg-gradient text-center">
								<div class="card-body p-4">
									<!-- Accepts .invisible: Makes the items. Use this only when you want to have an animation called on it later -->
						<!--
									<div class="tile-left">
										<i class="fas fa-truck fa-5x"></i>
									</div>
									<div class="tile-right">
										<div class="tile-number">7</div> <!-- Dynamic numerical value to the left PHP -->
						<!--
										<div class="tile-description">Medication Delivery</div>
									</div>
								</div>
							</div>
						</div>
          </div>
          <div class="row">
						<div class="col-md-6 col-lg-6 col-xl-3 mb-5">
							<div id="Card_Contacts" class="card card-tile card-xs bg-primary bg-gradient text-center">
								<div class="card-body p-4">
									<div class="tile-left">
										<i class="fas fa-address-book fa-5x"></i>
									</div>
									<div class="tile-right">
										<div class="tile-number">4</div> <!-- Numerical value of number of Patients, Use PHP, dynamic numerical value -->
						<!--
										<div class="tile-description">Contacts</div>
									</div>
								</div>
							</div>
						</div>
            <div class="col-md-6 col-lg-6 col-xl-3 mb-5">
							<div id="Card_Logout" class="card card-tile card-xs bg-primary bg-gradient text-center">
								<div class="card-body p-4">
									<!-- Accepts .invisible: Makes the items. Use this only when you want to have an animation called on it later -->
					<!--
									<div class="tile-left">
										<i class="fas fa-sign-out-alt fa-5x"></i>
									</div>
									<div class="tile-right">
										<div class="tile-description">Logout</div>
									</div>
								</div>
							</div>
						</div>
          </div>
</div>

-->




<div style="margin-left: 245px; width: 78%; margin-top: 3%;">
<div class="row mb-5">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12">

              <table style="width:100%" class="table table-bordered">
                  <tr>
										<th>Id</th>
                    <th>Company Name</th>
                    <th>Read</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>

                  <?php
                 $database = new Database();
                 $allData = $database->selectAll();
                 //print_r($allData);
                ?>

                <?php



                foreach ($allData as $data){

                 echo
                 '
                  <tr>
                  <td>'.$data["id"].'</td>
                  <td>'.$data["Page_1_Main_Title"].'</td>
                  <td><button type="button" onclick=" window.open(\'template website/Elements/Elements/read.php?id='.$data["id"].'\', \'_blank\');" return false; class="btn btn-primary waves-effect waves-light">Read</td>
                  <td><button type="button" onclick=" window.open(\'update.php?id='.$data["id"].'\', \'_blank\');" return false; class="btn btn-success waves-effect waves-light">Update</td>
                  <td><button type="button" onclick="deleteFunction('.$data["id"].');" class="btn btn-danger waves-effect waves-light">Delete</td>
                  </tr>
                  ';

                }

                ?>



                </table>

							</div>
						</div>
					</div>
				</div>
			</div>




					<div class="row mb-4">
						<div class="col-md-12">
							<footer>
							</footer>
						</div>
					</div>
				</main>
			</div>
		</div>
	</div>

<!--
  <script>

    function delete(n){

      if (confirm("Are you sure?")) {

        $.ajax({
          url: 'functions/delete.php',
          type: 'POST',
          data: {id: n},
          success: function(response) {
            console.log(response);
            alert('This Works');

          }
        });

      } else {

      }

    }

  </script>

-->

<script>

  function deleteFunction(functionId) {

    if (confirm("Are you sure?")) {

      $.ajax({
        url: 'functions/delete.php',
        type: 'POST',
        data: {id: functionId},
        success: function(response) {
          console.log(response);
          location.reload();

        }
      });

    } else {

    }

  }

</script>

	<!-- SCRIPTS - REQUIRED START -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- Bootstrap core JavaScript -->
	<!-- JQuery -->
	<script type="text/javascript" src="assets/js/jquery/jquery-3.1.1.min.js"></script>
	<!-- Popper.js - Bootstrap tooltips -->
	<script type="text/javascript" src="assets/js/bootstrap/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="assets/js/bootstrap/mdb.min.js"></script>
	<!-- Velocity -->
	<script type="text/javascript" src="assets/plugins/velocity/velocity.min.js"></script>
	<script type="text/javascript" src="assets/plugins/velocity/velocity.ui.min.js"></script>
	<!-- Custom Scrollbar -->
	<script type="text/javascript" src="assets/plugins/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- jQuery Visible -->
	<script type="text/javascript" src="assets/plugins/jquery_visible/jquery.visible.min.js"></script>
	<!-- jQuery Visible -->
	<script type="text/javascript" src="assets/plugins/jquery_visible/jquery.visible.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script type="text/javascript" src="assets/js/misc/ie10-viewport-bug-workaround.js"></script>

	<!-- SCRIPTS - REQUIRED END -->

	<!-- SCRIPTS - OPTIONAL START -->
	<!-- ChartJS -->
	<script type="text/javascript" src="assets/plugins/chartjs/chart.bundle.min.js"></script>
	<!-- JVMaps -->
	<script type="text/javascript" src="assets/plugins/jvmaps/jquery.vmap.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jvmaps/maps/jquery.vmap.usa.js"></script>
	<!-- Image Placeholder -->
	<script type="text/javascript" src="assets/js/misc/holder.min.js"></script>
	<!-- SCRIPTS - OPTIONAL END -->

	<!-- QuillPro Scripts -->
	<script type="text/javascript" src="assets/js/scripts.js"></script>

  <!-- Customised JavaScript -->

	<script type="text/javascript" src="create.js"></script>

	<!--
  <script type="text/javascript" src="customisedJavascript/Dashboard.js"></script>
-->
</body>
</html>
