<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <p class="welcome-msg">Welcome to Poster Art store message or remove it!</p>
            </div>
            <div class="header-right">

                <span class="divider"></span>
                <a href="#signin" class="login-toggle link-to-tab d-md-show"><i class="d-icon-user"></i>Sign
                    in</a>
                <span class="delimiter">/</span>
                <a href="#register" class="register-toggle link-to-tab d-md-show ml-0">Register</a>
                <div class="dropdown login-dropdown off-canvas">
                    <div class="canvas-overlay"></div>

                    <div class="dropdown-box scrollable">
                        <div class="login-popup">
                            <div class="form-box">
                                <div class="tab tab-nav-simple tab-nav-boxed form-tab">
                                    <ul class="nav nav-tabs nav-fill align-items-center border-no justify-content-center mb-5"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active border-no lh-1 ls-normal" href="#signin">Login</a>
                                        </li>
                                        <li class="delimiter">or</li>
                                        <li class="nav-item">
                                            <a class="nav-link border-no lh-1 ls-normal" href="#register">Register</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="signin">
                                            <form action="#">
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" id="singin-email"
                                                        name="singin-email" placeholder="Username or Email Address *"
                                                        required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="singin-password"
                                                        name="singin-password" placeholder="Password *" required="">
                                                </div>
                                                <div class="form-footer">
                                                    <div class="form-checkbox">
                                                        <input type="checkbox" class="custom-checkbox"
                                                            id="signin-remember" name="signin-remember">
                                                        <label class="form-control-label" for="signin-remember">Remember
                                                            me</label>
                                                    </div>
                                                    <a href="#" class="lost-link">Lost your password?</a>
                                                </div>
                                                <button class="btn btn-dark btn-block btn-rounded"
                                                    type="submit">Login</button>
                                            </form>
                                            <div class="form-choice text-center">
                                                <label class="ls-m">or Login With</label>
                                                <div class="social-links">
                                                    <a href="#" title="social-link"
                                                        class="social-link social-google fab fa-google border-no"></a>
                                                    <a href="#" title="social-link"
                                                        class="social-link social-facebook fab fa-facebook-f border-no"></a>
                                                    <a href="#" title="social-link"
                                                        class="social-link social-twitter fab fa-twitter border-no"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="register">
                                            <form action="#">
                                                <div class="form-group mb-3">
                                                    <input type="email" class="form-control" id="register-email"
                                                        name="register-email" placeholder="Your Email Address *"
                                                        required="">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="register-password"
                                                        name="register-password" placeholder="Password *" required="">
                                                </div>
                                                <div class="form-footer">
                                                    <div class="form-checkbox">
                                                        <input type="checkbox" class="custom-checkbox"
                                                            id="register-agree" name="register-agree" required="">
                                                        <label class="form-control-label" for="register-agree">I
                                                            agree to the
                                                            privacy policy</label>
                                                    </div>
                                                </div>
                                                <button class="btn btn-dark btn-block btn-rounded"
                                                    type="submit">Register</button>
                                            </form>
                                            <div class="form-choice text-center">
                                                <label class="ls-m">or Register With</label>
                                                <div class="social-links">
                                                    <a href="#" title="social-link"
                                                        class="social-link social-google fab fa-google border-no"></a>
                                                    <a href="#" title="social-link"
                                                        class="social-link social-facebook fab fa-facebook-f border-no"></a>
                                                    <a href="#" title="social-link"
                                                        class="social-link social-twitter fab fa-twitter border-no"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button title="Close (Esc)" type="button" class="mfp-close"><span>×</span></button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="header-middle sticky-header fix-top sticky-content">
        <div class="container">
            <div class="header-left">
                <a href="#" class="mobile-menu-toggle">
                    <i class="d-icon-bars2"></i>
                </a>
                <a href="{{route('home')}}" class="logo">
                    <img src="{{asset('frontend/images/logo.png')}}" alt="logo" width="153" height="44" />
                </a>

                <div class="header-search hs-simple">
                    <form action="#" class="input-wrapper">
                        <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search..."
                            required />
                        <button class="btn btn-search" type="submit" title="submit-button">
                            <i class="d-icon-search"></i>
                        </button>
                    </form>
                </div>

            </div>
            <div class="header-right">
                <a href="tel:#" class="icon-box icon-box-side">
                    <div class="icon-box-icon mr-0 mr-lg-2">
                        <i class="d-icon-phone"></i>
                    </div>
                    <div class="icon-box-content d-lg-show">
                        <h4 class="icon-box-title">Call Us Now:</h4>
                        <p>0(800) 123-456</p>
                    </div>
                </a>
                <span class="divider"></span>
                <div class="dropdown wishlist wishlist-dropdown off-canvas">
                    <a href="#" class="wishlist-toggle">
                        <i class="d-icon-heart"></i>
                    </a>
                    <div class="canvas-overlay"></div>

                    <div class="dropdown-box scrollable">
                        <div class="canvas-header">
                            <h4 class="canvas-title">wishlist</h4>
                            <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i
                                    class="d-icon-arrow-right"></i><span class="sr-only">wishlist</span></a>
                        </div>
                        <div class="products scrollable">
                            <div class="product product-wishlist">
                                <figure class="product-media">
                                    <a href="{{route('product.details',['slug'=> '1'])}}">
                                        <img src="{{asset('frontend/images/wishlist/product-1.jpg')}}" width="100"
                                            height="100" alt="product" />
                                    </a>
                                    <button class="btn btn-link btn-close">
                                        <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                    </button>
                                </figure>
                                <div class="product-detail">
                                    <a href="{{route('product.details',['slug'=> '1'])}}" class="product-name">Girl's
                                        Dark Bag</a>
                                    <div class="price-box">
                                        <span class="product-price">$84.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('wishlist.all')}}" class="btn btn-dark wishlist-btn mt-4"><span>Go To
                                Wishlist</span></a>

                    </div>

                </div>
                <span class="divider"></span>
                <div class="dropdown cart-dropdown type2 off-canvas mr-0 mr-lg-2">
                    <a href="#" class="cart-toggle label-block link">
                        <div class="cart-label d-lg-show">
                            <span class="cart-name">Shopping Cart:</span>
                            <span class="cart-price">$0.00</span>
                        </div>
                        <i class="d-icon-bag"><span class="cart-count">2</span></i>
                    </a>
                    <div class="canvas-overlay"></div>

                    <div class="dropdown-box">
                        <div class="canvas-header">
                            <h4 class="canvas-title">Shopping Cart</h4>
                            <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i
                                    class="d-icon-arrow-right"></i><span class="sr-only">Cart</span></a>
                        </div>
                        <div class="products scrollable">
                            <div class="product product-cart">
                                <figure class="product-media">
                                    <a href="{{route('product.details',['slug'=> '1'])}}">
                                        <img src="{{asset('frontend/images/cart/product-1.jpg')}}" alt="product"
                                            width="80" height="88" />
                                    </a>
                                    <button class="btn btn-link btn-close">
                                        <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                    </button>
                                </figure>
                                <div class="product-detail">
                                    <a href="{{route('product.details',['slug'=> '1'])}}" class="product-name">Poster
                                        Art White Trends</a>
                                    <div class="price-box">
                                        <span class="product-quantity">1</span>
                                        <span class="product-price">$21.00</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="cart-total">
                            <label>Subtotal:</label>
                            <span class="price">$139.00</span>
                        </div>

                        <div class="cart-action">
                            <a href="{{route('cart.all')}}" class="btn btn-dark btn-link">View Cart</a>
                            <a href="{{route('checkout')}}" class="btn btn-dark"><span>Go To Checkout</span></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom d-lg-show">
        <div class="container">
            <div class="header-left">
                <nav class="main-nav">
                    <ul class="menu">
                        <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li class="{{ request()->routeIs('product.all') ? 'active' : '' }}">
                            <a href="{{route('product.all')}}">Products</a>
                        </li>
                        <li class="{{ request()->routeIs('about-us') ? 'active' : '' }}">
                            <a href="{{route('about-us')}}">About Us</a>
                        </li>
                        <li class="{{ request()->routeIs('contact-us') ? 'active' : '' }}">
                            <a href="{{route('contact-us')}}">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>