<?php

class Adauga
{
	use Controller;

	public function index(){
		$data = $this->sesiune();
		if(!isset($_SESSION['logat'])) {
			redirect('home');
		}
			
		if($_SERVER['REQUEST_METHOD'] == "POST") {		
			$destinatie = new Destinatie;
			if($destinatie->validate($_POST)){
				$target_dir = "../public/assets/images/";
				$target_file = $target_dir . $_FILES["imagine"]["name"];
				move_uploaded_file($_FILES["imagine"]["tmp_name"], $target_file);
				$_POST['fotografie'] = $_FILES["imagine"]["name"];
				$destinatie->insert($_POST);					
				redirect('adauga');

			}				
			$data['errors'] = $destinatie->errors;
		}
		$this->view('adauga', $data);	
		show($data);
		show($_POST);
	}		
}


