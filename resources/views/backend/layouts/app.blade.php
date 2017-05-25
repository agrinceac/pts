<!doctype html>
<html class="no-js" lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', app_name())</title>

        <!-- Meta -->
        <meta name="description" content="@yield('meta_description', 'Pts')">
        <meta name="author" content="@yield('meta_author', 'Webdelo')">
        @yield('meta')

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Exo+2:400,500,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

        <!-- Styles -->
        <link href="{{ asset('/css/admin/app.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/admin/control.panel.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/admin/style.css') }}" rel="stylesheet">

        <!-- Html5 Shim and Respond.js IE8 support of Html5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        {{ Html::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
        {{ Html::script('https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js') }}
        <![endif]-->

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

        @yield('admin_js')
    </head>

    <body>
        @yield('admin_content')
    </body>

    @include('backend.admin.footer')

</html>