<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home*')? 'active' : 
                '' }}" aria-current="page" href="/home">
                    <span data-feather="home"></span>
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('product*')? 'active' : 
                '' }}" href="/product">
                    <span data-feather="shopping-cart"></span>
                    Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('news*')? 'active' : 
                '' }}" href="/news/topic">
                    <span data-feather="file"></span>
                    News
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('program*')? 'active' : 
                '' }}" href="/program">
                    <span data-feather="bar-chart-2"></span>
                    Programs
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('about*')? 'active' : 
                '' }}" href="/about">
                    <span data-feather="layers"></span>
                    About us
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('contact*')? 'active' : 
                '' }}" href="/contact">
                    <span data-feather="file-text"></span>
                    Contact
                </a>
            </li>
        </ul>
    </div>
</nav>