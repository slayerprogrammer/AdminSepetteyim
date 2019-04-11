@extends('layouts.frontend.partial.blank')
@section('title','Hakkımızda')
@section('content')
    <!-- Breadcrumbs Area Start -->
    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-single">
                        <ul class="breadcrumbs">
                            <li><a href="/about" title="Return to Home">
                                    Ana Sayfa
                                </a></li>
                            <li>
                                <span>&gt;</span>
                            </li>
                            <li>Kurumsal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Area End -->
    <!-- About Area Start -->
    <div class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="welcome-left">
                        <div class="about-title">
                            <h3>Hakkımızda</h3>
                        </div>
                        <div class="welcome-left">
                            <p>1982 yılında Mustafa Topçu tarafından kurulmuş olan Güven Kuyumculuk firmamız ürün kalitesi ve müşteri memnuniyetini ilke edinerek çıktığı bu yolda 2010 yılında 2. Şubesini açarak semt kuyumculuğunda müşteri memnuniyeti üst
                                sıralarda tutmuştur. 2019 yılında 3. Mağazasını Ulus köklü kuyumcular Çarşısı’nda açarak ilk zamanki gururu ve ilkeyi yukarı taşımayı sürdürmektedir.</p>
                            <p> Güven kuyumculuk ve mücevherat olarak şuan 3 mağazası ile müşterilerine hizmet vermeye devam ediyor ve oğulları siyami topçu ve Sefer Topçu ile yeniliği ve teknolojiyi mağazalarına getirerek emin adımlar ile sektörde faaliyet
                                göstermeye devam ediyor . Güven kuyumculuk ve mücevheratın buraya gelmesinin en büyük meyvesi mutlu müşterilerine verdiği güven ve sadakat değeri ile büyümeye devam ediyor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="welcome-right">
                        <a href="#"><img src="{{asset("assets/frontend/img/about-us.jpg")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik"></a>
                    </div>
                </div>
            </div>
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
        </div>
    </div>
    <!-- About Area End -->
@endsection()
