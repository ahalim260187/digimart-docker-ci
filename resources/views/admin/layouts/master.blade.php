<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign in</title>
    <!-- CSS files -->
    <link href={{asset("assets/admin/dist/css/tabler.min.css")}} rel="stylesheet"/>
    <link href={{asset("assets/admin/dist/css/tabler-flags.min.css")}} rel="stylesheet"/>
    <link href={{asset("assets/admin/dist/css/tabler-payments.min.css")}} rel="stylesheet"/>
    <link href={{asset("assets/admin/dist/css/tabler-vendors.min.css")}} rel="stylesheet"/>
    <link href={{asset("assets/admin/dist/css/demo.min.css")}} rel="stylesheet"/>
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>
<body class=" d-flex flex-column">
<script src={{asset("assets/admin/dist/js/demo-theme.min.js")}}></script>
<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <a href="../auth/layout" class="navbar-brand navbar-brand-autodark">
                <img src={{asset("assets/admin/static/logo.svg")}} width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a>
        </div>
       @yield('content')
    </div>
</div>
<!-- Libs JS -->
<!-- Tabler Core -->
<script src={{asset("assets/admin/dist/js/tabler.min.js")}} defer></script>
<script src={{asset("assets/admin/dist/js/demo.min.js")}} defer></script>
</body>
</html>



