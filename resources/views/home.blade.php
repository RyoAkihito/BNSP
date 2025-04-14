<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - SMK Pesat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #0d6efd;
            --secondary: #6c757d;
            --success: #198754;
        }

        .student-card {
            transition: transform 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
        }

        .student-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .student-img-container {
            height: 250px;
            overflow: hidden;
        }

        .student-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .student-card:hover .student-img {
            transform: scale(1.05);
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

        /* Style untuk hero section */
        .hero-section {
            background: linear-gradient(rgba(13, 110, 253, 0.8), rgba(13, 110, 253, 0.9)), url('/api/placeholder/1200/600');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            margin-bottom: 50px;
        }

        .hero-text h1 {
            font-size: 3.5rem;
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

        /* Style untuk card */
        .feature-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 10px;
            overflow: hidden;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        /* Style untuk testimoni */
        .testimonial-card {
            border-radius: 15px;
            padding: 25px;
            margin: 15px 0;
        }

        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary);
        }

        /* Style untuk counter */
        .counter-section {
            background-color: #f0f7ff;
            padding: 70px 0;
        }

        .counter-box {
            text-align: center;
            padding: 20px;
        }

        .counter-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
        }

        /* Style untuk berita */
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
            height: 350px;
            overflow: hidden;
        }

        .news-img {
            object-fit: cover;
            width: 100%;
            height: 100%;
            transition: transform 0.5s ease;
        }

        .news-card:hover .news-img {
            transform: scale(1.05);
        }

        .news-date {
            color: var(--primary);
            font-size: 0.85rem;
        }

        .teacher-card {
            transition: transform 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
        }

        .teacher-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .teacher-img-container {
            height: 250px;
            overflow: hidden;
        }

        .teacher-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .teacher-card:hover .teacher-img {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                {{-- <img src="/api/placeholder/200/50" alt="Logo SMK Pesat"> --}}
                <h4>SMK Pesat</h4>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Beranda</a>
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
                        <a class="nav-link" href="/berita">Berita</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Wrapper -->
    <div class="main-content">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 hero-text">
                        <h1>SMK Pesat</h1>
                        <p class="lead mb-4">Mencetak generasi unggul yang siap bersaing di era digital dengan
                            keterampilan dan nilai luhur.</p>
                        <a href="#" class="btn btn-light btn-lg me-2">Tentang Kami</a>
                        <a href="#" class="btn btn-outline-light btn-lg">Pendaftaran</a>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <img src="{{ '/Foto/ahmad bg.png' }}" alt="Siswa SMK Pesat" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->



        <!-- Programs Section -->
        <section class="container mb-5">
            <h2 class="section-heading text-center">Program Keahlian</h2>
            <p class="text-center text-muted mb-5">Pilih program keahlian sesuai dengan minat dan bakat Anda</p>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <h4>Rekayasa Perangkat Lunak</h4>
                            <p class="text-muted">Program yang fokus pada pengembangan Website mulai dari Front-end
                                hingga Back-end
                                , pemrograman, dan troubleshooting Error pemrograman.</p>
                            <a href="#" class="btn btn-outline-primary mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon">
                                <i class="fa-solid fa-tower-cell"></i>
                            </div>
                            <h4>Teknik Komputer dan Jaringan</h4>
                            <p class="text-muted">Program yang mempersiapkan siswa untuk menjadi
                                tenaga profesional di pengembangan Server serta melakukan troubleshooting pada perangkat
                                keras.</p>
                            <a href="#" class="btn btn-outline-primary mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon">
                                <i class="fas fa-palette"></i>
                            </div>
                            <h4>Desain Komunikasi Visual</h4>
                            <p class="text-muted">Program yang mengembangkan kreativitas siswa dalam bidang desain
                                grafis, animasi, dan multimedia.</p>
                            <a href="#" class="btn btn-outline-primary mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Counter Section -->
        <section class="counter-section mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-6 mb-4 mb-md-0">
                        <div class="counter-box">
                            <div class="counter-number">{{ $totalSiswa }}</div>
                            <div class="counter-text">Siswa Aktif</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-4 mb-md-0">
                        <div class="counter-box">
                            <div class="counter-number">{{ $totalGuru }}</div>
                            <div class="counter-text">Tenaga Pengajar</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="counter-box">
                            <div class="counter-number">98%</div>
                            <div class="counter-text">Tingkat Kelulusan</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="counter-box">
                            <div class="counter-number">85%</div>
                            <div class="counter-text">Terserap Industri</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <!-- Search and Filter -->
            {{-- <div class="row mb-4">
                <div class="col-md-6  mt-3 mt-md-0">
                    <div class="btn-group">
                        <button class="btn btn-outline-primary filter-btn active" data-filter="all">Semua</button>
                        <button class="btn btn-outline-primary filter-btn"
                            data-filter="matematika">Matematika</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="bahasa">Bahasa</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="kejuruan">Kejuruan</button>
                    </div>
                </div>
            </div> --}}

            <h2 class="mb-4 text-center">Daftar Tenaga Pendidik</h2>
            <p class="text-center text-muted mb-5">Temui para pendidik berpengalaman yang akan membimbing siswa
                mencapai potensi terbaik mereka</p>

            <!-- Teacher Cards -->
            <div class="row" id="guruContainer">
                @forelse($gurus as $guru)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow teacher-card">
                            <div class="teacher-img-container">
                                @if ($guru->foto)
                                    <img src="{{ asset('storage/' . $guru->foto) }}" class="teacher-img"
                                        alt="Foto {{ $guru->nama }}">
                                @else
                                    <img src="/api/placeholder/300/250" class="teacher-img" alt="Foto Default">
                                @endif
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $guru->nama }}</h5>
                                <p class="card-text text-muted mb-2"><i
                                        class="fas fa-id-card me-2"></i>{{ $guru->nip }}</p>
                                <p class="card-text mb-3">
                                    <span class="subject-badge">
                                        <i class="fas fa-book me-1"></i>{{ $guru->mata_pelajaran }}
                                    </span>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#gurumodal{{ $guru->id }}">Lihat Profil</button>
                                    <div>
                                        <a href="#" class="btn btn-sm btn-light"><i
                                                class="fas fa-envelope"></i></a>
                                        <a href="#" class="btn btn-sm btn-light"><i
                                                class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="gurumodal{{ $guru->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Profil Guru</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            @if ($guru->foto)
                                                <img src="{{ asset('storage/' . $guru->foto) }}"
                                                    class="img-fluid rounded" alt="Foto {{ $guru->nama }}">
                                            @else
                                                <img src="/api/placeholder/300/300" class="img-fluid rounded"
                                                    alt="Foto Default">
                                            @endif
                                        </div>
                                        <div class="col-md-8">
                                            <h4>{{ $guru->nama }}</h4>
                                            <p><strong>NIS:</strong> {{ $guru->nip }}</p>
                                            <p><strong>Kelas:</strong> {{ $guru->mata_pelajaran }}</p>

                                            <!-- Extra information that could be added in future updates -->
                                            <div class="mt-4">
                                                <h5>Aktivitas</h5>
                                                <div class="d-flex flex-wrap gap-2 mt-2">
                                                    <span class="badge bg-light text-dark">Kepala Kurikulum</span>
                                                    <span class="badge bg-light text-dark">BK Pesat</span>
                                                    {{-- <span class="badge bg-light text-dark">Basket</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <div class="d-flex flex-column align-items-center">
                            <img src="/api/placeholder/200/200" alt="Data Kosong" class="mb-3">
                            <h4>Belum ada data guru</h4>
                            <p class="text-muted">Data tenaga pendidik akan segera ditambahkan.</p>
                        </div>
                    </div>
                @endforelse

                <!-- Sample data -->


                <!-- Lebih banyak guru... -->
            </div>

        </div>

        <!-- Testimonials Section -->
        <!-- <section class="container mb-5">
            <h2 class="section-heading text-center">Testimoni Alumni</h2>
            <p class="text-center text-muted mb-5">Apa kata alumni tentang pengalaman mereka di SMK Pesat</p>
            
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card testimonial-card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                {{-- <img src="/api/placeholder/100/100" alt="Alumni" class="testimonial-img me-3"> --}}
                                <div>
                                    <h5 class="mb-0">Budi Santoso</h5>
                                    <p class="text-muted mb-0">Alumni 2023 - TKJ</p>
                                </div>
                            </div>
                            <p class="card-text">"Berkat pendidikan di SMK Pesat, saya berhasil mendapatkan pekerjaan di perusahaan IT ternama hanya 2 bulan setelah lulus. Keterampilan yang saya pelajari sangat relevan dengan kebutuhan industri saat ini."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card testimonial-card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                {{-- <img src="/api/placeholder/100/100" alt="Alumni" class="testimonial-img me-3"> --}}
                                <div>
                                    <h5 class="mb-0">Ratna Dewi</h5>
                                    <p class="text-muted mb-0">Alumni 2022 - Akuntansi</p>
                                </div>
                            </div>
                            <p class="card-text">"SMK Pesat memberikan dasar yang kuat untuk karir saya di bidang akuntansi. Para guru tidak hanya mengajarkan teori, tetapi juga aplikasi praktis yang sangat berguna di dunia kerja."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card testimonial-card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                {{-- <img src="/api/placeholder/100/100" alt="Alumni" class="testimonial-img me-3"> --}}
                                <div>
                                    <h5 class="mb-0">Ahmad Rizki</h5>
                                    <p class="text-muted mb-0">Alumni 2023 - DKV</p>
                                </div>
                            </div>
                            <p class="card-text">"Sebagai desainer grafis, saya sangat berterima kasih atas pelatihan yang saya terima di SMK Pesat. Portofolio yang saya buat selama sekolah membuka banyak pintu karir untuk saya."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <div class="container">
            <!-- Search and Filter -->
            <div class="row mb-4">
                {{-- <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-text bg-white">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" id="searchInput" class="form-control" placeholder="Cari siswa...">
                    </div>
                </div> --}}
                {{-- <div class="col-md-6 mt-3 mt-md-0">
                    <div class="btn-group">
                        <button class="btn btn-outline-primary filter-btn active" data-filter="all">Semua</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="X">Kelas X</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="XI">Kelas XI</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="XII">Kelas XII</button>
                    </div>
                </div> --}}
            </div>

            <h2 class="mb-4 text-center">Direktori Siswa</h2>
            <p class="text-center text-muted mb-5">Temui para siswa berbakat SMK Pesat yang siap bersaing di dunia
                kerja</p>

            <!-- Student Cards -->
            <div class="row" id="siswaContainer">
                @forelse($siswas as $siswa)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow student-card">
                            <div class="student-img-container">
                                @if ($siswa->foto)
                                    <img src="{{ asset('storage/' . $siswa->foto) }}" class="student-img"
                                        alt="Foto {{ $siswa->nama }}">
                                @else
                                    <img src="/api/placeholder/300/250" class="student-img" alt="Foto Default">
                                @endif
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $siswa->nama }}</h5>
                                <p class="card-text text-muted mb-2"><i
                                        class="fas fa-id-card me-2"></i>{{ $siswa->nis }}</p>
                                <p class="card-text mb-3">
                                    <span class="kelas-badge">
                                        <i class="fas fa-user-graduate me-1"></i>{{ $siswa->kelas }}
                                    </span>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#siswaModal{{ $siswa->id }}">Lihat Profil</button>
                                    <div>
                                        <a href="#" class="btn btn-sm btn-light"><i class="fas fa-award"
                                                title="Prestasi"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal untuk detail siswa -->
                    <div class="modal fade" id="siswaModal{{ $siswa->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Profil Siswa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            @if ($siswa->foto)
                                                <img src="{{ asset('storage/' . $siswa->foto) }}"
                                                    class="img-fluid rounded" alt="Foto {{ $siswa->nama }}">
                                            @else
                                                <img src="/api/placeholder/300/300" class="img-fluid rounded"
                                                    alt="Foto Default">
                                            @endif
                                        </div>
                                        <div class="col-md-8">
                                            <h4>{{ $siswa->nama }}</h4>
                                            <p><strong>NIS:</strong> {{ $siswa->nis }}</p>
                                            <p><strong>Kelas:</strong> {{ $siswa->kelas }}</p>

                                            <!-- Extra information that could be added in future updates -->
                                            <div class="mt-4">
                                                <h5>Aktivitas</h5>
                                                <div class="d-flex flex-wrap gap-2 mt-2">
                                                    <span class="badge bg-light text-dark">OSIS</span>
                                                    <span class="badge bg-light text-dark">Pramuka</span>
                                                    <span class="badge bg-light text-dark">Basket</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <div class="d-flex flex-column align-items-center">
                            <img src="/api/placeholder/200/200" alt="Data Kosong" class="mb-3">
                            <h4>Belum ada data siswa</h4>
                            <p class="text-muted">Data siswa akan segera ditambahkan.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Latest News Section -->
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

        <!-- CTA Section -->
        <section class="container mb-5">
            <div class="card bg-primary text-white">
                <div class="card-body p-5">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h3>Siap Bergabung dengan SMK Pesat?</h3>
                            <p class="mb-lg-0">Daftarkan diri Anda sekarang dan jadilah bagian dari generasi penerus
                                yang unggul dan berprestasi.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end">
                            <a href="#" class="btn btn-light">Daftar Sekarang <i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
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
                    <p><i class="fas fa-map-marker-alt me-2"></i>Jl. Poras No. 7 Sindang Barang - Loji Kecamatan Bogor
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

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Search functionality
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchValue = this.value.toLowerCase();
            const cards = document.querySelectorAll('#guruContainer .col-md-4');

            cards.forEach(card => {
                const name = card.querySelector('.card-title').textContent.toLowerCase();
                const subject = card.querySelector('.subject-badge').textContent.toLowerCase();
                if (name.includes(searchValue) || subject.includes(searchValue)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));

                // Add active class to clicked button
                this.classList.add('active');

                // Get filter value
                const filterValue = this.getAttribute('data-filter');

                // Filter cards
                const cards = document.querySelectorAll('#guruContainer .col-md-4');
                cards.forEach(card => {
                    if (filterValue === 'all') {
                        card.style.display = '';
                        return;
                    }

                    const subject = card.querySelector('.subject-badge').textContent.toLowerCase();
                    if (subject.includes(filterValue)) {
                        card.style.display = '';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>

</html>

