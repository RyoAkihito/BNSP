<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa - SMK Pesat</title>
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
            flex: 1 0 auto; /* Mendorong footer ke bawah */
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
        
        /* Style lainnya */
        .bg-light-blue {
            background-color: #f0f7ff;
        }
        
        .student-card {
            transition: transform 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
        }
        
        .student-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
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
        
        .navbar-brand img {
            height: 50px;
        }
        
        .page-header {
            background: linear-gradient(135deg, #0d6efd 0%, #0099ff 100%);
            padding: 50px 0;
            margin-bottom: 40px;
            color: white;
        }
        
        .kelas-badge {
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
                        <a class="nav-link" href="/guru">Tenaga Pendidik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/siswa">Siswa</a>
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
                        <h1 class="fw-bold">Siswa Kami</h1>
                        <p class="lead">Para siswa berprestasi yang menjadi kebanggaan SMK Pesat dalam berbagai bidang</p>
                    </div>
                    <div class="col-md-6 text-end">
                        {{-- <img src="/api/placeholder/400/200" alt="Siswa SMK Pesat" class="img-fluid rounded"> --}}
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
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
                <div class="col-md-6 mt-3 mt-md-0">
                    <div class="btn-group">
                        <button class="btn btn-outline-primary filter-btn active" data-filter="all">Semua</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="X">Kelas X</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="XI">Kelas XI</button>
                        <button class="btn btn-outline-primary filter-btn" data-filter="XII">Kelas XII</button>
                    </div>
                </div>
            </div>

            <h2 class="mb-4 text-center">Direktori Siswa</h2>
            <p class="text-center text-muted mb-5">Temui para siswa berbakat SMK Pesat yang siap bersaing di dunia kerja</p>

            <!-- Student Cards -->
            <div class="row" id="siswaContainer">
                @forelse($siswas as $siswa)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow student-card">
                            <div class="student-img-container">
                                @if($siswa->foto)
                                    <img src="{{ asset('storage/' . $siswa->foto) }}" class="student-img" alt="Foto {{ $siswa->nama }}">
                                @else
                                    <img src="/api/placeholder/300/250" class="student-img" alt="Foto Default">
                                @endif
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $siswa->nama }}</h5>
                                <p class="card-text text-muted mb-2"><i class="fas fa-id-card me-2"></i>{{ $siswa->nis }}</p>
                                <p class="card-text mb-3">
                                    <span class="kelas-badge">
                                        <i class="fas fa-user-graduate me-1"></i>{{ $siswa->kelas }}
                                    </span>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#siswaModal{{ $siswa->id }}">Lihat Profil</button>
                                    <div>
                                        <a href="#" class="btn btn-sm btn-light"><i class="fas fa-award" title="Prestasi"></i></a>
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
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            @if($siswa->foto)
                                                <img src="{{ asset('storage/' . $siswa->foto) }}" class="img-fluid rounded" alt="Foto {{ $siswa->nama }}">
                                            @else
                                                <img src="/api/placeholder/300/300" class="img-fluid rounded" alt="Foto Default">
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

        <!-- Call to Action -->
        <div class="bg-light-blue py-5 mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h3>Tertarik menjadi bagian dari keluarga SMK Pesat?</h3>
                        <p class="mb-lg-0">Pelajari program dan keunggulan kami untuk mengembangkan potensi terbaik Anda.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="#" class="btn btn-primary">Daftar Sekarang <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>SMK Pesat</h5>
                    <p>Mendidik generasi masa depan dengan keterampilan, pengetahuan, dan nilai-nilai yang membuat mereka siap menghadapi tantangan global.</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Kontak Kami</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Jl. Pendidikan No. 123, Jakarta</p>
                    <p><i class="fas fa-phone me-2"></i> (021) 1234-5678</p>
                    <p><i class="fas fa-envelope me-2"></i> info@smkPesat.sch.id</p>
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
            const cards = document.querySelectorAll('#siswaContainer .col-md-4');
            
            cards.forEach(card => {
                const name = card.querySelector('.card-title').textContent.toLowerCase();
                const nis = card.querySelector('.card-text:nth-of-type(1)').textContent.toLowerCase();
                const kelas = card.querySelector('.kelas-badge').textContent.toLowerCase();
                
                if (name.includes(searchValue) || nis.includes(searchValue) || kelas.includes(searchValue)) {
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
                const cards = document.querySelectorAll('#siswaContainer .col-md-4');
                cards.forEach(card => {
                    if (filterValue === 'all') {
                        card.style.display = '';
                        return;
                    }
                    
                    const kelas = card.querySelector('.kelas-badge').textContent.toLowerCase();
                    if (kelas.toLowerCase().includes(filterValue.toLowerCase())) {
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