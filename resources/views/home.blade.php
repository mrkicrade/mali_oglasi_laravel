@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-4">
           <div class="card">
               <div class="card-header">
                   <h5>Početna strana</h5>
               </div>
               <div class="card-body">
                   Idite na početnu stranu
                   <a href="/">Početna strana</a>
               </div>
               <div class="card-footer">
                   Mali Oglasi
               </div>
           </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h5>Moji oglasi</h5>
                </div>
                <div class="card-body">
                    Idite na Vaše oglase
                    <a href="/mojiOglasi">Moji Oglasi</a>
                </div>
                <div class="card-footer">
                    Mali Oglasi
                </div>
            </div>
         </div>
         <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h5>Novi oglas</h5>
                </div>
                <div class="card-body">
                    Dodajte novi oglas
                    <a href="/noviOglas/{{ $user_id }}">Novi oglas</a>
                </div>
                <div class="card-footer">
                    Mali Oglasi
                </div>
            </div>
         </div>
    </div>
</div>
@endsection
