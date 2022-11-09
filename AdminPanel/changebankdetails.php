<?php

require_once("./admintemplate/admincentral.php");
require_once("../leftnavitemsn.php");
?>
<style>
.form {


    display: flex;
    flex-direction: column;
    font-size: 0.9em;
    width: 12em;
}
</style>

<link rel="stylesheet" href="../template/index.css">
<div class="row">
    <?php require_once('../connect.php');
    if (isset($_GET['del_id'])) {
        $id = $_GET['del_id'];
        if ($conne) {
            $bankquery = "delete from `bloodbankdetails` where id=$id";
            $queryfire = mysqli_query($con, $bankquery);
        }
    }

    ?>
    <?php require_once('../connect.php');
    if (isset($_GET['id'])) {
        $bloodbankid = $_GET['id'];
        $bldquery = "Select * from `bloodbankdetails` where id=$bloodbankid";
        $queryfire = mysqli_query($con, $bldquery);
        $num = mysqli_num_rows($queryfire);
        if ($num > 0) {
            while ($bankinfo = mysqli_fetch_array($queryfire)) {
    ?>
    <form class=" form bankDetails" action="process_bankdetails.php" method="post">
        Serial No. <input type="text" name="updateid" value="<?php echo $bankinfo['id'] ?>">
        BloodBankName <input type="text" name="bloodbankname" value="<?php echo $bankinfo['BloodbankName'] ?>">
        Contact<input type="text" name="contact" value="<?php echo $bankinfo['Contact'] ?>">
        location<input type="text" name="location" value="<?php echo $bankinfo['Location'] ?>">
        website<input type="text" name="website" value="<?php echo $bankinfo['website'] ?>">

        <input class="submit a1" type="submit" value="Update" name="update">
    </form>
    <?php
            }
        }
    } else { ?>
    <form class="form bankDetails" action="process_bankdetails.php" method="post">
        Serial No. <input type="text" value="autocomplete" disabled>
        BloodBankName <input type="text" name="bloodbankname">
        Contact<input type="text" name="contact">
        location<input type="text" name="location">
        website<input type="text" name="website">
        <input class="submit a1" type="submit" value="submit" name="newsubmit">
    </form>
    <?php } ?>

</div>
<div>

    <div class="tables">
        <h1> Blood Banks and Contact</h1>
        <table class="dashtable">
            <thead>
                <tr>
                    <th style="width:47px;">S.N</th>
                    <th>Name</th>
                    <th style="width:150px;">Location</th>
                    <th style="width:125px; ">Contact</th>
                    <th>Web(URL)</th>
                    <th style="width:50px; "></th>
                    <th style="width:65px;"></th>
                </tr>
            </thead>

            <?php
            require_once('../connect.php');

            $getbankquery = "SELECT *  FROM bloodbankdetails";
            $getbankqueryfire = mysqli_query($con, $getbankquery);
            $num = mysqli_num_rows($getbankqueryfire);
            if ($num > 0) {
                while ($bankinfo = mysqli_fetch_array($getbankqueryfire)) {
            ?>
            <tr>
                <td>
                    <?php echo $bankinfo['id'] ?>
                </td>
                <td>
                    <?php echo $bankinfo['BloodbankName'] ?>

                </td>
                <td>
                    <?php echo $bankinfo['Location'] ?>
                </td>
                <td>

                    <?php echo $bankinfo['Contact'] ?>
                </td>
                <td>

                    <a href="" style=" font-size: 15px;letter-spacing: 0.08px;">
                        <?php echo $bankinfo['website'] ?>
                    </a>
                </td>
                <td>
                    <a href="changebankdetails.php?id=<?= $bankinfo['id'] ?>" class="submit edit" id="edit">Edit</a>
                </td>
                <td><a href="changebankdetails.php?del_id=<?= $bankinfo['id'] ?>" class="submit delete" name="delete"
                        id="delete">Delete</a>

                </td>

            </tr>

            <?php }
            } ?>

        </table>

    </div>
</div>
<script>
var edit = document.getElementById('edit')

function editer() {
    document.getElementById("edit").innerHTML = "asd";
}
</script>