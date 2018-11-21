<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
<div class="container">

<h3 class="">Работник</h3>
{{--    <a href="{{url('create1')}}" class="btn btn-primary "><i class="fa fa-stroopwafel"></i>Добавить Работника</a>--}}
<table class="table table-dark ">
    <thead >
    <th scope="col">Фамилия</th>
    <th scope="col">Имя</th>
    <th scope="col">Отчество</th>
    <th scope="col">Дата рождения</th>
    <th scope="col">Дата принятия на работу</th>
    <th scope="col">Подразделение</th>
    </thead>
    <tbody>
@forelse($worker as $workers)
<tr>
    <td>{{$worker->Surname}}</td>
    <td>{{$worker->Name}}</td>
    <td>{{$worker->middle_name}}</td>
    <td>{{$worker->Date_of_Birth}}</td>
    <td>{{$worker->Date_of_employment}}</td>
    <td>{{$worker->Department}}</td>
</tr>
    @empty
    <tr>
        <td colspan="3" class="text-center">Данные отсутсвуют</td>
    </tr>
    @endforelse
    </tbody>
</table>
<h3 class="">Руководитель подразделения</h3>

    <a href="{{route('board..create')}}" class="btn btn-primary "><i class="fa fa-stroopwafel"></i>Добавить руководителя</a>
<table class="table table-dark ">
    <thead>
    <th scope="col">Фамилия</th>
    <th scope="col">Имя</th>
    <th scope="col">Отчество</th>
    <th scope="col">Дата рождения</th>
    <th scope="col">Дата принятия на работу</th>
    <th scope="col">Является руководителем подразделения</th>
    </thead>
    <tbody>
    @forelse($worker as $workers)
        <tr>
            <td>{{$worker->Surname}}</td>
            <td>{{$worker->Name}}</td>
            <td>{{$worker->middle_name}}</td>
            <td>{{$worker->Date_of_Birth}}</td>
            <td>{{$worker->Date_of_employment}}</td>
            <td>{{$worker->Department}}</td>
        </tr>
    @empty
        <tr>
            <td colspan="3" class="text-center">Данные отсутсвуют</td>
        </tr>
    @endforelse
    </tbody>
</table>
<h3 class="">Другие</h3>
{{--    <a href="{{url('create2')}}" class="btn btn-primary "><i class="fa fa-stroopwafel"></i>Добавить других</a>--}}
<table class="table table-dark ">
    <thead>
    <th scope="col">Фамилия</th>
    <th scope="col">Имя</th>
    <th scope="col">Отчество</th>
    <th scope="col">Дата рождения</th>
    <th scope="col">Дата принятия на работу</th>
    <th scope="col">Текстовое описание сотрудника</th>
    </thead>
    <tbody>
    @foreach($worker as $workers)
        <tr>
            <td>{{$worker->Surname}}</td>
            <td>{{$worker->Name}}</td>
            <td>{{$worker->middle_name}}</td>
            <td>{{$worker->Date_of_Birth}}</td>
            <td>{{$worker->Date_of_employment}}</td>
            <td>{{$worker->Department}}</td>
        </tr>
        @endforeach

    </tbody>
</table>
</div>
</body>
</html>
