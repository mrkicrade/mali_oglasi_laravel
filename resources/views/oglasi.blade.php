@section('title')
    Mali Oglasi
@endsection

@extends('master')


@section('main')
    <div class="container-fluid">
        {{-- @include('navbar') --}}
        <div class="row">
            <div class="col-8 offset-2 text-center">
                <h1>Dobro došli na berzu oglasa muzičke opreme!!!</h1>
                <div class="row">
                    <div class="col-10 offset-1">
                        <div class="intro">
                            <p>
                                Ovde možete kupiti ili prodati Vašu muzičku opremu. Dovoljno je da postavite Vaš oglas ili da pogledate postojeće oglase i izaberete muzičku opremu u skladu sa Vašim potrebama!!!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-10 offset-1">
                    <div class="row">
                        @foreach ($adds as $add)
                            <div class="col-4">
                                <a href="/single/{{ $add->id }}/{{ $add->user_id}}">
                                    <div class="card text-center">
                                        <div class="card-header">
                                            <h4>{{ substr($add->name, 0, 20) }}</h4>
                                        </div>
                                        <div class="card-body">
                                            <h3>{{ substr($add->text, 0, 30).'...' }}</h3>
                                        </div>
                                        <div class="card-footer">
                                            <a href="/user/{{ $add->user->id }}" class="btn btn-sm btn-primary float-left">{{ $add->user->name }}</a>
                                            <a href="/{{ $add->category }}/{{ $add->user_id }}" class="btn btn-sm btn-success float-right">{{ $add->category }}</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection