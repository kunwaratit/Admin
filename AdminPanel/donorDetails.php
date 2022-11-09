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
< <div class="tables">
    <h1>Donor Details</h1>
    <table class="dashtable">
        <thead>
            <th style="width:47px;">S.N</th>
            <th>Name</th>
            <th style="width:90px;">Photo</th>
            <th>BloodGroup</th>
            <th style="width:90px;">Unit</th>
            <th>Address</th>
            <th style="width:125px;">Contact No.</th>
            <th>Donated</th>
            <th>Last Donated</th>
            <th>Active</th>
        </thead>
        <?php
        $query = "SELECT * from userprofile ";
        $queryfire = mysqli_query($con, $query);
        $rows = mysqli_num_rows($queryfire);
        if ($rows > 0) {
            while ($queryfetch = mysqli_fetch_array($queryfire)) {

        ?>
        <tr>
            <td> </td>
            <td><?php echo $queryfetch['firstName']  . " " . $queryfetch['lastName']; ?></td>
            <td><img src="../clipboard.png" alt="" srcset="" height="35px"></td>
            <td><?php echo $queryfetch['bloodGroup'] ?></td>
            <td>1200 <span style="font-size:9px ;">cubic.</span> </td>
            <td>Kathmandu</td>
            <td><?php echo $queryfetch['phone'] ?></td>
            <td>
                <input type="submit" value="Verified" class="submit edit" id="accept">
            </td>

        </tr><?php }
                }
                        ?>

    </table>
    </div>