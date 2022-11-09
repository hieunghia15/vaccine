@extends('guest.layout-guest', [
    'title' => __($title ?? 'Vắc xin'.$vaccine->name),
])
@section('main')
    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Vắc xin {{ $vaccine_name }}</h2>
                    <span class="text-white">{{ $vaccine->manufacture->name }}</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="../../medino/assets/images/banner-bg4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="quotes">
                                {{ $posts->description }}
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <img class="img-fluid" src="assets/images/blog-details/post-img1.jpg" alt="">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="assets/images/blog-details/post-img2.jpg" alt="">
                                </div>
                                <div class="col-lg-12 my-4">
                                    {!! $posts->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Thông tin cơ bản</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="justify-content-between">
                                        <div class="row">
                                            <div class="col-md-6 text-left">
                                                <p>Tên loại vắc xin</p>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <p>{{ $vaccine->name }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="justify-content-between">
                                        <div class="row">
                                            <div class="col-md-6 text-left">
                                                <p>Độ tuổi áp dụng</p>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <p>{{ $vaccine->applicable_age }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="justify-content-between">
                                        <div class="row">
                                            <div class="col-md-6 text-left">
                                                <p>Độ hiệu quả</p>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <p>{{ $vaccine->effection }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="justify-content-between">
                                        <div class="row">
                                            <div class="col-md-6 text-left">
                                                <p>Liều tiêm</p>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <p>{{ $vaccine->injection_dose }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="justify-content-between">
                                        <div class="row">
                                            <div class="col-md-6 text-left">
                                                <p>Thời gian</p>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <p>{{ $vaccine->injection_time }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="justify-content-between">
                                        <div class="row">
                                            <div class="col-md-6 text-left">
                                                <p>Hãng sản xuất</p>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <p>{{ $vaccine->manufacture->name }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="justify-content-between">
                                        <div class="row">
                                            <div class="col-md-6 text-left">
                                                <p>Loại vắc xin</p>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <p>{{ $vaccine->vaccineType->name }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection
