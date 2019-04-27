@extends('layouts.backend.admin')

@section('title','Slider Ekle')

@push('css')

@endpush()

@section('content')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row grid-margin">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('admin.slider.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="col-form-label">Slider Yükle</label>
                                        </div>
                                        <div class="input-group col-lg-2">
                                            <input type="file" name="slider">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="col-form-label">Resim Alt Etiketi</label>

                                        </div>
                                        <div class="col-lg-8">
                                            <input class="form-control" maxlength="400" name="keyword" id="defaultconfig-4" type="text" placeholder="Resim Alt Etiketi Giriniz">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="col-form-label">Yazı 1</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input class="form-control" maxlength="400" name="title1" id="defaultconfig-4" type="text" placeholder="Slider Başlık 1">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="col-form-label">Yazı 2</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input class="form-control" maxlength="400" name="title2" id="defaultconfig-4" type="text" placeholder="Slider Başlık 2">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="col-form-label">Yazı 3</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input class="form-control" maxlength="400" name="title3" id="defaultconfig-4" type="text" placeholder="Slider Alt Yazı 1">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="col-form-label">Yazı 4</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input class="form-control" maxlength="400" name="title4" id="defaultconfig-4" type="text" placeholder="Slider Alt Yazı 2">
                                        </div>
                                    </div>


                                    <button type="submit" value="Submit" class="btn btn-success btn-rounded btn-fw" onclick="showSwal('success-message')">Kaydet</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection()

@push('js')

@endpush()