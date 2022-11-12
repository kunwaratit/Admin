</div>

<div class="left-content"
    style="margin-top:-1px;border-radius:12px; display: flex; flex-direction: column; align-items: center; background: #d61b1b; height:fit-content;">
    <?php
    if ((!isset($_SESSION['loggedin'])) || ($_SESSION['loggedin'] == false)) {
        echo "<style> .user-status-wrapper{
        display:none;    
    } </style> ";
        
    } else {
        echo "<style> .login-wrapper{
            display:none;    
        } </style> ";
    }
    ?>


    <div class="left-content-items" id="" style="padding:0px 10px ;width:max-content;">

        <div class="user-status-wrapper" id="user_status">
            <?php

            $query = "SELECT * FROM `userprofile`where user_id='$_SESSION[user_id]'";
            $queryfire = mysqli_query($con, $query);

            $num = mysqli_num_rows($queryfire);
            if ($num > 0) {
                while ($user = mysqli_fetch_array($queryfire)) {
            ?>

            <div class="user-cover" style="text-align:center;margin:0px 0px 60px 0px;">
                <div style="height:150px;background-color: azure;"><img src=" <?php echo $user['coverPhoto']; ?>"
                        alt="Cover" style="height:150px;border-radius:10px;">
                </div>
                <div class="user-image" style="height:150px; position:absolute; margin:-88px 0px 0px 50px;">
                    <img src="<?php echo $user['profilePhoto'] ?>"
                        style="background-color: azure;height:150px;width:150px; border-radius:100%; border:3px solid #d61b1b;">
                </div>
            </div>
            <?php }
            } ?>
            <div style="line-height:1.4;  color:#d6f09d;font-weight: 600;">
                <input type="button" value="edit profile" name="profile">
                <div style="text-align:center;">

                    <?php
                    echo  $_SESSION['username'];
                    ?>
                    <div style=" color:bisque;font-size: 14px;">UserId-
                        <?php
                        echo $_SESSION['user_id'];
                        ?>
                    </div>
                </div>
                <hr style="color:white ;">
                <div style="color:bisque;">
                    <?php
                    echo $_SESSION['address'];

                    ?>
                </div>
                <div style="color:bisque;"><a href='tel:<?php
                                                        echo $_SESSION[' phone'] ?>' style="color:white ;">
                        <?php
                        echo $_SESSION['phone']; ?>
                    </a>
                </div>
                <div>Donated: <span>25 sept,2020</span></div>
                <div>Status:Active</div>


            </div>

            <button><a href="./template/logout.php" style="background-color:rgb(255, 255, 255); color:#d61b1b">Log
                    Out</a></button>
        </div>

        <div>

            <div class="login-wrapper">

                <div class="signup-container" style="width:fit-content; padding: 10px; display:flex;">
                    <form action="../Admin/login/process_login.php" method="POST">
                        <h2 style="text-align:center; text-decoration: underline;"> Login Form</h2>
                        <span class="log"> UserId- </span><br>
                        <input type="text" name="entered_id" placeholder="UserId" title="userid/number/email">
                        <br><span class="log"> Password</span><br>
                        <input type="password" name="entered_pass" placeholder="Password" title="password"><br><br>
                        <input class="submit b1" type="submit" value="Log in"
                            style="width: 45%; margin-right:5%; background:white;color:red; "><a
                            href="../Admin/signup/signup.php"><input class="submit" type="button" value="Signup"
                                style="width: 45%; background:white;color:red;"></a>
                    </form>
                    <style>
                        .b1:hover {
                            background: rgb(136, 135, 135) important;
                        }
                    </style>
                    <style>

                    </style>
                </div>
            </div>

        </div>
    </div>
</div>