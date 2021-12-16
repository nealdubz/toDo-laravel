<div class="bg-dark">
    <div class="container">
        <div class="row ">
            <nav class="navbar navbar-expand-lg navbar-dark  py-3">
                <a class="navbar-brand ml-5" href="/">Todo App</a>
                <ul class="navbar-nav ml-auto mr-5">
                    @guest
                        <li class="nav-item">
                            <a href="/login"
                                class="nav-link rounded-0 btn {{ request()->is('login') ? 'active' : '' }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register"
                                class="nav-link  rounded-0 btn {{ request()->is('register') ? 'active' : '' }}">Register</a>
                        </li>
                    @else
                        <li class="nav-item d-flex p-2 align-items-center">
                            <p class="text-white font-weight-bold mt-3 px-2">Welcome, <span class="text-warning mr-3">
                                    {{ Auth::user()->name }}</span> </p>
                            <button wire:click="logout" type="button" class="btn btn-primary active ">Logout</button>
                        </li>
                    @endguest
                </ul>
            </nav>
        </div>
    </div>
</div>
