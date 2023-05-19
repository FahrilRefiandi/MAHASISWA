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


    <!-- program phpnya -->
    <?php
    if (isset($_GET["nama"])) {
        $nama = $_GET["nama"];
    }
    include "hubung.php";
    $kueri = mysqli_query($koneksi, "SELECT * FROM mahasiswa where nama ='$nama'");
    $d = mysqli_fetch_array($kueri);
    ?>


    <!-- content -->
    <div class="container mt-5">

        <div class="card">
            <div class="card-body">

                <img src=" <?php echo $d["foto"]; ?>" width="200" height="200" class="rounded-circle mx-auto d-block shadow-lg" alt="...">

                <table class="table mt-5">

                    <tbody>
                        <tr>
                            <td>Nim</td>
                            <td><?php echo $d["nim"]; ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><?php echo $d["nama"]; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?php echo $d["alamat"]; ?></td>
                        </tr>
                        <tr>
                            <td>No Tlpn</td>
                            <td><?php echo $d["no_telp"]; ?></td>
                        </tr>
                        <tr>
                            <td>Hobi</td>
                            <td><?php echo $d["hobi"]; ?></td>
                        </tr>
                        <tr>
                            <td>Prodi</td>
                            <td><?php echo $d["prodi"]; ?></td>
                        </tr>
                        <tr>
                            <td>Fakultas</td>
                            <td><?php echo $d["fakultas"]; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><?php echo $d["sex"]; ?></td>
                        </tr>
                    </tbody>
                </table>

                <div class="row" pt-5>

                    <div class="col">
                        <a href="index.php" class="btn btn-primary" role="button"> kembali</a>
                    </div>
                </div>

            </div>




        </div>
    </div>
    </div>
    <!-- content -->



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