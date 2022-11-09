@extends('admin.layout-admin', [
    'title' => __($title ?? 'Chỉnh sửa bài viết'),
])
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-1" style="margin-right: -5%">
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="col-sm-6">
                    <h1>Chỉnh sửa bài viết</h1>
                </div>
                <div class="col-sm-5" style="margin-left: 4%">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Chỉnh sửa bài viết</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1">
                </div>
                <div class="col-10">
                    <div class="card card-success">
                        <div class="card-header">
                            <h5>Chỉnh sửa bài viết</h5>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('admin.posts.update', $posts->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiêu đề</label>
                                    <input type="text" class="form-control" placeholder="Nhập tiêu đề" name="title"
                                        value="{{ $posts->title }}" id="slug" onkeyup="ChangeToSlug();">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" class="form-control" placeholder="Nhập tiêu đề" name="post_slug"
                                        id="convert_slug" value="{{ $posts->post_slug }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả</label>
                                    <textarea class="form-control" rows="3" placeholder="Nhập mô tả" name="description"
                                        value="{{ $posts->description }}">{{ $posts->description }}</textarea>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Danh mục <span class="text-danger">*</span></label>
                                        <select class="custom-select" name="category_id">
                                            <option selected="selected" value="{{ $posts->category_id }}">
                                                {{ $posts->category->name }}</option>
                                            @foreach ($categories as $key => $value)
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputFile">Ảnh bìa <span class="text-danger">*</span></label>
                                        <div class="custom-file">
                                            <input type="file" name="thumbnail" id="image-upload"  value="{{ $posts->thumbnail }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="card-body">
                                        <label>Nội dung <span class="text-danger">*</span></label>
                                        <textarea id="summernote" name="content" value="{{ $posts->content }}">
                                            {{ $posts->content }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Trạng thái</label>
                                    @if ($posts->is_actived == 0)
                                    <select class="custom-select" name="is_actived">
                                        <option selected="selected" value="0">Chưa duyệt</option>
                                        <option value="1">Đã duyệt</option>
                                    </select>
                                @else
                                    <select class="custom-select" name="is_actived">
                                        <option value="0">Chưa duyệt</option>
                                        <option selected="selected" value="1">Đã duyệt</option>
                                    </select>
                                @endif
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-1">
                </div>
            </div>
        </div>
    </section>
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
@endsection
