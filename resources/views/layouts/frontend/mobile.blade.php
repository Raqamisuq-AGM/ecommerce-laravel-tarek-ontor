<div class="sticky-footer sticky-content fix-bottom">
    <a href="{{route('home')}}" class="sticky-link">
        <i class="d-icon-home"></i>
        <span>Home</span>
    </a>
    {{-- <a href="shop.html" class="sticky-link">
        <i class="d-icon-volume"></i>
        <span>Categories</span>
    </a> --}}
    <a href="{{route('wishlist.all')}}" class="sticky-link">
        <i class="d-icon-heart"></i>
        <span>Wishlist</span>
    </a>
    <a href="account.html" class="sticky-link">
        <i class="d-icon-user"></i>
        <span>Account</span>
    </a>
    <div class="header-search hs-toggle dir-up">
        <a href="#" class="search-toggle sticky-link">
            <i class="d-icon-search"></i>
            <span>Search</span>
        </a>
        <form action="#" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off"
                placeholder="Search your keyword..." required />
            <button class="btn btn-search" type="submit" title="submit-button">
                <i class="d-icon-search"></i>
            </button>
        </form>
    </div>
</div>

<a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>

<div class="mobile-menu-wrapper">
    <div class="mobile-menu-overlay">
    </div>

    <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>

    <div class="mobile-menu-container scrollable">
        <form action="#" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off"
                placeholder="Search your keyword..." required />
            <button class="btn btn-search" type="submit" title="submit-button">
                <i class="d-icon-search"></i>
            </button>
        </form>

        <ul class="mobile-menu mmenu-anim">
            <li>
                <a href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a href="{{route('product.all')}}">Products</a>
            </li>
            <li>
                <a href="{{route('about-us')}}">About Us</a>
            </li>
            <li>
                <a href="{{route('contact-us')}}">Contact Us</a>
            </li>
        </ul>



    </div>
</div>

{{-- <div class="sticky-icons-wrapper">
    <div class="sticky-icon-links">
        <ul>
            <li><a href="#" class="demo-toggle"><i class="fas fa-home"></i><span>Demos</span></a></li>
            <li><a href="documentation.html"><i class="fas fa-info-circle"></i><span>Documentation</span></a>
            </li>
            <li><a href="https://themeforest.net/downloads/"><i class="fas fa-star"></i><span>Reviews</span></a>
            </li>
            <li><a href="https://d-themes.com/buynow/riodehtml"><i class="fas fa-shopping-cart"></i><span>Buy
                        now!</span></a></li>
        </ul>
    </div>
    <div class="demos-list">
        <div class="demos-overlay"></div>
        <a class="demos-close" href="#"><i class="close-icon"></i></a>
        <div class="demos-content scrollable scrollable-light">
            <h3 class="demos-title">Demos</h3>
            <div class="demos">
            </div>
        </div>
    </div>
</div> --}}