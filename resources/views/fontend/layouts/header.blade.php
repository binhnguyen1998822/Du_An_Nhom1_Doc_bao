<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    @yield('seo')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('fimware/images/favico.ico') }}"/>
    <link href="{{ asset('assets/css/material-kit.min.css?v=2.1.0') }}"
          rel="stylesheet"/>
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
</head>
<body class="sections-page sidebar-collapse">
<style>
    img {
        width: 100%;
    }
</style>
<nav class="navbar  bg-white   fixed-top  navbar-expand-lg " id="sectionsNav">

    <div class="container">
        <div class="navbar-translate">

            <a class="navbar-brand" href="/">
                Dự án 2 </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                        <a href="/blog/{{$cat->category_slug}}" class=" nav-link">
                            <i class="material-icons"></i>{{$cat->category_name}}
                        </a>
                    </li>
                @endforeach
                @if(Auth::id() == null)
                    <li class="button-container nav-item iframe-extern">
                        <button class="btn btn-round btn-primary" data-toggle="modal" data-target="#loginModal">
                            Đăng nhập
                        </button>
                    </li>
                @else
                    <li class="dropdown nav-item">
                        Hello! <a>{{Auth::user()->name }}</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<div class="modal fade" id="loginModal" tabindex="-1" role="">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                    <div class="card-header card-header-primary text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="material-icons">clear</i>
                        </button>

                        <h4 class="card-title">Đăng nhập</h4>
                    </div>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="{{ url('login') }}">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="material-icons">email</i></div>
                                    </div>
                                    <input class="form-control" name="email" placeholder="Username" type="text">
                                </div>
                            </div>

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="material-icons">lock_outline</i></div>
                                    </div>
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary my-4">Đăng nhập</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

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
<script src="https://demos.creative-tim.com/material-kit-pro/assets/js/core/jquery.min.js"
        type="text/javascript"></script>
<script src="https://demos.creative-tim.com/material-kit-pro/assets/js/core/popper.min.js"
        type="text/javascript"></script>
<script src="https://demos.creative-tim.com/material-kit-pro/assets/js/core/bootstrap-material-design.min.js"
        type="text/javascript"></script>
</html>