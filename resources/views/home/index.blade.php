@extends('layouts.app')
@section('content')
    <div class="page-content">
        <!-- Banner Section -->
        <div class="position-relative">
            <div class="banner-section-btn">
                <a class="pbmit-icon" href="#pbmit-about">
                    <i class="pbmit-shipex-icon pbmit-shipex-icon-arrow-down-1"></i>
                </a>
            </div>

            <section class="banner-section-three">
                <div class="container-fluid">
                    <div class="row g-0">
                        <div class="col-md-12 col-xl-6">
                            <div class="banner-section-left pbmit-bg-color-blackish">
                                <div class="pbmit-content">
                                    <h5 class="pbmit-sub-title">Logistic Transportation</h5>
                                    <h2 class="pbmit-title">The Bridge to Your Logistics Success</h2>
                                    <div class="pbmit-desc">
                                        We specialise in providing supply-chain warehousing and delivery services throughout the world.
                                    </div>

                                    <div class="pbmit-button">
                                        <a class="pbmit-btn pbmit-btn-white" href="{{ route('tracking') }}">
											<span class="pbmit-button-content-wrapper">
												<span class="pbmit-button-text">Track Shipment</span>
											</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-xl-6">
                            <div class="banner-section-right">
                                <!-- <img loading="lazy" src="{{ asset('assets/images/homepage-3/banner-img.jpg') }}" class="w-100 h-100" alt=""> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Banner Section End -->

        <!-- Marquee Start -->
        <section>
            <div class="container-fluid p-0">
                <div class="swiper-slider marquee">
                    <div class="swiper-wrapper">
                        <article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title" data-text="Land Express">
                                    Land Express
                                </h2>
                            </div>
                        </article>

                        <article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title" data-text="Air Freight">
                                    Air Freight
                                </h2>
                            </div>
                        </article>

                        <article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title" data-text="Warehousing">
                                    Warehousing
                                </h2>
                            </div>
                        </article>

                        <article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title" data-text="Rail Freight">
                                    Rail Freight
                                </h2>
                            </div>
                        </article>

                        <article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title" data-text="Best Service">
                                    Best Service
                                </h2>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Marquee End -->

        <!-- About Start -->
        <section class="about-section-three" id="pbmit-about">
            <div class="container">
                <div class="row g-0">
                    <div class="col-md-12 col-xl-6">
                        <div class="about-three-left-box">
                            <div class="fid-style-box animated zoomIn">
                                <div class="pbminfotech-ele-fid-style-4">
                                    <div class="pbmit-fld-contents">
                                        <div class="pbmit-fld-wrap">
                                            <h4 class="pbmit-fid-inner">
                                                <span class="pbmit-fid-before"></span>
                                                <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="25" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">25</span>
                                                <span class="pbmit-fid"><span>+</span></span>
                                            </h4>
                                            <span class="pbmit-fid-title">Years of<br> experience</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="about-first-img">
                                <img loading="lazy" src="{{ asset('assets/images/homepage-3/about-01.jpg') }}" class="img-fluid" alt="">
                            </div>

                            <div class="about-second-img">
                                <div class="img-wrap">
                                    <img loading="lazy" src="{{ asset('assets/images/homepage-3/about-02.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-xl-6">
                        <div class="about-three-right-box">
                            <div class="pbmit-heading-subheading">
                                <h4 class="pbmit-subtitle">About Us</h4>
                                <h2 class="pbmit-title">Optimizing Efficiency, Minimizing Costs</h2>
                                <div class="pbmit-heading-desc">
                                    We deliver innovative logistics solutions, leveraging decades of expertise to streamline operations and drive success for our clients.
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="pe-4">
                                        <div class="pbmit-ihbox-style-3">
                                            <div class="pbmit-ihbox-box d-flex">
                                                <div class="pbmit-ihbox-icon">
                                                    <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                                        <svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="_x30_5_x2C__logistics_x2C__shipping_x2C__truck_x2C__delivery_x2C__checked1">
                                                                <g id="XMLID_175_1">
                                                                    <path id="XMLID_177_" d="m125.132 401.481c-2.272 0-4.122 1.842-4.122 4.106 0 2.274 1.849 4.125 4.122 4.125 2.267 0 4.11-1.851 4.11-4.125 0-2.264-1.844-4.106-4.11-4.106z"></path>
                                                                    <path id="XMLID_211_" d="m318.133 67.967h-281.076v234h281.076zm-140.539 211.515c-52.116 0-94.516-42.399-94.516-94.515s42.399-94.516 94.516-94.516 94.516 42.399 94.516 94.516c0 52.116-42.399 94.515-94.516 94.515z"></path>
                                                                    <path id="XMLID_227_" d="m125.126 367.162c-21.193 0-38.435 17.241-38.435 38.435s17.242 38.436 38.435 38.436 38.435-17.242 38.435-38.436-17.242-38.435-38.435-38.435zm.006 52.551c-7.787 0-14.122-6.337-14.122-14.125 0-7.778 6.335-14.106 14.122-14.106 7.78 0 14.11 6.328 14.11 14.106 0 7.788-6.33 14.125-14.11 14.125z"></path>
                                                                    <path id="XMLID_233_" d="m377.753 367.161c-21.193 0-38.436 17.242-38.436 38.436s17.242 38.437 38.436 38.437c21.193 0 38.435-17.242 38.435-38.437-.001-21.194-17.242-38.436-38.435-38.436zm.004 52.552c-7.787 0-14.122-6.337-14.122-14.125 0-7.778 6.335-14.106 14.122-14.106 7.781 0 14.111 6.328 14.111 14.106 0 7.788-6.33 14.125-14.111 14.125z"></path>
                                                                    <path id="XMLID_234_" d="m377.757 401.481c-2.272 0-4.122 1.842-4.122 4.106 0 2.274 1.849 4.125 4.122 4.125 2.267 0 4.111-1.851 4.111-4.125 0-2.264-1.844-4.106-4.111-4.106z"></path>
                                                                    <path id="XMLID_235_" d="m351.868 298.231v-99.965h-23.735v108.701c0 2.762-2.239 5-5 5h-286.076v62.23l16.479 16.48h25.516c6.306-19.427 24.571-33.516 46.074-33.516s39.767 14.088 46.073 33.516h160.479c6.306-19.428 24.571-33.517 46.074-33.517 25.019 0 45.667 19.069 48.177 43.436h33.025l15.989-15.116v-82.249h-118.075c-2.761 0-5-2.238-5-5z"></path>
                                                                    <path id="XMLID_237_1" d="m177.594 100.451c-46.602 0-84.516 37.914-84.516 84.516s37.914 84.515 84.516 84.515 84.516-37.914 84.516-84.515c0-46.602-37.913-84.516-84.516-84.516zm45.218 56.218-56.75 56.75c-1.954 1.953-5.118 1.952-7.071 0l-32.25-32.25c-1.953-1.953-1.953-5.119 0-7.071s5.118-1.952 7.071 0l28.714 28.714 53.214-53.214c1.953-1.952 5.118-1.952 7.071 0 1.954 1.953 1.954 5.119.001 7.071z"></path>
                                                                    <path id="XMLID_238_1" d="m361.868 198.266v94.965h113.075v-23.157l-61.272-71.808z"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>

                                                <div class="pbmit-ihbox-contents">
                                                    <h2 class="pbmit-element-title">Secure Packaging</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="pe-3 mt-md-0 mt-4">
                                        <div class="pbmit-ihbox-style-3">
                                            <div class="pbmit-ihbox-box d-flex">
                                                <div class="pbmit-ihbox-icon">
                                                    <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                                        <svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g id="_x30_9_x2C__Box_x2C__delivery_x2C__fast_x2C__logistics_x2C__package"><g id="XMLID_92_"><path id="XMLID_97_" d="m214.187 139.087h83.622v70.413h-83.622z"></path><path id="XMLID_127_" d="m218.666 44.516h-115.871l-53.655 84.571h155.727z"></path><path id="XMLID_128_" d="m296.997 129.087-13.799-84.571h-54.4l-13.799 84.571z"></path><path id="XMLID_137_" d="m462.86 129.087-53.655-84.571h-115.875l13.799 84.571z"></path><path id="XMLID_161_" d="m307.809 214.499c0 2.761-2.239 5-5 5h-93.622c-2.761 0-5-2.239-5-5v-75.413h-159.141v328.397h421.907v-328.396h-159.144zm45.495 63.645c.798-1.815 2.594-2.987 4.577-2.987s3.778 1.172 4.577 2.986c7.449 16.933 48.733 19.658 62.515 3.441 1.358-1.598 3.567-2.178 5.535-1.455 1.967.724 3.275 2.597 3.275 4.693 0 20.441.242 41.094.242 61.57 0 40.563-28.416 78.062-74.16 97.86-1.241.538-2.682.559-3.972 0-45.742-19.8-74.157-57.297-74.157-97.86 0-20.482.244-41.127.244-61.57 0-2.097 1.308-3.97 3.275-4.693s4.176-.142 5.535 1.455c13.753 16.184 55.055 13.518 62.514-3.44z"></path><path id="XMLID_167_" d="m291.735 346.393c0 35.933 25.286 69.415 66.144 87.806 40.858-18.391 66.146-51.873 66.146-87.806 0-16.872-.166-33.883-.224-51.147-19.854 11.598-51.881 8.912-65.92-6.223-14.071 15.171-46.112 17.794-65.919 6.223-.058 16.996-.227 34.219-.227 51.147zm32.742 7.8c1.975-1.932 5.14-1.895 7.071.08l19.5 19.947 39.591-47.283c1.773-2.117 4.926-2.395 7.043-.624 2.117 1.773 2.396 4.927.624 7.044l-43.138 51.52c-1.883 2.249-5.323 2.418-7.409.285l-23.362-23.898c-1.931-1.976-1.895-5.142.08-7.071z"></path></g></g></svg>
                                                    </div>
                                                </div>
                                                <div class="pbmit-ihbox-contents">
                                                    <h2 class="pbmit-element-title">Award-Winning Service</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-group style-2">
                                <li class="list-group-item">
                                    <span class="pbmit-icon-list-icon">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>
                                    </span>
                                    <span class="pbmit-icon-list-text">Over 25 years delivering tailored logistics solutions</span>
                                </li>

                                <li class="list-group-item">
                                    <span class="pbmit-icon-list-icon">
                                        <svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>
                                    </span>
                                    <span class="pbmit-icon-list-text">Trusted by clients for reliable, efficient services</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

        <!-- About Us Start -->
        <section class="about-section-one pbmit-bg-color-blackish">
            <div class="container">
                <div class="row g-0 align-items-center">
                    <div class="col-md-12 col-xl-5">
                        <div class="pbmit-heading-subheading position-relative">
                            <h4 class="pbmit-subtitle">Our Expertise</h4>
                            <h2 class="pbmit-title">Pioneers in Supply Chain & Logistics</h2>
                        </div>

                        <div class="row">
                            <div class="col-md-5">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span class="pbmit-icon-list-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-square" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M400 480H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48h352c26.51 0 48 21.49 48 48v352c0 26.51-21.49 48-48 48zm-204.686-98.059l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.248-16.379-6.249-22.628 0L184 302.745l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.25 16.379 6.25 22.628.001z"></path></svg>
                                        </span>
                                        <span class="pbmit-icon-list-text">Secure Packaging</span>
                                    </li>

                                    <li class="list-group-item">
                                        <span class="pbmit-icon-list-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-square" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M400 480H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48h352c26.51 0 48 21.49 48 48v352c0 26.51-21.49 48-48 48zm-204.686-98.059l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.248-16.379-6.249-22.628 0L184 302.745l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.25 16.379 6.25 22.628.001z"></path></svg>
                                        </span>
                                        <span class="pbmit-icon-list-text">Global Delivery</span>
                                    </li>

                                    <li class="list-group-item">
                                        <span class="pbmit-icon-list-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-square" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M400 480H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48h352c26.51 0 48 21.49 48 48v352c0 26.51-21.49 48-48 48zm-204.686-98.059l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.248-16.379-6.249-22.628 0L184 302.745l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.25 16.379 6.25 22.628.001z"></path></svg>
                                        </span>
                                        <span class="pbmit-icon-list-text">Risk-Free</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-7">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span class="pbmit-icon-list-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-square" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M400 480H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48h352c26.51 0 48 21.49 48 48v352c0 26.51-21.49 48-48 48zm-204.686-98.059l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.248-16.379-6.249-22.628 0L184 302.745l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.25 16.379 6.25 22.628.001z"></path></svg>
                                        </span>
                                        <span class="pbmit-icon-list-text">On-Time Delivery</span>
                                    </li>

                                    <li class="list-group-item">
                                        <span class="pbmit-icon-list-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-square" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M400 480H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48h352c26.51 0 48 21.49 48 48v352c0 26.51-21.49 48-48 48zm-204.686-98.059l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.248-16.379-6.249-22.628 0L184 302.745l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.25 16.379 6.25 22.628.001z"></path></svg>
                                        </span>
                                        <span class="pbmit-icon-list-text">Cost-Efficient</span>
                                    </li>

                                    <li class="list-group-item">
                                        <span class="pbmit-icon-list-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-check-square" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M400 480H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48h352c26.51 0 48 21.49 48 48v352c0 26.51-21.49 48-48 48zm-204.686-98.059l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.248-16.379-6.249-22.628 0L184 302.745l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.25 16.379 6.25 22.628.001z"></path></svg>
                                        </span>
                                        <span class="pbmit-icon-list-text">Rapid Shipping</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a class="pbmit-btn pbmit-btn-outline mt-5" href="mailto:{{ config('settings.site.email') }}">
                            <span class="pbmit-button-content-wrapper">
                                <span class="pbmit-button-text">Contact Us</span>
                            </span>
                        </a>
                    </div>

                    <div class="col-md-12 col-xl-4">
                        <div class="ship-img-wrapper">
                            <img loading="lazy" src="{{ asset('assets/images/homepage-3/ship.png') }}" alt="Logistics Image" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-md-12 col-xl-3">
                        <div class="fid-style-area">
                            <div class="pbminfotech-ele-fid-style-2">
                                <div class="pbmit-fld-contents">
                                    <div class="pbmit-fld-wrap">
                                        <div class="pbmit-sbox-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-shipex-icon pbmit-shipex-icon-arrow"></i>
                                        </div>

                                        <h4 class="pbmit-fid-inner">
                                            <span class="pbmit-fid-before"></span>
                                            <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="150" data-interval="25" data-before="" data-before-style="" data-after="" data-after-style="">150</span>
                                            <span class="pbmit-fid"><span>k</span></span>
                                        </h4>
                                    </div>

                                    <div class="pbmit-fid-icon-title">
                                        <span class="pbmit-fid-title">Trusted by 150K+ companies for logistics excellence</span>
                                    </div>
                                </div>
                            </div>

                            <div class="pbminfotech-ele-fid-style-2 mt-5 pt-4">
                                <div class="pbmit-fld-contents">
                                    <div class="pbmit-fld-wrap">
                                        <div class="pbmit-sbox-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-shipex-icon pbmit-shipex-icon-arrow"></i>
                                        </div>
                                        <h4 class="pbmit-fid-inner">
                                            <span class="pbmit-fid-before"></span>
                                            <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="245" data-interval="25" data-before="" data-before-style="" data-after="" data-after-style="">245</span>
                                            <span class="pbmit-fid"><span>k</span></span>
                                        </h4>
                                    </div>
                                    <div class="pbmit-fid-icon-title">
                                        <span class="pbmit-fid-title">245K+ projects successfully completed globally</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us End -->

        <!-- Ihbox Start -->
        <section class="section-xl" id="pbmit-services">
            <div class="container">
                <div class="pbmit-heading-subheading text-center">
                    <h4 class="pbmit-subtitle">Our Process</h4>
                    <h2 class="pbmit-title">Streamlining Your Logistics<br> with Ease</h2>
                </div>
                <div class="swiper-slider" data-autoplay="false" data-loop="true" data-dots="false" data-arrows="false" data-columns="4" data-margin="30" data-effect="slide">
                    <div class="swiper-wrapper">
                        <!-- Slide1 -->
                        <article class="pbmit-miconheading-style-1 swiper-slide">
                            <div class="pbmit-ihbox-style-1">
                                <div class="pbmit-ihbox-box">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                            <svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g id="_x30_6_x2C__Delivery_x2C__domestic_ems_x2C__express_x2C__global_x2C__logistics1"><g id="XMLID_129_1"><path id="XMLID_139_1" d="m97.239 406.218c31.077 40.974 78.875 68.6 133.144 72.611-18.323-19.421-33.738-44.255-44.965-72.611z"></path><path id="XMLID_189_1" d="m196.314 406.218c11.981 29.004 28.578 54.262 48.735 73.109.296-.002.59-.008.886-.011 20.152-18.846 36.745-44.099 48.723-73.098z"></path><path id="XMLID_190_1" d="m164.905 300.114h-104.971c.949 35.414 11.948 68.362 30.233 96.104h91.536c-10.541-30.006-16.306-62.928-16.798-96.104z"></path><path id="XMLID_191_1" d="m230.427 111.395c-54.286 3.999-102.1 31.627-133.186 72.611h88.474c11.099-28.048 26.279-52.973 44.712-72.611z"></path><path id="XMLID_192_1" d="m274.606 113.628c-4.076-.588-8.519-1.148-12.911-1.608 4.773 5.147 9.33 10.646 13.644 16.485-.659-5.137-.874-10.029-.733-14.877z"></path><path id="XMLID_193_1" d="m294.806 184.006c-11.874-29.064-28.313-54.311-48.273-73.08-.505-.013-.994-.022-1.475-.027-20.087 18.87-36.643 44.119-48.615 73.108h98.363z"></path><path id="XMLID_194_1" d="m192.565 194.006c-10.833 29.551-17.052 62.452-17.652 96.107h141.146c-.59-33.713-6.725-66.608-17.415-96.107z"></path><path id="XMLID_195_1" d="m192.431 396.218h106.11c10.826-29.55 17.004-62.455 17.526-96.104h-141.161c.521 33.649 6.699 66.555 17.525 96.104z"></path><path id="XMLID_196_1" d="m181.977 194.006h-91.809c-18.286 27.743-29.286 60.692-30.235 96.107h104.981c.581-33.506 6.578-66.339 17.063-96.107z"></path><path id="XMLID_199_1" d="m368.279 32.673c-46.162 0-83.717 37.554-83.717 83.713 0 56.623 50.137 70.383 82.944 131.892 16.825-39.657 65.856-74.841 75.682-94.472 27.532-54.996-12.18-121.133-74.909-121.133zm.002 131.694c-26.996 0-48.958-21.963-48.958-48.959s21.963-48.959 48.958-48.959c26.997 0 48.959 21.963 48.959 48.959s-21.963 48.959-48.959 48.959z"></path><path id="XMLID_200_1" d="m368.281 76.449c-21.482 0-38.958 17.477-38.958 38.959s17.477 38.959 38.958 38.959c21.482 0 38.959-17.477 38.959-38.959s-17.477-38.959-38.959-38.959z"></path><path id="XMLID_201_1" d="m428.207 290.114c-1.122-28.314-11.42-59.494-21.345-80.797-15.114 16.513-29.316 34.951-33.716 53.587-.502 2.126-2.327 3.681-4.507 3.838-2.172.158-4.207-1.116-5.01-3.152-10.688-27.086-37.395-54.794-56.762-76.294.1.274.182.556.233.85 11.659 31.238 18.349 66.185 18.959 101.969h102.148z"></path><path id="XMLID_202_1" d="m309.27 396.218h88.743c18.284-27.743 29.284-60.69 30.233-96.104h-102.179c-.492 33.176-6.256 66.098-16.797 96.104z"></path><path id="XMLID_203_1" d="m260.83 478.571c53.014-4.798 99.614-32.144 130.11-72.352h-85.386c-11.177 28.231-26.507 52.969-44.724 72.352z"></path></g></g></svg>
                                        </div>
                                    </div>
                                    <h2 class="pbmit-element-title">
                                        Inventory Management
                                    </h2>
                                    <div class="pbmit-heading-desc">Efficiently manage stock levels to ensure seamless operations.</div>
                                </div>
                                <div class="pbmit-box-number-wrap">
                                    <div class="pbmit-ihbox-box-number">01</div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide2 -->
                        <article class="pbmit-miconheading-style-1 swiper-slide">
                            <div class="pbmit-ihbox-style-1">
                                <div class="pbmit-ihbox-box">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                            <svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g id="_x32_2_x2C__Factory_x2C__mill_x2C__processing_x2C__site_x2C__treatment1"><g id="XMLID_18_1"><path id="XMLID_20_1" d="m291.592 324.091h23.317v19.161h-23.317z"></path><path id="XMLID_21_1" d="m330.923 384.474h69.077v81.026h-69.077z"></path><path id="XMLID_22_1" d="m291.591 262.042h23.317v19.161h-23.317z"></path><path id="XMLID_306_1" d="m291.593 199.994h23.317v19.161h-23.317z"></path><path id="XMLID_307_1" d="m78.591 324.091h119.554v19.161h-119.554z"></path><path id="XMLID_308_1" d="m173.368 72.167v-25.667h-92.702v25.667z"></path><path id="XMLID_309_1" d="m150.305 82.167h-46.576l-24.948 178.683h96.472z"></path><path id="XMLID_315_1" d="m78.591 388.135h119.554v19.161h-119.554z"></path><path id="XMLID_316_1" d="m351.592 324.091h23.317v19.161h-23.317z"></path><path id="XMLID_319_1" d="m34.208 270.85v194.65h208.923v-194.65c-21.029 0-183.824 0-208.923 0zm173.936 141.446c0 2.762-2.239 5-5 5h-129.553c-2.761 0-5-2.238-5-5v-29.161c0-2.762 2.239-5 5-5h129.554c2.761 0 5 2.238 5 5v29.161zm0-93.205v29.161c0 2.762-2.239 5-5 5h-129.553c-2.761 0-5-2.238-5-5v-29.161c0-2.762 2.239-5 5-5h129.554c2.761 0 4.999 2.238 4.999 5z"></path><path id="XMLID_321_1" d="m351.591 262.042h23.317v19.161h-23.317z"></path><path id="XMLID_324_1" d="m407.679 113.674v35.379c0 3.793-4.074 6.209-7.402 4.385l-72.599-39.764v35.379c0 3.791-4.071 6.211-7.402 4.385l-67.145-36.774v348.836h67.792v-86.026c0-2.762 2.239-5 5-5h79.077c2.761 0 5 2.238 5 5v86.026h67.788c.005-91.481.03-227.134-.103-313.482zm-126.088 143.368c0-2.762 2.239-5 5-5h33.317c2.761 0 5 2.238 5 5v29.161c0 2.762-2.239 5-5 5h-33.317c-2.761 0-5-2.238-5-5zm43.318 91.21c0 2.762-2.239 5-5 5h-33.317c-2.761 0-5-2.238-5-5v-29.161c0-2.762 2.239-5 5-5h33.317c2.761 0 5 2.238 5 5zm.001-124.097c0 2.761-2.239 5-5 5h-33.317c-2.761 0-5-2.239-5-5v-29.161c0-2.761 2.239-5 5-5h33.317c2.761 0 5 2.239 5 5zm16.681 32.887c0-2.762 2.239-5 5-5h33.317c2.761 0 5 2.238 5 5v29.161c0 2.762-2.239 5-5 5h-33.317c-2.761 0-5-2.238-5-5zm43.318 91.21c0 2.762-2.239 5-5 5h-33.317c-2.761 0-5-2.238-5-5v-29.161c0-2.762 2.239-5 5-5h33.317c2.761 0 5 2.238 5 5zm.001-124.097c0 2.761-2.239 5-5 5h-33.317c-2.761 0-5-2.239-5-5v-29.161c0-2.761 2.239-5 5-5h33.317c2.761 0 5 2.239 5 5zm22.095 32.887c0-2.762 2.239-5 5-5h33.317c2.761 0 5 2.238 5 5v29.161c0 2.762-2.239 5-5 5h-33.317c-2.761 0-5-2.238-5-5zm43.319 91.21c0 2.762-2.239 5-5 5h-33.317c-2.761 0-5-2.238-5-5v-29.161c0-2.762 2.239-5 5-5h33.317c2.761 0 5 2.238 5 5zm.001-124.097c0 2.761-2.239 5-5 5h-33.317c-2.761 0-5-2.239-5-5v-29.161c0-2.761 2.239-5 5-5h33.317c2.761 0 5 2.239 5 5z"></path><path id="XMLID_333_1" d="m417.006 324.091h23.317v19.161h-23.317z"></path><path id="XMLID_334_1" d="m417.005 262.042h23.317v19.161h-23.317z"></path><path id="XMLID_335_1" d="m417.007 199.994h23.317v19.161h-23.317z"></path><path id="XMLID_339_1" d="m351.593 199.994h23.317v19.161h-23.317z"></path></g></g></svg>
                                        </div>
                                    </div>
                                    <h2 class="pbmit-element-title">
                                        Warehousing Solutions
                                    </h2>
                                    <div class="pbmit-heading-desc">Optimized storage systems for efficient inventory handling.</div>
                                </div>
                                <div class="pbmit-box-number-wrap">
                                    <div class="pbmit-ihbox-box-number">02</div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide3 -->
                        <article class="pbmit-miconheading-style-1 swiper-slide">
                            <div class="pbmit-ihbox-style-1">
                                <div class="pbmit-ihbox-box">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                            <svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g id="_x32_3_x2C__car_x2C__courier_x2C__gift_x2C__purchase_x2C__shopping"><g id="XMLID_9_"><path id="XMLID_10_" d="m224.015 160.435h95.356v167.333h-95.356z"></path><path id="XMLID_13_" d="m163.652 160.435h50.364v167.333h-50.364z"></path><path id="XMLID_16_" d="m58.296 327.768h95.356v-167.333h-95.356z"></path><path id="XMLID_23_" d="m159.015 94.101h25.968v-25.967c0-14.319-11.649-25.968-25.968-25.968s-25.968 11.649-25.968 25.968 11.65 25.967 25.968 25.967z"></path><path id="XMLID_24_" d="m246.919 68.134c0-14.319-11.649-25.968-25.968-25.968s-25.968 11.649-25.968 25.968v25.968h25.968c14.319-.001 25.968-11.65 25.968-25.968z"></path><path id="XMLID_25_" d="m146.37 427.282c-2.272 0-4.122 1.842-4.122 4.106 0 2.274 1.849 4.125 4.122 4.125 2.267 0 4.11-1.851 4.11-4.125.001-2.264-1.843-4.106-4.11-4.106z"></path><path id="XMLID_26_" d="m341.849 150.435v-46.333c-10.491 0-291.705 0-306.031 0v46.333z"></path><path id="XMLID_291_" d="m363.107 224.067v94.965h113.075v-23.157l-61.272-71.808z"></path><path id="XMLID_296_" d="m378.991 392.962c-21.193 0-38.436 17.242-38.436 38.436s17.242 38.437 38.436 38.437c21.193 0 38.435-17.242 38.435-38.437 0-21.194-17.242-38.436-38.435-38.436zm.005 52.552c-7.787 0-14.122-6.337-14.122-14.106 0-7.778 6.335-14.106 14.122-14.106 7.781 0 14.111 6.328 14.111 14.106 0 7.788-6.33 14.125-14.111 14.125z"></path><path id="XMLID_300_" d="m353.107 324.032v-99.965h-23.735v108.701c0 2.762-2.239 5-5 5-28.802 0-239.159 0-266.076 0v62.23l16.479 16.48h25.516c6.306-19.427 24.571-33.516 46.074-33.516s39.767 14.088 46.073 33.516h140.479c6.306-19.428 24.571-33.517 46.074-33.517 25.019 0 45.667 19.069 48.177 43.436h33.025l15.989-15.116v-82.249h-118.075c-2.762 0-5-2.238-5-5z"></path><path id="XMLID_301_" d="m378.996 427.282c-2.272 0-4.122 1.842-4.122 4.106 0 2.274 1.849 4.125 4.122 4.125 2.267 0 4.111-1.851 4.111-4.125 0-2.264-1.845-4.106-4.111-4.106z"></path><path id="XMLID_304_" d="m146.365 392.963c-21.193 0-38.435 17.241-38.435 38.435s17.242 38.436 38.435 38.436 38.435-17.242 38.435-38.436-17.242-38.435-38.435-38.435zm.005 52.551c-7.787 0-14.122-6.337-14.122-14.125 0-7.778 6.335-14.106 14.122-14.106 7.78 0 14.11 6.328 14.11 14.106.001 7.788-6.329 14.125-14.11 14.125z"></path></g></g></svg>
                                        </div>
                                    </div>
                                    <h2 class="pbmit-element-title">
                                        Secure Delivery
                                    </h2>
                                    <div class="pbmit-heading-desc">Reliable transport ensuring safe delivery to end users.</div>
                                </div>
                                <div class="pbmit-box-number-wrap">
                                    <div class="pbmit-ihbox-box-number">03</div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide4 -->
                        <article class="pbmit-miconheading-style-1 swiper-slide">
                            <div class="pbmit-ihbox-style-1">
                                <div class="pbmit-ihbox-box">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                            <svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g id="_x30_5_x2C__logistics_x2C__shipping_x2C__truck_x2C__delivery_x2C__checked2"><g id="XMLID_175_2"><path id="XMLID_178_" d="m125.132 401.481c-2.272 0-4.122 1.842-4.122 4.106 0 2.274 1.849 4.125 4.122 4.125 2.267 0 4.11-1.851 4.11-4.125 0-2.264-1.844-4.106-4.11-4.106z"></path><path id="XMLID_212_" d="m318.133 67.967h-281.076v234h281.076zm-140.539 211.515c-52.116 0-94.516-42.399-94.516-94.515s42.399-94.516 94.516-94.516 94.516 42.399 94.516 94.516c0 52.116-42.399 94.515-94.516 94.515z"></path><path id="XMLID_228_" d="m125.126 367.162c-21.193 0-38.435 17.241-38.435 38.435s17.242 38.436 38.435 38.436 38.435-17.242 38.435-38.436-17.242-38.435-38.435-38.435zm.006 52.551c-7.787 0-14.122-6.337-14.122-14.125 0-7.778 6.335-14.106 14.122-14.106 7.78 0 14.11 6.328 14.11 14.106 0 7.788-6.33 14.125-14.11 14.125z"></path><path id="XMLID_231_1" d="m377.753 367.161c-21.193 0-38.436 17.242-38.436 38.436s17.242 38.437 38.436 38.437c21.193 0 38.435-17.242 38.435-38.437-.001-21.194-17.242-38.436-38.435-38.436zm.004 52.552c-7.787 0-14.122-6.337-14.122-14.125 0-7.778 6.335-14.106 14.122-14.106 7.781 0 14.111 6.328 14.111 14.106 0 7.788-6.33 14.125-14.111 14.125z"></path><path id="XMLID_236_" d="m377.757 401.481c-2.272 0-4.122 1.842-4.122 4.106 0 2.274 1.849 4.125 4.122 4.125 2.267 0 4.111-1.851 4.111-4.125 0-2.264-1.844-4.106-4.111-4.106z"></path><path id="XMLID_237_2" d="m351.868 298.231v-99.965h-23.735v108.701c0 2.762-2.239 5-5 5h-286.076v62.23l16.479 16.48h25.516c6.306-19.427 24.571-33.516 46.074-33.516s39.767 14.088 46.073 33.516h160.479c6.306-19.428 24.571-33.517 46.074-33.517 25.019 0 45.667 19.069 48.177 43.436h33.025l15.989-15.116v-82.249h-118.075c-2.761 0-5-2.238-5-5z"></path><path id="XMLID_237_3" d="m177.594 100.451c-46.602 0-84.516 37.914-84.516 84.516s37.914 84.515 84.516 84.515 84.516-37.914 84.516-84.515c0-46.602-37.913-84.516-84.516-84.516zm45.218 56.218-56.75 56.75c-1.954 1.953-5.118 1.952-7.071 0l-32.25-32.25c-1.953-1.953-1.953-5.119 0-7.071s5.118-1.952 7.071 0l28.714 28.714 53.214-53.214c1.953-1.952 5.118-1.952 7.071 0 1.954 1.953 1.954 5.119.001 7.071z"></path><path id="XMLID_238_2" d="m361.868 198.266v94.965h113.075v-23.157l-61.272-71.808z"></path></g></g></svg>
                                        </div>
                                    </div>
                                    <h2 class="pbmit-element-title">
                                        Logistics Coordination
                                    </h2>
                                    <div class="pbmit-heading-desc">Seamless transport planning for timely deliveries.</div>
                                </div>
                                <div class="pbmit-box-number-wrap">
                                    <div class="pbmit-ihbox-box-number">04</div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="ihbox-custom-heading-wrapper">
                    <div class="ihbox-custom-heading-area">
                        <div class="pbmit-ihbox-custom-heading text-center">
                            <h2 class="pbmit-title">
                                <span>Our Achievements</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row ihbox-style-10-area">
                    <div class="pbmit-col-20">
                        <div class="pbmit-ihbox-style-10">
                            <div class="pbmit-ihbox-headingicon">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                        <img loading="lazy" src="{{ asset('assets/images/homepage-3/award/award-01.png') }}" alt="Sustainable Transport Award">
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Sustainable Transport Award</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pbmit-col-20">
                        <div class="pbmit-ihbox-style-10">
                            <div class="pbmit-ihbox-headingicon">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                        <img loading="lazy" src="{{ asset('assets/images/homepage-3/award/award-02.png') }}" alt="Top Sustainable Materials Agency">
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Top Sustainable Materials Agency</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pbmit-col-20">
                        <div class="pbmit-ihbox-style-10">
                            <div class="pbmit-ihbox-headingicon">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                        <img loading="lazy" src="{{ asset('assets/images/homepage-3/award/award-03.png') }}" alt="Transport Excellence Committee">
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Transport Excellence Committee</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pbmit-col-20">
                        <div class="pbmit-ihbox-style-10">
                            <div class="pbmit-ihbox-headingicon">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                        <img loading="lazy" src="{{ asset('assets/images/homepage-3/award/award-04.png') }}" alt="Global Logistics Site of the Year 2024">
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Global Logistics Site of the Year 2024</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pbmit-col-20">
                        <div class="pbmit-ihbox-style-10">
                            <div class="pbmit-ihbox-headingicon">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                        <img loading="lazy" src="{{ asset('assets/images/homepage-3/award/award-05.png') }}" alt="Women in Logistics Leadership">
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Women in Logistics Leadership</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ihbox End -->

        <!-- Contact Start -->
        <section class="">
            <div class="container-fluid">
                <div class="row g-0">
                    <div class="col-md-12 col-xl-6">
                        <div class="contact-one-left-bg"></div>
                    </div>
                    <div class="col-md-12 col-xl-6">
                        <div class="pbmit-bg-color-global contact-one-right-bg">
                            <div class="pbmit-heading-subheading">
                                <h4 class="pbmit-subtitle">Track Your Shipment</h4>
                                <h2 class="pbmit-title">Enter your tracking code to monitor your shipment's status.</h2>
                            </div>

                            <form class="contact-form" action="{{ route('tracking') }}" method="get">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control @error('tracking_code') is-invalid @enderror" name="tracking_code" value="{{ old('tracking_code', request('tracking_code')) }}" autocomplete="off" placeholder="Enter tracking number">
                                        @error('tracking_code')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div>
                                        <button class="pbmit-btn pbmit-btn-white submit my-3">
                                            <span class="pbmit-button-content-wrapper">
                                                <span class="pbmit-button-text">Track Shipment</span>
                                            </span>

                                            <span class="form-btn-loader d-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 100">
                                                    <circle fill="#0036FF" stroke="#0036FF" stroke-width="15" r="15" cx="40" cy="50">
                                                        <animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.4"></animate>
                                                    </circle>

                                                    <circle fill="#0036FF" stroke="#0036FF" stroke-width="15" r="15" cx="100" cy="50">
                                                        <animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.2"></animate>
                                                    </circle>

                                                    <circle fill="#0036FF" stroke="#0036FF" stroke-width="15" r="15" cx="160" cy="50">
                                                        <animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="0"></animate>
                                                    </circle>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact End -->

        <!-- Accordion Start -->
        <section class="accordion-three-bg section-xl" id="pbmit-faqs">
            <div class="container">
                <div class="row g-0">
                    <div class="col-md-0 col-xl-3"></div>
                    <div class="col-md-12 col-xl-9">
                        <div class="ms-xl-5 ps-xl-4">
                            <div class="pbmit-heading-subheading">
                                <h4 class="pbmit-subtitle">FAQs</h4>
                                <h2 class="pbmit-title">Mastering the Art of<br> Logistics</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample1">
                    <div class="accordion-item active" id="headingOne1">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                        <span class="pbmit-accordion-title">
                            <span class="pbmit-number">01</span>
                            How can I insure my goods during transport?
                        </span>
                                <span class="pbmit-accordion-icon">
                            <span class="pbmit-accordion-icon-opened">
                                <i class="pbmit-shipex-icon pbmit-shipex-icon-levels"></i>
                            </span>
                            <span class="pbmit-accordion-icon-closed">
                                <i class="pbmit-shipex-icon pbmit-shipex-icon-levels"></i>
                            </span>
                        </span>
                            </button>
                        </h2>
                        <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1"
                             data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <p>We offer comprehensive cargo insurance options to protect your goods during transit. Contact our team to discuss coverage plans tailored to your shipment's value and requirements, ensuring peace of mind from pickup to delivery.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                        <span class="pbmit-accordion-title">
                            <span class="pbmit-number">02</span>
                            What services does your logistics company offer?
                        </span>
                                <span class="pbmit-accordion-icon">
                            <span class="pbmit-accordion-icon-opened">
                                <i class="pbmit-shipex-icon pbmit-shipex-icon-levels"></i>
                            </span>
                            <span class="pbmit-accordion-icon-closed">
                                <i class="pbmit-shipex-icon pbmit-shipex-icon-levels"></i>
                            </span>
                        </span>
                            </button>
                        </h2>
                        <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1"
                             data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <p>Our services include freight forwarding, warehousing, inventory management, secure packaging, global shipping, and last-mile delivery. We provide end-to-end logistics solutions customized to meet your business needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                        <span class="pbmit-accordion-title">
                            <span class="pbmit-number">03</span>
                            Do you provide a safety guarantee for shipments?
                        </span>
                                <span class="pbmit-accordion-icon">
                            <span class="pbmit-accordion-icon-opened">
                                <i class="pbmit-shipex-icon pbmit-shipex-icon-levels"></i>
                            </span>
                            <span class="pbmit-accordion-icon-closed">
                                <i class="pbmit-shipex-icon pbmit-shipex-icon-levels"></i>
                            </span>
                        </span>
                            </button>
                        </h2>
                        <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1"
                             data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <p>Yes, we prioritize safety with rigorous handling protocols, secure packaging, and real-time tracking. While we strive for zero incidents, our insurance options provide additional protection for your goods.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour1" aria-expanded="false" aria-controls="collapseFour1">
                        <span class="pbmit-accordion-title">
                            <span class="pbmit-number">04</span>
                            What are the main types of logistics services?
                        </span>
                                <span class="pbmit-accordion-icon">
                            <span class="pbmit-accordion-icon-opened">
                                <i class="pbmit-shipex-icon pbmit-shipex-icon-levels"></i>
                            </span>
                            <span class="pbmit-accordion-icon-closed">
                                <i class="pbmit-shipex-icon pbmit-shipex-icon-levels"></i>
                            </span>
                        </span>
                            </button>
                        </h2>
                        <div id="collapseFour1" class="accordion-collapse collapse" aria-labelledby="headingFour1"
                             data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <p>Logistics services include transportation (air, sea, land), warehousing, inventory management, freight forwarding, and supply chain management. Each type focuses on optimizing the flow of goods from origin to destination.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Accordion End -->

        <!-- Testimonial Start -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-3 position-relative">
                        <div class="pbmit-heading-subheading">
                            <h4 class="pbmit-subtitle">What Our Clients Say</h4>
                            <h2 class="pbmit-title">Client Feedback</h2>
                        </div>
                        <div class="testimonial-arrow swiper-btn-custom d-inline-flex flex-row-reverse pt-4"></div>
                    </div>
                    <div class="col-md-12 col-lg-9">
                        <div class="swiper-slider testimonial-three-slider" data-arrows-class="testimonial-arrow" data-autoplay="true" data-loop="true" data-dots="false" data-arrows="true" data-columns="2" data-margin="30" data-effect="slide">
                            <div class="swiper-wrapper">
                                <!-- Slide1 -->
                                <article class="pbmit-testimonial-style-2 swiper-slide">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbmit-box-content-wrap">
                                            <div class="pbminfotech-box-desc">
                                                <blockquote class="pbminfotech-testimonial-text">
                                                    <p>“Their logistics services are exceptional. Timely deliveries and secure packaging made our supply chain seamless. Highly recommend their professional team!”</p>
                                                </blockquote>
                                            </div>
                                            <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                            </div>
                                            <div class="pbminfotech-box-author">
                                                <div class="pbmit-auther-content">
                                                    <h3 class="pbminfotech-box-title">Ariana Green</h3>
                                                    <div class="pbminfotech-testimonial-detail">Efficient Service</div>
                                                </div>
                                            </div>
                                            <div class="pbminfotech-box-img">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img loading="lazy" src="{{ asset('assets/images/homepage-3/reviewer/reviewer-01.jpg') }}" class="img-fluid" alt="Ariana Green">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Slide2 -->
                                <article class="pbmit-testimonial-style-2 swiper-slide">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbmit-box-content-wrap">
                                            <div class="pbminfotech-box-desc">
                                                <blockquote class="pbminfotech-testimonial-text">
                                                    <p>“Reliable and cost-effective. Their global shipping solutions helped us expand our market with confidence. Great customer support!”</p>
                                                </blockquote>
                                            </div>
                                            <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1"></i>
                                            </div>
                                            <div class="pbminfotech-box-author">
                                                <div class="pbmit-auther-content">
                                                    <h3 class="pbminfotech-box-title">Hazel Jenkins</h3>
                                                    <div class="pbminfotech-testimonial-detail">Trusted Partner</div>
                                                </div>
                                            </div>
                                            <div class="pbminfotech-box-img">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img loading="lazy" src="{{ asset('assets/images/homepage-3/reviewer/reviewer-02.jpg') }}" class="img-fluid" alt="Hazel Jenkins">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Slide3 -->
                                <article class="pbmit-testimonial-style-2 swiper-slide">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbmit-box-content-wrap">
                                            <div class="pbminfotech-box-desc">
                                                <blockquote class="pbminfotech-testimonial-text">
                                                    <p>“Outstanding service! Their team went above and beyond to ensure our shipments arrived on time, every time. Truly impressed!”</p>
                                                </blockquote>
                                            </div>
                                            <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                            </div>
                                            <div class="pbminfotech-box-author">
                                                <div class="pbmit-auther-content">
                                                    <h3 class="pbminfotech-box-title">William Parsons</h3>
                                                    <div class="pbminfotech-testimonial-detail">Top-Notch Service</div>
                                                </div>
                                            </div>
                                            <div class="pbminfotech-box-img">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img loading="lazy" src="{{ asset('assets/images/homepage-3/reviewer/reviewer-03.jpg') }}" class="img-fluid" alt="William Parsons">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- Slide4 -->
                                <article class="pbmit-testimonial-style-2 swiper-slide">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbmit-box-content-wrap">
                                            <div class="pbminfotech-box-desc">
                                                <blockquote class="pbminfotech-testimonial-text">
                                                    <p>“Their expertise in cargo handling is unmatched. We’ve saved time and costs thanks to their efficient logistics solutions.”</p>
                                                </blockquote>
                                            </div>
                                            <div class="pbminfotech-box-star-ratings">
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1 pbmit-active"></i>
                                                <i class="pbmit-base-icon-star-1"></i>
                                            </div>
                                            <div class="pbminfotech-box-author">
                                                <div class="pbmit-auther-content">
                                                    <h3 class="pbminfotech-box-title">Victoria Porter</h3>
                                                    <div class="pbminfotech-testimonial-detail">Logistics Pro</div>
                                                </div>
                                            </div>
                                            <div class="pbminfotech-box-img">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <img loading="lazy" src="{{ asset('assets/images/homepage-3/reviewer/reviewer-04.jpg') }}" class="img-fluid" alt="Victoria Porter">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial End -->

        <!-- Client Start -->
        <section class="client-section-three">
            <div class="container-fluid p-0">
                <div class="swiper-slider" data-autoplay="false" data-loop="true" data-dots="false" data-arrows="false" data-columns="6" data-margin="30" data-effect="slide">
                    <div class="swiper-wrapper">
                        <!-- Slide1 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client-01</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img loading="lazy" src="{{ asset('assets/images/client/client-global-01.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img loading="lazy" src="{{ asset('assets/images/client/client-dark-01.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Slide2 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client-01</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img loading="lazy" src="{{ asset('assets/images/client/client-global-02.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img loading="lazy" src="{{ asset('assets/images/client/client-dark-02.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Slide3 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client-01</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img loading="lazy" src="{{ asset('assets/images/client/client-global-03.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img loading="lazy" src="{{ asset('assets/images/client/client-dark-03.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide4 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client-01</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img loading="lazy" src="{{ asset('assets/images/client/client-global-04.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img loading="lazy" src="{{ asset('assets/images/client/client-dark-04.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide5 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client-01</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img loading="lazy" src="{{ asset('assets/images/client/client-global-05.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img loading="lazy" src="{{ asset('assets/images/client/client-dark-05.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide6 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client-01</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img loading="lazy" src="{{ asset('assets/images/client/client-global-06.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img loading="lazy" src="{{ asset('assets/images/client/client-dark-06.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide7 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client-01</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img loading="lazy" src="{{ asset('assets/images/client/client-global-07.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img loading="lazy" src="{{ asset('assets/images/client/client-dark-07.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide8 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client-01</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img loading="lazy" src="{{ asset('assets/images/client/client-global-08.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img loading="lazy" src="{{ asset('assets/images/client/client-dark-08.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Client end -->

        <!-- Video Start -->
        <section style="margin-bottom: 100px;">
            <div class="container-fluid px-4">
                <div class="row g-0">
                    <div class="col-md-8 video-one-left-col">
                        <div class="video-one-bg">
                            <img loading="lazy" src="{{ asset('assets/images/homepage-1/bg/video-bg.jpg') }}" class="img-fluid" alt="">
                            <a href="https://www.youtube.com/watch?list=TLGGf0g4v8B4_aowNTAzMjAyNQ&amp;v=L4xeUCqs9I4" class="pbmin-lightbox-video video-play-button">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 video-one-right-col">
                        <div class="video-one-right-box pbmit-bg-color-global">
                            <div class="pbmit-heading">
                                <h2 style="font-size: 18px;">We know that every decision has an impact</h2>
                            </div>
                            <div class="pbmit-ihbox-style-6">
                                <div class="pbmit-ihbox-headingicon">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480.56 480.56" style="enable-background:new 0 0 480.56 480.56;" xml:space="preserve"><g><g><path d="M365.354,317.9c-15.7-15.5-35.3-15.5-50.9,0c-11.9,11.8-23.8,23.6-35.5,35.6c-3.2,3.3-5.9,4-9.8,1.8 c-7.7-4.2-15.9-7.6-23.3-12.2c-34.5-21.7-63.4-49.6-89-81c-12.7-15.6-24-32.3-31.9-51.1c-1.6-3.8-1.3-6.3,1.8-9.4 c11.9-11.5,23.5-23.3,35.2-35.1c16.3-16.4,16.3-35.6-0.1-52.1c-9.3-9.4-18.6-18.6-27.9-28c-9.6-9.6-19.1-19.3-28.8-28.8 c-15.7-15.3-35.3-15.3-50.9,0.1c-12,11.8-23.5,23.9-35.7,35.5c-11.3,10.7-17,23.8-18.2,39.1c-1.9,24.9,4.2,48.4,12.8,71.3 c17.6,47.4,44.4,89.5,76.9,128.1c43.9,52.2,96.3,93.5,157.6,123.3c27.6,13.4,56.2,23.7,87.3,25.4c21.4,1.2,40-4.2,54.9-20.9 c10.2-11.4,21.7-21.8,32.5-32.7c16-16.2,16.1-35.8,0.2-51.8C403.554,355.9,384.454,336.9,365.354,317.9z"></path><path d="M346.254,238.2l36.9-6.3c-5.8-33.9-21.8-64.6-46.1-89c-25.7-25.7-58.2-41.9-94-46.9l-5.2,37.1 c27.7,3.9,52.9,16.4,72.8,36.3C329.454,188.2,341.754,212,346.254,238.2z"></path><path d="M403.954,77.8c-42.6-42.6-96.5-69.5-156-77.8l-5.2,37.1c51.4,7.2,98,30.5,134.8,67.2c34.9,34.9,57.8,79,66.1,127.5 l36.9-6.3C470.854,169.3,444.354,118.3,403.954,77.8z"></path></g></g></svg>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <div class="pbmit-heading-desc">Contact Us</div>
                                        <h2 class="pbmit-element-title" style="font-size: 14px;">{{ config('settings.site.email') }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Video End -->
    </div>
@endsection
