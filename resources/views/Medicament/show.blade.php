@extends("main")
@section("content")

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Название</th>
            <th scope="col">ID производителя</th>
            <th scope="col">ID вещества</th>
            <th scope="col">Цена</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($models as $model)
            <tr>
                <th scope="row">{{$model->id}}</th>
                <td>{{$model->name}}</td>
                <td>{{$model->fabricator_id}}</td>
                <td>{{$model->substance_id}}</td>
                <td>{{$model->price}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a class="btn mt-5" href={{route("medicament.index")}}>Back</a>

@endsection
