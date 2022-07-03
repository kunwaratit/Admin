<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="search" name="" id="search" onkeyup="search()">
    <table id="table">
        <tr>
            <td>Atit</td>
            <td>It</td>
            <td>kunwar</td>
        </tr>
        <tr>
            <td>sagar</td>
            <td>it</td>
            <td>nemkul</td>

        </tr>
        <tr>
            <td>utsav</td>
            <td>it</td>
            <td>maharjan</td>
        </tr>
    </table>
    <script>
const search = ()=>{
    let filter=document.getElementById('search');
    let table=document.getElementById('table');
    let tr=table.getElementsByTagName('tr');
    for (var i = 0; i < tr.length; i++) {
        let td=tr[i].getElementsByTagName('td')[0];
        if()
    }

}
    </script>
</body>

</html>