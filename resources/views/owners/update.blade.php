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
        @if($owner->cars->count()!==0)
        <div class="card-header mt-3">
            <strong>Turimi auto</strong>
        </div>
        <div class="card-body col-4">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th>Registracijos numeris</th>
                    <th>Marke</th>
                    <th>Modelis</th>
                    <th>Veiksmai</th>
                </tr>
                </thead>
                <tbody>
                @foreach($owner->cars as $car)
                <tr>
                    <td>{{ $car->reg_number }}</td>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td><a href="{{ route("cars.edit", $car->id) }}" class="btn btn-outline-warning">Redaguoti</a>
                        <form method="post" action="{{ route("cars.destroy", $car->id)}}">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-outline-danger mt-2">Istrinti</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
