<?php

$conn = mysqli_connect("localhost","root","","db_perpus");

if( isset($_POST["submit"]) ){

    var_dump($_POST);

        $judul_buku = $_POST["judul_buku"]; 
        $pengarang_buku = $_POST["pengarang_buku"]; 
        $genre_buku = $_POST["genre_buku"]; 
        
        $query= "INSERT INTO tb_buku
                VALUES
                ('','$judul_buku','$pengarang_buku','$genre_buku')
            ";

        mysqli_query($conn,$query);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah data Buku</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class=container>
    <div class=main>
    <h1>Tambah Data Buku</h1>
    </div>
    <div class="body">
    <form method="post">
                <div class="judul">
                <label for="judul_buku">Judul Buku:</label>
                <input type="text" name="judul_buku" id="judul_buku" placeholder="masukkan judul buku">
                </div>
                <div class=pengarang>
                <label for="pengarang_buku">Pengarang Buku:</label>
                <input type="text" name="pengarang_buku" id="pengarang_buku"  placeholder="masukkan pengarang buku">
                </div>
                <div class="genre">
                <label for="genre_buku">Genre Buku: :</label>
                <select name="genre_buku">
                    <option nama="Genre" value="buku sastra">buku sastra</option>
                    <option nama="Genre" value="buku sejarah">buku sejarah</option>
                    <option nama="Genre" value="buku romance">buku romance</option>
                    <option nama="Genre" value="buku Sci-Fi">buku Sci-Fi</option>
                </select>
                </div>
                <div class="input">
                <input type="submit" name="submit" value="tambah">
                </div>
</br>
        </ul>       
        </div>
        </div>
</form>
</body>
</html>