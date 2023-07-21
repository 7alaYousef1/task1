<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="describtion" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>laravel</title>
    <!--Fontawesome v 4.7-->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        .nav-link.active {
            background: -webkit-linear-gradient(315deg, #1e30f3 0%, #e21e80 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body>
    <header class="main-header">
        <div class="container1">
            <nav>
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="images/footer.png" alt="" width="80" height="80"></a>
                </div>


                <ul class="link uli">

                    <li class="arbic">
                        <a
                            class="nav-link
{{ request()->routeIs('sign_in') ? 'active' : '' }} "href="{{ route('sign_in') }}">sign_in</a>
                    </li>
                    <li class="arbic">
                        <a class="nav-link
{{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">home</a>
                    </li>
                    <li class="arbic">
                        <a
                            class="nav-link
{{ request()->routeIs('item') ? 'active' : '' }} "href="{{ route('item') }}">item</a>
                    </li>
                    <li class="arbic">
                        <a class="nav-link
{{ request()->routeIs('category') ? 'active' : '' }}"
                            href="{{ route('category') }}">category</a>
                    </li>
                    <li class="arbic">
                        <a class="nav-link
{{ request()->routeIs('conact') ? 'active' : '' }}"
                            href="{{ route('conact') }} ">conact</a>
                    </li>
                </ul>


            </nav>
        </div>
    </header>
    @yield('content')
    <footer>
        <div class="footer">
            <ul>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">CONECT</a></li>
                <li><a href="#">BRANDS</a></li>
                <li><a href="#">SALE</a></li>
                <li><a href="#">RETERNS</a></li>
                <li><a href="#">FAQS</a></li>
                <li><a href="#">PRIVECY & COOKIES</a></li>
                <li><a href="#">TERMS & CONDITIONS</a></li>
            </ul>
        </div>
        <div class="ameera">
            <div class="hala">
                <img src="images/home/logo.png" alt="" height="100" width="100">
                <div class="toto">
                    <h4>GLYO</h4>
                    <p>
                        AT GLYO, WE STRIVE TO MAKE GREAT CLOTHIN. WE TELL THE STORIES OF THE HUMANS WHO WEAR IT.
                    </p>
                    <p class="foot">2015 &copy Glyo.All rights resrved</p>
                </div>
            </div>
            <div class="shatha">
                <div class="apple1 apps">
                    <div class="apple1 ">
                        <a href="#"><i class="fa fa-apple" aria-hidden="true"></i></a>
                        <p>Avalible on the App store</p>
                    </div>
                    <div class="apple1 ">
                        <a href="#"><i class="fa fa-apple" aria-hidden="true"></i></a>
                        <p>Avalible on the Google play</p>
                    </div>
                </div>
                <div class="apple3">
                    <form>

                        <button type="button" class="ap3">
                            <i class="fa fa-envelope-o"></i>
                        </button>
                        <input type="email" placeholder="SIGN UP FOR OUR NEWSLETTER" />
                        <button type="submit" class="app3">
                            <i class="fa fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="shorog">
                <div class="sho1 sho3">
                    <a href="#" class="fl"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </div>

                <div class="sho1 sho2">
                    <a href="#"><i class="fa fa-cc-visa" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-cc-discover" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a>

                </div>
            </div>
        </div>
    </footer>
</body>

</html>
