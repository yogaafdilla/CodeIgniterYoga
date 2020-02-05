<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-xl-2">
                        <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">E-Learning </a></h1>
                    </div>

                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="#home-section" class="nav-link">Beranda</a></li>
                                <li><a href="#berita-section" class="nav-link">Berita</a></li>                                    
                                <li><a href="#services-section" class="nav-link">Fitur</a></li>
                                <li><a href="#testimonials-section" class="nav-link">Ulasan</a></li>
                                <li><a href="<?php echo base_url('Login_user') ?>" class="nav-link">Login</a></li>
                                <li class="has-children">

                                </li>
                            </ul>
                        </nav>
                    </div>


                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

                </div>
            </div>

        </header>



        <div class="site-blocks-cover overlay" style="background-image: url(nitro/images/hero_2.jpg);" data-aos="fade" id="home-section">

            <div class="container">
                <div class="row align-items-center justify-content-center">


                    <div class="col-md-8 mt-lg-5 text-center">
                        <h1 class="text-uppercase" data-aos="fade-up">Sekolah Tinggi Teknologi Bandung</h1>
                        <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Salah satu Perguruan Tinggi di Kota Bandung yang mencetak mahasiswa berdaya saing dan unggul di bidang Teknologi.</p>
                        <div data-aos="fade-up" data-aos-delay="100">
                            <a href="<?php echo base_url('Login_user/index') ?>" class="btn smoothscroll btn-primary mr-2 mb-2">Mulai</a>
                        </div>
                    </div>

                </div>
            </div>

            <a href="#about-section" class="mouse smoothscroll">
                <span class="mouse-icon">
                    <span class="mouse-wheel"></span>
                </span>
            </a>
        </div>  


        <div class="site-section cta-big-image" id="about-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center" data-aos="fade">
                        <h2 class="section-title mb-3">Tentang STTB</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
                        <figure class="circle-bg">
                            <img src="nitro/images/sttb_01.jpg" alt="Image" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                        <div class="mb-4">
                            <p>STT Bandung yang mempunyai tiga jurusan yakni Teknik Industri, Teknik Informatika, dan Desain Komunikasi Visual 
                                memiliki tujuan untuk ikut serta meningkatkan kualitas pendidikan bangsa melalui lulusan sarjana yang kompeten di 
                                bidangnya dan berakhlak mulia.</p>
                        </div>

                        <div class="mb-4">
                            <ul class="list-unstyled ul-check success">
                                <h3>Keunggulan</h3>
                                <li>Didukung oleh tenaga pengajar (dosen) yang kompeten dan profesional di bidangnya</li>
                                <li>Tidak ada ujian negara seperti halnya di Perguruan Tinggi Negeri (PTN)</li>
                                <li>Mahasiswa dapat mengulang mata kuliah yang tidak lulus di semester berikutnya.</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>  
        </div>

        <section class="site-section" id="berita-section">
            <div class="container">

                <div class="row mb-5 justify-content-center">
                    <div class="col-md-7 text-center">
                        <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Berita</h2>
                    </div>
                </div>

                <div class="row" >
                    <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">

                        <div class="owl-carousel slide-one-item-alt">
                            <img src="nitro/images/berita_01.jpeg" alt="Image" class="img-fluid">
                            <img src="nitro/images/berita_02.jpeg" alt="Image" class="img-fluid">
                            <img src="nitro/images/berita_03.jpeg" alt="Image" class="img-fluid">
                        </div>
                        <div class="custom-direction">
                            <a href="#" class="custom-prev"><span><span class="icon-keyboard_backspace"></span></span></a><a href="#" class="custom-next"><span><span class="icon-keyboard_backspace"></span></span></a>
                        </div>

                    </div>
                    <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">

                        <div class="owl-carousel slide-one-item-alt-text">
                            <div>

                                <h2 class="section-title mb-3">Dosen STTB Mengisi Seminar Nasional di UNIKOM</h2>
                                <p class="lead">Dosen STTBandung Bapak Widi Linggih Jaelani, S.Kom., M.T menjadi pemateri dalam Seminar 
                                    Nasional & Pameran Teknologi “Cyber Security Solutions For Successful IoT Development” yang diadakan oleh 
                                    Universitas Komputer Indonesia (UNIKOM) Bandung, pada Rabu, 09 Oktober 2019.</p>                               
                                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
                            </div>

                            <div>
                                <h2 class="section-title mb-3">MERD 2019 di Universiti Malaysia</h2>
                                <p class="lead">Universiti Teknikal Malaysia Melaka ( UTeM ) berhasil menyelenggarakan Mechanical Engineering 
                                    Research Day (MERD) 2019 bersama STTBandung  dan Rolling Bearings Laboratorium, Universitas Shanghai ( ShU ),
                                    dengan STTBandung sebagai Co Host pada acara tersebut.</p>
                                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
                            </div>

                            <div>
                                <h2 class="section-title mb-3">STTBandung Membangun Desa Digital</h2>
                                <p class="lead">Kembali tim Dosen dan Mahasiswa STTBandung melaksanakan pengabdian kepada masyarakat dalam 
                                    rangka membantu memajukan Desa dan mengabdi untuk Negeri. Pengabdian Kepada Masyarakat kali ini dilaksanakan 
                                    di dua wilayah di Jawa Barat yaitu di Desa Cibogo Kecamatan Lembang dan Kelurahan Cikutra Kota Bandung yang diberi
                                    tema “Menuju Smart and Competitive Village”..</p>                              
                                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="site-section border-bottom bg-light" id="services-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center" data-aos="fade">
                        <h2 class="section-title mb-3">Fitur</h2>
                    </div>
                </div>
                <div class="row align-items-stretch">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                        <div class="unit-4">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-startup"></span></div>
                            <div>
                                <h3>Jadwal Kuliah</h3>
                                <p>Menampilkan detail jadwal matakuliah harian dan semesteran</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="unit-4">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-graphic-design"></span></div>
                            <div>
                                <h3>Perkuliahan</h3>
                                <p>Menampilkan materi mata kuliah sedang di tempuh yang dapat di download</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="unit-4">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-settings"></span></div>
                            <div>
                                <h3>Nilai</h3>
                                <p>Menampilkan data nilai mahasiswa secara rinci</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
                        <div class="unit-4">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-idea"></span></div>
                            <div>
                                <h3>Absensi</h3>
                                <p>Menampilkan data absensi mahasiswa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="unit-4">
                            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-smartphone"></span></div>
                            <div>
                                <h3>Qr Code</h3>
                                <p>Menampilkan qr code untuk absen harian</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="site-section testimonial-wrap" id="testimonials-section" data-aos="fade">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Ulasan</h2>
                    </div>
                </div>
            </div>
            <div class="slide-one-item home-slider owl-carousel">
                <div>
                    <div class="testimonial">

                        <blockquote class="mb-5">
                            <p>&ldquo;Dengan ada nya e-learning ini, memudahkan para mahasiswa untuk melihat absensi secara akurat tanpa harus bertanya ke akademik.&rdquo;</p>
                        </blockquote>

                        <figure class="mb-4 d-flex align-items-center justify-content-center">
                            <div><img src="nitro/images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                            <p>John Smith</p>
                        </figure>
                    </div>
                </div>
                <div>
                    <div class="testimonial">

                        <blockquote class="mb-5">
                            <p>&ldquo;Bagusnya e-learning ini ketika kita selsai ujian, selang beberapa hari maka para mahasiswa dapat melihat nilai melalui e-learning tanpa harus bertanya ke akademik..&rdquo;</p>
                        </blockquote>
                        <figure class="mb-4 d-flex align-items-center justify-content-center">
                            <div><img src="nitro/images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                            <p>Christine Aguilar</p>
                        </figure>

                    </div>
                </div>

                <div>
                    <div class="testimonial">

                        <blockquote class="mb-5">
                            <p>&ldquo;E-learning ini sangat membantu saya pada saat pembelajaran, karena saya dapat mendapatkan materi mata kuliah yang dapat di unduh di e-learning.&rdquo;</p>
                        </blockquote>
                        <figure class="mb-4 d-flex align-items-center justify-content-center">
                            <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                            <p>Robert Spears</p>
                        </figure>


                    </div>
                </div>

                <div>
                    <div class="testimonial">

                        <blockquote class="mb-5">
                            <p>&ldquo;E-learning ini sangat portable dapat di buka di mobile dan di komputer.&rdquo;</p>
                        </blockquote>
                        <figure class="mb-4 d-flex align-items-center justify-content-center">
                            <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                            <p>Bruce Rogers</p>
                        </figure>

                    </div>
                </div>

            </div>
        </section>
    </div>