@extends('admin.layout-admin',[
'title' => __($title ?? 'Danh sách địa điểm tiêm')
])
@section('main')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Danh sách địa điểm tiêm</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Danh sách địa điểm tiêm</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@livewire('vaccination-site-search')          
@endsection