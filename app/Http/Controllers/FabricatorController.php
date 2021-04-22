<?php

namespace App\Http\Controllers;


use App\Models\Fabricator;
use Illuminate\Http\Request;

class FabricatorController extends FirstController
{
    public function __construct(Fabricator $model,Request $request)
    {
        $this->request=$request;
        $this->model=$model;
        $this->view="Fabricator";
    }
}
