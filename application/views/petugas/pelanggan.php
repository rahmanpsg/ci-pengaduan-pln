<?php $this->load->view('petugas/header') ?>
<link rel="stylesheet" href="<?= base_url('/assets/lib/bootstrap-table/bootstrap-table.min.css') ?>">
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="showback">
                    <h3><i class="fa fa-angle-right"></i> Form Data Pelanggan</h3>
                    <div class="adv-table">
                        <table class="table align-items-center table-flush" id="myTable" data-url='<?= $TBL_URL; ?>' data-toggle="table" data-pagination="true" data-search="true" data-unique-id="id">
                            <thead class="bg-warning">
                                <tr>
                                    <th data-field="no" data-formatter="indexFormatter" class="font-14 text-center">#</th>
                                    <th data-field="id" class="text-center">ID</th>
                                    <th data-field="nama">Nama</th>
                                    <th data-field="jenis_kelamin" class="text-center">Jenis Kelamin</th>
                                    <th data-field="alamat">Alamat</th>
                                    <th data-field="telp" class="text-center">Nomor Telpon</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /row -->
    </section>
</section>
<!--main content end-->
<?php $this->load->view('petugas/footer') ?>
<script src="<?= base_url('/assets/lib/bootstrap-table/bootstrap-table.min.js') ?>"></script>
<script src="<?= base_url('/assets/lib/bootstrap-table/bootstrap-table-id-ID.js') ?>"></script>

<script>
    indexFormatter = (val, row, index) => {
        return index + 1;
    }
</script>
</body>

</html>