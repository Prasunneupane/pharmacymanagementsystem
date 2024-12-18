<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>@yield('title')</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="@yield('title')">
    <meta name="author" content="Prasun Neupane">
    <meta name="description" content="Pharmacy Management System"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    {{-- <link rel="stylesheet" href="{{asset('assets/css/fontawesom.min.css')}}" ><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)--> --}}
    <link rel="stylesheet" href="{{asset('assets/css/overlayscrollbar.min.css')}}" ><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    {{-- <link rel="stylesheet" href="{{asset('assets/css/bootstrapicon.min.css')}}" ><!--begin::Required Plugin(AdminLTE)--> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{asset('assets/css/adminlte.css')}}"><!--end::Required Plugin(AdminLTE)--><!-- apexcharts -->
    <link rel="stylesheet" href="{{asset('assets/css/apexcharts.min.css')}}" ><!-- jsvectormap -->
    <link rel="stylesheet" href="{{asset('assets/css/jsvectormap.min.css')}}" >
    @yield('additional_css')

</head> <!--end::Head-->