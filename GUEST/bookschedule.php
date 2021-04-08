<?php include 'header.php' ?>


<section class="container">
    <div class="jumbotron bg-white">
        <h2>Schedule Details</h2>
        <br>
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
    </div>
</section>




<?php include 'footer.php' ?>