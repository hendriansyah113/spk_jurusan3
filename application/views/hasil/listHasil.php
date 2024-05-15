<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-2">
                                <h1 class="card-title">Data Hasil</h1>
                            </div>
                            <div class="col-10">
                                <?php if ($this->session->flashdata('success')) : ?>
                                <div class="alert alert-primary text-center" role="alert">
                                    <?= $this->session->flashdata('success') ?>
                                </div>
                                <?php endif; ?>
                                <?php if ($this->session->flashdata('error')) : ?>
                                <div class="alert alert-danger text-center" role="alert">
                                    <?= $this->session->flashdata('error') ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form class="form-material form-horizontal" method="POST"
                            action="<?= site_url('ControllerHasil/prosesHitung') ?>" enctype="multipart/form-data">
                            <div class="col-md-12">
                                <div class="row">
                                    <label class="col-md-12" for="bdate">Pilih Siswa</span>
                                    </label>
                                    <div class="col">
                                        <select name="nisn" id="nisn" class="form-control" required>
                                            <option value="" disabled selected>--Pilih--</option>
                                            <?php foreach ($allSiswa as $value) { ?>
                                            <option value="<?= $value->nisn ?>"><?= $value->nama_lengkap ?></option>
                                            <?php } ?>
                                        </select>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 5px;">
                                <label for="">Nilai :</label>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2">
                                        Bahasa Indonesia
                                    </div>
                                    <div class="col-md-2">
                                        IPA
                                    </div>
                                    <div class="col-md-2">
                                        IPS
                                    </div>
                                    <div class="col-md-2">
                                        Penghasilan Sebulan
                                    </div>
                                    <div class="col-md-4">
                                        Jurusan Saat SMA/SMK/MA
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" name="bhs_indo" value="" required>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" name="ipa" value="" required>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" name="ips" value="" required>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" class="form-control" name="penghasilan" value="" required>
                                    </div>
                                    <select name="c5" class="form-control col-md-4">
                                        <option value="Agribisnis Perikanan Air Tawar">Agribisnis Perikanan Air
                                            Tawar
                                        </option>
                                        <option value="Agribisnis Tanaman Pangan dan Hortikultura">Agribisnis
                                            Tanaman
                                            Pangan dan Hortikultura
                                        </option>
                                        <option value="Agribisnis Tanaman Perkebunan">Agribisnis Tanaman Perkebunan
                                        </option>
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
                                        <option value="Pengembangan Perangkat Lunak dan GIM">Pengembangan Perangkat
                                            Lunak dan GIM</option>
                                        <option value="Perhotelan">Perhotelan</option>
                                        <option value="Teknik Elektronika">Teknik Elektronika</option>
                                        <option value="Teknik Ketenagalistrikan">Teknik Ketenagalistrikan</option>
                                        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan
                                        </option>
                                        <option value="Teknik Konstruksi dan Perumahan">Teknik Konstruksi dan
                                            Perumahan
                                        </option>
                                        <option value="Teknik Mesin">Teknik Mesin</option>
                                        <option value="Teknologi Farmasi">Teknologi Farmasi</option>
                                        <option value="Teknologi Laboratorium Medik">Teknologi Laboratorium Medik
                                        </option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top: 15px;">
                                <button type="submit" class="btn btn-primary">Hitung</button>
                            </div>
                    </div>
                </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Rekomendasi Jurusan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php if (!empty($rekomendasi_jurusan)) { ?>
                        <div class="table-responsive">
                            <table id="rekomendasiJurusan" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Jurusan</th>
                                        <th>Nilai S</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($rekomendasi_jurusan as $value) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value['jurusan'] ?></td>
                                        <td><?= $value['s'] ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <form method="POST" action="<?= site_url('ControllerHasil/simpanHitung') ?>"
                                enctype="multipart/form-data" id="form1">
                                <input type="hidden" name="nisn_hasil" value="<?= $nisn ?>">
                                <input type="hidden" name="jurusan"
                                    value="<?= $rekomendasi_jurusan[0]['kode_jurusan'] ?>">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Simpan
                                </button>
                            </form>
                        </div>

                        <?php } else { ?>
                        <div class="alert alert-warning">
                            Tidak ada rekomendasi jurusan yang dapat ditampilkan.
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?= base_url('vendor') ?>/plugins/jquery/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#rekomendasiJurusan').dataTable();
});
</script>