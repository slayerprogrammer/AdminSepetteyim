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
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                                                <div class="row"><div class="col-sm-12">

                                                        <table id="order-listing" class="table dataTable no-footer" role="grid" aria-describedby="order-listing_info">
                                                            <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order #: activate to sort column descending" style="width: 117px;">ID</th>
                                                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending" style="width: 193px;">Adı Soyadı</th>
                                                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 145px;">Telefon</th>
                                                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 111px;">Mail Adresi</th>
                                                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Base Price: activate to sort column ascending" style="width: 150px;">Kayıt Tarihi</th>
                                                                </thead>
                                                            <tbody>
                                                            @foreach ($messages as $message)
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1">{{$message->id}}</td>
                                                                <td>{{$message->name}}</td>
                                                                <td>{{$message->phone}}</td>
                                                                <td>{{$message->message}}</td>
                                                                <td>{{$message->created_at}}</td>
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