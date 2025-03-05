<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Ulasan</title>
</head>
<body>
    <h2>Daftar Ulasan</h2>

    <table border="1">
        <thead>
            <tr>
                <th>Nama customer</th>
                <th>Ulasan</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
 @foreach($cars->reviews as $review)
            <td>{{ $review->nama }}</td>
            <td>{{ $review->isi }}</td>
            <td>{{ $review->nilai }}</td>
             @endforeach
            </tr>
        </tbody>
    </table>
</body>
</html>
