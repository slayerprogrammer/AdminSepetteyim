@extends('layouts.backend.admin')

@section('title','İletişim Ayarları')

@push('css')

@endpush()

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row grid-margin">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">İletişim Ayarları</h4>
                            <form action="{{route('admin.contact.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="col-form-label">Harita Linki</label>
                                </div>
                                <div class="col-lg-8">
                                    <input class="form-control" value="{{isset ($contacts->maps1) ? $contacts->maps1 : ''}}" maxlength="400" name="maps1" id="defaultconfig-4" type="text" placeholder="https://www.google.com/maps/embed?">
                                </div>
                            </div>

                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Harita Linki 2 (isteğe bağlı şubeler)</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{isset ($contacts->maps2) ? $contacts->maps2 : ''}}" maxlength="400" name="maps2" id="defaultconfig-4" type="text" placeholder="https://www.google.com/maps/embed?">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Harita Linki 3 (isteğe bağlı şubeler)</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{isset ($contacts->maps3) ? $contacts->maps3 : ''}}" maxlength="400" name="maps3" id="defaultconfig-4" type="text" placeholder="https://www.google.com/maps/embed?">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Adres Bilgileri</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{isset ($contacts->address1) ? $contacts->address1 : ''}}" maxlength="210" name="address1" id="defaultconfig-4" type="text" placeholder="Adres Açıklaması..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Şehir/İlçe</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{isset ($contacts->city1) ? $contacts->city1 : ''}}" maxlength="210" name="city1" id="defaultconfig-4" type="text" placeholder="Ankara/Yenimahalle">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">2.Adres Bilgileri (isteğe bağlı şubeler)</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{isset ($contacts->address2) ? $contacts->address2 : ''}}" maxlength="210" name="address2" id="defaultconfig-4" type="text" placeholder="Adres-2 Açıklaması..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Şehir/İlçe 2 (isteğe bağlı şubeler)</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{isset ($contacts->city2) ? $contacts->city2 : ''}}" maxlength="210" name="city2" id="defaultconfig-4" type="text" placeholder="Ankara/Yenimahalle">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">3.Adres Bilgileri(isteğe bağlı şubeler)</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{isset ($contacts->address3) ? $contacts->address3 : ''}}" maxlength="210" name="address3" id="defaultconfig-4" type="text" placeholder="Adres-3 Açıklaması..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Şehir/İlçe 3 (isteğe bağlı şubeler)</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{isset ($contacts->city3) ? $contacts->city3 : ''}}" maxlength="210" name="city3" id="defaultconfig-4" type="text" placeholder="Ankara/Yenimahalle">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Telefon 1</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{isset ($contacts->phone1) ? $contacts->phone1 : ''}}" maxlength="210" name="phone1" id="defaultconfig-4" type="text" placeholder="Telefon Açıklaması..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Telefon 2 (isteğe bağlı)</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{isset ($contacts->phone2) ? $contacts->phone2 : ''}}" maxlength="210" name="phone2" id="defaultconfig-4" type="text" placeholder="Telefon 2 Açıklaması..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Telefon 3 (isteğe bağlı)</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{isset ($contacts->phone3) ? $contacts->phone3 : ''}}" maxlength="210" name="phone3" id="defaultconfig-4" type="text" placeholder="Telefon 3 Açıklaması..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Cep Telefon</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{isset ($contacts->mobile1) ? $contacts->mobile1 : ''}}" maxlength="210" name="mobile1" id="defaultconfig-4" type="text" placeholder="Cep Telefon Açıklaması..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Cep Telefon 2 (isteğe bağlı)</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{isset ($contacts->mobile2) ? $contacts->mobile2 : ''}}" maxlength="210" name="mobile2" id="defaultconfig-4" type="text" placeholder="Cep Telefon 2 Açıklaması..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Cep Telefon 3 (isteğe bağlı)</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{isset ($contacts->mobile3) ? $contacts->mobile3 : ''}}" maxlength="210" name="mobile3" id="defaultconfig-4" type="text" placeholder="Cep Telefon 3 Açıklaması..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Kurumsal Mail</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{isset ($contacts->mail1) ? $contacts->mail1 : ''}}" maxlength="210" name="mail1" id="defaultconfig-4" type="email" placeholder="Mail Açıklaması..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Kurumsal Mail 2 (isteğe bağlı)</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{isset ($contacts->mail2) ? $contacts->mail2 : ''}}" maxlength="210" name="mail2" id="defaultconfig-4" type="email" placeholder="Mail 2 Açıklaması..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Kurumsal Mail 3 (isteğe bağlı)</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input class="form-control" value="{{isset ($contacts->mail3) ? $contacts->mail3 : ''}}" maxlength="210" name="mail3" id="defaultconfig-4" type="email" placeholder="Mail 3 Açıklaması..">
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