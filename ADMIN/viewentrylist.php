<?php include 'header.php';


$datesched = strip_tags($_POST['datesched']);


?>

<section class="container">
    <div class="jumbotron">
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
    </div>

    <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit" name="submit" class="btn btn-success btn-sm">View Tracing Record</button>
    </div>
    </form>
</section>

<?php
$db->query("SET time_zone='+8:00';");
$q = $db->query("SELECT * from tracing where date = '$datesched';");
while ($row = $q->fetch_assoc()) :
?>

    <section class="container">
        <div class="card border-dark mb-3" style="max-width: 100%;">
            <div class="card-header">Name: <?= $row['fname'] ?> <?= $row['lname'] ?> </div>
            <div class="card-body">
                <p>Address: <?= $row['street'] ?> </p>
                <div class="row">
                    <p class="col-md-6">Email: <?= $row['email'] ?> </p>
                    <p class="col-md-6">Contact No.: <?= $row['contact'] ?></p>
                </div>
                <div class="row">
                    <p class="col-md-6">Age: <?= $row['age'] ?></p>
                    <p class="col-md-6">Temperature: <?= $row['temperature'] ?></p>
                </div>
                <p>1. Have you experienced any Flu like systoms? (EG. Sore Throat/Body Pain/Fever/Headache): <?= $row['q1'] ?></p>
                <p>2. Have you worked together or atayed in the same close environment of a confirmed COVID-19 case? <?= $row['q2'] ?></p>
                <p>3. Have you had any contact with anyone with fever, cough, colds and sore throat in the past 2 weeks? <?= $row['q3'] ?> </p>
                <p>4. Have you traveled outside of the Philippines in the last 14 days? <?= $row['q4'] ?></p>

                <button type="button" class="btn btn-outline-primary ml-auto">Delete</button>
            </div>

        </div>

        <button type="button" class="btn btn-outline-primary ml-auto">Generate PDF</button>
    </section>
<?php endwhile;
?>

<?php include 'footer.php' ?>