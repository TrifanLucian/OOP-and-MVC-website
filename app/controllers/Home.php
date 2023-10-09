<?php 

/**
 * home class
 **/
class Home
{	
	use Controller;

	public function index()
		{
			$data = $this->sesiune();				
			$this->view('home', $data);
		}
}
