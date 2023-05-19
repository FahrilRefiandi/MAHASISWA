<?php
$nama = "nama";
    include "hubung.php";
    if (isset($_GET["nama"])) {
        $nama = $_GET["nama"];
    }
   
    $kueri = mysqli_query($koneksi, "SELECT * FROM mahasiswa where nama ='$nama'");
    $d = mysqli_fetch_array($kueri);
        if ($d['foto'])
        {
            if(unlink($d['foto']))
            echo "unlink berhasill";
        }
           
        
        
   
   

    $kueri= "DELETE  FROM mahasiswa WHERE nama = '$nama' ";
    if  (mysqli_query($koneksi, $kueri))
    {
        
        header("location: index.php");
    }
    else{
        echo "Error: " . $kueri . "<br>" . mysqli_error($koneksi);
    }
?> 