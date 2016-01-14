@extends('layout/master')

@section('body')
        <!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            {{$computer[0]['name']}}
        </h1>
        {!! Form::open(array('url' => 'update' ))!!}
        <label for="benchmark">Benchmark:</label>
        <br>
        <input name="benchmark" type="text" value="{{$computer[0]['benchmark']}}">
        <br>
        <label for="user">User:</label>
        <br>
        <input name="user" type="text" value="{{$computer[0]['user']}}">
        <br>
        <label for="make">Manufacturer:</label>
        <br>
        <input name="make" type="text" value="{{$computer[0]['make']}}" disabled>
        <br>
        <label for="model">Model:</label>
        <br>
        <input name="model" type="text" value="{{$computer[0]['model']}}" disabled>
        <br>
        <label for="stag">Serial:</label>
        <br>
        <input name="stag" type="text" value="{{$computer[0]['servicetag']}}" disabled>
        <br>
        <br>
        <input type="hidden" name="id" value="{{$computer[0]['id']}}">
        <input type="submit" value="submit">
        {!! Form::close() !!}
        <br>
        <a href="/"><--Back</a>
    </div>
</div>
<!-- /.row -->
@endsection