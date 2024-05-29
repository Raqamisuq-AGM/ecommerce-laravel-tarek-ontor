<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <!-- ! Hide app brand if navbar-full -->
    <div class="app-brand demo">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <span>LOGO</span>
                {{-- <img src="{{ asset('assets/img/logo/' . $company[0]->logo) }}" alt="" style="width: 150px"> --}}
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        {{-- Dashboard Route --}}
        <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate">Dashboard</div>
            </a>
        </li>

        {{-- Brand Route --}}
        <li
            class="menu-item {{ request()->routeIs('admin.brand.all', 'admin.brand.create', 'admin.brand.edit') ? 'active' : '' }}">
            <a href="{{ route('admin.brand.all') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-component'></i>
                <div class="text-truncate">Brands</div>
            </a>
        </li>

        {{-- Category Route --}}
        <li
            class="menu-item {{ request()->routeIs('admin.category.all', 'admin.category.create', 'admin.category.edit') ? 'active' : '' }}">
            <a href="{{ route('admin.category.all') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-category'></i>
                <div class="text-truncate">Categories</div>
            </a>
        </li>

        {{-- Sub Category Route --}}
        <li
            class="menu-item {{ request()->routeIs('admin.sub-category.all', 'admin.sub-category.create', 'admin.sub-category.edit') ? 'active open' : '' }}">
            <a href="{{ route('admin.sub-category.all') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-category-alt'></i>
                <div class="text-truncate">Sub-Categories</div>
            </a>
        </li>

        {{-- Coupon Route --}}
        <li
            class="menu-item {{ request()->routeIs('admin.coupon.all', 'admin.coupon.create', 'admin.coupon.edit') ? 'active open' : '' }}">
            <a href="{{ route('admin.coupon.all') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-discount'></i>
                <div class="text-truncate">Coupon</div>
            </a>
        </li>

        {{-- User Route --}}
        <li
            class="menu-item {{ request()->routeIs('admin.user.all', 'admin.user.create', 'admin.user.edit') ? 'active open' : '' }}">
            <a href="{{ route('admin.user.all') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-user'></i>
                <div class="text-truncate">Users</div>
            </a>
        </li>

        {{-- Product Route --}}
        <li
            class="menu-item {{ request()->routeIs('admin.product.all', 'admin.product.create', 'admin.product.edit') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-package'></i>
                <div class="text-truncate">Products</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('admin.product.create') ? 'active' : '' }}">
                    <a href="{{ route('admin.product.create') }}" class="menu-link">
                        <div>Create</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('admin.product.all') ? 'active' : '' }}">
                    <a href="{{ route('admin.product.all') }}" class="menu-link">
                        <div>All</div>
                    </a>
                </li>
            </ul>
        </li>

        {{-- Order Route --}}
        <li
            class="menu-item {{ request()->routeIs('admin.order.all', 'admin.order.create', 'admin.order.edit') ? 'active' : '' }}">
            <a href="{{route('admin.order.all')}}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-cart'></i>
                <div class="text-truncate">Orders</div>
            </a>
        </li>

        {{-- System Route --}}
        <li
            class="menu-item {{ request()->routeIs('admin.change.password', 'admin.change.email', 'admin.change.logo', 'admin.change.system') ? 'active open' : '' }}">
            <a href="{{route('admin.order.all')}}" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-cog'></i>
                <div class="text-truncate">System</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('admin.change.email') ? 'active' : '' }}">
                    <a href="{{ route('admin.change.email') }}" class="menu-link">
                        <div>Change Email</div>
                    </a>
                </li>

                <li class="menu-item {{ request()->routeIs('admin.change.password') ? 'active' : '' }}">
                    <a href="{{ route('admin.change.password') }}" class="menu-link">
                        <div>Change Password</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('admin.change.logo') ? 'active' : '' }}">
                    <a href="{{ route('admin.change.logo') }}" class="menu-link">
                        <div>Logo & Fav</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('admin.change.system') ? 'active' : '' }}">
                    <a href="{{ route('admin.change.system') }}" class="menu-link">
                        <div>System Details</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->routeIs('logout') ? 'active' : '' }}">
            <a href="{{ route('logout') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-power-off'></i>
                <div class="text-truncate">Logout</div>
            </a>
        </li>
    </ul>
</aside>