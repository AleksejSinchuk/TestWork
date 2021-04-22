<?php

namespace App\Http\Controllers;

use App\Models\Medicament;
use Illuminate\Http\Request;

class MedicamentController extends FirstController
{

    public function __construct(Medicament $model,Request $request)
    {

        $this->request=$request;
        $this->model=$model;
        $this->view="Medicament";
    }

}
