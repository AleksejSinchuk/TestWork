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


    <div class="container mt-5">


        <div class="row mt-5">
            <div class="col container">
                <form method="get" action={{route("fabricator.show",1)}}>
                    @csrf
                    <input type="text" name="id" placeholder="id">
                    <button class="btn btn-success" type="submit">Вывести 1 производителя</button>
                    @csrf
                </form>
            </div>

        </div>



        <div class="row mt-5">
            <div class="col container">

                <form method="post"  action={{route("fabricator.destroy",1)}} >
                    <input type="text" name="id" placeholder="id">
                    <button class="btn btn-success" type="submit">Удалить производителя</button>
                    @method("DELETE")
                    @csrf
                </form>
            </div>

        </div>


        <div class="row mt-5">
            <div class="col container">
                <form   action={{route("fabricator.store")}} method="post" >
                    <input type="text" name="name" placeholder="Название">
                    <input type="text" name="site" placeholder="Сайт">
                    <button class="btn btn-success" type="submit">Добавить производителя</button>
                    @csrf
                </form>
            </div>

        </div>


        <div class="row mt-5">
            <div class="col container">
                <form method="post" action={{route("fabricator.update",2)}}>
                    <input type="number" name="id" placeholder="id Производителя">
                    <input type="text" name="name" placeholder="Название">
                    <input type="text" name="site" placeholder="Сайт">
                    <button class="btn btn-success" type="submit">Обновить производителя</button>
                    @method("PUT")
                    @csrf
                </form>
            </div>

        </div>
    </div>


@endsection






