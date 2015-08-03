<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema de Control de Gastos</title>

    <!-- Bootstrap Core CSS -->
    <link href={{ asset('css/bootstrap.min.css')}} rel="stylesheet">

    <!-- Custom CSS -->
    <link href={{asset('css/sb-admin.css')}} rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href={{asset('css/plugins/morris.css')}}rel="stylesheet">

    <!-- Custom Fonts -->
    <link href={{asset('font-awesome/css/font-awesome.min.css')}} rel="stylesheet" type="text/css">
    <!-- DatePicker CSS-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/flick/jquery-ui.css">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script>
        $(function() {

            //Array para dar formato en español
            $.datepicker.regional['es'] =
            {
                closeText: 'Cerrar',
                prevText: 'Previo',
                nextText: 'Próximo',

                monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
                    'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
                    'Jul','Ago','Sep','Oct','Nov','Dic'],
                monthStatus: 'Ver otro mes', yearStatus: 'Ver otro año',
                dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
                dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sáb'],
                dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
                dateFormat: 'yy-mm-dd', firstDay: 0,
                initStatus: 'Selecciona la fecha', isRTL: false};
            $.datepicker.setDefaults($.datepicker.regional['es']);

            //miDate: fecha de comienzo D=días | M=mes | Y=año
            //maxDate: fecha tope D=días | M=mes | Y=año
            $( "#datepicker" ).datepicker({ minDate: "-1D", maxDate: "+1M +10D" });
        });
    </script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src={{asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}></script>
        <script src={{asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
         @include('control.menu')
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
                @yield('content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->


    <!-- Bootstrap Core JavaScript -->
    <script src={{asset('js/bootstrap.min.js')}}></script>

    <!-- Morris Charts JavaScript -->
    <script src={{aseet('js/plugins/morris/raphael.min.js')}}></script>
    <script src={{asset('js/plugins/morris/morris.min.js')}}></script>
    <script src={{aseet('js/plugins/morris/morris-data.js')}}></script>


</body>

</html>
