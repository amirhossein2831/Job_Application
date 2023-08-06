<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{asset('image/logo/FJLogo.png')}}" alt="Logo" width="30"
                 style="margin-top: -5px;border-radius: 5px" height="24" class="d-inline-block  align-text-top">
            <span style="margin-right: 10px">Find Job</span>
        </a>
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="/">Home</a>         {{-- need two handle active page--}}
                </li>
                @if(!Auth()->check())
                    <li class="nav-item">
                        <a class="nav-link" href="/register/seeker">Employee Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login" >User Login</a>
                    </li>
                @endif
                @if(Auth()->check())
                    <li class="nav-item">
                        <a class="nav-link" id="logout" >Log Out</a>
                    </li>
                @endif
                <form action="/logout" id="logoutForm" method="post">@csrf</form>

            </ul>
        </div>
    </div>
</nav>

@yield('contact')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>
<script>
    const logout = document.querySelector('#logout');
    const logoutForm = document.querySelector('#logoutForm');
    logout.addEventListener('click', evt => {
        logoutForm.submit();
    })
</script>
</body>
</html>
