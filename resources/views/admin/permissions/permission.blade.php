@extends('admin.layout-admin', [
    'title' => __($title ?? 'Danh sách quyền hạn'),
])
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách quyền hạn</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách quyền hạn</li>
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
                            <h3 class="card-title" style="margin-top:0.25rem">Danh sách quyền hạn</h3>
                            <button type="button" class="btn btn-outline-success btn-sm" style="margin-left:2%"
                                data-toggle="modal" data-target="#createModal">Thêm</button>
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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thêm quyền hạn</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="permission">Tên quyền hạn</label>
                                <input type="text" class="name form-control" placeholder="Nhập tên quyền hạn">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="create_permission btn btn-success">Thêm</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.create modal -->

    <!-- /.update modal -->
    <div class="modal fade" id="updateModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cập nhật quyền hạn</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="card-body">
                            <input type="hidden" id="update_permission_id">
                            <div class="form-group">
                                <label for="permission">Tên quyền hạn</label>
                                <input type="text" id="update_permission_name" class="name form-control"
                                    placeholder="Nhập tên quyền hạn">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="update_permission btn btn-primary">Cập nhật</button>
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
                    <h4 class="modal-title">Xoá quyền hạn</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="delete_permission_id">
                    <p>Bạn có muốn xoá quyền hạn này?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="destroy_permission btn btn-danger">Xoá</button>
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

            fetchPermission();

            function fetchPermission() {
                var stt=1;
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.permissions.fetch-permission') }}",
                    dataType: "json",
                    success: function(res) {
                        //console.log(res.permissions);
                        $('tbody').html("");
                        $.each(res.permissions, function(key, value) {
                            $('tbody').append('<tr>\
                                                        <td>' + stt++ + '</td>\
                                                        <td><a>' + value.name + '</a></td>\
                                                        <td class="project-actions text-right">\
                                                            <button type="button"  data-toggle="tooltip" data-placement="top" title="Cập nhật" value="' + value.id + '" class="edit_permission btn btn-primary btn-sm" href="#" data-toggle="modal"\
                                                                data-target="#updateModal">\
                                                                <i class="fas fa-pencil-alt"></i></button>\
                                                            <button type="button"  data-toggle="tooltip" data-placement="top" title="Xoá" value="' + value.id + '" class="delete_permission btn btn-danger btn-sm" href="#" data-toggle="modal"\
                                                                data-target="#deleteModal">\
                                                                <i class="fas fa-trash"></i></button>\
                                                        </td>\
                                                    </tr>');
                        });
                    }
                });
            };

            //Create permission
            $(document).on('click', '.create_permission', function(e) {
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
                    url: "permissions/create-permission",
                    data: data,
                    _token: '{{ csrf_token() }}',
                    dataType: "json",
                    success: function(response) {
                        //console.log(response);
                        if (response.status == 500) {
                            toastr.error('Đã có lỗi xãy ra')
                        } else if(response.status == 400){
                            toastr.warning('Quyền hạn này đã tồn tại')
                        }
                        else {
                            toastr.success('Thêm quyền hạn thành công')
                            $('#createModal').modal('hide');
                            $('#createModal').find('input').val("");
                            fetchPermission();
                        }
                    }
                });
            });

            //Show edit permission
            $(document).on('click', '.edit_permission', function(e) {
                e.preventDefault();
                var permission_id = $(this).val();
                //console.log(permission_id);
                $('#updateModal').modal('show');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "permissions/edit-permission/" + permission_id,
                    success: function(response) {
                        //console.log(response);
                        if (response.status == 404 || response.status == 500) {
                            toastr.error('Không tìm thấy quyền hạn này hoặc đã có lỗi xảy ra')
                        } else {

                            $('#update_permission_name').val(response.permissions.name);
                            $('#update_permission_id').val(permission_id);

                        }
                    }
                });
            });

            //Update permission
            $(document).on('click', '.update_permission', function(e) {
                e.preventDefault();
                var permission_id = $('#update_permission_id').val();
                var data = {
                    'name': $('#update_permission_name').val(),
                }
                $.ajax({
                    type: "PATCH",
                    url: "permissions/update-permission/" + permission_id,
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
                            toastr.success('Cập nhật quyền hạn thành công')
                            $('#updateModal').modal('hide');
                            fetchPermission();
                        }
                    }
                });
            });

            //Show delete permission
            $(document).on('click', '.delete_permission', function(e) {
                e.preventDefault();
                var permission_id = $(this).val();
                //console.log(permission_id);
                $('#delete_permission_id').val(permission_id);
                $('#deleteModal').modal('show');
            });

            //Delete permission
            $(document).on('click', '.destroy_permission', function(e) {
                e.preventDefault();
                var permission_id = $('#delete_permission_id').val();   
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });         
                $.ajax({
                    type: "DELETE",
                    url: "permissions/delete-permission/" + permission_id,                
                    success: function(response) {
                        //console.log(response);
                        if (response.status == 400 || response.status == 500) {
                            toastr.error('Đã có lỗi xãy ra')
                        } else if (response.status == 404) {
                            toastr.error('Không tìm thấy')
                        } else {
                            toastr.success('Xoá quyền hạn thành công')
                            $('#deleteModal').modal('hide');
                            fetchPermission();
                        }
                    }
                });
            });
        });
    </script>
@endsection
