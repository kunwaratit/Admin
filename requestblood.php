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
            $file = $_FILES['file'];
            require 'Facebook/autoload.php';
            $fb = new Facebook\Facebook([
                'app_id' => '55274788298180', // Replace {app-id} with your app id
                'app_secret' => '4d6de77ab056b149c81efde176628a85', // Replace {app_secret} with your app secret
                'default_graph_version' => 'v2.11',
            ]);
            $linkdata = ['message' => 'Patient Name : ' . $_POST['name'] . 'Location : ' . $_POST['currentlocation'] . 'Contact : ' . $_POST['contact1'] . $_POST['contact2'] . 'Hospital : ' . $_POST['hospital'], 'source' => $fb->fileToUpload($_FILES['file']["tmp_name"]),];
            try {
                // Returns a `Facebook\FacebookResponse` object
                $response = $fb->post(
                    '/me/photos',
                    $linkdata,
                    'EAAH2uKU3KawBAAzRxelPZCAKUXEtmVNMeTtD2ePwBMCOpZA9LHA0jIU0kZCnkMBtEaHu724vjgeIfucQRzT0HCII9v5FioJDVKZAExsxHBZAnWBQPxbmUnfZArw7ZBotyDsWuosdDpoinKdWB8XgV93nfBRWmyxDzv0Bspn42mIJU2e896gZBB2d4xJW6LK91bgZD'
                );
            } catch (Facebook\Exceptions\FacebookResponseException $e) {
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch (Facebook\Exceptions\FacebookSDKException $e) {
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }

            $patientQuery = "
            INSERT INTO `requestedblood`(`user_id`,`patientname`, `currentlocation`, `contact`,`hospital`) VALUES ('$_SESSION[user_id]','$name','$location','$contact','$hospital')";

            $patientQueryfire = mysqli_query($con, $patientQuery);
        }
        ?>
        <h1>Blood Request Form</h1>
        <hr>
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <form method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="message-text" class="control-label">Patient Name:<br></label>
                        <input type="text" id="msg" name="name"> <br>
                        Current Location<br><input type="text" name="currentlocation"><br>
                        Contact<br> <input type="text" name="contact1">,<br><input type="text" name="contact2"><br>
                        Hospital<br><input type="text" name="hospital"><br>
                        <p class="help-block">Hospital reffered doc <input type="file" id="file" name="file"><br>
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