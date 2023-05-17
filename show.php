<?php
include "hubung.php";
// session_start();
$hasil = mysqli_query($koneksi,"SELECT * FROM mahasiswa" );
$no =1;
if ($hasil === false)
{
    echo "data gaagl";
}

while($d =$hasil -> fetch_array()) {
   echo $no;
   echo $d["nama"];
   $no++;
}

?>

