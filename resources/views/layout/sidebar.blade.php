<nav class="col-md-2 d-none d-md-block sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('brands.index') }}">
                    <i class="fas fa-tags"></i> Brands
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cars.index') }}">
                    <i class="fas fa-car"></i> Cars
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('customers.index') }}">
                    <i class="fas fa-users"></i> Customers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('orders.index') }}">
                    <i class="fas fa-shopping-cart"></i> Orders
                </a>
            </li>
        </ul>
    </div>
</nav>
