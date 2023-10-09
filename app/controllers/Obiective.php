<?php 

/**
 * home class
 */
class Obiective
{
	use Controller;

	public function index(){
		$data = $this->sesiune();
		if(!isset($_SESSION['logat'])) {
			redirect('home');
		}
		
		$destinatie = new Destinatie;
		
		$data['obiective'] = $destinatie->findAll();
		
		$data['nume'] = $_SESSION['nume']->nume;
		
		$this->view('obiective', $data);
		
	}

}
