<?php

require_once("../connect.php");
require_once("./admintemplate/admincentral.php");
require_once("../leftnavitemsn.php"); ?>



<style>
tr td:first-child::before {
    counter-increment: Serial;
    content: "  "counter(Serial)".";
}
</style>

<div class="tables">
    <h1> Request History</h1>
    <table class="dashtable">
        <thead>
            <tr>
                <th style="width:49px;">Pid</th>
                <th>Patient Name</th>
                <th>Current Location</th>
                <th style="width:140px; ">Contact</th>
                <th>Hospital</th>

                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td>001</td>
                <td>Atit Kunwar</td>
                <td>kathmandu</td>
                <td>9842803777</td>
                <td>teaching</td>
                <!--  <td>report.jpg</td>-->
                <td>
                    <input type="submit" value="Edit" class="submit edit" id="edit" onclick="editer()">
                </td>

            </tr>
        </tbody>

        <?php
        require_once('../connect.php');

        $getreqbloodquery = "SELECT *  FROM requestedblood";
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

                <?php echo $reqbloodinfo['currentlocation'] ?>
            </td>
            <td>

                <?php echo $reqbloodinfo['contact'] ?>
            </td>
            <td>

                <?php echo $reqbloodinfo['hospital'] ?>
            </td>
            <!-- <td>

                <?php //echo $reqbloodinfo['patientreport'] 
                ?>
            </td>-->
            <td>
                <a href=""><input type="submit" value="<?php echo $reqbloodinfo['action']; ?>"
                        id="status_<?php echo $reqbloodinfo['action']; ?>" class="submit edit"></a>
            </td>
            <style>

            </style>

        </tr>

        <?php }
        } ?>

    </table>
</div>