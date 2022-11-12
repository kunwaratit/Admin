<div class="signin-container">
    <form action="process_login.php" method="POST">
        User Id<br> <input type="text" name="entered_id" placeholder="UserId /phone num /email">
        <br>password<br><input type="password" name="entered_pass" placeholder="Password"><br>
        <p> <input type="submit" value="Log in"> <a href="../signup/signup.php"><input type="button" class="signup"
                    value="Sign up"></a></p>

    </form>
</div>


<style>
    .signin-container {
        border: 1px solid black;
        width: fit-content;
        padding: 10px;
        display: flex;
        margin: auto;
        background: #d61b1b;
        color: aliceblue;
        border-radius: 5px;

    }


    input[type=text],
    input[type=password] {
        width: 15rem;
        padding: 12px 20px;
        margin: 8px 0px;
        display: inline-block;
        border-radius: 5px;
        border: none;

    }

    input[type=submit],
    .signup {
        border-radius: 5px;

        color: #d61b1b;
        padding: 14px 20px;
        margin: 8px 0px;
        border: none;
        cursor: pointer;


    }

    input[type=submit]:hover {
        opacity: 0.5;

    }
</style>