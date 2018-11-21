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
</head>
<body>

<div class="container">


    <form class="form-horizontal" action="{{url('store3')}}" method="post">
        {{csrf_field()}}


        @include('parts.form')
        <label for="">Текстовое описание сотрудника</label>
        <textarea class="form-control"  name="text_area" placeholder="Текстовое описание сотрудника"></textarea>
        <hr/>
        <input class="btn btn-lg btn-primary" id="submit" type="submit" value="Save" name="submit" />
    </form>

</div>

</body>
</html>
