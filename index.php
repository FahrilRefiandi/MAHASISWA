<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

    <title>Daftar Mahasiswa</title>
</head>

<body>




    <?php
    include "hubung.php";
    $hasil = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
    ?>
    <?php

    $no = 1;
    if ($hasil === false) {
        echo "data gaagl";
    } ?>




    <!-- content -->
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h4>Daftar Mahasiswa</h4>


                <ol class="list-group list-group-numbered mt-3">
                    <?php
                    while ($d = $hasil->fetch_array()) { ?>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <a href="detail.php?nama=<?= $d['nama'] ?>" class="ms-2 me-auto text-decoration-none text-dark">
                                <div class="fw-bold"> <?= $d['nama'] ?> </div>
                            </a>
                            <span class="badge">
                                <form action="" method="post">
                                    <a class="btn btn-primary" href="edit.php?nim=<?= $d['nim'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a class="btn btn-danger"  href="hapus.php?nama=<?= $d['nama']; ?>"onclick="return confirm('Anda yakin data <?= $d['nama'] ?> akan dihapus ?')" name="delete" value="" type="submit"><i class="fa-solid fa-trash-can"></i></a>
                                </form>
                            </span>
                        </li>
                    <?php } ?>

                </ol>







                <div class="d-grid gap-2 mt-5">
                    <a class="btn btn-primary" href="tambahdata.php" role="button">Tambah Data</a>
                </div>



            </div>
        </div>
    </div>
    <!-- content -->

    <?php
    
    if(isset($_POST['delete'])){
        $nim = $_POST['delete'];
        $hasil = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim = '$nim'");
        if($hasil){
            echo "<script>window.location.href = '/MAHASISWA/daftarmahasiswa.php'</script>";
        }else{
            echo "<script>alert('Data gagal dihapus')</script>";
            echo "<script>window.location.href = '/MAHASISWA/daftarmahasiswa.php'</script>";
        }
    }

    ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>