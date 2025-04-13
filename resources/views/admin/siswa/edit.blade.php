<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="bg-white rounded-lg shadow-md p-6 max-w-3xl mx-auto">
        <h2 class="text-lg font-semibold mb-4">Edit Siswa</h2>
        <form action="{{ route('admin.siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1 font-medium">Nama</label>
                    <input type="text" name="nama" value="{{ $siswa->nama }}" class="w-full border rounded px-3 py-2" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium">NIS</label>
                    <input type="text" name="nis" value="{{ $siswa->nis }}" class="w-full border rounded px-3 py-2" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium">Kelas</label>
                    <input type="text" name="kelas" value="{{ $siswa->kelas }}" class="w-full border rounded px-3 py-2" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium">Foto (opsional)</label>
                    <input type="file" name="foto" class="w-full border rounded px-3 py-2">
                    @if($siswa->foto)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $siswa->foto) }}" class="h-20 w-20 rounded-full object-cover">
                        </div>
                    @endif
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Update</button>
                <a href="{{ route('admin.siswa.index') }}" class="ml-2 text-gray-600 hover:underline">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
