<header class="site-header header-style-3">
    <div class="pbmit-header-overlay">
        <div class="pbmit-main-header-area">
            <div class="container-fluid">
                <div class="pbmit-header-content d-flex justify-content-between align-items-center">
                    <div class="pbmit-logo-menuarea d-flex justify-content-between align-items-center">
                        <div class="site-branding">
                            <h1 class="site-title">
                                <a href="/">
                                    <img class="logo-img" src="{{ asset('assets/images/logo-white.svg') }}" alt="Shipex">
                                </a>
                            </h1>
                        </div>

                        <div class="pbmit-menuarea">
                            <div class="site-navigation">
                                <nav class="main-menu navbar-expand-xl navbar-light">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->
                                        <button class="navbar-toggler" type="button">
                                            <i class="pbmit-base-icon-menu-1"></i>
                                        </button>
                                    </div>

                                    <div class="pbmit-mobile-menu-bg"></div>

                                    <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                                        <div class="pbmit-menu-wrap">
                                            <span class="closepanel">
                                                <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="20.163" height="20.163" viewBox="0 0 26.163 26.163">
                                                    <rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
                                                    <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
                                                </svg>
                                            </span>

                                            <ul class="navigation clearfix">
                                                <li><a href="/">Home</a></li>

                                                <li class="menu-item"><a href="/about-us">About Us</a></li>

                                                <li class="dropdown">
                                                    <a href="#">Services</a>
                                                    <ul>
                                                        <li><a href="services.html">Warehousing</a></li>
                                                        <li><a href="service-details.html">Service Detail</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="/faqs">Help & Faqs</a></li>

                                                <li><a href="mailto:{{ config('settings.site.email') }}">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <button class="pbmit-burger-menu-link">
                        <svg fill="none" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                            <g fill="rgb(0,0,0)">
                                <path d="m7 10.75h-2c-2.42 0-3.75-1.33-3.75-3.75v-2c0-2.42 1.33-3.75 3.75-3.75h2c2.42 0 3.75 1.33 3.75 3.75v2c0 2.42-1.33 3.75-3.75 3.75zm-2-8c-1.58 0-2.25.67-2.25 2.25v2c0 1.58.67 2.25 2.25 2.25h2c1.58 0 2.25-.67 2.25-2.25v-2c0-1.58-.67-2.25-2.25-2.25z"></path>
                                <path d="m19 10.75h-2c-2.42 0-3.75-1.33-3.75-3.75v-2c0-2.42 1.33-3.75 3.75-3.75h2c2.42 0 3.75 1.33 3.75 3.75v2c0 2.42-1.33 3.75-3.75 3.75zm-2-8c-1.58 0-2.25.67-2.25 2.25v2c0 1.58.67 2.25 2.25 2.25h2c1.58 0 2.25-.67 2.25-2.25v-2c0-1.58-.67-2.25-2.25-2.25z"></path>
                                <path d="m19 22.75h-2c-2.42 0-3.75-1.33-3.75-3.75v-2c0-2.42 1.33-3.75 3.75-3.75h2c2.42 0 3.75 1.33 3.75 3.75v2c0 2.42-1.33 3.75-3.75 3.75zm-2-8c-1.58 0-2.25.67-2.25 2.25v2c0 1.58.67 2.25 2.25 2.25h2c1.58 0 2.25-.67 2.25-2.25v-2c0-1.58-.67-2.25-2.25-2.25z"></path>
                                <path d="m7 22.75h-2c-2.42 0-3.75-1.33-3.75-3.75v-2c0-2.42 1.33-3.75 3.75-3.75h2c2.42 0 3.75 1.33 3.75 3.75v2c0 2.42-1.33 3.75-3.75 3.75zm-2-8c-1.58 0-2.25.67-2.25 2.25v2c0 1.58.67 2.25 2.25 2.25h2c1.58 0 2.25-.67 2.25-2.25v-2c0-1.58-.67-2.25-2.25-2.25z"></path>
                            </g>
                        </svg>
                    </button>

                    <div class="pbmit-right-box d-flex align-items-center">
                        <div class="social-links-wrapper">
                            <ul class="pbmit-social-links">
                                <li class="pbmit-social-li pbmit-social-facebook">
                                    <a title="Facebook" href="#" target="_blank">
                                        <span><i class="pbmit-base-icon-facebook-f"></i></span>
                                    </a>
                                </li>

                                <li class="pbmit-social-li pbmit-social-twitter">
                                    <a title="Twitter" href="#" target="_blank">
                                        <span><i class="pbmit-base-icon-twitter-2"></i></span>
                                    </a>
                                </li>

                                <li class="pbmit-social-li pbmit-social-linkedin">
                                    <a title="LinkedIn" href="#" target="_blank">
                                        <span><i class="pbmit-base-icon-linkedin-in"></i></span>
                                    </a>
                                </li>

                                <li class="pbmit-social-li pbmit-social-instagram">
                                    <a title="Instagram" href="#" target="_blank">
                                        <span><i class="pbmit-base-icon-instagram"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="pbmit-header-search-btn">
                            <a href="#" title="Search">
                                <i class="pbmit-base-icon-search-1"></i>
                            </a>
                        </div>

                        <div class="pbmit-header-button2">
                            <a class="pbmit-btn" href="/tracking">
                                <span class="pbmit-button-content-wrapper">
                                    <span class="pbmit-button-text">Track & Trace</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pbmit-burger-menu-area pbmit-burger-menu-yes">
        <div class="pbmit-burger-headerarea">
            <span class="pbmit-closepanel">
                <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 26.163 26.163">
                    <rect width="70" height="1" transform="translate(0.707) rotate(45)"></rect>
                    <rect width="70" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
                </svg>
            </span>

            <div class="pbmit-logo-area">
                <div class="site-branding">
                    <div class="wrap">
                        <h1 class="site-title">
                            <a href="#" rel="home">
                                <img class="pbmit-main-logo" src="{{ asset('assets/images/logo.svg') }}" alt="Shipex Demo3" title="Shipex Demo3">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="pbmit-search-cart-box ">
                <div class="pbmit-header-search-btn">
                    <a href="#" title="Search">
                        <i class="pbmit-base-icon-search-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="pbmit-burger-menu-area-inner">
            <nav class="main-navigation" aria-label="Top Menu">
                <div class="menu-main-menu-container">
                    <ul class="menu">
                        <li class="menu-item"><a href="/">Home</a></li>

                        <li class="menu-item"><a href="/about-us">About Us</a></li>

                        <li class="menu-item">
                            <a href="#">Services</a>
                            <span class="sub-menu-toggle">
                                <i class="pbmit-base-icon-down-open-big"></i>
                            </span>
                            <ul class="sub-menu" style="display: none;">
                                <li><a href="services.html">Services</a></li>
                                <li><a href="service-details.html">Service Detail</a></li>
                            </ul>
                        </li>

                        <li class="menu-item"><a href="/faqs">Help & Faqs</a></li>

                        <li class="menu-item"><a href="mailto:{{ config('settings.site.email') }}">Contact Us</a></li>
                    </ul>

                    <span class="closepanel">
                        <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="20.163" height="20.163" viewBox="0 0 26.163 26.163">
                            <rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
                            <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
                        </svg>
                    </span>
                </div>
            </nav>

            <div class="pbmit-burger-content">
                <div class="pbmit-burger-content-address">
                    <div class="pbmit-burger-content-1 pbmit-burger-info">
                        {{ config('settings.site.email', '') }}
                    </div>

                    <div class="pbmit-burger-content-2 pbmit-burger-info">
                        {{ config('settings.site.phone', '') }}
                    </div>

                    <div class="pbmit-burger-content-3 pbmit-burger-info">
                        {{ config('settings.site.address', '') }}
                    </div>
                </div>

                <div class="pbmit-burger-content-scoialbox">
                    <div class="pbmit-burger-content-4">
                        If you have any questions or need help, feel free to contact with our team.
                    </div>

                    <div class="pbmit-burger-content-scoialbox-icon">
                        <ul class="pbmit-social-links">
                            <li class="pbmit-social-li pbmit-social-facebook">
                                <a title="Facebook" href="#" target="_blank">
                                    <span><i class="pbmit-base-icon-facebook-f"></i></span>
                                </a>
                            </li>

                            <li class="pbmit-social-li pbmit-social-twitter">
                                <a title="Twitter" href="#" target="_blank">
                                    <span><i class="pbmit-base-icon-twitter-2"></i></span>
                                </a>
                            </li>

                            <li class="pbmit-social-li pbmit-social-linkedin">
                                <a title="LinkedIn" href="#" target="_blank">
                                    <span><i class="pbmit-base-icon-linkedin-in"></i></span>
                                </a>
                            </li>

                            <li class="pbmit-social-li pbmit-social-instagram">
                                <a title="Instagram" href="#" target="_blank">
                                    <span><i class="pbmit-base-icon-instagram"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
