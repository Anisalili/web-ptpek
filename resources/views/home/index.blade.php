@extends('layouts.guest')

@section('content')
<!-- Start header Area -->
<section id="hero-area" class="header-area header-eight">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="header-content">
                    {{-- <h1>Sistem Manajemen Aset Internal PT Panen Embun Kemakmuran</h1> --}}
                    <p>
                        Platform terintegrasi untuk pengelolaan aset perusahaan air mineral terkemuka di Kalimantan Selatan.
                        Kelola inventarisasi peralatan produksi, kendaraan operasional, mesin, dan aset kantor dengan sistem yang transparan dan akuntabel.
                    </p>
                    <div class="button">
                        <a href="#services" class="btn primary-btn page-scroll">Lihat Fitur</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="header-image">
                    <img src="{{ asset('Business-1.0.0/assets/images/header/hero-image.jpg') }}" alt="Asset Management System" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End header Area -->

<!-- Start About Area -->
<section class="about-area about-five">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="about-image-five">
                    <svg class="shape" width="106" height="134" viewBox="0 0 106 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="1.66654" cy="1.66679" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="16.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="31.0001" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="45.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="60.3335" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="88.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="117.667" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="74.6668" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="103" r="1.66667" fill="#DADADA" />
                        <circle cx="1.66654" cy="132" r="1.66667" fill="#DADADA" />
                    </svg>
                    <img src="{{ asset('Business-1.0.0/assets/images/about/about-img1.jpg') }}" alt="about" />
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-five-content">
                    <h6 class="small-title text-lg">TENTANG SISTEM</h6>
                    <h2 class="main-title fw-bold">Pengelolaan Aset yang Efektif untuk Industri Air Mineral</h2>
                    <div class="about-five-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-who-tab" data-bs-toggle="tab" data-bs-target="#nav-who"
                                    type="button" role="tab" aria-controls="nav-who" aria-selected="true">Tantangan</button>
                                <button class="nav-link" id="nav-vision-tab" data-bs-toggle="tab" data-bs-target="#nav-vision"
                                    type="button" role="tab" aria-controls="nav-vision" aria-selected="false">Solusi</button>
                                <button class="nav-link" id="nav-history-tab" data-bs-toggle="tab" data-bs-target="#nav-history"
                                    type="button" role="tab" aria-controls="nav-history" aria-selected="false">Manfaat</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-who" role="tabpanel" aria-labelledby="nav-who-tab">
                                <p>Sebagai perusahaan air mineral dengan fasilitas produksi yang luas, PT Panen Embun Kemakmuran mengelola ratusan aset mulai dari mesin produksi, kendaraan distribusi, peralatan laboratorium, hingga IT equipment yang tersebar di berbagai lokasi.</p>
                                <p>Pencatatan manual menyebabkan kesulitan tracking perpindahan aset, jadwal perawatan yang terlewat, dan laporan audit yang memakan waktu. Diperlukan sistem yang dapat mengelola semua ini secara terpusat.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                <p>Sistem ini menyediakan database terpusat untuk seluruh aset perusahaan dengan tracking lokasi detail per gedung/area produksi, monitoring kondisi operasional, penjadwalan maintenance preventif, dan pelaporan kerusakan yang terintegrasi dengan tim teknis.</p>
                                <p>Setiap departemen dapat mengakses informasi aset sesuai kewenangannya - dari operator produksi, teknisi maintenance, hingga manajemen untuk keperluan audit dan budgeting.</p>
                            </div>
                            <div class="tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="nav-history-tab">
                                <p>Dengan sistem ini, PT Panen Embun Kemakmuran dapat memastikan semua aset tercatat dengan baik, perawatan mesin produksi terjadwal dengan rapi, downtime produksi berkurang, biaya maintenance lebih terkontrol, dan proses audit menjadi lebih cepat.</p>
                                <p>Transparansi dan akuntabilitas pengelolaan aset meningkat secara signifikan dengan data historis yang lengkap dan dapat dipertanggungjawabkan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start Services Area -->
<section id="services" class="services-area services-eight">
    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>Fitur Sistem</h6>
                        <h2 class="fw-bold">Kelola Aset Perusahaan dengan Sistem Terintegrasi</h2>
                        <p>
                            Dari mesin produksi, kendaraan operasional, hingga peralatan kantor —
                            semua tercatat, terlacak, dan terawat dengan baik dalam satu platform.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="service-icon">
                        <i class="lni lni-package"></i>
                    </div>
                    <div class="service-content">
                        <h4>Inventarisasi Terpusat</h4>
                        <p>
                            Database terpusat untuk seluruh aset perusahaan - mesin produksi, kendaraan distribusi,
                            peralatan lab, IT equipment, dan aset kantor dengan informasi lengkap dan real-time.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="service-icon">
                        <i class="lni lni-map-marker"></i>
                    </div>
                    <div class="service-content">
                        <h4>Tracking Lokasi</h4>
                        <p>
                            Lacak posisi aset di area produksi, gudang, kantor, atau lokasi distribusi.
                            Riwayat perpindahan lengkap dengan penanggung jawab yang jelas.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="service-icon">
                        <i class="lni lni-pulse"></i>
                    </div>
                    <div class="service-content">
                        <h4>Monitoring Status</h4>
                        <p>
                            Pantau kondisi mesin produksi, kendaraan, dan peralatan operasional.
                            Status real-time untuk mencegah downtime produksi yang tidak terduga.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="service-icon">
                        <i class="lni lni-warning"></i>
                    </div>
                    <div class="service-content">
                        <h4>Laporan Kerusakan</h4>
                        <p>
                            Operator dapat melaporkan kerusakan langsung dari sistem. Tim teknisi
                            mendapat notifikasi otomatis untuk penanganan cepat.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="service-icon">
                        <i class="lni lni-timer"></i>
                    </div>
                    <div class="service-content">
                        <h4>Jadwal Maintenance</h4>
                        <p>
                            Preventive maintenance terjadwal untuk mesin produksi dan kendaraan.
                            Reminder otomatis memastikan perawatan tidak terlewat.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="service-icon">
                        <i class="lni lni-wallet"></i>
                    </div>
                    <div class="service-content">
                        <h4>Tracking Biaya</h4>
                        <p>
                            Catat biaya maintenance, suku cadang, dan operasional per aset.
                            Data historis untuk budgeting dan analisis efisiensi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Area -->

<!-- Start Benefits Area -->
<section class="pricing-area pricing-fourteen">
    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h6>Pengguna Sistem</h6>
                        <h2 class="fw-bold">Mendukung Seluruh Departemen Perusahaan</h2>
                        <p>
                            Dari tim produksi, teknisi, manajemen, hingga bagian keuangan —
                            sistem ini membantu semua pihak bekerja lebih terkoordinasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="pricing-style-fourteen">
                    <div class="table-head">
                        <h6 class="title">Tim Produksi & Teknisi</h6>
                        <p>Operator produksi dan teknisi maintenance dengan akses penuh ke data aset operasional.</p>
                    </div>
                    <div class="table-content">
                        <ul class="table-list">
                            <li> <i class="lni lni-checkmark-circle"></i> Riwayat mesin & peralatan</li>
                            <li> <i class="lni lni-checkmark-circle"></i> Jadwal maintenance preventif</li>
                            <li> <i class="lni lni-checkmark-circle"></i> Laporan kerusakan langsung</li>
                            <li> <i class="lni lni-checkmark-circle"></i> Status perbaikan real-time</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="pricing-style-fourteen middle">
                    <div class="table-head">
                        <h6 class="title">Manajemen & Audit</h6>
                        <p>Dashboard eksekutif untuk monitoring dan pengambilan keputusan strategis.</p>
                    </div>
                    <div class="table-content">
                        <ul class="table-list">
                            <li> <i class="lni lni-checkmark-circle"></i> Overview seluruh aset perusahaan</li>
                            <li> <i class="lni lni-checkmark-circle"></i> Laporan kondisi & utilisasi</li>
                            <li> <i class="lni lni-checkmark-circle"></i> Analisis downtime & efisiensi</li>
                            <li> <i class="lni lni-checkmark-circle"></i> Data lengkap untuk audit</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="pricing-style-fourteen">
                    <div class="table-head">
                        <h6 class="title">Procurement & Finance</h6>
                        <p>Support budgeting dan pengadaan aset berbasis data historis.</p>
                    </div>
                    <div class="table-content">
                        <ul class="table-list">
                            <li> <i class="lni lni-checkmark-circle"></i> Tracking biaya per aset</li>
                            <li> <i class="lni lni-checkmark-circle"></i> Prediksi biaya operasional</li>
                            <li> <i class="lni lni-checkmark-circle"></i> Lifecycle cost analysis</li>
                            <li> <i class="lni lni-checkmark-circle"></i> Budget planning support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Benefits Area -->

<!-- Start Contact Area -->
<section id="contact" class="contact-section" style="padding-bottom: 0; margin-bottom: 0;">
    <div class="container" style="margin-bottom: -150px; position: relative; z-index: 10;">
        <div class="row">
            <div class="col-xl-4">
                <div class="contact-item-wrapper">
                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="lni lni-phone"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Kontak Internal</h4>
                                    <p>IT Support: ext. 100</p>
                                    <p>it@ptpek.co.id</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="lni lni-map-marker"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Lokasi Pabrik</h4>
                                    <p>OMBÉ Air Mineral Factory</p>
                                    <p>Kalimantan Selatan, Indonesia</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-12">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="lni lni-alarm-clock"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Jam Operasional</h4>
                                    <p>Senin - Jumat: 08:00 - 17:00</p>
                                    <p>Sabtu: 08:00 - 12:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="contact-form-wrapper">
                    <div class="row">
                        <div class="col-xl-10 col-lg-8 mx-auto">
                            <div class="section-title text-center">
                                <span> Butuh Bantuan? </span>
                                <h2>Hubungi Tim IT Support</h2>
                                <p>
                                    Tim IT Support siap membantu Anda dalam menggunakan sistem atau melaporkan masalah teknis.
                                </p>
                            </div>
                        </div>
                    </div>
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" id="name" placeholder="Nama" required />
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" id="email" placeholder="Email" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="phone" id="phone" placeholder="Telepon" required />
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="subject" id="subject" placeholder="Subjek" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <textarea name="message" id="message" placeholder="Pesan Anda" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="button text-center rounded-buttons">
                                    <button type="submit" class="btn primary-btn rounded-full">
                                        Kirim Pesan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<!-- Start Map Area -->
<section class="map-section map-style-9" style="padding-top: 200px;">
    <div class="map-container">
        <iframe style="border:0; height: 500px; width: 100%;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.394723456782!2d114.73421669999999!3d-3.55708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de68fc49b9d3833%3A0x8c5fc45cc0f7d9af!2sOMB%C3%89%20AIR%20MINERAL%20FACTORY%20(PT.%20PANEN%20EMBUN%20KEMAKMURAN)!5e0!3m2!1sen!2sid!4v1234567890"
            allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>
<!-- End Map Area -->
@endsection
