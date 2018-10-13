@extends('layouts.header')
@section('content')
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Danh sách danh mục</h3>
                        <a href="{{ url('admin/addcat') }}" class="btn btn-icon btn-primary float-right">
                            <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                            <span class="btn-inner--text">Thêm danh mục</span>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Sửa</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($cat as $v)
                                <tr>
                                    <td scope="row">{{$v->id}}</td>
                                    <td scope="row">{{$v->category_name}}</td>
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
