@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1>Contact us:</h1>
                <form action="{{route('guest.contact')}}" method="post">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="guestName">Inserisci il tuoi nome:</label>
                        <input class="form-control" type="text" value="" name="guestName" id="guestName">
                    </div>

                    <div class="mb-3">
                        <label for="guestMail">Inserisci la tua mail:</label>
                        <input class="form-control" type="email" value="" name="guestMail" id="guestMail">
                    </div>

                    <div class="mb-3">
                        <label for="guestMessage">Inserisci il corpo del messaggio:</label>
                        <textarea class="form-control" type="text" value="" name="guestMessage" id="guestMessage" rows="7"></textarea>
                    </div>

                    <button class="btn btn-primary" type="submit">Invia un messaggio</button>
                </form>
            </div>
        </div>
    </div>
@endsection
