<?php

require_once("../connect.php");
require_once("./admintemplate/admincentral.php");
require_once("../leftnavitemsn.php");
?>

<?php if (isset($_POST['request'])) {
    $pname = $location = $contact = $hospital = $file  = "";
    $pname = $_POST['name'];
    $hospital = $_POST['hospital'];
    $location = $_POST['currentlocation'];
    $contact = $_POST['contact1'];
    $unit = $_POST['unit'];
    $bloodgroup = $_POST['bloodgroup'];

    require_once('../connect.php');
    if ($conne) {
        $bankquery = "INSERT INTO `requestedblood`(`user_id`, `patientname`, `currentlocation`, `contact`,`hospital`,`bloodgroup`,`unit`) VALUES
    ('Admin','$pname','$location','$contact','$hospital','$bloodgroup','$unit')";
        $queryfire = mysqli_query($con, $bankquery);
    }
}
?>
<?php require_once('../connect.php');
if (isset($_POST['updated'])) {

    $pname = $location = $contact = $hospital = $file  = "";
    $pname = $_POST['name'];
    $hospital = $_POST['hospital'];
    $location = $_POST['currentlocation'];
    $contact = $_POST['contact1'];
    $id = $_POST['updateid'];

    $unit = $_POST['unit'];
    $bloodgroup = $_POST['bloodgroup'];

    if ($conne) {

        $banquery = "UPDATE `requestedblood` SET patientname='$pname',currentlocation='$location',bloodgroup='$bloodgroup',unit='$unit',contact='$contact',hospital='$hospital' WHERE `pid`='$id'";
        $queryfire = mysqli_query($con, $banquery);
    }
}
?>







<style>
tr td:first-child::before {
    counter-increment: Serial;
    content: "  "counter(Serial)".";
}

.form {


    display: flex;
    flex-direction: column;
    font-size: 0.9em;
    width: 11em;
}

.form input {
    width: 10em;
}
</style>


<div class="row">
    <div class="col-md-6 col-md-offset-2">

        <?php


        if (isset($_GET['approve_id'])) {
            $query = "UPDATE  requestedblood set action='approved' where pid=$_GET[approve_id]";
            $queryfire = mysqli_query($con, $query);

            $query = "SELECT bloodGroup,unit FROM `requestedblood`where pid=$_GET[approve_id]";
            $queryfire = mysqli_query($con, $query);
            $usersq = mysqli_fetch_array($queryfire);
            $querys = "UPDATE `bloodgroup` SET unit=unit-$usersq[unit] WHERE GroupName='$usersq[bloodGroup]'";
            $querysfire = mysqli_query($con, $querys);
        }
        if (isset($_GET['decline_id'])) {
            $sql = "UPDATE requestedblood set action='declined' where pid=$_GET[decline_id]";
            $sqlfire = mysqli_query($con, $sql);
        }
        if (isset($_GET['edit_id'])) {


            $editquery = "Select * from `requestedblood` where pid=$_GET[edit_id]";
            $queryfire = mysqli_query($con, $editquery);
            $num = mysqli_num_rows($queryfire);
            if ($num > 0) {
                while ($editinfo = mysqli_fetch_array($queryfire)) {
        ?>
        <form class="form" action="" method="post">

            <div class="form-group">
                Serial No. <input type="text" name="updateid" value="<?php echo $editinfo['pid'] ?>">
                Patient Name:<br> <input type="text" id="msg" name="name"
                    value="<?php echo $editinfo['patientname']; ?>"> <br>
                Current Location<br><input type="text" name="currentlocation"
                    value="<?php echo $editinfo['currentlocation']; ?>"><br>
                Contact<br> <input type="text" name="contact1" value="<?php echo $editinfo['contact']; ?>"><br>
                Hospital<br><input type="text" name="hospital" value="<?php echo $editinfo['hospital']; ?>"><br>
                BloodGroup <input type="text" name="bloodgroup" value="<?php echo $editinfo['bloodgroup']; ?>">
                <br> Unit<br><input type="text" name="unit" value="<?php echo $editinfo['unit']; ?>"><br>
                <input class="submit a1" type="submit" value="Update" name="updated">
            </div>
            <div class="footer">

            </div>
        </form>

    </div>

</div>
<?php
                }
            }
        } else {

?>
<form class="form" method="post" enctype="multipart/form-data">

    <div class="form-group">
        Serial No. <input type="text" value="autocomplete" disabled>
        <label for="message-text" class="control-label">Patient Name:</label> <br> <input type="text" id="msg"
            name="name"> <br>
        Current Location<br><input type="text" name="currentlocation"><br>
        Contact<br> <input type="text" name="contact1"><br>
        Hospital<br><input type="text" name="hospital"><br>

        BloodGroup <input type="text" name="bloodgroup">
        <br> Unit<br><input type="text" name="unit"><br>


    </div>

    <div class="footer">
        <button type="submit" name="request" class="btn btn-primary submit">Request Blood</button>
    </div>
</form>

</div>

</div>
<?php
        }
?>




<form action="" method="post">
    <div>

        <div class="tables">
            <h1> Requested Blood</h1>
            <table class="dashtable">
                <thead>
                    <tr>
                        <th style="width:47px;">S.N</th>
                        <th>Patient Name</th>
                        <th style="width:125px; ">Contact</th>
                        <th>Hospital</th>
                        <th>Location</th>



                        <th style="width:63px;">Group</th>
                        <th style="width:55px;">unit</th>

                        <th style="width:120px; ">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td></td>
                        <td>Atit Kunwar</td>
                        <td>9842803777</td>
                        <td>teaching</td>
                        <td>kathmandu</td>
                        <td>a</td>
                        <td>2100</td>

                        <td> <img src="./admintemplate/checked.png" height="30px" title="accept">
                            <!--<input type="submit" value="Edit" class="submit edit" id="edit" onclick="editer()">
                        -->
                            <img src="./admintemplate/cancel.png" height="30px" title="decline">
                            <!--<input type="submit" value="Delete" class="submit delete">-->
                        </td>
                    </tr>
                </tbody>

                <?php
                require_once('../connect.php');

                $getreqbloodquery = "SELECT *  FROM requestedblood where action='Pending'";
                $getreqbloodqueryfire = mysqli_query($con, $getreqbloodquery);
                $num = mysqli_num_rows($getreqbloodqueryfire);
                if ($num > 0) {
                    while ($reqbloodinfo = mysqli_fetch_array($getreqbloodqueryfire)) {
                ?>

                <tr>

                    <td>

                    </td>
                    <td>
                        <?php echo $reqbloodinfo['patientname'] ?>
                    </td>

                    <td>

                        <?php echo $reqbloodinfo['contact'] ?>
                    </td>
                    <td>

                        <?php echo $reqbloodinfo['hospital'] ?>
                    </td>
                    <td>

                        <?php echo $reqbloodinfo['currentlocation'] ?>
                    </td>
                    <td>
                        <?php echo $reqbloodinfo['bloodgroup'] ?>
                    </td>

                    <td>
                        <?php echo $reqbloodinfo['unit'] ?>
                    </td>
                    <!--<td>

                        <?php //$reqbloodinfo['patientreport']; 
                        ?>
                    </td>-->
                    <td>
                        <a href="requestedBloodDetails.php?approve_id=<?php echo $reqbloodinfo['pid']; ?>">
                            <img src="./admintemplate/checked.png" height="30px" title="accept"></a>
                        <a href="requestedBloodDetails.php?decline_id=<?php echo $reqbloodinfo['pid']; ?>"> <img
                                src="./admintemplate/cancel.png" height="30px" title="decline"></a>
                        <a href="requestedBloodDetails.php?edit_id=<?php echo $reqbloodinfo['pid']; ?>">
                            <img src="./admintemplate/edit.png" height="30px" title="edit"></a>


                    </td>

                </tr>


                <?php }
                } ?>

            </table>
        </div>
    </div>
</form>