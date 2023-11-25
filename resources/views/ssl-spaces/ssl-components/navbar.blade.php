<nav>
    <input id="nav-toggle" type="checkbox">
    <div class="logo">
        <a href="{{route('index')}}">
            <img src="{{asset('images/SSL logo-01.png')}}" class="logo-nav" alt="">
        </a>
    </div>
    <ul class="links">
        <li>
            <a href="{{route('features')}}" class="links-nav" active>
                Features
            </a>
        </li>
        <li class="dropdown">
            <a href="{{route('lern&grow')}}" class="links-nav">
                Learn & Grow
            </a>
        </li>
        <li>
            <a href="{{route('gallery')}}" class="links-nav">
                Gallery
            </a>
        </li>
        <li>
            <a href="{{route('blog')}}" class="links-nav">
                Blog
            </a>
        </li>
        <li>
            <a href="{{route('pricing')}}" class="links-nav">
                Pricing
            </a>
        </li>
        <li>
            <a href="{{route('partners')}}" class="links-nav">
                Partners
            </a>
        </li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
</nav>