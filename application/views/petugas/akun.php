<?php $this->load->view('petugas/header') ?>
<link rel="stylesheet" href="<?= base_url('/assets/lib/bootstrap-validator/bootstrapValidator.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('/assets/lib/bootstrap-select/bootstrap-select.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('/assets/lib/toast/toast.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('/assets/lib/fileInput/css/fileinput.min.css') ?>">

<style>
    .kv-avatar .krajee-default.file-preview-frame,
    .kv-avatar .krajee-default.file-preview-frame:hover {
        margin: 0;
        padding: 0;
        border: none;
        box-shadow: none;
        text-align: center;
    }

    .kv-avatar {
        display: inline-block;
    }

    .kv-avatar .file-input {
        display: table-cell;
        width: 213px;
    }

    .kv-reqd {
        color: red;
        font-family: monospace;
        font-weight: normal;
    }
</style>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-panel">
                    <h3><i class="fa fa-angle-right"></i> Form Data Akun</h3>

                    <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>
                    <form id="myForm" class="form form-vertical" onsubmit="return false">
                        <div class="row">
                            <div class="col-sm-4 text-center">
                                <div class="kv-avatar">
                                    <div class="file-loading">
                                        <input id="foto" type="file">
                                    </div>
                                </div>
                                <div class="kv-avatar-hint">
                                    <small>Pilih file < 300 KB</small> 
                                </div> 
                            </div> 
                            <div class="col-sm-8">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="username">Username<span class="kv-reqd">*</span></label>
                                                        <input type="username" class="form-control" name="username" value="<?= $this->username ?>" data-bv-notempty="true" data-bv-notempty-message="Username tidak boleh kosong">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="password">Password<span class="kv-reqd">*</span></label>
                                                        <input type="password" class="form-control" name="password">
                                                        <span id="passwordInfo"><i class="fa fa-info-circle"></i> Kosongkan password jika tidak ingin diganti</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="nama">Nama<span class="kv-reqd">*</span></label>
                                                        <input type="nama" class="form-control" name="nama" value="<?= $this->nama ?>" data-bv-notempty="true" data-bv-notempty-message="Nama tidak boleh kosong">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="jenis_kelamin">Jenis Kelamin<span class="kv-reqd">*</span></label>
                                                        <select name="jenis_kelamin" class="form-control selectpicker" data-bv-notempty="true" data-bv-notempty-message="Jenis kelamin belum dipilih">
                                                            <option value="" selected disabled>- Pilih Jenis Kelamin -</option>
                                                            <option value="Laki-laki">Laki-laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="alamat">Alamat<span class="kv-reqd">*</span></label>
                                                        <textarea class="form-control" name="alamat" data-bv-notempty="true" data-bv-notempty-message="Alamat tidak boleh kosong"><?= $data->alamat ?> </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="telp">Nomor Telpon<span class="kv-reqd">*</span></label>
                                                        <input type="telp" class="form-control" name="telp" value="<?= $data->telp ?>" placeholder="Nomor Telpon" data-bv-notempty="true" data-bv-notempty-message="Nomor Telpon tidak boleh kosong">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <hr>
                                                <div class="text-right">
                                                    <button type="submit" id="submitBtn" class="btn btn-warning"><i class="fa fa-save"></i> Simpan</button>
                                                </div>
                                            </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <!-- /row -->

    </section>
</section>
<!--main content end-->
<?php $this->load->view('petugas/footer') ?>
<script src="<?= base_url('/assets/lib/bootstrap-validator/bootstrapValidator.min.js') ?>"></script>
<script src="<?= base_url('/assets/lib/bootstrap-validator/id_ID.js') ?>"></script>
<script src="<?= base_url('/assets/lib/bootstrap-select/bootstrap-select.min.js'); ?>"></script>
<script src="<?= base_url('/assets/lib/bootstrap-select/defaults-id_ID.min.js'); ?>"></script>
<script src="<?= base_url('/assets/lib/toast/toast.min.js') ?>"></script>
<script src="<?= base_url('/assets/lib/fileInput/js/fileinput.min.js') ?>"></script>
<script src="<?= base_url('/assets/lib/fileInput/js/locales/id.js') ?>"></script>

<script type="text/javascript">
    let $form = $('#myForm')

    $(document).ready(() => {
        $form.bootstrapValidator()
        $('select[name=jenis_kelamin]').selectpicker('val', `<?= $data->jenis_kelamin ?>`);
    })


    $('#submitBtn').on('click', async function() {
        $form.data('bootstrapValidator').validate();

        const hasErr = $form.find(".has-error").length;
        if (hasErr > 0) return

        toastr.options = {
            "preventDuplicates": true
        };
        toastr.info("<br /><button type='button' class='btn btn-info' value='yes'>Ya</button> <button type='button' class='btn btn-danger' value='no' >Tidak</button>", `Data akan diubah?`, {
            allowHtml: true,
            onclick: async (toast) => {
                toastr.remove()

                const aksi = toast.target.value

                if (aksi == 'no') return


                const data = $form.serializeObject()
                data['where'] = '<?= $this->username ?>'

                const file = document.querySelector('#foto').files[0];

                if (file) {
                    data['file'] = await toBase64(file)
                }

                $.ajax('<?= base_url('api/updatePetugas') ?>', {
                    method: 'post',
                    data
                }).then(res => {
                    if (res.error) {
                        toastr.error(res.message, 'Informasi', {
                            timeOut: 1000
                        })

                        return
                    }
                    toastr.success(res.message, 'Informasi', {
                        timeOut: 1000
                    })

                    setTimeout(() => {
                        location.reload()
                    }, 1000);
                })
            }
        })
    })

    const toBase64 = file => new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => resolve(reader.result);
        reader.onerror = error => reject(error);
    });
</script>


<!-- the fileinput plugin initialization -->
<script>
    const defaultFoto = `<?= base_url('/assets/img/male.png') ?>`
    const foto = `<?= $foto ?>`

    $("#foto").fileinput({
        language: 'id',
        overwriteInitial: true,
        maxFileSize: 300,
        showClose: false,
        showCaption: false,
        showBrowse: false,
        browseOnZoneClick: true,
        removeLabel: '',
        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
        removeTitle: 'Batal atau hapus perubahan',
        elErrorContainer: '#kv-avatar-errors-2',
        msgErrorClass: 'alert alert-block alert-danger',
        defaultPreviewContent: `<img src="${foto ? foto : defaultFoto}" style="max-height:200px;"><h6 class="text-muted">Klik untuk mengupload foto</h6>`,
        layoutTemplates: {
            main2: '{preview} ' + ' {remove} {browse}'
        },
        allowedFileExtensions: ["jpg", "png", "jpeg"]
    });
</script>

</body>

</html>