@extends("layouts.backend")
@section("content")
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="card bg-white">
            <div class="card-body d-flex align-items-center justify-content-between">
              <h4 class="mt-1 mb-1">Admin Sayfasına Hoşgeldin!</h4>
              <button class="btn btn-info d-none d-md-block">Destek Al !</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card border-0 border-radius-2 bg-success">
            <div class="card-body">
              <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                <div class="icon-rounded-inverse-success icon-rounded-lg">
                  <i class="mdi mdi-book-open-page-variant"></i>
                </div>
                <div class="text-white">
                  <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">Sayfanızdaki Blog Sayısı</p>
                  <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                    <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1">20</h3>
                    <small class="mb-0">Makale</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card border-0 border-radius-2 bg-info">
            <div class="card-body">
              <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                <div class="icon-rounded-inverse-info icon-rounded-lg">
                  <i class="mdi mdi-basket"></i>
                </div>
                <div class="text-white">
                  <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">Sayfanızdaki Ürün Sayısı</p>
                  <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                    <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1">87</h3>
                    <small class="mb-0">Ürün</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card border-0 border-radius-2 bg-danger">
            <div class="card-body">
              <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                <div class="icon-rounded-inverse-danger icon-rounded-lg">
                  <i class="mdi mdi-image-area"></i>
                </div>
                <div class="text-white">
                  <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">Resimler</p>
                  <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                    <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1">61</h3>
                    <small class="mb-0">Resim</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card border-0 border-radius-2 bg-warning">
            <div class="card-body">
              <div class="d-flex flex-md-column flex-xl-row flex-wrap  align-items-center justify-content-between">
                <div class="icon-rounded-inverse-warning icon-rounded-lg">
                  <i class="mdi mdi-account"></i>
                </div>
                <div class="text-white">
                  <p class="font-weight-medium mt-md-2 mt-xl-0 text-md-center text-xl-left">Kullanıcılar</p>
                  <div class="d-flex flex-md-column flex-xl-row flex-wrap align-items-baseline align-items-md-center align-items-xl-baseline">
                    <h3 class="mb-0 mb-md-1 mb-lg-0 mr-1">1</h3>
                    <small class="mb-0">Kişi</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.sepetteyim.com/" target="_blank">Sepetteyim Grup Bilişim</a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Siz sadece hayal edin. <i class="mdi mdi-heart text-danger"></i></span>
      </div>
    </footer>
    <!-- partial -->
  </div>
@endsection

@push("customJs")
@endpush

@push("customCss")
@endpush