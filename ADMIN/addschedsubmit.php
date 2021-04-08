<?php

session_start();
//echo $_SERVER['REQUEST_METHOD'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../dbconnection.php';

    $datesched = strip_tags($_POST['datesched']);
    $timesched = strip_tags($_POST['timesched']);
    $slot = strip_tags($_POST['slot']);


    echo $timesched;


    $db->query("INSERT INTO schedule( date, time,  slot) VALUES ('$datesched','$timesched',  $slot)") or die($db->error);
    echo "<script>alert('Added Scheduke successful!!!'); location.href='addsched.php'</script>";
}
