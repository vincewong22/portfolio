<nav class="navbar navbar-toggleable navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsingNavbarXs">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand logo_shadow" href="/" >Vincent Wong</a>
    <div class="navbar-collapse collapse" id="collapsingNavbarXs">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link"  href="{{ route('home') }}">Home</a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('blog') }}">Blog [Notes]</a>--}}
            {{--</li>--}}
        </ul>

    </div>
</nav>