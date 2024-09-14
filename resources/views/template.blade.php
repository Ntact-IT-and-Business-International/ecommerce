<!DOCTYPE html>
<html lang="en" class="">
   @include('layouts.front.css')
    <body>
        <!--==================== Preloader Start ====================-->
       @include('layouts.front.preloader')
        <!--==================== Preloader End ====================-->
        <!--==================== Overlay Start ====================-->
        <div class="overlay"></div>
        <!--==================== Overlay End ====================-->
        <!--==================== Sidebar Overlay End ====================-->
        <div class="side-overlay"></div>
        <!--==================== Sidebar Overlay End ====================-->
        <!-- ==================== Scroll to Top End Here ==================== -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- ==================== Scroll to Top End Here ==================== -->
        <!-- ==================== Search Box Start Here ==================== -->
        @include('layouts.front.search_form')
        <!-- ==================== Search Box End Here ==================== -->
        <!-- ==================== Mobile Menu Start Here ==================== -->
        @include('layouts.front.mobile_menu')
        <!-- ==================== Mobile Menu End Here ==================== -->
        <!-- ======================= Middle Top Start ========================= -->
        @include('layouts.front.header_top')
        <!-- ======================= Middle Top End ========================= -->
        <!-- ======================= Middle Header Start ========================= -->
        @include('layouts.front.menu')
        <!-- ======================= Middle Header End ========================= -->
        <!-- ==================== Header Start Here ==================== -->
        @include('layouts.front.side_menu')
        <!-- ==================== Header End Here ==================== -->
        @yield('content')
        
        <!-- ==================== Footer Start Here ==================== -->
        @include('layouts.front.footer')
        <!-- ==================== Footer End Here ==================== -->
        <!-- Jquery js -->
       @include('layouts.front.javascript')
    </body>
</html>