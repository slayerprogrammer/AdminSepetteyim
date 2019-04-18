@extends('layouts.backend.admin')

@section('title','Mesajlar')

@push('css')

@endpush()

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row grid-margin">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Mesajlar</h4>
                                @csrf


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()

@push('js')

@endpush()