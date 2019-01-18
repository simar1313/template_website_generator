<?php
session_start();
  //echo $_SESSION['use']; die;
  if(!isset($_SESSION['use'])) {
    header("Location: ../../../login.php");
  }

 ?>

<?php

require_once('../../../functions/database.php');

$id = $_GET['id'];
$database = new Database();
$data = $database->read($id);

?>
 <!DOCTYPE HTML>

 <html>
 	<head>
 		<title> </title>
 		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 		<meta name="description" content="" />
 		<meta name="keywords" content="" />
 		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
 		<script src="js/jquery.min.js"></script>
 		<script src="js/jquery.dropotron.min.js"></script>
 		<script src="js/jquery.scrollgress.min.js"></script>
 		<script src="js/jquery.scrolly.min.js"></script>
 		<script src="js/jquery.slidertron.min.js"></script>
 		<script src="js/skel.min.js"></script>
 		<script src="js/skel-layers.min.js"></script>
 		<script src="js/init.js"></script>
 		<noscript>
 			<link rel="stylesheet" href="css/skel.css" />
 			<link rel="stylesheet" href="css/style.css" />
 			<link rel="stylesheet" href="css/style-xlarge.css" />
 		</noscript>
 		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
 		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
 	</head>
 	<body class="landing">

 		<!-- Header -->
 			<header id="header" class="alt skel-layers-fixed">
 				<h1><a href="read.php">HTML5 Website<?php echo "Title: ".$data["Page_1_Main_Title"]; ?></a></h1>
 				<nav id="nav">
 					<ul>
 						<li><a href="read.php">Home</a></li>
 						<li>
 							<a href="" class="icon fa-angle-down">Layouts</a>
 							<ul>
 								<li><a href="left-sidebar.html">Left Sidebar</a></li>
 								<li><a href="right-sidebar.html">Right Sidebar</a></li>
 								<li><a href="no-sidebar.html">No Sidebar</a></li>
 								<li>
 									<a href="">Submenu</a>
 									<ul>
 										<li><a href="#">Option 1</a></li>
 										<li><a href="#">Option 2</a></li>
 										<li><a href="#">Option 3</a></li>
 										<li><a href="#">Option 4</a></li>
 									</ul>
 								</li>
 							</ul>
 						</li>
 						<li><a href="elements.html">Elements</a></li>
 					</ul>
 				</nav>
 			</header>

 		<!-- Banner -->
 			<section id="banner">
 				<div class="inner">
 					<h2><?php echo $data["Page_1_Main_Title"];?></h2>
 					<p><?php echo $data["Page_1_Paragraph"];?></p>
 					<ul class="actions">
 						<li><a href="#one" class="button big scrolly">Learn More</a></li>
 					</ul>
 				</div>
 			</section>

 		<!-- One -->
 			<section id="one" class="wrapper style1">
 				<div class="container">
 					<header class="major">
 						<h2><?php echo $data["Page_2_Main_Title"]; ?></h2>
 						<p><?php echo $data["Page_2_Paragraph"];?></p>
 					</header>
 					<div class="slider">
 						<span class="nav-previous"></span>
 						<div class="viewer">
 							<div class="reel">
 								<div class="slide">
 									<img src="images/<?php echo $data["id"] ?>/<?php echo $data["img"] ?>" alt="" />
 								</div>
                <!--
 								<div class="slide">
 									<img src="images/slide02.jpg" alt="" />
 								</div>
 								<div class="slide">
 									<img src="images/slide03.jpg" alt="" />
 								</div>
              -->
 							</div>
 						</div>
 						<span class="nav-next"></span>
 					</div>
 				</div>
 			</section>

 		<!-- Two -->
 			<section id="two" class="wrapper style2">
 				<div class="container">
 					<div class="row uniform">
 						<div class="4u 6u(2) 12u$(3)" style="max-height: 500px; overflow: auto;">
 							<section class="<?php echo $data["font_awesome_img1"] ?>">
 								<h3><?php echo $data["title1"] ?></h3>
 								<p><?php echo $data["Paragraph1"]?></p>
 							</section>
 						</div>
 						<div class="4u 6u$(2) 12u$(3)" style="max-height: 500px; overflow: auto;">
 							<section class="<?php echo $data["font_awesome_img2"]?>">
 								<h3><?php echo $data["title2"] ?></h3>
 								<p><?php echo $data["Paragraph2"] ?></p>
 							</section>
 						</div>
 						<div class="4u$ 6u(2) 12u$(3)" style="max-height: 500px; overflow: auto;">
 							<section class="<?php echo $data["font_awesome_img3"] ?>">
 								<h3><?php echo $data["title3"] ?></h3>
 								<p><?php echo $data["Paragraph3"]?></p>
 							</section>
 						</div>
 						<div class="4u 6u$(2) 12u$(3)" style="max-height: 500px; overflow: auto;">
 							<section class="<?php echo $data["font_awesome_img4"]?>">
 								<h3><?php echo $data["title4"]?></h3>
 								<p><?php echo $data["Paragraph4"]?></p>
 							</section>
 						</div>
 						<div class="4u 6u(2) 12u$(3)" style="max-height: 500px; overflow: auto;">
 							<section class=" <?php echo $data["font_awesome_img5"] ?>">
 								<h3><?php echo $data["title5"] ?></h3>
 								<p><?php echo $data["Paragraph5"] ?></p>
 							</section>
 						</div>
 						<div class="4u$ 6u$(2) 12u$(3)" style="max-height: 500px !important; overflow: auto !important;">
 							<section class="<?php echo $data["font_awesome_img6"] ?>">
 								<h3><?php echo $data["title6"] ?></h3>
 								<p><?php echo $data["Paragraph6"] ?></p>
 							</section>
 						</div>
 					</div>
 				</div>
 			</section>

 		<!-- Three -->
 			<section id="three" class="wrapper style1">
 				<div class="container">
 					<header class="major">
 						<h2><?php echo $data["page_4_Title"] ?></h2>
 						<p><?php echo $data["page_4_Paragraph"] ?></p>
 					</header>
 					<div class="row">
 						<div class="4u 6u(2) 12u$(3)">
 							<article class="box post">
 								<a href="#" class="image fit"><img src="images/<?php echo $data["id"] ?>/<?php echo $data["Div_Card_1_image"] ?>" alt="" /></a>
 								<h3><?php echo $data["Div_Card_1_Title"] ?></h3>
 								<p><?php echo $data["Div_Card_1_Paragraph"] ?></p>
 								<ul class="actions">
 									<li><a href="#" class="button">Learn More</a></li>
 								</ul>
 							</article>
 						</div>
 						<div class="4u 6u$(2) 12u$(3)">
 							<article class="box post">
 								<a href="#" class="image fit"><img src="images/<?php echo $data["id"] ?>/<?php echo $data["Div_Card_2_image"] ?>" alt="" /></a>
 								<h3><?php echo $data["Div_Card_2_Title"] ?></h3>
 								<p><?php echo $data["Div_Card_2_Paragraph"] ?></p>
 								<ul class="actions">
 									<li><a href="#" class="button">Learn More</a></li>
 								</ul>
 							</article>
 						</div>
 						<div class="4u$ 6u(2) 12u$(3)">
 							<article class="box post">
 								<a href="#" class="image fit"><img src="images/<?php echo $data["id"] ?>/<?php echo $data["Div_Card_3_image"] ?>" alt="" /></a>
 								<h3><?php echo $data["Div_Card_3_Title"] ?></h3>
 								<p><?php echo $data["Div_Card_3_Paragraph"] ?></p>
 								<ul class="actions">
 									<li><a href="#" class="button">Learn More</a></li>
 								</ul>
 							</article>
 						</div>
 						<div class="4u 6u$(2) 12u$(3)">
 							<article class="box post">
 								<a href="#" class="image fit"><img src="images/<?php echo $data["id"] ?>/<?php echo $data["Div_Card_4_image"] ?>" alt="" /></a>
 								<h3><?php echo $data["Div_Card_4_Title"] ?></h3>
 								<p><?php echo $data["Div_Card_4_Paragraph"] ?></p>
 								<ul class="actions">
 									<li><a href="#" class="button">Learn More</a></li>
 								</ul>
 							</article>
 						</div>
 						<div class="4u 6u(2) 12u$(3)">
 							<article class="box post">
 								<a href="#" class="image fit"><img src="images/<?php echo $data["id"] ?>/<?php echo $data["Div_Card_5_image"] ?>" alt="" /></a>
 								<h3><?php echo $data["Div_Card_5_Title"] ?></h3>
 								<p><?php echo $data["Div_Card_5_Paragraph"] ?></p>
 								<ul class="actions">
 									<li><a href="#" class="button">Learn More</a></li>
 								</ul>
 							</article>
 						</div>
 						<div class="4u$ 6u$(2) 12u$(3)">
 							<article class="box post">
 								<a href="#" class="image fit"><img src="images/<?php echo $data["id"] ?>/<?php echo $data["Div_Card_6_image"] ?>" alt="" /></a>
 								<h3><?php echo $data["Div_Card_6_Title"] ?></h3>
 								<p><?php echo $data["Div_Card_6_Paragraph"] ?></p>
 								<ul class="actions">
 									<li><a href="#" class="button">Learn More</a></li>
 								</ul>
 							</article>
 						</div>
 					</div>
 				</div>
 			</section>

 		<!-- CTA -->
 			<section id="cta" class="wrapper style3">
 				<h2><?php echo $data["Banner_Text"] ?></h2>
 				<ul class="actions">
 					<li><a href="#" class="button big">Get Started</a></li>
 				</ul>
 			</section>

      <style>

        :root {
          --modal-duration: 1s;
          --modal-color: #428bca;
        }


      /*  body {
          font-family: Arial, Helvetica, sans-serif;
          background: #f4f4f4;
          font-size: 17px;
          line-height: 1.6;
          display: flex;
          height: 100vh;
          align-items: center;
          justify-content: center;
        }

        */

/*
        .button {
          background: #428bca;
          padding: 1em 2em;
          color: #fff;
          border: 0;
          border-radius: 5px;
          cursor: pointer;
        }

        .button:hover {
          background: #3876ac;
        }

  */

        .modal {
          display: none;
          position: fixed;
          z-index: 1;
          left: 0;
          top: 0;
          height: 100%;
          width: 100%;
          overflow: auto;
          background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
          margin: 10% auto;
          width: 60%;
          box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 7px 20px 0 rgba(0, 0, 0, 0.17);
          animation-name: modalopen;
          animation-duration: var(--modal-duration);
        }

        .modal-header h2,
        .modal-footer h3 {
          margin: 0;
        }

        .modal-header {
          background: var(--modal-color);
          padding: 15px;
          color: #fff;
          border-top-left-radius: 5px;
          border-top-right-radius: 5px;
        }

        .modal-body {
          padding: 10px 20px;
          background: #fff;
        }

        .modal-footer {
          background: var(--modal-color);
          padding: 10px;
          color: #fff;
          text-align: center;
          border-bottom-left-radius: 5px;
          border-bottom-right-radius: 5px;
        }

        .close {
          color: #ccc;
          float: right;
          font-size: 30px;
          color: #fff;
        }

        .close:hover,
        .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
        }

        @keyframes modalopen {
          from {
            opacity: 0;
          }
          to {
            opacity: 1;
          }
        }

        </style>

      <div id="my-modal" class="modal">
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h3>Contact Me</h3>
          </div>
          <div class="modal-body">
            <p><b>Like what you see!! Contact me for a fully developed bespoke website on 07732511703</b></p>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>

      <script>

        // Get DOM Elements
        const modal = document.querySelector('#my-modal');
        const modalBtn = document.querySelector('#modal-btn');
        const closeBtn = document.querySelector('.close');

        // Events
      //  modalBtn.addEventListener('click', openModal);
      setTimeout(function(){ modal.style.display = 'block'; }, 8000);
        closeBtn.addEventListener('click', closeModal);
        window.addEventListener('click', outsideClick);

        // Open
        function openModal() {
          modal.style.display = 'block';
        }

        // Close
        function closeModal() {
          modal.style.display = 'none';
        }

        // Close If Outside Click
        function outsideClick(e) {
          if (e.target == modal) {
            modal.style.display = 'none';
          }
        }
        </script>

 		<!-- Footer -->
 			<footer id="footer">
 				<ul class="icons">
 					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
 					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
 					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
 					<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
 					<li><a href="#" class="icon fa-envelope"><span class="label">Envelope</span></a></li>
 				</ul>
 				<ul class="menu">
 					<li><a href="#">FAQ</a></li>
 					<li><a href="#">Terms of Use</a></li>
 					<li><a href="#">Privacy</a></li>
 					<li><a href="#">Contact</a></li>
 				</ul>
 				<span class="copyright">
 					&copy; Copyright. All rights reserved. Design by <a href="http://www.html5webtemplates.co.uk">Responsive Web Templates</a>
 				</span>
 			</footer>


 	</body>
 </html>
