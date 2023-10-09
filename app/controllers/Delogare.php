<?php

class Delogare
{
	use Controller;
	
	public function index()
	{
		session_start();
		session_unset();
		session_destroy();
		redirect('home');
	}
}
	


 