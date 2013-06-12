<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front extends CI_Controller {


	public function index()
	{

		/*
		if (!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		*/
		

		$this->load->view('includes/header'); 
		$this->load->view('includes/navbar'); 
		$this->load->view('front');
		$this->load->view('includes/footer');
	}



}
