@extends('guest.layout-guest', [
    'title' => __($title ?? 'Trang chủ'),
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
                    <a href="{{ route('guest.vaccine') }}" class="template-btn mt-3">Vắc xin COVID-19</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Feature Area Starts -->
    <section class="feature-area section-padding" style="margin-top: -5%;margin-bottom: 5%">
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
                        <p class="pt-3">Vắc xin hoạt động bằng cách bắt chước tác nhân truyền nhiễm - vi rút, vi khuẩn
                            hoặc
                            vi sinh vật khác có thể gây bệnh. Điều này "dạy" hệ thống miễn dịch của chúng ta phản ứng nhanh
                            chóng và hiệu quả để chống lại nó.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Area End -->

    <!-- Specialist Area Starts -->
    <section class="specialist-area section-padding" style="margin-top: -10%;margin-bottom: 5%">
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
                                <h6> {{ $sum_dose }} mũi</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3> <i class="fas fa-shield-alt"></i> Số mũi đã tiêm hôm qua</h3>
                                <h6>{{ $yesterday_dose }} mũi</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3> <i class="fas fa-user-shield"></i> Tỷ lệ tiêm/dân số</h3>
                                <h6>{{ $percent_city }}%</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3> <i class="fas fa-users"></i> Số người tiêm (>=2 mũi)</h3>
                                <h6>{{ $sum_two_dose }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Specialist Area Starts -->

    <section class="text-center section-padding" style="margin-top: -10%">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Phân bố tiêm chủng theo địa phương tại Thành Phố Cần Thơ</h3>
                    <div class="card-body">
                        <div id="treeMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/treemap.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script>
        var wardNK0 = {{ Js::from($wardNK0) }};
        var wardNK1 = {{ Js::from($wardNK1) }};
        var wardNK2 = {{ Js::from($wardNK2) }};
        var wardNK3 = {{ Js::from($wardNK3) }};
        var wardNK4 = {{ Js::from($wardNK4) }};
        var wardNK5 = {{ Js::from($wardNK5) }};
        var wardNK6 = {{ Js::from($wardNK6) }};
        var wardNK7 = {{ Js::from($wardNK7) }};
        var wardNK8 = {{ Js::from($wardNK8) }};
        var wardNK9 = {{ Js::from($wardNK9) }};
        var wardNK10 = {{ Js::from($wardNK10) }};
        var wardNK11 = {{ Js::from($wardNK11) }};
        var wardNK12 = {{ Js::from($wardNK12) }};

        var wardOM0 = {{ Js::from($wardOM0) }};
        var wardOM1 = {{ Js::from($wardOM1) }};
        var wardOM2 = {{ Js::from($wardOM2) }};
        var wardOM3 = {{ Js::from($wardOM3) }};
        var wardOM4 = {{ Js::from($wardOM4) }};
        var wardOM5 = {{ Js::from($wardOM5) }};
        var wardOM6 = {{ Js::from($wardOM6) }};

        var wardBT0 = {{ Js::from($wardBT0) }};
        var wardBT1 = {{ Js::from($wardBT1) }};
        var wardBT2 = {{ Js::from($wardBT2) }};
        var wardBT3 = {{ Js::from($wardBT3) }};
        var wardBT4 = {{ Js::from($wardBT4) }};
        var wardBT5 = {{ Js::from($wardBT5) }};
        var wardBT6 = {{ Js::from($wardBT6) }};
        var wardBT7 = {{ Js::from($wardBT7) }};

        var wardCR0 = {{ Js::from($wardCR0) }};
        var wardCR1 = {{ Js::from($wardCR1) }};
        var wardCR2 = {{ Js::from($wardCR2) }};
        var wardCR3 = {{ Js::from($wardCR3) }};
        var wardCR4 = {{ Js::from($wardCR4) }};
        var wardCR5 = {{ Js::from($wardCR5) }};
        var wardCR6 = {{ Js::from($wardCR6) }};

        var wardTN0 = {{ Js::from($wardTN0) }};
        var wardTN1 = {{ Js::from($wardTN1) }};
        var wardTN2 = {{ Js::from($wardTN2) }};
        var wardTN3 = {{ Js::from($wardTN3) }};
        var wardTN4 = {{ Js::from($wardTN4) }};
        var wardTN5 = {{ Js::from($wardTN5) }};
        var wardTN6 = {{ Js::from($wardTN6) }};
        var wardTN7 = {{ Js::from($wardTN7) }};
        var wardTN8 = {{ Js::from($wardTN8) }};

        var wardVT0 = {{ Js::from($wardVT0) }};
        var wardVT1 = {{ Js::from($wardVT1) }};
        var wardVT2 = {{ Js::from($wardVT2) }};
        var wardVT3 = {{ Js::from($wardVT3) }};
        var wardVT4 = {{ Js::from($wardVT4) }};
        var wardVT5 = {{ Js::from($wardVT5) }};
        var wardVT6 = {{ Js::from($wardVT6) }};
        var wardVT7 = {{ Js::from($wardVT7) }};
        var wardVT8 = {{ Js::from($wardVT8) }};
        var wardVT9 = {{ Js::from($wardVT9) }};
        var wardVT10 = {{ Js::from($wardVT10) }};

        var wardPD0 = {{ Js::from($wardPD0) }};
        var wardPD1 = {{ Js::from($wardPD1) }};
        var wardPD2 = {{ Js::from($wardPD2) }};
        var wardPD3 = {{ Js::from($wardPD3) }};
        var wardPD4 = {{ Js::from($wardPD4) }};
        var wardPD5 = {{ Js::from($wardPD5) }};
        var wardPD6 = {{ Js::from($wardPD6) }};

        var wardTL0 = {{ Js::from($wardTL0) }};
        var wardTL1 = {{ Js::from($wardTL1) }};
        var wardTL2 = {{ Js::from($wardTL2) }};
        var wardTL3 = {{ Js::from($wardTL3) }};
        var wardTL4 = {{ Js::from($wardTL4) }};
        var wardTL5 = {{ Js::from($wardTL5) }};
        var wardTL6 = {{ Js::from($wardTL6) }};
        var wardTL7 = {{ Js::from($wardTL7) }};
        var wardTL8 = {{ Js::from($wardTL8) }};
        var wardTL9 = {{ Js::from($wardTL9) }};
        var wardTL10 = {{ Js::from($wardTL10) }};
        var wardTL11 = {{ Js::from($wardTL11) }};
        var wardTL12 = {{ Js::from($wardTL12) }};

        Highcharts.chart("treeMap", {
            series: [{
                type: "treemap",
                layoutAlgorithm: "stripes",
                alternateStartingDirection: true,
                levels: [{
                    level: 1,
                    layoutAlgorithm: "sliceAndDice",
                    dataLabels: {
                        enabled: true,
                        align: "left",
                        verticalAlign: "top",
                        style: {
                            fontSize: "15px",
                            fontWeight: "bold",
                        },
                    },
                }, ],
                data: [{
                        id: "A",
                        name: "Ninh Kiều",
                        color: "#50FFB1",
                    },
                    {
                        id: "B",
                        name: "Ô Môn",
                        color: "#ff7f50",
                    },
                    {
                        id: "C",
                        name: "Bình Thuỷ",
                        color: "#9400d3",
                    },
                    {
                        id: "D",
                        name: "Cái Răng",
                        color: "#ff8c00",
                    },
                    {
                        id: "E",
                        name: "Thốt Nốt",
                        color: "#1e90ff",
                    }, {
                        id: "F",
                        name: "Vĩnh Thạnh",
                        color: "#A9B4C2",
                    },
                    {
                        id: "G",
                        name: "Cờ Đỏ",
                        color: "#A9B4C2",
                    },
                    {
                        id: "H",
                        name: "Phong Điền",
                        color: "#A9B4C2",
                    },
                    {
                        id: "I",
                        name: "Thới Lai",
                        color: "#A9B4C2",
                    },
                    {
                        name: wardNK0[0].name,
                        parent: wardNK0[0].parent,
                        value: wardNK0[0].value,
                    },
                    {
                        name: wardNK1[1].name,
                        parent: wardNK1[1].parent,
                        value: wardNK1[1].value,
                    },
                    {
                        name: wardNK2[2].name,
                        parent: wardNK2[2].parent,
                        value: wardNK2[2].value,
                    },
                    {
                        name: wardNK3[3].name,
                        parent: wardNK3[3].parent,
                        value: wardNK3[3].value,
                    },
                    {
                        name: wardNK4[4].name,
                        parent: wardNK4[4].parent,
                        value: wardNK4[4].value,
                    },
                    {
                        name: wardNK5[5].name,
                        parent: wardNK5[5].parent,
                        value: wardNK5[5].value,
                    },
                    {
                        name: wardNK6[6].name,
                        parent: wardNK6[6].parent,
                        value: wardNK6[6].value,
                    },
                    {
                        name: wardNK7[7].name,
                        parent: wardNK7[7].parent,
                        value: wardNK7[7].value,
                    },
                    {
                        name: wardNK8[8].name,
                        parent: wardNK8[8].parent,
                        value: wardNK8[8].value,
                    },
                    {
                        name: wardNK9[9].name,
                        parent: wardNK9[9].parent,
                        value: wardNK9[9].value,
                    },
                    {
                        name: wardNK10[10].name,
                        parent: wardNK10[10].parent,
                        value: wardNK10[10].value,
                    },
                    {
                        name: wardNK11[11].name,
                        parent: wardNK11[11].parent,
                        value: wardNK11[11].value,
                    },
                    {
                        name: wardNK12[12].name,
                        parent: wardNK12[12].parent,
                        value: wardNK12[12].value,
                    },
                    {
                        name: wardOM0[0].name,
                        parent: wardOM0[0].parent,
                        value: wardOM0[0].value,
                    },
                    {
                        name: wardOM1[1].name,
                        parent: wardOM1[1].parent,
                        value: wardOM1[1].value,
                    },
                    {
                        name: wardOM2[2].name,
                        parent: wardOM2[2].parent,
                        value: wardOM2[2].value,
                    },
                    {
                        name: wardOM3[3].name,
                        parent: wardOM3[3].parent,
                        value: wardOM3[3].value,
                    },
                    {
                        name: wardOM4[4].name,
                        parent: wardOM4[4].parent,
                        value: wardOM4[4].value,
                    },
                    {
                        name: wardOM5[5].name,
                        parent: wardOM5[5].parent,
                        value: wardOM5[5].value,
                    },
                    {
                        name: wardOM6[6].name,
                        parent: wardOM6[6].parent,
                        value: wardOM6[6].value,
                    },
                    {
                        name: wardBT0[0].name,
                        parent: wardBT0[0].parent,
                        value: wardBT0[0].value,
                    },
                    {
                        name: wardBT1[1].name,
                        parent: wardBT1[1].parent,
                        value: wardBT1[1].value,
                    },
                    {
                        name: wardBT2[2].name,
                        parent: wardBT2[2].parent,
                        value: wardBT2[2].value,
                    },
                    {
                        name: wardBT3[3].name,
                        parent: wardBT3[3].parent,
                        value: wardBT3[3].value,
                    },
                    {
                        name: wardBT4[4].name,
                        parent: wardBT4[4].parent,
                        value: wardBT4[4].value,
                    },
                    {
                        name: wardBT5[5].name,
                        parent: wardBT5[5].parent,
                        value: wardBT5[5].value,
                    },
                    {
                        name: wardBT6[6].name,
                        parent: wardBT6[6].parent,
                        value: wardBT6[6].value,
                    },
                    {
                        name: wardBT7[7].name,
                        parent: wardBT7[7].parent,
                        value: wardBT7[7].value,
                    },
                    {
                        name: wardCR0[0].name,
                        parent: wardCR0[0].parent,
                        value: wardCR0[0].value,
                    },
                    {
                        name: wardCR1[1].name,
                        parent: wardCR1[1].parent,
                        value: wardCR1[1].value,
                    },
                    {
                        name: wardCR2[2].name,
                        parent: wardCR2[2].parent,
                        value: wardCR2[2].value,
                    },
                    {
                        name: wardCR3[3].name,
                        parent: wardCR3[3].parent,
                        value: wardCR3[3].value,
                    },
                    {
                        name: wardCR4[4].name,
                        parent: wardCR4[4].parent,
                        value: wardCR4[4].value,
                    },
                    {
                        name: wardCR5[5].name,
                        parent: wardCR5[5].parent,
                        value: wardCR5[5].value,
                    },
                    {
                        name: wardCR6[6].name,
                        parent: wardCR6[6].parent,
                        value: wardCR6[6].value,
                    },
                    {
                        name: wardTN0[0].name,
                        parent: wardTN0[0].parent,
                        value: wardTN0[0].value,
                    },
                    {
                        name: wardTN1[1].name,
                        parent: wardTN1[1].parent,
                        value: wardTN1[1].value,
                    },
                    {
                        name: wardTN2[2].name,
                        parent: wardTN2[2].parent,
                        value: wardTN2[2].value,
                    },
                    {
                        name: wardTN3[3].name,
                        parent: wardTN3[3].parent,
                        value: wardTN3[3].value,
                    },
                    {
                        name: wardTN4[4].name,
                        parent: wardTN4[4].parent,
                        value: wardTN4[4].value,
                    },
                    {
                        name: wardTN5[5].name,
                        parent: wardTN5[5].parent,
                        value: wardTN5[5].value,
                    },
                    {
                        name: wardTN6[6].name,
                        parent: wardTN6[6].parent,
                        value: wardTN6[6].value,
                    },
                    {
                        name: wardTN7[7].name,
                        parent: wardTN7[7].parent,
                        value: wardTN7[7].value,
                    },
                    {
                        name: wardTN8[8].name,
                        parent: wardTN8[8].parent,
                        value: wardTN8[8].value,
                    },
                    {
                        name: wardVT0[0].name,
                        parent: wardVT0[0].parent,
                        value: wardVT0[0].value,
                    },
                    {
                        name: wardVT1[1].name,
                        parent: wardVT1[1].parent,
                        value: wardVT1[1].value,
                    },
                    {
                        name: wardVT2[2].name,
                        parent: wardVT2[2].parent,
                        value: wardVT2[2].value,
                    },
                    {
                        name: wardVT3[3].name,
                        parent: wardVT3[3].parent,
                        value: wardVT3[3].value,
                    },
                    {
                        name: wardVT4[4].name,
                        parent: wardVT4[4].parent,
                        value: wardVT4[4].value,
                    },
                    {
                        name: wardVT5[5].name,
                        parent: wardVT5[5].parent,
                        value: wardVT5[5].value,
                    },
                    {
                        name: wardVT6[6].name,
                        parent: wardVT6[6].parent,
                        value: wardVT6[6].value,
                    },
                    {
                        name: wardVT7[7].name,
                        parent: wardVT7[7].parent,
                        value: wardVT7[7].value,
                    },
                    {
                        name: wardVT8[8].name,
                        parent: wardVT8[8].parent,
                        value: wardVT8[8].value,
                    },
                    {
                        name: wardVT9[9].name,
                        parent: wardVT9[9].parent,
                        value: wardVT9[9].value,
                    },
                    {
                        name: wardVT10[10].name,
                        parent: wardVT10[10].parent,
                        value: wardVT10[10].value,
                    },
                    {
                        name: wardPD0[0].name,
                        parent: wardPD0[0].parent,
                        value: wardPD0[0].value,
                    },
                    {
                        name: wardPD1[1].name,
                        parent: wardPD1[1].parent,
                        value: wardPD1[1].value,
                    },
                    {
                        name: wardPD2[2].name,
                        parent: wardPD2[2].parent,
                        value: wardPD2[2].value,
                    },
                    {
                        name: wardPD3[3].name,
                        parent: wardPD3[3].parent,
                        value: wardPD3[3].value,
                    },
                    {
                        name: wardPD4[4].name,
                        parent: wardPD4[4].parent,
                        value: wardPD4[4].value,
                    },
                    {
                        name: wardPD5[5].name,
                        parent: wardPD5[5].parent,
                        value: wardPD5[5].value,
                    },
                    {
                        name: wardPD6[6].name,
                        parent: wardPD6[6].parent,
                        value: wardPD6[6].value,
                    },
                    {
                        name: wardTL0[0].name,
                        parent: wardTL0[0].parent,
                        value: wardTL0[0].value,
                    },
                    {
                        name: wardTL1[1].name,
                        parent: wardTL1[1].parent,
                        value: wardTL1[1].value,
                    },
                    {
                        name: wardTL2[2].name,
                        parent: wardTL2[2].parent,
                        value: wardTL2[2].value,
                    },
                    {
                        name: wardTL3[3].name,
                        parent: wardTL3[3].parent,
                        value: wardTL3[3].value,
                    },
                    {
                        name: wardTL4[4].name,
                        parent: wardTL4[4].parent,
                        value: wardTL4[4].value,
                    },
                    {
                        name: wardTL5[5].name,
                        parent: wardTL5[5].parent,
                        value: wardTL5[5].value,
                    },
                    {
                        name: wardTL6[6].name,
                        parent: wardTL6[6].parent,
                        value: wardTL6[6].value,
                    },
                    {
                        name: wardTL7[7].name,
                        parent: wardTL7[7].parent,
                        value: wardTL7[7].value,
                    },
                    {
                        name: wardTL8[8].name,
                        parent: wardTL8[8].parent,
                        value: wardTL8[8].value,
                    },
                    {
                        name: wardTL9[9].name,
                        parent: wardTL9[9].parent,
                        value: wardTL9[9].value,
                    },
                    {
                        name: wardTL10[10].name,
                        parent: wardTL10[10].parent,
                        value: wardTL10[10].value,
                    },
                    {
                        name: wardTL11[11].name,
                        parent: wardTL11[11].parent,
                        value: wardTL11[11].value,
                    },
                    {
                        name: wardTL12[12].name,
                        parent: wardTL12[12].parent,
                        value: wardTL12[12].value,
                    },
                ],
            }, ],
            title: {
                text: "Bảng phân bố tiêm chủng",
            },
            subtitle: {
                text: "",
            },
            tooltip: {
                pointFormat: "<p><b>{point.name}</b>:{point.value} mũi tiêm</p>",
            },
        });
    </script>
@endsection
