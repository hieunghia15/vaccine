@extends('citizen.layout-user', [
    'title' => __($title ?? 'Danh sách phản ứng sau tiêm'),
])
@section('main')
    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Danh sách phản ứng sau tiêm</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
    <div class="container p-4">
        <div class="row">
            <!-- Main content -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-white">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title" style="margin-top:0.25rem">Danh sách phản ứng ({{ $count }})
                                </h3>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('citizen.user.create-reaction-status') }}"
                                    class="btn btn-success btn-sm float-right">Thêm</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    @if (isset($reaction_statuses))
                        <div class="card-body table-responsive p-4">
                            @if ($message = Session::get('warning'))
                                <div class="alert alert-warning alert-block">
                                    <span>{{ $message }}</span>
                                </div>
                            @endif
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Họ tên</th>
                                        <th>Vắc xin</th>
                                        <th>Ngày tiêm</th>
                                        <th>Ngày phản ứng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reaction_statuses as $key => $value)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $users->fullname }}</td>
                                            <td>{{ $value->certificate->vaccine->name }}</td>
                                            <td>
                                                {{ Carbon\Carbon::parse($value->certificate->created_at)->format('d/m/Y') }}
                                            </td>
                                            <td>
                                                {{ Carbon\Carbon::parse($value->created_at)->format('d/m/Y') }}
                                            </td>
                                            <td class="project-actions text-right">
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('citizen.user.edit-reaction-status', $value->id) }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                    Cập nhật
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <h4>Chưa có danh sách phản ứng tiêm chủng</h4>
                    @endif
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->

            <!-- /.content -->
        </div>
    </div>
@endsection
