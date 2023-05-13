@php
    $categories = [
        ['type' => 'divider', 'name' => 'Main'],
        ['type' => 'route', 'name' => 'Dashboard', 'route' => 'dashboard', 'icon' => 'fa-light fa-house'],

        ['type' => 'divider', 'name' => 'Ecommerce'],
        ['type' => 'route', 'name' => 'POS Terminal', 'route' => 'order.terminal', 'icon' => 'fa-light fa-cash-register'],
        ['type' => 'route', 'name' => 'Orders', 'route' => ['order.index', 'order.edit', 'order.create', 'order.show'], 'icon' => 'fa-light fa-envelope-open-dollar', 'child' => [
            ['type' => 'route', 'name' => 'All', 'route' => 'order.index'],
        ]],
        ['type' => 'route', 'name' => 'Products', 'route' => ['product.index', 'product.edit', 'product.create', 'product.show'], 'icon' => 'fa-light fa-boxes-stacked', 'child' => [
            ['type' => 'route', 'name' => 'All', 'route' => 'product.index'],
            ['type' => 'route', 'name' => 'Create', 'route' => 'product.create'],
        ]],
        ['type' => 'route', 'name' => 'Categories', 'route' => ['category.index', 'category.edit', 'category.create', 'category.show'], 'icon' => 'fa-light fa-rectangle-history', 'child' => [
            ['type' => 'route', 'name' => 'All', 'route' => 'category.index'],
            ['type' => 'route', 'name' => 'Create', 'route' => 'category.create'],
        ]],
        ['type' => 'route', 'name' => 'Brands', 'route' => ['brand.index', 'brand.edit', 'brand.create', 'brand.show'], 'icon' => 'fa-light fa-copyright', 'child' => [
            ['type' => 'route', 'name' => 'All', 'route' => 'brand.index'],
            ['type' => 'route', 'name' => 'Create', 'route' => 'brand.create'],
        ]],
        ['type' => 'route', 'name' => 'Customer', 'route' => ['customer.index', 'customer.edit', 'customer.create', 'customer.show'], 'icon' => 'fa-light fa-copyright', 'child' => [
            ['type' => 'route', 'name' => 'All', 'route' => 'customer.index'],
            ['type' => 'route', 'name' => 'Create', 'route' => 'customer.create'],
        ]],
        ['type' => 'route', 'name' => 'Suppliers', 'route' => ['supplier.index', 'supplier.edit', 'supplier.create', 'supplier.show'], 'icon' => 'fa-light fa-truck-field-un', 'child' => [
            ['type' => 'route', 'name' => 'All', 'route' => 'supplier.index'],
            ['type' => 'route', 'name' => 'Create', 'route' => 'supplier.create'],
        ]],

        ['type' => 'divider', 'name' => 'Members'],
        ['type' => 'route', 'name' => 'Customers', 'route' => 'user.index', 'icon' => 'fa-light fa-users-line', 'child' => [
            ['type' => 'route', 'name' => 'All', 'route' => 'user.index'],
            ['type' => 'route', 'name' => 'Create', 'route' => 'user.index'],
        ]],
        ['type' => 'route', 'name' => 'Users', 'route' => 'user.index', 'icon' => 'fa-light fa-user-pilot-tie', 'child' => [
            ['type' => 'route', 'name' => 'All', 'route' => 'user.index'],
            ['type' => 'route', 'name' => 'Create', 'route' => 'user.index'],
        ]],
        ['type' => 'route', 'name' => 'Roles', 'route' => 'role.index', 'icon' => 'fa-light fa-person-military-rifle'],

        //['type' => 'divider', 'name' => 'Others'],
        //['type' => 'route', 'name' => 'Support', 'route' => 'dashboard', 'icon' => 'fas fa-life-ring'],
        //['type' => 'route', 'name' => 'Plans', 'route' => 'dashboard', 'icon' => 'fas fa-gem'],
    ];
@endphp

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">

        <a href="{{ route('home') }}" class="app-brand-link">
            <image class="app-brand-logo" style="height: 30px;" src="{{ asset('images/logo/logo.png') }}" alt="{{ env('APP_NAME') }}"></image>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>

    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        @foreach ($categories as $category)
            @if ($category['type'] == 'route')
                @if(!empty($category['child']))
                <li class="menu-item {{ is_route_active($category['route'], "active open") }}">
                    <a href="javascript:void(0);" class="menu-link @if(!empty($category['child'])) menu-toggle @endif ">
                        <i class="menu-icon {{ $category['icon'] }}"></i>
                        <div>{{ __($category['name']) }}</div>
                    </a>
                    <ul class="menu-sub">
                        @foreach($category['child'] as $child)
                        <li class="menu-item {{ is_route_active($child['route'], "active") }}">
                            <a href="{{ route($child['route']) }}" class="menu-link">
                                <div>{{ __($child['name']) }}</div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                @else
                    <li class="menu-item {{ is_route_active($category['route'], "active") }}">
                        <a href="{{ route($category['route']) }}" class="menu-link">
                            <i class="menu-icon {{ $category['icon'] }}"></i>
                            <div>{{ __($category['name']) }}</div>
                        </a>
                    </li>
                @endif
            @elseif ($category['type'] == 'divider')
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">{{ __($category['name']) }}</span>
                </li>
            @endif
        @endforeach
        <!-- Dashboards -->



    </ul>
</aside>
