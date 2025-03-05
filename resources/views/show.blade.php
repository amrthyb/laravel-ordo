<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $car->nama }}</h1>
    <p>{{ $car->jenis }} - {{ number_format($car->harga, 2) }}</p>

    <h2>Ulasan Mobil:</h2>
    <ul>
        @foreach ($car->reviews as $review)
            <li>
                <strong>{{ $review->nama }}</strong> (Nilai: {{ $review->nilai }})<br>
                {{ $review->isi }}
            </li>
        @endforeach
    </ul>

</body>
</html>
