<?php
class controller{

    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($view, $data=[]){
        foreach($data as $key => $value){
            $$key = $value;
        }
        require_once "./mvc/views/".$view.".php";
    }
}
?>