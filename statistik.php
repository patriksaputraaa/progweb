<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    if(!isset($_GET["bil"])){
        $_SESSION["cacah"] = 0;
        $_SESSION["jum"] = 0;
        $_SESSION["max"] = 0;
        $_SESSION["min"] = 0;
        $_SESSION["rerata"] = 0;
    }else{
        $_SESSION["cacah"]++;
        if($_SESSION["cacah"]==1){
            $_SESSION["min"] = $_GET["bil"];
        }
        $_SESSION["jum"] += $_GET["bil"];
        if($_GET["bil"] > $_SESSION["max"]){
            $_SESSION["max"] = $_GET["bil"];
        }
        if($_GET["bil"] < $_SESSION["min"]){
            $_SESSION["min"] = $_GET["bil"];
        }
        $_SESSION["rerata"] = $_SESSION["jum"]/$_SESSION["cacah"];
    }

    ?>
    <form action="">
        <table border="1" width="300px" align="center">
            <caption>Statistik</caption>
            <tr>
                <td>Masukkan Data</td>
                <td><input type="text" name="bil" size="3"></td>
            </tr>
            <tr>
                <td>Banyak Data</td>
                <td><?= $_SESSION["cacah"] ?></td>
            </tr>
            <tr>
                <td>Jumlah Data</td>
                <td><?= $_SESSION["jum"] ?></td>
            </tr>
            <tr>
                <td>Data Terbesar</td>
                <td><?= $_SESSION["max"] ?></td>
            </tr>
            <tr>
                <td>Data Terkecil</td>
                <td><?= $_SESSION["min"] ?></td>
            </tr>
            <tr>
                <td>Rerata</td>
                <td><?= $_SESSION["rerata"] ?></td>
            </tr>
            <tr>
                <th colspan="2"><input type="submit" value="Submit"> <input type="reset" value="Reset"></th>
            </tr>
        </table>
    </form>
</body>

</html>