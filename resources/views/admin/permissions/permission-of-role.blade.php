@extends('admin.layout-admin',[
'title' => __($title ?? 'Danh sách quyền hạn của vai trò')
])
@section('main')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Danh sách quyền hạn của vai trò</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Danh sách quyền hạn của vai trò</li>
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
                        <h3 class="card-title" style="margin-top:0.25rem">Danh sách quyền hạn của vai trò</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-4">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Vai trò</th>
                                    <th>Quyền hạn</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($role as $key => $value)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <a>{{ $value->name }}</a>
                                    </td>
                                    <td>
                                        @foreach ($value->permissions as $permission )
                                        <span class="badge badge-primary">{{ $permission->name }}</span>
                                        @endforeach                                  
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm"
                                        data-toggle="tooltip" data-placement="top" title="Phân quyền" 
                                        href="{{route('admin.permissions.assign-permission',['id'=>$value->id])}}">
                                            <i class="fas fa-user-cog"></i>
                                          
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