<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style layout-menu-fixed" dir="ltr"
    data-theme="theme-default" data-assets-path="{{ asset('assets') }}" data-template="vertical-menu-template-free">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <x-header.link-head-app />
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
        /* background-color: transparent */
        background-color: #fff;
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

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <x-sidebar />

            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <x-navbar />

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        {{ $slot }}

                        <!-- / Content -->

                        <!-- Footer -->
                        <x-partials.footer />
                        <!-- / Footer -->

                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->

        <x-footer.link-foot-app />

        <x-partials.loader/>

</body>

</html>
