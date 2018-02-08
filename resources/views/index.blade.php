<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-widt">


    {{--<link href="css/bootstrap.min.css" rel="stylesheet">--}}
    {{--<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">--}}
    {{--<script scr ="public/js/jquery-1.12.4.js" ></script>--}}
    {{--<script scr ="js/jquery.dataTables.min.js" ></script>--}}
    {{--<script scr="js/dataTables.bootstrap.min.js" ></script>--}}

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <script src = {{asset('js/jquery-1.12.4.js')}}></script>

    <title>Зерно</title>


    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script >
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">AntiExcel</a>
        </div>

        <!-- Соберите навигационные ссылки, формы, и другой контент для переключения -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Анализ <span class="sr-only">(current)</span></a></li>
                <li><a href="#">По месяцам</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Прочее <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <button type="submit" class="btn btn-default">Добавить сделку</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


{{--<h1>Hello, {{$name}}!</h1>--}}
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
</table>

<script src="js/bootstrap.min.js"></script>
<script src = "{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src = "{{asset('js/dataTables.bootstrap.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
</body>
</html>
