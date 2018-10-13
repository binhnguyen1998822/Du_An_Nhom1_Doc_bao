@extends('fontend.layouts.header')
@section('seo')
    <title>Blog</title>
@endsection
@section('content')
    <div class="blogs-3">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                    @foreach($blog as $v)
                        <div class="card card-plain card-blog">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card-header card-header-image">
                                        <img class="img img-raised" src="{{ $v->image }}" >
                                        <div class="colored-shadow" style="background-image: url(&quot;{{ $v->image }};); opacity: 1;"></div></div>
                                </div>
                                <div class="col-md-8">

                                    <h3 class="card-title">
                                        <a href="{{ asset('blog') }}/{{ $v->slug }}">{{ $v->title }}</a>
                                    </h3>
                                    <p class="card-description">
                                        {{ $v->desperation  }}
                                        <a href="{{ asset('blog') }}/{{ $v->slug }}"> Đọc thêm </a>
                                    </p>
                                    <p class="author">
                                        by
                                        <a href="#pablo">
                                            <b>Tô Nguyên</b>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

