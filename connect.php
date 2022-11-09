<?php
$con = mysqli_connect("localhost", "root", "");
$conne = mysqli_select_db($con, "blooddonationmanagementsystem");
?><style>
* {
    color: azure;
    font-family: cursive;

}

body {
    counter-reset: Serial;
}

.row {
    width: 250px;
}

input {
    background-color: #003a4d;
}

.form input[type="text"] {
    background-color: #2b2a33;

}

body {
    background-color: black;
}

table th {
    font-size: 17px;

}

table th,
table td {}

table td {
    font-size: 14px;
}

.tables {
    margin: 2px 5px;

    background-color: #c10000;
    border-radius: 10px;

}

.dashtable {
    border-collapse: collapse;
    margin: 13px 0px;
    font-size: 0.9em;
    text-align: left;
    box-shadow: 0 0 15px rgb(37, 77, 50);
    overflow: hidden;
    border-radius: 8px 8px 0 0;

    word-wrap: break-word;
    width: 100%;
    overflow-wrap: break-word;
    table-layout: fixed;
}

.dashtable thead tr {
    border-top-left-radius: 5px;
    background-color: rgb(12, 158, 60);
    color: white;

}

.dashtable th,
.dashtable td {
    padding: 6px 6px;

}

.dashtable td {
    padding: 6px 3px;
    height: 47px;

}

.dashtable tr {
    border-bottom: 1px solid grey;
}

.dashtable tbody tr {
    background: #003a4d;
}



#status_approved {
    background-color: green;

}

#status_declined {
    background-color: red;
}

#status_pending {
    background-color: yellow;
}
</style>