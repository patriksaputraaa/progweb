<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles\style.css">
</head>

<body>
    <?php
    $prodi = array("Kedokteran", "Teologi", "Informatika", "Sistem Informasi", "Akuntansi", "Manajemen");
    $fav = array("ABD", "ASD", "DDP", "APB", "PBW");
    ?>
    <header>
        <h1>Registrasi Mahasiswa</h1>
    </header>
    <main>
        <article>
            <h3>Silahkan isi bagian registrasi di bawah ini</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Viverra mauris in aliquam sem fringilla ut morbi tincidunt augue. Nunc sed augue
                lacus viverra vitae congue. Ut diam quam nulla porttitor massa id neque aliquam. Condimentum vitae
                sapien pellentesque habitant morbi tristique senectus. Elementum sagittis vitae et leo duis ut diam. In
                dictum non consectetur a. Sed blandit libero volutpat sed. In nisl nisi scelerisque eu ultrices. Urna et
                pharetra pharetra massa massa ultricies. Ac ut consequat semper viverra nam libero. Turpis tincidunt id
                aliquet risus feugiat in. Quis eleifend quam adipiscing vitae proin.
            </p>
        </article>
        <form method="post" action="program.php">
            <caption>Data Mahasiswa</caption>
            <table border="0.1px">
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="nim"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" size="30"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="gender" value="Pria" checked>Pria
                        <input type="radio" name="gender" value="Wanita">Wanita
                    </td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>
                        <div class="dropdown-prodi">
                            <?php
                            echo "<select name=\"prodi\">";
                            foreach($prodi as $prd){
                                echo "<option value=\"$prd\">$prd</option>";
                            }
                            echo "</select>"
                            ?>
                            <!-- <select name="prodi">
                                <option value="Kedokteran">Kedokteran</option>
                                <option value="Teologi">Teologi</option>
                                <option value="Informatika">Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Akuntansi">Akuntansi</option>
                                <option value="Manajemen">Manajemen</option>
                            </select> -->
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Mata Kuliah Favorit</td>
                    <td>
                        <?php
                        foreach($fav as $listmatkul){
                            echo "<input type=\"checkbox\" name=\"matkul[]\" value=\"$listmatkul\"> $listmatkul";
                        }
                        ?>
                        <!-- <input type="checkbox" name="matkul[]" value="DDP"> DDP
                        <input type="checkbox" name="matkul[]" value="ASD"> ASD
                        <input type="checkbox" name="matkul[]" value="ABD"> ABD
                        <input type="checkbox" name="matkul[]" value="PBW"> PBW
                        <input type="checkbox" name="matkul[]" value="APB"> APB -->
                    </td>
                </tr>
                <tr align="center">
                    <td colspan="2"><input type="submit" value="Submit"><input type="reset" value="Reset"></td>
                </tr>

            </table>
        </form>
    </main>
    <footer>
        <p class="copyright">Copyright Patrik Kurniawan Saputra - 2024</p>
    </footer>
</body>

</html>