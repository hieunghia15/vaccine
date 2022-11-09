<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title" style="margin-top:0.25rem">Danh sách địa điểm tiêm</h3>
                            <a href="{{ route('admin.vaccination-sites.create') }}" class="btn btn-outline-success btn-sm" style="margin-left:2%"
                               >Thêm</a>
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
                                        <th>Địa chỉ</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vaccination_sites as $value)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $value->location }}</td>
                                        <td class="col-md-6">
                                            {{ $value->ward->name }}, {{ $value->ward->district->name }},
                                            {{ $value->ward->district->province->type }} {{ $value->ward->district->province->name }}
                                        </td>
                                        <td class="project-actions text-center">
                                            <div class="row">
                                                <div class="col-md-6"> <button data-toggle="tooltip"
                                                    data-placement="top" title="Cập nhật" class="btn btn-primary" onclick="location.href='{{ route('admin.vaccination-sites.edit', $value->id) }}';">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </button></div>
                                                <div class="col-md-6"> <form method="POST" action="{{ route('admin.vaccination-sites.delete', $value->id) }}">
                                                    @csrf
                                                    @method('Delete')
                                                    <button data-toggle="tooltip"
                                                    data-placement="top" title="Xoá" onclick="return confirm('Bạn có muốn xóa dịa điểm tiêm này không?');"
                                                        class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </form></div>
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
