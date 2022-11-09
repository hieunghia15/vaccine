@extends('citizen.layout-user', [
    'title' => __($title ?? 'Giấy xác nhận tiêm chủng'),
])
@section('main')
    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Giấy xác nhận tiêm chủng</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
    <div class="container p-4">
        <div class="row">
            <!-- Main content -->
            <div class="col-12">
                <!--Vaccination Certificate-->
                @if ($certificates != null)
                    <div class="row ng-star-inserted">
                        <div class="col-lg-9">
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
                                        {{ $users->fullname }}
                                    </p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <p class="mb-1">Ngày sinh</p>
                                    <p class="sfbold text-dark">
                                        {{ Carbon\Carbon::parse($users->day_of_birth)->format('d-m-Y') }}
                                    </p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <p class="mb-1">Số CCCD/Hộ chiếu</p>
                                    <p class="sfbold text-dark">
                                        {{ $users->identification }}
                                    </p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <p class="mb-1">Số điện thoại</p>
                                    <p class="sfbold text-dark">
                                        {{ $users->phone }}
                                    </p>
                                </div>
                                <div class="col-12">
                                    <p class="mb-1">Địa chỉ</p>
                                    <p class="sfbold text-dark">
                                        @if ($users->address)
                                            {{ $users->address }} - {{ $users->ward->name }} -
                                            {{ $users->ward->district->name }} -
                                            {{ $users->ward->district->province->name }}
                                        @else
                                            {{ $users->ward->name }} - {{ $users->ward->district->name }} -
                                            {{ $users->ward->district->province->name }}
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
                                                <tr class="ng-star-inserted">
                                                    <td class="text-center" scope="row">
                                                        {{ $certificate->dose->dose }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ Carbon\Carbon::parse($certificate->vaccination_time)->format('d/m/Y
                                                                                                    - H:i') }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $certificate->vaccine->name }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $certificate->lot_number }}
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $certificate->vaccinationSite->location }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!---->
                            </div>
                        </div>
                        @if ($vaccination_number->count() == 1)
                            <div class="col-lg-3 p-4 shadow-lg h-100 bgcovid"
                                style="background:#bed74e; border-radius: 8px 8px 8px 0!important;">
                            @else
                                <div class="col-lg-3 p-4 shadow-lg h-100 bgcovid"
                                    style="background:#347846; border-radius: 8px 8px 8px 0!important;">
                        @endif
                        <div class="row">
                            <div class="col-12 text-center">
                                {{ $qrcode }}
                            </div>
                            <div class="col-12 text-center text-white mt-2 mb-2 pt-2 pb-2 pl-0 pr-0">
                                <h4 class="text-uppercase sfbold text-white">
                                    Đã tiêm
                                    {{ $certificates->count() }}
                                    mũi vắc xin
                                </h4>
                            </div>
                            <div class="col-12">
                                <div class="w-100 p-3 bg-white" style="border-radius: 8px 8px 8px 0!important;">
                                    <div class="d-flex text-dark">
                                        <div style="width: 30px">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="w-100">
                                            <p class="mb-1">Họ và tên</p>
                                            <p class="sfbold text-dark">
                                                {{ $users->fullname }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div style="width: 30px">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <div class="w-100">
                                            <p class="mb-1">Ngày sinh</p>
                                            <p class="sfbold">
                                                {{ Carbon\Carbon::parse($users->day_of_birth)->format('d-m-Y') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex text-dark">
                                        <div style="width: 30px">
                                            <i class="fa fa-credit-card"></i>
                                        </div>
                                        <div class="w-100">
                                            <p class="mb-1">CCCD/HC</p>
                                            <p class="sfbold">
                                                {{ $users->identification }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--
                </div> --}}
                    <!----->
                    <!-- /.card -->
            </div>
            <!-- /.col -->
        @else
            <div style="font-size: 50px; font-weight:400;">
                <center>
                    <h3>Chưa có chứng nhận tiêm chủng</h3>
                </center>
            </div>
            @endif
            <!-- /.content -->
        </div>
    </div>
    </div>
@endsection
