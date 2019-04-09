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
                            <form action="{{route('admin.setting.store')}}" method="POST">
                                @csrf
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Description</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="210" name="description" id="defaultconfig-4"type="text" placeholder="Site Açıklaması..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Keyword</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" maxlength="210" name="keyword" id="defaultconfig-2" type="text" placeholder="Site Kelimeleri..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Email</label>
                                </div>
                                <div class="col-lg-8">
                                    <input id="cemail" class="form-control" type="email" name="email" required="" placeholder="Kurumsal Email Adresi..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Telefon</label>
                                </div>
                                <div class="col-lg-8">
                                    <input id="phone" class="form-control" type="number" name="phone" required="" placeholder="Kurumsal Telefon Numarası..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Fax</label>
                                </div>
                                <div class="col-lg-8">
                                    <input id="fax" class="form-control" type="number" name="fax" required="" placeholder="Kurumsal Fax Numarası..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Cep Telefonu</label>
                                </div>
                                <div class="col-lg-8">
                                    <input id="mobilephone" class="form-control" type="number" name="mobilephone" required="" placeholder="Kurumsal Cep Telefonu..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Whatsapp Linki</label>
                                </div>
                                <div class="col-lg-8">
                                    <input id="whatsapp" class="form-control" type="url" name="whatsapp" required="" placeholder="Kurumsal Whatsapp Adresi..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">İnstagram Linki</label>
                                </div>
                                <div class="col-lg-8">
                                    <input id="instagram" class="form-control" type="url" name="instagram" required="" placeholder="Kurumsal Instagram Adresi..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Facebook Linki</label>
                                </div>
                                <div class="col-lg-8">
                                    <input id="facebook" class="form-control" type="url" name="facebook" required="" placeholder="Kurumsal Facebook Adresi..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Logo Resmi</label>
                                </div>
                                    <input type="file" name="img[]" class="file-upload-default">
                                <div class="input-group col-lg-8">
                                    <input type="slug" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
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