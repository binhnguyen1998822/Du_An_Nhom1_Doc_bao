@extends('layouts.header')
@section('content')
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Thêm danh mục</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            {{ csrf_field() }}
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Danh mục</label>
                                            <input type="text" id="category_name" name="category_name" class="form-control form-control-alternative" placeholder="Tên danh mục" value="" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Slug</label>
                                            <input type="text" id="category_slug" name="category_slug" class="form-control form-control-alternative" placeholder="Slug" value="" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Thêm danh mục</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
@endsection
