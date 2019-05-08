<?php include "header.php" ?>


<!doctype html>
<html>
<head> <title> </title>
<link href="css/myStyleContact.css" rel="stylesheet" type="text/css">
  <!-- Start Slider HEAD section -->
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <script type="text/javascript" src="engine1/jquery.js"></script>
		<!-- End Slider HEAD section -->

</head>
<body>
		<div class="container">
		
		<div class="wrapper">
		
		<div class="rsgSlider">
		<!-- Start Slider BODY section -->
            <div id="wowslider-container1">
            <div class="ws_images">
            	<ul>
                    <li><img src="data1/images/s6.jpg" alt="s1" title="" id="wows1_0"/></li>
                    <li><img src="data1/images/s7.jpg" alt="s2" title="" id="wows1_1"/></li>
                    <li><img src="data1/images/s8.jpg" alt="s3" title="" id="wows1_2"/></li>
                    <li><img src="data1/images/s9.jpg" alt="S4" title="" id="wows1_3"/></li>
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
 
		</div>
		
		<div class="rsgAddressEnquiryHolder">
		<div class="rsgAddress">
			<h2>Official Address</h2>
			<h3>Bharat Yatra Tourism</h3>
			<h3>New Market</h3>
			<h3>Ratu Road, Ranchi</h3>
			<h3>Jharkhand - 834005</h3>
			<h3><b>Tel. :</b>+91-7677386659</h3>
			<h3><b>Fax. :</b>+91-7677386659</h3>
			<h3><b>Mob. :</b>+91-7677386659</h3>
			<h3><b>Email. id. :</b>bh.yatra.47@gmail.com</h3>
			
		</div>
		<div class="rsgEnquiry">
		
		<form action="add_enquiry_data.php" method="post" enctype="multipart/form-data"> 
						
							 Name:<sup style="color:red;">*</sup> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
							 <input type="text" name="name" placeholder="Full Name" required>
							<br><br>
							Contact:<sub style="color:red;">*</sub> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
							<input type="text" name="contact" maxlength="15" required >
							<br><br>
							E-mail: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
							<input type="email" name="email" required><br><br>
							 Address:<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
							 &nbsp &nbsp &nbsp <textarea name="address" rows="5" cols="40"></textarea><br><br>
							Query:<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
							 &nbsp &nbsp &nbsp <textarea name="query" rows="5" cols="40" required></textarea><br><br>
							<br>
			   
						<span class="submittButton"> &nbsp &nbsp &nbsp &nbsp &nbsp
							&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
						<input type="submit" name="submitEnquiry" value="Submit"></span>
			
						</form>

		</div>
		</div>
		
		<div class="rsgMap"> Address Map
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22203.609382767056!2d85.38079878394103!3d23.379897320742028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e05a0f47e7d5%3A0x2253fb9ea5b5eacf!2sRSG+Software+Services+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1519396256195" width="1000" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		

		
		</div><!--end of wrapper -->

		</div><!--end of container -->
	

</body> 


</html>
<?php
include "footer.php";
?>
		