<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" style="margin-top:0.25rem">Danh sách hãng sản xuất</h3>
                            <a href="{{ route('admin.manufactures.create') }}" class="btn btn-outline-success btn-sm"
                                style="margin-left:2%">Thêm</a>
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
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-4">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên</th>
                                        <th>Quốc gia</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($manufactures as $key => $value)
                                        <tr>
                                            <td class="col-md-1">{{ $loop->iteration }}</td>
                                            <td class="col-md-4">{{ $value->name }}</td>
                                            <td class="col-md-3">
                                                {{ $value->nation->name }}
                                            </td>
                                            <td class="project-actions col-md-2">
                                                <div class="row">
                                                        <div class="col-md-2">
                                                            <a class="btn btn-primary btn-sm"
                                                            data-toggle="tooltip" data-placement="top" title="Cập nhật"
                                                                href="{{ route('admin.manufactures.edit', $value->id) }}">
                                                                <i class="fas fa-pencil-alt"></i>
                                                              
                                                            </a>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <form method="POST"
                                                                action="{{ route('admin.manufactures.delete', $value->id) }}">
                                                                @csrf
                                                                @method('Delete')
                                                                <button
                                                                data-toggle="tooltip" data-placement="top" title="Xoá"
                                                                    onclick="return confirm('Bạn có muốn xóa hãng sản xuất này không?');"
                                                                    class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i></button>
                                                            </form>
                                                        </div>
                                                </div>
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
    <div class="card-footer text-right">
        <nav class="d-inline-block">
            <ul class="pagination mb-0">
                @if($links->links())
                {{ $links->links() }}
                @endif
            </ul>
        </nav>
    </div>
</div>
