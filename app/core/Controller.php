<?php 


Trait Controller
{

	public function view($name, $data = [])
	{
		if(!empty($data))
			{extract($data);}
			
		$filename = "../app/views/".$name.".view.php";
		if(file_exists($filename))
		{
			require $filename;
		}else{

			$filename = "../app/views/404.view.php";
			require $filename;
		}
	}
	public function sesiune()
	 {
		 if(isset($_SESSION['logat']) && $_SESSION['logat'] == true) {
			 $data['display'] = "none";
			 $data['notdisplay'] = "block";
		 }else{
			 $data['display'] = "block";
			 $data['notdisplay'] = "none";
		 }
		 $data['nume'] = empty($_SESSION['nume']) ? 'Utilizator' : $_SESSION['nume']->nume;
		
		 return $data;
	 }	
}

