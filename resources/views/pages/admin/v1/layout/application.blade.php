<!DOCTYPE html>
<html lang="en">

<head>
    <!-------------------------------- Begin: Meta ----------------------------------->
    @include('pages.admin.v1.layout.meta')
    @yield('metadata')
    <!-------------------------------- End: Meta ----------------------------------->


    <title>
        @yield('title', 'Admin | Dashboard')
    </title>

    <!-------------------------------- Begin: stylesheet ----------------------------------->
    @include('pages.admin.v1.layout.styles')
    @yield('styles')
    <!-------------------------------- End: stylesheet ----------------------------------->

    <script src="{{asset('static/admin/v1/js/setting.js')}}"></script>
    <!-- END SETTINGS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-120946860-6');
    </script>
</head>

<body>
@if( isset($noFrame) && $noFrame == true )
    @yield('content')
@else
<!-------------------------------- Begin: Page ----------------------------------->
<div class="wrapper">
    <!-------------------------------- Begin: Sidebar ----------------------------------->
    @include('pages.admin.v1.layout.sidebar')
    <!-------------------------------- End: Sidebar ----------------------------------->

    <div class="main">
        <!-------------------------------- Begin: Header ----------------------------------->
        @include('pages.admin.v1.layout.header')
        <!-------------------------------- End: Header ----------------------------------->


        <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3">@yield('header', 'Dashboard')</h1>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <!-------------------------------- Begin: Breadcrumb ----------------------------------->
                        @include('pages.admin.v1.layout.breadcrumb')
                        <!-------------------------------- End: Breadcrumb ----------------------------------->
                        <!-------------------------------- Begin: Main Content ----------------------------------->
                        @yield('content')
                        <!-------------------------------- End: Main Content ----------------------------------->
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-------------------------------- Begin: Footer ----------------------------------->
        @include('pages.admin.v1.layout.footer')
        <!-------------------------------- End: Footer ----------------------------------->
    </div>
</div>
@endif
<!-------------------------------- End: Page ----------------------------------->

<!-------------------------------- Begin: Script ----------------------------------->
@include('pages.admin.v1.layout.scripts')
@yield('scripts')
<!-------------------------------- End: Script ----------------------------------->
</body>

</html>
