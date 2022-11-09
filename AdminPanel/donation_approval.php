<?php
require_once('../connect.php');
require_once("./admintemplate/admincentral.php");
require_once("../leftnavitemsn.php"); ?>
<?php
if (isset($_GET['action'])) {
    if (($_GET['action']) == "approve") {
        $query = "UPDATE  donationrequest set action='approved' where id=$_GET[id]";
        $queryfire = mysqli_query($con, $query);
    } else if (($_GET['action']) == "decline") {
        $query = "UPDATE  donationrequest set action='declined' where id=$_GET[id]";
        $queryfire = mysqli_query($con, $query);
    } else if (($_GET['action']) == "edit") {
    } else {
    }
}
?>
<div class="tables">
    <h1>Approval</h1>
    <table class="dashtable">
        <thead>
            <th style="width:47px;">S.N</th>
            <th>Name</th>
            <th style="width:90px;">Photo</th>
            <th style=" width:90px;">Group</th>
            <th style="width:90px;">Unit</th>
            <th>Address</th>
            <th style="width:125px; ">Contact No.</th>
            <th colspan="">Action</th>
        </thead>
        <?php
        $query = "SELECT * from userprofile 
        RIGHT JOIN donationrequest
        ON userprofile.user_id=donationrequest.user_id where action='pending'";
        $queryfire = mysqli_query($con, $query);
        $rows = mysqli_num_rows($queryfire);
        if ($rows > 0) {
            while ($queryfetch = mysqli_fetch_array($queryfire)) {
        ?>
        <style>
        tr td:first-child::before {
            counter-increment: Serial;
            content: "  "counter(Serial)".";
        }
        </style>
        <tr>
            <td> </td>
            <td>
                <?php echo $queryfetch['firstName'] . " " . $queryfetch['lastName']; ?>
            </td>
            <td><img src="../clipboard.png" alt="" srcset="" height="35px"></td>
            <td>
                <?php echo $queryfetch['bloodGroup'] ?>
            </td>
            <td>1200 <span style="font-size:9px ;">cubic.</span> </td>
            <td>Kathmandu</td>
            <td>
                <?php echo $queryfetch['phone'] ?>
            </td>
            <td>
                <a href="donation_approval.php?action=approve&id=<?php echo $queryfetch['id']; ?>"> <input type="submit"
                        value="Approve" class="submit edit" id="accept" name="action" class="accept">
                </a>
                <a href="donation_approval.php?action=decline&id=<?php echo $queryfetch['id']; ?>"> <input type="submit"
                        value="Decline" class="submit delete" id="delete">
                </a>
            </td>
            <td><a href="donation_approval.php?action=edit&id=<?php echo $queryfetch['id']; ?>">
                    <img src="./admintemplate/edit.png" height="25px"></a>
            </td>
        </tr>
        <?php }
        }
        ?>
    </table>
</div>
<script>

</script>