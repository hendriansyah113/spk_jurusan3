<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Jurusan</title>
    <link rel="shortcut icon" href="<?= base_url('vendor/') ?>assetberanda/images/UMP.png" type="">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    th,
    td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }
    </style>
</head>

<body>
    <h1>Rekomendasi Jurusan</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Kode Jurusan</th>
                <th>Nilai S</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rekomendasi_jurusan as $rekomendasi) { ?>
            <tr>
                <td><?= $rekomendasi['jurusan'] ?></td>
                <td><?= $rekomendasi['s'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <div style="text-align: center; margin-top: 20px;">
        <a href="<?= site_url('ControllerBeranda/formAnalisis') ?>">
            <button style="padding: 10px 20px; font-size: 16px;">Kembali ke Form</button>
        </a>
    </div>
</body>

</html>