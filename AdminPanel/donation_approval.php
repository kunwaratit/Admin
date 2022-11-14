<?php
require_once('../connect.php');
require_once("./admintemplate/admincentral.php");
require_once("../leftnavitemsn.php"); ?>
<?php
if (isset($_GET['action'])) {
    if (($_GET['action']) == "approve") {
        $query = "UPDATE  donationrequest set action='approved' where id=$_GET[id]";
        $queryfire = mysqli_query($con, $query);



        $query = "SELECT * FROM `donordetails`where user_id='$_GET[userid]'";
        $queryfire = mysqli_query($con, $query);
        $users = mysqli_fetch_array($queryfire);
        $count = mysqli_num_rows($queryfire);

        if ($count == 0) {


            $sql = "INSERT into  donordetails (`user_id`,`total_times`) VALUES ('$_GET[userid]','1')";
            $sqlfire = mysqli_query($con, $sql);
        } else {
            $sql = "UPDATE  donordetails set total_times=total_times+1  where user_id='$_GET[userid]'";
            $sqlfire = mysqli_query($con, $sql);
        }
        $query = "SELECT bloodGroup FROM `userprofile`where user_id='$_GET[userid]'";
        $queryfire = mysqli_query($con, $query);
        $usersq = mysqli_fetch_array($queryfire);
        $querys = "UPDATE `bloodgroup` SET unit=unit+450 WHERE GroupName='$usersq[bloodGroup]'";
        $querysfire = mysqli_query($con, $querys);
    } else if (($_GET['action']) == "decline") {
        $query = "UPDATE  donationrequest set action='declined' where id=$_GET[id]";
        $queryfire = mysqli_query($con, $query);
    } else if (($_GET['action']) == "edit") {
    } else {
    }
}
?>
<!--<div class="row">
    
    

        <form class=" form bankDetails" action="process_bankdetails.php" method="post">
        Serial No. <input type="text" name="updateid" value="">
    BloodBankName <input type="text" name="bloodbankname" value="<?php //echo $bankinfo['BloodbankName'] 
                                                                    ?>">
    Contact<input type="text" name="contact" value="<?php //echo $bankinfo['Contact'] 
                                                    ?>">
    location<input type="text" name="location" value="<?php //echo $bankinfo['Location'] 
                                                        ?>">
    website<input type="text" name="website" value="<?php //echo $bankinfo['website'] 
                                                    ?>">

    <input class="submit a1" type="submit" value="Update" name="update">
    </form>

    }

    ?>
    <form class="form bankDetails" action="" method="post">
        Serial No. <input type="text" value="autocomplete" disabled>
        Full Name <input type="text" name="fullname">
        Contact<input type="text" name="contact">
        Location<input type="text" name="location">
        Blood Group<input type="text" name="bloodgroup">
        <input class="submit a1" type="submit" value="submit" name="newsubmit">
    </form>


</div>


-->



<div class="tables">
    <h1> Donation Approval</h1>


    <!--  <a href="#" style="color:blue ; text-decoration:underline;" id="add">Add New</a>
-->
    <script>
    var id = document.getElementById("add");

    id.addEventListener("click", function() {
        var addnew = document.getElementById("addnew");
        addnew.style.display = "block";
    });
    </script>
    <style>
    #addnew {
        position: absolute;
        display: none;
    }
    </style>
    <div id="addnew">
        <?php

        if (isset($_POST['donate'])) {

            $hospitalid = "";
            $hospitalid = $_POST['hospitalid'];


            if ($conne) {
                $bankquery = "INSERT INTO `donationrequest`(`user_id`,`bank_id`) VALUES ('$_SESSION[user_id]','$hospitalid')";
                $queryfire = mysqli_query($con, $bankquery);
                echo "$hospitalid";
            }
        }
        ?>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        }
        ?>
        <style>
        * {
            font-family: cursive;
        }

        .donate div {
            color: black;
        }

        .donate {
            border-radius: 5%;
            background-color: #00506a;
            ;

            margin: 1em auto 0em 10em;
            width: fit-content;
            padding: 10px 10px;
        }

        .donate h1 {
            text-align: center;
            text-decoration: underline;
            margin-bottom: 15px;
            color: rgb(170, 181, 245);
            font-size: x-large;
        }

        .donate hr {
            color: aqua;
            margin: 5px 0px;
        }

        .quest {
            color: rgba(255, 255, 255, 0.973);
            font-weight: 800;
        }

        input[type="button"] {
            background-color: aliceblue;
            color: rgb(184, 11, 40);
            border-radius: 8px;
            padding: 2px;
            font-weight: 500;
        }

        input[type="button"]:hover,
        select:hover {
            color: red;
            background-color: rgb(200, 206, 211);
        }
        </style>

        <div class="form wrapper ">
            <div class="form donate">

                <form action="" method="post">
                    <div class="medhistory ">
                        <h1> Check the medical status</h1>
                        <p class="quest"> Do you have any of the following disease ?</p>
                        <style>
                        .disease li {
                            float: left;
                            list-style-type: lower-alpha;
                            margin: 6px;
                            color: rgb(234, 197, 197);
                            margin-left: 25px;
                            font-size: 16px;
                        }

                        .disease {
                            height: 1.9em;
                        }
                        </style>
                        <ul class="disease">
                            <li>Blood Pressure</li>
                            <li>Diabetes</li>
                            <li>Cancer</li>
                            <li>Blood Thinner</li>
                        </ul>
                        <div style="float:right;">
                            <a><input type="button" value="Yes" onclick="alert('Sorry! Not Eligible.');"></a>
                            <input type="button" value="None">
                        </div><br style="margin-top: 5px;">
                        <hr>
                        <p class="quest"> Age:<span style="color:rgb(234, 197, 197) ;font-size: 16px;"> I am </span>

                            <select name="age" id="" style="background-color: aliceblue; color:rgb(184, 11, 40);">
                                <option value="over18" style="color:rgb(184, 11, 40);">Over 18</option>
                                <option value="under18" onclick="alert('Sorry! Not Eligible.');"
                                    style="color:rgb(184, 11, 40);">Under 18</option>
                            </select>
                        </p>
                        <hr>

                    </div>
                    <div class="">
                        <p class="quest">
                            Hospital <select name="hospitalid" id=""
                                style="background-color: aliceblue; color:rgb(184, 11, 40);width:250px">
                                <?php
                                $bankquery = "select bankid,Bloodbankname from bloodbankdetails";
                                $bankqueryfire = mysqli_query($con, $bankquery);
                                $num = mysqli_num_rows($bankqueryfire);
                                if ($num > 0) {
                                    while ($bankqueryfetch = mysqli_fetch_array($bankqueryfire)) {
                                        print_r($bankqueryfire);
                                ?>
                                <option value=" <?php echo $bankqueryfetch['bankid']; ?>"
                                    style="color:rgb(184, 11, 40);">
                                    <?php echo $bankqueryfetch['Bloodbankname']; ?>
                                </option>

                                <?php }
                                } ?>
                            </select> <br>Location: <input type="text" value=""><br>
                            Blood-Unit:<input type="text" name=""><br>
                            Last Donated: <input type="text" name="donation"><br>
                            <input class=" submit" type="submit" value="submit" name="donate">
                    </div>
                    <p class="quest"></p>
                </form>
            </div>
        </div>
    </div>




    <table class="dashtable">
        <thead>
            <th style="width:47px;">S.N</th>
            <th>Name</th>
            <th style=" width:90px;">Group</th>
            <th style="width:90px;">Unit</th>

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
                <img src="../clipboard.png" alt="" srcset="" height="35px">
                <?php echo $queryfetch['firstName'] . " " . $queryfetch['lastName']; ?>
            </td>
            <td>
                <?php echo $queryfetch['bloodGroup'] ?>
            </td>
            <td>450 <span style="font-size:9px ;">ml.</span> </td>
            <td>
                <?php echo $queryfetch['phone'] ?>
            </td>

            <td>
                <a
                    href="donation_approval.php?action=approve&id=<?php echo $queryfetch['id']; ?>&userid=<?php echo $queryfetch['user_id']; ?>">
                    <input type="submit" value="Approve" class="submit edit" id="accept" name="action" class="accept">
                </a>
                <a href="donation_approval.php?action=decline&id=<?php echo $queryfetch['id']; ?>"> <input type="submit"
                        value="Decline" class="submit delete" id="delete">
                </a>
                <!--  <a
                    href="donation_approval.php?edit_id=<?php // echo $queryfetch['id']; 
                                                        ?>&userid=<?php //echo $queryfetch['user_id']; 
                                                                                                    ?>">
                    <img src="./admintemplate/edit.png" height="25px"></a>-->
            </td>

        </tr>
        <?php }
        }
        ?>
    </table>
</div>
<script>

</script>