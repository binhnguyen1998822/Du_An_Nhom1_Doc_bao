@extends('blog.layout.header')
@section('seo')
    <?php if($blog == null){
        header("Location: http://xiaomifirm.com/blog"); /* Redirect browser */
        exit();
    } ?>
    <title>{{ $blog->title }}</title>
    <meta content="{{ $blog->desperation }}" name="description"/>
    <meta property="og:url" content="{{ asset('blog') }}/{{ $blog->slug }}"/>
    <meta property="og:title" content="{{ $blog->title }}" />
    <meta property="og:description" content="{{ $blog->desperation }}"/>
    <meta property="og:image" content="{{ $blog->image }}" />
@endsection
@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ $blog->image }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h1 class="title">{{ $blog->title }}</h1>

                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="container">
            <div class="section section-text">

                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h3 class="title">{{ $blog->title }}</h3>
                        {!!$blog->content!!}
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
@endsection

