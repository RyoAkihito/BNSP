<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Pendaftaran Siswa Online</h1>
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:underline">Home</a></li>
                <li><a href="#" class="hover:underline">Tentang</a></li>
                <li><a href="#" class="hover:underline">Kontak</a></li>
            </ul>
            <!-- Tombol Logout -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded text-white font-semibold">
                    Logout
                </button>
            </form>
        </div>
    </nav>

    <!-- Full Page 1:1 Layout Section -->
    <section class="min-h-screen flex items-center justify-center p-6">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 w-full max-w-5xl">
            <!-- Left Side: Welcome Message -->
            <div class="flex items-center justify-center bg-blue-500 text-white p-8 rounded-lg shadow-lg">
                <div class="text-center">
                    <h2 class="text-3xl font-bold mb-4">Selamat Datang di Pendaftaran Siswa</h2>
                    <p class="text-lg mb-4">Sistem pendaftaran siswa yang cepat, mudah, dan terpercaya. Silakan isi form di samping untuk mendaftar sebagai siswa baru.</p>
                    <p class="text-sm">Pastikan semua data yang Anda masukkan sesuai dengan dokumen resmi.</p>
                </div>
            </div>

            <!-- Right Side: Form Pendaftaran -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h4 class="text-2xl font-semibold mb-6 text-center text-gray-800">Form Pendaftaran Siswa</h4>

                @if ($errors->any())
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST">
                    @csrf
                    <!-- Nama Lengkap (Varchar) -->
                    <div class="mb-4">
                        <label for="nama_lengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap" required>
                    </div>

                    <!-- NISN (Varchar) -->
                    <div class="mb-4">
                        <label for="nisn" class="block text-sm font-medium text-gray-700">NISN</label>
                        <input type="text"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            id="nisn" name="nisn" placeholder="Masukkan NISN" required>
                    </div>

                    <!-- Jenis Kelamin (Enum: Laki-Laki, Perempuan) -->
                    <div class="mb-4">
                        <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                        <select
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="Laki-Laki" selected>Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <!-- Alamat (Text) -->
                    <div class="mb-4">
                        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                        <textarea
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            id="alamat" name="alamat" placeholder="Masukkan alamat lengkap" rows="3" required></textarea>
                    </div>

                    <!-- Sekolah Asal (Varchar) -->
                    <div class="mb-4">
                        <label for="sekolah_asal" class="block text-sm font-medium text-gray-700">Sekolah Asal</label>
                        <input type="text"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            id="sekolah_asal" name="sekolah_asal" placeholder="Masukkan nama sekolah asal" required>
                    </div>

                    <!-- Created At (Timestamp) - Hidden Input -->
                    <input type="hidden" name="created_at" value="{{ now() }}">

                    <!-- Status Pendaftaran (Enum: Diterima, Cadangan, Tidak Diterima) - Hidden Input -->
                    <input type="hidden" name="status_pendaftaran" value="Cadangan">

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit"
                            class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Daftar Sekarang
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4">
        <p>© 2025 Pendaftaran Siswa Online. Semua Hak Dilindungi.</p>
    </footer>

</body>

</html>