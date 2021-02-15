<?php
include('connect.php');
$id = $_GET['id'];
$sql = "DELETE FROM `the 'users'` WHERE id=$id";
if(mysqli_query($conn,$sql)){
    header("Location:details.php");
}
else{
    echo "Deletion failed...";
}
?>