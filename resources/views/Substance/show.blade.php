<@extends("main")
@section("content")

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Название</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($models as $model)
            <tr>
                <th scope="row">{{$model->id}}</th>
                <td>{{$model->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a class="btn mt-5" href={{route("substance.index")}}>Back</a>

@endsection

