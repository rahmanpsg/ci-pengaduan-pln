<?php $this->load->view('petugas/header') ?>
<link rel="stylesheet" href="<?= base_url('/assets/lib/bootstrap-table/bootstrap-table.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('/assets/lib/toast/toast.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('/assets/lib/smartphoto/smartphoto.min.css') ?>">

<style>
    .dropdown-menu {
        top: -10px !important;
        left: -180px !important;
    }
</style>
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
                                    <th data-field="aksi" data-formatter="aksiFormatter" data-events="window.aksiEvents" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /row -->

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Lokasi</h4>
                        </div>
                        <div class="modal-body">
                            <h5>Durasi : <span id="duration"></span></h5>
                            <h5>Jarak : <span id="jarak"></span></h5>
                            <div id="map" style="height: 480px; position: relative; overflow: hidden;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Silahkan upload laporan pengerjaan</h4>
                        </div>
                        <div class="modal-body">
                            <form class="dropzone" id="uploadForm">
                                <div class="form-group row">
                                    <input type="hidden" name="id">
                                    <div class="col-sm-12">
                                        <input type="file" class="form-control" id="myfile" name="file_laporan" accept=".png, .jpg, .jpeg" oninvalid=" this.setCustomValidity('File belum dipilih')" oninput="setCustomValidity('')" required>
                                    </div>
                                </div>
                                <div class="col text-right">
                                    <button id="submitBtn" type="submit" class="btn btn-warning">
                                        <div>
                                            <i class="fa fa-upload"></i>
                                            <span>Upload</span>
                                        </div>
                                    </button>
                                    <button class="btn btn-danger" data-dismiss="modal">
                                        <div>
                                            <i class="fa fa-window-close"></i>
                                            <span>Batal</span>
                                        </div>
                                    </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</section>
<!--main content end-->
<?php $this->load->view('petugas/footer') ?>
<script src="<?= base_url('/assets/lib/bootstrap-table/bootstrap-table.min.js') ?>"></script>
<script src="<?= base_url('/assets/lib/bootstrap-table/bootstrap-table-id-ID.js') ?>"></script>
<script src="<?= base_url('/assets/lib/toast/toast.min.js') ?>"></script>
<script src="<?= base_url('/assets/lib/moment/moment.min.js') ?>"></script>
<script src="<?= base_url('/assets/lib/moment/id.js') ?>"></script>
<script src="<?= base_url('/assets/lib/jquery.blockUI.js') ?>"></script>
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

    aksiFormatter = (val, row) => {
        let html = [`<div class="btn-group">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="more"><i class="fa fa-ellipsis-v"></i></span>
                  </a>
                <ul class="dropdown-menu" role="menu">`]

        switch (row.status) {
            case 'Belum dikonfirmasi':
                html.push(`<li><a href="#" class="lihat"><i class="fa fa-eye text-success"></i> Lihat lokasi</a></li>`)
                html.push(`<li><a href="#" class="konfirmasi"><i class="fa fa-check text-primary"></i> Konfirmasi</a></li>`)
                break;
            case 'Diterima & dalam pengerjaan':
                html.push(`<li><a href="#" class="lihat"><i class="fa fa-eye text-success"></i> Lihat lokasi</a></li>`)
                html.push(`<li><a href="#" class="selesai"><i class="fa fa-check text-primary"></i> Selesai</a></li>`)
                break;
            default:
                html.push(`<li><a href="#"> Tidak ada aksi</a></li>`)
                break;
        }

        html.push(`</ul></div>`)


        return html.join(' ')
    }

    let watch;
    let map, directionsService, icons, gmarkers = [];
    let lat, lng

    window.aksiEvents = {
        'click .lihat': (e, value, row) => {
            $('#myModal').modal('toggle')

            let preserveViewport = false

            watch = navigator.geolocation.watchPosition((position) => {
                const latitude = position.coords.latitude;
                const longitude = position.coords.longitude;

                if (lat != latitude && lng != longitude) {
                    const LatLng = new google.maps.LatLng(latitude, longitude);
                    const destination = new google.maps.LatLng(parseFloat(row.lokasi.latitude), parseFloat(row.lokasi.longitude));

                    displayRoute(LatLng, destination, preserveViewport);
                    preserveViewport = true
                }
                lat = latitude
                lng = longitude
            }, (err) => {
                console.log(err);
            }, {
                enableHighAccuracy: true
            });
        },
        'click .konfirmasi': (e, value, row) => {
            toastr.options = {
                "preventDuplicates": true
            };
            toastr.info("<br /><button type='button' class='btn btn-info' value='yes'>Ya</button> <button type='button' class='btn btn-danger' value='no' >Tidak</button>", `Pengaduan ${row.id}  akan dikonfirmasi?`, {
                allowHtml: true,
                onclick: (toast) => {
                    toastr.remove()

                    const aksi = toast.target.value

                    if (aksi == 'no') return

                    aksiPengaduan({
                        id: row.id,
                        username: `<?= $this->username ?>`,
                        status: 'Diterima & dalam pengerjaan'
                    })
                }

            })
        },
        'click .selesai': (e, value, row) => {
            $('#uploadModal').modal()
            $('input[name=id]').val(row.id)
        }
    }

    const aksiPengaduan = (data) => {
        $.ajax(`<?= base_url('api/aksiPengaduan') ?>`, {
            method: 'post',
            data
        }).then(res => {
            notifikasi(res.error, res.message)

            if (res.error) return

            $table.bootstrapTable('updateByUniqueId', {
                id: data.id,
                row: {
                    status: data.status,
                    history: res.history,
                    nama_petugas: `<?= $this->nama ?>`
                }
            });

            $('#uploadModal').modal('hide')
        })
    }

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

    $('#uploadForm').on('submit', (e) => {
        e.preventDefault()

        const id = $('input[name=id]').val()

        toastr.options = {
            "preventDuplicates": true
        };
        toastr.info("<br /><button type='button' class='btn btn-info' value='yes'>Ya</button> <button type='button' class='btn btn-danger' value='no' >Tidak</button>", `File laporan akan diupload & Pengaduan ${id} akan diselesaikan?`, {
            allowHtml: true,
            onclick: (toast) => {
                toastr.remove()

                const aksi = toast.target.value

                if (aksi == 'no') return

                const file = document.querySelector('#myfile').files[0];
                // console.log(await toBase64(file));
                toBase64(file).then(data => {
                    // console.log(data);
                    aksiPengaduan({
                        id,
                        file: data,
                        status: 'Selesai'
                    })
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

    $('#myModal').on('hidden.bs.modal', () => {
        if (watch) {
            navigator.geolocation.clearWatch(watch)
        }
    })

    function myMap() {
        const myLatLng = {
            lat: -4.010359,
            lng: 119.6229305
        };
        map = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: myLatLng
        });

        directionsService = new google.maps.DirectionsService();

        icons = {
            start: new google.maps.MarkerImage(
                'http://maps.google.com/mapfiles/ms/micons/green.png',
                new google.maps.Size(44, 32),
                new google.maps.Point(0, 0),
                new google.maps.Point(22, 32)),
            end: new google.maps.MarkerImage(
                'http://maps.google.com/mapfiles/ms/micons/blue.png',
                new google.maps.Size(44, 32),
                new google.maps.Point(0, 0),
                new google.maps.Point(22, 32))
        };
    }

    const displayRoute = (origin, destination, preserveViewport) => {
        const request = {
            origin,
            destination,
            provideRouteAlternatives: true,
            travelMode: google.maps.DirectionsTravelMode.DRIVING,
        };

        directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                const renderer = new google.maps.DirectionsRenderer({
                    map: map,
                    directions: response,
                    suppressMarkers: true,
                    preserveViewport
                });

                const leg = response.routes[0].legs[0];
                removeMarkers();

                makeMarker(leg.start_location, icons.start, "Lokasi Anda : " + leg.start_address, map);
                makeMarker(leg.end_location, icons.end, 'Lokasi Pelanggan : ' + leg.end_address, map);

                document.getElementById('duration').innerHTML = leg.duration.text
                document.getElementById('jarak').innerHTML = leg.distance.text
            } else
                alert('Could not display directions due to: ' + status);
        });
    }

    const makeMarker = (position, icon, title, map) => {
        const marker = new google.maps.Marker({
            position: position,
            map: map,
            icon: icon,
        });

        const infowindow = new google.maps.InfoWindow({
            content: title
        });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
        });

        gmarkers.push(marker);
    }

    const removeMarkers = () => {
        for (i = 0; i < gmarkers.length; i++) {
            gmarkers[i].setMap(null);
        }
    }
</script>

<script>
    function blockUI() {
        $.blockUI({
            message: '<div width="100%"><img src="<?= base_url('/assets/img/exclamation-icon.png') ?>" width="50px" /><h4>Aplikasi ini membutuhkan akses lokasi</h4></div>'
        });
    }

    navigator.permissions.query({
        name: 'geolocation'
    }).then(function(result) {
        if (result.state == 'granted') {
            report(result.state);
            $.unblockUI();
            // geoBtn.style.display = 'none';
        } else if (result.state == 'prompt') {
            report(result.state);
            blockUI();
            // geoBtn.style.display = 'none';
            // navigator.geolocation.getCurrentPosition(revealPosition,positionDenied,geoSettings);
        } else if (result.state == 'denied') {
            report(result.state);
            blockUI();
            // geoBtn.style.display = 'inline';
        }
        result.onchange = function() {
            if (result.state == 'granted') {
                $.unblockUI();
            } else {
                blockUI();
            }
            report(result.state);
        }
    });

    function report(state) {
        console.log('Permission ' + state);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7B9RynI4hQM_Y4BG9GYxsTLWwYkGASRo&callback=myMap&libraries=places&language=id">
</script>
</body>

</html>