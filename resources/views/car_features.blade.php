<!-- resources/views/car_features.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitur Mobil</title>
</head>
<body>
    <h1>Fitur Mobil</h1>
    <ul>
        @foreach($features as $feature)
            <li>{{ $feature->nama }}</li>
        @endforeach
    </ul>
</body>
</html>
