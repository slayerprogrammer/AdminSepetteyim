@extends('layouts.frontend.partial.blank')
@section('title','İletişim')
@section('content')
    <!-- Map Area Start -->
    <div class="address-info-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 map-area">
                    <iframe src="https://www.google.com/maps/embed?{{$contacts->maps}}" width="100%" height="480px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
                <div class="contact-form-area">

                    <div class="about-title">
                        <h3>Bize Ulaşın</h3>
                    </div>

                    <div class="col-md-6">
                        <div class="contact-form-left">
                            <input type="text" placeholder="Ad Soyad" name="name" id="name">
                            <input type="email" placeholder="Mail Adresiniz" name="email" id="email">
                            <input type="text" placeholder="Telefon Numaranız" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-form-right">
                            <div class="input-message">
                                <br>
                                <textarea name="message" id="message" placeholder="Mesajınız"></textarea>
                                <input class="btn btn-default" type="submit" value="Gönder" name="submit" id="submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Map Area End -->
    <!-- Address Information Area Start -->
    <div class="address-info-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 hidden-sm">
                    <div class="address-single">

                        <div class="all-adress-info">

                            <div class="info">
                                <h3>MERKEZ İLETİŞİM</h3>
                                <p><b>Adres:</b> {{$contacts->address1}}
                                </p>
                                <p><b>Telefon:</b>{{$contacts->phone1}}</p>
                                <p><b>Telefon-2:</b>{{$contacts->mobile1}}</p>
                                <p><b>Email:</b>{{$contacts->mail1}}</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="address-single">
                        <div class="all-adress-info">

                            <div class="info">
                                <h3>ŞUBE-1 İLETİŞİM</h3>
                                <p><b>Adres:</b> {{$contacts->address2}}
                                </p>
                                <p><b>Telefon:</b>{{$contacts->phone2}}</p>
                                <p><b>Telefon-2:</b>{{$contacts->mobile2}}</p>
                                <p><b>Email:</b>{{$contacts->mail2}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="address-single">
                        <div class="all-adress-info">

                            <div class="info">
                                <h3>ŞUBE-2 İLETİŞİM</h3>
                                <p><b>Adres:</b> {{$contacts->address3}}
                                </p>
                                <p><b>Telefon:</b>{{$contacts->phone3}}</p>
                                <p><b>Telefon-2:</b>{{$contacts->mobile3}}</p>
                                <p><b>Email:</b>{{$contacts->mail3}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Address Information Area End -->
@endsection()
