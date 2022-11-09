@extends('admin.layout-admin', [
    'title' => __($title ?? 'Cấp quyền cho vai trò'),
])
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-1" style="margin-right: -5%">
                    <a href="{{ route('admin.permissions.role-permission') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="col-sm-6">
                    <h1>Cấp quyền cho vai trò</h1>
                </div>
                <div class="col-sm-5" style="margin-left: 4%">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Cấp quyền cho vai trò</li>
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
                            <h3 class="card-title" style="margin-top:0.25rem">Cấp quyền cho vai trò "{{ $role->name }}"</h3>
                        </div>                    
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-4">
                            <div class="form-group">
                                
                                <div class="form-row">
                                    <form method="POST"
                                    action="{{ route('admin.permissions.insert-permission', [$role->id]) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('Patch')
                                    @foreach ($permission as $key => $permissions)
                                    <div class="form-check">
                                        <input class="check" type="checkbox" 
                                        @foreach ($get_permissions as
                                            $key=>$get_per)
                                        @if ($get_per->id==$permissions->id)
                                        checked
                                        @endif
                                        @endforeach
                                        name="permission[]"
                                        id="{{$permissions->id}}" value="{{$permissions->name}}">
                                        <label class="form-check-label" for="{{$permissions->id}}">
                                            {{$permissions->name}}
                                        </label>
                                    </div>
                                    @endforeach
                                    <br>
                                    <button type="submit" class="btn btn-primary">Cấp quyền</button>                                       
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
