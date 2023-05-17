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

    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Daftar Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Data User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- header -->
<!-- program phpnya -->
<?php
if (isset($_GET["nama"]))
{
    $nama = $_GET["nama"];
}
include "hubung.php";
$kueri = mysqli_query($koneksi, "SELECT * FROM mahasiswa where nama ='$nama'");
$d = mysqli_fetch_array($kueri);
?>


    <!-- content -->
    <div class="container mt-6 pt-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 text-center">data <?php echo $d["nama"];?></h4>

                    <div class="row">
                        <div class="col">nim:</div>
                        <div class="col"> <?php echo $d["nim"];?></div>
                    </div> 
                   
              
                    <div class="row">
                        <div class="col text-left">nama:</div>
                        <div class="col"> <?php echo $d["nama"];?></div>
                    </div> 
                   
                    <div class="row">
                        <div class="col">alamat:</div>
                        <div class="col"> <?php echo $d["alamat"];?></div>
                    </div> 
                   
                    <div class="row">
                        <div class="col">no telpon:</div>
                        <div class="col"> <?php echo $d["no_telp"];?></div>
                    </div> 
                   
                    <div class="row">
                        <div class="col">hobi:</div>
                        <div class="col"> <?php echo $d["hobi"];?></div>
                    </div> 
                   
                    <div class="row">
                        <div class="col">prodi:</div>
                        <div class="col"> <?php echo $d["prodi"];?></div>
                    </div> 
                   
                    <div class="row">
                        <div class="col">fakultas:</div>
                        <div class="col"> <?php echo $d["fakultas"];?></div>
                    </div> 
                   
                    <div class="row">
                        <div class="col">jenis kelamin:</div>
                        <div class="col"> <?php echo $d["sex"];?></div>
                    </div> 
                   
                    <div class="row">
                        <div class="col">foto:</div>
                        <div class="col"><img src=" <?php echo $d["foto"];?>" style="width:100px;"></div>
                    </div> 

                    <div class="row" pt-5>
                        
                             <div class="col">
                                <a href="daftarmahasiswa.php" class="btn btn-primary" role="button"> kembali</a>
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