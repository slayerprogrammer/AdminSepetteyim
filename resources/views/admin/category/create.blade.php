@extends('layouts.backend.admin')

@section('title','Kategori Ekle')

@push('css')

@endpush()

@section('content')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row grid-margin">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Kategori Ekle</h4>
                                <form action="{{route('admin.contact.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="col-form-label">Kategori Adı Giriniz</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input class="form-control" maxlength="400" name="name" id="defaultconfig-4" type="text" placeholder="Kategori İsmi Giriniz.">
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