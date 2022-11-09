@extends('admin.layout-admin', [
    'title' => __($title ?? 'Danh sách loại vắc xin'),
])
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách loại vắc xin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách loại vắc xin</li>
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
                            <h3 class="card-title" style="margin-top:0.25rem">Danh sách loại vắc xin</h3>
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
                                        <th>Mô tả</th>
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
                    <h4 class="modal-title">Thêm loại vắc xin</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="role">Tên loại vắc xin</label>
                                    <input type="text" class="name form-control" placeholder="Nhập tên loại vắc xin">
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group col-md-12">
                                        <label for="role">Mô tả</label>
                                        <textarea class="description form-control" rows="3" placeholder="Nhập mô tả"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="create_type btn btn-success">Thêm</button>
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
                    <h4 class="modal-title">Cập nhật loại vắc xin</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="hidden" id="update_type_id">
                                <div class="col-md-6">
                                    <label for="role">Tên loại vắc xin</label>
                                    <input type="text" id="update_type_name" class="name form-control"
                                        placeholder="Nhập tên loại vắc xin">
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group col-md-12">
                                        <label for="role">Mô tả</label>
                                        <textarea id="update_type_description" class="description form-control" rows="3" placeholder="Nhập mô tả"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="update_type btn btn-primary">Cập nhật</button>
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
                    <h4 class="modal-title">Xoá loại vắc xin</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="delete_type_id">
                    <p>Bạn có muốn xoá loại vắc xin này?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="destroy_type btn btn-danger">Xoá</button>
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

            fetchVaccineType();

            function fetchVaccineType() {
                var stt = 1;
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.vaccine-types.fetch-vaccine-type') }}",
                    dataType: "json",
                    success: function(res) {
                        //console.log(res.vaccineTypes);
                        $('tbody').html("");
                        $.each(res.vaccineTypes, function(key, value) {
                            $('tbody').append(
                                '<tr>\
                                        <td>' + stt++ + '</td>\
                                        <td>' + value.name + '</td>\
                                        <td class="col-md-7">' + value.description +
                                '   </td>\
                                        <td class="project-actions text-right">\
                                            <button type="button" data-toggle="tooltip" data-placement="top" title="Cập nhật" value="' + value
                                .id +
                                '" class="edit btn btn-primary btn-sm" href="#" data-toggle="modal"\
                                                data-target="#updateModal"><i class="fas fa-pencil-alt"></i></button>\
                                            <button type="button" data-toggle="tooltip" data-placement="top" title="Xoá" value="' +
                                value.id + '" class="delete btn btn-danger btn-sm" href="#" data-toggle="modal"\
                                                data-target="#deleteModal"><i class="fas fa-trash"></i></button>\
                                        </td>\
                                    </tr>'
                            );
                        });
                    }
                });
            };

            //Create vaccine type
            $(document).on('click', '.create_type', function(e) {
                e.preventDefault();
                var data = {
                    'name': $('.name').val(),
                    'description': $('.description').val(),
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "vaccine-types/create-vaccine-type",
                    data: data,
                    _token: '{{ csrf_token() }}',
                    dataType: "json",
                    success: function(response) {
                        //console.log(response);
                        if (response.status == 500) {
                            toastr.error('Đã có lỗi xãy ra')
                        } else if (response.status == 400) {
                            toastr.warning('Loại vắc xin đã tồn tại')
                        } else {
                            toastr.success('Thêm loại vắc xin thành công')
                            $('#createModal').modal('hide');
                            $('#createModal').find('input').val("");
                            fetchVaccineType();
                        }
                    },
                    error: function(error) {
                        toastr.error('Đã có lỗi xãy ra')
                    }
                });
            });

            //Show edit vaccine type
            $(document).on('click', '.edit', function(e) {
                e.preventDefault();
                var type_id = $(this).val();
                console.log(type_id);
                $('#updateModal').modal('show');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "vaccine-types/edit-vaccine-type/" + type_id,
                    success: function(response) {
                        //console.log(response);
                        if (response.status == 404 || response.status == 500) {
                            toastr.error('Không tìm thấy vai trò này hoặc đã có lỗi xảy ra')
                        } else {

                            $('#update_type_name').val(response.vaccineTypes.name);
                            $('#update_type_description').val(response.vaccineTypes
                            .description);
                            $('#update_type_id').val(type_id);

                        }
                    }
                });
            });

            //Update vaccine type
            $(document).on('click', '.update_type', function(e) {
                e.preventDefault();
                var type_id = $('#update_type_id').val();
                var data = {
                    'name': $('#update_type_name').val(),
                    'description': $('#update_type_description').val(),
                }
                $.ajax({
                    type: "PATCH",
                    url: "vaccine-types/update-vaccine-type/" + type_id,
                    data: data,
                    _token: '{{ csrf_token() }}',
                    dataType: "json",
                    success: function(response) {
                        //console.log(response);
                        if (response.status == 400 || response.status == 500) {
                            toastr.error('Đã có lỗi xãy ra')
                        } else if (response.status == 404) {
                            toastr.error('Không tìm thấy loại vắc xin')
                        } else {
                            toastr.success('Cập nhật loại vắc xin thành công')
                            $('#updateModal').modal('hide');
                            fetchVaccineType();
                        }
                    },
                    error: function(error) {
                        toastr.error('Đã có lỗi xãy ra')
                    }
                });
            });

            //Show delete vaccine type
            $(document).on('click', '.delete', function(e) {
                e.preventDefault();
                var type_id = $(this).val();
                console.log(type_id);
                $('#delete_type_id').val(type_id);
                $('#deleteModal').modal('show');
            });

            //Delete vaccine type
            $(document).on('click', '.destroy_type', function(e) {
                e.preventDefault();
                var type_id = $('#delete_type_id').val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "DELETE",
                    url: "vaccine-types/delete-vaccine-type/" + type_id,
                    success: function(response) {
                        //console.log(response);
                        if (response.status == 400 || response.status == 500) {
                            toastr.error('Đã có lỗi xãy ra')
                        } else if (response.status == 404) {
                            toastr.error('Không tìm thấy loại vắc xin')
                        } else {
                            toastr.success('Xoá loại vắc thành công')
                            $('#deleteModal').modal('hide');
                            fetchVaccineType();
                        }
                    }
                });
            });

            $('#search').on('keyup', function() {
                $value = $(this).val();
                if ($value) {
                    $('tbody').show();
                } else {
                  
                    fetchVaccineType();
                }
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.vaccine-types.search-vaccine-type') }}",
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
