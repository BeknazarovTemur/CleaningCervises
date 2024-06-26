<nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
    <a href="{{ route('main') }}" class="navbar-brand d-block d-lg-none">
        <h1 class="m-0 display-4 text-primary">Clean</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav mr-auto py-0">
            <a href="{{ route('main') }}" class="nav-item nav-link active">Home</a>
            <a href="{{route('about')}}" class="nav-item nav-link">About</a>
            <a href="{{ route('service') }}" class="nav-item nav-link">Service</a>
            <a href="{{ route('project') }}" class="nav-item nav-link">Project</a>
            <a href="{{ route('posts.index') }}" class="nav-item nav-link">Blog</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
        </div>
        @auth()
            <div>
                {{ auth()->user()->name }}
            </div>
            <a href="{{ route('posts.create') }}" class="btn btn-primary mr-3 d-none d-lg-block">Create Posts</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-dark mr-3 d-none d-lg-block">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="btn btn-primary mr-3 d-none d-lg-block">Login</a>
        @endauth
    </div>
</nav>
