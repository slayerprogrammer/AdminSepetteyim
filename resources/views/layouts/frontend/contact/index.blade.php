@extends('layouts.frontend.partial.blank')
@section('title','İletişim')
@section('content')
    <!-- Map Area Start -->
    <div class="address-info-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 map-area">
                    <iframe src="https://www.google.com/maps/embed?{{isset ($contacts->maps1) ? $contacts->maps1 : ''}}" width="100%" height="480px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
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
                                <p><b>Adres:</b> {{isset ($contacts->address1) ? $contacts->address1 : ''}} {{isset ($contacts->city1) ? $contacts->city1 : ''}}
                                </p>
                                <p><b>Telefon:</b>{{isset ($contacts->phone1) ? $contacts->phone1 : ''}}</p>
                                <p><b>Telefon-2:</b>{{isset ($contacts->mobile1) ? $contacts->mobile1 : ''}}</p>
                                <p><b>Email:</b>{{isset ($contacts->mail1) ? $contacts->mail1 : ''}}</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="address-single">
                        <div class="all-adress-info">

                            <div class="info">
                                <h3>ŞUBE-1 İLETİŞİM</h3>
                                <p><b>Adres:</b> {{isset ($contacts->address2) ? $contacts->address2 : ''}} {{isset ($contacts->city2) ? $contacts->city2 : ''}}
                                </p>
                                <p><b>Telefon:</b>{{isset ($contacts->phone2) ? $contacts->phone2 : ''}}</p>
                                <p><b>Telefon-2:</b>{{isset ($contacts->mobile2) ? $contacts->mobile2 : ''}}</p>
                                <p><b>Email:</b>{{isset ($contacts->mail2) ? $contacts->mail2 : ''}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="address-single">
                        <div class="all-adress-info">

                            <div class="info">
                                <h3>ŞUBE-2 İLETİŞİM</h3>
                                <p><b>Adres:</b> {{isset ($contacts->address3) ? $contacts->address3 : ''}} {{isset ($contacts->city3) ? $contacts->city3 : ''}}
                                </p>
                                <p><b>Telefon:</b>{{isset ($contacts->phone3) ? $contacts->phone3 : ''}}</p>
                                <p><b>Telefon-2:</b>{{isset ($contacts->mobile3) ? $contacts->mobile3 : ''}}</p>
                                <p><b>Email:</b>{{isset ($contacts->mail3) ? $contacts->mail3 : ''}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Address Information Area End -->
@endsection()
