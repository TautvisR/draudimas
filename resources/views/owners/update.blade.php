@extends("layouts.app")
@section('content')
    <div class="container">
        <div class="card-header">
           Redagavimas
            <a href="{{ route("owners.list")}}" class="btn btn-danger float-end">Atgal</a>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route("owners.save", $owner->id) }}">
                @csrf
                <label>Vardas</label>
                <input class="form-control" name="name" type="text" value="{{ $owner->name }}">
                <label>Pavarde</label>
                <input class="form-control" name="surname" type="text" value="{{ $owner->surname }}">
                <button class="btn btn-success mt-2" type="submit">Atnaujinti</button>
            </form>
        </div>
    </div>
@endsection
