 <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/resources/css/dashboard-item.css')}}">
    <link rel="stylesheet" href="{{asset('/resources/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/resources/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('/resources/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('/resources/css/style.css')}}">
</head>
<body>
<header>
    <h2 class="logo">PHP MVC Framework</h2>
    <nav class="navigation">
        <a class="a" href="/">Home</a>
        <a class="a" href="/contact">Contact</a>
        <a class="a" href="/about">About</a>
        <a class="a" href="/service">Service</a>
        @if(!Auth()->check())
            <a href="/login/employee">
                <button  class="brn_login" style="width: 150px">Employee Login</button>
            </a>
            <a href="/login">
                <button  class="brn_login">User Login</button>
            </a>
        @endif
        @if(Auth()->check() && Auth::user()->user_type === "employee" )
            <a class="a " href="/pay/subscription">subscribe</a>         {{-- need two handle active page--}}
        @endif
        @if(Auth()->check())
            <a class="a" href="/profile">Profile</a>
            <a class="a" href="/dashboard">Dashboard</a>
            <a><button  class="brn_login" id="logout">Log out</button></a>
        @endif
        <form action="/logout" id="logoutForm" method="post">@csrf</form>
    </nav>
</header>
<x-successes.success-register />

@yield('contact')

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="{{asset('resources/js/SubmitForm.js')}}"></script>
<script src="{{asset('resources/js/AnimationLabel.js')}}"></script>

</body>
</html>
