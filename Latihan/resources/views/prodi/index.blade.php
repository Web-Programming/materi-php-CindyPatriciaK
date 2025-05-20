<!-- resources/views/prodi/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Program Studi</title>
</head>

<body>
  <h1>Daftar Program Studi</h1>

  @if(session('status'))
    <p>{{ session('status') }}</p>
  @endif

  <a href="{{ route('prodi.create') }}">Tambah Program Studi</a>

  <ul>
    @foreach ($listprodi as $prodi)
    <li>{{ $prodi->nama }} ({{ $prodi->kodeprodi }})
      <a href="{{ route('prodi.edit', $prodi->id) }}">Edit</a>
      <form action="{{ route('prodi.destroy', $prodi->id) }}" method="POST" style="display:inline;">
      @csrf
      @method('DELETE')
      <button type="submit">Hapus</button>
      </form>
    </li>
  @endforeach
  </ul>
</body>

</html>