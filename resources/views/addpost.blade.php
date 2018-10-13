@extends('layouts.header')
@section('content')
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Thêm bài viết</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            {{ csrf_field() }}
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Tiêu đề</label>
                                            <input type="text" id="post_title" name="post_title" class="form-control form-control-alternative" placeholder="Tiêu đề bài viết" value="" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">Slug</label>
                                                <input type="text" id="post_slug" name="post_slug" class="form-control form-control-alternative" placeholder="Slug" autocomplete="off" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-last-name">Ảnh</label>
                                                <input type="text" id="post_image" name="post_image" class="form-control form-control-alternative" placeholder="Slug" autocomplete="off" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group ">
                                            <label>Nội dung</label>
                                            <input id="mytextarea" type="text" name="post_content" placeholder="Nội dung">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Thêm bài viết</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
@endsection
