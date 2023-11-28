@extends('app')
@section('title', Config('app.name') . ' |' . ' Evenement')

@section('content')
    <main>
        <section>
            <div class="page-heading header-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Evenement</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-section section-padding">
            <div class="best-features ">
                <div class="container">
                    <div class="in">
                        <p> participer a toutes de formation et evenement a venir en vous inscrivant  <a href="{{ route('register') }}">inscription</a></p>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="right-image ">
                                <img src="{{ asset('assets/images/env/env1.jpg') }}" alt="" height="300px">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="left-content">
                                <h4>compétences pour gérer une
                                    entreprise à l’ère du digital</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum
                                    consectetur similique?
                                    Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem
                                    perferendis dicta
                                    dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit.</p>
                                <p>Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia
                                    corporis ipsa
                                    voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti
                                    necessitatibus
                                    perspiciatis quis.</p>
                                <p>inscriver vous a nos formation et evenement a venir <a
                                        href="{{ route('register') }}">inscription</a></p>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="right-image ">
                                <img src="{{ asset('assets/images/env/env2.jpg') }}" alt="" height="300px">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="left-content">
                                <h4>compétences pour gérer une
                                    entreprise à l’ère du digital</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum
                                    consectetur similique?
                                    Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem
                                    perferendis dicta
                                    dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit.</p>
                                <p>Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia
                                    corporis ipsa
                                    voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti
                                    necessitatibus
                                    perspiciatis quis.</p>
                                <p>inscriver vous a nos formation et evenement a venir <a
                                        href="{{ route('register') }}">inscription</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


    </main>

@endsection
