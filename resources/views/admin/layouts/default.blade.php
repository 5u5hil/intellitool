<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <head>
        @include(config('constants.adminIncludes').'.head')
        @yield('mystyles')
    </head>
    <body>
    <body class="page-header-fixed page-sidebar-closed-hide-logo">

        <div class="wrapper">
            @include(config('constants.adminIncludes').'.header')
            <div class="container-fluid">
                @yield('content')

                @include(config('constants.adminIncludes').'.footer')

            </div>
        </div>

    </body>
    <foot>
        @include(config('constants.adminIncludes').'.foot')
        @yield('myscripts')
    </foot>
</html>
<script>

</script>