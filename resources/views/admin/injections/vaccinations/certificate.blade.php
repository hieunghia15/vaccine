@extends('admin.layout-admin',[
'title' => __($title ?? 'Giấy xác nhận tiêm chủng')
])
@section('main')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Giấy xác nhận tiêm chủng</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title">Giấy xác nhận tiêm chủng</h3>
                            </div>
                            <div class="col-md-6">
                        <a href="{{route('admin.injections.print-certificate',$users->id)}}" class="float-right">
                            <i class="fa fa-print"></i> In giấy xác nhận</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-4">
                        <div class="row ng-star-inserted">
                            <div class="col-lg-12">
                                <div class="w-100 text-center">
                                    <p class="text-uppercase sfbold mb-1">
                                        CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM
                                    </p>
                                    <p class="sfbold">Độc lập - Tự do - Hạnh phúc</p>
                                </div>
                                <div class="w-100 mt-4 text-center mb-4">
                                    <h4 class="sfbold">
                                        CHỨNG NHẬN TIÊM CHỦNG COVID-19
                                    </h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <p class="mb-1">Họ và tên</p>
                                        <p class="sfbold text-dark">
                                            {{$users->fullname}}
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <p class="mb-1">Ngày sinh</p>
                                        <p class="sfbold text-dark">
                                            {{Carbon\Carbon::parse($users->day_of_birth)->format('d-m-Y') }}
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <p class="mb-1">Số CCCD/Hộ chiếu</p>
                                        <p class="sfbold text-dark">
                                            {{$users->identification}}
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <p class="mb-1">Số điện thoại</p>
                                        <p class="sfbold text-dark">
                                            {{$users->phone}}
                                        </p>
                                    </div>
                                    <div class="col-12">
                                        <p class="mb-1">Địa chỉ</p>
                                        <p class="sfbold text-dark">
                                            @if($users->address)
                                            {{$users->address}} - {{$users->ward->name}} -
                                            {{$users->ward->district->name}} -
                                            {{$users->ward->district->province->name}}
                                            @else
                                            {{$users->ward->name}} -
                                            {{$users->ward->district->name}} -
                                            {{$users->ward->district->province->name}}
                                            @endif
                                        </p>
                                    </div>
                                    <div class="col-12">
                                        <p class="mb-1">Kết luận</p>
                                        <p class="sfbold text-dark">
                                            Đã được tiêm phòng vắc xin phòng bệnh Covid-19
                                        </p>
                                    </div>
                                    <div class="col-12 table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead _ngcontent-rcr-c8="">
                                                <tr class="bg-light text-dark">
                                                    <th class="text-center">Mũi số</th>
                                                    <th class="text-center">Thời gian tiêm</th>
                                                    <th class="text-center">Tên vắc xin</th>
                                                    <th class="text-center">Số lô</th>
                                                    <th class="text-center">Nơi tiêm</th>
                                                </tr>
                                            </thead>
                                            <tbody _ngcontent-rcr-c8="">
                                                <!---->
                                                @foreach ($certificates as $certificate)
                                                <td class="text-center" scope="row">
                                                    {{$certificate->dose->dose}}
                                                </td>
                                                <td class="text-center">
                                                    
                                                    {{Carbon\Carbon::parse($certificate->vaccination_time)->format('d/m/Y
                                                    - H:i') }}
                                                </td>
                                                <td class="text-center">
                                                    {{$certificate->vaccine->name}}
                                                </td>
                                                <td class="text-center">
                                                    {{$certificate->lot_number}}
                                                </td>
                                                <td class="text-center">
                                                    {{$certificate->vaccinationSite->location}}
                                                </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!---->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Chỉnh sửa mũi tiêm</h3>
                    </div>
                    <div class="card-body table-responsive p-4">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th>Mũi số</th>
                                    <th>Tên vắc xin</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($certificates as $key => $certificate)
                                <tr>
                                    <td> {{$certificate->dose->dose}}</td>
                                    <td>{{$certificate->vaccine->name}}</td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.injections.edit-dose',$certificate->id)}}">
                                            <i class="fas fa-pencil-alt"></i>
                                            Cập nhật
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection