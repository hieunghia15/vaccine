@extends('admin.layout-admin', [
    'title' => __($title ?? 'Danh sách bài viết'),
])
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách bài viết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách bài viết</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" style="margin-top:0.25rem">Danh sách bài viết</h3>
                            <a href="{{ route('admin.posts.create') }}" class="btn btn-outline-success btn-sm"
                                style="margin-left:2%">Tạo</a>
                            <div class="card-tools" style="margin-top:0.25rem">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Tìm kiếm">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-4">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tiêu đề</th>
                                        <th>Danh mục</th>
                                        <th>Tác giả</th>                                     
                                        <th>Trạng thái</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $key => $value)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $value->title }}</td>
                                            <td>{{ $value->category->name }}</td>
                                            <td>{{ $value->postBy->fullname }}</td>                                      
                                            <td class="project-state">
                                                @if ($value->is_actived == 0)
                                                    <span class="badge badge-warning">Đã duyệt</span>
                                                @else
                                                    <span class="badge badge-success">Đã duyệt</span>
                                                @endif
                                            </td>
                                            <td class="project-actions text-right">
                                                <a class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top"
                                                    title="Xem" href="{{ route('admin.posts.show', $value->id) }}">
                                                    <i class="fas fa-eye">
                                                    </i>
                                                </a>
                                                <a class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top"
                                                    title="Cập nhật" href="{{ route('admin.posts.edit', $value->id) }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <a class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top"
                                                    title="Xoá" href="{{ route('admin.posts.destroy', $value->id) }}">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
