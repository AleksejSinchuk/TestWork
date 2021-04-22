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


        <div class="container mt-5">


            <div class="row mt-5">
                <div class="col container">
                    <form method="get" action={{route("medicament.show",1)}}>
                        @csrf
                        <input type="text" name="id" placeholder="id">
                        <button class="btn btn-success" type="submit">Вывести 1 медикамент</button>
                        @csrf
                    </form>
                </div>

            </div>



            <div class="row mt-5">
                <div class="col container">

                    <form method="post"  action={{route("medicament.destroy",1)}} >
                        <input type="text" name="id" placeholder="id">
                        <button class="btn btn-success" type="submit">Удалить медикамент</button>
                        @method("DELETE")
                        @csrf
                    </form>
                </div>

            </div>


            <div class="row mt-5">
                <div class="col container">
                    <form   action={{route("medicament.store")}} method="post" >
                        <input type="text" name="name" placeholder="Название">
                        <input type="text" name="fabricator_id" placeholder="id производителя">
                        <input type="text" name="substance_id" placeholder="id препарата">
                        <input type="text" name="price" placeholder="Цена">
                        <button class="btn btn-success" type="submit">Добавить медикамент</button>
                        @csrf
                    </form>
                </div>

            </div>


            <div class="row mt-5">
                <div class="col container">
                    <form method="post" action={{route("medicament.update",2)}}>
                        <input type="number" name="id" placeholder="id Медикамента">
                        <input type="text" name="name" placeholder="Название">
                        <input type="number" name="fabricator_id" placeholder="id производителя">
                        <input type="number" name="substance_id" placeholder="id препарата">
                        <input type="text" name="price" placeholder="Цена">
                        <button class="btn btn-success" type="submit">Обновить медикамент</button>
                        @method("PUT")
                        @csrf
                    </form>
                </div>

            </div>
        </div>


@endsection






