@extends('layouts.header')
@section('content')
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Danh sách bài viết</h3>
                        <a href="{{ url('admin/addpost') }}" class="btn btn-icon btn-primary float-right">
                            <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                            <span class="btn-inner--text">Thêm bài viết</span>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên bài viết</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Lượt xem</th>
                                <th scope="col">Bình luận</th>
                                <th scope="col">Người viết</th>
                                <th scope="col">Thời gian</th>
                                <th scope="col">Sửa</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($post as $v)
                                <tr>
                                    <td scope="row">{{$v->id}}</td>
                                    <td scope="row">{{$v->post_title}}</td>
                                    <td scope="row">{{isset($v->cat) ? $v->cat->category_name : 'Không xác định' }}</td>
                                    <td scope="row">{{$v->countview->count()}}</td>
                                    <td scope="row">{{$v->countcmt->count()}}</td>
                                    <td scope="row">{{$v->auth->name}}</td>
                                    <td scope="row">{{$v->created_at}}</td>
                                    <td scope="row">Edit</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
@endsection
