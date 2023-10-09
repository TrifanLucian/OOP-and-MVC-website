<?php 


/**
 * User class
 */
class Destinatie
{	
	use Model;

	protected $table = 'destinatie';

	protected $allowedColumns = [


		'comentariu',
		'tara',
		'titlu',
		'fotografie'
	];


	public function validate($data)
	{
		$this->errors = [];
		
		if(empty($data['titlu'])){
			$this->errors['nume'] = "Nu ați introdus titlu!";
		} 

		if(empty($data['tara'])){
			$this->errors['titlu'] = 'Nu ați introdus tara!';
		}

		if(empty($data['comentariu'])){
			$this->errors['tara'] = 'Nu ați introdus comentariu!';
		}

		if(empty($this->errors)){
			return true;
		}

		return false;
	}
}
	
	