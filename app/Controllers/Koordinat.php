<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Koordinat extends ResourceController
{
	protected $format = 'json';
	protected $modelName = 'App\Models\KoordinatModel';

	public function index()
	{
		$data = [
			'message' => 'success', 
			'data' => $this->model->findAll()
		]; 

		return $this->response->setStatusCode(200)->setJSON($data);
	}

	public function show($id = null)
	{
		$data = [
			'message' => 'success',
			'data' => $this->model->find($id)
		]; 
 
		return $this->respond($data, 200);
	}
}
