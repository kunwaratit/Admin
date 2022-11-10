<?php
session_start();


require_once('./connect.php');

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
require_once('connect.php');

require_once("./template/central.php");
require_once("leftnavitems.php");

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

<div class="form wrapper " style="width:auto; ">
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
                        <option value="under18" onclick="alert('Sorry! Not Eligible.');" style="color:rgb(184, 11, 40);">Under 18</option>
                    </select>
                </p>
                <hr>

            </div>
            <div class="">
                <p class="quest">
                    Hospital <select name="hospitalid" id="" style="background-color: aliceblue; color:rgb(184, 11, 40);width:250px">
                        <?php
                        $bankquery = "select bankid,Bloodbankname from bloodbankdetails";
                        $bankqueryfire = mysqli_query($con, $bankquery);
                        $num = mysqli_num_rows($bankqueryfire);
                        if ($num > 0) {
                            while ($bankqueryfetch = mysqli_fetch_array($bankqueryfire)) {
                                print_r($bankqueryfire);
                        ?>
                                <option value=" <?php echo $bankqueryfetch['bankid']; ?>" style="color:rgb(184, 11, 40);">
                                    <?php echo $bankqueryfetch['Bloodbankname']; ?>
                                </option>

                        <?php }
                        } ?>
                    </select> <br>
                    Blood-Unit:<input type="text" name="" value="450ml" disabled><br>

                    <input class=" submit" type="submit" value="submit" name="donate">
            </div>
            <p class="quest"></p>
        </form>
    </div>
</div>