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

        <a class="navbar-brand" href="index.php">COVID19 Contact Tracing</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link active" href="bookschedule.php">Check Available Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="TracingForm.php">Tracing Form</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="linkages.php">Linkages</a>
                </li>
            </ul>
        </div>
    </nav>