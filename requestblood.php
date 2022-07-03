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

            require 'Facebook/autoload.php';
            $fb = new Facebook\Facebook([
                'app_id' => '552747882981804', // Replace {app-id} with your app id
                'app_secret' => '4d6de77ab056b149c81efde176628a85', // Replace {app_secret} with your app secret
                'default_graph_version' => 'v2.11',
            ]);
            $linkdata = [
                'message' => 'Patient Name : ' . $_POST['name'] . '
Location : ' . $_POST['location'] . '
Contact : ' . $_POST['contact1'] . $_POST['contact2'] . '
Hospital : ' . $_POST['hospital'],
                'source' => $fb->fileToUpload($_FILES['file']["tmp_name"]),
            ];
            try {
                // Returns a `Facebook\FacebookResponse` object
                $response = $fb->post(
                    '/me/photos',
                    $linkdata,
                    'EAAH2uKU3KawBACBV0qjGrQX5heWuiFLubSN9gS9O9Qk1y3XcrXxpWwZBYK5fZBkTCHfBQypv0ESN0c6ERKzMZCsO6Wr5ndZBnvijwnpdRQ7FuhxeqB9MTvBZBRfl5ayoZC2Of8W3xwZBZAuPMpmK0PZArnYlRDaOt5ZBDeESfjIlREuHn4oYHMFvh27BRWoTg73E6np18NcE1mvwZDZD'
                );
            } catch (Facebook\Exceptions\FacebookResponseException $e) {
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch (Facebook\Exceptions\FacebookSDKException $e) {
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }
        }
        ?>
        <h1>Blood Request Form</h1>
        <hr>
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <form method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="message-text" class="control-label">Patient Name:</label>
                        <input type="text" id="msg" name="name"> <br>
                        Current Location<input type="text" name="location"><br>
                        Contact <input type="text" name="contact1">,<input type="text" name="contact2"><br>
                        Hospital<input type="text" name="hospital"><br>
                        <p class="help-block">Hospital reffered doc <input type="file" id="file" name="file"><br>

                    </div>

                    <div class="footer">
                        <button type="submit" name="submit" class="btn btn-primary">Request Blood</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div> <!-- /container -->
</body>

</html>

<?php
?>