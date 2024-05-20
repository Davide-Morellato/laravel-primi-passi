<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link 1</title>
</head>

<body>
    <div>
        <h1>
            CIAO!
        </h1>
        <p>
            Benvenuto nel Primo link.
        </p>
        <p>
            Se vuoi tornare alla homepage, clicca
            <a href="{{ URL::to('/') }}"> qui </a>
        </p>
    </div>
</body>

</html>