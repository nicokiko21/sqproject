<?php include 'header.php';



$id = $_GET['id'];

?>


<section class="container">
    <h2>Schedule Details</h2>
    <div class="col-md-12">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Slot Limit</th>

                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    $db->query("SET time_zone='+8:00';");
                    $q = $db->query("SELECT id,date , time ,slot from schedule  ");
                    while ($row = $q->fetch_assoc()) :
                    ?>
                        <tr>
                            <td><?= $row['date'] ?></td>
                            <td><?= $row['time'] ?></td>
                            <td><?= $row['slot'] ?></td>

                            <td>

                                <a href="bookscheduleform.php?id=<?= $row['id'] ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil">BOOK</span></a>
                            </td>
                        </tr>
                    <?php endwhile;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php

$q = $db->query("Select id ,date , time  from schedule where id = '$id'");
$row = $q->fetch_assoc();
?>
<section class="container">
    <div class="jumbotron bg-white">

        <h1 class="display-3 pb-5 border border-top-0 border-left-0 border-right-0">Appointment Form</h1>

        <!-- CONTACT TRACING FORM -->

        <form action="bookscheduleformadd.php" method="POST">
            <div class="form-row pt-3">
                <div class="form-group col-md-6">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" name="fname" placeholder="First Name" required="required">

                </div>
                <div class=" form-group col-md-6">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" name="lname" placeholder="Last Name" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="address">Street Address</label>
                <input type="text" class="form-control" name="address" placeholder=" Street Address" required="required">
            </div>
            <div class="form-row border border-top-0 border-left-0 border-right-0 pb-3">
                <div class="form-group col-md-6">
                    <label for="barangay">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                </div>

                <div class="form-group col-md-3 col-6">
                    <label for="age">Contact</label>
                    <input type="text" class="form-control" name="contact" placeholder="Contact" required="required">
                </div>
            </div>

            <div class="form-row border border-top-0 border-left-0 border-right-0 pb-3">
                <div class="form-group col-md-6">
                    <label for="barangay">Barangay & City</label>
                    <input type="text" class="form-control" name="barangay" placeholder="Barangay & City" required="required">
                </div>

                <div class="form-group col-md-3 col-6">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" name="age" placeholder="Age" required="required">
                </div>
            </div>

            <div class="form-row border border-top-0 border-left-0 border-right-0 pb-3">
                <div class="form-group col-md-6">
                    <label for="barangay">Appointment Date</label>
                    <input type="text" class="form-control" name="date" value="<?= $row['date'] ?>" disabled>
                </div>

                <div class="form-group col-md-3 col-6">
                    <label for="age">Appointment Time</label>
                    <input type="text" class="form-control" name="time" value="<?= $row['time'] ?>" disabled>
                </div>


                <div class="form-group col-md-3 col-6">

                    <input type="hidden" class="form-control" name="schedid" value="<?= $row['id'] ?>">
                </div>
            </div>

    </div>


    <!-- SUBMIT BUTTON -->
    <button type="submit" class="btn btn-success">Submit</button>
    </form>
    </div>
</section>


<?php include 'footer.php' ?>