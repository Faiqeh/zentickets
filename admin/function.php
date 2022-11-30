<?php

// SESSION
session_start();

// KONEKSI DATABASE
$c = mysqli_connect('localhost','root','','zentickets');



// =============== AUTENTIKASI ===============
// LOGIN
if(isset ($_POST['login'])){
    $admin_email = $_POST ['admin_email'];
    $admin_password = $_POST ['admin_password'];

    $select_admins = mysqli_query($c, "SELECT * FROM admins WHERE admin_email = '$admin_email' AND admin_password = '$admin_password'");
    $count = mysqli_num_rows($select_admins);

    if($count > 0){
        $_SESSION['log'] = 'True';
        echo '
            <script>
                alert("Berhasil login!");
                window.location.href="beranda/beranda.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Akun tidak ditemukan!");
                window.location.href="login.php";
            </script>
        ';
    };
}

// LOGOUT
if(isset ($_POST['logout'])){
    session_destroy();
    echo "<script>alert('Berhasil keluar!');document.location='../login.php'</script>";
}



// =============== PENGGUNA ===============
// CREATE PENGGUNA
if(isset ($_POST['user_create'])){
    $user_name = $_POST ['user_name'];
    $user_phone = $_POST ['user_phone'];
    $user_sex = $_POST ['user_sex'];
    $user_birth = $_POST ['user_birth'];
    $user_email = $_POST ['user_email'];
    $user_password = $_POST ['user_password'];

    $insert = mysqli_query($c, "INSERT INTO users (user_name, user_phone, user_sex, user_birth, user_email, user_password) VALUES ('$user_name', '$user_phone', '$user_sex', '$user_birth', '$user_email', '$user_password')");

    if($insert) {
        echo '
            <script>
                alert("Pengguna baru berhasil ditambahkan!");
                window.location.href="pengguna.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Pengguna baru gagal ditambahkan!");
                window.location.href="pengguna_create.php";
            </script>
        ';
    }
}

// EDIT PENGGUNA
if(isset ($_POST['user_edit'])){
    $user_id = $_POST ['user_id'];
    $user_name = $_POST ['user_name'];
    $user_phone = $_POST ['user_phone'];
    $user_sex = $_POST ['user_sex'];
    $user_birth = $_POST ['user_birth'];
    $user_email = $_POST ['user_email'];
    $user_password = $_POST ['user_password'];

    $edit = mysqli_query($c, "UPDATE users SET user_name='$user_name', user_phone='$user_phone', user_sex='$user_sex', user_birth='$user_birth', user_email='$user_email', user_password='$user_password' WHERE user_id='$user_id'");

    if($edit) {
        echo '
            <script>
                alert("Pengguna berhasil diubah!");
                window.location.href="pengguna.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Pengguna gagal diubah!");
                window.location.href="pengguna.php";
            </script>
        ';
    }
}

// DELETE PENGGUNA
if(isset($_POST['user_delete'])) {
    $user_id = $_POST ['user_id'];

    $delete = mysqli_query($c, "DELETE FROM users WHERE user_id='$user_id'");

    if($delete) {
        echo '
            <script>
                alert("Pengguna berhasil dihapus!");
                window.location.href="pengguna.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Pengguna gagal dihapus!");
                window.location.href="pengguna.php";
            </script>
        ';
    };
}



// =============== PESAWAT ===============
// CREATE PESAWAT
if(isset ($_POST['plane_create'])){
    $plane_no = $_POST ['plane_no'];
    $plane_reg = $_POST ['plane_reg'];
    $plane_comp = $_POST ['plane_comp'];
    $plane_type = $_POST ['plane_type'];

    $insert = mysqli_query($c, "INSERT INTO planes (plane_no, plane_reg, plane_comp, plane_type) VALUES ('$plane_no', '$plane_reg', '$plane_comp', '$plane_type')");

    if($insert) {
        echo '
            <script>
                alert("Pesawat baru berhasil ditambahkan!");
                window.location.href="pesawat.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Pesawat baru gagal ditambahkan!");
                window.location.href="Pesawat_create.php";
            </script>
        ';
    }
}

// EDIT PESAWAT
if(isset ($_POST['plane_edit'])){
    $plane_id = $_POST ['plane_id'];
    $plane_no = $_POST ['plane_no'];
    $plane_reg = $_POST ['plane_reg'];
    $plane_comp = $_POST ['plane_comp'];
    $plane_type = $_POST ['plane_type'];

    $edit = mysqli_query($c, "UPDATE planes SET plane_no='$plane_no', plane_reg='$plane_reg', plane_comp='$plane_comp', plane_type='$plane_type' WHERE plane_id='$plane_id'");

    if($edit) {
        echo '
            <script>
                alert("Pesawat berhasil diubah!");
                window.location.href="pesawat.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Pesawat gagal diubah!");
                window.location.href="pesawat.php";
            </script>
        ';
    }
}

// DELETE PESAWAT
if(isset($_POST['plane_delete'])) {
    $plane_id = $_POST ['plane_id'];

    $delete = mysqli_query($c, "DELETE FROM planes WHERE plane_id='$plane_id'");

    if($delete) {
        echo '
            <script>
                alert("Pesawat berhasil dihapus!");
                window.location.href="pesawat.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Pesawat gagal dihapus!");
                window.location.href="pesawat.php";
            </script>
        ';
    };
}



// =============== PENERBANGAN ===============
// CREATE PENERBANGAN
if(isset ($_POST['flight_create'])){
    $flight_no = $_POST ['flight_no'];
    $flight_plane = $_POST ['flight_plane'];
    $flight_arr = $_POST ['flight_arr'];
    $flight_dep = $_POST ['flight_dep'];
    $flight_gate = $_POST ['flight_gate'];
    $flight_takeoff = $_POST ['flight_takeoff'];
    $flight_landing = $_POST ['flight_landing'];
    $flight_price = $_POST ['flight_price'];
    $flight_class = $_POST ['flight_class'];
    

    $insert = mysqli_query($c, "INSERT INTO flights (flight_no, flight_plane, flight_arr, flight_dep, flight_gate, flight_takeoff, flight_landing, flight_price, flight_class) VALUES ('$flight_no', '$flight_plane', '$flight_arr', '$flight_dep', '$flight_gate', '$flight_takeoff', '$flight_landing', '$flight_price', '$flight_class')");

    if($insert) {
        echo '
            <script>
                alert("Penerbangan baru berhasil ditambahkan!");
                window.location.href="penerbangan.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Penerbangan baru gagal ditambahkan!");
                window.location.href="penerbangan_create.php";
            </script>
        ';
    }
}

// EDIT PENERBANGAN
if(isset ($_POST['flight_edit'])){
    $flight_id = $_POST ['flight_id'];
    $flight_no = $_POST ['flight_no'];
    $flight_plane = $_POST ['flight_plane'];
    $flight_arr = $_POST ['flight_arr'];
    $flight_dep = $_POST ['flight_dep'];
    $flight_gate = $_POST ['flight_gate'];
    $flight_takeoff = $_POST ['flight_takeoff'];
    $flight_landing = $_POST ['flight_landing'];
    $flight_price = $_POST ['flight_price'];
    $flight_class = $_POST ['flight_class'];

    $edit = mysqli_query($c, "UPDATE flights SET flight_no='$flight_no', flight_plane='$flight_plane', flight_arr='$flight_arr', flight_dep='$flight_dep', flight_gate='$flight_gate', flight_takeoff='$flight_takeoff', flight_landing='$flight_landing', flight_price='$flight_price', flight_class='$flight_class' WHERE flight_id='$flight_id'");

    if($edit) {
        echo '
            <script>
                alert("Penerbangan berhasil diubah!");
                window.location.href="penerbangan.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Penerbangan gagal diubah!");
                window.location.href="penerbangan.php";
            </script>
        ';
    }
}

// DELETE PENERBANGAN
if(isset($_POST['flight_delete'])) {
    $flight_id = $_POST ['flight_id'];

    $delete = mysqli_query($c, "DELETE FROM flights WHERE flight_id='$flight_id'");

    if($delete) {
        echo '
            <script>
                alert("Penerbangan berhasil dihapus!");
                window.location.href="penerbangan.php";
            </script>
        ';
    } else {
        echo '
            <script>
                alert("Penerbangan gagal dihapus!");
                window.location.href="penerbangan.php";
            </script>
        ';
    };
}

?>