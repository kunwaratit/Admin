<style>
    .signup-container {

        background: #d61b1b;
        color: aliceblue;
        border-radius: 5px;

    }


    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0px;
        display: inline-block;
        border-radius: 5px;
        border: none;

    }

    input[type=submit],
    input[type=email] {
        border-radius: 5px;
        background-color: ;
        color: #d61b1b;
        padding: 14px 20px;
        margin: 8px 0px;
        border: none;
        cursor: pointer;
        width: 100%;

    }
</style>





<div class="signup-container"
    style="border:1px solid black ; width:fit-content; padding: 10px; display:flex;margin:auto">
    <form action="process_signup.php" method="POST">
        Full Name<br>
        <input type="text" placeholder="FirstName" name="firstname" required>
        <input type="text" name="lastname" placeholder="Last name" name="" id="" required><br>
        Password<br>
        <input type="password" name="password" placeholder="Password" required><br>
        Email<br>
        <input type="email" name="email" style="color: black;" placeholder="Email"><br>

        Address<br>
        <input type="text" name="address" placeholder="District"><br>
        <label for="male"></label> male<input type="radio" value="male" name="sex" id="1">
        female<input type="radio" name="sex" value="female" id="2"><br>

        Phone No<br>
        <input type="text" name="phoneno" placeholder="Phone Number" required>Blood Group
        <select name="bloodGroup" required>
            <option value="O-">O-</option>
            <option value="O+">O+</option>
            <option value="A-">A-</option>
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="AB-">AB-</option>
            <option value="AB+">AB+</option>

        </select><br>
        Profile
        <input type="file" name="profile" id=""><br>
        Cover<input type="file" name="cover" id=""><br>
        <input class="submit" type="submit" value="Sign up" name="submit">
        <style>

        </style>
    </form>
</div>