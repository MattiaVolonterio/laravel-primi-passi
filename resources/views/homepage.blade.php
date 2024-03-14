<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-primi-passi</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    <h2>{{ $subtitle }}</h2>

    <ul>
        @forelse($animals as $animal)
        <li>{{ $loop->iteration }}. {{ $animal }}</li>
        @empty
        <li>Nessun Animale</li>
        @endforelse
    </ul>
</body>

</html>