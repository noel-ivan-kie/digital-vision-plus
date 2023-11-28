<header class="site-header">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 d-flex flex-wrap">
                <p class="d-flex me-4 mb-0">
                    <i class="bi-telephone me-2"> (+225) 07 77 30 47 81</i>

                </p>

                <p class="d-flex mb-0">
                    <i class="bi-envelope me-2"><a href="mailto:diawmaniang153@gmail.com">
                            diawmaniang153@gmail.com
                        </a></i>


                </p>
            </div>

            <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                <ul class="social-icon">
                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-twitter"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="{{ route('facebook') }}" class="social-icon-link bi-facebook"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="{{ route('instagram') }}" class="social-icon-link bi-instagram"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="{{ route('youtube') }}" class="social-icon-link bi-youtube"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-whatsapp"></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg bg-light shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            {{--  <img src="{{ asset('assets/images/') }}" class="logo img-fluid" alt=""> --}}
            <span>
                digital vision plus
                <small>cote d'ivoire senegal</small>
            </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    @if (Route::is('home'))
                        <a style="color: #2E84A6;" class="nav-link click-scroll" href="{{ route('home') }}">acceuil</a>
                    @else
                        <a class="nav-link click-scroll" href="{{ route('home') }}">acceuil</a>
                    @endif

                </li>

                <li class="nav-item">
                    @if (Route::is('about'))
                        <a style="color: #2E84A6;" class="nav-link click-scroll" href="{{ route('about') }}">a
                            propos</a>
                    @else
                        <a class="nav-link click-scroll" href="{{ route('about') }}">a propos</a>
                    @endif
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link click-scroll dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Services</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('services1') }}">compétences pour gérer une
                                entreprise à l’ère du digital</a></li>
                        <li><a class="dropdown-item" href="{{ route('services2') }}">E-commerce et Marketing</a></li>
                        <li><a class="dropdown-item" href="{{ route('services3') }}">Entrepreneuriat et création
                                d’entreprises numériques</a></li>
                        <li><a class="dropdown-item" href="{{ route('services4') }}">Management de l’innovation et
                                diversification des services</a></li>
                        <li><a class="dropdown-item" href="{{ route('services5') }}">Mobile paiement et Fin Tech </a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('services6') }}">La transformation numérique des
                                entreprises </a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    @if (Route::is('evenement'))
                        <a style="color: #2E84A6;" class="nav-link click-scroll" href="{{ route('evenement') }}">
                            evenement</a>
                    @else
                        <a class="nav-link click-scroll" href="{{ route('evenement') }}">evenement</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if (Route::is('contact'))
                        <a style="color: #2E84A6;" class="nav-link click-scroll"
                            href="{{ route('contact') }}">contact</a>
                    @else
                        <a class="nav-link click-scroll" href="{{ route('contact') }}">contact</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
