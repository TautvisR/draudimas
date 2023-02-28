@extends("layouts.app")
@section('content')
    <div class="container">
        <div class="card-header">
           Naujo automobilio pridejimas
            <a href="{{ route("cars.index")}}" class="btn btn-danger float-end">Atgal</a>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route("cars.store") }}">
                @csrf
                <label>Reg. nr.</label>
                <input class="form-control" name="reg_number" type="text">
                <label>Marke</label>
                <input class="form-control" name="brand" type="text">
                <label>Modelis</label>
                <input class="form-control" name="model" type="text">
                <label>Savininkas</label>
                <select name="owner_id" class="form-select">
                    @foreach($owners as $owner)
                        <option value="{{ $owner->id }}">{{ $owner->name }} {{ $owner->surname }}</option>
                    @endforeach
                </select>
                <button class="btn btn-success mt-2" type="submit">Prideti</button>
            </form>
        </div>
    </div>
@endsection
