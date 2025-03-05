<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mobil</title>
</head>
<body>
    <h2>Daftar Mobil</h2>

    <table border="1">
        <thead>
            <tr>
                <th>Nama Mobil</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Tanggal Pembuatan</th>
                <th>Nama Pabrik</th>
                <th>Alamat Pabrik</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
                <tr>
                    <td>{{ $car->nama }}</td>
                    <td>{{ $car->jenis }}</td>
                    <td>{{ number_format($car->harga, 2) }}</td>
                    <td>{{ $car->tanggal_pembuatan }}</td>
                    <td>{{ $car->manufactures ? $car->manufactures->nama : 'Tidak Ada Pabrik' }}</td>
                    <td>{{ $car->manufactures ? $car->manufactures->alamat : 'Tidak Ada Pabrik' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
