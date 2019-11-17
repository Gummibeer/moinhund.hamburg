@extends('master')

@section('title', sprintf('Fehler 404 | %s', config('app.name')))

@section('content')
    <section class="content-section">
        <div class="container">
            <img src="{{ asset(mix('images/icon/256/doghouse.png')) }}" class="img-fluid mb-4" />
            <h1>
                Nicht gefunden<br/>
                <small style="color: #C0C0C0; font-size: 0.75em;">nichtmal der Hund ist da</small>
            </h1>
            <p class="mb-2">
                Bitte vergewissere dich, dass der Link korrekt ist.<br/>
                Du kannst es ansonsten in wenigen Minuten noch einmal versuchen.<br/>
                Wenn das alles nichts hilft dann schreib uns doch einfach oder besuche uns direkt im Laden.
            </p>
            <a href="{{ url('/') }}" class="btn btn-dark mt-3">zur Startseite</a>
        </div>
    </section>
@endsection
