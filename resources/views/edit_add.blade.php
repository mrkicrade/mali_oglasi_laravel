@section('title')
    Ispravka Oglasa
@endsection

@extends('master')


@section('main')
    <h3 class="text-center naslov">Ispravite Vaš oglas</h3>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <form action="/add/{{ $add->id }}/edit" method="post">
                    @csrf
                    @method('put')
                    <input type="text" name="category" class="form-control" value="{{ $add->category }}"><br>
                    <input type="text" name="name" class="form-control" value="{{ $add->name }}"><br>
                    <input type="hidden" name="user_id" class="form-control" value="{{ $add->user_id }}"><br>
                    <input type="text" name="text" class="form-control" value="{{ $add->text }}"><br>
                    <button class="btn btn-primary form-control">Izmeni oglas</button>
                </form>
                @if ($errors->any())
                    Greska
                @endif
            </div>
        </div>
    </div>

@endsection