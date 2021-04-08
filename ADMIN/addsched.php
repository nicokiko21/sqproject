<?php include 'header.php' ?>

<!-- SECTION IN ADDING A SCHEDULE -->

<section class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Set a Schedule</div>
        <div class="card-body">
            <!-- INSERT MO PO DITO S ACTION AHAHAHA -->
            <form action="addschedsubmit.php" method="POST">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="date" name="datesched" class="form-control" required="required" autofocus="autofocus">



                                </div>



                            </div>
                        </div>

                    </div>


                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <div class="form-label-group">


                                    <input type="time" name="timesched" class="form-control" placeholder="First Name" required="required" autofocus="autofocus">

                                </div>



                            </div>
                        </div>

                    </div>


                </div>

                <div class="form-group">
                    <div class="col-md-6">

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-2">
                        <input type="text" name="slot" class="form-control" placeholder="Available Slot" required="required" autofocus="autofocus">

                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" name="submit" class="btn btn-success btn-sm">Add Schedule</button>
                </div>
        </div>
    </div>
</section>


<!-- SECTION IN VIEWING SCHED AND DELETE -->

<section class="container">
    <h2>Schedule Details</h2>
    <div class="col-md-12">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Slot Limit</th>
                    <th>Reserved Slots</th>
                    <th>Remaining Slots</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    $db->query("SET time_zone='+8:00';");
                    $q = $db->query("SELECT s.id,date , time ,slot "
                        . ", sum(case when b.schedid is null then 0 else 1 end ) resslot"
                        . ", slot - sum(case when b.schedid is null then 0 else 1 end ) remslot"
                        . " from schedule s left join booking b on b.schedid = s.id  "
                        . "group by s.id,date,time,slot");
                    while ($row = $q->fetch_assoc()) :
                    ?>
                        <tr>
                            <td><?= $row['date'] ?></td>
                            <td><?= $row['time'] ?></td>
                            <td><?= $row['slot'] ?></td>

                            <td>
                                <a href="viewappointment.php?id=<?= $row['id'] ?>"><span class="glyphicon glyphicon-pencil">
                                        <?= $row['resslot'] ?></span></a>


                            </td>
                            <td><?= $row['remslot'] ?></td>
                            <td>
                                <a href="addscheddelete.php?id=<?= $row['id'] ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil">DELETE</span></a>

                            </td>
                        </tr>
                    <?php endwhile;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>


<?php include 'footer.php' ?>