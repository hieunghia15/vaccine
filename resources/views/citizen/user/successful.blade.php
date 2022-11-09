@extends('citizen.layout-user',[
'title' => __($title ?? 'Đăng ký tiêm chuủng thành công')
])
@section('main')
<!-----------page_title--------------->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Đăng ký tiêm chủng COVID-19 thành công</h1>
            </div>
        </div>
    </div>
</section>
<!-----------page_title-end-------------->
<section class="about type_two">
        <!-----Info------>
        <div class="card-body">
            <div class="container py4">
                <div class="row">
                    <div class="col-md-12">
                       <center> <img alt="" class="mr-3" src="../../citizen/assets/image/svg/check.png" width="10%"> </center>
                       <br>
                       <center><p>Cảm ơn công dân đã đăng ký tiêm vắc xin COVID-19. Hiện tại, thành phố đang tiến hành
                            thu thập danh sách đối tượng đăng ký tiêm chủng theo từng địa bàn</p></center>
                            <center><p>Chúng tôi sẽ liên hệ sớm với công dân khi có kế hoạch tiêm chủng trong thời gian sớm nhất</p></center>
                            <br>
                            <center><a href="{{route('guest.index')}}" class="btn btn-primary">Trang chủ</a></center>
                    </div>                      
                </div>             
            </div>
        </div>
    </div>
</section>
@endsection