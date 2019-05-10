<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="examples/example.css">
    <link href="//www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="dist/jquery.tabs.css">
    <style>
    body { font-family:'Raleway'; background-color: #fafafa; line-height:1.7;}
    </style>

		<title> </title>
		<link  href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="jquery-3.3.1.js"></script>
		
			<script type="text/javascript">
					$(document).ready(function(){
						$('#enquiry').click(function(){
						alert("Login First ");
						});
						$('#myLogout').click(function(){
						alert("Successfully Logout ");
						});
						
					});
		</script>	
	
        <!-- Start Slider HEAD section -->
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <script type="text/javascript" src="engine1/jquery.js"></script>
		<!-- End Slider HEAD section -->
	</head>
<body>
	<div class="container">
		
		<div class="wrapper">
        
        <!---------------------- contactHeader -------------------->
		
		  <div class="contactHeader">
			
			<div class="icon-bar">
 
				<i class="fa fa-envelope"></i>bh.yatra.47@gmail.com
				<i class="material-icons">&#xe325;</i> 7677386659
				
			</div>
			
			<div id="social-media-icons">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 

<a href="https://www.facebook.com/jaiprakash2040" target="_blank"><img class="socialImage" src="facebook.png"/></a>&nbsp &nbsp &nbsp &nbsp 
<a href="https://www.instagram.com/jaiprakash2040/" target="_blank"><img class="socialImage" src="instagram.png"/></a>&nbsp &nbsp &nbsp &nbsp 
<a href="https://plus.google.com/u/0/105757327848531473199" target="_blank"><img class="socialImage" src="google-plus.png"/></a>
</div>
			
				
		</div><!--end of ContactHeader -->
		
		
		
		
		
		
		<!---------------------- Header -------------------->
		
			<div class="header">
			
				<div class="logo"><img class="logoImage" src="logo.png"/></div><!--end of logo -->
				
				<div class="title"><h1 class="textTitle"><b> B H A R A T  &nbsp   Y A T R A </b></h1></div><!--end of title -->
				<div class="swachBharat"><img class="swachBharatImage" src="sba.jpg"/></div><!--end of swachBharat -->
			</div><!--end of header -->
				
		
		
		
		
		
		
		<!---------------------- loginRegister -------------------->
		  <!-- <div class="loginRegister">
					
			<div class="login">
			
			<form>
		
		
			   Username: <input type="text" name="username" required>
			   Password:<input type="password"  name="password" required>&nbsp
			   
			   <input type="submit" value="login">&nbsp
			   
			  <a href="#" class="textRegisterColor">Register Here</a>
			
			
			
		</form>   

			
			</div><!-- end of login --> 
			
			
			<!--</div>  --> <!----------- end of loginRegister---------->  
			
			
		
		
		
		
		<!---------------------- MENU -------------------->
			<div class="menu">
	
				<table class="menuTable">
					<tr>
						<td><a class="menuTableAnchor" href="index.php">Home</a></td>
						<td><a class="menuTableAnchor" href="region.php">Regions</a></td>
						<td><a class="menuTableAnchor" href="place.php">Places</a><td>
						<!--<td><a class="menuTableAnchor" href="hotel.html">Hotels <br> &nbsp &nbsp & <br> Resorts</a></td>  -->
						<td><a class="menuTableAnchor" href="tourAndPackage.php">Tour/Packages</a></td>
						<?php if (isset($_SESSION['id']))
						{?>
						<td><a class="menuTableAnchor" href="enquiry.php">Enquiry</a></td>
							
						<?php } else
						{?>
							<td><a class="menuTableAnchor" href="" id="enquiry">Enquiry</a></td>
						<?php }
						?>
					<!--	<td><a class="menuTableAnchor" href="enquiry.php">Enquiry</a></td>  -->
						<td><a class="menuTableAnchor" href="undisoverIndia.php">Undiscover India !</a></td>
						<td><a class="menuTableAnchor" href="contact.php">Contact us</a></td>
			<?php if(isset($_SESSION['id'])) {?> 
						<td><a class="menuTableAnchor" href="profile.php">Profile</a></td>
						<td><a class="menuTableAnchor"  href="loginRegisterPage.php" id="myLogout">Logout</a></td>
							
						<?php
						} 
						 else
						{?>
							<td><a class="menuTableAnchor" href="loginRegisterPage.php" id="myLogin">Login</a></td>
						<?php
						}
							?>
					</tr>
				</table>     
				
						
				
				<!----------
				<ul class="fUnordered">
					<li class="fUnorderedItems"><a class="fUnorderedItemsAnchor" href="index.html">Home</a></li>
					<li class="fUnorderedItems"><a class="fUnorderedItemsAnchor" href="#">Regions</a>
						<ul class="fUnordered">
							<li class="fUnorderedItems"><a class="fUnorderedItemsAnchor" href="#">North India</a></li>
							<li><a href="#">North India</a></li>
							<li><a href="#">North India</a></li>
							<li><a href="#">North India</a></li>
					
						</ul>
					</li>
					<li class="fUnorderedItems"><a class="fUnorderedItemsAnchor" href="#">Places</a></li>
					<li class="fUnorderedItems"><a class="fUnorderedItemsAnchor" href="#">Hotels & Resorts</a></li>
					<li class="fUnorderedItems"><a class="fUnorderedItemsAnchor" href="#">Tour/Packages</a></li>
					<li class="fUnorderedItems"><a class="fUnorderedItemsAnchor" href="#">Enquiry</a></li>
					<li class="fUnorderedItems"><a class="fUnorderedItemsAnchor" href="#">Share Destinations</a></li>
					<li class="fUnorderedItems"><a class="fUnorderedItemsAnchor" href="#">Contact us</a></li>
				</ul>
						------------->
			

			
			</div><!-----------end of MENU---------->
				
				
		<!----------------------Starting Banner -------------------->
		
		<div id="firstBanner">
        	
			<!-- Start Slider BODY section -->
            <div id="wowslider-container1">
            <div class="ws_images">
            	<ul>
                    <li><img src="data1/images/s1.jpg" alt="s1" title="" id="wows1_0"/></li>
                    <li><img src="data1/images/s2.jpg" alt="s2" title="" id="wows1_1"/></li>
                    <li><img src="data1/images/s3.jpg" alt="s3" title="" id="wows1_2"/></li>
                    <li><img src="data1/images/s4.jpg" alt="S4" title="" id="wows1_3"/></li>
                </ul>
            </div>
            <div class="ws_bullets">
            <div>
                    <a href="#" title="s1"><span><img src="data1/tooltips/s1.jpg" alt="s1"/>1</span></a>
                    <a href="#" title="s2"><span><img src="data1/tooltips/s2.jpg" alt="s2"/>2</span></a>
                    <a href="#" title="S3"><span><img src="data1/tooltips/s3.jpg" alt="S3"/>3</span></a>
                    <a href="#" title="S4"><span><img src="data1/tooltips/s4.jpg" alt="S4"/>4</span></a>
            </div>
            </div>
            <div class="ws_shadow"></div>
            </div>	
            <script type="text/javascript" src="engine1/wowslider.js"></script>
            <script type="text/javascript" src="engine1/script.js"></script>
            <!-- End Slider BODY section -->
        
		</div><!-- end of Starting banner -->
		
	
		
		
		
		
				
		
		
		
		<!---------------------- Banner -------------------->	
			<div id="banner">
					
				<img class="slides"  src="slider/1.jpg"/>
				<img class="slides"  src="slider/2.jpg"/>
				<img class="slides"  src="slider/3.jpg"/>
				<img class="slides"  src="slider/4.jpg"/>
				<img class="slides"  src="slider/5.jpg"/>   <!---
		<button class="btn" onclick="plusIndex(-1)" id="btn1">&#10094; </button> &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 

		<button class="btn" onclick="plusIndex(+1)" id="btn2">&#10095; </button>    --->
		
		
		<div class="smallBannerRightSideFirst">
					<b>Ajanta & Elora Caves,Mumbai</b><br>
						<a href="ajantaEllora.php"><img class="smallBannerRightSideImage" src="images/aec.jpg"/></a>
		
			</div><!-------------End Of smallBannerRightSideFirst---------------->
		
		
		
		
					
			<div class="smallBannerRightSideSecond"><b>Qutab-Minar,New Delhi</b><br><a href="qutabMinar.php"><img src="images/qmd.jpg" class="smallBannerRightSideImage"/></a>
			
			
			
			</div><!-------------End Of smallBannerRightSideSecond---------------->
			
			
			
			
						
				<div class="smallBannerRightSideThird"><b>Howrah Bridge,Kolkata</b><br><a href="howrah.php"><img src="images/hbk.jpg" class="smallBannerRightSideImage"/></a>
			
			
			
			</div><!-------------End Of smallBannerRightSideThird---------------->
			
						
				<div class="smallBannerRightSideFourth"><b>Mahabaleshwar Temple</b><br><a href="mahabaleshwarTemple.php"><img src="images/mbl.jpg" class="smallBannerRightSideImage"/></a>
			
			
			
			</div><!-------------End Of smallBannerRightSideFourth---------------->
			
		
			</div><!-- end of banner -->
			
			
			
		
			
			
			
		
			

			
			
			
			
			
		
		
		
		
		<!---------------------- Contents -------------------->
		
			
			<div class="content" align="center">
			<div class="popularPlaces">

			<h1><b>Popular Places </b></h1>
			
					<div class="placesFirstImage">
					<a href="pinkCity.php">
					<b>Pink city,Jaipur</b><br>
					<img class="imageFitBox" src="images/popularity/jpr.jpg"/></a>
					</div><!------ end of placesFirstImage---------->
					<div class="placesSecondImage">		<a href="gateWayOfIndia.php">
					<b>Gateway Of India,Mumbai</b><br>
					<img class="imageFitBox" src="images/popularity/goim.jpg"/></a>
					</div><!------ end of placesSecondImage---------->
					<div class="placesThirdImage">		<a href="maduraiTemple.php">
					<b>Madurai</b><br>
					<img class="imageFitBox" src="images/popularity/mtt.jpg"/></a>
					</div><!------ end of placesThirdImage---------->
					<div class="placesFourthImage">		<a href="bodhGaya.php">
					<b>Bodh Gaya,Patna</b><br>
					<img class="imageFitBox" src="images/regions/east/bodhGayaSecond.jpg"/></a>
				
					</div><!------ end of placesFourthImage---------->
					
					
			</div><!----------end of popularPlaces------------>


			
		
			</div><!-- end of content -->
			
			<div class="horizontalTab">
			 <!-- Horizontal Tabs -->
    <div class="jq-tab-wrapper" id="horizontalTab">
	<h2>Popular Regions</h2>
        <div class="jq-tab-menu">
            <div class="jq-tab-title active" data-tab="1">North India</div>
            <div class="jq-tab-title" data-tab="2">West India</div>
            <div class="jq-tab-title" data-tab="3">South India</div>
			<div class="jq-tab-title" data-tab="4">Central India</div>
            <div class="jq-tab-title" data-tab="5">East india</div>
			<div class="jq-tab-title" data-tab="6">North-East India</div>
        </div>
        <div class="jq-tab-content-wrapper">
            <div class="jq-tab-content active" data-tab="1"><div class="statesFirstImage"><b>Srinagar</b><br>
					<img class="imageFitBox" src="images/regions/north/srinagarFirst.jpg"/>
					
					</div><!------ end of statesFirstImage---------->
					<div class="statesSecondImage"><b>Jaipur</b><br>
					<img class="imageFitBox" src="images/regions/north/jaipurThird.jpg"/>
					</div><!------ end of statesSecondImage---------->
					<div class="statesThirdImage"><b>Manali</b><br>
					<img class="imageFitBox" src="images/regions/north/manaliThird.jpg"/>
					</div><!------ end of statesThirdImage---------->
					<!--<div class="statesFourthImage"><b>Punjab</b><br>
					<img class="imageFitBox" src="images/regions/north/goldenTempleAmritsar.jpg"/>
					</div><!------ end of statesFourthImage---------->
</div>
            <div class="jq-tab-content" data-tab="2"><div class="statesFirstImage"><b>Mumbai</b><br>
					<img class="imageFitBox" src="images/regions/west/mumbaiFirst.jpg"/>
					
					</div><!------ end of statesFirstImage---------->
					<div class="statesSecondImage"><b>Goa</b><br>
					<img class="imageFitBox" src="images/regions/west/goaThird.jpg"/>
					</div><!------ end of statesSecondImage---------->
					<div class="statesThirdImage"><b>Kutch</b><br>
					<img class="imageFitBox" src="images/regions/west/kutchThird.jpg"/>
					</div></div>
            <div class="jq-tab-content" data-tab="3"><div class="statesFirstImage"><b>Hyderabad</b><br>
					<img class="imageFitBox" src="images/regions/south/hyderabadFirst.jpg"/>
					
					</div><!------ end of statesFirstImage---------->
					<div class="statesSecondImage"><b>Mysore</b><br>
					<img class="imageFitBox" src="images/regions/south/mysoreThird.jpg"/>
					</div><!------ end of statesSecondImage---------->
					<div class="statesThirdImage"><b>Ooty</b><br>
					<img class="imageFitBox" src="images/regions/south/ootyThird.jpg"/>
					</div>
            </div>
			<div class="jq-tab-content" data-tab="4"><div class="statesFirstImage"><b>Bhopal</b><br>
					<img class="imageFitBox" src="images/regions/central/bhopalFirst.jpg"/>
					
					</div><!------ end of statesFirstImage---------->
					<div class="statesSecondImage"><b>Gwalior</b><br>
					<img class="imageFitBox" src="images/regions/central/gwaliorThird.jpg"/>
					</div><!------ end of statesSecondImage---------->
					<div class="statesThirdImage"><b>Jabalpur</b><br>
					<img class="imageFitBox" src="images/regions/central/jabalpurThird.jpg"/>
					</div>
            </div>
			<div class="jq-tab-content" data-tab="5"><div class="statesFirstImage"><b>Kolkata</b><br>
					<img class="imageFitBox" src="images/regions/east/kolkataFirst.jpg"/>
					
					</div><!------ end of statesFirstImage---------->
					<div class="statesSecondImage"><b>Konark</b><br>
					<img class="imageFitBox" src="images/regions/east/konarkSecond.jpg"/>
					</div><!------ end of statesSecondImage---------->
					<div class="statesThirdImage"><b>Puri</b><br>
					<img class="imageFitBox" src="images/regions/east/puriThird.jpg"/>
					</div>
            </div>
			<div class="jq-tab-content" data-tab="6"><div class="statesFirstImage"><b>Gangtok</b><br>
					<img class="imageFitBox" src="images/regions/northEast/gangtokFirst.jpg"/>
					
					</div><!------ end of statesFirstImage---------->
					<div class="statesSecondImage"><b>Majuli</b><br>
					<img class="imageFitBox" src="images/regions/northEast/majuliThird.jpg"/>
					</div><!------ end of statesSecondImage---------->
					<div class="statesThirdImage"><b>Tawang</b><br>
					<img class="imageFitBox" src="images/regions/northEast/tawangThird.jpg"/>
					</div>
            </div>
        </div>
    </div>
    <!-- End of Horizontal Tabs -->   
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="dist/jquery.tabs.min.js"></script>
    <script>
        $(function () {
            $('#verticalTab').jqTabs();
            $('#horizontalTab').jqTabs({direction: 'horizontal', duration: 200});
        });
    </script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
			
			
			
	
			
			</div><!----end of  Horizontal tabs---------------->
		
		
		
		<!---------------------- Footer -------------------->		
			<div class="footer">
			
				<table class="footetTable">
					<tr>
						<td style="color:#fa4e9f;"> Historical Monuments 
							<ul class="footerUnorderedList">
								<li><a href="ajantaEllora.php" style="color:white;">Ajanta & Ellora</a></li><br>
								<li><a href="redFort.php" style="color:white;">Red Fort</a></li><br>
								<li><a href="tajMahal.php" style="color:white;">Taj Mahal</a></li><br>
								<li><a href="maduraiTemple.php" style="color:white;">Madurai Temple</a></li><br>
								<li><a href="tengapania.php" style="color:white;">Tengapania</a></li><br>
							</ul>
						</td>
								
						<td style="color:#fa4e9f;"> Popular Destinations 
							<ul class="footerUnorderedList">
								<li><a href="amritsar.php" style="color:white;">Amritsar</a></li><br>
								<li><a href="andamanNicobar.php" style="color:white;">Andaman & Nicobar Islands</a></li><br>
								<li><a href="tawang.php" style="color:white;">Tawang</a></li><br>
								<li><a href="gwalior.php" style="color:white;">Gwalior</a></li><br>
								<li><a href="kolkata.php" style="color:white;">Kolkata</a></li><br>
							</ul>
						</td>
						<td style="color:#fa4e9f;"> Contact us 
							<ul class="footerUnorderedList">
								<li style="text-decoration:none;">Telephone :  +91 - 651-2332077</li><br>
								<li>Fax : +91 - 651-2332055</li><br>
								<li>Mobile : +91 - 9386806214</li><br>
								<li>Email : info@rsgss.com</li><br>
								<li>Enquiry</li><br>
							</ul>
						</td>
					</tr>
				</table>
			
			
			
		
			</div><!-- end of footer -->
		<!----------------------- aboutPrivacyCondition--------------------->
			<div class="aboutPrivacyCondition">
			
				<table class="tableAboutPrivacyCondition">
					<tr>
						<td><a class="aboutPrivacyConditionAnchor" href="#"> About </td></a>
						<td><a class="aboutPrivacyConditionAnchor" href="#">Privacy Policy</td></a>
						<td><a class="aboutPrivacyConditionAnchor" href="#">Terms of use</td></a>
					</tr>
				</table>
			
			</div><!----------end of aboutPrivacyCondition--------------------->
		
			
		
		
		</div><!--end of wrapper -->
	



	</div><!--end of container -->
	



</body> 
	<script>
			var index = 1;
			
			function plusIndex(n){
			 index= index + n;
			 showImage(index);
			 }
			showImage(1);
			function showImage(n){
				var i;
				var x = document.getElementsByClassName("slides");
				
				if(n> x.length){index = 1; }
				if(n<1){index = x.length;}
				
				for(i=0;i<x.length;i++)
					{
					x[i].style.display = "none";
					
					}
				x[index - 1].style.display="block";
				
			}
			autoSlide();
			function autoSlide(){
			
				var i;
				var x = document.getElementsByClassName("slides");
				
				for(i=0;i<x.length;i++)
					{
					x[i].style.display = "none";
					
					}
					if(index > x.length){index = 1;}
					
				x[index - 1].style.display="block";
				index++;
				setTimeout(autoSlide,4000);
			}
		
	
</script>



</html>
