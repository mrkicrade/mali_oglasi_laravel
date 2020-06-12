@section('title')
    Oglas "{{ $singleAdd->name }}"
@endsection

@extends('master')


@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2 text-center">
                <h1>Oglas "{{ $singleAdd->name }}"</h1>
            </div>
            <div class="col-10 offset-1">
                <div class="row">
                    <div class="card text-center">
                        <div class="card-header">
                            <h4>{{ $singleAdd->name }}</h4>
                        </div>
                        <div class="card-body">
                            <h3>{{ $singleAdd->text }}</h3>
                        </div>
                        <div class="card-footer">
                            <a href="/user/{{ $user->id }}" class="btn btn-sm btn-primary float-left">{{ $user->name }}</a>
                            <a href="#" class="btn btn-sm btn-success float-right">{{ $user->email }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection