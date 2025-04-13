<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Guru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="bg-white rounded-lg shadow-md p-6 max-w-3xl mx-auto">
        <h2 class="text-lg font-semibold mb-4">Edit Guru</h2>
        <form action="{{ route('admin.guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1 font-medium">Nama</label>
                    <input type="text" name="nama" value="{{ $guru->nama }}" class="w-full border rounded px-3 py-2" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium">NIP</label>
                    <input type="text" name="nip" value="{{ $guru->nip }}" class="w-full border rounded px-3 py-2" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium">Mata Pelajaran</label>
                    <input type="text" name="mata_pelajaran" value="{{ $guru->mata_pelajaran }}" class="w-full border rounded px-3 py-2" required>
                </div>
                <div>
                    <label class="block mb-1 font-medium">Foto (opsional)</label>
                    <input type="file" name="foto" class="w-full border rounded px-3 py-2">
                    @if($guru->foto)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $guru->foto) }}" class="h-20 w-20 rounded-full object-cover">
                        </div>
                    @endif
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
                <a href="{{ route('admin.guru.index') }}" class="ml-2 text-gray-600 hover:underline">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
