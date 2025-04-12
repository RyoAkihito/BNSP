<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Profil Sekolah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Edit Profil Sekolah</h2>
  <form action="{{ route('profil.update', $profil->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="judul" class="form-label">Judul</label>
      <input type="text" class="form-control" id="judul" name="judul" value="{{ $profil->judul }}">
    </div>
    <div class="mb-3">
      <label for="isi" class="form-label">Isi</label>
      <textarea class="form-control" id="isi" name="isi" rows="4">{{ $profil->isi }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('profil.index') }}" class="btn btn-secondary">Kembali</a>
  </form>
</div>
</body>
</html>