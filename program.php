<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $nim = $_POST["nim"];
    // $nama = $_POST["nama"];
    // $gender = $_POST["gender"];
    // $prodi = $_POST["prodi"];
    // $matkul = 
    extract($_POST);
    echo ("NIM: $nim<br>");
    echo ("Nama: $nama<br>");
    echo ("Gender: $gender<br>");
    echo ("Program Studi: $nim<br>");
    echo ("Mata Kuliah Favorit anda:<br>");
    if (isset($listmatkul)) {
        if (is_array($listmatkul)) {
            foreach ($matkul as $listmatkul) {
                echo ("-> $listmatkul<br>");
            }
        }
    } else {
        echo ("<i>Anda tidak memilih matkul apapun<i>");
    }
    ?>
</body>

</html>