<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style customizer-hide" dir="ltr"
    data-theme="theme-default" data-assets-path="{{ asset('assets') }}" data-template="vertical-menu-template-free">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <x-header.link-head />

</head>

<style>
    #loader{
        position: fixed;
        inset: 0 0 0 0;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        min-height: 100vh;
        pointer-events: all;
        transition: opacity 1s ease;
        opacity: 1;
        background-color: transparent
    }

    .hidden{
        opacity: 0;
        pointer-events: none;
    }
</style>

<body>

    <div id="loader">
        <div class="spinner-border text-primary" style="font-size: 2rem;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <!-- Content -->

    <div class="container-xxl">
        {{ $slot }}
    </div>

    <!-- / Content -->


    <x-footer.link-foot />

    <x-partials.loader/>

</body>

</html>
