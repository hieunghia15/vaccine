@extends('admin.layout-admin', [
    'title' => __($title ?? 'Cấp vai trò cho người dùng'),
])
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-1" style="margin-right: -5%">
                    <a href="{{ route('admin.permissions.user-role') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="col-sm-6">
                    <h1>Cấp vai trò cho người dùng</h1>
                </div>
                <div class="col-sm-5" style="margin-left: 4%">
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
                            <h3 class="card-title" style="margin-top:0.25rem">Cấp vai trò cho {{ $user->name }}</h3>
                        </div>                    
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-4">
                            <div class="form-group">
                                
                                <div class="form-row">
                                    <form method="POST" action="{{ route('admin.permissions.insert-role', [$user->id]) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('Patch')
                                        @if (!$all_column_roles)
                                            <h6>Không có vai trò</h6>
                                            <h6>Chọn vai trò</h6>
                                        @else
                                            <h6>Chọn vai trò</h6>
                                        @endif
                                        @foreach ($role as $roles)
                                            @if (isset($all_column_roles))
                                                <div class="form-check">
                                                    <input class="form-check-input"
                                                        {{ $roles->id == $all_column_roles->id ? 'checked' : '' }}
                                                        type="checkbox" name="role[]" id="{{ $roles->id }}"
                                                        value="{{ $roles->name }}">
                                                    <label class="form-check-label" for="{{ $roles->id }}">
                                                        {{ $roles->name }}
                                                    </label>
                                                </div>
                                            @else
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="role[]"
                                                        id="{{ $roles->id }}" value="{{ $roles->name }}">
                                                    <label class="form-check-label" for="{{ $roles->id }}">
                                                        {{ $roles->name }}
                                                    </label>
                                                </div>
                                            @endif
                                        @endforeach
                                        <br>
                                        <button type="submit" class="btn btn-primary">Cấp vai trò</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
