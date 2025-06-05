<footer class="site-footer pbmit-bg-color-secondary">
    <div class="pbmit-footer-big-area-wrapper">
        <div class="pbmit-footer-big-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-xl-6 pbmit-footer-left">
                        <h3>Subscribe for latest <br> updates & insights</h3>
                    </div>

                    <div class="col-md-12 col-xl-6">
                        <form>
                            <div class="pbmit-footer-newsletter">
                                <div class="pbmit-news-wrap">
                                    <input type="email" class="form-control" name="EMAIL" placeholder="Enter Your Email Address">
                                    <button class="pbmit-btn">
                                        <span class="pbmit-button-content-wrapper">
                                            <span class="pbmit-button-text">Subscribe Now</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="pbmit-footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="pbmit-footer-widget-col-1 col-md-4">
                        <aside class="widget">
                            <div class="pbmit-footer-logo">
                                <img src="{{ asset('assets/images/footer-logo.svg') }}" class="img-fluid" alt="">
                            </div>
                            <br>

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
                        </aside>
                    </div>

                    <div class="pbmit-footer-widget-col-2 col-md-4">
                        <aside class="widget">
                            <h2 class="widget-title">Say Hello</h2>
                            <div class="pbmit-contact-widget-lines">
                                <div class="pbmit-contact-widget-line pbmit-base-icon-phone">{{ config('settings.site.phone') }}</div>
                                <div class="pbmit-contact-widget-line pbmit-base-icon-email">
                                    {{ config('settings.site.email') }}
                                </div>
                            </div>
                        </aside>
                    </div>

                    <div class="pbmit-footer-widget-col-3 col-md-2">
                        <aside class="widget">
                            <h2 class="widget-title">Useful Link</h2>
                            <ul class="menu">
                                <li><a href="/">Home</a></li>
                                <li><a href="/about-us">About Us</a></li>
                                <li><a href="/faq">Help & Faqs</a></li>
                                <li><a href="mailto:{{ config('settings.site.email') }}">Contact Us</a></li>
                                <li><a href="/tracking">Track & Trace</a></li>
                            </ul>
                        </aside>
                    </div>

                    <div class="pbmit-footer-widget-col-4 col-md-2">
                        <aside class="widget widget_text">
                            <h2 class="widget-title">Our Services</h2>
                            <ul class="menu">
                                <li><a href="blog-classic.html">Logistics</a></li>
                                <li><a href="blog-classic.html">Manufacturing</a></li>
                                <li><a href="blog-classic.html">Production</a></li>
                                <li><a href="blog-classic.html">Transportation</a></li>
                                <li><a href="blog-classic.html">Warehouse</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>

        <div class="pbmit-footer-text-area">
            <div class="container">
                <div class="pbmit-footer-text-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pbmit-footer-copyright-text-area">
                                Copyright © {{ date('Y') }} <a href="#">{{ config('app.name') }}</a>, All Rights Reserved.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
