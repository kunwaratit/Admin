<div>
    <form action="process_bankdetails.php" method="post">
        BloodBankName <input type="text" name="bloodbankname">
        Contact<input type="text" name="contact">
        location<input type="text" name="location">
        website<input type="text" name="website">
        <input type="submit" value="submit">
    </form>
</div>
<div>
    <h1> Blood Banks and Contact</h1>
    <div class="tables">
        <table>
            <tr>
                <td>name</td>
                <td>location</td>
                <td>Contact</td>
                <td>Web(URL)</td>
            </tr>
            <?php
            require_once('../connect.php');
            $getbankquery = "SELECT *  FROM bloodbankdetails";
            $getbankqueryfire = mysqli_query($con, $getbankquery);
            $num = mysqli_num_rows($getbankqueryfire);
            if ($num > 0) {
                while ($bankinfo = mysqli_fetch_array($getbankqueryfire)) {
            ?>

                    <tr>
                        <td>
                            <?php echo $bankinfo['BloodbankName'] ?>

                        </td>
                        <td>
                            <?php echo $bankinfo['Location'] ?>
                        </td>
                        <td>

                            <?php echo $bankinfo['Contact'] ?>
                        </td>
                        <td>

                            <?php echo $bankinfo['website'] ?>
                        </td>
                    </tr>
            <?php }
            } ?>
        </table>
    </div>
</div>