<?php namespace App\Models;

use CodeIgniter\Model;

class AnimalModel extends Model {

    protected $table = 'animales';
    protected $allowedFields = ['nombre','comida','edad'];
    

}