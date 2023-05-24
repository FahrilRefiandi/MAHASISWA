<?php
include "hubung.php";
session_start();


// error_reporting(0);
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];//flag
$no_telp = $_POST["no_telp"];//flag
$prodi = $_POST["prodi"];
$sex = $_POST["sex"]; //flag
$fakultas = $_POST["fakultas"];

$hobi = $_POST["hobi"];

//upload gambar dulu
$namafile="";

    $namafile=$_FILES['foto']['name'];
    $tmpname = $_FILES['foto']['tmp_name'];
    // $size = $_FILES['foto']['size'];
    move_uploaded_file($tmpname, 'image/'.$namafile);
$path = "image/".$namafile;
//hobi
$kumhobi = implode(",", $hobi);

// upload ke database

$kueri = "INSERT INTO mahasiswa VALUES ('$nim','$nama','$alamat','$no_telp','$kumhobi','$prodi','$fakultas', '$sex', '$path' )";
if (mysqli_query($koneksi,$kueri))
{
    header("location: index.php");
}
else{
    echo "Error: " . $kueri . "<br>" . mysqli_error($koneksi);
}
// echo "nama".$nim;
// echo " nama". $nama;
// echo " alamat".$alamat;
// echo " telp".$no_telp;
// echo " prodi".$prodi;
// echo " fak".$fakultas;
// echo " jekamin".$sex;
// echo " file".$path;
// for ($i=0; $i< count($hobi);$i++)
// {
//     echo $hobi[$i];
// }


