@extends('admin.layout-admin', [
    'title' => __($title ?? 'Danh sách hãng sản xuất'),
])
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách hãng sản xuất</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách hãng sản xuất</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    @livewire('manufacture-search')   
@endsection
