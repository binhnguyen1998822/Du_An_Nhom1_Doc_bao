@extends('fontend.layouts.header')
@section('seo')
    <title>{{ $blog->post_title }}</title>
    <meta content="{{ $blog->desperation }}" name="description"/>
    <meta property="og:url" content="{{ asset('blog') }}/{{ $blog->post_slug }}"/>
    <meta property="og:title" content="{{ $blog->post_title }}" />
    <meta property="og:description" content="{{ $blog->desperation }}"/>
    <meta property="og:image" content="{{ $blog->post_image }}" />
@endsection
@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ $blog->post_image }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h1 class="title">{{ $blog->post_title }}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="container">
            <div class="section section-text">

                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h3 class="title">{{ $blog->post_title }}</h3>
                        {!!$blog->post_content!!}
                    </div>
                </div>
            </div>

            <div class="section section-blog-info">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="blog-tags">
                                    Tags:
                                    <span class="badge badge-primary badge-pill">Photography</span>
                                    <span class="badge badge-primary badge-pill">Stories</span>
                                    <span class="badge badge-primary badge-pill">Castle</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a href="#pablo" class="btn btn-google btn-round float-right">
                                    <i class="fa fa-google"></i> 232
                                </a>
                                <a href="#pablo" class="btn btn-twitter btn-round float-right">
                                    <i class="fa fa-twitter"></i> 910
                                </a>
                                <a href="#pablo" class="btn btn-facebook btn-round float-right">
                                    <i class="fa fa-facebook-square"></i> 872
                                    <div class="ripple-container"></div></a>

                            </div>
                        </div>

                        <hr>
                    </div>
                </div>
            </div>

            <div class="section section-comments">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <div class="media-area">
                            <h3 class="title text-center">{{$cmtcont}} Bình luận</h3>
                            @foreach($cmt as $c)
                            <div class="media">
                                <a class="float-left" href="#pablo">
                                    <div class="avatar">
                                        <img class="media-object" src="{{ asset('assets/img/avatar.jpg') }}" alt="...">
                                    </div>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">{{$c->auth->name}} <small>· {{$c->created_at}}</small></h4>
                                    <h6 class="text-muted"></h6>

                                    <p>{{$c->comment_content}}</p>

                                    <div class="media-footer">
                                        <a href="#pablo" class="btn btn-danger btn-link float-right">
                                            <i class="material-icons">favorite</i> 0
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @if(Auth::id() ==! null)
                        <h3 class="title text-center">Bạn muốn nói gì?</h3>
                        <div class="media media-post">
                            <a class="author float-left" href="#pablo">
                                <div class="avatar">
                                    <img class="media-object" alt="64x64" src="{{ asset('assets/img/avatar.jpg') }}">
                                </div>
                            </a>
                            <form action="{{url('comment')}}" method="post" class="media-body">
                                {{ csrf_field() }}
                                <input hidden value="{{$blog->id}}" name="post_ID">
                                    <div class="form-group label-floating bmd-form-group">
                                        <label class="form-control-label bmd-label-floating" for="exampleBlogPost"> Viết những gì bạn đang nghĩ...</label>
                                        <textarea class="form-control" rows="5" id="exampleBlogPost" name="comment_content"></textarea>
                                    </div>
                                    <div class="media-footer">
                                        <input type="submit" class="btn btn-primary btn-round btn-wd float-right">
                                    </div>
                            </form>
                        </div> <!-- end media-post -->
                        @else
                            <div class="media-footer">
                                <input type="submit" value="Đăng nhập" class="btn btn-primary btn-round btn-wd">
                            </div>
                        @endif
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>
@endsection

