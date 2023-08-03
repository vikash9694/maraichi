<?php
		 if(isset($_GET['id'])){
			$del = "DELETE FROM menus WHERE id=".$_GET['id'];
			$del1 =$con->query($del);
            header("Location:http://localhost/maraichi/admin-panell/menu-list.php");
		 }

?>