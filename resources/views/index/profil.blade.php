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
        <h2 class="mb-4">Profil Sekolah</h2>
        <a href="{{ route('profil.create') }}" class="btn btn-success mb-3">Tambah Profil</a>
        <table class="table table-bordered">
          <thead class="table-dark">
            <tr>
              <th>Visi</th>
              <th>Misi</th>
              <th>Alamat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($profils as $profil)
            <tr>
              <td>{{ $profil->visi }}</td>
              <td>{{ $profil->misi }}</td>
              <td>{{ $profil->alamat }}</td>
              <td>
                <a href="{{ route('profil.edit', $profil->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('profil.destroy', $profil->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data profil ini?')">Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    
</body>
</html>