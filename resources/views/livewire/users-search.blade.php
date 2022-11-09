<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" style="margin-top:0.25rem">Danh sách người dùng</h3>
                            <div class="card-tools" style="margin-top:0.25rem">
                                <div class="input-group input-group-sm" style="width: 200px;">
                                    <input type="text" name="table_search" class="form-control float-right" wire:model="search"
                                        placeholder="Tìm kiếm">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{ route('admin.users.import') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="file" class="custom-file">
                                        <br>
                                        <button class="btn btn-success">Nhập dữ liệu người dùng</button>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn btn-warning float-right" style="margin-top:2.5rem"
                                        href="{{ route('admin.users.export') }}">Xuất dữ liệu người dùng</a>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-4">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr class="text-center">
                                        <th>STT</th>
                                        <th>Họ và tên</th>
                                        <th>Ngày sinh</th>
                                        <th>Số điện thoại</th>
                                        <th>Trạng thái tiêm chủng</th>
                                        <th>Số mũi tiêm</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $value)
                                        <tr class="text-center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $value->fullname }}</td>
                                            <td>{{ $value->day_of_birth }}</td>
                                            <td>{{ $value->phone }}</td>
                                            <td>
                                                @if ($value->certificates->count() > 0)
                                                    <p class="badge badge-success" style="margin-top: 12px">Đã tiêm</p>
                                                @else
                                                    <p class="badge badge-warning" style="margin-top: 12px">Chưa tiêm</p>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($value->certificates->count() > 0)
                                                    <p class="badge badge-primary" style="margin-top: 12px">{{ $value->certificates->count() }}</p>
                                                @else
                                                    <p class="badge badge-warning" style="margin-top: 12px">0</p>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $links->render() !!}
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
