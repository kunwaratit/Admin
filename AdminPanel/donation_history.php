<?php
require_once("../connect.php");
require_once("./admintemplate/admincentral.php");
require_once("../leftnavitemsn.php"); ?><div class="tables">
    <h1>Donation History</h1>
    <table class="dashtable">

        <thead>
            <th style="width:47px;">S.N</th>
            <th>Name</th>
            <th style=" width:90px;">Group</th>
            <th style="width:90px;">Unit</th>
            <th>Address</th>
            <th style="width:125px; ">Contact No.</th>
            <th>Action</th>
        </thead>

        <?php
        $query = "SELECT * from userprofile as u RIGHT JOIN donationrequest as d ON u.user_id=d.user_id";
        $queryfire = mysqli_query($con, $query);
        $rows = mysqli_num_rows($queryfire);
        if ($rows > 0) {
            while ($queryfetch = mysqli_fetch_array($queryfire)) {


        ?>
        <tr>
            <td> </td>
            <td><?php echo $queryfetch['firstName'] . " " . $queryfetch['lastName']; ?></td>
            <td><?php echo $queryfetch['bloodGroup'] ?></td>
            <td>1200 <span style="font-size:9px ;">cubic.</span> </td>
            <td></td>
            <td><?php echo $queryfetch['phone'] ?></td>
            <td>
                <input type="submit" value="<?php echo $queryfetch['action']; ?>"
                    id="status_<?php echo $queryfetch['action']; ?>" class="submit edit">

            </td>

        </tr><?php }
                }
                        ?>
        <style>
        tr td:first-child::before {
            counter-increment: Serial;
            content: "  "counter(Serial)".";
        }
        </style>
    </table>
</div>