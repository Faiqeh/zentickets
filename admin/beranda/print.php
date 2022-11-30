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
            table, th, td {
                border: 1px solid black;
            }
        </style>
    </head>

    <body>
        <?php
            require '../function.php';

            $select_flights = mysqli_query($c, "SELECT * FROM flights JOIN planes ON planes.plane_id=flights.flight_plane ORDER BY flight_takeoff ASC");
        ?>

        <h2 class="text-center fw-bold mb-3">Data Penerbangan</h2>

        <table>
            <tr>
                <th>No. Penerbangan</th>
                <th>No. Pesawat</th>
                <th>Gate</th>
                <th>Keberangkatan</th>
                <th>Tujuan</th>
                <th>Take Off</th>
                <th>Landing</th>
                <th>Kelas</th>
                <th>Harga</th>
            </tr>

            <?php foreach($select_flights as $data): ?>
            <tr>
                <td><?=$data['flight_no'];?></td>
                <td><?=$data['plane_no'];?></td>
                <td><?=$data['flight_gate'];?></td>
                <td><?=$data['flight_arr'];?></td>
                <td><?=$data['flight_dep'];?></td>
                <td><?=$data['flight_takeoff'];?></td>
                <td><?=$data['flight_landing'];?></td>
                <td><?=$data['flight_class'];?></td>
                <td><?=$data['flight_price'];?></td>
            </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>

<?php
    require '../../assets/mpdf/vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8',
        'format' => 'A4',
        'margin_top' => 25,
        'margin_left' => 25,
        'margin_right' => 25
    ]);

    $html = ob_get_contents();

    ob_end_clean();
    $mpdf->WriteHTML(utf8_encode($html));

    $content = $mpdf->Output("jadwalpenerbangan.pdf", "D");
?>