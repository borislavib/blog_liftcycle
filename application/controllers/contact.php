<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/* 
 The MIT License (MIT) 
Copyright (c) 2013 Ashley Baker (github.com/abkr)

 */
class Contact extends CI_Controller {
   
	// spam protection
	protected	$spam_protection	= 	true; 
	protected 	$spam_question		=	'What color is a blue snake';
	protected	$spam_answer		= 	'blue';

	// other
	public $data = 	array(); // used for the views
 

	public function index()
	{
 
		$this->load->model('send_db');
 
 		$this->data['form_properties'] = array('id' => 'ideas-form');
 		$this->data['submit_properties'] = array(
 			'class' => 'btn',
 			'value' => 'Send',
 			'type' => 'submit'
 			);
 		$this->data['response'] = null;

		$this->data['show_spam_protection'] = $this->spam_protection; // used in the view
		$this->data['spam_question'] = $this->spam_question; // used in the view

		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');
		
		$this->form_validation->set_message('name', 'Please, fill all the fields.');


		if ($this->spam_protection) {
			$this->form_validation->set_rules('spam_protection', 'Spam Protection', 'callback_spam_protection');
		}

		if($this->form_validation->run() == false) { 

			$this->data['reset'] = false;
			 
			$this->load->view('site_header');
			$this->load->view('site_navigation');		
			$this->load->view('contact', $this->data); 
			$this->load->view('site_footer'); 
 
		} else { 
			$this->data['response'] = 'Your message has been successfully sent.';	
			$this->data['reset'] = true;	
 	
 			$this->data['dummy_field'] = $this->input->post('company');

 			if($this->data['dummy_field']) {
			 	return;
 			}

			$idea_sent = array(
				'id' => '',
				'name' => $this->input->post('name'),
				'mail' => $this->input->post('email'),
				'text' => $this->input->post('message'),
				'time' => time()
			);
 
			$this->send_db->addIdea($idea_sent);
	
			$this->load->view('site_header');
			$this->load->view('site_navigation');		
			$this->load->view('contact', $this->data); //,$this->data 
			$this->load->view('site_footer'); 
		 
		}
	}

	// the callback for checking the spam protection. Only one question/one answer, very basic.
	public function spam_protection($str)
	{
		// we will assume the user is lazy with their caps lock
		if (strtolower(trim($str)) == strtolower(trim($this->spam_answer))) {
			return true;
		}
		else {
			$this->form_validation->set_message('spam_protection', 'The %s field did not match the correct answer');
			return false;
		}
	} 
}

