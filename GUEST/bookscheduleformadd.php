<?php

session_start();
//echo $_SERVER['REQUEST_METHOD'];


$schedid = strip_tags($_POST['age']);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../dbconnection.php';

    $fname = strip_tags($_POST['fname']);
    $lname = strip_tags($_POST['lname']);
    $address = strip_tags($_POST['address']);

    $barangay = strip_tags($_POST['barangay']);

    $age = strip_tags($_POST['age']);

    $schedid = strip_tags($_POST['schedid']);

    $email = strip_tags($_POST['email']);

    $contact = strip_tags($_POST['contact']);


    $db->query("INSERT INTO booking( schedid, fname,lname,street,brgy,age,email,contact) VALUES ($schedid,'$fname',  '$lname' , '$address' , '$barangay' ,$age,'$email','$contact')") or die($db->error);

    $q = $db->query("Select max(id) as id from booking ");
    $row = $q->fetch_assoc();

    $id = $row['id'];

    $q = $db->query("Select id, schedid  from booking where id = $id");
    $row = $q->fetch_assoc();

    $id = $row['id'];
    $sched = $row['schedid'];

    echo "<script>alert('Appointment Submitted !  Booking Reference : $lname-$id-$schedid  '); location.href='bookschedule.php'</script>";
}
