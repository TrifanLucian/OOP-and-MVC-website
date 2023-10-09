<?php 

/**
 * home class
 */
class Login

{
	use Controller;

	
	
	public function index()
	{
		$data = null;
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$user = new User();
			$arr['nume'] = $_POST['nume'];
			
			$row = $user->first($arr);
			
			if($row)
			{
				if($row->parola === $_POST['parola'])
				{
					$_SESSION['nume'] = $row;
					$_SESSION['logat'] = true;
					redirect('home');
				}	
			}
			$user->errors['nume'] = "Nume sau parola gresita";
			
			$data['errors'] = $user->errors;	
		}	

		$this->view('login', $data);	
		
	}
}




