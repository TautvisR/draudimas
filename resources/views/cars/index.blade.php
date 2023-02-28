@extends("layouts.app")
@section('content')
    <div class="container">
        <div class="card-header">
            <strong>Automobiliai</strong>
            <a href="{{ route("cars.create") }}" class="btn btn-info float-end mb-2">Prideti auto</a>
        </div>
        <div class="card-body">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>Registracijos numeris</th>
                        <th>Marke</th>
                        <th>Modelis</th>
                        <th>Savininkas</th>
                        <th>Veiksmai</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cars as $car)
                        <tr>
                            <td>{{ $car->reg_number }}</td>
                            <td>{{ $car->brand }}</td>
                            <td>{{ $car->model }}</td>
                            <td>{{ $car->owners->name }} {{ $car->owners->surname }}</td>
                            <td><a href="{{ route("cars.edit", $car->id) }}" class="btn btn-outline-warning">Redaguoti</a>
                                <form method="post" action="{{ route("cars.destroy", $car->id)}}">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-outline-danger mt-2">Istrinti</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
