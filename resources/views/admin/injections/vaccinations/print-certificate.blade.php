<!DOCTYPE html>
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>In giấy xác nhận {{ $users->phone }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
        }

        p {
            font-size: 10px
        }

        .table td {
            padding: 1px;
        }

        .table td,
        .table th {
            padding: 0;
        }

        .table td p {
            font-size: 8px;
            margin-left: 1rem
        }

        .page-break {
            page-break-before: always;
        }
    </style>

<body>
    <div class="row">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center font-weight-bold">
                    <p class="text-uppercase" style="font-size: 14px;margin-bottom:-10px">
                        CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM
                    </p>
                    <u style="font-size: 10px;">Độc lập - Tự do - Hạnh phúc</u>
                </div>
                <div class="text-center font-weight-bold" style="font-size: 12px;">
                    <p>
                        GIẤY XÁC NHẬN ĐÃ TIÊM VẮC XIN COVID-19
                    </p>
                    <p>(CERTIFICATE OF COVID-19 VACCINATION)</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>
                    Họ và tên/Name: <b>{{ $users->fullname }}</b>
                </p>
                <p>
                    Giới tính/Sex: <b>{{ $users->gender }}</b>
                </p>
                <p>
                    Ngày sinh/Day of birth: <b>{{ Carbon\Carbon::parse($users->day_of_birth)->format('d-m-Y') }}</b>
                </p>
                <p>
                    Số CCCD/Hộ chiếu/ID: <b>{{ $users->identification }}</b>
                </p>
                <p>
                    Số điện thoại/Phone: <b>{{ $users->phone }}</b>
                </p>
                <p>
                    Địa chỉ/Address: @if ($users->address)
                       <b>{{ $users->address }} - {{ $users->ward->name }} -
                        {{ $users->ward->district->name }} -
                        {{ $users->ward->district->province->name }}</b>
                    @else
                       <b>{{ $users->ward->name }} - {{ $users->ward->district->name }} -
                        {{ $users->ward->district->province->name }}</b>
                    @endif
                </p>
                <p>Mã QR Code/QR CODE:</p>
                <img src="data:image/png;base64, {{ base64_encode(QrCode::size(100)->generate($encode)) }} ">
                <p style="font-size: 11px"><b>Đã được tiêm chủng vắc xin COVID-19/Has been vaccinated with COVID-19 vaccine:</b></p>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <tr>
                    <th colspan="2">
                        <p class="text-center" style="margin-top:10px">Bảng tiêm chủng/Vaccination table</p>
                    </th>
                </tr>
                <tr>
                    <td class="col-md-6">
                      <p><b>Mũi 1/First dose - {{ $certificates[0]->dose->description }}</b></p>
                        <p>Ngày/Date: <b>{{ $certificates[0]->vaccination_time }}</b></p>
                        <p>Loại vắc xin/Vaccine: <b>{{ $certificates[0]->vaccine->name }}</b></p>
                    </td>
                    <td class="text-center col-md-6">
                        <p>Cơ sở tiêm chủng/Immunization unit</p>
                        <p style="margin-top:-14px">Ký tên, đóng dấu</p>
                        <p style="margin-top:-14px">(Sign and stamp)</p>
                    </td>
                </tr>
                <tr>
                    @if (isset($certificates[1]))
                        <td class="col-md-6">
                            <p><b>Mũi 2/Second dose - {{ $certificates[1]->dose->description }}</b></p>
                            <p>Ngày/Date: <b>{{ $certificates[1]->vaccination_time }}</b></p>
                            <p>Loại vắc xin/Vaccine: <b>{{ $certificates[1]->vaccine->name }}</b></p>
                        </td>
                    @else
                        <td class="col-md-6">
                            <p>Mũi 2/Second dose</p>
                            <p>Ngày/Date:</p>
                            <p>Loại vắc xin/Vaccine:</p>
                        </td>
                    @endif
                    <td class="text-center col-md-6">
                        <p>Cơ sở tiêm chủng/Immunization unit</p>
                        <p style="margin-top:-14px">Ký tên, đóng dấu</p>
                        <p style="margin-top:-14px">(Sign and stamp)</p>
                    </td>
                </tr>
                <tr>
                    @if (isset($certificates[2]))
                        <td class="col-md-6">
                            <p><b>Mũi 3/Third dose - {{ $certificates[2]->dose->description }}</b></p>
                            <p>Ngày/Date: <b>{{ $certificates[2]->vaccination_time }}</b></p>
                            <p>Loại vắc xin/Vaccine: <b>{{ $certificates[2]->vaccine->name }}</b></p>
                        </td>
                    @else
                        <td class="col-md-6">
                            <p>Mũi 3/Third dose</p>
                            <p>Ngày/Date:</p>
                            <p>Loại vắc xin/Vaccine:</p>
                        </td>
                    @endif
                    <td class="text-center col-md-6">
                        <p>Cơ sở tiêm chủng/Immunization unit</p>
                        <p style="margin-top:-14px">Ký tên, đóng dấu</p>
                        <p style="margin-top:-14px">(Sign and stamp)</p>
                    </td>
                </tr>
                <tr>
                   
                    @if (isset($certificates[3]))
                        <td class="col-md-6">
                            <p><b>Mũi 4/Fourth dose - {{ $certificates[3]->dose->description }}</b></p>
                            <p>Ngày/Date: <b>{{ $certificates[3]->vaccination_time }}</b></p>
                            <p>Loại vắc xin/Vaccine: <b>{{ $certificates[3]->vaccine->name }}</b></p>
                        </td>
                    @else
                        <td class="col-md-6">
                            <p>Mũi 4/Fourth dose</p>
                            <p>Ngày/Date:</p>
                            <p>Loại vắc xin/Vaccine:</p>
                        </td>
                    @endif
                    <td class="text-center col-md-6">
                        <p>Cơ sở tiêm chủng/Immunization unit</p>
                        <p style="margin-top:-14px">Ký tên, đóng dấu</p>
                        <p style="margin-top:-14px">(Sign and stamp)</p>
                    </td>
                </tr>
            </table>
            <div class="page-break"></div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <tr>
                    @if (isset($certificates[4]))
                        <td class="col-md-6">
                            <p><b>Mũi 5/Fifth dose - {{ $certificates[4]->dose->description }}</b></p>
                            <p>Ngày/Date: <b>{{ $certificates[4]->vaccination_time }}</b></p>
                            <p>Loại vắc xin/Vaccine: <b>{{ $certificates[4]->vaccine->name }}</b></p>
                        </td>
                    @else
                        <td class="col-md-6">
                            <p>Mũi 5/Fifth dose</p>
                            <p>Ngày/Date:</p>
                            <p>Loại vắc xin/Vaccine:</p>
                        </td>
                    @endif
                    <td class="text-center col-md-6">
                        <p>Cơ sở tiêm chủng/Immunization unit</p>
                        <p style="margin-top:-14px">Ký tên, đóng dấu</p>
                        <p style="margin-top:-14px">(Sign and stamp)</p>
                    </td>
                </tr>
                <tr>
                    @if (isset($certificates[5]))
                        <td class="col-md-6">
                            <p><b>Mũi 6/Sixth dose - {{ $certificates[5]->dose->description }}</b></p>
                            <p>Ngày/Date: <b>{{ $certificates[5]->vaccination_time }}</b></p>
                            <p>Loại vắc xin/Vaccine: <b>{{ $certificates[5]->vaccine->name }}</b></p>
                        </td>
                    @else
                        <td class="col-md-6">
                            <p>Mũi 6/Sixth dose</p>
                            <p>Ngày/Date:</p>
                            <p>Loại vắc xin/Vaccine:</p>
                        </td>
                    @endif
                    <td class="text-center col-md-6">
                        <p>Cơ sở tiêm chủng/Immunization unit</p>
                        <p style="margin-top:-14px">Ký tên, đóng dấu</p>
                        <p style="margin-top:-14px">(Sign and stamp)</p>
                    </td>
                </tr>
                <tr>
                    @if (isset($certificates[6]))
                        <td class="col-md-6">
                            <p><b>Mũi 7/Seventh dose - {{ $certificates[6]->dose->description }}</b></p>
                            <p>Ngày/Date: <b>{{ $certificates[6]->vaccination_time }}</b></p>
                            <p>Loại vắc xin/Vaccine: <b>{{ $certificates[6]->vaccine->name }}</b></p>
                        </td>
                    @else
                        <td class="col-md-6">
                            <p>Mũi 7/Seventh dose</p>
                            <p>Ngày/Date:</p>
                            <p>Loại vắc xin/Vaccine:</p>
                        </td>
                    @endif
                    <td class="text-center col-md-6">
                        <p>Cơ sở tiêm chủng/Immunization unit</p>
                        <p style="margin-top:-14px">Ký tên, đóng dấu</p>
                        <p style="margin-top:-14px">(Sign and stamp)</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
