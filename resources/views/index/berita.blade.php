<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita - SMK Pesat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #0d6efd;
            --secondary: #6c757d;
            --success: #198754;
        }
        .news-card {
            transition: transform 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
            height: 100%;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .news-img-container {
            height: 30px;
            overflow: hidden;
        }

        .news-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .news-card:hover .news-img {
            transform: scale(1.05);
        }

        .news-date {
            color: var(--primary);
            font-size: 0.85rem;
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
            height: 350px;
            overflow: hidden;
        }
        .news-img-container {
            height: 350px;
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
            height: 200px;
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
                        <a class="nav-link" href="/profil">Profil</a>
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
                        <a class="nav-link active" href="/berita">Berita</a>
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
                <h1>Berita</h1>
                <p class="lead">Mengenal lebih dekat Aktivitas, dengan kegiatan serta prestasi siswa pada masa Belajar Mengajar</p>
            </div>
        </section>

        <!-- About School Section -->
        <section class="container mb-5">
            <h2 class="section-heading text-center">Berita Terbaru</h2>
            <p class="text-center text-muted mb-5">Ikuti perkembangan dan kegiatan terbaru di SMK Pesat</p>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card news-card h-100">
                        <div class="news-img-container">
                            <img src="{{ ('/Foto/Sanlat.jpg') }}" class="facility-img" alt="Lomba UI UX">
                        </div>
                        <div class="card-body">
                            <p class="news-date"><i class="far fa-calendar-alt me-2"></i>10 April 2025</p>
                            <h5 class="card-title">Sanlat SMK Pesat 2025</h5>
                            <p class="card-text">Sebuah perjalanan penuh makna, di mana kita bersama-sama menguatkan iman, menaklukkan hawa nafsu, dan meraih kemenangan sejati di bulan suci ini!</p>
                            <a href="#" class="btn btn-link p-0">Baca selengkapnya <i
                                    class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card news-card h-100">
                        <div class="news-img-container">
                            <img src="{{ ('/Foto/Mabit XII.jpg') }}" class="facility-img" alt="Lomba UI UX">
                        </div>
                        <div class="card-body">
                            <p class="news-date"><i class="far fa-calendar-alt me-2"></i>8 April 2025</p>
                            <h5 class="card-title">Kegiatan Mabit Kelas XII</h5>
                            <p class="card-text">Malam Bina Iman dan Taqwa (Mabit) terakhir bagi kelas XII bukan sekadar pertemuan, melainkan momen mengukir kenangan, merajut doa.</p>
                            <a href="#" class="btn btn-link p-0">Baca selengkapnya <i
                                    class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card news-card h-100">
                        <div class="news-img-container">
                            <img src="{{ ('/Foto/Umroh.jpg') }}" class="facility-img" alt="Lomba UI UX">
                        </div>
                        <div class="card-body">
                            <p class="news-date"><i class="far fa-calendar-alt me-2"></i>5 April 2025</p>
                            <h5 class="card-title">Pelepasan Penerima Beasiswa Umroh</h5>
                            <p class="card-text">Doa dan harapan terbaik mengiringi langkah mereka menuju Tanah Suci.
                                Semoga perjalanan lancar, ibadah diterima, dan kembali dengan selamat. Aamiin.</p>
                            <a href="#" class="btn btn-link p-0">Baca selengkapnya <i
                                    class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-primary">Lihat Semua Berita</a>
            </div> --}}
        </section>


        <!-- Vision Mission Section -->


        <!-- History Section -->


        <!-- Stats Section -->
        <section class="stats-section">
            <div class="container">
                <h2 class="section-heading text-center mb-5">Prestasi Siswa SMK Pesat</h2>
                <div class="row">
                    <div class="col-md-3 col-6 mb-4 mb-md-0">
                        <div class="stat-item">
                            <div class="stat-number">320+</div>
                            <div class="stat-text">Lulus Sertifikasi</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-4 mb-md-0">
                        <div class="stat-item">
                            <div class="stat-number">3</div>
                            <div class="stat-text">Juara Nasional</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">275+</div>
                            <div class="stat-text">Kejuaraaan Lomba Kejuruan</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <div class="stat-number">50+</div>
                            <div class="stat-text">Mitra Industri Bekerja</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Prestasi Section -->
        <section class="container mb-5">
            <h2 class="section-heading text-center">Prestasi</h2>
            <p class="text-center text-muted mb-5">Prestasi-Prestasi Siswa SMK Pesat
            </p>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card facility-card h-100">
                        <div class="facility-img-container">
                            <img src="{{ ('/Foto/Lomba.jpg') }}" class="facility-img" alt="Lomba UI UX">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">SMK Pesat Meraih Juara 1 Lomba UI/UX</h5>
                            <p class="news-date"><i class="far fa-calendar-alt me-2"></i>10 April 2025</p>
                            <p class="card-text">Selamat kepada siswa/i SMK Pesat atas prestasi gemilangnya sebagai Juara 1 Lomba UI/UX yang diselenggaran oleh telkom university.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card facility-card h-100">
                        <div class="facility-img-container">
                            <img src="{{ ('/Foto/Lomba Film Pendek.jpg') }}" class="facility-img" alt="Lomba Film Pendek">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Peraih Penghargaan Lomba Film Pendek</h5>
                            <p class="news-date"><i class="far fa-calendar-alt me-2"></i>10 April 2025</p>

                            <p class="card-text">Selamat atas penghargaan istimewa yang telah diraih!
                                Pencapaian ini adalah bukti dari dedikasi, kerja keras, dan komitmen yang luar biasa. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card facility-card h-100">
                        <div class="facility-img-container">
                            <img src="{{ ('/Foto/Lomba Cerita Film.jpg') }}" class="facility-img" alt="Lomba Cerita Film">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Juara 1 Lomba Film Pendek Fiksi</h5>
                            <p class="news-date"><i class="far fa-calendar-alt me-2"></i>10 April 2025</p>

                            <p class="card-text">Selamat atas penghargaan istimewa yang telah diraih!
                                Pencapaian ini adalah bukti dari dedikasi, kerja keras, dan komitmen yang luar biasa. 
                            </p>
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
                                <p class="lead font-italic mb-3">"Pendidikan Memang Penting namun, siswa juga memiliki minat yang perlu di support serta di beri wadah untuk siswa terus berkembang"</p>
                                <footer class="blockquote-footer mt-1">Dr. Budi Santoso, <cite
                                        title="Kepala Sekolah SMK Pesat">Kepala Sekolah SMK Pesat</cite></footer>
                            </blockquote>
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
