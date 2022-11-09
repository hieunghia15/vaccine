@extends('guest.layout-guest',[
'title' => __($title ?? 'Vắc xin COVID-19')
])
@section('main')
<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Vắc xin COVID-19</h1>
                <span class="text-white">09 loại vắc xin được cấp phép tại Việt Nam</span>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->
<!--================Blog Categorie Area =================-->
<section class="blog_categorie_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="categories_post">
                    <img src="../../medino/assets/images/vaccines/vaccine.jpg" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="{{route('guest.vaccine-detail',$vaccine_astra->id)}}">
                                <h5>{{$vaccine_astra->name}}</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>{{$vaccine_astra->manufacture->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="categories_post">
                    <img src="../../medino/assets/images/vaccines/vaccine.jpg" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="{{route('guest.vaccine-detail',$vaccine_sputnikv->id)}}">
                                <h5>{{$vaccine_sputnikv->name}}</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>{{$vaccine_sputnikv->manufacture->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="categories_post">
                    <img src="../../medino/assets/images/vaccines/vaccine.jpg" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="{{route('guest.vaccine-detail',$vaccine_janssen->id)}}">
                                <h5>{{$vaccine_janssen->name}}</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>{{$vaccine_janssen->manufacture->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="categories_post">
                    <img src="../../medino/assets/images/vaccines/vaccine.jpg" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="{{route('guest.vaccine-detail',$vaccine_moderna->id)}}">
                                <h5>{{$vaccine_moderna->name}}</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>{{$vaccine_moderna->manufacture->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="categories_post">
                    <img src="../../medino/assets/images/vaccines/vaccine.jpg" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="{{route('guest.vaccine-detail',$vaccine_pfizer->id)}}">
                                <h5>{{$vaccine_pfizer->name}}</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>{{$vaccine_pfizer->manufacture->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="categories_post">
                    <img src="../../medino/assets/images/vaccines/vaccine.jpg" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="{{route('guest.vaccine-detail',$vaccine_vero_cell->id)}}">
                                <h5>{{$vaccine_vero_cell->name}}</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>{{$vaccine_vero_cell->manufacture->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="categories_post">
                    <img src="../../medino/assets/images/vaccines/vaccine.jpg" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="{{route('guest.vaccine-detail',$vaccine_hayat_vax->id)}}">
                                <h5>{{$vaccine_hayat_vax->name}}</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>{{$vaccine_hayat_vax->manufacture->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="categories_post">
                    <img src="../../medino/assets/images/vaccines/vaccine.jpg" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="{{route('guest.vaccine-detail',$vaccine_abdala->id)}}">
                                <h5>{{$vaccine_abdala->name}}</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>{{$vaccine_abdala->manufacture->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="categories_post">
                    <img src="../../medino/assets/images/vaccines/vaccine.jpg" alt="post">
                    <div class="categories_details">
                        <div class="categories_text">
                            <a href="{{route('guest.vaccine-detail',$vaccine_covaxin->id)}}">
                                <h5>{{$vaccine_covaxin->name}}</h5>
                            </a>
                            <div class="border_line"></div>
                            <p>{{$vaccine_covaxin->manufacture->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Categorie Area =================-->
@endsection