{{-- resources/views/layouts/navigation.blade.php --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
        <div class="navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/members') }}">Členové týmů</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/teams') }}">Týmy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/createTeam') }}">Vytvořit tým</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/createMember') }}">Vytvořit člena</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

