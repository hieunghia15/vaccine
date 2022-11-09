@extends('admin.layout-admin', [
    'title' => __($title ?? 'Danh sách danh mục bài viết'),
])
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách danh mục bài viết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách danh mục bài viết</li>
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
                            <h3 class="card-title" style="margin-top:0.25rem">Danh sách danh mục bài viết</h3>
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
                                        <th>Slug</th>
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
                    <h4 class="modal-title">Thêm danh mục bài viết</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="role">Tên danh mục bài viết</label>
                                <input type="text" class="name form-control" id="slug" onkeyup="ChangeToSlug()" placeholder="Nhập tên danh mục">
                                <input type="hidden" class="category_slug form-control" id="convert_slug">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="create_category btn btn-success">Thêm</button>
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
                    <h4 class="modal-title">Cập nhật danh mục bài viết</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="card-body">
                            <input type="hidden" id="update_category_id">
                            <div class="form-group">
                                <label for="role">Tên danh mục bài viết</label>
                                <input type="text" class="name form-control" id="slug_update" onkeyup="ChangeToSlugUpdate()" placeholder="Nhập tên danh mục">
                                <input type="hidden" class="category_slug form-control" id="convert_slug_update">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="update_category btn btn-primary">Cập nhật</button>
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
                    <input type="hidden" id="delete_category_id">
                    <p>Bạn có muốn xoá vai trò này?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="destroy_category btn btn-danger">Xoá</button>
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
                var stt = 1;
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.categories.fetch') }}",
                    dataType: "json",
                    success: function(res) {
                        //console.log(res.categories);
                        $('tbody').html("");
                        $.each(res.categories, function(key, value) {
                            $('tbody').append('<tr>\
                                                            <td>' + stt++ + '</td>\
                                                            <td><a>' + value.name + '</a></td>\
                                                            <td><a>' + value.category_slug + '</a></td>\
                                                            <td class="project-actions text-right">\
                                                                <button type="button"  data-toggle="tooltip" data-placement="top" title="Cập nhật" value="' + value.id + '" class="edit_category btn btn-primary btn-sm" href="#" data-toggle="modal"\
                                                                    data-target="#updateModal">\
                                                                    <i class="fas fa-pencil-alt"></i></button>\
                                                                <button type="button"  data-toggle="tooltip" data-placement="top" title="Xoá" value="' + value.id + '" class="delete_category btn btn-danger btn-sm" href="#" data-toggle="modal"\
                                                                    data-target="#deleteModal">\
                                                                    <i class="fas fa-trash"></i></button>\
                                                            </td>\
                                                        </tr>');
                        });
                    }
                });
            };

            //Create categories
            $(document).on('click', '.create_category', function(e) {
                e.preventDefault();
                var data = {
                    'name': $('.name').val(),
                    'category_slug': $('.category_slug').val(),

                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "categories/create",
                    data: data,
                    _token: '{{ csrf_token() }}',
                    dataType: "json",
                    success: function(response) {
                        //console.log(response);
                        if (response.status == 500) {
                            toastr.error('Đã có lỗi xãy ra')
                        } else if (response.status == 400) {
                            toastr.warning('Danh mục bài viết đã tồn tại')
                        } else {
                            toastr.success('Thêm danh mục bài viết thành công')
                            $('#createModal').modal('hide');
                            $('#createModal').find('input').val("");
                            fetch();
                        }
                    },
                    error: function(error) {
                        toastr.error('Đã có lỗi xãy ra')
                    }
                });
            });

            //Show edit categories
            $(document).on('click', '.edit_category', function(e) {
                e.preventDefault();
                var category_id = $(this).val();
                console.log(category_id);
                $('#updateModal').modal('show');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "categories/edit/" + category_id,
                    success: function(response) {
                        //console.log(response);
                        if (response.status == 404 || response.status == 500) {
                            toastr.error(
                                'Không tìm thấy danh mục bài viết này hoặc đã có lỗi xảy ra'
                                )
                        } else {

                            $('#slug_update').val(response.categories.name);
                            $('#convert_slug_update').val(response.categories.category_slug);
                            $('#update_category_id').val(category_id);
                        }
                    }
                });
            });

            //Update categories
            $(document).on('click', '.update_category', function(e) {
                e.preventDefault();
                var category_id = $('#update_category_id').val();
                var data = {
                    'name': $('#slug_update').val(),
                    'category_slug': $('#convert_slug_update').val(),
                }
                $.ajax({
                    type: "PATCH",
                    url: "categories/update/" + category_id,
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
                            toastr.success('Cập nhật danh mục bài viết thành công')
                            $('#updateModal').modal('hide');
                            fetch();
                        }
                    },
                    error: function(error) {
                        toastr.error('Đã có lỗi xãy ra')
                    }
                });
            });

            //Show delete categories
            $(document).on('click', '.delete_category', function(e) {
                e.preventDefault();
                var category_id = $(this).val();
                //console.log(category_id);
                $('#delete_category_id').val(category_id);
                $('#deleteModal').modal('show');
            });

            //Delete priority group
            $(document).on('click', '.destroy_category', function(e) {
                e.preventDefault();
                var category_id = $('#delete_category_id').val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "DELETE",
                    url: "categories/delete/" + category_id,
                    success: function(response) {
                        //console.log(response);
                        if (response.status == 400 || response.status == 500) {
                            toastr.error('Đã có lỗi xãy ra')
                        } else if (response.status == 404) {
                            toastr.error('Không tìm thấy')
                        } else {
                            toastr.success('Xoá danh mục bài viết thành công')
                            $('#deleteModal').modal('hide');
                            fetch();
                        }
                    }
                });
            });
        });
    </script>
    <script>
        function ChangeToSlug() {
            var slug;

            //Lấy text từ thẻ input title
            slug = document.getElementById("slug").value;

            //Đổi chữ hoa thành chữ thường
            slug = slug.toLowerCase();

            //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox có id “slug”
            document.getElementById('convert_slug').value = slug;
        }
    </script>
    <script>
        function ChangeToSlugUpdate() {
            var slug;

            //Lấy text từ thẻ input title
            slug = document.getElementById("slug_update").value;

            //Đổi chữ hoa thành chữ thường
            slug = slug.toLowerCase();

            //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox có id “slug”
            document.getElementById('convert_slug_update').value = slug;
        }
    </script>
@endsection
