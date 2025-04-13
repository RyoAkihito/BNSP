<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekolah Pesat - Website Resmi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Sekolah Pesat</h1>
            <ul class="hidden md:flex space-x-6">
                <li><a href="#" class="hover:underline font-medium">Beranda</a></li>
                <li><a href="#" class="hover:underline">Profil</a></li>
                <li><a href="#" class="hover:underline">Program</a></li>
                <li><a href="#" class="hover:underline">Akademik</a></li>
                <li><a href="#" class="hover:underline">Fasilitas</a></li>
                <li><a href="#" class="hover:underline">Berita</a></li>
                <li><a href="#" class="hover:underline">Kontak</a></li>
            </ul>
            <a href="/pendaftaran" class="bg-yellow-500 hover:bg-yellow-600 px-4 py-2 rounded text-white font-semibold">
                Pendaftaran
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative h-96 bg-blue-700 overflow-hidden">
        <div class="absolute inset-0 flex items-center justify-center bg-blue-800 bg-opacity-60">
            <div class="text-center text-white p-6 max-w-3xl">
                <h2 class="text-4xl font-bold mb-4">Selamat Datang di Sekolah Pesat</h2>
                <p class="text-xl mb-8">Membentuk Generasi Unggul, Berkarakter, dan Berprestasi</p>
                <div class="flex justify-center space-x-4">
                    <a href="/pendaftaran" class="bg-yellow-500 hover:bg-yellow-600 px-6 py-3 rounded-md text-white font-bold">
                        Daftar Sekarang
                    </a>
                    <a href="/profil" class="bg-transparent border-2 border-white hover:bg-white hover:text-blue-700 px-6 py-3 rounded-md text-white font-bold transition duration-300">
                        Tentang Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Keunggulan Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-12 text-blue-800">Keunggulan Sekolah Pesat</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Keunggulan 1 -->
                <div class="bg-blue-50 p-6 rounded-lg shadow-md text-center">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Kurikulum Terbaik</h4>
                    <p class="text-gray-600">Menerapkan kurikulum nasional dengan pengayaan internasional untuk mempersiapkan siswa menghadapi tantangan global.</p>
                </div>
                
                <!-- Keunggulan 2 -->
                <div class="bg-blue-50 p-6 rounded-lg shadow-md text-center">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Fasilitas Modern</h4>
                    <p class="text-gray-600">Dilengkapi dengan fasilitas pembelajaran modern, laboratorium lengkap, dan infrastruktur pendukung kegiatan siswa.</p>
                </div>
                
                <!-- Keunggulan 3 -->
                <div class="bg-blue-50 p-6 rounded-lg shadow-md text-center">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-semibold mb-2">Tenaga Pengajar Profesional</h4>
                    <p class="text-gray-600">Guru-guru berpengalaman dan tersertifikasi yang berkomitmen untuk mengembangkan potensi setiap siswa.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Pendidikan -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-12 text-blue-800">Program Pendidikan</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Program 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-blue-500 text-white font-bold py-2 px-4 rounded-t mb-4 -mx-6 -mt-6">
                        <h4 class="text-lg">SD Pesat</h4>
                    </div>
                    <p class="text-gray-600 mb-4">Memberikan pondasi pendidikan dasar yang kokoh dengan penekanan pada karakter, keterampilan dasar, dan kreativitas.</p>
                    <a href="#" class="text-blue-600 font-medium hover:underline">Selengkapnya →</a>
                </div>
                
                <!-- Program 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-blue-600 text-white font-bold py-2 px-4 rounded-t mb-4 -mx-6 -mt-6">
                        <h4 class="text-lg">SMP Pesat</h4>
                    </div>
                    <p class="text-gray-600 mb-4">Mengembangkan kemampuan akademik dan soft skills siswa melalui pembelajaran inovatif dan berbasis proyek.</p>
                    <a href="#" class="text-blue-600 font-medium hover:underline">Selengkapnya →</a>
                </div>
                
                <!-- Program 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-blue-700 text-white font-bold py-2 px-4 rounded-t mb-4 -mx-6 -mt-6">
                        <h4 class="text-lg">SMA Pesat</h4>
                    </div>
                    <p class="text-gray-600 mb-4">Mempersiapkan siswa untuk pendidikan tinggi dan karir dengan program akademik unggulan dan pengembangan bakat.</p>
                    <a href="#" class="text-blue-600 font-medium hover:underline">Selengkapnya →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Prestasi Terbaru -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-12 text-blue-800">Prestasi Terbaru</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Prestasi 1 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md flex">
                    <div class="bg-yellow-500 text-white p-4 rounded-lg mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-1">Juara 1 Olimpiade Matematika Nasional</h4>
                        <p class="text-gray-600 mb-2">Tim Sekolah Pesat meraih juara pertama dalam Olimpiade Matematika Nasional 2025.</p>
                        <p class="text-sm text-gray-500">Maret 2025</p>
                    </div>
                </div>
                
                <!-- Prestasi 2 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md flex">
                    <div class="bg-yellow-500 text-white p-4 rounded-lg mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-1">Medali Emas Kompetisi Robotik</h4>
                        <p class="text-gray-600 mb-2">Tim Robotik Pesat berhasil meraih medali emas dalam Kompetisi Robotik Tingkat Asia.</p>
                        <p class="text-sm text-gray-500">Februari 2025</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 text-center">
                <a href="#" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-md">
                    Lihat Semua Prestasi
                </a>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section class="py-16 bg-blue-50">
        <div class="container mx-auto px-4">
            <h3 class="text-3xl font-bold text-center mb-12 text-blue-800">Apa Kata Mereka?</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimoni 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-200 rounded-full mr-4"></div>
                        <div>
                            <h5 class="font-semibold">Budi Santoso</h5>
                            <p class="text-sm text-gray-500">Orangtua Siswa</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Sekolah Pesat memberikan pendidikan berkualitas dan membentuk karakter anak saya menjadi lebih baik. Guru-gurunya sangat profesional dan peduli dengan perkembangan setiap anak."</p>
                </div>
                
                <!-- Testimoni 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-200 rounded-full mr-4"></div>
                        <div>
                            <h5 class="font-semibold">Siti Rahayu</h5>
                            <p class="text-sm text-gray-500">Alumni</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Bersekolah di Pesat memberi saya bekal yang sangat berharga. Saya tidak hanya mendapat ilmu akademik tetapi juga keterampilan hidup yang membantu saya sukses di perguruan tinggi."</p>
                </div>
                
                <!-- Testimoni 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-200 rounded-full mr-4"></div>
                        <div>
                            <h5 class="font-semibold">Ahmad Hidayat</h5>
                            <p class="text-sm text-gray-500">Siswa Kelas 11</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Program ekstrakurikuler di Sekolah Pesat sangat beragam dan membantu saya mengembangkan minat dan bakat. Guru-guru juga sangat suportif dan selalu memotivasi kami untuk berprestasi."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Agenda & Pengumuman -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Agenda Kegiatan -->
                <div>
                    <h3 class="text-2xl font-bold mb-6 text-blue-800">Agenda Kegiatan</h3>
                    <ul class="space-y-4">
                        <li class="border-b border-gray-200 pb-4">
                            <div class="flex items-start">
                                <div class="bg-blue-100 text-blue-800 font-bold rounded p-2 text-center mr-4 min-w-[60px]">
                                    <span class="block">20</span>
                                    <span class="block text-sm">Apr</span>
                                </div>
                                <div>
                                    <h5 class="font-semibold">Seminar Pendidikan Karakter</h5>
                                    <p class="text-gray-600 text-sm">08:00 - 12:00 | Aula Utama</p>
                                </div>
                            </div>
                        </li>
                        <li class="border-b border-gray-200 pb-4">
                            <div class="flex items-start">
                                <div class="bg-blue-100 text-blue-800 font-bold rounded p-2 text-center mr-4 min-w-[60px]">
                                    <span class="block">25</span>
                                    <span class="block text-sm">Apr</span>
                                </div>
                                <div>
                                    <h5 class="font-semibold">Kompetisi Sains Internal</h5>
                                    <p class="text-gray-600 text-sm">09:00 - 15:00 | Laboratorium</p>
                                </div>
                            </div>
                        </li>
                        <li class="border-b border-gray-200 pb-4">
                            <div class="flex items-start">
                                <div class="bg-blue-100 text-blue-800 font-bold rounded p-2 text-center mr-4 min-w-[60px]">
                                    <span class="block">02</span>
                                    <span class="block text-sm">Mei</span>
                                </div>
                                <div>
                                    <h5 class="font-semibold">Open House Sekolah Pesat</h5>
                                    <p class="text-gray-600 text-sm">08:00 - 16:00 | Kampus Pesat</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-4">
                        <a href="#" class="text-blue-600 font-medium hover:underline">Lihat Semua Agenda →</a>
                    </div>
                </div>
                
                <!-- Pengumuman -->
                <div>
                    <h3 class="text-2xl font-bold mb-6 text-blue-800">Pengumuman Terbaru</h3>
                    <div class="space-y-4">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h5 class="font-semibold mb-2">Pembukaan Pendaftaran Tahun Ajaran 2025/2026</h5>
                            <p class="text-gray-600 text-sm mb-2">Pendaftaran siswa baru untuk tahun ajaran 2025/2026 telah dibuka. Kuota terbatas!</p>
                            <p class="text-xs text-gray-500">10 April 2025</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h5 class="font-semibold mb-2">Pengumuman Hasil Seleksi Beasiswa Pesat</h5>
                            <p class="text-gray-600 text-sm mb-2">Hasil seleksi program beasiswa Pesat telah diumumkan. Silakan cek di laman resmi sekolah.</p>
                            <p class="text-xs text-gray-500">5 April 2025</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h5 class="font-semibold mb-2">Perubahan Jadwal Ujian Tengah Semester</h5>
                            <p class="text-gray-600 text-sm mb-2">Terdapat perubahan jadwal ujian tengah semester untuk kelas 10 dan 11. Lihat jadwal terbaru di sini.</p>
                            <p class="text-xs text-gray-500">1 April 2025</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="text-blue-600 font-medium hover:underline">Lihat Semua Pengumuman →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Pendaftaran -->
    <section class="py-12 bg-blue-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-2xl font-bold mb-4">Bergabunglah dengan Sekolah Pesat</h3>
            <p class="text-lg mb-8 max-w-2xl mx-auto">Daftarkan putra-putri Anda untuk mendapatkan pendidikan berkualitas dan membentuk masa depan yang lebih cerah.</p>
            <a href="/pendaftaran" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold px-8 py-3 rounded-md text-lg inline-block">
                Daftar Sekarang
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Kontak -->
                <div>
                    <h4 class="text-xl font-bold mb-4">Sekolah Pesat</h4>
                    <p class="mb-2">Jl. Pendidikan No. 123, Jakarta</p>
                    <p class="mb-2">Telepon: (021) 1234-5678</p>
                    <p class="mb-2">Email: info@sekolahpesat.ac.id</p>
                </div>
                
                <!-- Link Cepat -->
                <div>
                    <h4 class="text-xl font-bold mb-4">Link Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-blue-300">Beranda</a></li>
                        <li><a href="#" class="hover:text-blue-300">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-blue-300">Program Akademik</a></li>
                        <li><a href="#" class="hover:text-blue-300">Fasilitas</a></li>
                        <li><a href="#" class="hover:text-blue-300">Berita & Acara</a></li>
                    </ul>
                </div>
                
                <!-- Informasi -->
                <div>
                    <h4 class="text-xl font-bold mb-4">Informasi</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-blue-300">Pendaftaran</a></li>
                        <li><a href="#" class="hover:text-blue-300">Beasiswa</a></li>
                        <li><a href="#" class="hover:text-blue-300">Kalender Akademik</a></li>
                        <li><a href="#" class="hover:text-blue-300">Karir</a></li>
                        <li><a href="#" class="hover:text-blue-300">FAQ</a></li>
                    </ul>
                </div>
                
                <!-- Sosial Media -->
                <div>
                    <h4 class="text-xl font-bold mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-4 mb-4">
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 w-10 h-10 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#" class="bg-blue-400 hover:bg-blue-500 w-10 h-10 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                        </a>
                        <a href="#" class="bg-red-600 hover:bg-red-700 w-10 h-10 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2