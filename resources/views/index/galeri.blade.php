<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - SMK Pesat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #0d6efd;
            --secondary: #6c757d;
            --success: #198754;
        }
        
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
            padding: 0;
        }

        .main-content {
            flex: 1 0 auto;
        }

        /* Navbar styles */
        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Header section */
        .gallery-header {
            background: linear-gradient(rgba(13, 110, 253, 0.8), rgba(13, 110, 253, 0.9)), url('/api/placeholder/1200/400');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            margin-bottom: 50px;
            text-align: center;
        }

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

        /* Gallery styles */
        .gallery-item {
            margin-bottom: 30px;
            overflow: hidden;
            border-radius: 10px;
            position: relative;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .gallery-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover .gallery-img {
            transform: scale(1.05);
        }

        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 15px;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            color: white;
        }

        .gallery-caption h5 {
            margin-bottom: 5px;
        }

        .gallery-date {
            font-size: 0.85rem;
            opacity: 0.8;
        }

        /* Filter buttons */
        .filter-buttons {
            margin-bottom: 30px;
        }

        .filter-btn {
            margin: 0 5px 10px;
            padding: 8px 16px;
            border-radius: 25px;
        }

        /* Categories section */
        .categories-section {
            background-color: #f8f9fa;
            padding: 50px 0;
            margin: 50px 0;
        }

        .category-card {
            text-align: center;
            padding: 30px 20px;
            border-radius: 10px;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .category-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        /* Footer */
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
                        <a class="nav-link active" href="/galeri">Galeri</a>
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
        <!-- Gallery Header -->
        <section class="gallery-header">
            <div class="container">
                <h1>Galeri</h1>
                <p class="lead">Dokumentasi kegiatan dan momen berharga di SMK Pesat</p>
            </div>
        </section>

        <!-- Filter Buttons -->
        {{-- <section class="container mb-5">
            <div class="text-center filter-buttons">
                <button class="btn btn-primary filter-btn active">Semua</button>
                <button class="btn btn-outline-primary filter-btn">Kegiatan Sekolah</button>
                <button class="btn btn-outline-primary filter-btn">Prestasi</button>
                <button class="btn btn-outline-primary filter-btn">Ekstrakulikuler</button>
                <button class="btn btn-outline-primary filter-btn">Fasilitas</button>
            </div>
        </section> --}}

        <!-- Gallery Section -->
        <section class="container mb-5">
            <h2 class="section-heading text-center">Galeri Foto</h2>
            <p class="text-center text-muted mb-5">Momen-momen berkesan di SMK Pesat</p>

            <div class="row">
                <!-- Gallery Item 1 -->
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="{{ 'Foto/mabit XII.jpg' }}" class="gallery-img" alt="Kegiatan Sanlat">
                        <div class="gallery-caption">
                            <h5>Kegiatan Sanlat 2025</h5>
                            <p class="gallery-date"><i class="far fa-calendar-alt me-2"></i>10 April 2025</p>
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 2 -->
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="{{ 'Foto/mabit XII.jpg' }}" class="gallery-img" alt="Mabit Kelas XII">
                        <div class="gallery-caption">
                            <h5>Mabit Kelas XII</h5>
                            <p class="gallery-date"><i class="far fa-calendar-alt me-2"></i>8 April 2025</p>
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="{{ 'Foto/umroh.jpg' }}" class="gallery-img" alt="Beasiswa Umroh">
                        <div class="gallery-caption">
                            <h5>Pelepasan Beasiswa Umroh</h5>
                            <p class="gallery-date"><i class="far fa-calendar-alt me-2"></i>5 April 2025</p>
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 4 -->
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="{{ 'Foto/Lomba.jpg' }}" class="gallery-img" alt="Lomba UI/UX">
                        <div class="gallery-caption">
                            <h5>Juara Lomba UI/UX</h5>
                            <p class="gallery-date"><i class="far fa-calendar-alt me-2"></i>3 April 2025</p>
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 5 -->
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="{{ 'Foto/Lomba Film Pendek.jpg' }}" class="gallery-img" alt="Lomba Film Pendek">
                        <div class="gallery-caption">
                            <h5>Lomba Film Pendek</h5>
                            <p class="gallery-date"><i class="far fa-calendar-alt me-2"></i>1 April 2025</p>
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Item 6 -->
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="{{ 'Foto/coding.jfif' }}" class="gallery-img" alt="Ekstrakurikuler Robotik">
                        <div class="gallery-caption">
                            <h5>Ekstrakurikuler Robotik</h5>
                            <p class="gallery-date"><i class="far fa-calendar-alt me-2"></i>28 Maret 2025</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-primary">Lihat Lebih Banyak</a>
            </div>
        </section>

        <!-- Categories Section -->
        <section class="categories-section">
            <div class="container">
                <h2 class="section-heading text-center">Kategori Album</h2>
                <p class="text-center text-muted mb-5">Jelajahi koleksi foto kami berdasarkan kategori</p>
                
                <div class="row">
                    <!-- Category 1 -->
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <h5>Akademik</h5>
                            <p>Kegiatan belajar mengajar dan aktivitas akademik</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Lihat Album</a>
                        </div>
                    </div>
                    
                    <!-- Category 2 -->
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <h5>Prestasi</h5>
                            <p>Penghargaan dan pencapaian siswa-siswi kami</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Lihat Album</a>
                        </div>
                    </div>
                    
                    <!-- Category 3 -->
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-running"></i>
                            </div>
                            <h5>Ekstrakurikuler</h5>
                            <p>Kegiatan pengembangan bakat dan minat</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Lihat Album</a>
                        </div>
                    </div>
                    
                    <!-- Category 4 -->
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="category-card">
                            <div class="category-icon">
                                <i class="fas fa-calendar-day"></i>
                            </div>
                            <h5>Event Sekolah</h5>
                            <p>Dokumentasi acara dan kegiatan sekolah</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Lihat Album</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Videos Section -->
        <section class="container mb-5">
            <h2 class="section-heading text-center">Galeri Video</h2>
            <p class="text-center text-muted mb-5">Dokumentasi video kegiatan SMK Pesat</p>

            <div class="row">
                <!-- Video Item 1 -->
                <div class="col-md-6 mb-4">
                    <div class="ratio ratio-16x9">
                        <img src="{{ 'Foto/gedung.jpg' }}" alt="Video Placeholder">
                    </div>
                    <div class="mt-3">
                        <h5>Profil SMK Pesat 2025</h5>
                        <p class="text-muted">Pengenalan fasilitas dan program unggulan SMK Pesat</p>
                    </div>
                </div>
                
                <!-- Video Item 2 -->
                <div class="col-md-6 mb-4">
                    <div class="ratio ratio-16x9">
                        <img src="{{ 'Foto/basket.jfif' }}" alt="Video Placeholder">
                    </div>
                    <div class="mt-3">
                        <h5>Highlight Kegiatan Siswa</h5>
                        <p class="text-muted">Rangkuman kegiatan siswa selama semester ganjil</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-2">
                <a href="#" class="btn btn-outline-primary">Lihat Semua Video</a>
            </div>
        </section>
    </div>

    <!-- Footer -->
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
                        Bogor Barat, Provinsi Jawa Barat - Indonesia</p>
                    <p><i class="fas fa-phone me-2"></i> 0877-1117-7442</p>
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>