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
        <label for="male"></label> male<input type="radio" name="male" id="1">
        female<input type="radio" name="femlae" id="2"><br>
        Date of birth<br>
        <input type="date" name="DateOfBirth"> Age<input type="text" name="age" placeholder="Age"><br>
        Phone No<br>
        <input type="text" name="phoneno" placeholder="Phnone Number">Blood Group
        <select name="bloodGroup">
            <option value="">A+</option>
        </select><br>
        Weight
        <input type="number" name="weight">
        Profile<br>
        <input type="file" name="profile" id=""><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</div>