<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" >
    <!-- //bootstrap-css -->
    <link href="{{url('css/style.css')}}" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href="{{url('css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->

    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" type="text/css"/>
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <link rel="stylesheet" href="css/morris.css" type="text/css"/>
    <!-- calendar -->
    <link rel="stylesheet" href="css/monthly.css">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="js/jquery2.0.3.min.js"></script>
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
      
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    <script>
    $(document).ready(function() {
        $('#table12').DataTable();
    });
    </script>
    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
 
    <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
</head>
<body>
    @extends('Admin.Layout.index')
    @section('admin_content')
        <h3>Hello Admin</h3>
    @endsection
</body>
</html>