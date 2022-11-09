<?php if (isset($_POST['newsubmit'])) {
    $bname = $location = $contact = $website = "";
    $bname = $_POST['bloodbankname'];
    $location = $_POST['location'];
    $contact = $_POST['contact'];
    $website = $_POST['website'];
    require_once('../connect.php');
    if ($conne) {
        $bankquery = "INSERT INTO `bloodbankdetails`( `BloodbankName`, `Location`, `contact`, `website`) VALUES
    ('$bname','$location','$contact','$website')";
        $queryfire = mysqli_query($con, $bankquery);
        header('location:changebankdetails.php');
    }
}
?>
<?php require_once('../connect.php');
if (isset($_POST['update'])) {
    $bname = $location = $contact = $website = '';
    $bname = $_POST['bloodbankname'];
    $location = $_POST['location'];
    $contact = $_POST['contact'];
    $website = $_POST['website'];
    $id = $_POST['updateid'];

    if ($conne) {

        $bankquery = "UPDATE bloodbankdetails SET  BloodbankName='$bname',Location='$location',Contact='$contact',website='$website' WHERE `id`='$id'";
        $queryfire = mysqli_query($con, $bankquery);
        header('location:changebankdetails.php');
    }
} ?>