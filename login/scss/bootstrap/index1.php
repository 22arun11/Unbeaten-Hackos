<?php

include_once('connection.php');

function dispaly_data(){
    global $conn;
    $query = "(SELECT * from sources limit 16) ";
    $result = mysqli_query($conn, $query);
    return $result;
}
$result = dispaly_data();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Constructive HTML Template</title>
<!--

Template 2102 Constructive

http://www.tooplate.com/view/2102-constructive

-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" href="css/tooplate-style.css">

	<script>
		var renderPage = true;

	if(navigator.userAgent.indexOf('MSIE')!==-1
		|| navigator.appVersion.indexOf('Trident/') > 0){
   		/* Microsoft Internet Explorer detected in. */
   		alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
   		renderPage = false;
	}
	</script>
<style>
.table100.ver1 td {
	font-family: Montserrat-Regular;
	font-size: 14px;
	color: #808080;
	line-height: 1.4;
}

.table100.ver1 th {
	font-family: Montserrat-Medium;
	font-size: 12px;
	color: #fff;
	line-height: 1.4;
	text-transform: uppercase;
	background-color: #36304a;
}

.table100.ver1 .row100:hover {
	background-color: #f2f2f2;
}

.table100.ver1 .hov-column-ver1 {
	background-color: #f2f2f2;
}

.table100.ver1 .hov-column-head-ver1 {
	background-color: #484848;
}

.table100.ver1 .row100 td:hover {
	background-color: #6c7ae0;
	color: #fff;
}
.limiter {
            width: 100%;
            margin: 0 auto;
        }

.wrap-table100 {
            width: 980px;
        }

		table {
            width: 100%;
            background-color: #fff;
        }

        th,
        td {
            font-weight: unset;
            padding-right: 10px;
        }
		.column100 {
            width: 130px;
            padding-left: 25px;
        }

        .column100.column1 {
            width: 265px;
            padding-left: 42px;
        }

        .row100.head th {
            padding-top: 24px;
            padding-bottom: 20px;
        }

        .row100 td {
            padding-top: 18px;
            padding-bottom: 14px;
        }
		a {
            margin: 0px;
            transition: all 0.4s;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
        }

        a:focus {
            outline: none !important;
        }

        a:hover {
            text-decoration: none;
        }
		
		
</style>	
</head>

<body>


	<!-- Loader -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	
	<!-- Page Content -->
	<div class="container-fluid tm-main">
		<div class="row tm-main-row">

			<!-- Sidebar -->
			<div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar">

				<button id="tmMainNavToggle" class="menu-icon">&#9776;</button>

				<div class="inner">
					<nav id="tmMainNav" class="tm-main-nav">
						<ul>
							<li>
								<a href="#intro" id="tmNavLink1" class="scrolly active" data-bg-img="constructive_bg_01.png" data-page="#tm-section-1" >
									<i class="fas fa-home tm-nav-fa-icon"></i>
									<span>Introduction</span>
								</a>
							</li>
							<li>
								<a href="#products" id="tmNavLink2" class="scrolly active " data-bg-img="constructive_bg_07.jpg"  data-page="#tm-section-2" data-page-type="carousel">
									<i class="fas fa-map tm-nav-fa-icon"></i>
									<span>Storing Values </span>
								</a>
							</li>							
							<li>
								<a href="#company" id="tmNavLink1" class="scrolly active" data-bg-img="constructive_bg_18.jpg" data-page="#tm-section-3">
									<i class="fas fa-users tm-nav-fa-icon"></i>
									<span>Information</span>
								</a>
							</li>
							<li>
								<a href="#contact" id="tmNavLink1" class="scrolly active" data-bg-img="constructive_bg_07.jpg" data-page="#tm-section-4">
									<i class="fas fa-comments tm-nav-fa-icon"></i>
									<span>Contact Us</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content">
					
					<!-- section 1 -->
					<section id="tm-section-1" class="tm-section" >
						<div class="ml-auto">
							<div class="limiter"  >
       
								<div class="wrap-table100">
									<div class="table100 ver1 m-b-110">
										
										<table data-vertable="ver1">+
											
											<thead>
												<tr class="row100 head">
													
													<th class="column100 column2" data-column="column2">STNO</th>
													<th class="column100 column3" data-column="column3">Location</th>
													<th class="column100 column4" data-column="column4">State</th>
													<th class="column100 column5" data-column="column5">Temp_min</th>
													<th class="column100 column6" data-column="column6">Temp_max</th>
													<th class="column100 column7" data-column="column7">Conductivity</th>
													<th class="column100 column8" data-column="column8">Galoons</th>
												</tr>
											</thead>
											<tbody>
											<tr>
                <?php 

                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>
                    <td class="column100 column1" data-column="column1"><?php echo $row['St_no'];?></td>
                    <td class="column100 column2" data-column="column2"><?php echo $row['Location'];?></td>
                    <td class="column100 column3" data-column="column3"><?php echo $row['State'];?></td>
                    <td class="column100 column4" data-column="column4"><?php echo $row['Temperature_Min'];?></td>
                    <td class="column100 column5" data-column="column5"><?php echo $row['Temperature_Max'];?></td>
                    <td class="column100 column6" data-column="column6"><?php echo $row['Conductivity'];?></td> 
					<td class="column100 column7" data-column="column7"><?php echo $row['Gallons_in_mpg'];?></td> 
                </tr>
                <?php    
                  }
                
                ?>
												
						</div>
					</section>

					<!-- section 2 -->
					
					<!-- <section id="tm-section-2" class="tm-section tm-section-carousel">
						<header class="col-xl-12"><h2 class="tm-text-shadow" align="center"><font size="6" face="consolas">
							Sources Tables
						</font></h2></header><br>
						
						<div class="limiter"  >
       
							<div class="wrap-table100">
								<div class="table100 ver1 m-b-110">
									<form action="insertion.php" method="post">
									<table data-vertable="ver1">+
										
										<thead>
											<tr class="row100 head">
												<th class="column100 column1" data-column="column1">NO_OF_ROWS</th>
												<th class="column100 column2" data-column="column2">STNO</th>
												<th class="column100 column3" data-column="column3">Location</th>
												<th class="column100 column4" data-column="column4">State</th>
												<th class="column100 column5" data-column="column5">Temp_min</th>
												<th class="column100 column6" data-column="column6">Temp_max</th>
												<th class="column100 column7" data-column="column7">Conductivity</th>
												<th class="column100 column8" data-column="column8">Galoons</th>
											</tr>
										</thead>
										<tbody>
											<tr class="row100">
												<td class="column100 column1" data-column="column1">RECORD 1</td>
												<td class="column100 column2" data-column="column2"><input type="text" size="6" id="contact_name" name="stno1"></td>
												<td class="column100 column3" data-column="column3"><input type="text" id="contact_name" size="6" name="loc1"></td>
												<td class="column100 column4" data-column="column4"><input type="text" id="contact_name" size="6" name="st1"></td>
												<td class="column100 column5" data-column="column5"><input type="text" id="contact_name" size="6" name="tmin1"></td>
												<td class="column100 column6" data-column="column6"><input type="text" id="contact_name" size="6" name="tmax1"></td>
												<td class="column100 column7" data-column="column7"><input type="text" id="contact_name" size="6" name="cond1"></td>
												<td class="column100 column8" data-column="column8"><input type="text" id="contact_name" size="6" name="gal1"></td>
											</tr>
											<tr class="row100">
												<td class="column100 column1" data-column="column1">RECORD 2</td>
												<td class="column100 column2" data-column="column2"><input type="text" size="6" id="contact_name" name="stno2"></td>
												<td class="column100 column3" data-column="column3"><input type="text" id="contact_name" size="6" name="loc2"></td>
												<td class="column100 column4" data-column="column4"><input type="text" id="contact_name" size="6" name="st2"></td>
												<td class="column100 column5" data-column="column5"><input type="text" id="contact_name" size="6" name="tmin2"></td>
												<td class="column100 column6" data-column="column6"><input type="text" id="contact_name" size="6" name="tmax2"></td>
												<td class="column100 column7" data-column="column7"><input type="text" id="contact_name" size="6" name="cond2"></td>
												<td class="column100 column8" data-column="column8"><input type="text" id="contact_name" size="6" name="gal2"></td>
											</tr>
											<tr class="row100">
												<td class="column100 column1" data-column="column1">RECORD 3</td>
												<td class="column100 column2" data-column="column2"><input type="text" size="6" id="contact_name" name="stno3"></td>
												<td class="column100 column3" data-column="column3"><input type="text" id="contact_name" size="6" name="loc3"></td>
												<td class="column100 column4" data-column="column4"><input type="text" id="contact_name" size="6" name="st3"></td>
												<td class="column100 column5" data-column="column5"><input type="text" id="contact_name" size="6" name="tmin3"></td>
												<td class="column100 column6" data-column="column6"><input type="text" id="contact_name" size="6" name="tmax3"></td>
												<td class="column100 column7" data-column="column7"><input type="text" id="contact_name" size="6" name="cond3"></td>
												<td class="column100 column8" data-column="column8"><input type="text" id="contact_name" size="6" name="gal3"></td>
											</tr>
											<tr class="row100">
												<td class="column100 column1" data-column="column1">RECORD 4</td>
												<td class="column100 column2" data-column="column2"><input type="text" size="6" id="contact_name" name="stno4"></td>
												<td class="column100 column3" data-column="column3"><input type="text" id="contact_name" size="6" name="loc4"></td>
												<td class="column100 column4" data-column="column4"><input type="text" id="contact_name" size="6" name="st4"></td>
												<td class="column100 column5" data-column="column5"><input type="text" id="contact_name" size="6" name="tmin4"></td>
												<td class="column100 column6" data-column="column6"><input type="text" id="contact_name" size="6" name="tmax4"></td>
												<td class="column100 column7" data-column="column7"><input type="text" id="contact_name" size="6" name="cond4"></td>
												<td class="column100 column8" data-column="column8"><input type="text" id="contact_name" size="6" name="gal4"></td>
											</tr>
											<tr class="row100">
												<td class="column100 column1" data-column="column1">RECORD 5</td>
												<td class="column100 column2" data-column="column2"><input type="text" size="6" id="contact_name" name="stno5"></td>
												<td class="column100 column3" data-column="column3"><input type="text" id="contact_name" size="6" name="loc5"></td>
												<td class="column100 column4" data-column="column4"><input type="text" id="contact_name" size="6" name="st5"></td>
												<td class="column100 column5" data-column="column5"><input type="text" id="contact_name" size="6" name="tmin5"></td>
												<td class="column100 column6" data-column="column6"><input type="text" id="contact_name" size="6" name="tmax5"></td>
												<td class="column100 column7" data-column="column7"><input type="text" id="contact_name" size="6" name="cond5"></td>
												<td class="column100 column8" data-column="column8"><input type="text" id="contact_name" size="6" name="gal5"></td>
											</tr>
											
											
										</tbody>
									</table>
									<br><br><button type="submit" class="btn tm-btn-submit tm-btn ml-auto" onclick="myFunction()">Submit</button>
									
									
									<a href="#" class="btn tm-btn tm-font-big" data-nav-link="#tmNavLink2" style="position:fixed ; left: 465px; top:590px;">Other Tables...</a>
								</form>
								
								</div>
								<script>
									function myFunction() {
									  document.getElementById("myForm").reset();
									}
									</script>			
							
						</div> -->
						  
						<!-- <div>
							<header class="mb-4"><h2 class="tm-text-shadow">Storing Information</h2></header>		            
							<div class="tm-img-container">
								<div class="tm-img-slider">
									<a href="img/gallery-img-01.jpg" class="tm-slider-img"><img src="img/gallery-img-01-tn.jpg" alt="Image" class="img-fluid"></a>
									<a href="img/gallery-img-02.jpg" class="tm-slider-img"><img src="img/gallery-img-02-tn.jpg" alt="Image" class="img-fluid"></a>
									<a href="img/gallery-img-03.jpg" class="tm-slider-img"><img src="img/gallery-img-03-tn.jpg" alt="Image" class="img-fluid"></a>
									<a href="img/gallery-img-04.jpg" class="tm-slider-img"><img src="img/gallery-img-04-tn.jpg" alt="Image" class="img-fluid"></a>
									<a href="img/gallery-img-05.jpg" class="tm-slider-img"><img src="img/gallery-img-05-tn.jpg" alt="Image" class="img-fluid"></a>
									<a href="img/gallery-img-06.jpg" class="tm-slider-img"><img src="img/gallery-img-06-tn.jpg" alt="Image" class="img-fluid"></a>
								</div>
							</div>		            		          
						</div>       		          	 -->
					</section>

					<!-- section 3 -->
					<section id="tm-section-3" class="tm-section"  >						
						<div class="row mb-4">
							<header class="col-xl-12"><h2 class="tm-text-shadow">Processing Information</h2></header>		
						</div>
						<div class="row" >
							<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
								<div class="media tm-bg-transparent-black tm-border-white">
									<i class="fab fa-apple tm-icon-circled tm-icon-media"></i>
									<div class="media-body">
										<h3> <a href = "https://form.jotform.com/223471013083445" target = "_blank">Resedential Consumption</a></h3>
										<p>We ensure that the resenditial people get adequate quality water for their daily needs</p>	
									</div>
								</div>
							</div>	
							<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
								<div class="media tm-bg-transparent-black tm-border-white">
									<i class="fas fa-map-pin mr-4 tm-icon-circled tm-icon-media"></i>	
									<div class="media-body">
										<h3> <a href = "https://form.jotform.com/223471013083445" target = "_blank">Commercial Consumption</a></h3>
										<p> We ensure that the industries get adequate water supply for item processing</p>	
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
								<div class="media tm-bg-transparent-black tm-border-white">
									<i class="fab fa-fly mr-4 tm-icon-circled tm-icon-media"></i>
									<div class="media-body">
										<h3>Sources</h3>
										<p>Through various sources the water is transported , stored and redistributed to various places across the region according to the needs </p>		
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-12 col-xl-6 mb-4">
								<div class="media tm-bg-transparent-black tm-border-white">
									<i class="fab fa-linode mr-4 tm-icon-circled tm-icon-media"></i>
									<div class="media-body">
										<h3>Water Treatment</h3>
										<p>The waste water is then processed through rigorous process which is then recycled and then stored to the sources </p>	
									</div>
								</div>
							</div>			          		
						</div>						               
					</section>

					<!-- section 4 -->
					<section id="tm-section-4" class="tm-section" style="opacity:1.2">
						<div class="tm-bg-transparent-black tm-contact-box-pad">
							<div class="row mb-4">
								<div class="col-sm-12">
									<header><h2 class="tm-text-shadow">Contact Us</h2></header>
								</div>
							</div>
							<div class="row tm-page-4-content">
								<div class="col-md-6 col-sm-12 tm-contact-col">
									<div class="contact_message">
										<form action="#contact" method="post" class="contact-form">
											<div class="form-group">
												<input type="text" id="contact_name"  name="contact_name" class="form-control" placeholder="Name" required>
											</div>
											<div class="form-group">
												<input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email" required>
											</div>
											<div class="form-group">
												<textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
											</div>
											<button type="submit" class="btn tm-btn-submit tm-btn ml-auto">Submit</button>
										</form>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 tm-contact-col">
									<div class="tm-address-box">
										<p style=" font-size:103%;">Since 2007, the DEWDS Engineers for Development Foundation  has been working to help the most vulnerable communities by offering its volunteers and their engineering capabilities. One of its main cooperation goals is the access to drinkable water  </p>
										<!-- <p style="font-family:'Times New Roman', Times, serif; font-size:103%;">If you have any queries please Reach out to Us  </p> -->
										<address style="font-size:102%;">
											Amritanagar P.O<br>
											Ettimadai, Coimbatore<br>
											Tamil Nadu 641112<br>
											PH: 0422 268 5000<br>
										</address>
									</div>
								</div>
							</div>
						</div>
					</section>					
				</div>	<!-- .tm-content -->							
				
			</div>	<!-- row -->			
		</div>
		<div id="preload-01"></div>
		<div id="preload-02"></div>
		<div id="preload-03"></div>
		<div id="preload-04"></div>

		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script> <!-- Slick Carousel -->

		<script>

		var sidebarVisible = false;
		var currentPageID = "#tm-section-1";

		// Setup Carousel
		function setupCarousel() {

			// If current page isn't Carousel page, don't do anything.
			if($('#tm-section-2').css('display') == "none") {
			}
			else {	// If current page is Carousel page, set up the Carousel.

				var slider = $('.tm-img-slider');
				var windowWidth = $(window).width();

				if (slider.hasClass('slick-initialized')) {
					slider.slick('destroy');
				}

				if(windowWidth < 640) {
					slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 1,
	              		slidesToScroll: 1
	              	});
				}
				else if(windowWidth < 992) {
					slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 2,
	              		slidesToScroll: 1
	              	});
				}
				else {
					// Slick carousel
	              	slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 3,
	              		slidesToScroll: 2
	              	});
				}

				// Init Magnific Popup
				$('.tm-img-slider').magnificPopup({
				  delegate: 'a', // child items selector, by clicking on it popup will open
				  type: 'image',
				  gallery: {enabled:true}
				  // other options
				});
      		}
  		}

  		// Setup Nav
  		function setupNav() {
  			// Add Event Listener to each Nav item
	     	$(".tm-main-nav a").click(function(e){
	     		e.preventDefault();
		    	
		    	var currentNavItem = $(this);
		    	changePage(currentNavItem);
		    	
		    	setupCarousel();
		    	setupFooter();

		    	// Hide the nav on mobile
		    	$("#tmSideBar").removeClass("show");
		    });	    
  		}

  		function changePage(currentNavItem) {
  			// Update Nav items
  			$(".tm-main-nav a").removeClass("active");
     		currentNavItem.addClass("active");

	    	$(currentPageID).hide();

	    	// Show current page
	    	currentPageID = currentNavItem.data("page");
	    	$(currentPageID).fadeIn(1000);

	    	// Change background image
	    	var bgImg = currentNavItem.data("bgImg");
	    	$.backstretch("img/" + bgImg);		    	
  		}

  		// Setup Nav Toggle Button
  		function setupNavToggle() {

			$("#tmMainNavToggle").on("click", function(){
				$(".sidebar").toggleClass("show");
			});
  		}

  		// If there is enough room, stick the footer at the bottom of page content.
  		// If not, place it after the page content
  		function setupFooter() {
  			
  			var padding = 100;
  			var footerPadding = 40;
  			var mainContent = $("section"+currentPageID);
  			var mainContentHeight = mainContent.outerHeight(true);
  			var footer = $(".footer-link");
  			var footerHeight = footer.outerHeight(true);
  			var totalPageHeight = mainContentHeight + footerHeight + footerPadding + padding;
  			var windowHeight = $(window).height();		

  			if(totalPageHeight > windowHeight){
  				$(".tm-content").css("margin-bottom", footerHeight + footerPadding + "px");
  				footer.css("bottom", footerHeight + "px");  			
  			}
  			else {
  				$(".tm-content").css("margin-bottom", "0");
  				footer.css("bottom", "20px");  				
  			}  			
  		}

  		// Everything is loaded including images.
      	$(window).on("load", function(){

      		// Render the page on modern browser only.
      		if(renderPage) {
				// Remove loader
		      	$('body').addClass('loaded');

		      	// Page transition
		      	var allPages = $(".tm-section");

		      	// Handle click of "Continue", which changes to next page
		      	// The link contains data-nav-link attribute, which holds the nav item ID
		      	// Nav item ID is then used to access and trigger click on the corresponding nav item
		      	var linkToAnotherPage = $("a.tm-btn[data-nav-link]");
			    
			    if(linkToAnotherPage != null) {
			    	
			    	linkToAnotherPage.on("click", function(){
			    		var navItemToHighlight = linkToAnotherPage.data("navLink");
			    		$("a" + navItemToHighlight).click();
			    	});
			    }
		      	
		      	// Hide all pages
		      	allPages.hide();

		      	$("#tm-section-1").fadeIn();

		     	// Set up background first page
		     	var bgImg = $("#tmNavLink1").data("bgImg");
		     	
		     	$.backstretch("img/" + bgImg, {fade: 500});

		     	// Setup Carousel, Nav, and Nav Toggle
			    setupCarousel();
			    setupNav();
			    setupNavToggle();
			    setupFooter();

			    // Resize Carousel upon window resize
			    $(window).resize(function() {
			    	setupCarousel();
			    	setupFooter();
			    });
      		}	      	
		});

		</script>
		<script type="text/javascript">
			(function ($) {
				"use strict";
				$('.column100').on('mouseover', function () {
					var table1 = $(this).parent().parent().parent();
					var table2 = $(this).parent().parent();
					var verTable = $(table1).data('vertable') + "";
					var column = $(this).data('column') + "";
					$(table2).find("." + column).addClass('hov-column-' + verTable);
					$(table1).find(".row100.head ." + column).addClass('hov-column-head-' + verTable);
				});
				$('.column100').on('mouseout', function () {
					var table1 = $(this).parent().parent().parent();
					var table2 = $(this).parent().parent();
					var verTable = $(table1).data('vertable') + "";
					var column = $(this).data('column') + "";
					$(table2).find("." + column).removeClass('hov-column-' + verTable);
					$(table1).find(".row100.head ." + column).removeClass('hov-column-head-' + verTable);
				});
			})(jQuery);</script>
	</body>
</html>