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
            <?php
                if(!isset($_COOKIE["id"])) {
                    echo "You have not done registration!<br>";
                } else {
                    echo "You is registrated<br>";
                }
            ?>
            <nav>
                <ul>
                    <li><a href="pizza">Pizza</a></li>
                    <li><a href="waters">Waters</a></li>
                    <li><a href="order">Orders</a></li>
                    <li><a href="user">Account</a></li>
                    <li><a href="delivery">Delivery</a></li>
                </ul>
            </nav>
            <?=session('message')?>
        </header>
        @yield('content')
        <footer>
            <p>Our contacts: <span>345-456-345</span></p>
        </footer>
    </body>
</html>
