<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from Teman sehat.dreamguystech.com/lightblue/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 06:09:07 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Teman Sehat</title>

    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/img/favicon.png') }}">

    <link rel="stylesheet"
        href="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/css/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/css/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/css/owl.carousel.css') }}">
    <link rel="stylesheet"
        href="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/css/style.css') }}">

    <!--[if lt IE 9]>
   <script src="assets/js/html5shiv.min.js"></script>
   <script src="assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<body>
    @include('navbar')


    @include('sidebar')


    <div class="main-content">

        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title"> <span>Tentang Kami</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-header text-center">
                            <h3 class="header-title">Teman sehat</h3>
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 about-desc">
                        <p>Usaha Kesehatan Sekolah (UKS) adalah upaya untuuk membina dan mengembangkan kebiasaan hidup
                            sehat yang dilakukan secara terpadu
                            melalui program pendidikan dan pelayanan kesehatan sekolah.</p>
                        <p>Teman sehat merupakan web penyedia fasilitas tambahan untuk UKS sekolah dalam bidang
                            kesehetan</p>
                    </div>
                </div>
                <div class="about-content">
                    <div class="text-center">
                        <img src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/img/about-img.png') }}"
                            class="img-fluid" alt>
                    </div>
                    <div class="our-mission">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="about-det">
                                    <h4>VISI</h4>
                                    <p>Menjadi web yang dapat membantu tenaga kesehatan agar memudahkan sarana prasarana
                                        kesehatan.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-det">
                                    <h4>MISI</h4>
                                    <p>Menyelenggarakan pelayanan kesehatan sesuai perkembangan teknologi dan informasi
                                        berbasis digital.</p>
                                    <p>Mewujudkan pelayanan kesehatan yang bermutu, merata, terjangkau dan berkeadilan.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-det">
                                    <h4> Plan Kami</h4>
                                    <p>Memberikan pelayanan kesehatan promotive, preventif, kuratif dan rehabilitatif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget">
                            <h4 class="footer-title">Location</h4>
                            <div class="about-clinic">
                                <p><strong>Address:</strong>
                                    <br>Jl. Teluk Pacitan
                                    <br>Malang,65126
                                </p>
                                <p class="m-b-0">
                                    <strong>Phone</strong>:
                                    <a href="tel:+8503867896">(850) 386-7896</a>
                                    <br> <strong>Fax</strong>:
                                    <a href="tel:+8503867896">(850) 386-7896</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget">
                            <h4 class="footer-title">Sitemap</h4>
                            <ul class="footer-menu">
                                <li>
                                    <a href="about-us.html">Tentang Kami</a>
                                </li>
                                <li>
                                    <a href="doctors.html">Konsultan</a>
                                </li>
                                <li>
                                    <a href="contact-us.html">Kontak Kami</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget">
                            <h4 class="footer-title">Appointment</h4>
                            <div class="appointment-btn">
                                <p>Dengan adanya fitur ini dapat memudahkan komunikasi antar tim uks dengan siswa</p>
                                <ul class="social-icons clearfix">
                                    <li>
                                        <a href="#" target="_blank" title="Facebook"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Twitter"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Linkedin"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Google Plus"><i
                                                class="fab fa-google-plus-g"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" title="Youtube"><i
                                                class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-12">
                            <div class="copy-text text-center">
                                <p>&#xA9; 2023 <a href="#">Teman sehat</a>. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="sidebar-overlay" data-reff="#side_menu"></div>

    <script src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('medilabf/medifab.dreamguystech.com/lightblue/assets/js/theme.js') }}"></script>
</body>

<!-- Mirrored from Teman sehat.dreamguystech.com/lightblue/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 06:09:08 GMT -->

</html>
