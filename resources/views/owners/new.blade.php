@extends("layouts.app")
@section('content')
    <div class="container">
        <div class="card-header">
           Naujo savininko kurimas
            <a href="{{ route("owners.list")}}" class="btn btn-danger float-end">Atgal</a>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route("owners.setnew") }}">
                @csrf
                <label>Vardas</label>
                <input class="form-control" name="name" type="text">
                <label>Pavarde</label>
                <input class="form-control" name="surname" type="text">
                <button class="btn btn-success mt-2" type="submit">Sukurti</button>
            </form>
        </div>
    </div>
@endsection
