<?php

class home extends Controller 
{
	public function index($name = ''){
		$user = $this->model('User');
		$this->view('home/index', array('name' => $user->Connect()));
	}
}