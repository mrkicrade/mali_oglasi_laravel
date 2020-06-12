@section('title')
    Novi Oglas
@endsection

@extends('master')


@section('main')
    <h3 class="text-center naslov">Postavite novi oglas</h3>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <form action="/noviOglas" method="post">
                    @csrf
                    <input type="text" name="category" placeholder="Unesite kategoriju: Klavijature, Gitare, Ozvučenje..." class="form-control"><br>
                    <input type="text" name="name" placeholder="Naslov oglasa" class="form-control"><br>
                    {{-- <input type="text" name="user_id" placeholder="user id" class="form-control"><br> --}}
                    <input type="hidden" name="user_id" placeholder="user id" class="form-control" value="{{ $id }}"><br>
                    <textarea name="text" id="tekst" cols="30" rows="10" placeholder="Tekst oglasa" class="form-control"></textarea><br><br>
                    <button class="btn btn-primary form-control">Dodaj oglas</button>
                </form>
                @if ($errors->has('text'))
                    Greska
                @endif
            </div>
        </div>
    </div>

@endsection