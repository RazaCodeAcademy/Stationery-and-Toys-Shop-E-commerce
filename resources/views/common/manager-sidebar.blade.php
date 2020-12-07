<!-- navbar start -->
<div class="l-navbar" id="navbar">
    <div class="nav__brand" id="nav_expand">
        <i class="fa fa-bars nav__toggle" aria-hidden="true" id="nav-toggle"></i>
        <a href="" class="nav__logo">{{ Auth::user()->name }}</a>
    </div>
    <nav class="myNav">
        <div>
            <div class="nav__list">
                <a href="{{ route('manager.dashboard.index') }}" class="nav__link active_item" title="Dashboard">
                    <i class="fa fa-home nav__icon" aria-hidden="true"></i>
                    <span class="nav__name">Dashboard</span>
                </a>
                <a href="{{ route('categories.index') }}" class="nav__link">
                    <i class="fa fa-list-alt nav__icon" aria-hidden="true" title="Categories"></i>
                    <span class="nav__name">Categories</span>
                </a>
                <a href="{{ route('products.index') }}" class="nav__link">
                    <i class="fa fa-shopping-bag nav__icon" aria-hidden="true" title="Products"></i>
                    <span class="nav__name">Products</span>
                </a>
                <a href="{{ route('sales.index') }}" class="nav__link">
                    <i class="fa fa-tags nav__icon" aria-hidden="true" title="Sales"></i>
                    <span class="nav__name">Sales</span>
                </a>
                <a href="{{ route('messanger.index') }}" class="nav__link">
                    <i class="fa fa-envelope nav__icon" aria-hidden="true" title="Inbox"></i>
                    <span class="nav__name">Inbox</span>
                </a>
                <a href="{{ route('orders.index') }}" class="nav__link">
                    <i class="fas fa-chart-pie nav__icon" aria-hidden="true" title="Orders"></i>
                    <span class="nav__name">Orders</span>
                </a>
                <a href="{{ route('employees.index') }}" class="nav__link">
                    <i class="fa fa-users nav__icon" aria-hidden="true" title="Employees"></i>
                    <span class="nav__name">Employees</span>
                </a>
                <a class="nav__link mb-5" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off nav__icon" aria-hidden="true" title="Log Out"></i>
                    <span class="nav__name">Log Out</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </nav>
</div>
<!-- navbar end -->
