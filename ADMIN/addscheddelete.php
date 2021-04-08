<?php


$id = $_GET['id'];

include '../dbconnection.php';


// echo("delete  from cms where carouselid = '$carouselid''");


$db->query("delete  from schedule where id = '$id'") or die($db->error);
echo "<script>alert('Schedule Deleted'); location.href='addsched.php'</script>";
