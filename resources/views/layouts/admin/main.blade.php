@include('layouts.admin.header')
<body class="sb-nav-fixed">
@include('layouts.admin.navbar')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        @include('layouts.admin.sidebar')
    </div>
    <div id="layoutSidenav_content">
        @yield('contact')
        @include('layouts.admin.footer')
    </div>
</div>
    @include('layouts.admin.script')
</body>
</html>



