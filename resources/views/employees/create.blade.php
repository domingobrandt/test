@extends('layouts.app')
@section('title','Employees Create')

@section('content')
<div class="from-group">
    <label for="">Nombre</label>
    <input type="text" class="from-control">
</div>

<div class="from-group">
    <label for="">foto</label>
    <input type="text" class="from-control">
</div>

<div class="from-group">
    <label for="">Descripcion</label>
    <input type="text" class="from-control">
</div>

<div class="from-group">
    <label for="">user id</label>
    <select class="from-control"></select>
</div>
<button type="submit" class="btn btn-primary">Guardar</button>
</div>
@endsection
{{--
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="from-group">
                <label for="">Nombre</label>
                <input type="text" class="from-control">
            </div>

            <div class="from-group">
                <label for="">foto</label>
                <input type="text" class="from-control">
            </div>

            <div class="from-group">
                <label for="">Descripcion</label>
                <input type="text" class="from-control">
            </div>

            <div class="from-group">
                <label for="">user id</label>
                <select class="from-control"></select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </body>
</html>--}}