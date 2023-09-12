<?php

require 'functions.php';

 $id= $_GET["id"];
 echo mysqli_error($conn);
var_dump($id);
if(hapus($id) > 0 ){
    //echo mysqli_error($conn)
    echo "<script>
            alert('data berhasil dihapus!');
            document.location.href='index.php';
            </script>";
} else {
    //echo mysqli_error($conn)
    echo "<script>
            alert('data berhasil dihapus!');
            document.location.href='index.php';
            </script>";
}


?>