@extends('admin.layout-admin', [
    'title' => __($title ?? 'Danh sách đơn đăng ký chưa duyệt'),
])
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách đơn đăng ký chưa duyệt</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách đơn đăng ký chưa duyệt</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" style="margin-top:0.25rem">Danh sách đơn đăng ký chưa duyệt</h3>
                            <div class="card-tools" style="margin-top:0.25rem">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Tìm kiếm">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-4">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr class="text-center">
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Ngày sinh</th>
                                        <th>Ngày đăng ký</th>                                     
                                        <th>Trạng thái</th>
                                        <th>Xem chi tiết</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($unconfirmed as $key => $value)
                                        <tr class="text-center">
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $value->user->fullname }}</td>
                                            <td>{{ Carbon\Carbon::parse($value->user->day_of_birth)->format('d-m-Y') }}</td>
                                            <td> {{ Carbon\Carbon::parse($value->created_at)->format('d-m-Y') }}</td>                                          
                                            <td class="col-md-2">
                                                <form action="{{ route('admin.injections.accept-vaccine-registration') }}"
                                                    method="POST">
                                                    @csrf
                                                    @if ($value->status == 0)
                                                        <select name="status" data-vaccine_registration_id="{{ $value->id }}"
                                                            class="custom-select status">
                                                            <option selected="selected" value="0">Chưa duyệt
                                                            </option>
                                                            <option value="1">Đã duyệt</option>
                                                        </select>
                                                    @endif
                                                </form>
                                            </td>
                                            <td class="project-actions">
                                                <a class="btn btn-primary btn-sm" href="{{ route('admin.injections.show-registration', $value->id) }}">
                                                    <i class="fas fa-eye">
                                                    </i>                                              
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $('.status').change(function() {
            const status = $(this).val();
            const vaccine_registration_id = $(this).data('vaccine_registration_id');
            $.ajax({
                url: "{{ route('admin.injections.accept-vaccine-registration') }}",
                method: 'POST',
                data: {
                    status: status,
                    vaccine_registration_id: vaccine_registration_id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    toastr.success('Duyệt đơn đăng ký thành công');
                    location.reload();
                }
            });
        })
    </script>
@endsection
