<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - SMK Pesat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #0d6efd;
            --secondary: #6c757d;
            --success: #198754;
        }

        /* Styles untuk body dan container utama */
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
            padding: 0;
        }

        .main-content {
            flex: 1 0 auto;
            /* Mendorong footer ke bawah */
        }

        /* Style untuk footer */
        .footer {
            background-color: #343a40;
            color: white;
            padding: 30px 0;
            margin-top: 50px;
            width: 100%;
            flex-shrink: 0;
        }

        .footer .container-fluid {
            padding-left: 30px;
            padding-right: 30px;
            max-width: 100%;
        }

        /* Style untuk header section */
        .profile-header {
            background: linear-gradient(rgba(13, 110, 253, 0.8), rgba(13, 110, 253, 0.9)), url('/api/placeholder/1200/400');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            margin-bottom: 50px;
            text-align: center;
        }

        .profile-header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .navbar-brand img {
            height: 50px;
        }

        /* Style untuk section */
        .section-heading {
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }

        .section-heading:after {
            content: '';
            position: absolute;
            width: 70px;
            height: 3px;
            background-color: var(--primary);
            bottom: 0;
            left: 0;
        }

        .section-heading.text-center:after {
            left: 50%;
            transform: translateX(-50%);
        }

        /* Style untuk timeline */
        .timeline {
            position: relative;
            padding: 0;
            list-style: none;
        }

        .timeline:before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 2px;
            margin-left: -1px;
            background-color: #e9ecef;
        }

        .timeline>li {
            position: relative;
            margin-bottom: 50px;
            min-height: 50px;
        }

        .timeline>li:after,
        .timeline>li:before {
            content: " ";
            display: table;
        }

        .timeline>li:after {
            clear: both;
        }

        .timeline>li .timeline-panel {
            float: left;
            position: relative;
            width: 46%;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.1);
            background: #fff;
        }

        .timeline>li .timeline-panel:before {
            position: absolute;
            top: 26px;
            right: -15px;
            display: inline-block;
            border-top: 15px solid transparent;
            border-left: 15px solid #fff;
            border-right: 0 solid #fff;
            border-bottom: 15px solid transparent;
            content: " ";
        }

        .timeline>li .timeline-badge {
            color: #fff;
            width: 50px;
            height: 50px;
            line-height: 50px;
            font-size: 1.4em;
            text-align: center;
            position: absolute;
            top: 16px;
            left: 50%;
            margin-left: -25px;
            background-color: var(--primary);
            z-index: 100;
            border-radius: 50%;
        }

        .timeline>li.timeline-inverted>.timeline-panel {
            float: right;
        }

        .timeline>li.timeline-inverted>.timeline-panel:before {
            border-left-width: 0;
            border-right-width: 15px;
            left: -15px;
            right: auto;
        }

        /* Style untuk facility cards */
        .facility-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 10px;
            overflow: hidden;
            height: 100%;
        }

        .facility-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .facility-img-container {
            height: 200px;
            overflow: hidden;
        }

        .facility-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .facility-card:hover .facility-img {
            transform: scale(1.05);
        }

        /* Style untuk stats */
        .stats-section {
            background-color: #f8f9fa;
            padding: 70px 0;
            margin: 50px 0;
        }

        .stat-item {
            text-align: center;
            padding: 20px;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
        }

        /* Style untuk quotes */
        .quote-section {
            padding: 70px 0;
            background-color: #f0f7ff;
        }

        .quote-card {
            padding: 30px;
            border-radius: 10px;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            position: relative;
        }

        .quote-card:before {
            content: "\201C";
            font-size: 80px;
            position: absolute;
            top: -20px;
            left: 10px;
            color: #e9ecef;
            font-family: serif;
        }

        /* Style untuk team cards */
        .team-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 10px;
            overflow: hidden;
            height: 100%;
        }

        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .team-img-container {
            height: 350px;
            overflow: hidden;
        }

        .team-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .team-social {
            margin-top: 15px;
        }

        .team-social a {
            display: inline-block;
            width: 32px;
            height: 32px;
            line-height: 32px;
            text-align: center;
            border-radius: 50%;
            background-color: #f8f9fa;
            color: var(--primary);
            margin-right: 5px;
            transition: all 0.3s ease;
        }

        .team-social a:hover {
            background-color: var(--primary);
            color: white;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h4>SMK Pesat</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/eskul">Ekstrakulikuler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/guru">Tenaga Pendidik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/siswa">Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/galeri">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/berita">Berita</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Wrapper -->
    <div class="main-content">
        <!-- Profile Header -->
        <section class="profile-header">
            <div class="container">
                <h1>Profil Sekolah</h1>
                <p class="lead">Mengenal lebih dekat SMK Pesat - Sekolah Menengah Kejuruan yang berdedikasi dalam
                    mendidik generasi unggul</p>
            </div>
        </section>

        <!-- About School Section -->
        <section class="container mb-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="section-heading">Tentang SMK Pesat</h2>
                    <p>SMK Pesat merupakan sekolah menengah kejuruan yang telah berdiri sejak tahun 2003. Dengan
                        komitmen menghasilkan lulusan yang siap kerja, wirausaha, dan melanjutkan pendidikan ke jenjang
                        yang lebih tinggi, SMK Pesat terus berupaya memberikan pendidikan berkualitas yang relevan
                        dengan kebutuhan dunia industri.</p>
                    <p>Kurikulum kami dirancang khusus untuk membekali siswa dengan keterampilan teknis dan soft skills
                        yang sangat dibutuhkan di dunia profesional saat ini. Melalui program magang dan kerjasama
                        industri, siswa kami mendapatkan pengalaman berharga sebelum lulus.</p>
                    <p>Dengan didukung oleh tenaga pengajar yang kompeten dan fasilitas modern, SMK Pesat berkomitmen
                        untuk mencetak generasi muda yang siap bersaing di era digital dan global.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ '/Foto/gedung.jpg' }}" alt="Gedung SMK Pesat" class="img-fluid rounded shadow">
                </div>
            </div>
        </section>

        <!-- Vision Mission Section -->
        <section class="container mb-5">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-4"><i class="fas fa-eye text-primary me-2"></i>Visi</h3>
                            <p class="card-text">Menjadi sekolah menengah kejuruan terdepan yang menghasilkan lulusan
                                dengan kompetensi unggul, karakter mulia, dan daya saing global.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="card-title mb-4"><i class="fas fa-bullseye text-primary me-2"></i>Misi</h3>
                            <ul class="card-text ps-3">
                                <li>Menyelenggarakan pendidikan kejuruan yang adaptif terhadap perubahan teknologi dan
                                    kebutuhan industri</li>
                                <li>Membangun karakter peserta didik yang berakhlak mulia, mandiri, dan bertanggung
                                    jawab</li>
                                <li>Mengembangkan kompetensi peserta didik sesuai dengan standar industri</li>
                                <li>Membangun kerja sama dengan dunia usaha dan industri dalam pengembangan kurikulum
                                    dan penyerapan lulusan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- History Section -->
        <section class="container mb-5">
            <h2 class="section-heading text-center">Sejarah SMK Pesat</h2>
            <p class="text-center text-muted mb-5">Perjalanan SMK Pesat dalam mendedikasikan diri untuk pendidikan
                kejuruan berkualitas</p>

            <ul class="timeline">
                <li>
                    <div class="timeline-badge"><i class="fas fa-flag"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2003</h4>
                            <h4 class="subheading">Pendirian SMK Pesat</h4>
                        </div>
                        <div class="timeline-body">
                            <p>SMK Pesat resmi didirikan dengan satu program keahlian yaitu Teknik Komputer dan Jaringan
                                (TKJ). Sekolah ini awalnya memiliki 3 ruang kelas dengan 120 siswa.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge"><i class="fas fa-graduation-cap"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2007</h4>
                            <h4 class="subheading">Penambahan Program Keahlian</h4>
                        </div>
                        <div class="timeline-body">
                            <p>SMK Pesat menambah program keahlian Akuntansi dan Keuangan untuk menjawab kebutuhan
                                tenaga profesional di bidang keuangan.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><i class="fas fa-certificate"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2012</h4>
                            <h4 class="subheading">Akreditasi A</h4>
                        </div>
                        <div class="timeline-body">
                            <p>SMK Pesat berhasil mendapatkan akreditasi A dari Badan Akreditasi Nasional sebagai bukti
                                kualitas pendidikan yang terus meningkat.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge"><i class="fas fa-paint-brush"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2015</h4>
                            <h4 class="subheading">Program DKV Dibuka</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Melihat perkembangan industri kreatif, SMK Pesat membuka program keahlian Desain
                                Komunikasi Visual (DKV) yang dilengkapi dengan studio dan laboratorium desain modern.
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><i class="fas fa-building"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2018</h4>
                            <h4 class="subheading">Pembangunan Gedung Baru</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Untuk mengakomodasi jumlah siswa yang terus bertambah, SMK Pesat meresmikan gedung baru
                                dengan fasilitas modern seperti laboratorium komputer, studio multimedia, dan aula
                                serbaguna.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge"><i class="fas fa-handshake"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2021</h4>
                            <h4 class="subheading">Kerjasama Industri</h4>
                        </div>
                        <div class="timeline-body">
                            <p>SMK Pesat menjalin kerjasama dengan lebih dari 50 perusahaan untuk program magang dan
                                penyerapan lulusan, meningkatkan relevansi pendidikan dengan dunia kerja.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><i class="fas fa-trophy"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2024</h4>
                            <h4 class="subheading">Sekolah Berprestasi Tingkat Nasional</h4>
                        </div>
                        <div class="timeline-body">
                            <p>SMK Pesat dinobatkan sebagai salah satu sekolah kejuruan terbaik tingkat nasional dengan
                                tingkat penyerapan lulusan mencapai 85%.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Stats Section -->
        <section class="stats-section">
            <div class="container">
                <h2 class="section-heading text-center mb-5">SMK Pesat dalam Angka</h2>
                <div class="row">
                    <div class="col-md-3 col-6 mb-4 mb-md-0">
                        <div class="stat-item">
                            <div class="stat-number">20+</div>
                            <div class="stat-text">Tahun Pengalaman</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-4 mb-md-0">
                        <div class="stat-item">
                            <div class="stat-number">3</div>
                            <div class="stat-text">Program Keahlian</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">5000+</div>
                            <div class="stat-text">Alumni</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">50+</div>
                            <div class="stat-text">Mitra Industri</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Facility Section -->
        <section class="container mb-5">
            <h2 class="section-heading text-center">Fasilitas</h2>
            <p class="text-center text-muted mb-5">Fasilitas lengkap dan modern untuk mendukung proses pembelajaran</p>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card facility-card h-100">
                        <div class="facility-img-container">
                            <img src="{{ 'Foto/lab kom.jpg' }}" class="facility-img" alt="Laboratorium Komputer">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Laboratorium Komputer</h5>
                            <p class="card-text">Dilengkapi dengan komputer spesifikasi tinggi dan software terkini
                                untuk mendukung pembelajaran TKJ dan DKV.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card facility-card h-100">
                        <div class="facility-img-container">
                            <img src="{{ 'Foto/studio.jfif' }}" class="facility-img" alt="Studio Multimedia">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Studio Multimedia</h5>
                            <p class="card-text">Studio dengan peralatan profesional untuk produksi audio visual dan
                                fotografi bagi siswa jurusan DKV.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card facility-card h-100">
                        <div class="facility-img-container">
                            <img src="{{ 'Foto/perpustakaan.jfif' }}" class="facility-img" alt="Perpustakaan">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Perpustakaan</h5>
                            <p class="card-text">Perpustakaan modern dengan koleksi buku, jurnal, dan akses e-book
                                untuk mendukung pembelajaran siswa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card facility-card h-100">
                        <div class="facility-img-container">
                            <img src="{{ 'Foto/lab kun.jfif' }}" class="facility-img" alt="Laboratorium Akuntansi">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Laboratorium Akuntansi</h5>
                            <p class="card-text">Dilengkapi dengan software akuntansi dan simulasi transaksi keuangan
                                untuk praktik siswa jurusan Akuntansi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card facility-card h-100">
                        <div class="facility-img-container">
                            <img src="{{ 'Foto/lapangan.jfif' }}" class="facility-img" alt="Lapangan Olahraga">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lapangan Olahraga</h5>
                            <p class="card-text">Lapangan multifungsi untuk berbagai kegiatan olahraga dan
                                ekstrakurikuler siswa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card facility-card h-100">
                        <div class="facility-img-container">
                            <img src="{{ 'Foto/aula.jfif' }}" class="facility-img" alt="Aula Serbaguna">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Aula Serbaguna</h5>
                            <p class="card-text">Aula berkapasitas 500 orang untuk berbagai kegiatan sekolah, seminar,
                                dan workshop.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quote Section -->
        <section class="quote-section mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="quote-card text-center">
                            <blockquote class="mb-0">
                                <p class="lead font-italic mb-3">"Pendidikan bukan hanya tentang menguasai teori,
                                    tetapi juga membangun karakter dan keterampilan yang relevan dengan kebutuhan masa
                                    depan. Di SMK Pesat, kami mendedikasikan diri untuk menyiapkan siswa menjadi tenaga
                                    profesional yang siap bersaing di dunia global."</p>
                                <footer class="blockquote-footer">Dr. Budi Santoso, <cite
                                        title="Kepala Sekolah SMK Pesat">Kepala Sekolah SMK Pesat</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Leadership Team Section -->
        <section class="container mb-5">
            <h2 class="section-heading text-center">Struktur Kepemimpinan</h2>
            <p class="text-center text-muted mb-5">Kenali tim yang memimpin perkembangan SMK Pesat</p>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card team-card h-100 text-center">
                        <div class="team-img-container">
                            <img src="{{ 'Foto/pakadhi.jpg' }}" class="team-img" alt="Kepala Sekolah">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-1">Dr. Budi Santoso</h5>
                            <p class="text-muted mb-3">Kepala Sekolah</p>
                            <p class="card-text">Berpengalaman lebih dari 20 tahun di dunia pendidikan dengan
                                spesialisasi manajemen pendidikan kejuruan.</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card team-card h-100 text-center">
                        <div class="team-img-container">
                            <img src="{{ 'Foto/bueva.jpg' }}" class="team-img" alt="Wakil Kepala Sekolah">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-1">Dra. Ratna Sari, M.Pd</h5>
                            <p class="text-muted mb-3">Wakil Kepala Sekolah Bidang Kurikulum</p>
                            <p class="card-text">Ahli pengembangan kurikulum yang berfokus pada integrasi teknologi
                                dalam pembelajaran.</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card team-card h-100 text-center">
                        <div class="team-img-container">
                            <img src="{{ 'Foto/pakrusli.jpg' }}" class="team-img" alt="Wakil Kepala Sekolah">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-1">Ahmad Rizki, S.Kom., M.T.</h5>
                            <p class="text-muted mb-3">Wakil Kepala Sekolah Bidang Hubungan Industri</p>
                            <p class="card-text">Menangani kemitraan strategis dengan dunia industri dan program magang
                                siswa.</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h5>SMK Pesat</h5>
                        <p>Mendidik generasi masa depan dengan keterampilan, pengetahuan, dan nilai-nilai yang membuat
                            mereka siap menghadapi tantangan global.</p>
                        <div class="social-icons mt-3">
                            <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h5>Kontak Kami</h5>
                        <p><i class="fas fa-map-marker-alt me-2"></i>Jl. Poras No. 7 Sindang Barang - Loji Kecamatan
                            Bogor
                            Barat, Provinsi Jawa Barat - Indonesia</p>
                        <p><i class="fas fa-phone me-2"></i> 0877-1117-7442
                        </p>
                        <p><i class="fas fa-envelope me-2"></i>smkit.pesat@gmail.com</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Tautan Cepat</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white text-decoration-none">Beranda</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Tentang Kami</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Program Studi</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Fasilitas</a></li>
                            <li><a href="#" class="text-white text-decoration-none">Berita & Acara</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1);">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-md-0">© 2025 SMK Pesat. Hak Cipta Dilindungi.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <a href="#" class="text-white text-decoration-none me-3">Kebijakan Privasi</a>
                        <a href="#" class="text-white text-decoration-none">Syarat & Ketentuan</a>
                    </div>
                </div>
            </div>
        </footer>
</body>

</html>
