<?php
    require 'function.php';

    // CEK SESSION
	if(!isset($_SESSION['log'])){

	} else {
		header('location:beranda/beranda.php');
	};
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ZenTickets</title>
        <link rel="icon" type="image/x-icon" href="../assets/img/utility/zentickets4.png">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

        <style>
            .f-blue1 {
                background-color: #00549c;
            }

            .f-lightgray{
                background-color: #f9f9f9;
            }

            .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
            }
        </style>
    </head>

    <body class="f-blue1">
        <!-- CONTENTS -->
        <div class="container ">
            <div class="row">
                <div class="col-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5 f-lightgray">
                        <div class="card-body p-4 p-sm-5">
                            <div class="m-auto text-center">
                                <img class="m-auto rounded-circle mb-4" src="../assets/img/utility/zentickets3.png" style="width:120px">
                            </div>
                            
                            <form method="post">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="admin_email" required>
                                    <label for="floatingInput">Alamat Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="admin_password" required>
                                    <label for="floatingPassword">Kata Sandi</label>
                                </div>
                                <div class="d-grid mb-4">
                                    <button class="btn btn-primary btn-login text-uppercase fw-bold f-blue1" type="submit" name="login">Masuk</button>
                                </div>
                                <div class="text-center">
                                    <p style="color:#00549c">Belum terdaftar? <a href="#" class="fw-bold">Buat Akun</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- SCRIPTS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
    </body>
</html>