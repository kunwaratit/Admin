<?php

if ($_SERVER['REQUEST_METHOD'] = 'POST') {
    $bname = $location = $contact = $website = "";
    $bname = $_POST['bloodbankname'];
    $location = $_POST['location'];
    $contact = $_POST['contact'];
    $website = $_POST['website'];
    require_once('../connect.php');
    if ($conne) {
        $bankquery = "INSERT INTO `bloodbankdetails`( `BloodbankName`, `Location`, `contact`, `website`) VALUES ('$bname','$location','$contact','$website')";
        $queryfire = mysqli_query($con, $bankquery);
        header('location:changebankdetails.php');
    }
}