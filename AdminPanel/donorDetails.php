<?php
require_once("../connect.php");
require_once("./admintemplate/admincentral.php");
require_once("../leftnavitemsn.php");
?><style>
    tr td:first-child::before {
        counter-increment: Serial;
        content: "  "counter(Serial)".";
    }
</style>
<div class="tables">
    <h1>Donor Details</h1>
    <table class="dashtable">
        <thead>
            <th style="width:47px;">S.N</th>
            <th>Name</th>
            <th>Address</th>
            <th style="width:125px;">Contact No.</th>
            <th>BloodGroup</th>
            <th style="width:100px;">Times</th>

            <th style="width:100px;">Unit</th>

            <th>Last Donated</th>
            <th>Status</th>

        </thead>
        <?php
        $query = "SELECT * from userprofile 
       Inner JOIN donordetails
       ON userprofile.user_id=donordetails.user_id ";
        $queryfire = mysqli_query($con, $query);
        $rows = mysqli_num_rows($queryfire);
        if ($rows > 0) {
            while ($queryfetch = mysqli_fetch_array($queryfire)) {

        ?>
                <tr>
                    <td> </td>
                    <td>
                        <img src="../<?php echo $queryfetch['profilePhoto'] ?>" alt="" srcset="" height="35px" width="30px" style="margin-bottom:-5px; border-radius:50%">
                        <?php echo $queryfetch['firstName']  . " " . $queryfetch['lastName']; ?>
                    </td>
                    <td><?php echo $queryfetch['address'] ?></td>
                    <td><?php echo $queryfetch['phone'] ?></td>
                    <td><?php echo $queryfetch['bloodGroup'] ?></td>
                    <td><?php echo $queryfetch['total_times'] ?><span style="font-size:9px ;">times </span> </td>
                    <td><?php echo $queryfetch['total_times'] * 450 ?><span style="font-size:9px ;">ml.</span></td>
                    <td><?php echo $queryfetch['last_donated'] ?></td>

                    <td>
                        <input type="submit" value="Active" class="submit edit" id="accept">
                    </td>

                </tr><?php }
                }
                        ?>

    </table>
</div>