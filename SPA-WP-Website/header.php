<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo get_bloginfo('name'); ?></title>

    <!-- Custom styles for this template -->
	<!-- <link href="blog.css" rel="stylesheet"> -->
	<link href="<?php echo get_bloginfo('template_directory');?>/style.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Positioning (with Tether) & JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<?php wp_head();?>
  </head>

  <style>

	.logo { /* Is "makeshift" as Wordpress won't load in CSS image
		/*
		display: inline-block;
		overflow: hidden;
		white-space: nowrap; */
		height: 100px;
	}

	.navigation {
		/* background-image: url("images/logo.png"); */

		height: 50px;
		width: 2500px;
		margin-left: -10px;
		margin-right: 0;
        background-color: green;
		margin-top: 0px;
		position: fixed;
		z-index: 1;
	}
	.navigation a {
		position: relative;
		left: 100px;
		color: white;
        right: 10px;
        top: 15px;
		text-decoration: none;
		padding-left: 10px;
		padding-right: 10px;
	}

	.navigation a:hover {
		color: purple;
	}

	.services-content div {
		width: 300px;
		height: 300px;
		background-color: grey;
		display: inline-block;
		position: relative;
		top: 100px;
		margin-left: 40px;
		margin-right: 40px;
	}

	.SAM {
		position: relative;
		top: 80px;
		left: 100px;
		width: 150px;
	}
	.LT {
		position: relative;
		top: 40px;
		left: 500px;
	}
	.DAII {
		position: relative;
		top: 10px;
		left: 900px;
		width: 100px;
	}

	.about-content {
		height: 400px;
		background-color: green;
		display: inline-block;
	}
	.about-image-placeholder {
		position: relative;
		float: left;
		background-color: black;
		width: 600px;
		height: 400px;
		display: inline-block;
	}
	.about-right {
		position: relative;
		display: inline-block;

		float: right;
		background-color: white;
		width: 600px;
		height: 400px;
	}
	.about-image-text {
		background-color: white;
		width: 200px;
		height: 200px;

	}

	/* Item Gallery */
	.itemGallery {
		margin-left: 20px;
		margin-right: 20px;
		margin-top: 20px;
		margin-bottom: 20px;

		padding-left: 20px;
		padding-right: 20px;
		padding-top: 20px;
		padding-bottom: 20px;

	}
	.blog-post-inner {
		z-index: 0;
		position: relative;
		top: -60px;
		display: inline-block;
		width: 240px;
		/* height: 240px; */
		margin: 10px;
		/* border: 2px solid blue; */
		color: black;
		/* text-align: center; */
	}
	.blog-post {
		z-index: 1;
		display: inline-block;
		border: 2px solid green;
		text-align: center;
		width: 260px;
		height: 250px;
	}

	.contact-content {
		margin-top: 50px;
		margin-bottom: 50px;
		height: 300px;
		background-color: orange;
	}
	.contact-details-left {7c
        color: green;
		position: relative;
		float: left;
		margin-left: 200px;
		display: inline-block;
	}
	.contact-form {
		positon: absolute;
		left: 400px;
	}
	.form-style-1 {
		position: absolute;
		right: 300px;
		margin:10px auto;
		max-width: 380px;
		padding: 20px 12px 10px 20px;
		font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	}
	.form-style-1 input {
		border: 2px solid black;
	}
	.form-style-1 li {
		padding: 0;
		display: block;
		list-style: none;
		margin: 10px 0 0 0;
	}
	.form-style-1 label {
		margin:0 0 3px 0;
		padding:0px;
		display:block;
		font-weight: bold;
	}
	.message-box {
		border: 2px solid black;
	}
	.form-submit-button {
		background-color: green;
		color: white;
		padding: 10px 10px 10px 10px;
		margin: 10px 10px 10px 10px;
	}
	.form-submit-button input {
		background-color: green;
		border-color: purple;
		margin-left: 100px;
		color: white;
	}

	.footer-wrapper {
		position: relative;
		background-color: green;
		min-height: 200px;
		top: 100px;
		color: white;
	}
	/*
	.footer-address {
		/*
		position: absolute;
		left: 100px;
		float: left;
		padding-top: 10px;
		padding-bottom: 10px; *
		display: inline-block;
	}
	footer-contact {
		display: inline-block;
	}
	*/
	.footer ul {
		width: 100%;
		margin: 0;
		padding: 0;
		list-style: none;
	}
	.footer ul li {
		float: left;
		padding-left: 100px;
		width: 30%
		margin-right: 5%;
	}
	.footer ul li.right {
		margin-right: 0;
	}
	.footer-socialmedia {
		display: block;
		color: white;
		font-size: 20px;
	}
	.footer-socialmedia a {
		color: white;
	}
    .footer * {
        color: white;
    }

	/*
	.generatorsForSale {
		padding-top: 10px;

		height: 400px;

		padding-borrom: 10px;
	} */

  </style>
  <body>

	<div class="logo">
	</div>
	<!--
	<span class="span-title"> LOREM IPSUM  </span>
	<script>
	new Tether({
		element: '.span-title',
		target: '.logo',
		attatchment: 'top center',
		targetAttatchment: 'left top'
	});
	</script> -->

	<div class="navigation">
		<nav class="nav">
			<!-- <a class="a class="nav-item active" href="#">Home</a> -->
			<a class="a class="nav-item active" id="scrollToServices" href="#">Services</a>
            <a class="a class="nav-item active" id="scrollToAbout" href="#">About</a>
			<!-- <a class="a class="nav-item active" id="scrollToGens" href="#"> Generators for Sale </a> -->
			<a class="a class="nav-item active" id="itemsForSale" href="#">Items for Sale</a> <!-- This is [WAS] a hyperlink-to-page not a button -->
			<a class="a class="nav-item active" id="scrollToContact" href="#">Contact</a>
			<?php/* wp_list_pages('&title_li='); */?> <!-- this line may not be needed -->
			<a class="header-email" href="#"> example@gmail.com </a>
			<a class="header-number"> 00000 000000 </a>
            <a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-facebook"></a>
		</nav>
	</div>


	<!--
	<div id="returnToTopDiv" style="position:fixed;">
		<a href="#" id="returnToTop"> To top? </a>
	</div>
	-->

    <div class="container">


		<style>

        * {
            color: green;
        }

		.hoveringInfoBox {
			position: fixed;
			border: 2px dotted blue;
			background-color: rgba(176, 66, 244, 0.1);
			color: white;
			top: 200px;
			right: 40px;
			z-index: 1;
			color: white;
		}
		.hoveringInfoBox-contact {
			font-weight: bold;
			color: white;
			text-decoration: underlined;
		}
		</style>
		<div class="hoveringInfoBox">
			<a href="#" id="hoveringInfoBox-contact">Contact</a> us to buy an item.
		</div>

<!-- Scroll To (JQuery / Javascript) -->
<script>


$('document').ready(function() {

	var distance = $('.navigation a').offset().top,
    $window = $(document);
    var speed = 1400;

	$window.scroll(function() {
		if ($window.scrollTop() < distance + 0.1) {
			console.log("div at top");
			$('.navigation').css('margin-top', 0);
		} else { // if ($window.scrollTop() >= distance + 90) {
			console.log("div NOT at top");
			$('.navigation').css('margin-top', -110);
		}
	});

	$.fn.scrollView = function (event) {
		return this.each(function () {
			$('html, body').animate({
				scrollTop: $(this).offset().top
			}, speed);
		});
	}

	$('#scrollToServices').click(function (event) {
	  event.preventDefault();
	  $('.services-content').scrollView(speed);
	});

	$('#itemsForSale').click(function (event) {
		event.preventDefault();
		$('.itemGallery').scrollView(speed);
	});

	$('#scrollToAbout').click(function (event) {
	  event.preventDefault();
	  $('.about-content').scrollView(speed);
	});

	$('#hoveringInfoBox-contact').click(function (event) {
		event.preventDefault();
		$('.contact-content').scrollView(speed);
	});

	$('#scrollToContact').click(function (event) {
	  event.preventDefault();
	  $('.contact-content').scrollView(speed);
	});

	/*
	$('#returnToTop').click(function (event) {
		event.preventDefault();
		$('.navigation').scrollView();
	});
	*/

});

</script>
