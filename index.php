<?php
session_start();
  if(!isset($_SESSION['use'])) {
    header("Location: login.php");
  }

  require_once('functions/database.php');

  $database = new Database();
  $id = $database->getMaxId() + 1;

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

							<form id="input_data" action="functions/create.php" method="post">

                <h3>ID</h3>
                <div class="form-group">
                  <label for="id" class="active">ID</label>
                  <span id="span_id"><?php echo $id; ?></span>
                </div>

								<h3>Page 1</h3>
								<div class="form-group">
									<label for="Page 1. Main Title" class="active">Page 1. Main Title</label>
									<input type="text" class="form-control" name="Page-1-Main-Title"  aria-describedby="emailHelp" placeholder="Enter Main Title">
								</div>
								<div class="form-group">
									<label for="Page 1. Paragraph" class="active">Page 1. Paragraph</label>
									<textarea class="form-control" name="Page-1-Paragraph"></textarea>
								</div>
								<hr>

								<h3>Page 2</h3>
								<div class="form-group">
									<label for="Page 2. Main Title" class="active">Page 2. Main Title</label>
									<input type="text" class="form-control" name="Page-2-Main-Title" placeholder="Enter Main Title">
								</div>
								<div class="form-group">
									<label for="Page 2. Paragraph" class="active">Page 2. Paragraph</label>
									<textarea class="form-control" name="Page-2-Paragraph"></textarea>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">File input</label>
									<input type="file" class="form-control-file" name="img" multiple id="exampleInputFile" aria-describedby="fileHelp">
								</div>
								<hr>
								<h3>Page 3 - Section 1</h3>
								<div class="form-group">
									<label for="font-awesome-img1" class="active">Font Awesome Image 1 </label>
									<input type="text" class="form-control" name="font-awesome-img1" placeholder="Enter Font Awesome Image 1">
								</div>
								<div class="form-group">
									<label for="title1" class="active">Title 1</label>
									<input type="text" class="form-control" name="title1" placeholder="Enter title">
								</div>
								<div class="form-group">
									<label for="Paragraph1" class="active">Paragraph 1</label>
									<textarea class="form-control" name="Paragraph1"></textarea>
								</div>
								<hr>
								<h3>Page 3 - Section 2</h3>
								<div class="form-group">
									<label for="font-awesome-img2" class="active">Font Awesome Image 2 </label>
									<input type="text" class="form-control" name="font-awesome-img2" placeholder="Enter Font Awesome Image 2">
								</div>
								<div class="form-group">
									<label for="title2" class="active">Title 2</label>
									<input type="text" class="form-control" name="title2" placeholder="Enter title">
								</div>
								<div class="form-group">
									<label for="Paragraph2" class="active">Paragraph 2</label>
									<textarea class="form-control" name="Paragraph2" placeholder="Enter Paragraph"></textarea>
								</div>
								<hr>
								<h3>Page 3 - Section 3</h3>
								<div class="form-group">
									<label for="font-awesome-img3" class="active">Font Awesome Image 3</label>
									<input type="text" class="form-control" name="font-awesome-img3" placeholder="Enter Font Awesome Image 3">
								</div>
								<div class="form-group">
									<label for="title3" class="active">Title 3</label>
									<input type="text" class="form-control" name="title3" placeholder="Enter title">
								</div>
								<div class="form-group">
									<label for="Paragraph3" class="active">Paragraph 3</label>
									<textarea class="form-control" name="Paragraph3" placeholder="Enter Paragraph"></textarea>
								</div>
								<hr>
								<h3>Page 3 - Section 4</h3>
								<div class="form-group">
									<label for="font-awesome-img4" class="active">Font Awesome Image 4</label>
									<input type="text" class="form-control" name="font-awesome-img4" placeholder="Enter Font Awesome Image 4">
								</div>
								<div class="form-group">
									<label for="title4" class="active">Title 4</label>
									<input type="text" class="form-control" name="title4" placeholder="Enter title">
								</div>
								<div class="form-group">
									<label for="Paragraph4" class="active">Paragraph 4</label>
									<textarea class="form-control" name="Paragraph4" placeholder="Enter Paragraph"></textarea>
								</div>
								<hr>
								<h3>Page 3 - Section 5</h3>
								<div class="form-group">
									<label for="font-awesome-img5" class="active">Font Awesome Image 5</label>
									<input type="text" class="form-control" name="font-awesome-img5" placeholder="Enter Font Awesome Image 5">
								</div>
								<div class="form-group">
									<label for="title5" class="active">Title 5</label>
									<input type="text" class="form-control" name="title5" placeholder="Enter title">
								</div>
								<div class="form-group">
									<label for="Paragraph5" class="active">Paragraph 5</label>
									<textarea class="form-control" name="Paragraph5" placeholder="Enter Paragraph"></textarea>
								</div>
								<hr>
								<h3>Page 3 - Section 6</h3>
								<div class="form-group">
									<label for="font-awesome-img6" class="active">Font Awesome Image 6</label>
									<input type="text" class="form-control" name="font-awesome-img6" placeholder="Enter Font Awesome Image 6">
								</div>
								<div class="form-group">
									<label for="title6" class="active">Title 6</label>
									<input type="text" class="form-control" name="title6" placeholder="Enter title">
								</div>
								<div class="form-group">
									<label for="Paragraph6" class="active">Paragraph 6</label>
									<textarea class="form-control" name="Paragraph6" placeholder="Enter Paragraph"></textarea>
								</div>
								<hr>
								<h3>Page 4</h3>
								<div class="form-group">
									<label for="page-4-Title" class="active">Page 4. Title</label>
									<input type="text" class="form-control" name="page-4-Title" placeholder="Enter title">
								</div>
								<div class="form-group">
									<label for="page-4-Paragraph" class="active">Page 4. Paragraph</label>
									<textarea class="form-control" name="page-4-Paragraph" placeholder="Enter Paragraph"></textarea>
								</div>
								<hr>
								<h3>Div Card - 1</h3>
								<div class="form-group">
									<label for="Div-Card-1-image">File input</label>
									<input type="file" class="form-control-file" name="Div-Card-1-image" multiple id="exampleInputFile" aria-describedby="fileHelp">
								</div>
								<div class="form-group">
									<label for="Div-Card-1-Title" class="active">Title</label>
									<input type="text" class="form-control" name="Div-Card-1-Title" placeholder="Enter title">
								</div>
								<div class="form-group">
									<label for="Div-Card-1-Paragraph" class="active">Paragraph</label>
									<textarea class="form-control" name="Div-Card-1-Paragraph" placeholder="Enter Paragraph"></textarea>
								</div>
								<hr>
								<h3>Div Card - 2</h3>
								<div class="form-group">
									<label for="Div-Card-2-image">File input</label>
									<input type="file" class="form-control-file" name="Div-Card-2-image" multiple id="exampleInputFile" aria-describedby="fileHelp">
								</div>
								<div class="form-group">
									<label for="Div-Card-2-Title" class="active">Title</label>
									<input type="text" class="form-control" name="Div-Card-2-Title" placeholder="Enter title">
								</div>
								<div class="form-group">
									<label for="Div-Card-2-Paragraph" class="active">Paragraph</label>
									<textarea class="form-control" name="Div-Card-2-Paragraph" placeholder="Enter Paragraph"></textarea>
								</div>
								<hr>
								<h3>Div Card - 3</h3>
								<div class="form-group">
									<label for="Div-Card-3-image">File input</label>
									<input type="file" class="form-control-file" name="Div-Card-3-image" multiple id="exampleInputFile" aria-describedby="fileHelp">
								</div>
								<div class="form-group">
									<label for="Div-Card-3-Title" class="active">Title</label>
									<input type="text" class="form-control" name="Div-Card-3-Title" placeholder="Enter title">
								</div>
								<div class="form-group">
									<label for="Div-Card-3-Paragraph" class="active">Paragraph</label>
									<textarea class="form-control" name="Div-Card-3-Paragraph" placeholder="Enter Paragraph"></textarea>
								</div>
								<hr>
								<h3>Div Card - 4</h3>
								<div class="form-group">
									<label for="Div-Card-4-image">File input</label>
									<input type="file" class="form-control-file" name="Div-Card-4-image" multiple id="exampleInputFile" aria-describedby="fileHelp">
								</div>
								<div class="form-group">
									<label for="Div-Card-4-Title" class="active">Title</label>
									<input type="text" class="form-control" name="Div-Card-4-Title" placeholder="Enter title">
								</div>
								<div class="form-group">
									<label for="Div-Card-4-Paragraph" class="active">Paragraph</label>
									<textarea class="form-control" name="Div-Card-4-Paragraph" placeholder="Enter Paragraph"></textarea>
								</div>
								<hr>
								<h3>Div Card - 5</h3>
								<div class="form-group">
									<label for="Div-Card-5-image">File input</label>
									<input type="file" class="form-control-file" name="Div-Card-5-image" multiple id="exampleInputFile" aria-describedby="fileHelp">
								</div>
								<div class="form-group">
									<label for="Div-Card-5-Title" class="active">Title</label>
									<input type="text" class="form-control" name="Div-Card-5-Title" placeholder="Enter title">
								</div>
								<div class="form-group">
									<label for="Div-Card-5-Paragraph" class="active">Paragraph</label>
									<textarea class="form-control" name="Div-Card-5-Paragraph" placeholder="Enter Paragraph"></textarea>
								</div>
								<hr>
								<h3>Div Card - 6</h3>
								<div class="form-group">
									<label for="Div-Card-6-image">File input</label>
									<input type="file" class="form-control-file" name="Div-Card-6-image" multiple id="exampleInputFile" aria-describedby="fileHelp">
								</div>
								<div class="form-group">
									<label for="Div-Card-6-Title" class="active">Title</label>
									<input type="text" class="form-control" name="Div-Card-6-Title" placeholder="Enter title">
								</div>
								<div class="form-group">
									<label for="Div-Card-6-Paragraph" class="active">Paragraph</label>
									<textarea class="form-control" name="Div-Card-6-Paragraph" placeholder="Enter Paragraph"></textarea>
								</div>
								<hr>
								<h3>Page 5. Banner Text</h3>
								<div class="form-group">
									<label for="Banner-text" class="active">Text</label>
									<input type="text" class="form-control" name="Banner-Text" placeholder="Insert text here">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
								</div>
							</form>
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
