<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>
            About Us!
        </h1>
        <ul>
            @foreach ($cars as $car)
                <li>
                    {{ $car["brand"] . " " . $car["model"] }}
                </li>
            @endforeach
        </ul>
    </body>
</html>