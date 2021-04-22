@extends("main")
@section("content")

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Название</th>
            <th scope="col">Сайт</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($models as $model)
            <tr>
                <th scope="row">{{$model->id}}</th>
                <td>{{$model->name}}</td>
                <td>{{$model->site}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a class="btn mt-5" href={{route("fabricator.index")}}>Back</a>

@endsection
