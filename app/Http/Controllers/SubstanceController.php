<?php

namespace App\Http\Controllers;


use App\Models\Substance;
use Illuminate\Http\Request;

class SubstanceController extends FirstController
{
    public function __construct(Substance $model,Request $request)
    {
        $this->request=$request;
        $this->model=$model;
        $this->view="Substance";
    }
}
