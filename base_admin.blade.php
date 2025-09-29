<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page_title')</title>

    @include('admin.parts.styles')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="/admin_dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

{{--    @include('admin.parts.navbar')--}}
    <x-app-layout>
    </x-app-layout>
    @include('admin.parts.sidebar')
    @include('admin.parts.content')
    @include('admin.parts.footer')


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.parts.scripts')

</body>
</html>
