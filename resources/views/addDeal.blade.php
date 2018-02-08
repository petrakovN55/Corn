@extends('layouts.base')
@section('body')

    <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <legend>Mr. S:</legend>
            </div>
            <!-- panel preview -->
            <div class="col-sm-5">
                <h4>Add payment:</h4>
                <div class="panel panel-default">
                    <div class="panel-body form-horizontal payment-form">
                        <div class="form-group">
                            <label for="concept" class="col-sm-3 control-label">Дата</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="concept" name="concept">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-3 control-label">Менеджер</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="description" name="description">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="amount" class="col-sm-3 control-label">Тип</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="amount" name="amount">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Покупатель</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="status" name="status">
                                    <option>Paid</option>
                                    <option>Unpaid</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date" class="col-sm-3 control-label">Вес отгруженный</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="date" name="date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="concept" class="col-sm-3 control-label">Вес принятый</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="concept" name="concept">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="concept" class="col-sm-3 control-label">Цена закупки</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="concept" name="concept">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="concept" class="col-sm-3 control-label">Цена продажи</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="concept" name="concept">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="concept" class="col-sm-3 control-label">Закупленно на сумму</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="concept" name="concept">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="concept" class="col-sm-3 control-label">Реализованно на сумму</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="concept" name="concept">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="concept" class="col-sm-3 control-label">Транспортные расходы</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="concept" name="concept">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="concept" class="col-sm-3 control-label">Прочее</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="concept" name="concept">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="concept" class="col-sm-3 control-label">Маржа</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="concept" name="concept">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="concept" class="col-sm-3 control-label">Закрыто</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="concept" name="concept">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12 text-right">
                                <button type="button" class="btn btn-default preview-add-button">
                                    <span class="glyphicon glyphicon-plus"></span> Add
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- / panel preview -->
            <div class="col-sm-7">
                <h4>Preview:</h4>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="table-responsive">
                            <table class="table preview-table">
                                <thead>
                                <tr>
                                    <th>Concept</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody></tbody> <!-- preview content goes here-->
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row text-right">
                    <div class="col-xs-12">
                        <h4>Total: <strong><span class="preview-total"></span></strong></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <hr style="border:1px dashed #dddddd;">
                        <button type="button" class="btn btn-primary btn-block">Добавить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

    @foreach($corns as $corn)
        {{$corn -> close}}
    @endforeach

<script>
    function calc_total(){
        var sum = 0;
        $('.input-amount').each(function(){
            sum += parseFloat($(this).text());
        });
        $(".preview-total").text(sum);
    }
    $(document).on('click', '.input-remove-row', function(){
        var tr = $(this).closest('tr');
        tr.fadeOut(200, function(){
            tr.remove();
            calc_total()
        });
    });

    $(function(){
        $('.preview-add-button').click(function(){
            var form_data = {};
            form_data["concept"] = $('.payment-form input[name="concept"]').val();
            form_data["description"] = $('.payment-form input[name="description"]').val();
            form_data["amount"] = parseFloat($('.payment-form input[name="amount"]').val()).toFixed(2);
            form_data["status"] = $('.payment-form #status option:selected').text();
            form_data["date"] = $('.payment-form input[name="date"]').val();
            form_data["remove-row"] = '<span class="glyphicon glyphicon-remove"></span>';
            var row = $('<tr></tr>');
            $.each(form_data, function( type, value ) {
                $('<td class="input-'+type+'"></td>').html(value).appendTo(row);
            });
            $('.preview-table > tbody:last').append(row);
            calc_total();
        });
    });
</script>
@endsection