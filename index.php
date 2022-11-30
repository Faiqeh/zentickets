<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ZenTickets</title>
        <link rel="icon" type="image/x-icon" href="assets/img/utility/zentickets4.png">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

        <style>
            .carousel-wrapper{
                height: 400px;
                /* background-color: #f9f9f9; */
            }

            .f-lightgray{
                background-color: #f9f9f9;
            }

            .f-blue1{
                color:#00549c;
            }

            .f-blue2{
                color:#4484BA;
            }
        </style>
    </head>

    <body class="f-lightgray">
        <?php
            require 'admin/function.php';

            $select_flights = mysqli_query($c, "SELECT * FROM flights JOIN planes ON planes.plane_id=flights.flight_plane ORDER BY flight_takeoff ASC");

            if(isset($_GET['filter_submit'])){
                $flight_arr = $_GET['flight_arr'];
                $flight_dep = $_GET['flight_dep'];
                $flight_class = $_GET['flight_class'];
                $flight_takeoff = $_GET['flight_takeoff'];

                $select_flights = mysqli_query($c, "SELECT * FROM flights JOIN planes ON planes.plane_id=flights.flight_plane WHERE flight_arr='$flight_arr' AND flight_dep='$flight_dep' AND flight_class='$flight_class' AND flight_takeoff LIKE '%$flight_takeoff%' ORDER BY flight_takeoff ASC");
            }

        ?>

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-light shadow">
            <div class="container">
                <img class="navbar-brand" src="assets/img/utility/zentickets.png" style="width:110px">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="" id="navbarSupportedContent">
                    <div class="me-auto">
                        <ul class="navbar-nav gap-4 mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link f-blue1 fw-bold" href="index.php">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link f-blue1" href="#">Voucher</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link f-blue1" href="#">Berita</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color:#00549c">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link f-blue-1" href="admin/login.php" style="color:#00549c">
                                    <i class="fa fa-user"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav> 
        
        <!-- CAROUSEL -->
        <div id="carouselExampleSlidesOnly" class="carousel slide mb-0" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-wrapper d-flex align-items-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <h1 class="fw-bold mb-0 f-blue1">ZENTICKETS</h1>
                                    <h2 class="fw-bold mb-0 f-blue2">SEMUA BISA TERBANG</h2>
                                    <p>Platform pembelian tiket pesawat yang murah dan terpercaya.</p>
                                    <div class="mt-4">
                                        <button class="btn me-3" style="background-color:#00549c; color:white; width:145px; height:40px;">PlayStore</button>
                                        <button class="btn btn-dark" style="width:145px; height:40px;">AppStore</button>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <img src="assets/img/utility/carousel.png" style="width: 200px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-0">
            <i class="fa-solid fa-angles-down" style="color:#00549c; width:30px; height:30px;"></i>
        </div>

        <!-- FILTER -->
        <form method="get">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-3">
                        <select class="form-select" name="flight_arr">
                            <option value="" selected disabled>Dari</option>
                            <option value="Tangerang">Tangerang</option>
                            <option value="Semarang">Semarang</option>
                            <option value="Surabaya">Surabaya</option>
                            <option value="Pekanbaru">Pekanbaru</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <select class="form-select" name="flight_dep">
                            <option value="" selected disabled>Ke</option>
                            <option value="Tangerang">Tangerang</option>
                            <option value="Semarang">Semarang</option>
                            <option value="Surabaya">Surabaya</option>
                            <option value="Pekanbaru">Pekanbaru</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <select class="form-select" name="flight_class">
                            <option value="" selected disabled>Kelas</option>
                            <option value="Economy">Economy</option>
                            <option value="Business">Business</option>
                            <option value="First Class">First Class</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <input type="date" class="form-control" id="floatingInput" placeholder="Tanggal Berangkat" name="flight_takeoff">
                    </div>
                    <div class="col-1">
                        <button class="btn" type="submit" name="filter_submit" style="background-color:#00549c; color:white; width:65px;">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <!-- CONTENTS -->
        <div class="container mt-5 mb-5">
            <?php foreach($select_flights as $data): ?>

            <div class="row rounded-5 d-flex align-items-center bg-white mb-3 shadow">
                <div class="col-4 my-4">
                    <div class="m-auto text-center">
                        <img class="m-auto rounded-circle" style="width: 80px; height:80px;" src="assets/img/airline/<?=strtolower(str_replace(' ', '',$data['plane_comp']));?>.png">
                    </div>
                    <div class="text-center">
                        <h5 class="mt-3 mb-1 f-blue1 fw-bold"><?=$data['plane_comp'];?></h5>
                        <p class="mt-0 mb-1 fs-6 fst-italic fw-semibold"><?=$data['flight_class'];?></p>
                        <h class="">[ <?=$data['plane_no'];?> | <?=$data['plane_reg'];?> | <?=$data['plane_type']?> ]</h>
                    </div>
                </div>
                <div class="col-4">
                    <div class="ms-5 d-flex align-items-center gap-5">
                        <div>
                            <p class="text-center fs-6 mb-0 fst-italic"><?=date("d M", strtotime($data['flight_takeoff']));?></p>
                            <h2 class="fw-bold text-center mb-1"><?=date("H:i", strtotime($data['flight_takeoff']));?></h2>
                            <p class="text-center fs-5"><?=$data['flight_arr'];?></p>
                        </div>
                        <div>
                            <i class="fa-solid fa-angles-right f-blue1" style="width:30px; height:30px;"></i>
                        </div>
                        <div>
                            <p class="text-center fs-6 mb-0 fst-italic"><?=date("d M", strtotime($data['flight_landing']));?></p>
                            <h2 class="fw-bold text-center mb-1"><?=date("H:i", strtotime($data['flight_landing']));?></h2>
                            <p class="text-center fs-5"><?=$data['flight_dep'];?></p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="text-end me-5">
                        <h2 class="f-blue1 fw-bold mb-0">IDR <?=number_format($data['flight_price']);?></h2>
                        <p>/pax</p>
                    </div>
                    <div class="text-end me-5">
                        <button class="btn mt-4" style="background-color:#00549c; color:white; width:150px;">Pilih</button>
                    </div>
                </div>
            </div>

            <?php endforeach ?>
        </div>

        <!-- FOOTER -->
        <footer class="bd-footer" style="background-color:#00549c; color: #f9f9f9;">
            <div class="container py-4 py-md-5 px-4 px-md-3">
                <div class="row mb-0">
                    <div class="col-lg-3 mb-3">
                        <img class="navbar-brand" src="assets/img/utility/zentickets2.png" style="width:110px">
                        <ul class="list-unstyled text-white">
                            <li class="mt-3">+62 800 9911 9911</li>
                            <li class="">Semarang, Indonesia</li>
                        </ul>
                    </div>
                    <div class="col-9">
                        <div class="row d-flex justify-content-end">
                            <div class="col-2">
                                <a class="nav-link text-white" href="#">Beranda</a>
                            </div>
                            <div class="col-2">
                                <a class="nav-link text-white" href="#">Voucher</a>
                            </div>
                            <div class="col-2">
                                <a class="nav-link text-white" href="#">Berita</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-0">
                    <p class="text-center text-white">© 2022 ZenTickets. All Rights Reserved</p>
                </div>
            </div>
        </footer>
        
        <!-- SCRIPTS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
    </body>
</html>