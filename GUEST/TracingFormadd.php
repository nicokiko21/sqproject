<?php

session_start();
//echo $_SERVER['REQUEST_METHOD'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../dbconnection.php';

    $fname = strip_tags($_POST['fname']);
    $lname = strip_tags($_POST['lname']);
    $email = strip_tags($_POST['email']);
    $contact = strip_tags($_POST['contact']);
    $address = strip_tags($_POST['address']);
    $barangay = strip_tags($_POST['barangay']);
    $temp = strip_tags($_POST['temp']);
    $age = strip_tags($_POST['age']);
    $q1 = strip_tags($_POST['customRadio']);
    $q1 = strip_tags($_POST['customRadio']);
    $q2 = strip_tags($_POST['customRadio1']);
    $q3 = strip_tags($_POST['customRadio2']);
    $q4 = strip_tags($_POST['customRadio3']);









    echo $lname;


    $db->query("INSERT INTO tracing( fname, lname,  email,contact,street,barangay,temperature,age,q1,q2,q3,q4,date) 
      VALUES ('$fname','$lname',  '$email' ,  '$contact',  '$address',  '$barangay',  '$temp',  '$age',  '$q1',  '$q2',  '$q3',  '$q4',now())") or die($db->error);
    echo "<script>alert('Contact Trace Record Saved !!!'); location.href='tracingform.php'</script>";
}
