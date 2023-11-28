@extends('app')
@section('title', Config('app.name') . ' |' . ' Contact')
@section('content')
    <main>

        <section>
            <div class="page-heading header-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Contact</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                        <div class="contact-info-wrap">
                            <div class="contact-info">
                                <h5 class="mb-3">Contact Infomation</h5>

                                <p class=" text-justify">Appelez-nous ou passez nous voir à tout moment. Nous
                                    nous efforçons de répondre à toutes
                                    les demandes de renseignements dans les 24 heures, les jours ouvrables. Nous serons
                                    heureux de répondre à vos questions.</p>

                                <p class="d-flex mb-2">
                                    <i class="bi-geo-alt me-2"></i>
                                    Abidjan cocody faya immeuble kadidia
                                </p>

                                <p class="d-flex mb-2">
                                    <i class="bi-telephone me-2"></i>

                                    <a href="tel: 07 77 30 47 81">
                                        07 77 30 47 81
                                    </a>
                                </p>

                                <p class="d-flex">
                                    <i class="bi-envelope me-2"></i>

                                    <a href="diawmaniang153@gmail.com">
                                        diawmaniang153@gmail.com
                                    </a>
                                </p>


                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mx-auto">
                        <form class="custom-form contact-form" action="{{ route('mailForm') }}" method="post"
                            role="form">
                            @csrf
                            <h2>Contact form</h2>

                            <p class="mb-4">Ou alors, vous pouvez simplement nous envoyer un e-mail:
                                <a href="#">diawmaniang153@gmail.com</a>
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="name" class="form-control" placeholder="votre nom"
                                        required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="sujet" class="form-control" placeholder="le motif"
                                        required>
                                </div>
                            </div>

                            <input type="email" name="email" pattern="[^ @]*@[^ @]*" class="form-control"
                                placeholder="votre email" required>

                            <textarea name="message" rows="5" class="form-control" id="message"
                                placeholder="En quoi pouvons-nous vous aider ?"></textarea>

                            <button type="submit" class="form-control">Envoyer Message</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>

@endsection
