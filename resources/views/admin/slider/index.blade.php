@extends('layouts.backend.admin')

@section('title','Slider Listele')

@push('css')

@endpush()

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row grid-margin">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <a class="btn btn-primary btn-rounded btn-fw" href="{{route('admin.slider.create')}}"> Slider Ekle</a>

                                <div class="col-sm-12">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                                    <table id="order-listing" class="table dataTable no-footer" role="grid" aria-describedby="order-listing_info">

                                                        <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order #: activate to sort column descending" style="width: 117px;">ID</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending" style="width: 193px;">Resim</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending" style="width: 193px;">Alt Etiket</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending" style="width: 193px;">Yazı 1</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending" style="width: 193px;">Yazı 2</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending" style="width: 193px;">Yazı 3</th>
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending" style="width: 193px;">Yazı 4</th>

                                                        </thead>
                                                        <tbody>
                                                        @foreach ($sliders as $slider)
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1">{{isset ($slider->id) ? $slider->id: ''}}</td>
                                                                <td><img height="100px" src="/storage/slider/{{isset ($slider->slider) ? $slider->slider: ''}}"></td>
                                                                <td>{{isset ($slider->keyword) ? $slider->keyword: ''}}</td>
                                                                <td>{{isset ($slider->title1) ? $slider->title1: ''}}</td>
                                                                <td>{{isset ($slider->title2) ? $slider->title2: ''}}</td>
                                                                <td>{{isset ($slider->title3) ? $slider->title3: ''}}</td>
                                                                <td>{{isset ($slider->title4) ? $slider->title4: ''}}</td>

                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection()

@push('js')

@endpush()