<?php $this->load->view('admin/header') ?>
<link rel="stylesheet" href="<?= base_url('/assets/lib/bootstrap-table/bootstrap-table.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('/assets/lib/bootstrap-validator/bootstrapValidator.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('/assets/lib/bootstrap-select/bootstrap-select.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('/assets/lib/toast/toast.min.css') ?>">
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="showback">
                    <h3><i class="fa fa-angle-right"></i> Form Data Petugas</h3>
                    <div class="col text-right" id="toolbar">
                        <button class="btn btn-sm btn-warning" onclick="setModalTambah()">
                            <div>
                                <i class="fa fa-plus-circle"></i>
                                <span>Tambah Data</span>
                            </div>
                        </button>
                    </div>
                    <div class="adv-table">
                        <table class="table align-items-center table-flush" id="myTable" data-url='<?= $TBL_URL; ?>' data-toggle="table" data-toolbar="#toolbar" data-pagination="true" data-search="true" data-unique-id="username">
                            <thead class="bg-warning">
                                <tr>
                                    <th data-field="no" data-formatter="indexFormatter" class="font-14 text-center">#</th>
                                    <th data-field="foto" data-formatter="fotoFormatter" class="text-center">Foto</th>
                                    <th data-field="username" class="text-center">Username</th>
                                    <th data-field="nama">Nama</th>
                                    <th data-field="data.jenis_kelamin" class="text-center">Jenis Kelamin</th>
                                    <th data-field="data.alamat" class="text-center">Alamat</th>
                                    <th data-field="data.telp" class="text-center">Nomor Telpon</th>
                                    <th data-field="aksi" data-formatter="aksiFormatter" data-events="window.aksiEvents" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /row -->

            <!-- Modal -->
            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Form</h4>
                        </div>
                        <div class="modal-body">
                            <form id="myForm" onsubmit="return false">
                                <input type="hidden" id="defaultUsername">
                                <div class="form-group row">
                                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="username" placeholder="Username" data-bv-notempty="true" data-bv-notempty-message="Username tidak boleh kosong">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password" data-bv-notempty="true" data-bv-notempty-message="Password tidak boleh kosong">
                                        <span id="passwordInfo"><i class="fa fa-info-circle"></i> Kosongkan password jika tidak ingin diganti</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama" data-bv-notempty="true" data-bv-notempty-message="Nama tidak boleh kosong">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <select name="jenis_kelamin" class="form-control selectpicker" data-bv-notempty="true" data-bv-notempty-message="Jenis kelamin belum dipilih">
                                            <option value="" selected disabled>- Pilih Jenis Kelamin -</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="alamat" placeholder="Alamat" data-bv-notempty="true" data-bv-notempty-message="Alamat tidak boleh kosong"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="telp" class="col-sm-3 col-form-label">Nomor Telpon</label>
                                    <div class="col-sm-9">
                                        <input type="telp" class="form-control" name="telp" placeholder="Nomor Telpon" data-bv-notempty="true" data-bv-notempty-message="Nomor Telpon tidak boleh kosong">
                                    </div>
                                </div>

                                <div class="col text-right">
                                    <button id="submitBtn" type="submit" class="btn btn-warning">
                                        <div>
                                            <i class="fa fa-save"></i>
                                            <span>Simpan</span>
                                        </div>
                                    </button>
                                    <button class="btn btn-danger" data-dismiss="modal">
                                        <div>
                                            <i class="fa fa-window-close"></i>
                                            <span>Batal</span>
                                        </div>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

    </section>
</section>
<!--main content end-->
<?php $this->load->view('admin/footer') ?>
<script src="<?= base_url('/assets/lib/bootstrap-table/bootstrap-table.min.js') ?>"></script>
<script src="<?= base_url('/assets/lib/bootstrap-table/bootstrap-table-id-ID.js') ?>"></script>
<script src="<?= base_url('/assets/lib/bootstrap-validator/bootstrapValidator.min.js') ?>"></script>
<script src="<?= base_url('/assets/lib/bootstrap-validator/id_ID.js') ?>"></script>
<script src="<?= base_url('/assets/lib/bootstrap-select/bootstrap-select.min.js'); ?>"></script>
<script src="<?= base_url('/assets/lib/bootstrap-select/defaults-id_ID.min.js'); ?>"></script>
<script src="<?= base_url('/assets/lib/toast/toast.min.js') ?>"></script>
<script src="<?= base_url('/assets/lib/moment/moment.min.js') ?>"></script>
<script src="<?= base_url('/assets/lib/moment/id.js') ?>"></script>

<script>
    let $table = $('#myTable')
    let $form = $('#myForm')
    let $modal = $('#myModal')

    $(document).ready(() => {
        $form.bootstrapValidator()
    })

    $('#submitBtn').on('click', function() {
        $form.data('bootstrapValidator').validate();

        const hasErr = $form.find(".has-error").length;
        if (hasErr > 0) return

        const data = $form.serializeObject()

        const aksi = $(this).text();

        switch (aksi) {
            case ' Simpan':
                $.ajax(`<?= base_url('api/petugas') ?>`, {
                    method: 'post',
                    data
                }).then(res => {
                    notifikasi(res.error, res.message)
                    if (res.error) return
                    $modal.modal('toggle');
                    $table.bootstrapTable('append', res.data);
                })
                break;
            case ' Update':
                data['where'] = $('#defaultUsername').val()
                $.ajax(`<?= base_url('api/updatePetugas') ?>`, {
                    method: 'post',
                    data
                }).then(res => {
                    notifikasi(res.error, res.message)

                    if (res.error) return
                    $modal.modal('toggle');
                    $table.bootstrapTable('updateByUniqueId', {
                        id: data['where'],
                        row: res.data
                    });
                })
                break;
        }
    })

    const notifikasi = (error, msg) => {
        if (error) {
            toastr.error(msg, 'Informasi', {
                timeOut: 1000
            })
            return
        }
        toastr.success(msg, 'Informasi', {
            timeOut: 1000
        })
    }

    const setModalTambah = () => {
        $form.bootstrapValidator('resetForm', true);
        $form.trigger("reset");

        $modal.modal();
        $('#myModalLabel').html("Form Tambah Petugas");

        $('#passwordInfo').hide()

        $form.data('bootstrapValidator').enableFieldValidators('password', true);

        $('.selectpicker').selectpicker('refresh');

        $('#submitBtn').html('<div><i class = "fa fa-save"></i><span> Simpan</span></div>');
    }

    indexFormatter = (val, row, index) => {
        return index + 1;
    }

    fotoFormatter = (val) => {
        const defaultFoto = `<?= base_url('/assets/img/male.png') ?>`
        const foto = val

        return `<img src="${foto ? foto : defaultFoto}" style="max-height:100px;">`
    }

    aksiFormatter = (val) => {
        return ["<button data-toggle='tooltip' title='Ubah' class='ubah btn btn-theme btn-sm'>",
            "<i class='fa fa-pencil'></i>",
            "</button>",
            "<button data-toggle='tooltip' title='Hapus' class='hapus btn btn-danger btn-sm'>",
            "<i class='fa fa-trash'></i>",
            "</button>"
        ].join(' ');
    }

    window.aksiEvents = {
        'click .ubah': (e, value, row) => {
            $form.bootstrapValidator('resetForm', true);
            $form.trigger("reset");

            $modal.modal();
            $('#myModalLabel').html("Form Ubah Data Petugas");

            $('#defaultUsername').val(row.username);
            $('input[name=username]').val(row.username);
            $('input[name=nama]').val(row.nama);
            $('select[name=jenis_kelamin]').selectpicker('val', row.data.jenis_kelamin);
            $('textarea[name=alamat]').val(row.data.alamat);
            $('input[name=telp]').val(row.data.telp);

            $('#passwordInfo').show()

            $form.data('bootstrapValidator').enableFieldValidators('password', false);

            $('#submitBtn').html('<div><i class = "fa fa-edit"></i><span> Update</span></div>');
        },
        'click .hapus': (e, value, row) => {
            toastr.options = {
                "preventDuplicates": true
            };
            toastr.info("<br /><button type='button' class='btn btn-info' value='yes'>Ya</button> <button type='button' class='btn btn-danger' value='no' >Tidak</button>", 'Anda yakin untuk menghapus data ini?', {
                allowHtml: true,
                onclick: (toast) => {
                    toastr.remove()

                    const aksi = toast.target.value

                    if (aksi == 'no') return

                    $.ajax(`<?= base_url('api/hapusPetugas') ?>`, {
                        method: 'post',
                        data: {
                            username: row.username
                        }
                    }).then(res => {
                        notifikasi(res.error, res.message)

                        if (res.error) return

                        $table.bootstrapTable('remove', {
                            field: 'username',
                            values: row.username
                        });
                    })
                }

            })
        }
    }
</script>
</body>

</html>