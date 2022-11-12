<?php
session_start();
require_once('connect.php');
require_once("./template/central.php");
require_once("leftnavitems.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Upload photo on Facebook</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</head>

<body>
    <div class="container">
        <?php

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $location = $_POST['currentlocation'];
            $hospital = $_POST['hospital'];
            $contact = $_POST['contact1'];
            $unit = $_POST['unit'];$bloodgroup= $_POST['bloodgroup'];
            $file = $_FILES['file'];
            require 'Facebook/autoload.php';
            $fb = new Facebook\Facebook([
                'app_id' => '552747882981804', // Replace {app-id} with your app id
                'app_secret' => '4d6de77ab056b149c81efde176628a85', // Replace {app_secret} with your app secret
                'default_graph_version' => 'v2.11',
            ]);
            $linkdata = ['message' => 'Patient Name : ' . $_POST['name'] . '
Blood Needed : ' . $_POST['bloodgroup'].'   '. $_POST['unit'].'
Location : ' . $_POST['currentlocation'] . '
Contact : ' . $_POST['contact1'] . '
Hospital : ' . $_POST['hospital'], 'source' => $fb->fileToUpload($_FILES['file']["tmp_name"]),];
            try {
                // Returns a `Facebook\FacebookResponse` object
                $response = $fb->post(
                    '/me/photos',
                    $linkdata,
                    'EAAH2uKU3KawBANRZASXQwSXKE3L1N2t3waCy8jZCwv9ZCrvYIsXQAUHO92l1dRZAyeaLYY03OKVZAVXcreC4gdZAXDYGYYN9CAffWyPo0n00SDlkYSezUBu888ELvZA2W4aeEsN3IUedgSf9nZA5K9TZBsf9j3XP6tciWFLmNRTNMl3W8TYVCTJuZCxyXubB9Lum0ZD'
                );
            } catch (Facebook\Exceptions\FacebookResponseException $e) {
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch (Facebook\Exceptions\FacebookSDKException $e) {
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }
            if (isset($_SESSION['user_id'])) {
            $patientQuery = "INSERT INTO `requestedblood`(`user_id`,`patientname`, `currentlocation`, `contact`,`hospital`,`bloodgroup`,`unit`) VALUES ('$_SESSION[user_id]','$name','$location','$contact','$hospital','$bloodgroup','$unit')";

            $patientQueryfire = mysqli_query($con, $patientQuery);
        }}
        ?>
        <h1>Blood Request Form</h1>
        <hr>
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <form method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="message-text" class="control-label">Patient Name:<br></label>
                        <input type="text" id="msg" name="name" required> <br>
                        Current Location<br><input type="text" name="currentlocation" required><br>
                        Contact<br> <input type="text" name="contact1" required><br>
                        Hospital<br><input type="text" name="hospital" required><br>
                        Blood Group<br> <select name="bloodgroup" required>
                            <option value="O-">O-</option>
                            <option value="O+">O+</option>
                            <option value="A-">A-</option>
                            <option value="A+">A+</option>
                            <option value="B+">B+</option>
                            <option value="AB-">AB-</option>
                            <option value="AB+">AB+</option>

                        </select> <br> Unit<br><input type="text" name="unit"><br>
                        <p class="help-block">Hospital reffered doc <input type="file" id="file" name="file"
                                required><br>
                        </p>
                    </div>

                    <div class="footer">
                        <button type="submit" name="submit" class="btn btn-primary submit">Request Blood</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /container -->