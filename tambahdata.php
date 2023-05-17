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
        <div class="container-fluid">
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


    <!-- content -->
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3">Tambah Data</h4>
                <form action="" method="post">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="nim" name="nim" placeholder="1203210093">
                        <label for="nim">Nim</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Fahril Refiandi">
                        <label for="nama">Nama</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Alamat" id="alamat"></textarea>
                        <label for="alamat">Alamat</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="noTlpn" name="noTlpn" placeholder="0821*******" minlength="11" maxlength="12">
                        <label for="noTlpn">No Tlpn</label>
                    </div>

                    <div class="form-floating mb-3 mt-2">
                        <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Informatika">
                        <label for="nama">Prodi</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Jenis kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <label for="floatingSelect">Jenis kelamin</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" id="foto" name="foto" placeholder="foto">
                        <label for="nama">Foto</label>
                    </div>

                    <label for="" class="mb-1"> Hobi : </label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Memancing" id="memeancing" name="hobi">
                        <label class="form-check-label" for="flexCheckDefault">
                            Memancing
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Berenang" id="berenang" name="hobi">
                        <label class="form-check-label" for="flexCheckDefault">
                            Berenang
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Bersepedah" id="bersepedah" name="hobi">
                        <label class="form-check-label" for="flexCheckDefault">
                            Bersepedah
                        </label>
                    </div>


                    <label for="" class="mb-1"> Fakultas : </label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="fakultas" id="fakultas1" value="FTIB">
                        <label class="form-check-label" for="fakultas1">
                            FTIB
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="fakultas" id="fakultas2" value="FTIC">
                        <label class="form-check-label" for="fakultas2">
                            FTIC
                        </label>
                    </div>

                    


                    <div class="d-grid gap-2 mt-5">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>



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