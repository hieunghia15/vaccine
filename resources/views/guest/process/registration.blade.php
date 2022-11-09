@extends('guest.layout-guest', [
    'title' => __($title ?? 'Quy trình đăng ký tiêm chủng'),
])
@section('main')
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="{{ asset('medino/assets/css/timeline.css') }}">
    <section class="experience pt-100 pb-100" id="experience" style="padding-top: 10%">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 mx-auto text-center">
                    <div class="section-title">
                        <h3>Quy trình đăng ký tiêm chủng</h3>
                        <p>Đăng ký mũi tiêm đầu tiên</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <ul class="timeline-list">
                        <!-- Single Experience -->
                        <li>
                            <div class="timeline_content">
                                <span>Bước 1</span>
                                <h4>Nhập thông tin cá nhân </h4>
                                <p>
                                    - Thông tin cá nhân: Đăng kí tiêm mũi thứ nhất, Họ và tên, ngày sinh, giới
                                    tính, điện thoại, số CCCD/hộ chiếu, số thẻ BHYT, nghề nghiệp, địa chỉ, quốc
                                    tịch, dân tộc và nhóm ưu tiên,...
                                </p>
                                <p>
                                    - Thông tin đăng ký tiêm chủng: Ngày muốn được tiêm, Buổi tiêm mong muốn.
                                </p>
                                <p>
                                    Lưu ý: Các trường thông tin có dấu (*) bắt buộc phải nhập, địa chỉ đăng ký là địa chỉ
                                    hiện
                                    tại nơi người dân sinh sống để thuận tiện cho quá trình tiêm chủng.
                                </p>
                            </div>
                        </li>
                        <!-- Single Experience -->
                        <li>
                            <div class="timeline_content">
                                <span>Bước 2</span>
                                <h4>Nhập thông tin tiền sử bệnh</h4>
                                <p>Các thông tin về tiền sử bệnh như: phản vệ, đã từng nhiễm Covid-19, suy giảm miễm dịch.
                                    Lưu ý người dân cần khai báo đúng và đủ thông tin
                                    để đảm bảo tốt cho quá trình tiêm chủng.</p>
                            </div>
                        </li>
                        <!-- Single Experience -->
                        <li style="left:6rem">
                            <div class="timeline_content">
                                <span>Bước 3</span>
                                <h4>Phiếu đồng ý tiêm</h4>
                                <p>Sau khi đọc các thông tin phiếu đồng ý cung cấp,người dân tích chọn vào ô đồng ý tiêm để
                                    hoàn tất quá trình đăng ký tiêm chủng</p>
                            </div>
                        </li>
                        <!-- Single Experience -->               
                    </ul>
                </div>
            </div>
			<br>
			<div class="row mt-4">
                <div class="col-xl-8 mx-auto text-center">
                    <div class="section-title">
                        <h3>Quy trình đăng ký tiêm chủng</h3>
                        <p>Đăng ký mũi tiêm tiếp theo</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <ul class="timeline-list">
                        <!-- Single Experience -->
                        <li style="left:0.5rem">
                            <div class="timeline_content">
                                <span>Bước 1</span>
                                <h4>Nhập thông tin cá nhân </h4>
                                <p>
                                    Tương tự như quy trình đăng ký mũi tiêm đầu tiên, và có thêm lịch sử mũi tiêm mới nhất
                                </p>
                                <p>
                                    Lưu ý: Các trường thông tin có dấu (*) bắt buộc phải nhập, địa chỉ đăng ký là địa chỉ
                                    hiện
                                    tại nơi người dân sinh sống để thuận tiện cho quá trình tiêm chủng.
                                </p>
                            </div>
                        </li>
                        <!-- Single Experience -->
                        <li>
                            <div class="timeline_content">
                                <span>Bước 2</span>
                                <h4>Nhập thông tin tiền sử bệnh</h4>
                                <p>Các thông tin về tiền sử bệnh như: phản vệ, đã từng nhiễm Covid-19, suy giảm miễm dịch.
                                    Lưu ý người dân cần khai báo đúng và đủ thông tin
                                    để đảm bảo tốt cho quá trình tiêm chủng.</p>
                            </div>
                        </li>
                        <!-- Single Experience -->
                        <li style="left:6rem">
                            <div class="timeline_content">
                                <span>Bước 3</span>
                                <h4>Phiếu đồng ý tiêm</h4>
                                <p>Sau khi đọc các thông tin phiếu đồng ý cung cấp,người dân tích chọn vào ô đồng ý tiêm để
                                    hoàn tất quá trình đăng ký tiêm chủng</p>
                            </div>
                        </li>
                        <!-- Single Experience -->               
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
