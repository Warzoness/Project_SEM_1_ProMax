<!-- Side Nav start-->
<div class="side-nav side-nav-transparent side-nav-expand">
    <div class="side-nav-header">
        <div class="logo px-6">
            <img src="{{ asset('assets') }}/img/logo/logo-light-full.png" alt="Elstar logo">
        </div>
    </div>
    <div class="side-nav-content relative side-nav-scroll">
        <nav class="menu menu-transparent px-4 pb-4">
            <div class="menu-group">
                <div class="menu-title">Apps</div>
                <ul>
                    <li class="menu-collapse">
                        <div class="menu-collapse-item">
                            <svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0"
                                viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span class="menu-item-text">Tổng Quan</span>
                        </div>
                        <ul>
                            <li data-menu-item="modern-project-dashboard" class="menu-item">
                                <a class="h-full w-full flex items-center" href="{{ route('project.dashboard') }}">
                                    <span>Điều Khiển</span>
                                </a>
                            </li>
                            <li data-menu-item="modern-issue" class="menu-item">
                                <a class="h-full w-full flex items-center" href="{{ route('project.issue') }}">
                                    <span>Phản Hồi Khách Hàng</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-collapse">
                        <div class="menu-collapse-item">
                            <svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0"
                                viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                            <span class="menu-item-text">CRM</span>
                        </div>
                        <ul>
                            <li data-menu-item="modern-customers" class="menu-item">
                                <a class="h-full w-full flex items-center" href="modern-customers.html">
                                    <span>Khách Hàng</span>
                                </a>
                            </li>
                            <li data-menu-item="modern-mail" class="menu-item">
                                <a class="h-full w-full flex items-center" href="modern-mail.html">
                                    <span>Phản Hồi</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-collapse">
                        <div class="menu-collapse-item">
                            <svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0"
                                viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                            <span class="menu-item-text">Bán Hàng</span>
                        </div>
                        <ul>
                            <li data-menu-item="modern-sales-dashboard" class="menu-item">
                                <a class="h-full w-full flex items-center" href="{{ route('paymentMethods.index') }}">
                                    <span>Phương Thức Thanh Toán</span>
                                </a>
                            </li>
                            <li data-menu-item="modern-sales-dashboard" class="menu-item">
                                <a class="h-full w-full flex items-center" href="{{ route('brands.index') }}">
                                    <span>Nhãn Hàng</span>
                                </a>
                            </li>
                            <li data-menu-item="modern-sales-dashboard" class="menu-item">
                                <a class="h-full w-full flex items-center" href="{{ route('colors.index') }}">
                                    <span>Màu Sắc</span>
                                </a>
                            </li>
                            <li data-menu-item="modern-product-list" class="menu-item">
                                <a class="h-full w-full flex items-center" href="{{ route('category.index') }}">
                                    <span>Danh Mục</span>
                                </a>
                            </li>
                            <li data-menu-item="modern-product-edit" class="menu-item">
                                <a class="h-full w-full flex items-center" href="{{ route('products.index') }}">
                                    <span>Sản Phẩm</span>
                                </a>
                            </li>
                            <li data-menu-item="modern-order-details" class="menu-item">
                                <a class="h-full w-full flex items-center" href="modern-order-details.html">
                                    <span>Order Details</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="menu-collapse">
                        <div class="menu-collapse-item">
                            <svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0"
                                viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                            <span class="menu-item-text">Quản Lý Tài Khoản</span>
                        </div>
                        <ul>
                            <li data-menu-item="modern-settings" class="menu-item">
                                <a class="h-full w-full flex items-center" href="{{ route('account.index') }}">
                                    <span>Cài Đặt</span>
                                </a>
                            </li>
                            <li data-menu-item="modern-invoice" class="menu-item">
                                <a class="h-full w-full flex items-center" href="{{ route('account.create') }}">
                                    <span>Thêm Mới Admin</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="menu-group">
                <div class="menu-title">Authentication</div>
                <ul>
                    <li class="menu-collapse">
                        <div class="menu-collapse-item">
                            <svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0"
                                viewBox="0 0 24 24" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                            <span class="menu-item-text">Sign In</span>
                        </div>
                        <ul>
                            <li data-menu-item="signin-simple" class="menu-item">
                                <a class="h-full w-full flex items-center" href="signin-simple.html">
                                    <span>Simple</span>
                                </a>
                            </li>
                            <li data-menu-item="signin-side" class="menu-item">
                                <a class="h-full w-full flex items-center" href="signin-side.html">
                                    <span>Side</span>
                                </a>
                            </li>
                            <li data-menu-item="signin-cover" class="menu-item">
                                <a class="h-full w-full flex items-center" href="signin-cover.html">
                                    <span>Cover</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-collapse">
                        <div class="menu-collapse-item">
                            <svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0"
                                viewBox="0 0 24 24" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                                </path>
                            </svg>
                            <span class="menu-item-text">Sign Up</span>
                        </div>
                        <ul>
                            <li data-menu-item="signup-simple" class="menu-item">
                                <a class="h-full w-full flex items-center" href="signup-simple.html">
                                    <span>Simple</span>
                                </a>
                            </li>
                            <li data-menu-item="signup-side" class="menu-item">
                                <a class="h-full w-full flex items-center" href="signup-side.html">
                                    <span>Side</span>
                                </a>
                            </li>
                            <li data-menu-item="signup-cover" class="menu-item">
                                <a class="h-full w-full flex items-center" href="signup-cover.html">
                                    <span>Cover</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-collapse">
                        <div class="menu-collapse-item">
                            <svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0"
                                viewBox="0 0 24 24" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                            <span class="menu-item-text">Forgot Password</span>
                        </div>
                        <ul>
                            <li data-menu-item="forget-password-simple" class="menu-item">
                                <a class="h-full w-full flex items-center" href="forget-password-simple.html">
                                    <span>Simple</span>
                                </a>
                            </li>
                            <li data-menu-item="forget-password-side" class="menu-item">
                                <a class="h-full w-full flex items-center" href="forget-password-side.html">
                                    <span>Side</span>
                                </a>
                            </li>
                            <li data-menu-item="forget-password-cover" class="menu-item">
                                <a class="h-full w-full flex items-center" href="forget-password-cover.html">
                                    <span>Cover</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-collapse">
                        <div class="menu-collapse-item">
                            <svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0"
                                viewBox="0 0 24 24" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z">
                                </path>
                            </svg>
                            <span class="menu-item-text">Reset Password</span>
                        </div>
                        <ul>
                            <li data-menu-item="reset-password-simple" class="menu-item">
                                <a class="h-full w-full flex items-center" href="reset-password-simple.html">
                                    <span>Simple</span>
                                </a>
                            </li>
                            <li data-menu-item="reset-password-side" class="menu-item">
                                <a class="h-full w-full flex items-center" href="reset-password-side.html">
                                    <span>Side</span>
                                </a>
                            </li>
                            <li data-menu-item="reset-password-cover" class="menu-item">
                                <a class="h-full w-full flex items-center" href="reset-password-cover.html">
                                    <span>Cover</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu-group">
                <div class="menu-title menu-title-transparent">
                    Pages
                </div>
                <ul>
                    <li data-menu-item="modern-welcome" class="menu-item menu-item-single mb-2">
                        <a class="menu-item-link" href="modern-welcome.html">
                            <svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0"
                                viewBox="0 0 24 24" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11">
                                </path>
                            </svg>
                            <span class="menu-item-text">Welcome</span>
                        </a>
                    </li>
                    <li data-menu-item="modern-access-denied" class="menu-item menu-item-single mb-2">
                        <a class="menu-item-link" href="modern-access-denied.html">
                            <span class="menu-item-icon">
                                <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636">
                                    </path>
                                </svg>
                            </span>
                            <span class="menu-item-text">Access Denied</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu-group">
                <div class="menu-title menu-title-transparent">
                    Guide
                </div>
                <ul>
                    <li data-menu-item="modern-documentation" class="menu-item menu-item-single mb-2">
                        <a class="menu-item-link" href="{{ route('admin.logout') }}">
                            <span class="menu-item-icon">
                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                    aria-hidden="true" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                            </span>
                            <span class="menu-item-text">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- Side Nav end-->
