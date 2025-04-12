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
        <h2 class="mb-4">Ekstrakurikuler</h2>
        <a href="{{ route('eskul.create') }}" class="btn btn-success mb-3">Tambah Eskul</a>
        <table class="table table-bordered">
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($eskuls as $eskul)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $eskul->nama }}</td>
              <td>{{ Str::limit($eskul->deskripsi, 100) }}</td>
              <td>
                <a href="{{ route('eskul.edit', $eskul->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('eskul.destroy', $eskul->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data eskul ini?')">Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</body>
</html>