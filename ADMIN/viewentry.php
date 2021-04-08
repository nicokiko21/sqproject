<?php include 'header.php'; ?>

<section class="container">
    <div class="jumbotron bg-white">
        <h1 class="display-4">Hello, admin!</h1>
        <p class="lead">On this section, you may view all contract tracing form by date and generate reports</p>
        <hr class="my-4">
        <p>Please utilize the datepicker in generating reports on this section</p>
        <br>

        <!-- Date picker -->
        <p>Please Choose a date: </p>
        <form action="viewentrylist.php" method="POST">
            <div class="col-md-4">
                <div class="form-label-group">
                    <input type="date" name="datesched" class="form-control" required="required" autofocus="autofocus">
                </div>
            </div>
            <br>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" name="submit" class="btn btn-success btn-sm">View Tracing Record</button>
            </div>
    </div>


    </form>
</section>

<?php include 'footer.php' ?>