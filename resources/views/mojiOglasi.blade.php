@section('title')
    Moji Oglasi
@endsection

@extends('master')


@section('main')
<div class="container-fluid">
    <div class="row">
        <div class="col-8 offset-2 text-center">
            <h1>Moji Oglasi!!!</h1>
        </div>
        <div class="row">
            <div class="col-10 offset-1">
                <div class="row">
                    @foreach ($allAdds as $allAdd)
                        <div class="col-6">
                            <a href="/add/{{ $allAdd->id }}">
                                <div class="card text-center">
                                    <div class="card-header">
                                        <h4>{{ substr($allAdd->name, 0, 20).'...' }}</h4>
                                    </div>
                                    <div class="card-body">
                                        <h3>{{ substr($allAdd->text, 0, 30).'...' }}</h3>
                                    </div>
                                    <div class="card-footer">
                                        <a href="/add/{{ $allAdd->id }}/edit" class="btn btn-sm btn-primary float-left">Update</a>
                                        <a href="/add/{{ $allAdd->id }}/delete" class="btn btn-sm btn-success float-right">Delete</a>
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