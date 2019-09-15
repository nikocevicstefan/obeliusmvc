<?php

class Pages extends Controller{
	public function __construct(){
	}

	public function index(){
		echo $this->view('test');
	}

	public function about(){
		echo "This is about";
	}
}