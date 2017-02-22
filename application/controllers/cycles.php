<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cycles extends CI_Controller {
 
	public function index()
	{ 
		$this->home();
	}

	public function home()
	{
		$this->load->view('site_header');
		$this->load->view('site_navigation');
		$this->load->view('cycles_main');
		$this->load->view('site_footer'); 
	}
	public function abadjiev()
	{
		$this->load->view('site_header');
		$this->load->view('site_navigation');
		$this->load->view('abadjiev');
		$this->load->view('site_footer'); 
	}
	public function coan()
	{
		$this->load->view('site_header');
		$this->load->view('site_navigation');		
		$this->load->view('coan');
		$this->load->view('site_footer'); 
	}
	public function rep_max()
	{
		$this->load->view('site_header');
		$this->load->view('site_navigation');			
		$this->load->view('rep_max');
		$this->load->view('site_footer'); 
	}
	public function russian()
	{
		$this->load->view('site_header');
		$this->load->view('site_navigation');	
		$this->load->view('russian');
		$this->load->view('site_footer'); 
	}
	public function sinclair()
	{
		$this->load->view('site_header');
		$this->load->view('site_navigation');	
		$this->load->view('sinclair');
		$this->load->view('site_footer'); 		
	}
	public function smolov()
	{
		$this->load->view('site_header');
		$this->load->view('site_navigation');			
		$this->load->view('smolov');
		$this->load->view('site_footer');
	}
	public function smolov_bp()
	{
		$this->load->view('site_header');
		$this->load->view('site_navigation');			
		$this->load->view('smolov_bp');
		$this->load->view('site_footer');
	}
	public function wilks()
	{
		$this->load->view('site_header');
		$this->load->view('site_navigation');	
		$this->load->view('wilks');
		$this->load->view('site_footer');
	}

	public function contact() 
	{
		$this->load->view('contact');
		// $this->load->view('site_navigation');	
		// $this->load->view('contact_main');
		// $this->load->view('site_footer');		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */