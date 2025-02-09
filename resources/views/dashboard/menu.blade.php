<header class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item {{ request()->is('dashboard') ? 'active' : ''}}">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block"
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                            </svg>
                        </span>
                        <span class="nav-link-title"> Dashboard </span>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('bandwidth', 'bandwidth/*') ? 'active' : ''}}">
                    <a class="nav-link" href="{{ route('bandwidth') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block"
                        >
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 8h4v4h-4z" />
                            <path d="M6 4l0 4" />
                            <path d="M6 12l0 8" />
                            <path d="M10 14h4v4h-4z" />
                            <path d="M12 4l0 10" />
                            <path d="M12 18l0 2" />
                            <path d="M16 5h4v4h-4z" />
                            <path d="M18 4l0 1" />
                            <path d="M18 9l0 11" />
                        </svg>
                    </span>
                    <span class="nav-link-title"> Bandwidth </span>
                </a>
            </li>
            <li class="nav-item {{ request()->is('setting') ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('setting') }}">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"
                    ><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                        d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z"
                        />
                        <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                    </svg>
                </span>
                <span class="nav-link-title"> Settings </span>
            </a>
        </li>
    </ul>
    <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last"></div>
</div>
</div>
</div>
</header>