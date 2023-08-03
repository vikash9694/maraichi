<?php

if (isset($_POST['submit']) && empty($_POST['hiddenid'])) {

	$section1_heading = $_POST['section1-heading'];
	$section1_subheading = $_POST['section1-subheading'];
	$section1_image = $_FILES['section1-image']['name'];
	$section2_heading = $_POST['section2-heading'];
	$section2_subheading = $_POST['section2-subheading'];
	$section3_image = $_FILES['section3-image']['name'];
	$section4_heading = $_POST['section4-heading'];
	$section4_subheading = $_POST['section4-subheading'];
	$section4_image = $_FILES['section4-image']['name'];
	$section5_discount_code = $_POST['section5-discount-code'];
	$section5_image = $_FILES['section5-image']['name'];
	$section6_heading = $_POST['section6-heading'];
	$section6_subheading = $_POST['section6-subheading'];
	$section6_image = $_FILES['section6-image']['name'];
	$section7_image = $_FILES['section7-image']['name'];
	$section7_logo = $_FILES['section7-logo']['name'];
	$section7_heading = $_POST['section7-heading'];
	$section7_subheading = $_POST['section7-subheading'];
	$section8_heading = $_POST['section-new'];
	$section8_subheading = $_POST['section-subnew'];
	$status = $_POST['status'];



	$sql = "INSERT INTO home_page VALUES(null,
'$section1_heading',
'$section1_subheading','$section1_image','$section2_heading',
'$section2_subheading','$section3_image',
'$section4_heading','$section4_subheading','$section4_image',
'$section5_discount_code','$section5_image',
'$section6_heading','$section6_subheading','$section6_image',
'$section7_image','$section7_logo','$section7_heading',
'$section7_subheading','$section8_heading','$section8_subheading','$status')";

	$sql1 = $con->query($sql);




} else {

	if (isset($_POST['submit'])) {

	
		$section1_heading = $_POST['section1-heading'];
		$section1_subheading = $_POST['section1-subheading'];
		$section1_image =  $_FILES['section1-image']['name'];
		$section2_heading = $_POST['section2-heading'];
		$section2_subheading = $_POST['section2-subheading'];
		$section3_image =  $_FILES['section3-image']['name'];
		$section4_heading = $_POST['section4-heading'];
		$section4_subheading = $_POST['section4-subheading'];
		$section4_image =  $_FILES['section4-image']['name'];		
		$section5_discount_code = $_POST['section5-discount-code'];
		$section5_image =  $_FILES['section5-image']['name'];
		$section6_heading = $_POST['section6-heading'];
		$section6_subheading = $_POST['section6-subheading'];
		$section6_image =  $_FILES['section6-image']['name'];
		$section7_image =  $_FILES['section7-image']['name'];
		$section7_logo =  $_FILES['section7-logo']['name'];
		$section7_heading = $_POST['section7-heading'];
		$section7_subheading = $_POST['section7-subheading'];
		$section8_heading = $_POST['section-new'];
		$section8_subheading = $_POST['section-subnew'];
		$status = $_POST['status'];


	

		

       $update ="UPDATE home_page SET `section1-heading` = '".$section1_heading."' ,
	   `section1-subheading` = '".$section1_subheading."', `section2-heading` = '".$section2_heading."' , 
	   `section2-subheading` = '".$section2_subheading."' ,`section4-heading` = '".$section4_heading."' ,
	   `section4-subheading` = '".$section4_subheading."' , `section5-discount-code` = '".$section5_discount_code."',
	   `section6-heading` = '".$section6_heading."' ,`section6-subheading` = '".$section6_subheading."' ,	   
	   `section7-heading` = '".$section7_heading."', `section7-subheading` = '".$section7_subheading."', `section-new` = '".$section8_heading."',
	 	`section-subnew` = '".$section8_subheading."' ,`status` ='".$status." ' ";
	
	if($section1_image){
		$update .= ", `section1-image` = '".$section1_image."' ";
	}
		if($section3_image){
		$update .= ", `section3-image` = '".$section3_image."' ";
	}
		if($section4_image){
		$update .= ", `section4-image` = '".$section4_image."' ";
	}
		if($section5_image){
		$update .= ", `section5-image` = '".$section5_image."' ";
	}
		if($section6_image){
		$update .= ", `section6-image` = '".$section6_image."' ";
	}
		if($section7_image){
		$update .= ", `section7-image` = '".$section7_image."' ";
	}
		if($section7_logo){
		$update .= ", `section7-logo` = '".$section7_logo."' ";
	}
	
	
	$update .= "WHERE id=".$_POST['hiddenid'];
	
		$sql = $con->query($update);

	}
}


// ,
// 	   , 
// 	   , 
// 	   ,
// 	   , 
// 	   , ,
// 	   , 
// 	 