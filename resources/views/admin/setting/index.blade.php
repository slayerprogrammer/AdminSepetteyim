@extends('layouts.backend.admin')

@section('title','Ana Sayfa Ayarları')

@push('css')

@endpush()

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row grid-margin">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Site Ayarları</h4>
                            <form action="{{route('admin.setting.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Logo Resmi</label>
                                    </div>
                                <div class="input-group col-lg-6">
                                    <img src="/storage/{{$settings->logo}}">
                                </div>
                                </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Description</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" value="{{isset ($settings->description) ? $settings->description : ''}}" maxlength="210" name="description" id="defaultconfig-4" type="text" placeholder="Site Açıklaması..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Keyword</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" value="{{isset ($settings->keyword) ? $settings->keyword : ''}}" maxlength="210" name="keyword" id="defaultconfig-2" type="text" placeholder="Site Kelimeleri..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Email</label>
                                </div>
                                <div class="col-lg-8">
                                    <input id="cemail" value="{{isset ($settings->mail) ? $settings->mail : ''}}" class="form-control" type="email" name="mail" required="" placeholder="Kurumsal Email Adresi..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Telefon</label>
                                </div>
                                <div class="col-lg-8">
                                    <input id="phone" value="{{isset ($settings->phone) ? $settings->phone : ''}}" class="form-control" type="number" name="phone" required="" placeholder="Kurumsal Telefon Numarası..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Fax</label>
                                </div>
                                <div class="col-lg-8">
                                    <input id="fax" value="{{isset ($settings->fax) ? $settings->fax : ''}}" class="form-control" type="number" name="fax" required="" placeholder="Kurumsal Fax Numarası..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Cep Telefonu</label>
                                </div>
                                <div class="col-lg-8">
                                    <input id="mobilephone" value="{{isset ($settings->mobilephone) ? $settings->mobilephone : ''}}" class="form-control" type="number" name="mobilephone" required="" placeholder="Kurumsal Cep Telefonu..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Whatsapp Linki</label>
                                </div>
                                <div class="col-lg-8">
                                    <input id="whatsapp" value="{{isset ($settings->whatsapp) ? $settings->whatsapp : ''}}" class="form-control" type="url" name="whatsapp" required="" placeholder="Kurumsal Whatsapp Adresi..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">İnstagram Linki</label>
                                </div>
                                <div class="col-lg-8">
                                    <input id="instagram" value="{{isset ($settings->instagram) ? $settings->instagram : ''}}" class="form-control" type="url" name="instagram" required="" placeholder="Kurumsal Instagram Adresi..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Facebook Linki</label>
                                </div>
                                <div class="col-lg-8">
                                    <input id="facebook" value="{{isset ($settings->facebook) ? $settings->facebook : ''}}" class="form-control" type="url" name="facebook" required="" placeholder="Kurumsal Facebook Adresi..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Logo Yükle</label>
                                </div>
                                <div class="input-group col-lg-2">
                                    <input type="file" name="logo">
                                </div>
                            </div>
                            <button type="submit" value="Submit" class="btn btn-success btn-rounded btn-fw">Kaydet</button>
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