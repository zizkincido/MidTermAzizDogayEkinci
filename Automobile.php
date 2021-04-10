<?php
class Automobile 
{
    public $licence_plate;
    public $brand;
    public $model;
    public $model_year;
    public $color;

    function __construct($license_plate,$brand,$model,$model_year,$color){
        $this->license_plate = $license_plate;
        $this->brand = $brand;
        $this->model = $model;
        $this->model_year = $model_year;
        $this->color = $color;
    }
    function __toString(){
        return $this->license_plate." ".$this->brand.":". $this->model.":".$this->model_year.":".$this->color;
    }
}












?>