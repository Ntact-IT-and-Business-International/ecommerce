@extends('template')
@section('content')
<div class="breadcrumb py-26 bg-main-two-50">
    <div class="container container-lg">
        <div class="breadcrumb-wrapper flex-between flex-wrap gap-16">
            <h6 class="mb-0">My Account</h6>
            <ul class="flex-align gap-8 flex-wrap">
                <li class="text-sm">
                    <a href="index.html" class="text-gray-900 flex-align gap-8 hover-text-main-600">
                        <i class="ph ph-house"></i>
                        Home
                    </a>
                </li>
                <li class="flex-align">
                    <i class="ph ph-caret-right"></i>
                </li>
                <li class="text-sm text-main-600"> Account </li>
            </ul>
        </div>
    </div>
</div>
<!-- ========================= Breadcrumb End =============================== -->

    <!-- =============================== Account Section Start =========================== -->
 <section class="account py-80">
    <div class="container container-lg">
    <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession
        <form method="POST" action="{{ route('login') }}">
        @csrf
            <div class="row gy-4">

                <!-- Login Card Start -->
                <div class="col-xl-4 pe-xl-5"></div>
                <div class="col-xl-4 pe-xl-5">
                    <div class="border border-gray-100 hover-border-main-600 transition-1 rounded-16 px-24 py-40 h-100">
                        <h6 class="text-xl mb-32">Enter Your Credentials</h6>
                        <div class="mb-24">
                            <label for="username" class="text-neutral-900 text-lg mb-8 fw-medium">Email address <span class="text-danger">*</span> </label>
                            <input type="email" class="common-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email">
                        </div>
                        <div class="mb-24">
                            <label for="password" class="text-neutral-900 text-lg mb-8 fw-medium">Password</label>
                            <div class="position-relative">
                                <input type="password" class="common-input"  type="password" name="password" required autocomplete="current-password" placeholder="Enter Password">
                                <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y cursor-pointer ph ph-eye-slash" id="#password"></span>
                            </div>
                        </div>
                        <div class="mb-24 mt-48">
                            <div class="flex-align gap-48 flex-wrap">
                                <button type="submit" class="btn btn-main py-18 px-40">Log in</button>
                                <div class="form-check common-check">
                                    <input class="form-check-input" id="remember_me" name="remember">
                                    <label class="form-check-label flex-grow-1" for="remember">Remember me</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-48">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-danger-600 text-sm fw-semibold hover-text-decoration-underline">Forgot your password?</a>
                        @endif
                        </div>
                    </div>
                </div>
                <!-- Login Card End -->
                <div class="col-xl-4 pe-xl-5"></div>
</div>
</form>
</div>
</section>
    <!-- ========================== Shipping Section Start ============================ -->
    <section class="shipping mb-24" id="shipping">
    <div class="container container-lg">
        <div class="row gy-4">
            <div class="col-xxl-3 col-sm-6">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-car-profile"></i></span>
                    <div class="">
                        <h6 class="mb-0">Free Shipping</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-hand-heart"></i></span>
                    <div class="">
                        <h6 class="mb-0"> 100% Satisfaction</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-credit-card"></i></span>
                    <div class="">
                        <h6 class="mb-0"> Secure Payments</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-sm-6">
                <div class="shipping-item flex-align gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                    <span class="w-56 h-56 flex-center rounded-circle bg-main-600 text-white text-32 flex-shrink-0"><i class="ph-fill ph-chats"></i></span>
                    <div class="">
                        <h6 class="mb-0"> 24/7 Support</h6>
                        <span class="text-sm text-heading">Free shipping all over the US</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
<!-- ========================== Shipping Section End ============================ -->
@endsection

