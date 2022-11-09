@extends('admin.layout-admin', [
    'title' => __($title ?? 'Xoá bài viết'),
])
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-1" style="margin-right: -5%">
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="col-sm-6">
                    <h1>Xoá bài viết</h1>
                </div>
                <div class="col-sm-5" style="margin-left: 4%">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Xoá bài viết</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1">
                </div>
                <div class="col-10">
                    <div class="card card-success">
                        <div class="card-header">
                            <h5>Bạn có muốn xóa bài viết này?</h5>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('admin.posts.delete', $posts->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('Delete')
                            <div class="card-body">
                               <h5>{{$posts->title}}</h5>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                        <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Trở lại</a>                                      
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-1">
                </div>
            </div>
        </div>
    </section>
   
@endsection
