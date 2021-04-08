<?php
include "header.php";


$lname = strip_tags($_POST['lname']);
$id = strip_tags($_POST['id']);
$schedid = strip_tags($_POST['schedid']);


$q = $db->query("Select fname,lname ,street  ,brgy , age ,contact ,email from booking where lname= '$lname' and id ='$id' and schedid = '$schedid' ");
$row = $q->fetch_assoc();

//$id = $row['id'];
?>


<section class="container">
    <div class="jumbotron bg-white">

        <h1 class="display-3 pb-5 border border-top-0 border-left-0 border-right-0">Contact Tracing Form</h1>

        <!-- CONTACT TRACING FORM -->
        <form action="tracingform2.php" method="POST">
            <div class="form-row pt-3">
                <label for=" fname">Booking Reference</label>
                <div class="form-group col-md-3 col-6"">
                 
                    <input type=" text" class="form-control" name="lname" required>

                </div>
                -
                <div class="form-group col-md-1 col-1"">
  
                
                        <input type=" text" class="form-control" name="id" required>


                </div>
                -
                <div class="form-group col-md-1 col-1"">
                  
                    <input type=" text" class="form-control" name="schedid" required>
                </div>
                <div class="form-group col-md-1 col-1"">
                  
                <button type=" submit" class="btn btn-success">Search</button>
                </div>

            </div>

        </form>
        <form action="tracingformadd.php" method="POST">
            <div class="form-row pt-3">
                <div class="form-group col-md-6">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" name="fname" placeholder='First Name' value=<?= $row['fname'] ?> required>

                </div>
                <div class="form-group col-md-6">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" name="lname" placeholder='Last Name' value=<?= $row['lname'] ?> required>
                </div>
            </div>
            <div class="form-row pt-3">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder='Email' value=<?= $row['email'] ?> required>

                </div>
                <div class="form-group col-md-6">
                    <label for="contact">Contact No.</label>
                    <input type="number" class="form-control" name="contact" placeholder='Contact' value=<?= $row['contact'] ?> required>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Street Address</label>
                <input type="text" class="form-control" name="address" placeholder='Address' value=<?= $row['street'] ?> required>
            </div>
            <div class="form-row border border-top-0 border-left-0 border-right-0 pb-3">
                <div class="form-group col-md-6">
                    <label for="barangay">Barangay & City</label>
                    <input type="text" class="form-control" name="barangay" placeholder='Barangay' value=<?= $row['brgy'] ?> required>
                </div>
                <div class="form-group col-md-3 col-6">
                    <label for="temp">Temperature</label>
                    <input type="number" class="form-control" name="temp" placeholder="Temperature" required>
                </div>
                <div class="form-group col-md-3 col-6">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" name="age" placeholder="Your Age" value=<?= $row['age'] ?> required>
                </div>
            </div>

            <!-- CONTACT TRACING FORM -->

            <div class="form-group pt-3">
                <p class="font-weight-normal mb-1">1. Have you experienced any Flu like systoms? (EG. Sore Throat/Body Pain/Fever/Headache)</p>
                <div class="custom-control custom-radio">

                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" value="YES">
                    <label class="custom-control-label" for="customRadio3">Yes</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input" value="NO" checked>
                    <label class="custom-control-label" for="customRadio4">No</label>
                </div>

            </div>

            <div class="form-group">
                <p class="font-weight-normal mb-1">2. Have you worked together or atayed in the same close environment of a confirmed COVID-19 case?</p>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio3" name="customRadio1" class="custom-control-input" value="YES">
                    <label class="custom-control-label" for="customRadio3">Yes</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio4" name="customRadio1" class="custom-control-input" value="NO" checked>
                    <label class="custom-control-label" for="customRadio4">No</label>
                </div>
            </div>

            <div class="form-group">
                <p class="font-weight-normal mb-1">3. Have you had any contact with anyone with fever, cough, colds and sore throat in the past 2 weeks</p>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio5" name="customRadio2" class="custom-control-input" value="YES">
                    <label class="custom-control-label" for="customRadio5">Yes</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio6" name="customRadio2" class="custom-control-input" value="NO" checked>
                    <label class="custom-control-label" for="customRadio6">No</label>
                </div>
            </div>

            <div class="form-group">
                <p class="font-weight-normal mb-1">4. Have you traveled outside of the Philippines in the last 14 days?</p>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio7" name="customRadio3" class="custom-control-input" value="YES">
                    <label class="custom-control-label" for="customRadio7">Yes</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio8" name="customRadio3" class="custom-control-input" value="NO" checked>
                    <label class="custom-control-label" for="customRadio8">No</label>
                </div>
            </div>


            <!-- SUBMIT BUTTON -->
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>

<?php include 'footer.php'; ?>