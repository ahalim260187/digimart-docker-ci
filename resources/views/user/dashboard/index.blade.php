@extends('frontend.layouts.master')
@section('content')
    <!-- ================================== Dashboard Start =========================== -->
    <section class="dashboard">
        <div class="dashboard__inner d-flex">

            <!-- ===================== Dashboard Sidebar Start ======================= -->
            <div class="dashboard-sidebar">
                <button type="button" class="dashboard-sidebar__close d-lg-none d-flex"><i class="las la-times"></i></button>
                <div class="dashboard-sidebar__inner">
                    <a href="index.html" class="logo mb-48">
                        <img src={{ asset('assets/frontend/assets/images/logo/logo.png') }} alt=""
                            class="white-version">
                    </a>
                    <a href="index.html" class="logo logo_icon favicon mb-48">
                        <img src={{ asset('assets/frontend/assets/images/thumbs/dashboard_sidebar_icon.png') }}
                            alt="">
                    </a>

                    <!-- Sidebar List Start -->
                    <ul class="sidebar-list">
                        <li class="sidebar-list__item">
                            <a href="{{ route('dashboard') }}" class="sidebar-list__link">
                                <span class="sidebar-list__icon">
                                    <i class="ti ti-device-heart-monitor"></i>
                                </span>
                                <span class="text">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-list__item">
                            <a href="{{ route('profile.edit') }}" class="sidebar-list__link">
                                <span class="sidebar-list__icon">
                                    <i class="ti ti-user"></i>
                                </span>
                                <span class="text">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-list__item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="sidebar-list__link">
                                    <span class="sidebar-list__icon">
                                        <i class="ti ti-logout"></i>
                                    </span>
                                    <span class="text">Logout</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                    <!-- Sidebar List End -->

                </div>
            </div>
            <!-- ===================== Dashboard Sidebar End ======================= -->

            <div class="dashboard-body">

                <!-- Dashboard Nav Start -->
                <div class="dashboard-nav bg-white flx-between gap-md-3 gap-2">
                    <div class="dashboard-nav__left flx-align gap-md-3 gap-2">
                        <button type="button" class="icon-btn bar-icon text-heading bg-gray-seven flx-center">
                            <i class="las la-bars"></i>
                        </button>
                        <button type="button" class="icon-btn arrow-icon text-heading bg-gray-seven flx-center">
                            <img src={{ asset('assets/frontend/assets/images/icons/angle-right.svg') }} alt="">
                        </button>
                        <form action="#" class="search-input d-sm-block d-none">
                            <span class="icon">
                                <img src={{ asset('assets/frontend/assets/images/icons/search-dark.svg') }} alt=""
                                    class="white-version">
                                <img src={{ asset('assets/frontend/assets/images/icons/search-dark-white.svg') }}
                                    alt="" class="dark-version">
                            </span>
                            <input type="text" class="common-input common-input--md common-input--bg pill w-100"
                                placeholder="Search here...">
                        </form>
                    </div>
                    <div class="dashboard-nav__right">
                        <div class="header-right flx-align">
                            <div class="header-right__inner gap-sm-3 gap-2 flx-align d-flex">
                                <div class="user-profile">
                                    <button class="user-profile__button flex-align">
                                        <span class="user-profile__thumb">
                                            <img src={{ asset('assets/frontend/assets/images/thumbs/user-profile.png') }}
                                                class="cover-img" alt="">
                                        </span>
                                    </button>
                                    <ul class="user-profile-dropdown">
                                        <li class="sidebar-list__item">
                                            <a href="{{ route('profile.edit') }}" class="sidebar-list__link">
                                                <span class="sidebar-list__icon">
                                                    <img src={{ asset('assets/frontend/assets/images/icons/sidebar-icon2.svg') }}
                                                        alt="" class="icon">
                                                    <img src={{ asset('assets/frontend/assets/images/icons/sidebar-icon-active2.svg') }}
                                                        alt="" class="icon icon-active">
                                                </span>
                                                <span class="text">Profile</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-list__item">
                                            <a href="{{ route('profile.edit') }}" class="sidebar-list__link">
                                                <span class="sidebar-list__icon">
                                                    <img src={{ asset('assets/frontend/assets/images/icons/sidebar-icon10.svg') }}
                                                        alt="" class="icon">
                                                    <img src={{ asset('assets/frontend/assets/images/icons/sidebar-icon-active10.svg') }}
                                                        alt="" class="icon icon-active">
                                                </span>
                                                <span class="text">Settings</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-list__item">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="sidebar-list__link">
                                                    <span class="sidebar-list__icon">
                                                        <img src={{ asset('assets/frontend/assets/images/icons/sidebar-icon13.svg') }}
                                                            alt="" class="icon">
                                                        <img src={{ asset('assets/frontend/assets/images/icons/sidebar-icon-active13.svg') }}
                                                            alt="" class="icon icon-active">
                                                    </span>
                                                    <span class="text">Logout</span>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dashboard Nav End -->

                @yield('content_dashboard')

                <!-- ====================== Dashboard Footer Start ======================== -->
                <div class="dashboard-footer bottom-footer-two mt-32 border-0 bg-white">
                    <div class="bottom-footer__inner flx-between gap-3">
                        <p class="bottom-footer__text font-14"> Copyright © 2024 DigiMart, All rights reserved.</p>
                        <div class="footer-links gap-4">
                            <a href="#" class="footer-link hover-text-heading font-14">Terms of service</a>
                            <a href="#" class="footer-link hover-text-heading font-14">Privacy Policy</a>
                            <a href="#" class="footer-link hover-text-heading font-14">cookies</a>
                        </div>
                    </div>
                </div>
                <!-- ====================== Dashboard Footer End ======================== -->


            </div>
        </div>
    </section>
    <!-- ================================== Dashboard End =========================== -->
@endsection
