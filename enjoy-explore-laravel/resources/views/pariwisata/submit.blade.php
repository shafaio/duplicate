<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo.svg" type="image/x-icon" />
    <title>Enjoy Explore</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark nav-pd">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">Enjoy Explore
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mr-3 fs-7">
                        <a class="nav-link" href="index.html">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-3 fs-7 active">
                        <a class="nav-link" href="#">Pariwisata</a>
                    </li>
                    <li class="nav-item mr-3 fs-7">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                </ul>
            </div>
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle bg-transparent border-none baybay" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                    <span><img src="img/logoProfile.svg" alt=""></span>
                </a>

                <div class="dropdown-menu border-radius-none" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" style="font-size: 14px;" href="#">
                        <span>
                            <img src="img/drop-down-profile.svg" alt="" class="my-auto pr-2"> 
                        </span> Profile
                    </a>
                    <a class="dropdown-item my-2" style="font-size: 14px;" href="#">
                        <span>
                            <img src="img/drop-down-edit-profile.svg" alt="" class="my-auto pr-2"> 
                        </span> Edit Profile
                    </a>
                    <a class="dropdown-item" style="font-size: 14px;" href="#">
                        <span>
                            <img src="img/drop-down-logout.svg" alt="" class="my-auto pr-2"> 
                        </span> Keluar
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <section>
        <div class="jumbotron jumbotron-fluid" style="background-image: url(img/background-profile.png); background-repeat: no-repeat; background-size: cover; height: 400px;">
        </div>
    </section>

    <section>
        <div class="container my-3">
            <div class="row">
                <div class="col-4 pr-5">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active " aria-current="true">Informasi Pariwisata</a>
                        <a href="#upload" class="list-group-item list-group-item-action">Lokasi Pariwisata</a>
                        <a href="#" class="list-group-item list-group-item-action">Fasilitas Pariwisata</a>
                        <a href="#" class="list-group-item list-group-item-action">Data Diri</a>
                        <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a>
                    </div>
                </div>
                <div class="col-8 pl-5">
                    <div class="row mb-5">
                        <h6 class="m-0 fw-bold">Informasi Pariwisata</h6>
                    </div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <label for="">Nama</label>
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <input type="text" class="form-control border-radius-none h-40 fs-14px baybay" id="inputName" aria-describedby="emailHelp" placeholder="Nama">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <label for="">*****</label>
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <input type="text" class="form-control border-radius-none h-40 fs-14px baybay" id="inputName" aria-describedby="emailHelp" placeholder="Username">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <label for="">Deskripsi</label>
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <div class="form-group pb-2">
                                    <textarea class="form-control border-radius-none" id="exampleFormControlTextarea1" rows="3" placeholder="Deskripsi"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <h6 class="m-0 fw-bold">Lokasi Pariwisata</h6>
                    </div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <label for="">Nama</label>
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <input type="text" class="form-control border-radius-none h-40 fs-14px baybay" id="inputName" aria-describedby="emailHelp" placeholder="Nama">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <label for="">*****</label>
                        </div>
                        <div class="col-9">
                            <select id="disabledSelect" class="form-select border-radius-none baybay h-40">
                                <option>--Kecamatan--</option>
                                <option>Opp</option>
                                <option>App</option>
                            </select>
                        </div>
                    </div>


                    <div class="row mb-5">
                        <h6 class="m-0 fw-bold">Fasilitas</h6>
                    </div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <label for="">Nama</label>
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <input type="text" class="form-control border-radius-none h-40 fs-14px baybay" id="inputName" aria-describedby="emailHelp" placeholder="Nama">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <label for="">*****</label>
                        </div>
                        <div class="col-9">
                            <div class="form-group">
                                <input type="text" class="form-control border-radius-none h-40 fs-14px baybay" id="inputName" aria-describedby="emailHelp" placeholder="Username">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <label for="">Deskripsi</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control border-radius-none fs-14px baybay" type="file" id="formFile" accept="image/jpg, image/jpeg, image/png">
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <input type="text" class="form-control border-radius-none h-40 fs-14px baybay" id="inputName" aria-describedby="emailHelp" placeholder="Nama">
                    </div>
                    <div class="form-group pb-2">
                        <textarea class="form-control border-radius-none" id="exampleFormControlTextarea1" rows="3" placeholder="Deskripsi"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Kecamatan</label>
                        <select id="disabledSelect" class="form-select border-radius-none baybay h-40">
                            <option>--Kecamatan--</option>
                            <option>Opp</option>
                            <option>App</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control border-radius-none h-40 fs-14px baybay" id="inputName" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                    </div>
                    <h5 id="upload">Upload Submision*</h5>
                    <h6>Enter Data</h6>
                    <h6>Title*</h6>
                    <h6>Abstract*</h6> -->
                    <button type="submit" class="btn btn-primary btn-block border-radius-none border-none h-40 fs-14px" style="background-color: #C37B52;;">Submit</button>
                </div>
            </div>
        </div>
    </section>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
    <!-- Bootsrap 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js " integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous "></script>

    <script>
        $('.carousel').carousel()
        $('.carousel').carousel({
            interval: 0
        })

        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 200);
        });

        $(window).scroll(function() {
            $('a').toggleClass('scrolled', $(this).scrollTop() > 200);
        });

        $(window).scroll(function() {
            $('button').toggleClass('scrolled', $(this).scrollTop() > 200);
        });
    </script>
</body>

</html>