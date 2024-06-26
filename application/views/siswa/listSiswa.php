<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-2">
                                <h1 class="card-title">Data Siswa</h1>
                            </div>
                            <div class="col-10">
                                <?php if ($this->session->flashdata('error_message')): ?>
                                <div class="alert alert-danger text-center" role="alert">
                                    <?= $this->session->flashdata('error_message') ?>
                                </div>
                                <?php endif; ?>
                                <?php if ($this->session->flashdata('flash_message')): ?>
                                <div class="alert alert-primary text-center" role="alert">
                                    <?= $this->session->flashdata('flash_message') ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="form-group">
                            <a type="button" href="<?= site_url("controllerSiswa/insert_siswa"); ?>"
                                class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah</a>
                        </div>
                        <div class="table-responsive">
                            <table id="mytable_siswa" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Asal Sekolah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<script src="<?= base_url('vendor') ?>/plugins/jquery/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
        return {
            "iStart": oSettings._iDisplayStart,
            "iEnd": oSettings.fnDisplayEnd(),
            "iLength": oSettings._iDisplayLength,
            "iTotal": oSettings.fnRecordsTotal(),
            "iFilteredTotal": oSettings.fnRecordsDisplay(),
            "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
            "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
        };
    };

    var t = $("#mytable_siswa").dataTable({
        "processing": true,
        "serverSide": true,
        "oLanguage": {
            sProcessing: "Loading. . ."
        },
        "ajax": {
            "url": "<?= site_url('controllerSiswa/json') ?>",
            "type": "POST"
        },
        "columns": [{
                "data": "nisn",
                "orderable": false,
                "className": "text-center"
            },
            {
                "data": "nisn"
            },
            {
                "data": "nama_lengkap"
            },
            {
                "data": "tanggal_lahir"
            },
            {
                "data": "jenis_kelamin"
            },
            {
                "data": "alamat"
            },
            {
                "data": "asal_sekolah"
            },
            {
                "data": "action",
                "orderable": false,
                "className": "text-center"
            }
        ],
        order: [
            [3, 'desc']
        ],
        rowCallback: function(row, data, iDisplayIndex) {
            var info = this.fnPagingInfo();
            var page = info.iPage;
            var length = info.iLength;
            var index = page * length + (iDisplayIndex + 1);
            $('td:eq(0)', row).html(index);
        }
    });
});
</script>

<script>
$('#buttonImport').click(function(e) {
    $('#importModal').modal('show');
})

$('#mytable_siswa').on('click', '.hapus', function(e) {

    event.preventDefault();
    const href = $(this).attr('href');
    var nama_siswa = $(this).data('nama_siswa');

    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data " + nama_siswa + " akan dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
});

$('#mytable_siswa').on('click', '.btn_atur_kelas', function(e) {
    $('#exampleModal').modal('show');
    var nama_siswa = $(this).data('siswa');
    var nis = $(this).data('nis');

    $('#nama_siswa').val(nama_siswa);
    $('#nis').val(nis);
});
</script>