@if ($message = Session::get('create'))
    <div class="alert alert-primary text-center" role="alert">
        {{$message}}
    </div>
@endif

@if ($message = Session::get('delete'))
    <div class="alert alert-warning text-center" role="alert">
        {{$message}}
    </div>
@endif

@if ($message = Session::get('update'))
    <div class="alert alert-info text-center text-center" role="alert">
        {{$message}}
    </div>
@endif