<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    protected $request;
    protected $model;
    protected $view;


    public function index()
    {
        $models = $this->model->get()->all();
//        return  $result;
        return  view($this->view.".index",compact("models"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        try {
            $mod= $this->model->create($this->request->all());
            $mod->save();
            $models = $this->model->get()->all();
            return  view($this->view.".index",compact("models"));
        } catch (Throwable $error) {
            return "Error";
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $models = $this->model->find($this->request->only("id"));
        if (is_null($models)) {
            return 'Not Found';
        }
        return  view($this->view.".show",compact("models"));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

        try {
            $this->request->offsetUnset('_token');
            $this->request->offsetUnset('_method');
            $this->model->where("id",$this->request->only('id'))->update($this->request->all());
            $models = $this->model->get()->all();
            return  view($this->view.".index",compact("models"));

        } catch (Throwable $error) {
            return 'Not Found';
        }

        return  'Updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->model->where("id",$this->request->only('id'))->delete();
            $models = $this->model->get()->all();
            return  view($this->view.".index",compact("models"));
        } catch (Throwable $error) {
            return 'Not Found';
        }

        return  'Deleted';

    }
}
