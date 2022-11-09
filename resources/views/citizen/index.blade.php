@extends('guest.layout-guest',[
'title' => __($title ?? 'Trang chủ')
])
@section('main')
<!-- Banner Area Starts -->
<section class="banner-area" style="margin-top:-8%">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h1>Tiêm vắc xin phòng Covid-19</h1>
                <h4>Tiêm vắc xin phòng COVID-19 vì lợi ích bản thân, cộng đồng, tránh nguy cơ bùng phát dịch trở lại
                </h4>
                <a href="" class="template-btn mt-3">Vắc xin COVID-19</a>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

<!-- Feature Area Starts -->
<section class="feature-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-feature text-center item-padding">
                    <img src="medino/assets/images/feature1.png" alt="">
                    <h3>Độ hiệu quả cao</h3>
                    <p class="pt-3">Tất cả các loại vắc xin được WHO chấp thuận đã được chứng minh là có hiệu quả cao
                        trong việc bảo vệ bạn khỏi các biến chứng nặng và tử vong do COVID-19. Loại vắc-xin tốt nhất để
                        tiêm là loại có sẵn và bạn có thể tiếp cận để tiêm nhanh nhất.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature text-center item-padding mt-4 mt-md-0">
                    <img src="medino/assets/images/feature2.png" alt="">
                    <h3>09 loại vắc xin được phê duyệt</h3>
                    <p class="pt-3">Trong năm 2021, Bộ Y tế đã phê duyệt 9 loại vắc xin COVID-19 để đáp ứng nhu cầu
                        trong phòng chống dịch trong nước. </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature text-center item-padding mt-4 mt-lg-0">
                    <img src="medino/assets/images/feature3.png" alt="">
                    <h3>An toàn cho việc tiêm chủng</h3>
                    <p class="pt-3">Vắc xin phòng COVID-19 phải trải qua quá trình kiểm tra nghiêm ngặt trong các thử
                        nghiệm lâm sàng để chứng mình và đáp ứng các tiêu chuẩn quốc tế đã được thống nhất về tính an
                        toàn và hiệu quả. </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature text-center item-padding mt-4 mt-lg-0">
                    <img src="medino/assets/images/feature4.png" alt="">
                    <h3>Hoạt động của vắc xin</h3>
                    <p class="pt-3">Vắc xin hoạt động bằng cách bắt chước tác nhân truyền nhiễm - vi rút, vi khuẩn hoặc
                        vi sinh vật khác có thể gây bệnh. Điều này "dạy" hệ thống miễn dịch của chúng ta phản ứng nhanh
                        chóng và hiệu quả để chống lại nó.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature Area End -->

<!-- Specialist Area Starts -->
<section class="specialist-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-top text-center">
                    <h2>Thông tin tiêm chủng</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-doctor mb-4 mb-lg-0">
                    <div class="content-area">
                        <div class="doctor-name text-center">
                            <h3> <i class="nav-icon fas fa-syringe"></i> Số mũi đã tiêm</h3>
                            <h6>3.000.000 mũi</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-doctor mb-4 mb-lg-0">
                    <div class="content-area">
                        <div class="doctor-name text-center">
                            <h3> <i class="fas fa-shield-alt"></i> Số mũi đã tiêm hôm qua</h3>
                            <h6>43.046 mũi</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-doctor mb-4 mb-lg-0">
                    <div class="content-area">
                        <div class="doctor-name text-center">
                            <h3> <i class="fas fa-user-shield"></i> Tỷ lệ tiêm/dân số</h3>
                            <h6>275%</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-doctor mb-4 mb-lg-0">
                    <div class="content-area">
                        <div class="doctor-name text-center">
                            <h3> <i class="fas fa-users"></i> Số người tiêm (>=3 mũi)</h3>
                            <h6>3562.678 người</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Specialist Area Starts -->

<!-- Hotline Area Starts -->
<section class="text-center section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Dữ liệu tiêm chủng</h3>
                <div class="card-body">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hotline Area End -->
@endsection