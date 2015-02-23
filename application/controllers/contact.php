<?php

/**
* 
*/
class Contact extends CI_Controller
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }


	function index(){
		$data['main_content'] = 'contact_form';
		$this->load->view('includes/template', $data);
	}


	function submit(){
		$sub = $this->input->post('submit');
		if (isset($sub)) {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$message = $this->input->post('message');
			echo $name ."\r\n".$email."\r\n".$message;

		}



		// echo $name ."<br/>".$email ."<br/>".$message;

		// $data['main_content'] = 'contact_submitted';
		// $this->load->view('includes/template', $data);
	}	
}