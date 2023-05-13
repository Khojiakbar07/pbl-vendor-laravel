@php
    $categories = [
        ['type' => 'divider', 'name' => 'Main'],
        ['type' => 'route', 'name' => 'Dashboard', 'route' => 'dashboard', 'icon' => 'ti ti-smart-home'],

        ['type' => 'divider', 'name' => 'Ecommerce'],
        //['type' => 'route', 'name' => 'POS Terminal', 'route' => 'order.terminal', 'icon' => 'ti ti-basket'],
        ['type' => 'route', 'name' => 'Orders', 'route' => 'order.index', 'icon' => 'ti ti-report-money'],
        ['type' => 'route', 'name' => 'Products', 'route' => 'product.index', 'icon' => 'ti ti-layout-kanban'],
        ['type' => 'route', 'name' => 'Categories', 'route' => 'category.index', 'icon' => 'ti ti-category'],
        ['type' => 'route', 'name' => 'Brands', 'route' => 'brand.index', 'icon' => 'ti ti-brand-apple'],
        ['type' => 'route', 'name' => 'Suppliers', 'route' => 'supplier.index', 'icon' => 'ti ti-truck-return'],

        ['type' => 'divider', 'name' => 'Members'],
        ['type' => 'route', 'name' => 'Users', 'route' => 'user.index', 'icon' => 'ti ti-users', 'child' => [
            ['type' => 'route', 'name' => 'All', 'route' => 'user.index'],
            ['type' => 'route', 'name' => 'Create', 'route' => 'user.index'],
        ]],
        ['type' => 'route', 'name' => 'Staffs', 'route' => 'staff.index', 'icon' => 'ti ti-user-star'],
        ['type' => 'route', 'name' => 'Roles', 'route' => 'role.index', 'icon' => 'ti ti-user-shield'],

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
                <li class="menu-item {{ is_route_active($category['route'], "active open") }}">
                    <a href="{{ route($category['route']) }}" class="menu-link @if(!empty($category['child'])) menu-toggle @endif ">
                        <i class="menu-icon tf-icons {{ $category['icon'] }}"></i>
                        <div>{{ __($category['name']) }}</div>
                    </a>
                    @if(!empty($category['child']))
                        <ul class="menu-sub">
                            @foreach($category['child'] as $child)
                            <li class="menu-item">
                                <a href="{{ route($child['route']) }}" class="menu-link">
                                    <div>{{ __($child['name']) }}</div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @elseif ($category['type'] == 'divider')
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">{{ __($category['name']) }}</span>
                </li>
            @endif
        @endforeach
        <!-- Dashboards -->



    </ul>
</aside>
