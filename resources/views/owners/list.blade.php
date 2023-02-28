@extends("layouts.app")
@section('content')
    <div class="container">
        <div class="card-header">
            <strong>Savininkai</strong>
            <a href="{{ route("owners.new") }}" class="btn btn-info float-end mb-2">Prideti savininka</a>
        </div>
        <div class="card-body">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>Vardas</th>
                        <th>Pavarde</th>
                        <th>Auto</th>
                        <th>Veiksmai</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($owners as $owner)
                        <tr>
                            <td>{{ $owner->name }}</td>
                            <td>{{ $owner->surname }}</td>
                            <td>
                                @foreach($owner->cars as $car)
                                    {{ $car->reg_number }}<br> {{ $car->brand }} {{ $car->model }} <br>
                                @endforeach
                            </td>
                            <td><a href="{{ route("owners.update", $owner->id) }}" class="btn btn-outline-warning">Redaguoti</a>
                                @if($owner->cars->count()==0)
                                <a href="{{ route('owners.delete', $owner->id) }}" class="btn btn-outline-danger">Istrinti</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
