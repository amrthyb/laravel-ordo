<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjumlahan Angka</title>
</head>
<body>
    <h2>Penjumlahan Angka</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="GET" action="{{ url('/tambah') }}">
        <label for="angka1">Angka 1:</label>
        <input type="number" name="angka1" value="{{ $angka1 }}" required>

        <label for="angka2">Angka 2:</label>
        <input type="number" name="angka2" value="{{ $angka2 }}" required>

        <button type="submit">Hitung</button>
    </form>

    @if(isset($hasil))
        <h3>Hasil: {{ $hasil }}</h3>
    @endif
</body>
</html>
