<?php 

/**
 * jurnal class
 */
class Nota
{
	use Controller;

	public function index(){
		$data = $this->sesiune();
		if(!isset($_SESSION['logat'])) {
			redirect('home');
		}			

		if($_SERVER['REQUEST_METHOD'] == "POST") {		
			$jurnal = new Jurnal;
			if($jurnal->validate($_POST)){
				$jurnal->insert($_POST);					
				redirect('nota');
			}
			$data['errors'] = $jurnal->errors;
		}
		
		$jurnal = new Jurnal;
		$data['jurnal'] = $jurnal->findAll();
		$this->view('jurnal', $data);	
		show($data);
		show($_POST);
	}		
}
