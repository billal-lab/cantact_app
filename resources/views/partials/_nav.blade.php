<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
    <div class="px-5">
        <a class="navbar-brand" href="{{route('admin_index')}}">LaraCantact</a>
    </div>
    <div class="px-5" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin_index')}}">{{Auth::user()->login}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('login_logout')}}">Logout</a>
            </li>
        </ul>
    </div>
    </nav>
</div>