<footer class="footer pb-4">
    <div class="container pb-sm-2 pb-md-3">
        <div class="position-relative py-3 px-4 pe-lg-3 pe-xxl-0">
            <div class="row align-items-center position-relative z-1">
                <div class="col-lg-4 col-xxl-5 order-lg-2 mb-2 mb-lg-0">
                    <div class="nav justify-content-center justify-content-lg-start">
                        <a class="nav-link animate-underline fs-xs px-3" href="#">
                            <span class="animate-target">Privacy</span>
                        </a>
                        <a class="nav-link animate-underline fs-xs px-3" href="#">
                            <span class="animate-target">Affiliates</span>
                        </a>
                        <a class="nav-link animate-underline fs-xs px-3" href="#">
                            <span class="animate-target"> Terms of use</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 d-flex gap-2 gap-sm-3 justify-content-center order-lg-3 mb-2 mb-lg-0">
                    <div>
                        <img src="{{ asset('admin/img/payment-methods/visa-light-mode.svg') }}" class="d-none-dark" alt="Visa">
                        <img src="{{ asset('admin/img/payment-methods/visa-dark-mode.svg') }}" class="d-none d-block-dark" alt="Visa">
                    </div>

                    <div>
                        <img src="{{ asset('admin/img/payment-methods/paypal-light-mode.svg') }}" class="d-none-dark" alt="PayPal">
                        <img src="{{ asset('admin/img/payment-methods/paypal-dark-mode.svg') }}" class="d-none d-block-dark" alt="PayPal">
                    </div>

                    <div>
                        <img src="{{ asset('admin/img/payment-methods/mastercard.svg') }}" alt="Mastercard">
                    </div>

                    <div>
                        <img src="{{ asset('admin/img/payment-methods/google-pay-light-mode.svg') }}" class="d-none-dark" alt="Google Pay">
                        <img src="{{ asset('admin/img/payment-methods/google-pay-dark-mode.svg') }}" class="d-none d-block-dark" alt="Google Pay">
                    </div>

                    <div>
                        <img src="{{ asset('admin/img/payment-methods/apple-pay-light-mode.svg') }}" class="d-none-dark" alt="Apple Pay">
                        <img src="{{ asset('admin/img/payment-methods/apple-pay-dark-mode.svg') }}" class="d-none d-block-dark" alt="Apple Pay">
                    </div>
                </div>

                <div class="col-lg-4 col-xxl-3 order-lg-1">
                    <p class="fs-xs text-center text-lg-start mb-0 order-md-1">
                        © All rights reserved. <span class="animate-underline"><a class="animate-target text-dark-emphasis text-decoration-none">{{ config('app.name') }}</a></span>
                    </p>
                </div>
            </div>

            <div class="position-absolute top-0 start-0 w-100 h-100 d-lg-none">
                <span class="position-absolute top-0 start-0 w-100 h-100 bg-white shadow rounded-5 d-none-dark"></span>
                <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-tertiary rounded-5 d-none d-block-dark"></span>
            </div>

            <div class="position-absolute top-0 start-0 w-100 h-100 d-none d-lg-block">
                <span class="position-absolute top-0 start-0 w-100 h-100 bg-white shadow rounded-pill d-none-dark"></span>
                <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-tertiary rounded-pill d-none d-block-dark"></span>
            </div>
        </div>
    </div>
</footer>
