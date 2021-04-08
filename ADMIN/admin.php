<?php include 'header.php'; ?>

<section class="container">
    <div class="jumbotron bg-white">
        <h1 class="display-3">Welcome, admin!</h1>

    </div>
</section>

<section class="container d-md-flex justify-content-md-around">
    <div class="card" style="width: 18rem;">
        <img src="https://www.flaticon.com/svg/static/icons/svg/584/584547.svg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Add Schedule</h5>
            <p class="card-text">You may add schedule and set number of customers per appointment.</p>
            <a href="addsched.php" class="btn btn-primary">Add Schedule</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="https://www.flaticon.com/svg/static/icons/svg/3601/3601824.svg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">View Entries</h5>
            <p class="card-text">Check the number of people on a schedule for reporting and viewing purposes.</p>
            <a href="viewentry.php" class="btn btn-primary">View Entries</a>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="https://www.flaticon.com/svg/static/icons/svg/684/684908.svg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Update Heat Map</h5>
            <p class="card-text">Updating the heat map could help the customers in avoiding places with most COVID19 cases.</p>
            <a href="updateHeatmap.php" class="btn btn-primary">Heat Map</a>
        </div>
    </div>
</section>

<?php include 'footer.php' ?>