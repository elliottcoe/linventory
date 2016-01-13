@extends('layout/master')

@section('body')
        <!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard
        </h1>
        <input id="searchInput" class="pull-right" name="search" placeholder="Searching..." onblur="this.focus()"
               autofocus/>
        </br>
        </br>
        <table class="search-table table table-striped table-bordered table-condensed" id='table'>
            <thead>
            <tr>
                <th>Name</th>
                <th>User</th>
                <th>Benchmark</th>
            </tr>
            </thead>
            <tbody>
            @foreach($computers as $computer)
                <tr>
                    <td><a href='/view/{{$computer->id}}'>{{$computer->name}} </a></td>
                    <td>{{$computer->user}}</td>
                    <td>{{$computer->benchmark}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- /.row -->
@endsection