@extends("layouts.backend")
@section("content")
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Ayarlar
                <small>Başlıca site ayarları</small>
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
                                    <div class="input-group-btn">
                                        <button class="btn btn-success" id="newSetting">Yeni Alan Ekle</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr id="settingTableHeader">
                                    <th>Anahtar</th>
                                    <th>Değer</th>
                                    <th>İşlem</th>
                                </tr>

                                @foreach($settings as $setting)
                                <tr>
                                    <td>{{$setting->key}}</td>
                                    <td><input class="form-control settingInput" type="text" value="{{$setting->value}}" name="{{$setting->key}}"> </td>
                                    <td><button class="btn btn-danger settingDelete" data-key="{{$setting->key}}">Sil</button></td>
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
    <script>
        $(".settingInput").on("change",function () {
            var input = $(this);
            $.ajax({
                type : "post",
                url  : "{{route("backend.settings.update")}}",
                data : {
                    _token : "{{csrf_token()}}",
                    key    : input.attr("name"),
                    value  : input.val()
                },
                
                success: function (response) {

                    console.log(response);

                },
                
                error: function (response) {

                    console.log(response);
                }
                
            });
        })

        $("#newSetting").click(function () {
            var data = "<tr>\n" +
                "<td><input class=\"form-control\" type=\"text\" name=\"key\" id='newSettingKey'></td>\n" +
                "<td><input class=\"form-control\" type=\"text\" name=\"value\" id='newSettingValue'> </td>\n" +
                "</tr>"
            $("#settingTableHeader").after(data);
        })

        $(document).on("change","#newSettingKey",function () {
            if($(this).val().length > 3 && $("#newSettingValue").val().length > 3){
                    newSetting()
            }
        });

        $(document).on("change","#newSettingValue",function () {
            if($(this).val().length > 3 && $("#newSettingKey").val().length > 3){
                newSetting()
            }
        })

        function newSetting() {
            var key = $("#newSettingKey").val();
            var value = $("#newSettingValue").val();
            $.ajax({
                type  : "post",
                url   : "{{route("backend.settings.create")}}",
                data  : {
                    _token : "{{csrf_token()}}",
                    key    : key,
                    value  : value
                },

                success: function (response) {
                    if (response.status == "success") {
                        location.reload();
                    }

                    console.log(response);
                },

                error: function (response) {
                    console.log(response);
                }
            })
        }

        $(".settingDelete").click(function () {
            var button = $(this);


            $.ajax({
                type : "post",
                url : "{{route("backend.settings.delete")}}",
                data : {
                    _token : "{{csrf_token()}}",
                    key : button.data("key")
                },

                success : function (response) {
                    if (response.status == "success"){
                        button.closest("tr").remove();
                    }

                    console.log(response);
                },

                error : function (response) {
                    console.log(response)
                }
            })
        })
    </script>
@endpush

@push("customCss")

@endpush