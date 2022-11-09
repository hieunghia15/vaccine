@extends('citizen.layout-user', [
    'title' => __($title ?? 'Cập nhật trạng thái sau tiêm'),
])
@section('main')
    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Cập nhật trạng thái sau tiêm</h1>
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
                        <h3 class="card-title text-white">Cập nhật thông tin</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form acction="{{ route('citizen.user.update-reaction-status', $reaction_statuses->id) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Họ và tên <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" disabled="true"
                                        value="{{ $users->fullname }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Thời gian xảy ra phản ứng <span class="text-danger">*</span></label>
                                    <input type="datetime-local" class="form-control"
                                        value="{{ $reaction_statuses->reaction_time }}" name="reaction_time"
                                        id="reaction_time">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Tên mũi vắc xin <span class="text-danger">*</span></label>
                                    <select class="custom-select" name="dose" id="dose">
                                        <option value="{{ $certificates->dose->dose }}" selected>Mũi
                                            {{ $certificates->dose->dose }} - {{ $certificates->vaccine->name }}</option>
                                        @foreach ($certificate as $value)
                                            <option value="{{ $value->dose->dose }}">Mũi
                                                {{ $value->dose->dose }} - {{ $value->vaccine->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Bạn có gặp phải bất kì triệu chứng nào dưới đây sau 7 ngày tiêm
                                        vắc xin
                                        hay không?</label>
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
                                                        @if ($reaction_statuses->pain == 'Không')
                                                            <td> <input class="form-check-input" type="radio"
                                                                    name="pain" value="Có"></td>
                                                            <td> <input class="form-check-input" type="radio"
                                                                    name="pain" value="Không" checked></td>
                                                            <td> <input class="form-check-input" type="radio"
                                                                    name="pain" value="Không rõ"></td>
                                                        @elseif($reaction_statuses->pain == 'Có')
                                                            <td> <input class="form-check-input" type="radio"
                                                                    name="pain" value="Có" checked></td>
                                                            <td> <input class="form-check-input" type="radio"
                                                                    name="pain" value="Không"></td>
                                                            <td> <input class="form-check-input" type="radio"
                                                                    name="pain" value="Không rõ"></td>
                                                        @else
                                                            <td> <input class="form-check-input" type="radio"
                                                                    name="pain" value="Có"></td>
                                                            <td> <input class="form-check-input" type="radio"
                                                                    name="pain" value="Không"></td>
                                                            <td> <input class="form-check-input" type="radio"
                                                                    name="pain" value="Không rõ" checked></td>
                                                        @endif
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-9">2. Nôn/buồn nôn</th>
                                                        @if ($reaction_statuses->nausea == 'Không')
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="nausea" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="nausea" value="Không" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="nausea" value="Không rõ"></td>
                                                    @elseif($reaction_statuses->nausea == 'Có')
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="nausea" value="Có" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="nausea" value="Không"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="nausea" value="Không rõ"></td>
                                                    @else
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="nausea" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="nausea" value="Không"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="nausea" value="Không rõ" checked></td>
                                                    @endif
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-9">3. Tiêu chảy/đau bụng
                                                        </th>
                                                        @if ($reaction_statuses->diarrhea == 'Không')
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="diarrhea" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="diarrhea" value="Không" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="diarrhea" value="Không rõ"></td>
                                                    @elseif($reaction_statuses->diarrhea == 'Có')
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="diarrhea" value="Có" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="diarrhea" value="Không"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="diarrhea" value="Không rõ"></td>
                                                    @else
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="diarrhea" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="diarrhea" value="Không"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="diarrhea" value="Không rõ" checked></td>
                                                    @endif
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-9">4. Sốt </th>
                                                        @if ($reaction_statuses->fever == 'Không')
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="fever" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="fever" value="Không" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="fever" value="Không rõ"></td>
                                                    @elseif($reaction_statuses->fever == 'Có')
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="fever" value="Có" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="fever" value="Không"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="fever" value="Không rõ"></td>
                                                    @else
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="fever" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="fever" value="Không"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="fever" value="Không rõ" checked></td>
                                                    @endif
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-9">5. Đau họng/chảy nước mũi</th>
                                                        @if ($reaction_statuses->sore_throat == 'Không')
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="sore_throat" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="sore_throat" value="Không" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="sore_throat" value="Không rõ"></td>
                                                    @elseif($reaction_statuses->sore_throat == 'Có')
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="sore_throat" value="Có" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="sore_throat" value="Không"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="sore_throat" value="Không rõ"></td>
                                                    @else
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="sore_throat" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="sore_throat" value="Không"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="sore_throat" value="Không rõ" checked></td>
                                                    @endif
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-9">6. Ớn lạnh</th>
                                                        @if ($reaction_statuses->chills == 'Không')
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="chills" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="chills" value="Không" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="chills" value="Không rõ"></td>
                                                    @elseif($reaction_statuses->chills == 'Có')
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="chills" value="Có" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="chills" value="Không"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="chills" value="Không rõ"></td>
                                                    @else
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="chills" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="chills" value="Không"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="chills" value="Không rõ" checked></td>
                                                    @endif
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-9">7. Đau đầu</th>
                                                        @if ($reaction_statuses->headache == 'Không')
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="headache" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="headache" value="Không" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="headache" value="Không rõ"></td>
                                                    @elseif($reaction_statuses->headache == 'Có')
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="headache" value="Có" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="headache" value="Không"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="headache" value="Không rõ"></td>
                                                    @else
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="headache" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="headache" value="Không"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="headache" value="Không rõ" checked></td>
                                                    @endif
                                                    </tr>
                                                    <tr>
                                                        <th class="col-md-9">8. Phát ban</th>
                                                        @if ($reaction_statuses->rash == 'Không')
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="rash" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="rash" value="Không" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="rash" value="Không rõ"></td>
                                                    @elseif($reaction_statuses->rash == 'Có')
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="rash" value="Có" checked></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="rash" value="Không"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="rash" value="Không rõ"></td>
                                                    @else
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="rash" value="Có"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="rash" value="Không"></td>
                                                        <td> <input class="form-check-input" type="radio"
                                                                name="rash" value="Không rõ" checked></td>
                                                    @endif
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>9. Các triệu chứng khác (nếu có)</p>
                                            <input type="text" class="form-control col-md-6" name="other"
                                                value="{{ $reaction_statuses->other }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" form-row">
                                <div class="form-group col-md-6">
                                    <label>Nếu có các triệu chứng, bạn có điệu trị các triệu chứng đó không?</label>
                                    <br>
                                    @if ($reaction_statuses->therapy == 'Không')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="primary-checkbox">Có</label>
                                            <input class="form-check-input" type="radio" name="therapy" value="Có"
                                                style="margin-left:5px">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="primary-checkbox">Không</label>
                                            <input class="form-check-input" type="radio" name="therapy" value="Không"
                                                checked style="margin-left:5px">
                                        </div>
                                    </div>
                                    @else
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="primary-checkbox">Có</label>
                                            <input class="form-check-input" type="radio" name="therapy" value="Có" checked
                                                style="margin-left:5px">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="primary-checkbox">Không</label>
                                            <input class="form-check-input" type="radio" name="therapy" value="Không"
                                                 style="margin-left:5px">
                                        </div>
                                    </div>
                                    @endif
                                    <br>
                                    <label>Nếu có, bạn đã điều trị ở đâu?</label>
                                    <br>
                                    <input type="text" class="form-control" value="{{ $reaction_statuses->place }}"
                                        name="place">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Tình trạng hiện tại (bình thường, hồi phục, có biến chứng,...)</label>
                                    <br>
                                    <input type="text" class="form-control @error('current_status') is-invalid @enderror"
                                        value="{{ $reaction_statuses->current_status }}" name="current_status">
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
                            <button type="reset" class="btn btn-danger">Nhập lại</button>
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
