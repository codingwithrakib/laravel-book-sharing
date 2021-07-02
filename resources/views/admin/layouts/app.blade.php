<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

   @yield('title')

    <!-- vendor css -->
    <link href="{{asset('admin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('admin/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">

    <link href="{{asset('lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">




    <link href="../lib/highlightjs/github.css" rel="stylesheet">
    <link href="../lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">admin/

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/starlight.css')}}">
</head>
<body>



@include('admin.layouts.partials.headerPanel')
@include('admin.layouts.partials.leftPanel')
@include('admin.layouts.partials.rightPanle')


<div class="sl-mainpanel">


    @yield('content')



    <footer class="sl-footer">
        <div class="footer-left">
            <div class="mg-b-2">Copyright &copy; 2017. Starlight. All Rights Reserved.</div>
            <div>Made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
            <span class="tx-uppercase mg-r-10">Share:</span>
            <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
            <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
        </div>
    </footer>
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->



<script src="{{asset('admin/lib/jquery/jquery.js')}}"></script>
<script src="{{asset('admin/lib/popper.js/popper.js')}}"></script>admin/
<script src="{{asset('admin/lib/bootstrap/bootstrap.js')}}"></script>
<script src="{{asset('admin/lib/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
<script src="{{asset('admin/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('admin/lib/d3/d3.js')}}"></script>
<script src="{{asset('admin/lib/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{asset('admin/lib/chart.js/Chart.js')}}"></script>
<script src="{{asset('admin/lib/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('admin/lib/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('admin/lib/Flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('admin/lib/flot-spline/jquery.flot.spline.js')}}"></script>


<script src="{{asset('admin/lib/highlightjs/highlight.pack.js')}}"></script>

<script src="{{asset('admin/lib/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/lib/datatables-responsive/dataTables.responsive.js')}}"></script>
<script src="{{asset('admin/lib/select2/js/select2.min.js')}}"></script>





<script src="{{asset('admin/js/starlight.js')}}"></script>
<script src="{{asset('admin/js/ResizeSensor.js')}}"></script>
<script src="{{asset('admin/js/dashboard.js ')}}"></script>

<script>
    $('#datatable1').DataTable({
        responsive: true,
        language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
        }
    });
</script>
</body>
</html>
