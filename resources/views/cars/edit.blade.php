@extends("layouts.app")
@section('content')
    <div class="container">
        <div class="card-header">
           Redagavimas
            <a href="{{ route("cars.index")}}" class="btn btn-danger float-end">Atgal</a>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route("cars.update", $car->id) }}">
                @csrf
                @method("put")
                <label>Reg. nr.</label>
                <input class="form-control" name="reg_name" type="text" value="{{ $car->reg_number }}">
                <label>Marke</label>
                <input class="form-control" name="brand" type="text" value="{{ $car->brand }}">
                <label>Modelis</label>
                <input class="form-control" name="model" type="text" value="{{ $car->model }}">
                <label>Savininkas</label>
                <select name="owner_id" class="form-select">
                    @foreach($owners as $owner)
                        <option value="{{ $owner->id }}" @if($owner->id==$car->owner_id) selected @endif>{{ $owner->name }} {{ $owner->surname }}</option>
                    @endforeach
                </select>
                <button class="btn btn-success mt-2" type="submit">Atnaujinti</button>
            </form>
        </div>
    </div>
@endsection
