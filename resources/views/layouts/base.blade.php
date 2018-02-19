@section('header')
    @show
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-widt">


    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/dataTables.bootstrap.min.css')}}" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('/css/fixedHeader.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/responsive.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/scroller.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/buttons.bootstrap.min.css')}}">

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
            <a class="navbar-brand" href="{{route('mainPage')}}">AntiExcel</a>
        </div>

        <!-- Соберите навигационные ссылки, формы, и другой контент для переключения -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Анализ <span class="sr-only">(current)</span></a></li>
                <li><a href="{{route('month')}}">По месяцам</a></li>
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
                <a type="submit" href="{{route('Deal')}}" class="btn btn-default">Добавить сделку</a>
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
                        <li><a href="{{route('logout')}}">Выход</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
@section('styles')
    @show
@section('body')
    @show
@section('scripts')
    @show
@section('footer')
    @show
</html>
