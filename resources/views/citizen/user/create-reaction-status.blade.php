@extends('citizen.layout-user', [
    'title' => __($title ?? 'Nhập trạng thái sau tiêm'),
])
@section('main')
    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Nhập trạng thái sau tiêm</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
    <div class="container p-4">
        <div class="row">
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header bg-info">
                        <h3 class="card-title text-white">Nhập thông tin</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('citizen.user.store-reaction-status')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Họ và tên <span class="text-danger">*</span>:</label>
                                    <input type="text" class="form-control" disabled="true"
                                        value="{{ $users->fullname }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Thời gian xảy ra phản ứng <span class="text-danger">*</span>:</label>
                                    <input type="datetime-local" class="form-control" value="{{ $reaction_time }}"
                                        name="reaction_time" id="reaction_time">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Tên mũi vắc xin <span class="text-danger">*</span>:</label>
                                    <select class="custom-select" name="dose" id="dose">
                                        @foreach ($certificates as $certificate)
                                            <option value="{{ $certificate->dose->dose }}">Mũi
                                                {{ $certificate->dose->dose }} - {{ $certificate->vaccine->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Bạn có gặp phải bất kì triệu chứng nào dưới đây sau 7 ngày tiêm vắc xin
                                        hay không?:</label>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="col-md-8">Triệu chứng</th>
                                                        <th class="col-md-1">Có</th>
                                                        <th class="col-md-1">Không</th>
                                                        <th class="col-md-1">Không rõ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="col-md-9">1. Đau/sưng tại chỗ tiêm</th>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="pain" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="pain" value="Không" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="pain" value="Không rõ"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-9">2. Nôn/buồn nôn</th>
                                                        <td> <input class="form-check-input" type="radio" name="nausea"
                                                                value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio" name="nausea"
                                                                value="Không" checked></td>
                                                        <td> <input class="form-check-input" type="radio" name="nausea"
                                                                value="Không rõ"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-9">3. Tiêu chảy/đau bụng
                                                        </th>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="diarrhea" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="diarrhea" value="Không" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="diarrhea" value="Không rõ"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-9">4. Sốt </th>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="fever" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="fever" value="Không" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="fever" value="Không rõ"></td>
                                                    </tr>                                              
                                                    <tr>
                                                        <th class="col-md-9">5. Đau họng/chảy nước mũi</th>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="sore_throat" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="sore_throat" value="Không" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="sore_throat" value="Không rõ"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-9">6. Ớn lạnh</th>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="chills" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="chills" value="Không" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="chills" value="Không rõ"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-9">7. Đau đầu</th>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="headache" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="headache" value="Không" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="headache" value="Không rõ"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-9">8. Phát ban</th>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="rash" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="rash" value="Không" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="rash" value="Không rõ"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>9. Các triệu chứng khác (nếu có):</p>
                                            <input type="text" class="form-control col-md-6" name="other" value="{{old('other')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" form-row">
                                <div class="form-group col-md-6">
                                    <label>Nếu có các triệu chứng, bạn có điệu trị các triệu chứng đó không?:</label>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="primary-checkbox">Có</label>
                                            <input class="form-check-input" type="radio" name="therapy" value="Có" style="margin-left:5px">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="primary-checkbox">Không</label>
                                            <input class="form-check-input" type="radio" name="therapy" value="Không" checked style="margin-left:5px">
                                        </div>
                                    </div>                                                                 
                                    <br>
                                    <label>Nếu có, bạn đã điều trị ở đâu?:</label>
                                    <br>
                                    <input type="text" class="form-control" value="{{old('place')}}"
                                        name="place">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Tình trạng hiện tại (bình thường, hồi phục, có biến chứng,...)<span class="text-danger">*</span>:</label>
                                    <br>
                                    <input type="text" class="form-control @error('current_status') is-invalid @enderror" value="{{old('current_status')}}"
                                        name="current_status">
                                        @error('current_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="reset" class="btn btn-info">Nhập lại</button>
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
