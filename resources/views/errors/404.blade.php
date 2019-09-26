<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/PERKESO_UI/assets/images/perkeso1.png')}}">
    <title>BeAMS</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->

    @include('general.layouts.css')
    @yield('css')
    <!--C:\DATASS\ProjekAku\Perkeso\perkeso\perkeso\public\PERKESO_UI\assets\node_modules\jquery-->
    <script src="{{ asset('/js/perkeso_ui/jquery-3.2.1.min.js') }}"></script>
    <link href="{{ asset('/css/overrides.css') }}" rel="stylesheet" type="text/css" />


</head>

<body class="horizontal-nav skin-megna fixed-layout">
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="error-page">
        <div class="error-box">
            <div class="error-body text-center">
                <h1>404</h1>
                <h3 class="text-uppercase">Page Not Found !</h3>
                <p class="text-muted m-t-30 m-b-30">YOU SEEM TO BE TRYING TO FIND HIS WAY HOME</p>
                <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                        
                        <a href="/home" class="btn btn-info btn-secondary btn-rounded waves-effect waves-light m-b-40">Back To Home</a>
                        {{-- btn btn-info btn-rounded waves-effect waves-light m-b-40 --}}
                    </div>
            </div>

            </div>

        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    </div>
    @include('general.layouts.js')
    @yield('js')
</body>

</html>
