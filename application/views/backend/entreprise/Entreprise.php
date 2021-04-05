<?php 

defined('BASEPATH') OR exit('No direct script access allowed');  
class entreprise extends CI_Controller
{
	private $token;
	private $connected;
	public function __construct()
	{
	  parent::__construct();
	  if(!$this->session->userdata('entreprise_login'))
	  {
	      	redirect(base_url().'login');
	  }
	  $this->load->library('form_validation');
	  $this->load->library('encrypt');
      $this->load->library('pdf');
	  $this->load->model('crud_model'); 

	  $this->load->helper('url');

	  $this->token = "sk_test_51GzffmHcKfZ3B3C9DATC3YXIdad2ummtHcNgVK4E5ksCLbFWWLYAyXHRtVzjt8RGeejvUb6Z2yUk740hBAviBSyP00mwxmNmP1";
	  $this->connected = $this->session->userdata('entreprise_login');

	}

	function index(){
		$data['title']="mon profile entreprise";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['users'] = $this->crud_model->fetch_connected($this->connected);
		// $this->load->view('backend/entreprise/profile', $data);
  		// $this->load->view('backend/entreprise/exemple', $data);

	    $data['nombre_users']   = $this->crud_model->statistiques_nombre("users");
	    $data['nombre_article'] = $this->crud_model->statistiques_nombre("article");
	    $data['nombre_padding_article'] = $this->crud_model->statistiques_nombre("padding_article");
	     
	    $this->load->view('backend/entreprise/dashbord', $data);
	}















}









 ?>