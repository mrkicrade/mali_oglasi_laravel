@section('title')
    Moji Oglas
@endsection

@extends('master')


@section('main')
<div class="container-fluid">
    <div class="row">
        <div class="col-8 offset-2 text-center">
            <h1>Moji Oglas!!!</h1>
        </div>
        <div class="row">
            <div class="col-10 offset-1">
                <div class="row">
                    @foreach ($singleAdds as $singleAdd)
                        <div class="card text-center">
                            <div class="card-header">
                                <h4>{{ $singleAdd->name }}</h4>
                            </div>
                            <div class="card-body">
                                <h3>{{ $singleAdd->text }}</h3>
                            </div>
                            <div class="card-footer">
                                <a href="/add/{{ $singleAdd->id }}/edit" class="btn btn-sm btn-primary float-left">Update</a>
                                <a href="/add/{{ $singleAdd->id }}/delete" class="btn btn-sm btn-success float-right">Delete</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection