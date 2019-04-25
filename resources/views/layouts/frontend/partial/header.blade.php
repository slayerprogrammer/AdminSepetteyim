<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 hidden-xs">
                    <div class="header-top-message pull-left">
                        <span><i class="fa fa-envelope"></i>{{isset ($settings->mail) ? $settings->mail : ''}}</span>
                        <span><i class="fa fa-phone"></i>{{isset ($settings->phone) ? $settings->phone : ''}}</span>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="header-top-menu pull-right">
                        <ul class="nav-menu">
                            <li><a target="_blank" title="Facebook" href="{{isset ($settings->facebook) ? $settings->facebook : ''}}" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" title="Instagram" href="{{isset ($settings->instagram) ? $settings->instagram : ''}}" class="instagram social-icon"><i class="fa fa-instagram"></i></a></li>
                            <li><a target="_blank" title="Whatsapp" href="{{isset ($settings->whatsapp) ? $settings->whatsapp : ''}}" class="whatsapp social-icon"><i class="fa fa-whatsapp"></i></a></li>

                            <li><a href="#">Dil Seçeneği</a>
                                <div class="ht-menu-down">
                                    <ul>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Türkçe</a></li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-sm-2 col-xs-6">
                    <div class="header-logo">
                        <a href="/">
                            <img class="logo" src="/storage/{{isset ($settings->logo) ? $settings->logo: ''}}" alt="Ankara Kuyumcu, Ankaradaki kuyumcular, Güven Mücevherat, Güven Kuyumculuk, Ankara Altıncıları, Kuyumcu, Kuyumcular, Altın bilezik">
                        </a>
                    </div>
                </div>
                <div class="col-md-10 col-sm-9 hidden-xs">
                    <div class="mainmenu text-center">
                        <nav>
                            <ul id="nav">
                                <li><a href="/">Ana Sayfa</a></li>
                                <li><a href="/about">Kurumsal</a></li>
                                <li><a href="/gold">Altın</a></li>
                                <li><a href="/diamond">Pırlanta</a></li>
                                <li><a href="/diamond-cutter">Elmas</a></li>
                                <li><a href="/contact">İletişim</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="/">Ana Sayfa</a></li>
                                <li><a href="/about">Kurumsal</a></li>
                                <li><a href="/gold">Altın</a></li>
                                <li><a href="/diamond">Pırlanta</a></li>
                                <li><a href="/diamond-cutter">Elmas</a></li>
                                <li><a href="/contact">İletişim</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>