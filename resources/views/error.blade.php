@extends('master')

@section('content')
    <section class="content-section">
        <div class="container">
            <img src="https://cdn0.iconfinder.com/data/icons/pet-shop-related-flat/64/pet_shop-24-256.png" class="img-fluid mb-4" />
            <h1>
                Fehler {{ $status }}<br/>
                <small style="color: #C0C0C0;">{{ $error }}</small>
            </h1>
            <p class="mb-2">
                Irgendwas stimmt hier nicht! 🤔<br/>
                Bitte vergewissere dich, dass der Link korrekt ist. Du kannst es ansonsten in wenigen Minuten noch einmal versuchen.<br/>
                Wenn das alles nichts hilft dann schreib uns doch einfach oder besuche uns direkt im Laden. 😉
            </p>
            <p>
                PS: Weil wir für den Tierschutz sind haben wir natürlich keine Affen die jederzeit Probleme lösen.<br/>
                Aber wir versuchen trotzdem unser Bestes das Problem schnell zu lösen! ⛑
            </p>
            <div style="font-size: 2.5rem; white-space: nowrap;">
                🙈 🙉 🙊
            </div>
            <a href="{{ url() }}" class="btn btn-dark mt-3">zur Startseite</a>
        </div>
    </section>
@endsection