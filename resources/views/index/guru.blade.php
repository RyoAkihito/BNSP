<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenaga Pendidik - SMK Pesat</title>
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
            flex: 1 0 auto; /* Ini akan mendorong footer ke bawah */
        }
        
        /* Style untuk footer */
        .footer {
            background-color: #343a40;
            color: white;
            padding: 30px 0;
            margin-top: 50px;
            width: 100%;
            flex-shrink: 0; /* Mencegah footer dari shrinking */
        }

        .footer .container-fluid {
            padding-left: 30px;
            padding-right: 30px;
            max-width: 100%;
        }
        
        /* Style lainnya tetap sama */
        .bg-light-blue {
            background-color: #f0f7ff;
        }
        
        .teacher-card {
            transition: transform 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
        }
        
        .teacher-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
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
        
        .navbar-brand img {
            height: 50px;
        }
        
        .page-header {
            background: linear-gradient(135deg, #0d6efd 0%, #0099ff 100%);
            padding: 50px 0;
            margin-bottom: 40px;
            color: white;
        }
        
        .subject-badge {
            background-color: #e7f5ff;
            color: #0d6efd;
            border-radius: 30px;
            padding: 5px 15px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .filter-btn {
            border-radius: 20px;
            margin: 0 5px;
            font-size: 0.9rem;
        }
        
        .filter-btn.active {
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
                {{-- <img src="/api/placeholder/200/50" alt="Logo SMK Pesat"> --}}
                <h3>SMK Pesat</h3>
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
                        <a class="nav-link active" href="/guru">Tenaga Pendidik</a>
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
        <!-- Header -->
        <div class="page-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="fw-bold">Tenaga Pendidik</h1>
                        <p class="lead">Guru-guru berkualitas dan berpengalaman yang mendedikasikan diri untuk pendidikan siswa kami</p>
                    </div>
                    <div class="col-md-6 text-end">
                        {{-- <img src="/api/placeholder/400/200" alt="Guru SMK Pesat" class="img-fluid rounded"> --}}
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="container">
            <!-- Search and Filter -->
            <div class="row mb-4">
                <div class="col-md-6  mt-3 mt-md-0">
                    <div class="btn-group">
                        <button class="btn btn-outline-primary filter-btn active" data-filter="all">Semua</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="matematika">Matematika</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="bahasa">Bahasa</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="kejuruan">Kejuruan</button>
                    </div>
                </div>
            </div>

            <h2 class="mb-4 text-center">Daftar Tenaga Pendidik</h2>
            <p class="text-center text-muted mb-5">Temui para pendidik berpengalaman yang akan membimbing siswa mencapai potensi terbaik mereka</p>

            <!-- Teacher Cards -->
            <div class="row" id="guruContainer">
                @forelse($gurus as $guru)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow teacher-card">
                            <div class="teacher-img-container">
                                @if($guru->foto)
                                    <img src="{{ asset('storage/' . $guru->foto) }}" class="teacher-img" alt="Foto {{ $guru->nama }}">
                                @else
                                    <img src="/api/placeholder/300/250" class="teacher-img" alt="Foto Default">
                                @endif
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $guru->nama }}</h5>
                                <p class="card-text text-muted mb-2"><i class="fas fa-id-card me-2"></i>{{ $guru->nip }}</p>
                                <p class="card-text mb-3">
                                    <span class="subject-badge">
                                        <i class="fas fa-book me-1"></i>{{ $guru->mata_pelajaran }}
                                    </span>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-sm btn-outline-primary">Lihat Profil</button>
                                    <div>
                                        <a href="#" class="btn btn-sm btn-light"><i class="fas fa-envelope"></i></a>
                                        <a href="#" class="btn btn-sm btn-light"><i class="fas fa-phone"></i></a>
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

        <!-- Call to Action -->
        <div class="bg-light-blue py-5 mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h3>Tertarik bergabung dengan tim pengajar kami?</h3>
                        <p class="mb-lg-0">Kami selalu mencari pendidik berbakat dan berdedikasi untuk bergabung dengan tim kami.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="#" class="btn btn-primary">Lowongan Guru <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer yang diperbaiki - Full Width -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>SMK Pesat</h5>
                    <p>Sekolah Umum Berbasis Keagamaan Berkarakter Akhlak Mulia Pilihan Anak - anak Terpilih

</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Kontak Kami</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i>Jl. Poras No. 7 Sindang Barang - Loji Kecamatan Bogor Barat, Provinsi Jawa Barat - Indonesia</p>
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
        
        const filterButtons = document.querySelectorAll('.filter-btn');
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                
                this.classList.add('active');
                
                const filterValue = this.getAttribute('data-filter');
                
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