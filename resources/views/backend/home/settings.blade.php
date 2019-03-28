@extends("layouts.backend")
@section("content")
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Ayarlar
            <small>Başlıca Site Ayarları</small>
          </h1>
          
        </section>
    
        <!-- Main content -->
        <section class="content container-fluid">
    
            <div class="row">
                <div class="col-xs-12">
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Responsive Hover Table</h3>
        
                      <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
        
                          <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                      <table class="table table-hover">
                        <tr>
                          <th>Başlık</th>
                          <th>İçerik</th>
                         </tr>
                         @foreach ($settings as $setting)
                            <tr>
                                <td>{{$setting->key}}</td>
                                <td>{{$setting->value}}</td>
                            </tr>
                         @endforeach
                        
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
              </div>
    
        </section>
        <!-- /.content -->
      </div>
@endsection

@push("customJs")
@endpush

@push("customCss")
@endpush