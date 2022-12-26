<?php
include 'config.php'; 
$ID = $_GET['Id']; 
mysqli_query($con, "DELETE FROM `tblcrud` WHERE Id = $ID");
header('location:index.php');




?>