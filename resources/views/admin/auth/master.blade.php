<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('admin-assets') }}/" data-template="vertical-menu-template-free">

@include('admin.auth.partials.head')

<body>
    <!-- Content -->

    @yield('content')

    <!-- / Content -->

    @include('admin.auth.partials.scripts')
</body>

</html>
