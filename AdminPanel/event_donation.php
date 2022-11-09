<?php
require_once("../connect.php");
require_once("./admintemplate/admincentral.php");
require_once("../leftnavitemsn.php"); ?>
<style>
    tr td:first-child::before {
        counter-increment: Serial;
        content: "  "counter(Serial)".";
    }
</style>
<div class="tables">
    <h1>Approval</h1>
    <table class="dashtable">
        <tr>
            <thead>
                <th style="width:47px;">S.N</th>
                <th>Event Name</th>
                <th style="width:90px;">Photo</th>
                <th>Group</th>
                <th>Unit</th>
                <th>Address</th>
                <th style="width:125px; ">Contact No.</th>
                <th colspan=" 2">Action</th>
            </thead>
        </tr>
        <tr>
            <td>1.</td>
            <td>Atit Kunwar</td>
            <td>atit.jpg</td>
            <td>O+</td>
            <td>1200cubic.</td>
            <td>Kathmandu</td>
            <td>9842555570</td>
            <td>accept</td>
            <td>decline</td>
        </tr>


    </table>
</div>