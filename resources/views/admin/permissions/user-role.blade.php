@extends('admin.layout-admin', [
    'title' => __($title ?? 'Cấp vai trò cho người dùng'),
])
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cấp vai trò cho người dùng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Cấp vai trò cho người dùng</li>
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
                            <h3 class="card-title" style="margin-top:0.25rem">Cấp vai trò cho người dùng</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-4">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên ngươi dùng</th>
                                        <th>Vai trò</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $key => $value)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <a>{{ $value->fullname }}</a>
                                            </td>
                                            <td>
                                                @foreach ($value->roles as $role)
                                                    <span class="badge badge-primary">{{ $role->name }}</span>
                                                @endforeach
                                            </td>
                                            <td class="project-actions text-right">
                                                <a class="btn btn-primary btn-sm"
                                                data-toggle="tooltip" data-placement="top" title="Cấp vai trò"
                                                    href="{{ route('admin.permissions.assign-role', [$value->id]) }}">
                                                    <i class="fas fa-user-cog"></i>
                                                   
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <ul class="pagination pagination-sm m-0 float-right">
                            {{ $user->links() }}
                        </ul>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
