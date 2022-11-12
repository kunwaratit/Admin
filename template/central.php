<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <script src="https://kit.fontawesome.com/79f985b384.js" crossorigin="anonymous"></script>
    <title>BlooD</title>



</head>

<body>

    <div class="body">
        <div class="nav">
            <ul class="navi" style="height:3.2em;">

                <li><a href="dashboard.php"><img src="./Beige Pink Simple Professional Facebook Profile Picture.png" alt="" srcset="" height=100px style="height:50px; border-radius:50%;">Blood For Nepal</a>
                </li>
                <li>
                    <!--  <marquee direction="" bgcolor="#d61b1b" scrolldelay=99 style="color: white;width:40em;">
                        <pre
                            style="padding-top: 28px;"> One Blood Donation can Save up to Three Lives            sd</pre>
                    </marquee>-->
                </li>

            </ul>
            <hr>
            <ul class=" navimenu" style="height: 51.9px;">

                <a href="../Admin/dashboard.php">
                    <li>Home</li>
                </a> <a href="../Admin/contact.php">
                    <li>Contact</li>
                </a> <a href="http://">
                    <li>Aboout Us</li>
                </a>
                <a href="http://">
                    <li>What we did?<i class="bi bi-megaphone-fill"></i></li>
                </a>
                <?php
                if ((!isset($_SESSION['loggedin'])) || ($_SESSION['loggedin'] == false)) {
                    echo "<a href='../Admin/login/login.php' '><li>Login";
                } else {
                    echo "  <a href='../Admin/template/logout.php' ><li>Log out";
                } ?></li>
                </a>
                <script>


                </script>
        </div>
        </ul>
        <hr>

    </div>

    <style>
        .maincontent {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
        }

        body {
            background-color: #d5d5d5;
        }

        .right-content h1 {
            color: #143e6a;
        }

        * {
            font-family: cursive;
        }

        .navimenu a li {

            padding: 10px;
            font-size: 24px;
        }

        .navimenu a li:hover {
            background-color: #ff6a56;
        }

        .navimenu a li:active {
            background-color: #ff6a56;
        }

        .navi li a {
            text-decoration: none;
            color: #ffffff;
            font-size: 32px;
            line-height: 0.9;
            letter-spacing: 3.46px;
            font-weight: 700;
        }



        .navimenu a {
            text-decoration: none;
            color: #ffffff;
            font-size: 32px;
            line-height: 1.3;


        }

        .navimenu {
            display: flex;
            justify-content: end;

        }
    </style>
    <div>

        <div class=" main-content">

            <style>
                .main-content {
                    margin: 0vw 6vw;



                }

                * {
                    margin: 0px;
                    padding: 0px;
                    font-size: 20px;
                    letter-spacing: 0.5px;
                    box-sizing: border-box;
                    font-family: sans-serif;
                    text-decoration: none;

                }

                /*
.body {
background: url(./web\ background.png)
}*/



                .navi {

                    background: #d61b1b;
                    padding: 8px;


                }

                .navimenu {
                    background: #d61b1b;
                }

                li {
                    list-style-type: none;
                }

                .navi li,
                .navimenu li {
                    /*  margin: 5px;*/
                    float: left;
                }


                /*left container*/
                .main-content {
                    display: flex;

                }

                .left-content {
                    margin: 0px;
                    padding: 0px;
                }

                .left-content-items {
                    display: block;
                }

                .left-content-items li {
                    border-bottom: 2px solid #ff6a56;
                    padding: 0.75rem 4rem;
                }

                .left-content-items a {
                    text-decoration: underline 1.5px #00506a;
                    color: #ffffff;
                }

                .left-content-items a li:hover {
                    background-color: #ff6a56;
                }

                .right-content {
                    color: #00506a;
                }

                .countbloods {
                    text-align: center;
                }

                .wrapper {
                    display: flex;


                }


                .wrap {

                    margin-right: 0.1rem;

                    width: 160px;
                }

                .available-bloods,
                .donateblood,
                .reqblood,
                .bloodbank {
                    cursor: context-menu;

                    border-top-right-radius: 20px;

                }

                .available-bloods,
                .donateblood,
                .reqblood,
                .bloodbank,
                .details {

                    max-width: 880rem;
                    padding: 0.5rem;
                }

                .wrap a {
                    color: white;
                    text-decoration: underline;
                }

                .details {
                    background-color: rgba(90, 94, 85, 0.778);
                    padding: 0.5rem;
                    background-color: #002534;
                    border-top-right-radius: 0px;


                }

                .available-bloods {
                    background-color: #bf5600;
                }

                .donateblood {
                    background-color: #EB0000;
                }

                .reqblood {
                    background-color: #098800;

                }

                .bloodbank {
                    background-color: #00506a;
                }

                .dashboard {
                    padding: 0.75rem 1rem 1rem 0rem;
                }

                h1 {
                    font-size: 2rem;
                }

                .submit {
                    padding: 3px;
                    background-color: #00ae0f;
                    border-radius: 8px;
                }

                .edit {
                    background-color: rgb(26, 136, 209);
                    font-size: medium;
                    color: #ffffff;

                }

                .delete {
                    background-color: #ff0000;
                    font-size: medium;
                    color: #ffffff;

                }

                @media (max-width:684px) {
                    .navimenu {
                        display: none;
                    }

                    .navi li {
                        margin-left: 2em;
                    }
                }



                @media (max-width:464px) {
                    .navi li {
                        font-size: 10px;
                    }
                }

                @media (max-width:392px) {
                    .navi li a {
                        font-size: 25px;
                    }
                }
            </style>