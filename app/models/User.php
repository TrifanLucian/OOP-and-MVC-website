<?php 


/**
 * User class
 */
class User
{
	
	use Model;

	protected $table = 'users';

	protected $allowedColumns = [

		'nume',
		'parola',
	];

	public function validate($data)
	{
		$this->errors = [];

		if(empty($data['nume'])){
			$this->errors['nume'] = "Numele este obligatoriu";
		}
		
		if(empty($data['parola'])){
			$this->errors['parola'] = "Parola este obligatorie";
		}

		if(empty($this->errors)){
			return true;
		}

		return false;
	}
	
}