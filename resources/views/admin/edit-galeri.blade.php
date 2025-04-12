<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Galeri</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Edit Galeri</h2>
  <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label class="form-label">Gambar Lama</label><br>
      <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="Gambar" width="200">
    </div>
    <div class="mb-3">
      <label for="gambar" class="form-label">Gambar Baru (Opsional)</label>
      <input type="file" class="form-control" id="gambar" name="gambar">
    </div>
    <div class="mb-3">
      <label for="deskripsi" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $galeri->deskripsi }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('galeri.index') }}" class="btn btn-secondary">Kembali</a>
  </form>
</div>
</body>
</html>