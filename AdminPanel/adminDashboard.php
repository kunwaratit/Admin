<?php
require_once("./admintemplate/admincentral.php");
require_once("../leftnavitemsn.php"); ?>
<style>

</style>
<div class="content-available-banks">
    <div class="content-available-banks-hold">

        <h1> Dashboard</h1>


        <?php
        require_once('../connect.php');
        $bloodgroupquery = "SELECT *  FROM bloodgroup";
        $bloodgroupqueryfire = mysqli_query($con, $bloodgroupquery);
        $num = mysqli_num_rows($bloodgroupqueryfire);
        if ($num > 0) {
            while ($bloodgroupinfo = mysqli_fetch_array($bloodgroupqueryfire)) {
        ?>
        <div class="tables">

            <span name="bankname" id="bankname">
                <h3>
                    <?php echo $bloodgroupinfo['Group Name'] ?>
                </h3>
            </span><br>
            <span id="bankaddress">
                <?php echo $bloodgroupinfo['unit'] ?>
            </span><br>
            <span id="banktel"><a href="tel:<?php echo $bloodgroupinfo['vol'] ?>">
                    <?php echo $bloodgroupinfo['vol'] ?>
                </a></span>
        </div>
        <?php }
        } ?>
        <style>
        .content-available-banks {
            /* border: 2px solid red*/
            flex-wrap: wrap;
            text-align: center;
            display: flex;
            justify-content: center;

        }

        .content-available-banks .tables {
            box-shadow: -4px -4px 8px inset rgba(255, 255, 255, 0.66);
            padding: 15px;
            margin: 5px;
            letter-spacing: 1px;
            font-size: x-large;
            display: inline-block;
            min-width: 16vw;
            width: fit-content;
            min-height: 7vw;
            background-color: #071126e3;
        }

        .content-available-banks .tables #bankname {
            letter-spacing: 0.5px;
            color: rgb(255, 255, 255);
            font-size: 24px;
            font-weight: 500;
        }

        .content-available-banks .tables #bankname:hover {
            text-decoration: underline;
        }

        .tables #bankaddress {
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            font-weight: lighter;
            color: green;
        }

        #banktel a {
            color: rgba(82, 83, 82, 0.842);

            font-size: medium;
            text-decoration: underline;
        }
        </style>