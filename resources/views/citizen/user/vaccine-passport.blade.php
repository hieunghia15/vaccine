@extends('citizen.layout-user', [
    'title' => __($title ?? 'Hộ chiếu vắc xin'),
])
@section('main')
    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Hộ chiếu vắc xin</h1>
                </div>
            </div>
        </div>
    </section>
    @if ($certificates != null)
        <div class="container p-4">
            <div class="row">
                <!-- Main content -->
                <div class="col-md-12">
                    <!--Vaccination Certificate-->
                    <div class="w-100 text-center" style="font-weight: bold; font-size: 15px;">
                        <p class="text-uppercase sfbold mb-1">
                            CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM
                        </p>
                        <p class="sfbold">SOCIALIST REPUBLIC OF VIETNAM</p>
                    </div>
                    <div class="w-100 mt-4 text-center mb-4">
                        <h3 style="font-weight: bold;">
                            HỘ CHIẾU VẮC XIN
                        </h3>
                        <h5>(VACCINE PASSPORT)</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>Họ và tên (Name):</p>
                    <p>Ngày sinh (BOD):</p>
                    <p>Loại vắc xin (Vaccine Type):</p>
                    <p>Vắc xin (Vaccine):</p>
                    <p>Hãng sản xuất (Manufacture):</p>
                    <p>Số mũi (Dose):</p>
                    <p>Ngày tiêm (Date of vaccination):</p>
                </div>
                <div class="col-md-4">
                    <p> {{ $users->fullname }}</p>
                    <p> {{ Carbon\Carbon::parse($users->day_of_birth)->format('d-m-Y') }}</p>
                    <p>{{$certificate_latest->vaccine->vaccineType->name}}</p>
                    <p>{{$certificate_latest->vaccine->name}}</p>
                    <p>{{$certificate_latest->vaccine->manufacture->name}}</p>
                    <p>{{$certificates->count()}}</p>
                    <p>
                        {{ Carbon\Carbon::parse($certificate_latest->created_at)->format('d-m-Y') }}
                    </p>
                </div>
                <div class="col-md-3"> 
                  {{$qrcode}}
                    <p class="text-center mt-4" style="margin-left:-25%">
                        Mã QR hết hạn vào ngày  {{ Carbon\Carbon::parse($expiries)->format('d-m-Y') }}
                    </p>
                </div>
            </div>
            <!-- /.col -->
            <!-- /.content -->
        </div>
    @else
        <div class="mt-4" style="font-size: 50px; font-weight:400;">
            <center>
                <h3>Chưa có hộ chiếu vắc xin</h3>
            </center>
        </div>
    @endif
@endsection
