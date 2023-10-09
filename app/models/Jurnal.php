<?php 


/**
 * User class
 */
class Jurnal
{	
	use Model;

	protected $table = 'jurnal';

	protected $allowedColumns = [


		'titlu',
		'data',
		'nume',
		'comentariu'
	];


	public function validate($data)
	{
		$this->errors = [];
		
		if(empty($data['titlu'])){
			$this->errors['titlu'] = "Nu ați introdus titlu!";
		} 

		if(empty($data['data'])){
			$this->errors['data'] = 'Nu ați introdus data!';
		}

		if(empty($data['comentariu'])){
			$this->errors['comentariu'] = 'Nu ați introdus comentariu!';
		}
		
		if(empty($data['nume'])){
			$this->errors['nume'] = 'Nu ați introdus numele!';
		}

		if(empty($this->errors)){
			return true;
		}

		return false;
	}
}