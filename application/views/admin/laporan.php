<?php $this->load->view('admin/header') ?>
<link rel="stylesheet" href="<?= base_url('/assets/lib/bootstrap-validator/bootstrapValidator.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('/assets/lib/bootstrap-select/bootstrap-select.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('/assets/lib/toast/toast.min.css') ?>">
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="showback">
                    <h3><i class="fa fa-angle-right"></i> Form Laporan</h3>
                    <form id="laporanForm" class="mt">
                        <input type="hidden" name="id">
                        <div class="form-group row">
                            <label for="jenis_laporan" class="col-sm-3 col-form-label">Jenis Laporan</label>
                            <div class="col-sm-9">
                                <select name="jenis_laporan" id="jenis_laporan" class="selectpicker show-tick form-control" data-bv-notempty="true" data-bv-notempty-message="Jenis laporan belum dipilih" data-style="btn-outline-light" title=" - Pilih Jenis Laporan -">
                                    <option value="pengaduan">Daftar Pengaduan</option>
                                    <option value="pelanggan">Daftar Pelanggan</option>
                                    <option value="petugas">Daftar Petugas</option>
                                </select>
                            </div>
                        </div>
                        <button id="submitBtn" class="btn btn-theme col-md-12">
                            <div>
                                <i class="fa fa-print"></i>
                                <span>Cetak Laporan</span>
                            </div>
                        </button>
                    </form>

                    <br><br>
                </div>
            </div>
            <!-- /row -->

            <div class="modal fade" id="myCetak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Form Cetak</h4>
                        </div>
                        <div class="modal-body">
                            <div class="isi-laporan"></div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-theme" data-dismiss="modal">
                                <div>
                                    <i class="fa fa-window-close"></i>
                                    <span>Tutup</span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

    </section>
</section>
<!--main content end-->
<?php $this->load->view('admin/footer') ?>
<script src="<?= base_url('/assets/lib/bootstrap-validator/bootstrapValidator.min.js') ?>"></script>
<script src="<?= base_url('/assets/lib/bootstrap-validator/id_ID.js') ?>"></script>
<script src="<?= base_url('/assets/lib/bootstrap-select/bootstrap-select.min.js'); ?>"></script>
<script src="<?= base_url('/assets/lib/bootstrap-select/defaults-id_ID.min.js'); ?>"></script>
<script src="<?= base_url('/assets/lib/toast/toast.min.js') ?>"></script>

<script type="text/javascript">
    $form = $('#laporanForm')

    $form.bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'fa fa-exclamation-circle',
            validating: 'fa fa-spin fa-refresh'
        },
        excluded: ':disabled'
    })

    $form.submit((evt) => {
        evt.preventDefault();
    })

    $('#submitBtn').on('click', (evt) => {
        $form.data('bootstrapValidator').validate();

        const URL = '<?php echo base_url('laporan/') ?>';

        const hasErr = $form.find(".has-error").length;
        if (hasErr == 0) {
            const jenis = $('#jenis_laporan').val();

            cetakLaporan(URL + jenis);

        }
    })

    function cetakLaporan(URL) {
        const laporan = "<embed src='" + URL + "' frameborder='1' width='100%'' height='400px'>";

        $('#myCetak').modal();
        $('.isi-laporan').empty();
        $('.isi-laporan').append(laporan);
    }
</script>
</body>

</html>