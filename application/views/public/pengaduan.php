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

        .card-bordered {
            border: 1px solid #ebebeb
        }

        .card {
            border: 0;
            border-radius: 0px;
            margin-bottom: 0px;
            -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.03);
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.03);
            -webkit-transition: .5s;
            transition: .5s
        }

        .padding {
            padding: 0rem !important
        }

        body {
            background-color: #f9f9fa
        }

        .card-header:first-child {
            border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
        }

        .card-header {
            display: -webkit-box;
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            align-items: center;
            padding: 15px 20px;
            background-color: transparent;
            border-bottom: 1px solid rgba(77, 82, 89, 0.07)
        }

        .card-header .card-title {
            padding: 0;
            border: none
        }

        h4.card-title {
            font-size: 17px
        }

        .card-header>*:last-child {
            margin-right: 0
        }

        .card-header>* {
            margin-left: 8px;
            margin-right: 8px
        }

        .btn-secondary {
            color: #4d5259 !important;
            background-color: #e4e7ea;
            border-color: #e4e7ea;
            color: #fff
        }

        .btn-xs {
            font-size: 11px;
            padding: 2px 8px;
            line-height: 18px
        }

        .btn-xs:hover {
            color: #fff !important
        }

        .card-title {
            /* font-family: Roboto, sans-serif; */
            font-weight: 300;
            line-height: 1.5;
            margin-bottom: 0;
            padding: 15px 20px;
            border-bottom: 1px solid rgba(77, 82, 89, 0.07)
        }

        .ps-container {
            position: relative
        }

        .ps-container {
            -ms-touch-action: auto;
            touch-action: auto;
            overflow: hidden !important;
            -ms-overflow-style: none
        }

        .media-chat {
            padding-right: 64px;
            margin-bottom: 0
        }

        .media {
            padding: 16px 12px;
            -webkit-transition: background-color .2s linear;
            transition: background-color .2s linear
        }

        .media .avatar {
            flex-shrink: 0
        }

        .avatar {
            position: relative;
            display: inline-block;
            width: 36px;
            height: 36px;
            line-height: 36px;
            text-align: center;
            border-radius: 100%;
            background-color: #f5f6f7;
            color: #8b95a5;
            text-transform: uppercase
        }

        .media-chat .media-body {
            -webkit-box-flex: initial;
            flex: initial;
            display: table
        }

        .media-body {
            min-width: 0
        }

        .media-chat .media-body p {
            position: relative;
            padding: 6px 8px;
            margin: 4px 0;
            background-color: #f5f6f7;
            border-radius: 3px;
            font-weight: 100;
            color: #9b9b9b
        }

        .media>* {
            margin: 0 8px
        }

        .media-chat .media-body p.meta {
            background-color: transparent !important;
            padding: 0;
            opacity: .8
        }

        .media-meta-day {
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            align-items: center;
            margin-bottom: 0;
            color: #8b95a5;
            opacity: .8;
            font-weight: 400
        }

        .media {
            padding: 16px 12px;
            -webkit-transition: background-color .2s linear;
            transition: background-color .2s linear
        }

        .media-meta-day::before {
            margin-right: 16px
        }

        .media-meta-day::before,
        .media-meta-day::after {
            content: '';
            -webkit-box-flex: 1;
            flex: 1 1;
            border-top: 1px solid #ebebeb
        }

        .media-meta-day::after {
            content: '';
            -webkit-box-flex: 1;
            flex: 1 1;
            border-top: 1px solid #ebebeb
        }

        .media-meta-day::after {
            margin-left: 16px
        }

        .media-chat.media-chat-reverse {
            padding-right: 12px;
            padding-left: 64px;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: reverse;
            flex-direction: row-reverse
        }

        .media-chat {
            padding-right: 64px;
            margin-bottom: 0
        }

        .media {
            padding: 16px 12px;
            -webkit-transition: background-color .2s linear;
            transition: background-color .2s linear
        }

        .media-chat.media-chat-reverse .media-body p {
            float: right;
            clear: right;
            background-color: #48b0f7;
            color: #fff
        }

        .media-chat .media-body p {
            position: relative;
            padding: 6px 8px;
            margin: 4px 0;
            background-color: #f5f6f7;
            border-radius: 3px
        }

        .border-light {
            border-color: #f1f2f3 !important
        }

        .bt-1 {
            border-top: 1px solid #ebebeb !important
        }

        .publisher {
            position: relative;
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            padding: 12px 20px;
            background-color: #f9fafb
        }

        .publisher>*:first-child {
            margin-left: 0
        }

        .publisher>* {
            margin: 0 8px
        }

        .publisher-input {
            -webkit-box-flex: 1;
            flex-grow: 1;
            border: none;
            outline: none !important;
            background-color: transparent
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            /* font-family: Roboto, sans-serif; */
            font-weight: 300
        }

        .publisher-btn {
            background-color: transparent;
            border: none;
            color: #8b95a5;
            font-size: 16px;
            cursor: pointer;
            overflow: -moz-hidden-unscrollable;
            -webkit-transition: .2s linear;
            transition: .2s linear
        }

        .file-group {
            position: relative;
            overflow: hidden
        }

        .publisher-btn {
            background-color: transparent;
            border: none;
            color: #cac7c7;
            font-size: 16px;
            cursor: pointer;
            overflow: -moz-hidden-unscrollable;
            -webkit-transition: .2s linear;
            transition: .2s linear
        }

        .file-group input[type="file"] {
            position: absolute;
            opacity: 0;
            z-index: -1;
            width: 20px
        }

        .text-info {
            color: #48b0f7 !important
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
                                            <li class="login add-list">
                                                <a href="<?= base_url() ?>">
                                                    <i class="ti ti-home"></i> Home
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
    <main id="app">

        <!-- Hero Start-->
        <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Pengaduan</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- Listing caption start-->
        <div class="listing-caption section-padding2">
            <div class="container">
                <!-- Map -->
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h3 class="mb-30">Lokasi</h3>
                        <div class="d-none d-sm-block mb-30 pb-4">
                            <div id="map" style="height: 480px; position: relative; overflow: hidden;"></div>
                        </div>
                    </div>
                </div>
                <!--End Map -->
                <!-- Contact From -->
                <!-- From -->
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h3 class="mb-40">Detail </h3>
                        <!-- Form -->
                        <form id="pengaduanForm" class="form-contact contact_form mb-80" @submit="submitPengaduan">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control error" name="nama" type="text" placeholder="Nama anda" autocomplete="off" oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" oninput="setCustomValidity('')" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control error" name="telp" type="number" placeholder='Masukkan nomor telpon anda' oninvalid="this.setCustomValidity('Nomor telpon tidak boleh kosong')" oninput="setCustomValidity('')" required>
                                    </div>
                                </div>
                                <div class=" col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100 error" name="pengaduan" cols="30" rows="9" placeholder='Masukkan pengaduan anda' oninvalid="this.setCustomValidity('Pengaduan belum diisi')" oninput="setCustomValidity('')" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn"><i class="ti ti-announcement"></i> Kirim</button>
                                <a class="button button-contactForm boxed-btn" @click="showHideChat(true)"><i class="ti ti-comment-alt"></i> Chat dengan admin</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Listing caption End-->

        <!-- Chat Box -->
        <div class="page-content page-container fixed-bottom" id="page-chat">
            <div class="padding">
                <div class="row container d-flex justify-content-center">
                    <div class="col-md-6">
                        <div class="card card-bordered">
                            <div class="card-header">
                                <h4 class="card-title"><strong>Chat</strong></h4> <a class="btn btn-xs btn-secondary" @click="showHideChat(false)">Tutup</a>
                            </div>
                            <div class="ps-container ps-theme-default ps-active-y" id="chat-content" style="overflow-y: scroll !important; height:400px !important;">

                                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                                    <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps-scrollbar-y-rail" style="top: 0px; height: 0px; right: 2px;">
                                    <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 2px;"></div>
                                </div>
                            </div>
                            <div class="publisher bt-1 border-light">
                                <img class="avatar avatar-xs" src="<?= base_url('/assets/public/img/gallery/administrator-male.png') ?>">
                                <textarea class="publisher-input form-control w-100 error" v-model="pesan" placeholder="Tulis pesan..."></textarea>
                                <a class="publisher-btn text-info" data-abc="true" @click="sendMessage"><i class="fa fa-paper-plane"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->

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
                                        <li class="app-log"><a href="https://play.google.com/store/apps/details?id=com.icon.pln123"><img src="<?= base_url('/assets/public/img/gallery/app-logo.png') ?>" alt=""></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
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

    <!-- <script src="<?= base_url('/assets/public/js/vendor/vue-dev.js') ?>"></script> -->
    <script src="<?= base_url('/assets/public/js/vendor/vue.js') ?>"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7B9RynI4hQM_Y4BG9GYxsTLWwYkGASRo&amp;&libraries=places&sensor=false&language=id">
    </script>

    <script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-firestore.js"></script>

    <!-- chat script -->
    <script>
        new Vue({
            el: '#app',
            data: function() {
                return {
                    idPelanggan: `<?= $this->uri->segment(3) ?>`,
                    pesan: '',
                    previousMessage: {
                        type: ''
                    },
                    createGroup: false,
                    showMessage: false
                }
            },
            created: function() {
                $('#page-chat').hide()
            },
            mounted: function() {
                this.initMap()
                let firebaseConfig = {
                    apiKey: "AIzaSyAnBgPTcX5OF_WXKm5uNnE6RapZz8WzdbU",
                    authDomain: "pengaduan-pln.firebaseapp.com",
                    projectId: "pengaduan-pln",
                    storageBucket: "pengaduan-pln.appspot.com",
                    messagingSenderId: "347844251182",
                    appId: "1:347844251182:web:4877ad4ac18223dd02d9bf"
                };

                firebase.initializeApp(firebaseConfig);
                this.db = firebase.firestore();
            },
            methods: {
                initMap: function() {
                    const myLatLng = {
                        lat: !this.latitude ? -4.010359 : parseFloat(this.latitude),
                        lng: !this.longitude ? 119.6229305 : parseFloat(this.longitude)
                    };

                    this.map = new google.maps.Map(document.getElementById('map'), {
                        center: myLatLng,
                        zoom: 14,
                        scrollwheel: false
                    });

                    this.marker = new google.maps.Marker({
                        position: myLatLng,
                        map: this.map,
                        draggable: true
                    })

                    this.geocoder = new google.maps.Geocoder();

                    this.infowindow = new google.maps.InfoWindow();
                    this.infowindow.setContent("Silangkan geser marker ke lokasi anda");
                    this.infowindow.open(this.map, this.marker);

                    google.maps.event.addListener(this.marker, 'dragend', () => {
                        this.geocoder.geocode({
                            'latLng': this.marker.getPosition()
                        }, this.updateStatus);
                    });

                    const searchControlDiv = document.createElement("div");
                    searchControlDiv.classList.add(...['form-contact', 'contact_form'])
                    this.searchControl(searchControlDiv, this.map);
                    this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(searchControlDiv);
                },
                updateStatus: function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            this.lokasi = results[0].formatted_address;
                            this.latitude = this.marker.getPosition().lat();
                            this.longitude = this.marker.getPosition().lng();
                            this.infowindow.setContent(results[0].formatted_address);
                            this.infowindow.open(this.map, this.marker);
                        }
                    }
                },
                searchControl: function(controlDiv, map) {
                    const input = document.createElement(`input`);
                    input.setAttribute('type', 'text');
                    input.setAttribute('placeholder', 'Cari lokasi');
                    input.classList.add(...['form-control', 'error'])
                    input.style.width = '500px';

                    controlDiv.className = "form-group";
                    controlDiv.style.margin = "10px"
                    controlDiv.append(input);

                    const searchBox = new google.maps.places.SearchBox(input);

                    map.addListener("bounds_changed", () => {
                        searchBox.setBounds(map.getBounds());
                    });

                    searchBox.addListener("places_changed", () => {
                        const places = searchBox.getPlaces();

                        if (places.length == 0) {
                            return;
                        }

                        // For each place, get the icon, name and location.
                        const bounds = new google.maps.LatLngBounds();
                        places.forEach(place => {
                            if (!place.geometry) {
                                console.log("Returned place contains no geometry");
                                return;
                            }

                            this.marker.setPosition(place.geometry.location);
                            this.lokasi = place.formatted_address;
                            this.latitude = this.marker.getPosition().lat();
                            this.longitude = this.marker.getPosition().lng();
                            this.infowindow.setContent(this.lokasi);

                            if (place.geometry.viewport) {
                                bounds.union(place.geometry.viewport);
                            } else {
                                bounds.extend(place.geometry.location);
                            }
                        });
                        map.fitBounds(bounds);
                    });
                },
                submitPengaduan: function(e) {
                    e.preventDefault()

                    if (!this.lokasi) {
                        swal('Informasi', 'Silahkan geser marker ke lokasi anda', 'warning')
                        return
                    }

                    const data = $(e.target).serializeObject();

                    const _createList = (judul, isi) => {
                        return `<div class="row><div class="col-3"><strong>${judul}</strong> : </div><div class="col-9">${isi}</div></div>`
                    }

                    const text = [
                        _createList('Nama Pengadu', data.nama),
                        _createList('Nomor Telpon', data.telp),
                        _createList('Pengaduan', data.pengaduan),
                        _createList('Lokasi', this.lokasi),
                    ]

                    // const text = [`<strong>Nama Pengadu</strong> : ${data.nama}`, `<strong>Nomor Telpon</strong> : ${data.telp}`, `<strong>Pengaduan</strong> : ${data.pengaduan}`,
                    //     `<div class="row"><div class="col-3"><strong>Lokasi</strong> : </div><div class="col-9">${this.lokasi}</div></div>`
                    // ];

                    const content = document.createElement('div');
                    content.className = 'text-left'
                    content.innerHTML = text.join('<br>')

                    swal({
                        title: 'Pengaduan akan dikirim',
                        content,
                        // text: text.join(', \n'),
                        buttons: {
                            cancel: {
                                text: "Batal",
                                value: null,
                                visible: true
                            },
                            confirm: {
                                text: "Kirim",
                                closeModal: false
                            }
                        }
                    }).then(next => {
                        if (!next) {
                            return
                        }

                        data['lokasi'] = this.lokasi
                        data['latitude'] = this.latitude
                        data['longitude'] = this.longitude
                        data['id'] = `<?= $this->uri->segment(3) ?>`

                        $.ajax(`<?= base_url('api/pengaduan') ?>`, {
                            method: 'post',
                            data,
                        }).then(res => {
                            const content = document.createElement('div');
                            content.innerHTML = res.message

                            swal({
                                title: 'Informasi',
                                content: content,
                                icon: res.error ? 'error' : 'success'
                            }).then(() => {
                                if (res.error) return
                                // window.location = `<?= base_url() ?>`
                                $('#pengaduanForm').trigger("reset");
                            })
                        })
                    })
                },
                showHideChat: function(show) {
                    if (show) {
                        $('#page-chat').show()

                        if (localStorage.getItem('idPelanggan') != this.idPelanggan) {
                            localStorage.clear()
                        }

                        if (!this.createGroup) {
                            this.firebaseChatListen()
                            this.firebaseLoadChat()
                        }

                        if (this.createGroup || localStorage.getItem('idChat')) {
                            this.createGroup = true
                            return
                        }
                        localStorage.setItem('idPelanggan', this.idPelanggan)
                        localStorage.setItem('idChat', this.idChat)

                        // buat data chat di firestore
                        this.db.collection(`groups`).doc(this.idChat).set({
                            idPelanggan: this.idPelanggan,
                            waktu: firebase.firestore.FieldValue.serverTimestamp()
                        }).then((docRef) => {
                            this.createGroup = true

                            this.addMessage('Halo kak', 'send')
                            this.addMessage('Ada yang bisa saya bantu?', 'send')
                        })

                        return
                    }

                    $('#page-chat').hide()
                    // this.unsubscribeChat()
                },
                firebaseLoadChat: function() {
                    const self = this
                    const id = localStorage.getItem('idChat') ? localStorage.getItem('idChat') : this.idChat;

                    this.db.collection(`chats/${id}/messages`).orderBy('waktu', 'asc').get()
                        .then(function(querySnapshot) {
                            const listMessages = self.queryFilter(querySnapshot)
                            self.addMessages(listMessages)

                            self.showMessage = true
                        })
                },
                firebaseChatListen: function() {
                    const newID = this.generateID();
                    this.idChat = localStorage.getItem('idChat') ? localStorage.getItem('idChat') : newID;

                    this.unsubscribeChat = this.db.collection(`chats/${this.idChat}/messages`)
                        .where('sender', '==', 'Admin').orderBy("waktu", "desc").limit(1)
                        .onSnapshot(querySnapshot => {
                            if (!this.showMessage) return
                            const listMessages = this.queryFilter(querySnapshot)

                            if (!listMessages.length) return

                            const {
                                text,
                                type
                            } = listMessages[0]

                            this.addMessage(text, type)
                        });
                },
                queryFilter: function(querySnapshot) {
                    const self = this

                    return querySnapshot.docs.map(messages => {
                        const {
                            text,
                            sender,
                            waktu
                        } = messages.data()

                        const dataMessage = {
                            text: text.replace(/\n/g, '<br>').trim(),
                            type: sender == 'Admin' ? 'send' : 'received',
                        }

                        return dataMessage
                    })
                },
                addMessage: function(text, type) {
                    if (!text) return

                    this.message = {
                        text,
                        type
                    }

                    if (this.previousMessage.type !== this.message.type) {
                        this.createNewMessage()
                    }

                    const chatContent = $('#chat-content')
                    const mediaChat = chatContent.children('.media-chat')

                    $(mediaChat[mediaChat.length - 1]).children('.media-body').append(`<p>${text.replace(/\n/g, '<br>').trim()}</p>`)

                    chatContent.stop().animate({
                        scrollTop: chatContent[0].scrollHeight
                    }, 800);

                    this.previousMessage = this.message
                },
                addMessages: function(messages) {
                    if (!messages.length) return

                    const chatContent = $('#chat-content')
                    for (const item of messages) {
                        this.message = item

                        if (this.previousMessage.type !== this.message.type) {
                            this.createNewMessage()
                        }

                        const mediaChat = chatContent.children('.media-chat')

                        $(mediaChat[mediaChat.length - 1]).children('.media-body').append(`<p>${item.text.replace(/\n/g, '<br>').trim()}</p>`)

                        this.previousMessage = this.message
                    }

                    chatContent.stop().animate({
                        scrollTop: chatContent[0].scrollHeight
                    }, 800);
                },
                createNewMessage: function() {
                    const _class = this.message.type == 'received' ? 'media-chat-reverse' : '';

                    $('#chat-content').append(`<div class="media media-chat ${_class}"> <img class="avatar" 
                                                src="<?= base_url('/assets/public/img/gallery/administrator-male.png') ?>">
                                                <div class="media-body">
                                                </div>
                                            </div>`)

                },
                sendMessage: function() {
                    const self = this
                    const text = this.pesan

                    if (!text) return

                    this.addMessage(text, 'received')

                    this.db.collection(`chats`).doc(this.idChat).collection('messages').add({
                        sender: 'Pengadu',
                        text,
                        waktu: firebase.firestore.FieldValue.serverTimestamp()
                    })

                    this.db.collection(`groups`).doc(this.idChat).update({
                        last_pesan: text,
                        waktu: firebase.firestore.FieldValue.serverTimestamp()
                    })

                    this.pesan = ''
                },
                generateID: function() {
                    return '_' + Math.random().toString(36).substr(2, 9);
                }
            }

        })
    </script>

</body>

</html>