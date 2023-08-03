<?php
    $sqlMenu = "SELECT * FROM menus WHERE status='active'";
    $menuQuery = $con->query($sqlMenu);
?>