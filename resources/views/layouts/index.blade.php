@extends('app')
@section('title', Config('app.name') . ' |' . ' Accueil')
@section('content')
    <main>

        <section class="hero-section hero-section-full-height">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-12 p-0">
                        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active">

                                    <img src="{{ asset('assets/images/slide/slide1.jpg') }}" class="carousel-image img-fluid"
                                        alt="...">
                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <div class="text">
                                            <h1>transformation numeriques</h1>
                                            <p>enjeux, stratégie de mise en œuvre et facteurs clés de succès</p>
                                            <p><a href="{{ route('about') }}" class="button">voir plus</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset('assets/images/slide/slide2.jpg') }}"
                                        class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <div class="text">
                                            <h1>management de l'inovation</h1>
                                            <p><a href="" class="button">services</a></p>
                                        </div>

                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="{{ asset('assets/images/slide/slide3.jpg') }}"
                                        class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <div class="text">
                                            <h1>entrepreneuriat et creation d'entreprise numerique</h1>
                                            <p>Connaissances, concepts et outils</p>
                                            <p><a href="" class="button">services</a></p>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            {{--                           <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button> --}}
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="about-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-5 col-12 grand">
                        <img src="{{ asset('assets/images/dg.jpg') }}"
                            class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="image mr Diaw">
                        <div class="icon-dg">
                            <ul class="social-icon mt-4">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-linkedin"></a>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-6 col-md-7 col-12">
                        <div class="custom-text-block">
                            <h2 class="mb-0">directeur general</h2>

                            {{-- <p class="text-muted mb-lg-4 mb-md-4">Co-Founding Partner</p> --}}

                            <p>Dans une économie qui repose de plus en plus sur le traitement automatique de l’information
                                et la gestion des relations d’affaires via les Technologies de l’Information et de la
                                Communication (TIC), l’E-Business et les Technologies du futur, les Directeurs de Ressources
                                Humaines (DRH) et les cabinets de recrutement cherchent des cadres supérieurs, ayant de
                                solides connaissances en management et une forte culture technologique. </p>

                            <p>Sans être des experts, les diplômés de l’enseignement supérieur des filières économie et
                                gestion, logistique et transport, banque et assurance…doivent associer une forte culture
                                numérique aux principes fondamentaux du management en terme de vision, de stratégie
                                d’entreprise, de management de l’innovation et du changement, pour aider les entreprises à
                                être plus compétitives pour faire face à la concurrence.</p>

                            <p>Telles sont les raisons entre autres, pour lesquelles, Digital Vision Plus à élaborer une
                                offre de services pour permettre aux cadres et jeunes diplômés de disposer des compétences
                                du futur afin augmenter leur chance de trouver rapidement un emploi.</p>


                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>nos services</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="service-item">
                            <img src="{{ asset('assets/images/services/service1.jpg') }}" alt="images services 1">
                            <div class="down-content">
                                <h4>compétences pour gérer une entreprise à l’ère du digital </h4>
                                <p>de la stratégie à la mise en œuvre
                                </p>
                                <a href="{{ route('services1') }}" class="custom-btn btn mt-3">savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="service-item">
                            <img src="{{ asset('assets/images/services/service2.jpg') }}" alt="images services 2">
                            <div class="down-content">
                                <h4>E-commerce et Marketing </h4>
                                <p>de la stratégie à la mise en œuvre opérationnelle
                                </p>
                                <a href="{{ route('services2') }}" class="custom-btn btn mt-3">savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="service-item">
                            <img src="{{ asset('assets/images/services/service3.jpg') }}" alt="images services 3">
                            <div class="down-content">
                                <h4>Entrepreneuriat et création d’entreprises numériques</h4>
                                <p>Connaissances, concepts et outils
                                </p>
                                <a href="{{ route('services3') }}" class="custom-btn btn mt-3">savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="service-item">
                            <img src="{{ asset('assets/images/services/service1.jpg') }}" alt="images services 1">
                            <div class="down-content">
                                <h4>Management de l’innovation et diversification des services</h4>
                                <p>
                                </p>
                                <a href="{{ route('services1') }}" class="custom-btn btn mt-3">savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="service-item">
                            <img src="{{ asset('assets/images/services/service2.jpg') }}" alt="images services 2">
                            <div class="down-content">
                                <h4>Mobile paiement et Fin Tech </h4>
                                <p>de la stratégie à la mise en œuvre opérationnelle
                                </p>
                                <a href="{{ route('services2') }}" class="custom-btn btn mt-3">savoir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="service-item">
                            <img src="{{ asset('assets/images/services/service3.jpg') }}" alt="images services 3">
                            <div class="down-content">
                                <h4>La transformation numérique des entreprises </h4>
                                <p>enjeux, stratégie de mise en œuvre et facteurs clés de succès
                                </p>
                                <a href="{{ route('services3') }}" class="custom-btn btn mt-3">savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
