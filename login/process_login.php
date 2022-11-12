<?php
session_start();
require_once "/xampp/htdocs/BloodBank/Admin/connect.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $enteredname = $_POST['entered_id'];
    $enterpassword = $_POST['entered_pass'];


    $query = "SELECT * FROM `user_login`where  email_id='$enteredname'OR phone='$enteredname' OR user_id='$enteredname'";
    $queryfire = mysqli_query($con, $query);
    $users = mysqli_fetch_array($queryfire);
    $count = mysqli_num_rows($queryfire);

    if ($count == 1) {
        if ($users['password'] == $enterpassword) {
            if ($users["usertype"] == "user") {
                session_start();
                $user = $users['phone'];
                $infoquery = "SELECT * FROM userprofile where phone= '$user'";
                $infoqueryfire = mysqli_query($con, $infoquery);
                $info = mysqli_fetch_array($infoqueryfire);
                $_SESSION['address'] = $info['address'];
                $_SESSION['phone'] = $info['phone'];
                $_SESSION['photo'] = $info['Photo'];
                $_SESSION['usertype'] = $users["usertype"];
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $users['username'];
                $_SESSION['user_id'] = $users['user_id'];

                header('location:../dashboard.php');
            } else if ($users["usertype"] == "admin") {
                session_start();
                $_SESSION['usertype'] = $users["usertype"];

                $_SESSION['log'] = true;
                header('location:../Adminpanel/adminDashboard.php');
            } else {
                header('location:../dashboard.php');
            }
        } else {

            header('location:../dashboard.php');
        }
    } else {
        echo "hello";
        header('location:../dashboard.php');
    }
} ?>
<!--<script>
    var logged_in = '<? //php // echo $logged_in; 
                        ?>';
    if (logged_in === "true") {
        document.getElementById("user_status").style.visibility = "hidden";
    } else {
        document.getElementsByClassName("signin").style.visibility = "visible";
    }
</script>-->