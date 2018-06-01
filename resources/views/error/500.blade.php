@extends('master')

@section('content')
    <section class="content-section">
        <div class="container">
            <img src="{{ url('img/icon/256/syringe.png') }}" class="img-fluid mb-4" />
            <h1>
                Server Fehler<br/>
                <small style="color: #C0C0C0; font-size: 0.75em;">wir sind schon beim Arzt</small>
            </h1>
            <p class="mb-2">
                Irgendwas stimmt hier nicht!<br/>
                Du kannst es ansonsten in wenigen Minuten noch einmal versuchen.<br/>
                Wenn das nichts hilft dann schreib uns doch einfach oder besuche uns direkt im Laden.
            </p>
            <a href="{{ url() }}" class="btn btn-dark mt-3">zur Startseite</a>
        </div>
    </section>
@endsection