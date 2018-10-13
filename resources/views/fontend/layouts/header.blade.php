<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    @yield('seo')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('fimware/images/favico.ico') }}"/>
    <link href="{{ asset('assets/css/material-kit.min.css?v=2.1.0') }}"
          rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
</head>
<body class="sections-page sidebar-collapse">
<style>
    img {
        width: 100%;
    }
</style>
<nav class="navbar  bg-white   fixed-top  navbar-expand-lg "  id="sectionsNav">

    <div class="container">
        <div class="navbar-translate">

            <a class="navbar-brand" href="/">
                Dự án 2 </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                @foreach(Call::category() as $cat)
                <li class="dropdown nav-item">
                    <a href="/blog/{{$cat->category_slug}}" class=" nav-link" >
                        <i class="material-icons"></i>{{$cat->category_name}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<footer class="footer">
    <div class="container">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="{{ asset('') }}">
                        Nhóm 1
                    </a>
                </li>
                <li>
                    <a href="#">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="{{ asset('blog') }}">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="#">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
            , made with <i class="material-icons">favorite</i> by
            <a href="https://fb.me/tbn198" target="_blank">Tô Nguyên</a> for a better web.
        </div>
    </div>
</footer>
</body>
</html>