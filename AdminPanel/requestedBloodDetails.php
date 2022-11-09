<?php
require_once("../connect.php");
require_once("./admintemplate/admincentral.php");
require_once("../leftnavitemsn.php");
?><?php
    if (isset($_GET['action'])) {
        if ($conne) {
            if (($_GET['action']) == "approve") {
                $query = "UPDATE  requestedblood set action='approved' where pid=$_GET[id]";
                $queryfire = mysqli_query($con, $query);
            }
            if (($_GET['action']) == "decline") {
                $sql = "UPDATE  requestedblood set action='declined' where pid=$_GET[id]";
                $sqlfire = mysqli_query($con, $sql);
            } else if (($_GET['action']) == "edit") {
            } else {
            }
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
    <h2 style="font-size:larger ; color: rgb(45, 93, 122);">Blood Request</h2>
    <div class="col-md-6 col-md-offset-2">
        <form class="form" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="message-text" class="control-label">Patient Name:</label> <br> <input type="text" id="msg"
                    name="name"> <br>
                Current Location<br><input type="text" name="currentlocation"><br>
                Contact<br> <input type="text" name="contact1"><br>
                Hospital<br><input type="text" name="hospital"><br>
                <p class="help-block" style="font-size: 13px;font-weight: 600;">
                    Hospital reffered doc.<br>
                    <input style="font-size: 13px;font-weight: 600;" type="file" id="file" name="file"><br>
                </p>
            </div>

            <div class="footer">
                <button type="submit" name="submit" class="btn btn-primary submit">Request Blood</button>
            </div>
        </form>

    </div>

</div>
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
                    <th style="width:70px;">Report</th>
                    <th style="width:120px; ">Action</th>

                </tr>
            </thead>
            <tbody>
                <tr>

                    <td></td>
                    <td>Atit Kunwar</td>
                    <td>kathmandu</td>
                    <td>9842803777</td>
                    <td>teaching</td>

                    <td>a</td>
                    <td>2100</td>
                    <td><img src="../clipboard.png" alt="" srcset="" height="30px">
                    </td>
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
                    <?php echo $reqbloodinfo['bloodgroup'] ?> </td>

                <td>
                    <?php echo $reqbloodinfo['unit'] ?> </td>
                <td>

                    <?php //$reqbloodinfo['patientreport']; 
                            ?> </td>
                <td>
                    <a href="requestedBloodDetails.php?action=approve&id=<?php echo $reqbloodinfo['pid']; ?>">
                        <img src="./admintemplate/checked.png" height="30px" title="accept"></a>
                    <a href="requestedBloodDetails.php?action=decline&id=<?php echo $reqbloodinfo['pid']; ?>"> <img
                            src="./admintemplate/cancel.png" height="30px" title="decline"></a>
                    <a href="requestedBloodDetails.php?action=edit&id=<?php echo $reqbloodinfo['pid']; ?>">
                        <img src="./admintemplate/edit.png" height="30px" title="edit"></a>
                </td>

            </tr>


            <?php }
            } ?>

        </table>
    </div>
</div>