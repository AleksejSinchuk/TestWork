@extends("main")
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


    <div class="container mt-5">


        <div class="row mt-5">
            <div class="col container">
                <form method="get" action={{route("substance.show",1)}}>
                    @csrf
                    <input type="text" name="id" placeholder="id">
                    <button class="btn btn-success" type="submit">Вывести 1 вещество</button>
                    @csrf
                </form>
            </div>

        </div>



        <div class="row mt-5">
            <div class="col container">

                <form method="post"  action={{route("substance.destroy",1)}} >
                    <input type="text" name="id" placeholder="id">
                    <button class="btn btn-success" type="submit">Удалить вещество</button>
                    @method("DELETE")
                    @csrf
                </form>
            </div>

        </div>


        <div class="row mt-5">
            <div class="col container">
                <form   action={{route("substance.store")}} method="post" >
                    <input type="text" name="name" placeholder="Название">
                    <button class="btn btn-success" type="submit">Добавить вещество</button>
                    @csrf
                </form>
            </div>

        </div>


        <div class="row mt-5">
            <div class="col container">
                <form method="post" action={{route("substance.update",2)}}>
                    <input type="number" name="id" placeholder="id веществы">
                    <input type="text" name="name" placeholder="Название">
                    <button class="btn btn-success" type="submit">Обновить вещество</button>
                    @method("PUT")
                    @csrf
                </form>
            </div>

        </div>
    </div>


@endsection







