@extends('layouts.frontend.partial.blank')
@section('title','Ana Sayfa')
@section('content')

<!-- slider Area Start -->
<div class="slider-area">

        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-3" class="slides">
                @foreach ($sliders as $slider)
                <img src="/storage/slider/{{isset ($slider->slider) ? $slider->slider: ''}}" alt="{{isset ($slider->keyword) ? $slider->keyword: ''}}" title="#slider-direction-{{isset ($slider->id) ? $slider->id: ''}}" />
                @endforeach
            </div>
            @foreach ($sliders as $slider)
            <div id="slider-direction-{{isset ($slider->id) ? $slider->id: ''}}" class="t-cn slider-direction">
                <div class="container slider-height">
                    <div class="row slider-height">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 slider-height">
                            <div class="slide-text">
                                <div class="cap-title wow bounceInDown" data-wow-duration="0.9s" data-wow-delay="0s">
                                    <h2><strong>{{isset ($slider->title1) ? $slider->title1: ''}}<br />{{isset ($slider->title2) ? $slider->title2: ''}}</strong></h2>
                                </div>
                                <div class="cap-shop wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
                                    <h4><strong>{{isset ($slider->title3) ? $slider->title3: ''}}</strong><br />{{isset ($slider->title4) ? $slider->title4: ''}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach





        </div>
    </div>
<!-- slider Area End-->
<!--New Product Area Start-->
    <div class="new-product-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="new-product-top">
                        <div class="col-50 padding-right">
                            <div class="single-top-product">
                                <img src="{{asset("assets/frontend/img/new-product/1.jpg")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik">
                            <div class="overlay-content">
                                <a href="">
                                    <h3>Güven Tektaş <br> Pırlanta Yüzük</h3>
                                </a>
                                <a href="" class="btn-product">Ürün Kodu: PR1212345</a>

                            </div>
                        </div>
                        <div class="single-top-product">
                            <img src="{{asset("assets/frontend/img/new-product/3.jpg")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik">
                            <div class="overlay-content">
                                <a href="">
                                    <h3>Güven Pırlantalı<br> Elmas Kolye</h3>
                                </a>
                                <a href="" class="btn-product">Ürün Kodu: EL101245</a>
                                <button class="price-offer">10% <br>İNDİRİM</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-50 padding-left">
                        <div class="single-top-product">
                            <img src="{{asset("assets/frontend/img/new-product/2.jpg")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik">
                            <div class="overlay-content">
                                <a href="">
                                    <h3>Güven Pırlantalı <br> Gümüş Kolye</h3>
                                </a>
                                <a href="" class="btn-product">Ürün Kodu: GR432341</a>
                            </div>
                        </div>
                        <div class="single-top-product">
                            <img src="{{asset("assets/frontend/img/new-product/4.jpg")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik">
                            <div class="overlay-content">
                                <a href="">
                                    <h3>Güven Pırlantalı<br> Altın Yüzük</h3>
                                </a>
                                <a href="" class="btn-product">Ürün Kodu: AL18523</a>
                                <button class="price-offer">15% <br>İNDİRİM</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="new-trend section-padding">
            <div class="row">
                <div class="section-title">
                    <h2>Yeni Ürünler</h2>
                </div>
                <div class="new-trend-list indicator-style">
                    <div class="col-md-4">
                        <div class="single-new-trend">
                            <a href=""><img src="{{asset("assets/frontend/img/urunler/altin/altin7.jpg")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik"></a>
                            <div class="overlay-content">
                                <a href="">
                                    <h2>Altın</h2>
                                </a>
                                <a href=" " class="btn-small">Güven Pırlanta</a>

                                <h4>Ürün Kodu:AL43345</h4>
                                </a>
                                <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-new-trend">
                            <a href=""><img src="{{asset("assets/frontend/img/urunler/altin/altin10.jpg")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik"></a>
                            <div class="overlay-content">
                                <a href="">
                                    <h2>Altın</h2>
                                </a>
                                <a href=" " class="btn-small">Güven Pırlanta</a>

                                <h4>Ürün Kodu:AL24345</h4>
                                </a>
                                <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-new-trend">
                            <a href="#"><img src="{{asset("assets/frontend/img/urunler/altin/altin8.jpg")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik"></a>
                            <div class="overlay-content">
                                <a href="">
                                    <h2>Altın</h2>
                                </a>
                                <a href=" " class="btn-small">Güven Pırlanta</a>

                                <h4>Ürün Kodu:AL53345</h4>
                                </a>
                                <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-new-trend">
                            <a href=""><img src="{{asset("assets/frontend/img/urunler/altin/altin11.jpg")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik"></a>
                            <div class="overlay-content">
                                <a href="">
                                    <h2>Altın</h2>
                                </a>
                                <a href=" " class="btn-small">Güven Pırlanta</a>

                                <h4>Ürün Kodu:AL2345</h4>
                                </a>
                                <div class="pro-rating">
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star color"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- New Product Area End -->
<!-- New Product Area Start -->
<div class="new-collection-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="new-collection-info">
                    <h2>Görmeden Almam Diyorsanız !!</h2>
                    <p>Sizleri beğendiğiniz ürünü denemeye davet ediyoruz.</p>
                    <a href="contact-us.html" class="btn-default">İLETİŞİM</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- New Product Area End -->
<!--Featured Product Area Start-->
<div class="featured-product-area section-padding">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>Özel Ürünler</h2>
            </div>
            <div class="featured-product-list indicator-style">
                <div class="col-md-3">
                    <div class="single-new-trend">
                        <a href=""><img src="{{asset("assets/frontend/img/urunler/pirlanta/pirlanta.jpg")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik"></a>
                        <div class="overlay-content">
                            <a href="">
                                <h2>Pırlanta</h2>
                            </a>

                            <h4>Ürün Kodu: PR12021 </h4>
                            </a>
                            <div class="pro-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-new-trend">
                        <a href=""><img src="{{asset("assets/frontend/img/urunler/pirlanta/pirlanta7.JPG")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik"></a>
                        <div class="overlay-content">
                            <a href="">
                                <h2>Pırlanta</h2>
                            </a>

                            <h4>Ürün Kodu: PR14253 </h4>
                            </a>
                            <div class="pro-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-new-trend">
                        <a href=""><img src="{{asset("assets/frontend/img/urunler/pirlanta/pirlanta8.JPG")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik"></a>
                        <div class="overlay-content">
                            <a href="">
                                <h2>Pırlanta</h2>
                            </a>


                            <h4>Ürün Kodu: PR98231 </h4>
                            </a>
                            <div class="pro-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-new-trend">
                        <a href=""><img src="{{asset("assets/frontend/img/urunler/pirlanta/pirlanta9.JPG")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik"></a>
                        <div class="overlay-content">
                            <a href="">
                                <h2>Pırlanta</h2>
                            </a>

                            <h4>Ürün Kodu: PR 1034 </h4>
                            </a>
                            <div class="pro-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-new-trend">
                        <a href=""><img src="{{asset("assets/frontend/img/urunler/pirlanta/pirlanta10.JPG")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik"></a>
                        <div class="overlay-content">
                            <a href="">
                                <h2>Pırlanta</h2>
                            </a>

                            <h4>Ürün Kodu: PR98524 </h4>
                            </a>
                            <div class="pro-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--Featured Product Area End-->
<!-- Brand Area Start -->
<div class="brand-area section-padding">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>MARKALARIMIZ</h2>
            </div>
            <div class="brand-list indicator-style2">
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="{{asset("assets/frontend/img/marka/arpas-gold.jpg")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="{{asset("assets/frontend/img/marka/cetas.png")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="{{asset("assets/frontend/img/marka/diva.png")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="{{asset("assets/frontend/img/marka/yamachi.jpg")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="{{asset("assets/frontend/img/marka/bernardo.jpg")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="{{asset("assets/frontend/img/marka/blue.jpg")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-brand">
                        <a href="#">
                            <img src="{{asset("assets/frontend/img/marka/baskent.png")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Brand Area End -->
@endsection()
