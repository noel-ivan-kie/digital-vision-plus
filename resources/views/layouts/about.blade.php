@extends('app')
@section('title', Config('app.name') . ' |' . ' A Propos')

@section('content')
    <main>
        <section>
            <div class="page-heading header-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>A Propos de nous</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="presentation">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <img class="pre-images" src="{{ asset('assets/images/presentation.jpg') }}" alt="presentation-image"
                            width="100%">
                    </div>
                    <div class="col-md-8">
                        <h3>Histoire</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque labore aliquam deserunt molestiae
                            unde similique eveniet? Illum quia, praesentium ad exercitationem veniam recusandae facere
                            laudantium dolorem provident quo repellat distinctio.</p>
                    </div>
                    <div class="col-md-8">
                        <h3>vision du cabinet</h3>
                        mettre des element en rapport 
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
@endsection
