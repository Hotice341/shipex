<div class="pbmit-search-overlay">
    <div class="pbmit-icon-close">
        <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="28.163" height="28.163" viewBox="0 0 26.163 26.163">
            <rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
            <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
        </svg>
    </div>
    <div class="pbmit-search-outer">
        <form class="pbmit-site-searchform" action="{{ route('tracking') }}" method="get">
            <input type="search" class="form-control field searchform-s" name="tracking_code" value="{{ old('tracking_code', request('tracking_code')) }}" autocomplete="off" autofocus placeholder="Enter tracking number">
            @error('tracking_code')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <button type="submit"></button>
        </form>
    </div>
</div>
