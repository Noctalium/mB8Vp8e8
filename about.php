<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require("global.php");
?>

<html lang="zxx">
<head>
    <title>Voyages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Expedition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=EB+Garamond:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- //online-fonts -->
</head>
<body>
    <!-- banner -->
    <div class="inner-banner">
        <!-- header -->

        <?php
        require("tpl/header.php");

        ?>

        <!-- //header -->
    </div>
    <!-- //banner -->
     <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
    </nav>
	<!-- about -->
	<section class="welcome py-5">
		<div class="container py-md-4 mt-md-3">
			<div class="w3ls-titles text-center">
				<h3 class="title"><span class="hdng">A propos </span> de nous</h3>
				<span class="btmspn">
					<i class="fas fa-ship"></i>
				</span>

			</div>

			<div class="row about-tp mt-md-5 pt-5">
				<div class="col-lg-6 welcome-left">
					<h3>Bienvenue</h3>
					<h4>MarieTeam est une compagnie de transports maritimes assurant la desserte
						d'îles du littoral français. </br>
						Nous assurons le transport de voyageurs, ainsi que le transport
						de marchandises.
						Parmis les îles desservies, se trouve par exemple Belle-Île-en-mer,
						Houat, Île de Groix, Ouessant, Molène, Sein, Bréhat, Batz, Aix, et bien
						plus encore !
					</h4>
				</div>
				<div class="col-lg-6 welcome-right">
					<div class="welcome-right-top">
						<img src="images/g1.jpg" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //about -->
	<!-- banner bottom -->
	<div class="banner-bottom py-5">
		<div class="container py-xl-3 py-lg-3">
			<div class="row">
				<div class="col-md-9 banner-left-bottom-w3ls">
					<h3 class="text-white my-3">N'hésitez plus, réservez maintenant ! </h3>

				</div>
				<div class="col-md-3 button">
					<a href="index.php " class="w3ls-button-agile">Réserver
						<i class="fas fa-hand-point-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner bottom -->


	<!-- about-team -->
	<section class="team py-5">
		<div class="container py-md-4 mt-md-3">
			<div class="w3ls-titles text-center">
				<h3 class="title"><span class="hdng">Les </span>capitaines</h3>
				<span class="btmspn">
					<i class="fas fa-ship"></i>
				</span>
			</div>

			<div class="row team-row-agileinfo mt-md-5 pt-5">
				<div class="col-lg-3 col-md-6 col-sm-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/capitaine1.jpg" class="img-fluid" alt="" />
						<div class="effectd-caption">
							<h4 class="mb-3">Jean-Charles</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/capitaine1.jpg" class="img-fluid" alt="" />
						<div class="effectd-caption">

							<h4 class="mb-3">Bilel</h4>

						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/capitaine1.jpg" class="img-fluid" alt="" />
						<div class="effectd-caption">
							<h4 class="mb-3">Erison</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/capitaine1.jpg" class="img-fluid" alt="" />
						<div class="effectd-caption">
							<h4 class="mb-3">Roger</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- //about-team -->

   <!--footer -->
<footer>
    <?php
    require("tpl/footer.php");
    require ('session/login.php');
    require ('session/register.php');
    ?>
    <!-- //footer -->
</footer>
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- contact validation js -->
    <script src="js/form-validation.js"></script>
   
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>