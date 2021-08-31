<?php $this->load->view('admin/header') ?>
<link rel="stylesheet" href="<?= base_url('/assets/lib/bootstrap-table/bootstrap-table.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('/assets/lib/bootstrap-validator/bootstrapValidator.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('/assets/lib/bootstrap-select/bootstrap-select.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('/assets/lib/toast/toast.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('/assets/lib/smartphoto/smartphoto.min.css') ?>">
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="showback">
                    <h3><i class="fa fa-angle-right"></i> Form Data Pengaduan</h3>

                    <div class="adv-table">
                        <table class="table align-items-center table-flush" id="myTable" data-url='<?= $TBL_URL; ?>' data-toggle="table" data-pagination="true" data-detail-view="true" data-detail-formatter="detailFormatter" data-search="true" data-unique-id="id">
                            <thead class="bg-warning">
                                <tr>
                                    <th data-field="no" data-formatter="indexFormatter" class="font-14 text-center">#</th>
                                    <th data-field="ditambahkan_pada" data-formatter="tanggalFormatter" data-sortable="true" class="text-center">Waktu Pengaduan</th>
                                    <th data-field="id">ID Pengaduan</th>
                                    <th data-field="nama" data-sortable="true">Nama Pengadu</th>
                                    <th data-field="telp">Nomor Telpon</th>
                                    <th data-field="lokasi.lokasi">Lokasi</th>
                                    <th data-field="pengaduan">Pengaduan</th>
                                    <th data-field="status" data-formatter="statusFormatter" data-sortable="true" class="text-center">Status</th>
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
<script src="<?= base_url('/assets/lib/smartphoto/smartphoto.min.js') ?>"></script>

<script>
    let $table = $('#myTable')

    $table.on('expand-row.bs.table', function(index, row, $detail) {
        new SmartPhoto(".js-smartPhoto", {
            showAnimation: false
        });
    })

    indexFormatter = (val, row, index) => {
        return index + 1;
    }

    tanggalFormatter = (val) => {
        return moment(val).format('HH:mm:ss DD/MM/YYYY')
    }

    statusFormatter = (val, row) => {
        switch (val) {
            case 'Belum dikonfirmasi':
                return `<span class="label label-default">${val}</span>`
                break;
            case 'Diterima & dalam pengerjaan':
                return `<span class="label label-warning">${val}</span>`
                break;
            case 'Selesai':
                return `<span class="label label-success">${val}</span>`
                break;
        }
    }

    detailFormatter = (index, row) => {
        const petugas = row.nama_petugas ? row.nama_petugas : '-'
        const _header = (ket, val) => `<h5><b>${ket} : ${val}</b></h5>`
        let html = [_header('ID Pelanggan', row.id_pelanggan), _header('Nama Pelanggan', row.nama_pelanggan), _header('Petugas yang mengerjakan', petugas)];

        if (row.status == 'Selesai') {
            const url = `<?= base_url('laporan/') ?>${row.id}/laporan.png`
            html.push(_header(`Laporan Pengerjaan`, `<a href="${url}" class="btn btn-sm btn-warning js-smartPhoto" data-caption="Laporan Pengerjaan ${row.id}" data-id="${row.id}" data-group="${row.id}"><i class="fa fa-eye"></i> Lihat File</a>`))
        }

        html.push("<table class='table table-sm table-striped' style='width:400px'>");
        html.push("<thead class='bg-danger'><tr><th colspan='3' class='text-center'>History Pengerjaan</th></tr></thead>");
        if (!row.history) html.push(`<tr><td class="text-center">Belum ada history pengerjaan</td></tr>`)

        $.each(JSON.parse(row.history), function(key, val) {
            html.push(`<tr><td>${key}</td><td>:</td><td>${tanggalFormatter(val)}</td></tr>`);
        })

        html.push("</table>");

        return html.join('')
    }
</script>
</body>

</html>