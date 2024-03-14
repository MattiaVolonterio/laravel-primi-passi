<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-primi-passi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <h1 class="my-3 fw-bold">{{ $title }}</h1>
        <h2 class="mb-4">{{ $subtitle }}</h2>

        <p>Una lista di animali per provare la stampa di un'array:</p>

        <ul class="m-0 p-0">
            @forelse($animals as $animal)
            <li class="list-group">{{ $loop->iteration }}. {{ $animal }}</li>
            @empty
            <li>Nessun Animale</li>
            @endforelse
        </ul>
    </div>
</body>

</html>