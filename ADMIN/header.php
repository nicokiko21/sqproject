<?php

include '../dbconnection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT TRACING WEBSITE</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">


</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light">

        <a class="navbar-brand" href="admin.php">COVID19 Contact Tracing</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Contact Tracing</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="TracingForm.php">Add an Entry</a>
                        <a class="dropdown-item" href="viewentry.php">View Entry/Generate Reports</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Scheduling</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="addsched.php">Add a schedule</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Web Utilities</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="updateHomepage.php">Update Home Page</a>
                        <a class="dropdown-item" href="updateProtocols.php">Update COVID19 Protocols</a>
                        <a class="dropdown-item" href="updateHeatmap.php">Update Heat Map</a>
                        <a class="dropdown-item" href="updateLinkages.php">Update Linkages</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>