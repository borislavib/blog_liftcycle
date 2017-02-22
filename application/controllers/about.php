<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller { 
	public function index()
	{ 
		$this->home();
		//$this->load->view('about');
	}

	public function home()
	{
		$this->load->view('site_header');
		$this->load->view('site_navigation');
		$this->load->view('about');  
		$this->load->view('site_footer'); 
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */