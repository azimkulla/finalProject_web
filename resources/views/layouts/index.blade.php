<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SmartShop</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('styles')
</head>
<body>

@include('parts.header')



@yield('content')


<footer class="contacts" id="contacts">
    <div class="footer__phr">
        <h1>Contact Us</h1>
    </div>
    <div class="phone__num">
        <p>+7 777 777 77 77</p>
    </div>
    <div class="email">
        <p>smartshop@gmail.com</p>
    </div>


</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function slowScroll(id) {
        $('html, body').animate({
            scrollTop: $(id).offset().top
        }, 1200);
    };
</script>

@yield('scripts')

</body>
</html>
