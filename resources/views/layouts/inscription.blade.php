@extends('app')
@section('title', Config('app.name') . ' |' . ' inscription')

@section('content')
    <main>
        <section>
            <div class="page-heading header-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>inscription aux evenement</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-section section-padding">
            <div class="container">
                <div class="form-container">
                    <h2>inscription</h2>
                    <form method="POST" action="{{ route('register.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">nom</label>
                            <input id="name" type="text" name="nom" placeholder="entrez votre nom" value="{{ old('nom') }}">
                            @error('nom')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">prenom</label>
                            <input id="name" type="text" name="prenom" placeholder="entrez votre prenom" value="{{ old('prenom') }}">
                            @error('prenom')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Adresse e-mail</label>
                            <input id="email" type="text" name="email" placeholder="entrez votre adresse email" value="{{ old('email') }}">
                            @error('email')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="age">âge</label>
                            <input id="age" type="text" name="age" placeholder="entrez votre age" value="{{ old('age') }}">
                            @error('age')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">contact</label>
                            <input id="name" type="text" name="contact" placeholder="entrez votre numero de contact" value="{{ old('contact') }}">
                            @error('contact')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="formation">formation</label>
                            <select name="formation" id="formation">
                                <option value="formation1">formation1</option>
                                <option value="formation2">formation2</option>
                                <option value="formation3">formation3</option>
                                <option value="formation4">formation4</option>
                                <option value="formation5">formation5</option>
                                <option value="formation6">formation6</option>
                            </select>
                            @error('formation')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="form-group">
                            <input type="submit" class="" value="S'inscrire">
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </main>
@endsection
