@extends("main")
@section("content")
    <div class="conteiner">
        <div class="row mt-5">
            <a class="btn btn-primary" href={{route("medicament.index")}}>Лекарство</a>
        </div>
        <div class="row mt-5">
            <a class="btn btn-primary" href={{route("substance.index")}}>Вещество</a>
        </div>
        <div  class="row mt-5">
            <a class="btn btn-primary" href={{route("fabricator.index")}}>Производитель</a>
        </div>

    </div>
@endsection
