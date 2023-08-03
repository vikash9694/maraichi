<?php

if(isset($_POST['submit']) && empty($_POST['hiddenid'])){

	$page_name = $_POST['page_name'];
	$page_slug = $_POST['page_slug'];
	$page_url = $_POST['page_url'];
	$active = $_POST['status'];
	$sql = "INSERT INTO menus VALUES(NULL,'$page_name','$page_slug','$page_url','$active')";
	$sql1 = $con->query($sql);

}else{

  if(isset($_POST['submit'])){
		$page_name = $_POST['page_name'];
		$page_slug = $_POST['page_slug'];
		$page_url = $_POST['page_url'];
		$active = $_POST['status'];
		$sqlq = "UPDATE menus SET `page_name`='$page_name', `page_slug`='$page_slug', `page_url` ='$page_url',`status` ='$active' WHERE id=".$_POST['hiddenid']; 
        $sql2 = $con->query($sqlq);
	
}
}

?>