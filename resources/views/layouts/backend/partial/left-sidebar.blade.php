<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Ana Sayfa</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.setting.index')}}">
                <i class="mdi mdi-palette menu-icon"></i>
                <span href="settings" class="menu-title">Site Ayarları</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Hakkımızda</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.contact.create')}}">
                <i class="mdi mdi-pencil-box-outline menu-icon"></i>
                <span class="menu-title">İletişim</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="mdi mdi-chart-pie menu-icon"></i>
                <span class="menu-title">Üst ve Alt Slider</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.slider.index')}}">Üst Slider</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Alt Slider</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                <i class="mdi mdi-layers menu-icon"></i>
                <span class="menu-title">Ürün ve Kategoriler</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.category.index')}}">Kategoriler</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.html">Ürün Ekle</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.html">Ürün Listele</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.contact.index')}}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Mesaj Kutusu</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables2" aria-expanded="false" aria-controls="tables2">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Mail Kutusu</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables2">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Mail Gönder</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Mail Listele</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Blog</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Blog Ekle</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Blog Listele</a></li>
                </ul>
            </div>
        </li>

    </ul>
</nav>