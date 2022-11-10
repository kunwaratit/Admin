<?php
require_once("../connect.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $address = $_POST['address'];
    $dob = $_POST['DateOfBirth'];
    $phone = $_POST['phoneno'];
    $bloodgroup = $_POST['bloodGroup'];
    $weight = $_POST['weight'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $profile = $_POST['profile'];
    $cover = $_POST['cover'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $selectuser = "SELECT * from user_login where phone='$phone' and email_id='$email' ";
    $userfire = mysqli_query($con, $selectuser);
    $fetchusers = mysqli_fetch_array($userfire);
    $count = mysqli_num_rows($userfire);

    if ($count == 0) {
        $query = "INSERT INTO `userprofile`( `firstName`, `lastName`, `address`, `Gender`, `phone`, `bloodGroup`, `profilePhoto`, `coverPhoto`) VALUES ('$fname','$lname','$address','$sex',$phone,'$bloodgroup','$profile','$cover')";
        $queryfire = mysqli_query($con, $query);
        if ($queryfire) {
            //userid
            $sql = "SELECT RIGHT('$phone',4) as lastnum FROM userprofile";
            $sqlfire = mysqli_query($con, $sql);
            $fetchuser = mysqli_fetch_array($sqlfire);
            $addUser = $fname . $fetchuser['lastnum'];
            $username = $fname . ' ' . $lname;
            $userid = "INSERT INTO `user_login`(`username`,`user_id`, `phone`, `password`, `email_id`) VALUES ('$username','$addUser',$phone,'$password','$email')";


            $queryuserid = "UPDATE userprofile set user_id='$addUser' where phone=$phone";
            $queryuseridfire = mysqli_query($con, $queryuserid);

            $useridfire = mysqli_query($con, $userid);
            header('location:../dashboard.php');
        }
    } else {

        header('location:../signup/signup.php');
    }
    //*/
} else
    return false;
