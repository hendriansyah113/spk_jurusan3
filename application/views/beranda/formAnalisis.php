<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Analisis</title>
    <!-- ... (kode head sebelumnya) ... -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="<?= base_url('vendor/') ?>assetberanda/images/UMP.png" type="">

    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 40px;
        text-align: center;
    }

    h1 {
        color: #333;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #333;
    }

    input,
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>
    <h1>Form Analisis</h1>

    <form method="POST" action="<?= site_url('ControllerBeranda/prosesAnalisis') ?>" class="needs-validation"
        novalidate>
        <div class="form-group">
            <label for="bhs_indo">Bahasa Indonesia:</label>
            <input type="text" name="bhs_indo" class="form-control" required>
            <div class="invalid-feedback">
                Harap isi kolom ini.
            </div>
        </div>
        <div class="form-group">
            <label for="ipa">IPA:</label>
            <input type="text" name="ipa" class="form-control" required>
            <div class="invalid-feedback">
                Harap isi kolom ini.
            </div>
        </div>

        <div class="form-group">
            <label for="ipa">IPS:</label>
            <input type="text" name="ips" class="form-control" required>
            <div class="invalid-feedback">
                Harap isi kolom ini.
            </div>
        </div>

        <div class="form-group">
            <label for="penghasilan">Penghasilan Perbulan:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp</span>
                </div>
                <input type="number" name="penghasilan" class="form-control" required max="6000000">
                <div class="invalid-feedback">
                    Harap isi kolom ini (maksimal 6 juta, Jika lebih cukup isi 6 juta).
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="c5">Jurusan saat SMA/MA/SMK:</label>
            <select name="c5" class="form-control" required>
                <option value="Agribisnis Perikanan Air Tawar">Agribisnis Perikanan Air Tawar</option>
                <option value="Agribisnis Tanaman Pangan dan Hortikultura">Agribisnis Tanaman Pangan dan Hortikultura
                </option>
                <option value="Agribisnis Tanaman Perkebunan">Agribisnis Tanaman Perkebunan</option>
                <option value="Akuntansi">Akuntansi</option>
                <option value="Bahasa">Bahasa</option>
                <option value="Bisnis Digital">Bisnis Digital</option>
                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                <option value="Geologi Pertambangan">Geologi Pertambangan</option>
                <option value="IPA">IPA</option>
                <option value="IPS">IPS</option>
                <option value="Keperawatan Hewan">Keperawatan Hewan</option>
                <option value="Manajemen Perkantoran">Manajemen Perkantoran</option>
                <option value="Multimedia">Multimedia</option>
                <option value="Pengembangan Perangkat Lunak dan GIM">Pengembangan Perangkat Lunak dan GIM</option>
                <option value="Perhotelan">Perhotelan</option>
                <option value="Teknik Elektronika">Teknik Elektronika</option>
                <option value="Teknik Ketenagalistrikan">Teknik Ketenagalistrikan</option>
                <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                <option value="Teknik Konstruksi dan Perumahan">Teknik Konstruksi dan Perumahan</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknologi Farmasi">Teknologi Farmasi</option>
                <option value="Teknologi Laboratorium Medik">Teknologi Laboratorium Medik</option>
                <option value="Lain-lain">Lain-lain</option>
            </select>
            <div class="invalid-feedback">
                Harap pilih salah satu opsi.
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <a href="<?= site_url('controllerBeranda') ?>" class="btn btn-primary btn-block">Kembali</a>
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary">Hitung Rekomendasi</button>
            </div>
        </div>
    </form>

    <!-- Bootstrap JS (ditempatkan sebelum penutup tag body) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script untuk menangani validasi formulir -->
    <script>
    (function() {
        'use strict';


        window.addEventListener('load', function() {
            var form = document.getElementsByClassName('needs-validation')[0];

            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            }, false);
        }, false);
    })();
    </script>
</body>

</html>