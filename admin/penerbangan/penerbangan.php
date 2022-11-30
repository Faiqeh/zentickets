<?php
    require '../function.php';
    
    // CEK SESSION
	if(isset($_SESSION['log'])){

	} else {
		header('location:../login.php');
	};
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ZenTickets</title>
        <link rel="icon" type="image/x-icon" href="../../assets/img/utility/zentickets4.png">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">

        <style>
            .sidebar {
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                z-index: 100;
                padding: 90px 0 0;
                box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
                z-index: 99;
            }
                
            .navbar {
                box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .1);
            }

            @media (min-width: 767.98px) {
                .navbar {
                    top: 0;
                    position: sticky;
                    z-index: 999;
                }
            }

            .sidebar .nav-link {
                color: #333;
            }

            .sidebar .nav-link.active {
                color: #0d6efd;
            }
        </style>
    </head>
    <body>
        <!-- NAVBAR -->
        <nav class="navbar navbar-light bg-light p-3">
            <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
                <a class="navbar-brand" href="#">
                    Admin Panel
                </a>
                <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="col-12 col-md-4 col-lg-2">
                <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search">
            </div>
            <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
                <form method="post">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                        Selamat Datang, Faiqi
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><button type="submit" class="dropdown-item" name="logout">Sign out</button></li>
                        </ul>
                    </div>
                </form>
            </div>
        </nav>
        
        <!-- BODY -->
        <div class="container-fluid">
            <div class="row"></div>
                <!-- SIDEBAR -->
                <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="../beranda/beranda.php">
                                    <i class="fa-solid fa-house"></i>
                                    <span class="ml-2">Beranda</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="../pengguna/pengguna.php">
                                    <i class="fa-solid fa-user"></i>
                                    <span class="ml-2">Pengguna</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="../pesawat/pesawat.php">
                                    <i class="fa-solid fa-plane"></i>
                                    <span class="ml-2">Pesawat</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="penerbangan.php">
                                    <i class="fa-solid fa-plane-departure"></i>
                                    <span class="ml-2">Penerbangan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- CONTENTS -->
                <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../beranda/beranda.php">Admin Panel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Penerbangan</li>
                    </ol>
                    
                    <h1 class="h2">Daftar Penerbangan</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>

                    <div class="row">
                        <div class="col-12 col-xl-12 mb-4 mb-lg-0">
                            <div class="card">
                                <div class="card-body">
                                    <a href="penerbangan_create.php" class="btn btn-sm btn-primary mb-3">Tambah Penerbangan</a>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">No. Penerbangan</th>
                                                    <th scope="col">No. Pesawat</th>
                                                    <th scope="col">Gate</th>
                                                    <th scope="col">Keberangkatan</th>
                                                    <th scope="col">Tujuan</th>
                                                    <th scope="col">Take Off</th>
                                                    <th scope="col">Landing</th>
                                                    <th scope="col">Kelas</th>
                                                    <th scope="col">Harga</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                    $select_flights = mysqli_query($c, "SELECT * FROM flights INNER JOIN planes ON planes.plane_id=flights.flight_plane ORDER BY flight_takeoff ASC");
                                                    $i = 1;
                                                    while($data = mysqli_fetch_array($select_flights)){
                                                        $flight_id = $data ['flight_id'];
                                                        $flight_no = $data ['flight_no'];
                                                        $flight_plane = $data ['flight_plane'];
                                                        $flight_arr = $data ['flight_arr'];
                                                        $flight_dep = $data ['flight_dep'];
                                                        $flight_gate = $data ['flight_gate'];
                                                        $flight_takeoff = $data ['flight_takeoff'];
                                                        $flight_landing = $data ['flight_landing'];
                                                        $flight_price = $data ['flight_price'];
                                                        $flight_class = $data ['flight_class'];
                                                        $plane_no = $data ['plane_no'];
                                                ?>

                                                <tr>
                                                    <th scope="row"><?=$i++;?></th>
                                                    <td><?=$flight_no;?></td>
                                                    <td><?=$plane_no;?></td>
                                                    <td><?=$flight_gate;?></td>
                                                    <td><?=$flight_arr;?></td>
                                                    <td><?=$flight_dep;?></td>
                                                    <td><?=$flight_takeoff;?></td>
                                                    <td><?=$flight_landing;?></td>
                                                    <td><?=$flight_class;?></td>
                                                    <td><?=$flight_price;?></td>
                                                    <td>
                                                        <form method="post">
                                                            <a href="penerbangan_read.php?id=<?=$flight_id;?>" class="btn btn-sm btn-primary mb-1">Lihat</a>
                                                            <br>
                                                            <a href="penerbangan_edit.php?id=<?=$flight_id;?>" class="btn btn-sm btn-primary mb-1">Edit</a>
                                                            <br>
                                                            <input type="hidden" name="flight_id" value="<?=$flight_id;?>">
                                                            <button type="submit" class="btn btn-sm btn-primary" name="flight_delete">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>

                                                <?php
                                                    };
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <footer class="pt-5 d-flex justify-content-between">
                        <span>Copyright © 2022 <a href="#">ZenTickets</a></span>
                        <ul class="nav m-0">
                            <li class="nav-item">
                                <a class="nav-link text-secondary" href="#">Hubungi Kami</a>
                            </li>
                        </ul>
                    </footer>
                </main>
            </div>
        </div>

        <!-- SCRIPTS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    </body>
</html>