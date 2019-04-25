@extends('layouts.backend.admin')

@section('title','Kategori Listele')

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
                                <a class="btn btn-primary btn-rounded btn-fw" href="{{route('admin.category.create')}}"> Kategori Ekle</a>
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
                                                            <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending" style="width: 193px;">Kategoriler</th>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($categorys as $category)
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1">{{$category->id}}</td>
                                                                <td>{{$category->name}}</td>
                                                                <td>{{$category->created_at}}</td>
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