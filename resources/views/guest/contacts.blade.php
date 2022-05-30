@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Contact us:</h1>
                <form action="{{route('guest.contact')}}" method="post">

                </form>
            </div>
        </div>
    </div>
@endsection
