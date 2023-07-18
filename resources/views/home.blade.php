<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            nav {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <h1>
            Home!
        </h1>
        <nav>
            <ul>
                <li>
                    <a href="{{ route('about-us') }}">
                        About Us!
                    </a>
                </li>
            </ul>
        </nav>
    </body>
</html>