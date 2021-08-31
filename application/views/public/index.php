<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pengaduan Pelanggan PT. PLN ULP Pangsid UP3 Parepare</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('/assets/public/img/logo/logo.png') ?>">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url('/assets/public/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/public/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/public/css/slicknav.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/public/css/flaticon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/public/css/animate.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/public/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/public/css/fontawesome-all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/public/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/public/css/slick.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/public/css/nice-select.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/public/css/style.css') ?>">
    <style>
        html {
            scroll-behavior: smooth;
        }

        .step {
            text-shadow: 2px 2px 10px #000;
        }
    </style>
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?= base_url('/assets/public/img/logo/logo.png') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <a href="<?= base_url() ?>"><img src="<?= base_url('/assets/public/img/logo/logo.png') ?>" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="<?= base_url() ?>">Home</a></li>
                                            <li><a href="#caraPengaduan">Cara Pengaduan</a></li>
                                            <li><a href="#tentang">Tentang</a></li>
                                            <li><a href="#kontak">Kontak</a></li>
                                            <li class="login add-list">
                                                <a href="#" data-toggle="modal" data-target="#loginModal">
                                                    <i class="ti ti-shift-right"></i> Masuk
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>

        <!-- Hero Area Start-->
        <div class="slider-area hero-overly">
            <div class="single-slider hero-overly  slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9">
                            <!-- Hero Caption -->
                            <div class="hero__caption">
                                <span>Pengaduan Pelanggan</span>
                                <h1>PT. PLN ULP Pangsid UP3 Parepare</h1>
                            </div>
                            <!--Hero form -->
                            <form id="pengaduanForm" class="search-box">
                                <div class="input-form" style="width:79%;">
                                    <input type="number" name="id" placeholder="Masukkan ID Pelanggan anda" autocomplete="off" oninvalid="this.setCustomValidity('ID pelanggan tidak boleh kosong')" oninput="setCustomValidity('')" required>
                                </div>
                                <div class="search-form">
                                    <a href="#" onclick="submitPengaduan()">
                                        Pengaduan
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Hero Area End-->

        <!-- Services Area Start -->
        <div id="caraPengaduan" class="services-area pt-150 pb-150 section-bg" data-background="<?= base_url('/assets/public/img/hero/hero2.jpg') ?>">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-80">
                            <span>Pengaduan Pelanggan</span>
                            <h2>Cara Pengaduan</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services text-center mb-50">
                            <div class="services-icon">
                                <span class="flaticon-list"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#" class="step">1. Masukkan ID pelanggan</a></h5>
                            </div>
                            <!-- Shpape -->
                            <img class="shape1 d-none d-lg-block" src="<?= base_url('/assets/public/img/icon/serices1.png') ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services text-center mb-50">
                            <div class="services-icon">
                                <span class="flaticon-problem"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#" class="step">2. Lengkapi data pengaduan</a></h5>
                            </div>
                            <img class="shape2 d-none d-lg-block" src="<?= base_url('/assets/public/img/icon/serices2.png') ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services text-center mb-50">
                            <div class="services-icon">
                                <span class="flaticon-respect"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#" class="step">3. Silahkan tunggu petugas</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->
        <!-- Testimonial Start -->
        <div id="tentang" class="testimonial-area testimonial-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-30">
                            <span>Tentang</span>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-11 col-md-11">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-justify">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        PT. PLN (Persero) ULP Pangsid UP 3 Parepare adalah salah satu unsur pelaksanaan kerja PT PLN (Persero) Wilayah Sulewesi Selatan,Sulawesi Tenggara dan Sulawesi Barat,mempunyai tugas untuk mendistribusikan dan memasarkan tenaga listrik yang berhubungan langsung dengan masyarakat pengguna tenaga listrik diwilayah,Kabupaten Sidrap tanggal 01 Juli 1998.
                                        Untuk menjalankan amanah peraturan sebagaimana disebutkan dalam Undang Undang Nomor 32 Tahun 2009 tentang perlindungan dan pengelolaan lingkungan hidup yang ditindak lanjuti dengan peraturan mentari negara lingkungan hidup nomor 14 tahun 2010 tentang dokumen lingkungan hidup bagi usaha dan /atau kegiatan yang telah memiliki izin usaha dan/atau kegiatan tetapi belum memiliki dokumen lingkungan hidup (DPLH)operasional gedung kantor PT. PLN (Persero) ULP Pangsid UP 3 Parepare dan telah mendapat persetujuan atau rekomendasi dari badan lingkungan hidup daerah kabupaten sidrap,dimana diwajibkan untuk melakukan pengelolaan dan pemantauan lingkungan serta melaporkan secara berkala setiap 6 bulan sekali dari hasil pelaksanaan upaya pengelolaan dan upaya pemantauan lingkungan serta melaporkan secara berkala setiap 6 (enam) bulan sekali dari hasil pelaksanaan upaya pengelolaan dan upaya n dari pemantauan lingkungan dari kegiatan operasional Gedung Kantor PT. PLN (PERSERO) ULP PANGSID UP 3 PAREPARE. Perlu kami sampaikan bahwa PT. PLN (PERSERO) ULP PANGSID UP 3 PAREPARE telah mengimplentasikan SMT (Sistem Manajemen Terintegrasi) yaitu sistem manajemen Mutu ISO 9001 tahun 2008, sistem manajemen lingkungan ISO 14001 tahun 2014 dan sistem Manajemen keselamatan dan kesehatan kerja (SMK3) sesuai PP No.50 tahun 2012. Khusus untuk SMK3 telah dilakukan Final External audit oleh PLN Jaser dan Disnaker Pusat pada tanggal 2 dan 2 januari 2014 dengan hasil memuaskan dan dan telah berhasil memperoleh sertifikasi dan bendera Emas dari Dapartemen Tenaga Kerja pada tanggal 26 juni 2014 di jakarta. Dan direncanakan dalam waktu dekat ada tim audit external dari PLN jaser kantor pusat akan datang pada tanggal 07 januari 2014 untuk mengecek sejauah mana implementasi ISO 14001 tahun 2014 tentang Manajemen Lingkungan di PT. PLN (Persero) ULP Pangsid UP 3 Parepare Yang meliputi Kantor Area, Kantor Rayon PANGSID dan Gugang Pangsid.

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header  text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Login</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex flex-column text-center">
                            <form id="loginForm">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" name="username" class="form-control" autocomplete="off" oninvalid="this.setCustomValidity('Username tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                        </div>
                                        <input type="password" name="password" class="form-control" placeholder="Password" oninvalid="this.setCustomValidity('Password tidak boleh kosong')" oninput="setCustomValidity('')" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-block btn-round">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area" id="kontak">
            <div class="container">
                <div class="footer-top footer-padding">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="<?= base_url() ?>"><img src="<?= base_url('/assets/public/img/logo/logo.png') ?>" alt="">
                                        </a>
                                        <p class="text-white">Jalan Bau Massepe No. 1 Pangkajene Sidrap Sulawesi Selatan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Hubungi Kami</h4>
                                    <ul>
                                        <!-- <li><i class="fa fa-phone"></i> +62 421 25444</li> -->
                                        <li><i class="fab fa-whatsapp"></i> 123</li>
                                        <li><i class="fab fa-whatsapp"></i> (Kode Area) 123</li>
                                        <li><i class="ti ti-email"></i> pln123@pln.co.id</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4></h4>
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/cc123pln"><i class="ti ti-facebook"></i> PLN 123</a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/pln123_official/"><i class="ti ti-instagram"></i> PLN123_official</a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/pln_123"><i class="ti ti-twitter-alt"></i> @pln_123</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Download PLNMobile</h4>
                                    <ul>
                                        <li class="app-log"><a href="https://play.google.com/store/apps/details?id=com.icon.pln123"><img src="<?= base_url('assets/public/img/gallery/app-logo.png') ?>" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> PT. PLN (Persero) ULP Pangsid UP3 Parepare
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


    <!-- JS here -->
    <!-- All JS Custom Plugins Link Here here -->
    <script src="<?= base_url('/assets/public/js/vendor/modernizr-3.5.0.min.js') ?>"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url('/assets/public/js/vendor/jquery-1.12.4.min.js') ?>"></script>
    <script src="<?= base_url('/assets/public/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('/assets/public/js/bootstrap.min.js') ?>"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= base_url('/assets/public/js/jquery.slicknav.min.js') ?>"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= base_url('/assets/public/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('/assets/public/js/slick.min.js') ?>"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?= base_url('/assets/public/js/wow.min.js') ?>"></script>
    <script src="<?= base_url('/assets/public/js/animated.headline.js') ?>"></script>
    <script src="<?= base_url('/assets/public/js/jquery.magnific-popup.js') ?>"></script>

    <!-- Nice-select, sticky -->
    <script src="<?= base_url('/assets/public/js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('/assets/public/js/jquery.sticky.js') ?>"></script>

    <!-- contact js -->
    <script src="<?= base_url('/assets/public/js/contact.js') ?>"></script>
    <script src="<?= base_url('/assets/public/js/jquery.form.js') ?>"></script>
    <script src="<?= base_url('/assets/public/js/jquery.validate.min.js') ?>"></script>
    <script src="<?= base_url('/assets/public/js/mail-script.js') ?>"></script>
    <script src="<?= base_url('/assets/public/js/jquery.ajaxchimp.min.js') ?>"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="<?= base_url('/assets/public/js/plugins.js') ?>"></script>
    <script src="<?= base_url('/assets/public/js/main.js') ?>"></script>

    <script src="<?= base_url('/assets/public/js/vendor/sweetalert.min.js') ?>"></script>
    <script>
        localStorage.clear()

        $('#loginForm').on('submit', function(e) {
            e.preventDefault()

            const data = $(this).serializeArray()

            $.ajax(`<?= base_url('api/login') ?>`, {
                method: 'post',
                data
            }).then(res => {
                swal('Informasi', res.message, res.error ? 'error' : 'success', {
                    timer: 1500
                }).then(() => {
                    if (res.error) return
                    window.location = `${res.level}/`
                })
            })
        })

        $('#pengaduanForm').on('submit', function(e) {
            e.preventDefault()

            const data = $(this).serializeArray()

            $.ajax(`<?= base_url('api/pelanggan') ?>`, {
                data,
                beforeSend: () => {
                    swal({
                        title: "Loading...",
                        text: "Memeriksa data",
                        icon: `<?= base_url('/assets/public/img/giphy.gif') ?>`,
                        button: false,
                        closeOnClickOutside: false,
                        closeOnEsc: false
                    });
                }
            }).then(res => {
                if (res.error) {
                    swal('Informasi', res.message, 'warning', {
                        timer: 1500
                    })
                    return
                }

                swal({
                    title: 'Data ditemukan',
                    icon: 'success',
                    buttons: ["Batal ", "Lanjutkan"],
                    text: `(${res.id}) ${res.nama}`
                }).then(next => {
                    if (!next) {
                        $('input[name=id]').val('').focus()
                        return
                    }
                    window.location = `home/pengaduan/${res.id}/`
                })
            })
        })

        function submitPengaduan() {
            if ($('#pengaduanForm')[0].checkValidity()) {
                $('#pengaduanForm').submit()
                return
            }

            swal('Informasi', 'ID Pelanggan tidak boleh kosong', 'warning', {
                timer: 1500
            }).then(() => $('input[name=id]').focus())
        }
    </script>
</body>

</html>