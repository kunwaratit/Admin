<?php session_start();
require_once('connect.php');
require_once("./template/central.php");

?><div><?php require_once("template/rightContainer.php");

        ?><h1 style=" font-size:larger ;">User Info</H1>
    <?php if ((!isset($_SESSION['loggedin'])) || ($_SESSION['loggedin'] == false)) {
        echo "<style> .holder{
                                display: none;}
                    </style>";
        echo "you are not logged in..";
    }

    ?><div class="holder">
        <div class="countbloods" style="display: flex;">
            <style>
            .countbloods {
                display: flex;
                flex-wrap: wrap;
                width: 100%;
            }


            .userInfo,
            .userInfo div {
                color: white;
                background-color: rgb(0, 133, 179);
                border-radius: 12px;
                font-size: 17px;
            }

            .userInfo a div .userdata {
                margin: 80px auto auto 120px;
                font-size: 18px
            }

            .userInfo {
                font-size: 9px;
                height: 130px;
                width: 160px;
                margin: 8px;
            }

            @media (max-width:360px) {
                .userInfo {
                    width: 100%;
                    margin: auto 2rem 0.25rem 0rem;
                }
            }
            </style>
            <div class="userInfo"><a>
                    <div>Donation made
                        <hr>
                        <div class="userdata"><?php $query = "SELECT * FROM `donationrequest`  where action='approved' and  user_id='$_SESSION[user_id]'";
                                                $queryfire = mysqli_query($con, $query);
                                                $rows = mysqli_num_rows($queryfire);
                                                echo $rows;
                                                ?></div>
                    </div>
                </a></div>
            <hr>
            <div class="userInfo"><a>
                    <div>Request Made
                        <hr>
                        <div class="userdata"><?php $sql = "SELECT * FROM `requestedblood`  where user_id='$_SESSION[user_id]'";
                                                $sqlfire = mysqli_query($con, $sql);
                                                $rows = mysqli_num_rows($sqlfire);
                                                echo $rows;
                                                ?></div>
                    </div>
                </a></div>
            <hr>
            <div class="userInfo"><a>
                    <div>Pending Request
                        <hr>
                        <div class="userdata"><?php $query = "SELECT * FROM `requestedblood`  where action='pending' and  user_id='$_SESSION[user_id]'";
                                                $queryfire = mysqli_query($con, $query);
                                                $rows = mysqli_num_rows($queryfire);
                                                echo $rows;
                                                ?></div>
                    </div>
                </a></div>
            <hr>
            <div class="userInfo"><a>
                    <div>Approved Request
                        <hr>
                        <div class="userdata"><?php $query = "SELECT * FROM `requestedblood`  where action='approved' and  user_id='$_SESSION[user_id]'";
                                                $queryfire = mysqli_query($con, $query);
                                                $rows = mysqli_num_rows($queryfire);
                                                echo $rows;
                                                ?></div>
                    </div>
                </a></div>
            <hr>
            <div class="userInfo"><a>
                    <div>Rejected Request
                        <hr>
                        <div class="userdata"><?php $query = "SELECT * FROM `requestedblood`  where action='declined' and  user_id='$_SESSION[user_id]'";
                                                $queryfire = mysqli_query($con, $query);
                                                $rows = mysqli_num_rows($queryfire);
                                                echo $rows;
                                                ?></div>
                    </div>
                </a></div>
        </div>
    </div><?php ?></div><?php require_once("template/leftcontainer.php");
                        ?></div><?php //require_once("../Admin/template/footer.php");