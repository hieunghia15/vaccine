@extends('admin.layout-admin',[
'title' => __($title ?? 'Danh sách nhóm ưu tiên')
])
@section('main')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Danh sách nhóm ưu tiên</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Danh sách nhóm ưu tiên</li>
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
                        <h3 class="card-title" style="margin-top:0.25rem">Danh sách nhóm ưu tiên</h3>
                        <button type="button" class="btn btn-outline-success btn-sm" style="margin-left:2%"
                            data-toggle="modal" data-target="#createModal">Thêm</button>
                        <div class="card-tools" style="margin-top:0.25rem">
                            <div class="input-group input-group-sm" style="width: 200px;">
                                <input type="text" name="search" id="search" class="form-control float-right"
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
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                               
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
<!-- /.create modal -->
<div class="modal fade" id="createModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thêm nhóm ưu tiên</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="role">Tên nhóm ưu tiên</label>
                            <textarea class="name form-control" rows="6" placeholder="Nhập tên nhóm"></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="create_priority_group btn btn-success">Thêm</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.create modal -->

<!-- /.update modal -->
<div class="modal fade" id="updateModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cập nhật nhóm ưu tiên</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="card-body">
                        <input type="hidden" id="update_priority_group_id">
                        <div class="form-group">
                            <label for="role">Tên nhóm ưu tiên</label>
                                <textarea class="name form-control" id="update_priority_group_name" rows="6" placeholder="Nhập tên nhóm"></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="update_priority_group btn btn-primary">Cập nhật</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.update modal -->

<!-- /.delete modal -->
<div class="modal fade" id="deleteModal">
    <div class="modal-dialog deleteModal">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Xoá vai trò</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="delete_priority_group_id">
                <p>Bạn có muốn xoá vai trò này?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="destroy_priority_group btn btn-danger">Xoá</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.delete modal -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {

            fetch();

            function fetch() {
                var stt=1;
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.priority-groups.fetch') }}",
                    dataType: "json",
                    success: function(res) {
                        //console.log(res.priority_groups);
                        $('tbody').html("");
                        $.each(res.priority_groups, function(key, value) {
                            $('tbody').append('<tr>\
                                                        <td>' + stt++ + '</td>\
                                                        <td class="col-md-8"><a>' + value.name + '</a></td>\
                                                        <td class="project-actions text-right">\
                                                            <button type="button" data-toggle="tooltip" data-placement="top" title="Cập nhật" value="' + value.id + '" class="edit_priority_group btn btn-primary btn-sm" href="#" data-toggle="modal"\
                                                                data-target="#updateModal">\
                                                                <i class="fas fa-pencil-alt"></i></button>\
                                                            <button type="button" data-toggle="tooltip" data-placement="top" title="Xoá" value="' + value.id + '" class="delete_priority_group btn btn-danger btn-sm" href="#" data-toggle="modal"\
                                                                data-target="#deleteModal">\
                                                                <i class="fas fa-trash"></i></button>\
                                                        </td>\
                                                    </tr>');
                        });
                    }
                });
            };

            //Create priority group
            $(document).on('click', '.create_priority_group', function(e) {
                e.preventDefault();
                var data = {
                    'name': $('.name').val(),
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "priority-groups/create",
                    data: data,
                    _token: '{{ csrf_token() }}',
                    dataType: "json",
                    success: function(response) {
                        //console.log(response);
                        if (response.status == 500) {
                            toastr.error('Đã có lỗi xãy ra')
                        }else if(response.status == 400){
                            toastr.warning('Nhóm ưu tiên đã tồn tại')
                        }
                         else {
                            toastr.success('Thêm nhóm ưu tiên thành công')
                            $('#createModal').modal('hide');
                            $('#createModal').find('input').val("");
                            fetch();
                        }
                    },
                    error: function (error){
                        toastr.error('Đã có lỗi xãy ra')
                    }
                });
            });

            //Show edit priority group
            $(document).on('click', '.edit_priority_group', function(e) {
                e.preventDefault();
                var priority_group_id = $(this).val();
                console.log(priority_group_id);
                $('#updateModal').modal('show');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "priority-groups/edit/" + priority_group_id,
                    success: function(response) {
                        //console.log(response);
                        if (response.status == 404 || response.status == 500) {
                            toastr.error('Không tìm thấy nhóm ưu tiên này hoặc đã có lỗi xảy ra')
                        } else {

                            $('#update_priority_group_name').val(response.priority_groups.name);
                            $('#update_priority_group_id').val(priority_group_id);
                        }
                    }
                });
            });

            //Update priority group
            $(document).on('click', '.update_priority_group', function(e) {
                e.preventDefault();
                var priority_group_id = $('#update_priority_group_id').val();
                var data = {
                    'name': $('#update_priority_group_name').val(),
                }
                $.ajax({
                    type: "PATCH",
                    url: "priority-groups/update/" + priority_group_id,
                    data: data,
                    _token: '{{ csrf_token() }}',
                    dataType: "json",
                    success: function(response) {
                        //console.log(response);
                        if (response.status == 400 || response.status == 500) {
                            toastr.error('Đã có lỗi xãy ra')
                        } else if (response.status == 404) {
                            toastr.error('Không tìm thấy')
                        } else {
                            toastr.success('Cập nhật nhóm ưu tiên thành công')
                            $('#updateModal').modal('hide');
                            fetch();
                        }
                    },
                    error: function (error){
                        toastr.error('Đã có lỗi xãy ra')
                    }
                });
            });

            //Show delete priority group
            $(document).on('click', '.delete_priority_group', function(e) {
                e.preventDefault();
                var priority_group_id = $(this).val();
                //console.log(priority_group_id);
                $('#delete_priority_group_id').val(priority_group_id);
                $('#deleteModal').modal('show');
            });

            //Delete priority group
            $(document).on('click', '.destroy_priority_group', function(e) {
                e.preventDefault();
                var priority_group_id = $('#delete_priority_group_id').val();   
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });         
                $.ajax({
                    type: "DELETE",
                    url: "priority-groups/delete/" + priority_group_id,                
                    success: function(response) {
                        //console.log(response);
                        if (response.status == 400 || response.status == 500) {
                            toastr.error('Đã có lỗi xãy ra')
                        } else if (response.status == 404) {
                            toastr.error('Không tìm thấy')
                        } else {
                            toastr.success('Xoá nhóm ưu tiên thành công')
                            $('#deleteModal').modal('hide');
                            fetch();
                        }
                    }
                });
            });

            $('#search').on('keyup', function() {
                $value = $(this).val();
                if ($value) {
                    $('tbody').show();
                } else {
                    fetch();
                }
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.priority-groups.search') }}",
                    data: {
                        'search': $value
                    },
                    success: function(data) {
                        $('tbody').html(data);
                    }
                });
            })
        });
    </script>
@endsection