@extends('admin.layout-admin', [
    'title' => __($title ?? 'Xem bài viết'),
])
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-1" style="margin-right: -5%">
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="col-sm-6">
                    <h1>Xem bài viết</h1>
                </div>
                <div class="col-sm-5" style="margin-left: 4%">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Xem bài viết</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="callout callout-info">
                        <h4>{{ $posts->title }}</h4>
                    </div>
                    <div class="invoice p-3 mb-3">
                        {!! $posts->content !!}
                        <h5 class="row no-print float-right">Theo {{ $posts->postBy->fullname }}</h5>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
