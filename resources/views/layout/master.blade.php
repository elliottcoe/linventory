<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventory</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="{{URL::asset('css/sb-admin.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{URL::asset('css/plugins/morris.css')}}" rel="stylesheet">
   
    <!-- Bootstrap Table CSS -->
    <link href="{{URL::asset('css/bootstrap-table.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{URL::asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <!-- Include Nav -->
        @include('layout/nav')

        <div id="page-wrapper">

            <div class="container-fluid">

                @yield('body')
                                                                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{URL::asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <!-- Bootstrap Table JavaScript -->
    <script src="{{URL::asset('js/bootstrap-table.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{URL::asset('js/plugins/morris/raphael.min.js')}}"></script>
    <script src="{{URL::asset('js/plugins/morris/morris.min.js')}}"></script>
    <script src="{{URL::asset('js/plugins/morris/morris-data.js')}}"></script>
    <!-- Html Table Search -->
    <script src="{{URL::asset('js/filterForTable.js')}}"></script>
    <script src="https://inlinemanual.com/embed/player.fa6b42acf29542c6732426af922a0d87.js"></script>
    <script type="text/javascript">
    $('table').filterForTable();
    </script>


    

</body>

</html>
