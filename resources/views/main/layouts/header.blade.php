<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container"><a class="navbar-brand" href="#"><img class="img-fluid" src="{{asset('asset_main/assets/img/icons/logo.png')}}" alt="" /></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto ms-lg-4 ms-xl-7 border-bottom border-lg-bottom-0 pt-2 pt-lg-0">
                <li class="nav-item"><a class="nav-link fw-bold active" aria-current="page" href="{{route('receipt')}}">About</a></li>
                <li class="nav-item"><a class="nav-link fw-medium" href="#">Help</a></li>
                <li class="nav-item"><a class="nav-link fw-medium" href="#">Features</a></li>
                <li class="nav-item"><a class="nav-link fw-medium" href="#">Signup</a></li>
                <li class="nav-item"><a class="nav-link fw-medium" href="#">Invoice</a></li>
            </ul>

            @if(auth()->user())
            <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        {{auth()->user()->name}}
                    </button>
                    <div class="dropdown-menu">
                        <form action="{{route('logout')}}" method="post">
                            @csrf

                            <button class="dropdown-item">LogOut</button>
                        </form>

                    </div>
                </div>

            @else
                <form class="d-flex py-3 py-lg-0"><a class="btn btn-light rounded-pill shadow fw-bold" href="{{route('login')}}" role="button">Login
                        <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#9C69E2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg></a></form>

            @endif

        </div>
    </div>
</nav>



