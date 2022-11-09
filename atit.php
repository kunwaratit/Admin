<html lang="en">

<head>
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
    const search = () => {
        let filter = document.getElementById('search').value.toUpperCase();
        let table = document.getElementById('table');

        let tr = document.getElementsByTagName('tr');

        for (var i = 0; i < tr.length; i++) {
            let match = tr[i].getElementsByTagName('td')[0];
            if (match) {

                let textval = match.textContent || match.innerHTML

                if (textval.toUpperCase().indexOf(search) > -1) {
                    tr[i].style.display = ""
                } else {
                    tr[i].style.display = "none"

                }
            }

        }
    }
    </script>
</body>

</html>