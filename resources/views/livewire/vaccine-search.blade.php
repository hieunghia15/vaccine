<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" style="margin-top:0.25rem">Danh sách vắc xin</h3>
                            <a href="{{ route('admin.vaccines.create') }}" class="btn btn-outline-success btn-sm"
                                style="margin-left:2%">Thêm</a>
                            <div class="card-tools" style="margin-top:0.25rem">
                                <div class="input-group input-group-sm" style="width: 200px;">
                                    <input type="text" class="form-control float-right" wire:model="search"
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
                        @if (isset($vaccines))
                        <div class="card-body table-responsive p-4">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th class="col-md-1">STT</th>
                                        <th class="col-md-4">Tên</th>
                                        <th class="col-md-2">Loại vắc xin</th>
                                        <th class="col-md-1">Hiệu quả</th>
                                        <th class="col-md-2">Hãng sản xuất</th>
                                        <th class="col-md-2"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($vaccines as $key => $value)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->vaccineType->name }}</td>
                                            <td>{{ $value->effection }}</td>
                                            <td>
                                                <a>{{ $value->manufacture->name }}</a>
                                            </td>
                                            <td class="project-actions text-center">
                                                <div class="row">
                                                    <div class="col-md-4"> <button class="btn btn-primary btn-sm"
                                                            data-toggle="tooltip" data-placement="top" title="Xem"
                                                            onclick="location.href='{{ route('admin.vaccines.show', $value->id) }}';">
                                                            <i class="fas fa-eye">
                                                            </i>
                                                        </button></div>
                                                    <div class="col-md-4"> <button class="btn btn-primary btn-sm"
                                                            data-toggle="tooltip" data-placement="top" title="Cập nhật"
                                                            onclick="location.href='{{ route('admin.vaccines.edit', $value->id) }}';">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </button></div>
                                                    <div class="col-md-4">
                                                        <form method="POST"
                                                            action="{{ route('admin.vaccines.delete', $value->id) }}">
                                                            @csrf
                                                            @method('Delete')
                                                            <button class="btn btn-danger btn-sm" data-toggle="tooltip"
                                                                data-placement="top" title="Xoá"
                                                                onclick="return confirm('Bạn có muốn xóa vắc xin này không?');">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach   
                                              
                                </tbody>
                            </table>
                        </div>
                        @else
                        <h4>Không tìm thấy kết quả</h4>
                        @endif
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
