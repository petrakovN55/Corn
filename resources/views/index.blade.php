@extends('layouts.base')
@section('body')
<body>


<div style="margin-left: 30px" >

<table id="example"  class="table table-striped table-bordered" cellspacing="0" width="100%">

    <thead>
    <tr>
        <th>Дата</th>
        <th>Менеджер</th>
        <th>Тип</th>
        <th>Покупатель</th>
        <th>Вес отгруженный</th>
        <th>Вес принятый</th>
        <th>Цена закупки</th>
        <th>Цена продажи</th>
        <th>Закуплено на сумму</th>
        <th>Реализованно на сумму</th>
        <th>Транспортные расходы</th>
        <th>Прочее</th>
        <th>Маржа</th>
        <th>Закрыто</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            @foreach($corns as $corn)
                {{$corn -> date}}
            @endforeach
        </td>
        <td>
            @foreach($corns as $corn)
                {{$corn -> worker}}
            @endforeach
        </td>
        <td>
            @foreach($corns as $corn)
                {{$corn -> type}}
            @endforeach
        </td>
        <td>
            @foreach($corns as $corn)
                {{$corn -> buyer}}
            @endforeach
        </td>
        <td>
            @foreach($corns as $corn)
                {{$corn -> weight_ot}}
            @endforeach
        </td>
        <td>
            @foreach($corns as $corn)
                {{$corn -> weight_prin}}
            @endforeach
        </td>
        <td>
            @foreach($corns as $corn)
                {{$corn -> price_zak}}
            @endforeach
        </td>
        <td>
            @foreach($corns as $corn)
                {{$corn -> price_prod}}
            @endforeach
        </td>
        <td>
            @foreach($corns as $corn)
                {{$corn -> zak_na_summ}}
            @endforeach
        </td>
        <td>
            @foreach($corns as $corn)
                {{$corn -> realiz_na_summ}}
            @endforeach
        </td>
        <td>
            @foreach($corns as $corn)
                {{$corn -> trans_rash}}
            @endforeach
        </td>
        <td>
            @foreach($corns as $corn)
                {{$corn -> other}}
            @endforeach
        </td>
        <td>
            @foreach($corns as $corn)
                {{$corn -> marja}}
            @endforeach
        </td>
        <td>
            @foreach($corns as $corn)
                {{$corn -> close}}
            @endforeach
        </td>
    </tr>
    </tbody>
</table></div>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src = "{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src = "{{asset('js/dataTables.bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/dataTables.fixedHeader.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/dataTables.keyTable.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/dataTables.responsive.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/dataTables.scroller.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/buttons.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/buttons.html5.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/buttons.print.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/buttons.flash.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/buttons.colVis.min.js')}}"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    dom: "Bfrtipl",
                    "scrollX": true,
                    lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Все"]],
                    language: {
                        decimal:        "",
                        emptyTable:     "Вы еще не подали ни одну заявку ",
                    emptyTable:     "Заявки отсутствуют ",
                    info:           "Показаны _START_ по _END_ из _TOTAL_ заявки",
                        infoEmpty:      "Показаны 0 по 0 из 0 заявки",
                        infoFiltered:   "(фильтровано из _MAX_ заявок)",
                        infoPostFix:    "",
                        thousands:      ",",
                        lengthMenu:     "Показать _MENU_ заявок",
                        loadingRecords: "Загрузка...",
                        processing:     "Выполнение...",
                        search:         "",
                        zeroRecords:    "Записей не найдено",
                        paginate: {
                        first:      "Первая",
                            last:       "Последняя",
                            next:       "Следующая",
                            previous:   "Предыдущая"
                    },
                    aria: {
                        sortAscending:  ": активировать для сортировки столбца по возрастанию",
                            sortDescending: ": активировать для сортировки столбца по убыванию"
                    },
                },
                buttons: [
                    {
                        extend: "copy",
                        className: "btn-sm",
                        text: "Скопировать",
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: "csv",
                        className: "btn-sm",
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: "excel",
                        className: "btn-sm",
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: "pdfHtml5",
                        className: "btn-sm",
                        text: "pdf",
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: "print",
                        className: "btn-sm",
                        text: "Распечатать",
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: "colvis",
                        className: "btn-sm",
                        text: "Скрыть"
                    },
                ],
                });
            } );
            TableManageButtons = function() {
                "use strict";
                return {
                    init: function() {
                        handleDataTableButtons();
                    }
                };
            }();
        </script>
</body>
    @endsection
