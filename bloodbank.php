<?php
session_start();
require_once('connect.php');
require_once("./template/central.php");
require_once("leftnavitems.php");
require_once("./template/rightContainer.php"); ?>

<script>
document.getElementById('dashboard').style.display = "none";
</script>
<div class="content-available-banks">
    <div class="content-available-banks-hold">

        <h1> Blood Banks and Contact</h1>

        Search<input type="search" name="" id="" placeholder="Blood bank">
        <input type="search" name="" id="" placeholder="City">

        <?php

        $getbankquery = "SELECT *  FROM bloodbankdetails";
        $getbankqueryfire = mysqli_query($con, $getbankquery);
        $num = mysqli_num_rows($getbankqueryfire);
        if ($num > 0) {
            while ($bankinfo = mysqli_fetch_array($getbankqueryfire)) {
        ?>
        <div class="tables">
            <span name="bankname" id="bankname">
                <?php echo $bankinfo['BloodbankName'] ?>
            </span><br>
            <span id="bankaddress">
                <?php echo $bankinfo['Location'] ?>
            </span><br>
            <span id="banktel"><a href="tel:<?php echo $bankinfo['BloodbankName'] ?>">
                    <?php echo $bankinfo['Contact'] ?>
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
            box-shadow: -4px -4px 6px inset rgba(222, 25, 64, 0.658);
            padding: 15px;
            margin: 5px;
            letter-spacing: 1px;
            font-size: x-large;
            display: inline-block;
            min-width: 20vw;
            width: fit-content;
            min-height: 7vw;
        }

        .content-available-banks .tables #bankname {
            letter-spacing: 0.5px;
            color: rgb(181, 48, 48);
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
    </div>
</div>
<?php require_once("template/leftcontainer.php"); ?>