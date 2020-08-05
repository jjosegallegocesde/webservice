<?php namespace App\Controllers;

use App\Models\AnimalModel;
use CodeIgniter\RESTful\ResourceController;

class RestUsuario extends ResourceController {

	protected $modelName = 'App\Models\AnimalModel';
	protected $format    = 'json';
	
	public function index() {
		
		return $this->respond($this->model->findAll());

	}

	public function crear(){

		$model= new AnimalModel(); //objeto de la clase modelo en donde esta configurada la conexion con BD

	
		$nombre= $this->request->getPost('nombre');
		$comida= $this->request->getPost('comida');
		$edad = $this->request->getPost('edad');


		$id=$model->insert([
			'nombre'=>$nombre,
			'comida'=>$comida,
			'edad'=>$edad
		]);

		return $this->respond($this->model->find($id));	
	}

	public function eliminar($id){

		$model= new AnimalModel();
		$model->delete($id);

		return $this->respond("Producto eliminado",null,200);	

	}

	//--------------------------------------------------------------------

}
