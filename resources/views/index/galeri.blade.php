<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4">Galeri</h2>
        <a href="{{ route('galeri.create') }}" class="btn btn-success mb-3">Tambah Gambar</a>
        <div class="row">
          @foreach($galeris as $galeri)
          <div class="col-md-3">
            <div class="card mb-4">
              <img src="{{ asset('storage/' . $galeri->gambar) }}" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">{{ $galeri->deskripsi }}</p>
                <a href="{{ route('galeri.edit', $galeri->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus gambar ini?')">Hapus</button>
                </form>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      
</body>
</html>