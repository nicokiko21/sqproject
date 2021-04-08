<?php include 'header.php'; ?>

<section class="container">
    <div class="jumbotron bg-white">
        <h1 class="display-3">Establishment Name</h1>
        <p class="lead">This is where the company will put information about their establishment</p>
        <hr class="my-4">
        <p>Always Wear Mask and Stay Safe</p>
    </div>
</section>

<section class="container d-md-flex justify-content-md-around">
    <div class="card" style="width: 18rem;">
        <img class="mw-100 mh-100" src="https://www.flaticon.com/svg/static/icons/svg/2764/2764452.svg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Set-up Appointment</h5>
            <p class="card-text">Please check our available schedule for your convenience in visiting our establishment.</p>
            <a href="bookschedule.php" class="btn btn-primary">Check Schedule</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img class="mw-100 mh-100" src="https://www.flaticon.com/svg/static/icons/svg/854/854878.svg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">View Heatmap</h5>
            <p class="card-text">You may check this heat map that will help you in avoiding places with most COVID19 cases.</p>
            <a href="heatmap.php" class="btn btn-primary">View Heat Map</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="https://www.flaticon.com/svg/static/icons/svg/3553/3553736.svg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Important Reminders</h5>
            <p class="card-text">Some safety protocols in our establishment must be followed for your own safety</p>
            <a href="safetyprotocols.php" class="btn btn-primary">Reminders</a>
        </div>
    </div>
</section>

<?php include 'footer.php' ?>