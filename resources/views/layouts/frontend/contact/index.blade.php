@extends('layouts.frontend.partial.blank')
@section('title','İletişim')
@section('content')
    <!-- Map Area Start -->
    <div class="address-info-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 map-area">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3059.005555888801!2d32.85603346451635!3d39.941265392344015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d34e60d851611b%3A0xdb81da4ee5c4ffe1!2zS8O2a2zDvCBLdXl1bWN1bGFyIMOHYXLFn8Sxc8Sx!5e0!3m2!1str!2str!4v1543004549003" width="100%" height="480px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
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
                                <p><b>Adres:</b> Anafartalar Cad. Köklü Çarşısı No:14/9 Ulus/ANKARA
                                </p>
                                <p><b>Telefon:</b> 0 (312) 312 61 03</p>
                                <p><b>Telefon-2:</b> 0 (312) 324 55 48</p>
                                <p><b>Email:</b> info@guvenkuyumculuk.com</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="address-single">
                        <div class="all-adress-info">

                            <div class="info">
                                <h3>ŞUBE-1 İLETİŞİM</h3>
                                <p><b>Adres:</b> Anafartalar Cad. Talas Çarşısı No:20/B Ulus/ANKARA
                                </p>
                                <p><b>Telefon:</b> 0 (312) 312 61 03</p>
                                <p><b>Telefon-2:</b> 0 (312) 310 97 79</p>
                                <p><b>Email:</b> sube1@guvenkuyumculuk.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="address-single">
                        <div class="all-adress-info">

                            <div class="info">
                                <h3>ŞUBE-2 İLETİŞİM</h3>
                                <p><b>Adres:</b> Değirmendere Caddesi No:46/4 Şentepe/ANKARA
                                </p>
                                <p><b>Telefon:</b> 0 (312) 312 61 03</p>
                                <p><b>Telefon-2:</b> 0 (312) 330 92 43</p>
                                <p><b>Email:</b> sube2@guvenkuyumculuk.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Address Information Area End -->
@endsection()
