<?php

include "hubung.php";

if (isset($_POST['save'])) {
    
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

    $kumhobi = implode(",", $hobi);

//     echo "nim".$nim;
// echo " nama". $nama;
// echo " alamat".$alamat;
// echo " telp".$no_telp;
// echo " prodi".$prodi;
// echo " fak".$fakultas;
// echo " jekamin".$sex;
// echo " file".$path;

//     echo $kumhobi;
    // $sql = ;


    if (mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', alamat = '$alamat' , no_telp= '$no_telp', hobi = '$kumhobi', prodi= '$prodi', fakultas = '$fakultas', sex ='$sex',foto = '$path' WHERE nim = '$nim'"))
    {
        // header("Location:index.php");
       echo" <script>
       alert('Success');
                window.location.href = 'index.php'
                
                </script>";
        
    }
    else
    echo "Error updating record: " . mysqli_error($koneksi);
}
?>