
<div class="footer-top-area">
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="footer-left">
                <a href="/">
                    <img src="/storage/{{isset ($settings->logo) ? $settings->logo: ''}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik">
                </a>
                <p>Müşteri temsilcilerimiz ile telefonda görüşerek, ürün hakkında bilgi alabilir, yeni sipariş verebilirsiniz.
                </p>
                <div class="social-icon">
                    <ul>
                        <li>
                            <a href="{{isset ($settings->facebook) ? $settings->facebook : ''}}">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{isset ($settings->instagram) ? $settings->instagram : ''}}">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{isset ($settings->whatsapp) ? $settings->whatsapp : ''}}">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="footer-widget widget-contact-us">
                <h2 class="footer-w-title"><b>MERKEZ İLETİŞİM</b></h2>
                <ul class="footer-list">
                    <li>
                        <p><span><b>Adres:</b> </span> {{isset ($contacts->address1) ? $contacts->address1 : ''}} <br>{{isset ($contacts->city1) ? $contacts->city1 : ''}}</p>
                    </li>
                    <li>
                        <p><span><b>Telefon:</b></span>{{isset ($contacts->phone1) ? $contacts->phone1 : ''}}</p>
                    </li>
                    <li>
                        <p><span><b>Telefon-2:</b></span>{{isset ($contacts->mobile1) ? $contacts->mobile1 : ''}}</p>
                    </li>
                    <li>
                        <p><span> <b>Email:</b> </span>{{isset ($contacts->mail1) ? $contacts->mail1 : ''}}</p>
                    </li>
                </ul>
            </div>
            <div class="map-area">
                <iframe src="https://www.google.com/maps/embed?{{isset ($contacts->maps1) ? $contacts->maps1 : ''}}"
                        width="100%" height="180px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="footer-widget widget-contact-us">
                <h2 class="footer-w-title"><b>ŞUBE-1 İLETİŞİM</b></h2>
                <ul class="footer-list">
                    <li>
                        <p><span><b>Adres:</b> </span> {{isset ($contacts->address2) ? $contacts->address2 : ''}} <br>{{isset ($contacts->city2) ? $contacts->city2 : ''}}</p>
                    </li>
                    <li>
                        <p><span><b>Telefon:</b></span>{{isset ($contacts->phone1) ? $contacts->phone2 : ''}}</p>
                    </li>
                    <li>
                        <p><span><b>Telefon-2:</b></span>{{isset ($contacts->mobile1) ? $contacts->mobile2 : ''}}</p>
                    </li>
                    <li>
                        <p><span> <b>Email:</b> </span>{{isset ($contacts->mail2) ? $contacts->mail2 : ''}}</p>
                    </li>
                </ul>
            </div>
            <div class="map-area">
                <iframe src="https://www.google.com/maps/embed?{{isset ($contacts->maps2) ? $contacts->maps2 : ''}}"
                        width="100%" height="180px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="footer-widget widget-contact-us">
                <h2 class="footer-w-title"><b>ŞUBE-2 İLETİŞİM</b></h2>
                <ul class="footer-list">
                    <li>
                        <p><span><b>Adres:</b> </span> {{isset ($contacts->address3) ? $contacts->address3 : ''}} <br>{{isset ($contacts->city3) ? $contacts->city3 : ''}}</p>
                    </li>
                    <li>
                        <p><span><b>Telefon:</b></span>{{isset ($contacts->phone3) ? $contacts->phone3 : ''}}</p>
                    </li>
                    <li>
                        <p><span><b>Telefon-2:</b></span>{{isset ($contacts->mobile3) ? $contacts->mobile3 : ''}}</p>
                    </li>
                    <li>
                        <p><span> <b>Email:</b> </span>{{isset ($contacts->mail3) ? $contacts->mail3 : ''}}</p>
                    </li>
                </ul>
            </div>
            <div class="map-area">
                <iframe src="https://www.google.com/maps/embed?{{isset ($contacts->maps3) ? $contacts->maps3 : ''}}"
                        width="100%" height="180px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

    </div>
</div>
</div>
<!-- Footer Area End -->
<!-- Footer Bottom Area -->
<div class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="copyright pull-left">
                    <p>Copyright 2019 <a target="_blank" href="https://sepetteyim.com">sepetteyim.com</a> All rights reserved.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="paypal-img pull-right">
                    <img src="{{asset("assets/frontend/img/paypal.png")}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik">
                </div>
            </div>
        </div>
    </div>
</div>