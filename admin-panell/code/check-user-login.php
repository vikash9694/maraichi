<?php
$loginFailMsg="";
    //echo "<pre>"; print_r($_POST); echo "</pre>";
if(isset($_POST['submit'])){
    $sqlUser= "SELECT * FROM users WHERE email='".$_POST['user-email']."' and password='".$_POST['user-password']."'";
    //echo $sqlUser;
    $userQuery = $con->query($sqlUser);
    $rowcount= mysqli_num_rows($userQuery);
    $usersArr = $userQuery->fetch_assoc();


    if($rowcount>0){

        $_SESSION["user_data"]=$usersArr;
        header("Location:http://localhost/maraichi/admin-panell/index.php");
        
    }else{

        $loginFailMsg= "Please Enter User Credentials";
    }

}


?>