<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>
    </head>

    <body>
        <header>
            <p><a href="/">Pizzeria MamaMia</a></p>
            <nav>
                <ul>
                    <li><a href="pizza">Pizza</a></li>
                    <li><a href="drinks">Drinks</a></li>
                    <li><a href="delivery">Delivery</a></li>
                    <li><a href="order">Your order</a></li>
                </ul>
            </nav>
        </header>
        @yield('content')
        <footer>
            <p>Our contacts: <span>345-456-345</span></p>
        </footer>
    </body>
</html>
