<div class="signup-container" style="border:1px solid black ; width:fit-content; padding: 10px; display:flex;margin:auto">
    <form action="process_signup.php" method="POST">
        Full Name<br>
        <input type="text" placeholder="FirstName" name="firstname">
        <input type="text" name="lastname" placeholder="last name" name="" id=""><br>
        Password<br>
        <input type="text" name="password"><br>
        Email<br>
        <input type="text" name="email"><br>
        Address<br>
        <input type="text" name="address" placeholder=" District"><br>
        <label for="male"></label> male<input type="radio" value="male" name="sex" id="1">
        female<input type="radio" name="sex" value="female" id="2"><br>

        Phone No<br>
        <input type="text" name="phoneno" placeholder="Phnone Number">Blood Group
        <select name="bloodGroup">
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
    </form>
</div>