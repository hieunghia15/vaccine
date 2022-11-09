@extends('guest.layout-guest', [
    'title' => __($title ?? 'Quy trình tiêm chủng'),
])
@section('main')
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="{{ asset('medino/assets/css/timeline.css') }}">
    <section class="experience pt-100 pb-100" id="experience" style="padding-top: 10%">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 mx-auto text-center">
                    <div class="section-title">
                        <h3>Quy trình tiêm chủng vắc xin Covid-19</h3>
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
                                <h4>Đăng ký tiêm chủng</h4>
                                <p>
                                    Đăng ký tiêm chủng trên website tại địa chỉ: <a
                                        href="http://vaccines.test">http://vaccines.test</a>
                                </p>
                                <p>
                                    Sau khi người dân gửi đăng ký, hệ thống sẽ gửi thông báo tới người
                                    dùng về tình trạng đăng ký thành công và hướng dẫn người dân chủ động
                                    tra cứu thông tin về tình trạng đăng ký tiêm chủng của mình.
                                </p>

                            </div>
                        </li>
                        <!-- Single Experience -->
                        <li style="left: 6.75rem">
                            <div class="timeline_content">
                                <span>Bước 2</span>
                                <h4>Tra cứu thông tin đăng ký tiêm chủng</h4>
                                <p>Người dân sau khi đăng ký tiêm chủng trên website, thì có thể xem tình trạng đăng ký tiêm
                                    chủng khi đăng nhập vào hệ thống</p>
                            </div>
                        </li>
                        <!-- Single Experience -->
                        <li style="left:11rem">
                            <div class="timeline_content">
                                <span>Bước 3</span>
                                <h4>Duyệt đăng ký</h4>
                                <p>
                                    Cơ sở y tế theo thẩm quyền được phân sẽ truy cập vào hệ thống để thực
                                    hiện việc phê duyệt đăng ký tiêm
                                </p>
                                <p> Đối với cá nhân: Thông tin sẽ được duyệt bởi trạm y tế xã/phường; </p>
                            </div>
                        </li>
                        <!-- Single Experience -->
                        <li style="left:0.5rem">
                            <div class="timeline_content">
                                <span>Bước 4</span>
                                <h4>Thực hiện tiêm</h4>
                                <p>Người dân có mặt tại các điểm tiêm chủng đúng ngày giờ như được thông báo để được cán
                                    bộ tiêm thực hiện tiêm chủng theo quy trình 4 bước tiêm chủng.
                                </p>
                                <span>Bước đón tiếp</span>
                                <br>
                                <span>Bước khám sàng lọc</span>
                                <br>
                                <span>Bước thực hiện tiêm</span>
                                <br>
                                <span>Bước theo dõi sau tiêm</span>
                            </div>
                        </li>
                        <!-- Single Experience -->
                        <li>
                            <div class="timeline_content">
                                <span>Bước 5</span>
                                <h4>Nhận kết quả tiêm chủng và cập nhật phản ứng sau tiêm tại nhà </h4>
                                <p>
                                    Mỗi người dân sẽ được cấp giấy Chứng nhận đã tiêm chủng vắc xin phòng Covid 19 sau 
khi tiêm bao gồm chứng nhận bản cứng và chứng nhận điện tử
                                </p>
                                <p>
                                    Ngoài việc theo dõi tại điểm tiêm chủng sau tiêm 30 phút, người dân chủ động theo dõi sau 
tiêm tại nhà bằng việc truy cập ứng dụng "Vaccines" và chọn chức năng nhập tình trạng sau tiêm chủng
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <br>
        </div>
    </section>
@endsection
