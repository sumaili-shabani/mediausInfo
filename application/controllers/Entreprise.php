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

	function dashbord(){
		$data['title']="Tableau de bord entreprise";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['users'] = $this->crud_model->fetch_connected($this->connected);
		// $this->load->view('backend/entreprise/profile', $data);
  		// $this->load->view('backend/entreprise/exemple', $data);

	    $data['nombre_users']   = $this->crud_model->statistiques_nombre("users");
	    $data['nombre_article'] = $this->crud_model->statistiques_nombre("article");
	    $data['nombre_padding_article'] = $this->crud_model->statistiques_nombre("padding_article");
	     
	    $this->load->view('backend/entreprise/dashbord', $data);
	}

	function detail_user($id=''){

		  $nom = $this->crud_model->get_name_user($id);
		  $data['title']="detail de profile ".$nom;

	      $data['pays'] = $this->crud_model->fetch_pays_register();
	      $data['provinces'] = $this->crud_model->fetch_province_register();


	      $data['user_skills']  = $this->crud_model->select_competense_users($id);
	      $data['user_interese']  = $this->crud_model->select_interesse_users($id);
	      $data['educations']   = $this->crud_model->select_etude_faite_users($id);

	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
	      $data['users'] = $this->crud_model->fetch_connected($id);
	      // $this->load->view('backend/user/viewx', $data);
	      $this->load->view('backend/entreprise/user_tag', $data);
	}

	function profile(){
      $data['title']="mon profile user";

      $data['pays'] = $this->crud_model->fetch_pays_register();
      $data['provinces'] = $this->crud_model->fetch_province_register();


      $data['user_skills']  = $this->crud_model->select_competense_users($this->connected);
      $data['user_interese']  = $this->crud_model->select_interesse_users($this->connected);
      $data['educations']   = $this->crud_model->select_etude_faite_users($this->connected);

      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      // $this->load->view('backend/user/viewx', $data);
      $this->load->view('backend/entreprise/profile', $data);
    }

    function candidats(){
      $data['title']="Liste des nos candidats";

      $data['pays'] = $this->crud_model->fetch_pays_register();
      $data['provinces'] = $this->crud_model->fetch_province_register();

      $data['cat_province'] = $this->crud_model->fetch_idp_candiat(); 
      $data['cat_ville'] = $this->crud_model->fetch_idv_candiat(); 
      $data['cat_sexe'] = $this->crud_model->fetch_sexe_candiat();


      $data['user_skills']  = $this->crud_model->select_competense_users($this->connected);
      $data['user_interese']  = $this->crud_model->select_interesse_users($this->connected);
      $data['educations']   = $this->crud_model->select_etude_faite_users($this->connected);

      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      // $this->load->view('backend/user/viewx', $data);
      $this->load->view('backend/entreprise/candidats', $data);
    }

    function offres_emplois(){
      $data['title']="Liste des offres d'emplois";

      $data['pays'] = $this->crud_model->fetch_pays_register();
      $data['provinces'] = $this->crud_model->fetch_province_register();

      $data['cat_province'] = $this->crud_model->fetch_idp_candiat(); 
      $data['cat_ville'] = $this->crud_model->fetch_idv_candiat(); 
      $data['cat_sexe'] = $this->crud_model->fetch_sexe_candiat();

      $data['cat_category'] = $this->crud_model->fetch_category_candiat();
      $data['cat_contrat'] = $this->crud_model->fetch_contrat_offre();
      $data['cat_salaire'] = $this->crud_model->fetch_salaire_offre();
      $data['cat_qualification'] = $this->crud_model->fetch_qualification_offre();


      $data['user_skills']  = $this->crud_model->select_competense_users($this->connected);
      $data['user_interese']  = $this->crud_model->select_interesse_users($this->connected);
      $data['educations']   = $this->crud_model->select_etude_faite_users($this->connected);

      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      // $this->load->view('backend/user/viewx', $data);
      $this->load->view('backend/entreprise/offres_emplois', $data);
    }

    function profile_entrep(){
      $data['title']="mon profile user";
      $data['MESOFFRES']=$this->crud_model->get_offres_entreprise_tag($this->connected);



      $my_entrep = $this->crud_model->get_info_entreprise_tag($this->connected);
      if($my_entrep->num_rows() > 0) {

      	  $data['my_entrep'] = $this->crud_model->get_info_entreprise_tag($this->connected);
	  	  $data['pays'] = $this->crud_model->fetch_pays_register();
	      $data['provinces'] = $this->crud_model->fetch_province_register();


	      $data['user_skills']  = $this->crud_model->select_competense_users($this->connected);
	      $data['user_interese']  = $this->crud_model->select_interesse_users($this->connected);
	      $data['educations']   = $this->crud_model->select_etude_faite_users($this->connected);

	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);

	      $data['category'] = $this->crud_model->fetch_category_register();
	      // $this->load->view('backend/user/viewx', $data);
	      $this->load->view('backend/entreprise/profile_entrep', $data);

      }
      else{

      	$insertData = array(
      		'nom'	=>	'entreprise systèle',
      		'ceo'	=>	 $this->connected,
      		'logo'	=>	'logo2.jpg'
      	);
      	$this->crud_model->insert_nouvelle_entreprise($insertData);

      	 $data['pays'] = $this->crud_model->fetch_pays_register();
	      $data['provinces'] = $this->crud_model->fetch_province_register();


	      $data['user_skills']  = $this->crud_model->select_competense_users($this->connected);
	      $data['user_interese']  = $this->crud_model->select_interesse_users($this->connected);
	      $data['educations']   = $this->crud_model->select_etude_faite_users($this->connected);

	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);

	      $data['category'] = $this->crud_model->fetch_category_register();
	      // $this->load->view('backend/user/viewx', $data);
	      $this->load->view('backend/entreprise/profile_entrep', $data);

      }

    }

    function mes_job_publier(){
      $data['title']="Mes job publiés";
      $data['MESOFFRES']=$this->crud_model->get_offres_entreprise_tag($this->connected);



      $my_entrep = $this->crud_model->get_info_entreprise_tag($this->connected);
      if($my_entrep->num_rows() > 0) {

      	  $data['my_entrep'] = $this->crud_model->get_info_entreprise_tag($this->connected);
	  	  $data['pays'] = $this->crud_model->fetch_pays_register();
	      $data['provinces'] = $this->crud_model->fetch_province_register();


	      $data['user_skills']  = $this->crud_model->select_competense_users($this->connected);
	      $data['user_interese']  = $this->crud_model->select_interesse_users($this->connected);
	      $data['educations']   = $this->crud_model->select_etude_faite_users($this->connected);

	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);

	      $data['category'] = $this->crud_model->fetch_category_register();

	      $this->load->view('backend/entreprise/mes_job_publier', $data);

      }
      else{

      	$insertData = array(
      		'nom'	=>	'entreprise systèle',
      		'ceo'	=>	 $this->connected,
      		'logo'	=>	'logo2.jpg'
      	);
      	$this->crud_model->insert_nouvelle_entreprise($insertData);

      	 $data['pays'] = $this->crud_model->fetch_pays_register();
	      $data['provinces'] = $this->crud_model->fetch_province_register();


	      $data['user_skills']  = $this->crud_model->select_competense_users($this->connected);
	      $data['user_interese']  = $this->crud_model->select_interesse_users($this->connected);
	      $data['educations']   = $this->crud_model->select_etude_faite_users($this->connected);

	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);

	      $data['category'] = $this->crud_model->fetch_category_register();
	      // $this->load->view('backend/user/viewx', $data);
	      $this->load->view('backend/entreprise/profile_entrep', $data);

      }

    }

    function nouveau_job($codejob=''){

    	$title_job = $this->crud_model->get_name_job_pub($codejob);
    	$data['title']= $title_job;
    	$data['info_job_tag'] = $this->crud_model->get_info_job_tag_by_codejob($codejob);
    	$data['codejob'] = $codejob;


    	

	    $data['services'] = $this->crud_model->fetch_service_register();
	    $data['categories'] = $this->crud_model->fetch_category_register();
	    $data['contrats'] = $this->crud_model->fetch_contrat_register();
	    $data['salaires'] = $this->crud_model->fetch_salaire_register();
	    $data['gradesT'] = $this->crud_model->fetch_gradeT_register();


	    $identrep = $this->crud_model->get_info_entreprise_tag_code($codejob);
	    $data['my_entrep'] = $this->crud_model->get_info_info_tag_entreprise($identrep);

	    // $data['my_entrep'] = $this->crud_model->get_info_entreprise_tag($this->connected);
	   
	     

	  	$data['pays'] = $this->crud_model->fetch_pays_register();
	    $data['provinces'] = $this->crud_model->fetch_province_register();


	    $data['user_skills']  = $this->crud_model->select_competense_users($this->connected);
	    $data['user_interese']  = $this->crud_model->select_interesse_users($this->connected);
	    $data['educations']   = $this->crud_model->select_etude_faite_users($this->connected);

	    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
	    $data['users'] = $this->crud_model->fetch_connected($this->connected);

	    $data['category'] = $this->crud_model->fetch_category_register();
	      // $this->load->view('backend/user/viewx', $data);
	    $this->load->view('backend/entreprise/detail_job', $data);

    }

    function reply_to_our_job($codejob=''){

    	$title_job = $this->crud_model->get_name_job_pub($codejob);
    	$data['title']= $title_job;
    	$data['info_job_tag'] = $this->crud_model->get_info_job_tag_by_codejob($codejob);
    	$data['codejob'] = $codejob;

    	$data['user_reply'] = $this->crud_model->get_info_reply_tojob_tag_by_codejob($codejob);


    	

	    $data['services'] = $this->crud_model->fetch_service_register();
	    $data['categories'] = $this->crud_model->fetch_category_register();
	    $data['contrats'] = $this->crud_model->fetch_contrat_register();
	    $data['salaires'] = $this->crud_model->fetch_salaire_register();
	    $data['gradesT'] = $this->crud_model->fetch_gradeT_register();

	    $data['my_entrep'] = $this->crud_model->get_info_entreprise_tag($this->connected);
	  	$data['pays'] = $this->crud_model->fetch_pays_register();
	    $data['provinces'] = $this->crud_model->fetch_province_register();


	    $data['user_skills']  = $this->crud_model->select_competense_users($this->connected);
	    $data['user_interese']  = $this->crud_model->select_interesse_users($this->connected);
	    $data['educations']   = $this->crud_model->select_etude_faite_users($this->connected);

	    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
	    $data['users'] = $this->crud_model->fetch_connected($this->connected);

	    $data['category'] = $this->crud_model->fetch_category_register();
	      // $this->load->view('backend/user/viewx', $data);
	    $this->load->view('backend/entreprise/reply_to_our_job', $data);

    }

    function edit_new_job($codejob=''){

    	$title_job = $this->crud_model->get_name_job_pub($codejob);
    	$data['title']= $title_job;
    	$data['info_job_tag'] = $this->crud_model->get_info_job_tag_by_codejob($codejob);
    	$data['codejob'] = $codejob;


    	

	    $data['services'] = $this->crud_model->fetch_service_register();
	    $data['categories'] = $this->crud_model->fetch_category_register();
	    $data['contrats'] = $this->crud_model->fetch_contrat_register();
	    $data['salaires'] = $this->crud_model->fetch_salaire_register();
	    $data['gradesT'] = $this->crud_model->fetch_gradeT_register();

	    $data['my_entrep'] = $this->crud_model->get_info_entreprise_tag($this->connected);
	  	$data['pays'] = $this->crud_model->fetch_pays_register();
	    $data['provinces'] = $this->crud_model->fetch_province_register();


	    $data['user_skills']  = $this->crud_model->select_competense_users($this->connected);
	    $data['user_interese']  = $this->crud_model->select_interesse_users($this->connected);
	    $data['educations']   = $this->crud_model->select_etude_faite_users($this->connected);

	    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
	    $data['users'] = $this->crud_model->fetch_connected($this->connected);

	    $ceo = $this->crud_model->get_ceo_info_entreprise_tag_code($codejob);
	    if ($ceo != $this->connected) {
	    	# code...
	    	$this->session->set_flashdata('message2', 'ta manière de hqcking est vraiment vas! désolé pour toi fenaint');
	    	redirect('entreprise/mes_job_publier','refresh');
	    }

	    $data['category'] = $this->crud_model->fetch_category_register();
	      // $this->load->view('backend/user/viewx', $data);
	    $this->load->view('backend/entreprise/edit_new_job', $data);

    }

    function new_job(){

    	  $data['title']="Poster votre offre d'emplois";
	      $my_entrep = $this->crud_model->get_info_entreprise_tag($this->connected);

	      $data['services'] = $this->crud_model->fetch_service_register();
	      $data['categories'] = $this->crud_model->fetch_category_register();
	      $data['contrats'] = $this->crud_model->fetch_contrat_register();
	      $data['salaires'] = $this->crud_model->fetch_salaire_register();
	      $data['gradesT'] = $this->crud_model->fetch_gradeT_register();

	      if($my_entrep->num_rows() > 0) {

	      	  $data['my_entrep'] = $this->crud_model->get_info_entreprise_tag($this->connected);
		  	  $data['pays'] = $this->crud_model->fetch_pays_register();
		      $data['provinces'] = $this->crud_model->fetch_province_register();


		      $data['user_skills']  = $this->crud_model->select_competense_users($this->connected);
		      $data['user_interese']  = $this->crud_model->select_interesse_users($this->connected);
		      $data['educations']   = $this->crud_model->select_etude_faite_users($this->connected);

		      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		      $data['users'] = $this->crud_model->fetch_connected($this->connected);

		      $data['category'] = $this->crud_model->fetch_category_register();
		      // $this->load->view('backend/user/viewx', $data);
		      $this->load->view('backend/entreprise/prost_job', $data);
	      }
	      else{

	      	$insertData = array(
	      		'nom'	=>	'entreprise systèle',
	      		'ceo'	=>	 $this->connected,
	      		'logo'	=>	'logo2.jpg'
	      	);
	      	$this->crud_model->insert_nouvelle_entreprise($insertData);

	      	 $data['pays'] = $this->crud_model->fetch_pays_register();

		      $data['provinces'] = $this->crud_model->fetch_province_register();


		      $data['user_skills']  = $this->crud_model->select_competense_users($this->connected);
		      $data['user_interese']  = $this->crud_model->select_interesse_users($this->connected);
		      $data['educations']   = $this->crud_model->select_etude_faite_users($this->connected);

		      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		      $data['users'] = $this->crud_model->fetch_connected($this->connected);

		      $data['category'] = $this->crud_model->fetch_category_register();
		      // $this->load->view('backend/user/viewx', $data);
		      $this->load->view('backend/entreprise/prost_job', $data);

	      }
    }


    function basic(){
        $data['title']="Information basique de mon compte ceo";
        $data['pays'] = $this->crud_model->fetch_pays_register();
        $data['provinces'] = $this->crud_model->fetch_province_register();


	  $data['user_skills']  = $this->crud_model->select_competense_users($this->connected);
	  $data['user_interese']  = $this->crud_model->select_interesse_users($this->connected);
	  $data['educations']   = $this->crud_model->select_etude_faite_users($this->connected);

	  $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
	  $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/entreprise/basic', $data);
    }

    function basic_image(){
        $data['title']="Information basique de ma photo ceo";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/entreprise/basic_image', $data);
    }

    function basic_secure(){
        $data['title']="Paramètrage de sécurité de mon compte ceo";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/entreprise/basic_secure', $data);
    }

    function notification($param1=''){
      $data['title']    ="Listes des notifications ceo";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
      $data['users']    = $this->crud_model->fetch_connected($this->connected);
      $this->load->view('backend/entreprise/notification', $data);
    }


    function fetch_ville_requete(){
      if($this->input->post('idp'))
      {
        echo $this->crud_model->fetch_ville_requete_crud($this->input->post('idp'));
      }
    }

    function modification_panel($param1='', $param2='', $param3=''){

      if ($param1="option1") {
         $data = array(
            'first_name'        => $this->input->post('first_name'),
            'last_name'       => $this->input->post('last_name'),
            'telephone'       => $this->input->post('telephone'),
            'full_adresse'      => $this->input->post('full_adresse'),
            'biographie'        => $this->input->post('biographie'),
            'date_nais'       => $this->input->post('date_nais'),
            'sexe'            => $this->input->post('sexe'),
            'email'           => $this->input->post('mail_ok'),

            'idPays'          => $this->input->post('idPays'),
            'idp'             => $this->input->post('idp'),
            'idv'             => $this->input->post('idv'), 

            'facebook'        => $this->input->post('facebook'),
            'linkedin'        => $this->input->post('linkedin'),
            'twitter'         => $this->input->post('twitter')
        );

        $id_user= $this->connected;
        $query = $this->crud_model->update_crud($id_user, $data);
        $this->session->set_flashdata('message', 'votre profile a été mis à jour avec succès!!!🆗');
         redirect('entreprise/basic', 'refresh');
      }
  }

  function modification_panel_entreprise($param1='', $param2='', $param3=''){

     $data = array(
        'nom'        	  => $this->input->post('nom'),
        'description'     => $this->input->post('description'),
        'idcat'       	  => $this->input->post('idcat'),
        'typeEntrep'      => $this->input->post('typeEntrep'),
        'nombreEmploye'   => $this->input->post('nombreEmploye'),
        'siteweb'         => $this->input->post('siteweb'),
       
        'idPays'          => $this->input->post('idPays'),
        'idp'             => $this->input->post('idp'),
        'idv'             => $this->input->post('idv'), 

        'facebook'        => $this->input->post('facebook'),
        'linkedin'        => $this->input->post('linkedin'),
        'twitter'         => $this->input->post('twitter')
    );

    $id_user= $this->connected;
    $query = $this->crud_model->update_crud_entreprise($id_user, $data);
    $this->session->set_flashdata('message', 'votre profile a été mis à jour avec succès!!!🆗');
     redirect('entreprise/profile_entrep', 'refresh');

  }


  function modification_photo(){

     $id_user= $this->connected;
     if ($_FILES['user_image']['size'] > 0) {
       # code...
        $data = array(
          'image'     => $this->upload_image()
        );
       $query = $this->crud_model->update_crud($id_user, $data);
       $this->session->set_flashdata('message', 'modification avec succès');
           redirect('entreprise/basic_image', 'refresh');
     }
     if ($_FILES['user_image2']['size'] > 0) {
       # code...
        $data = array(
          'cv'     => $this->upload_cv()
        );
       $query = $this->crud_model->update_crud($id_user, $data);
       $this->session->set_flashdata('message', 'modification avec succès');
           redirect('entreprise/basic_image', 'refresh');
     }
     else{

        $this->session->set_flashdata('message2', 'Veillez selectionner la photo');
        redirect('entreprise/basic_image', 'refresh');

     }
     
  }

  function modification_photo_entreprise(){

     $id_user= $this->connected;
     if ($_FILES['user_image']['size'] > 0) {
       # code...
        $data = array(
          'logo'     => $this->upload_image()
        );
       $query = $this->crud_model->update_crud_entreprise($id_user, $data);
       $this->session->set_flashdata('message', 'modification avec succès');
           redirect('entreprise/profile_entrep', 'refresh');
     }
     
     else{

        $this->session->set_flashdata('message2', 'Veillez selectionner la photo');
        redirect('entreprise/profile_entrep', 'refresh');

     }
     
  }

  function add_job($param1 =''){
  	$identrep = $param1;
  	if ($identrep !='') {

  		$codejob = rand();

  		$insertdata = array(
	        'ids'        	  => $this->input->post('ids'),
	        'idcat'           => $this->input->post('idcat'),
	        'titre'       	  => $this->input->post('titre'),
	        'nombre_post'     => $this->input->post('nombre_post'),
	        'experience'      => $this->input->post('experience'),
	        'idcontrat'       => $this->input->post('idcontrat'),
	       
	        'grade'           => $this->input->post('grade'),
	        'idsalaire'       => $this->input->post('idsalaire'),
	        'date_fin_depot'  => $this->input->post('date_fin_depot'), 

	        'localisation'    => $this->input->post('localisation'),
	        'qualification'   => $this->input->post('qualification'),

	        'description_job' => $this->input->post('description_job'),
	        'connaissance'    => $this->input->post('connaissance'),
	        'identrep'        => $this->input->post('identrep'),
	        'codejob'         => $codejob,
	        
	        'fichier_job'     => $this->upload_fichier_job()
	    );


	    $id_user= $this->connected;
	    $query = $this->crud_model->insert_job($insertdata);
		   if($query > 0)
		   {

		        $users_cool = $this->crud_model->get_info_user();
		        foreach ($users_cool as $key) {

		        	
		            $id_user_recever = $key['id'];

		            if ($key['idrole'] == 1) {
		            	$url ="admin/nouveau_job/".$codejob;
		                // $nom   = $this->crud_model->get_name_user($idpersonne);
		                $nom = $this->input->post('titre');
		                $message ="Nouvelle offre ".$nom." vient d'entre publiée";

		                $notification = array(
		                  'titre'     =>    "Offre d'emploi",
		                  'icone'     =>    "fa fa-briefcase",
		                  'message'   =>     $message,
		                  'url'       =>     $url,
		                  'id_user'   =>     $id_user_recever
		                );
		                
		                $not = $this->crud_model->insert_notification($notification);

		            }

		            if ($key['idrole'] == 2) {
		            	$url ="user/nouveau_job/".$codejob;
		                // $nom   = $this->crud_model->get_name_user($idpersonne);
		                $nom = $this->input->post('titre');
		                $message ="Nouvelle offre ".$nom." vient d'entre publiée";

		                $notification = array(
		                  'titre'     =>    "Nouvelle inscription",
		                  'icone'     =>    "fa fa-briefcase",
		                  'message'   =>     $message,
		                  'url'       =>     $url,
		                  'id_user'   =>     $id_user_recever
		                );
		                
		                $not = $this->crud_model->insert_notification($notification);

		            }

		            if ($key['idrole'] == 3) {
		            	$url ="journaliste/nouveau_job/".$codejob;
		                // $nom   = $this->crud_model->get_name_user($idpersonne);
		                $nom = $this->input->post('titre');
		                $message ="Nouvelle offre ".$nom." vient d'entre publiée";

		                $notification = array(
		                  'titre'     =>    "Nouvelle inscription",
		                  'icone'     =>    "fa fa-briefcase",
		                  'message'   =>     $message,
		                  'url'       =>     $url,
		                  'id_user'   =>     $id_user_recever
		                );
		                
		                $not = $this->crud_model->insert_notification($notification);

		            }
		          
		            # code...
		        }

		        $this->session->set_flashdata('message', 'votre offre a été mis à jour avec succès!!!🆗');
			    redirect('entreprise/new_job','refresh');
		   }
		   else{
		   	$this->session->set_flashdata('message2', 'erreur veillez vérifier les informations requises');
			     redirect('entreprise/new_job','refresh');
		   }

	    
	    
	    redirect('entreprise/new_job','refresh');
  		# code...
  	}
  	else{
  		$this->session->set_flashdata('message2', 'erreur veillez vérifier les informations requises');
  		redirect('entreprise/new_job','refresh');
  	}


  }

  function add_paiement($param1 =''){

  	$identrep = $param1;
  	if ($identrep !='') {

  		$insertdata = array(
	        'idpersonne'      => $this->connected,
	        'date_paie'       => date('Y-m-d'),
	        'montant'         => $this->input->post('montant'),
	        'motif'     	  => $this->input->post('motif'),
	        'token'      	  => $this->input->post('token')
	    );


	    $id_user= $this->connected;
	    $query = $this->crud_model->insert_paiement_pading($insertdata);
		   if($query > 0)
		   {

		        $users_cool = $this->crud_model->get_info_user();
		        foreach ($users_cool as $key) {

		        	
		            $id_user_recever = $key['id'];

		            if ($key['idrole'] == 1) {
		            	$url ="admin/paiement_pading";
		                $nom   = $this->crud_model->get_name_user($id_user);
		                // $nom = $this->input->post('titre');
		                $message ="Nouvelle tentative de paiement ".$nom." vient de tenter de vérifier son paiement";

		                $notification = array(
		                  'titre'     =>    "Tentative de paiement",
		                  'icone'     =>    "fa fa-money",
		                  'message'   =>     $message,
		                  'url'       =>     $url,
		                  'id_user'   =>     $id_user_recever
		                );
		                
		                $not = $this->crud_model->insert_notification($notification);

		            }

		            # code...
		        }

		        $this->session->set_flashdata('message', "votre paiement a été mis à jour avec succès!!!🆗 c'est encore en attente de vérification par l'administrateur du système. <br/> pour toute contestation appeler ce numéro +243 817883541 ou +243970524665 ");
			    redirect('entreprise/new_job','refresh');
		   }
		   else{
		   	$this->session->set_flashdata('message2', 'erreur veillez vérifier les informations requises');
			     redirect('entreprise/new_job','refresh');
		   }

	    
	    
	    redirect('entreprise/new_job','refresh');
  		# code...
  	}
  	else{
  		$this->session->set_flashdata('message2', 'erreur veillez vérifier les informations requises');
  		redirect('entreprise/new_job','refresh');
  	}

  }

  function reply_job($codejob){
  	    // $id_user = $this->connected;
  		$id_user = 4;
  	    $idjob   = $this->input->post('idjob');
  	    $etat = $this->crud_model->get_info_job_tag_to_reply($idjob, $id_user);
  	    if ($etat->num_rows() >0) {
  	    	$this->session->set_flashdata('message2', 'Désolé vous avez déjà postuler sur cette offre!!🔕');
			redirect('entreprise/nouveau_job/'.$codejob,'refresh');
  	    }
  	    else{

  	    	$ceo    = $this->input->post('ceo');
	  	    $titre    = $this->input->post('titre');
	  	    $insertdata = array(
		        'id_user'         	=> $id_user,
		        'idjob'           	=> $idjob,
		        'codejob'         	=> $this->input->post('codejob'),
		        'motivation'      	=> $this->input->post('motivation'),

		        'experienceP'      	=> $this->input->post('experienceP'),
		        'niveau'      		=> $this->input->post('niveau'),
		        'langue'      		=> $this->input->post('langue'),
		        'formation'      	=> $this->input->post('formation'),
		        'fichier'     		=> $this->upload_fichier_job_reply()
		    );

		      $query = $this->crud_model->insert_demandejob($insertdata);
			    if ($query > 0) {
			    	# code...
			    	$url ="entreprise/reply_to_our_job/".$codejob;
			        $nom   = $this->crud_model->get_name_user($id_user);
			        $message =" ".$nom." vient de répondre à votre offre ".$titre;

			        $notification = array(
			          'titre'     =>    "Réponse à l'offre",
			          'icone'     =>    "fa fa-user",
			          'message'   =>     $message,
			          'url'       =>     $url,
			          'id_user'   =>     $ceo
			        );
			        
			        $not = $this->crud_model->insert_notification($notification);

			         $this->session->set_flashdata('message', "votre demande d'emploi a été envoyé avec succès!!!🆗");
			         redirect('entreprise/nouveau_job/'.$codejob,'refresh');
			    }
			    else{
			    	$this->session->set_flashdata('message2', 'erreur veillez vérifier les informations requises');
			    	 redirect('entreprise/nouveau_job/'.$codejob,'refresh');
			    }

	  	}

	    
  }

  function validation_demande_emploi($idd,$id_user,$codejob){

  	$updatedata = array(
  		'etat'	=>	1
  	);

  	$query = $this->crud_model->update_demandejob($idd, $updatedata);

  	$url ="user/nouveau_job/".$codejob;
    $nom   = $this->crud_model->get_name_user($id_user);
    $message ="Salut ".$nom." votre demande d'emplois a été approuvé avec succès👌!!!! vous recevrez d'avance toute information pour l'intervieuw dans votre courier électronique mail";

    $notification = array(
      'titre'     =>    "Félictation plus à vous!",
      'icone'     =>    "fa fa-graduation-cap",
      'message'   =>     $message,
      'url'       =>     $url,
      'id_user'   =>     $id_user
    );
    
    $not = $this->crud_model->insert_notification($notification);

     $this->session->set_flashdata('message', "votre demande d'emploi a été envoyé avec succès!!!🆗");
     redirect('entreprise/reply_to_our_job/'.$codejob,'refresh');
  	
  }




  function edit_job($param1 =''){

  		$updatedata = array(
	        'ids'        	  => $this->input->post('ids'),
	        'idcat'           => $this->input->post('idcat'),
	        'titre'       	  => $this->input->post('titre'),
	        'nombre_post'     => $this->input->post('nombre_post'),
	        'experience'      => $this->input->post('experience'),
	        'idcontrat'       => $this->input->post('idcontrat'),
	       
	        'grade'           => $this->input->post('grade'),
	        'idsalaire'       => $this->input->post('idsalaire'),
	        'date_fin_depot'  => $this->input->post('date_fin_depot'), 

	        'localisation'    => $this->input->post('localisation'),
	        'qualification'   => $this->input->post('qualification'),

	        'description_job' => $this->input->post('description_job'),
	        'connaissance'    => $this->input->post('connaissance'),
	        'identrep'        => $this->input->post('identrep'),
	        'fichier_job'     => $this->upload_fichier_job()
	    );


	    $codejob = $this->input->post('codejob');
	    $query = $this->crud_model->update_job($codejob,$updatedata);
	    $this->session->set_flashdata('message', 'Succès!  code opération de modification a aboutie avec succès👌');
	    redirect('entreprise/edit_new_job/'.$codejob,'refresh');


  }


  function upload_image()  
  {  
       if(isset($_FILES["user_image"]))  
       {  
            $extension = explode('.', $_FILES['user_image']['name']);  
            $new_name = rand() . '.' . $extension[1];  
            $destination = './upload/photo/' . $new_name;  
            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
            return $new_name;  
       }  
  }



  function upload_cv()  
  {  
       if(isset($_FILES["user_image2"]))  
       {  
            $extension = explode('.', $_FILES['user_image2']['name']);  
            $new_name = rand() . '.' . $extension[1];  
            $destination = './upload/cv/' . $new_name;  
            move_uploaded_file($_FILES['user_image2']['tmp_name'], $destination);  
            return $new_name;  
       }  
  }

  function upload_fichier_job()  
  {  
       if(isset($_FILES["user_image2"]))  
       {  
            $extension = explode('.', $_FILES['user_image2']['name']);  
            $new_name = rand() . '.' . $extension[1];  
            $destination = './upload/cv/' . $new_name;  
            move_uploaded_file($_FILES['user_image2']['tmp_name'], $destination);  
            return $new_name;  
       }  
  }

  function upload_fichier_job_reply()  
  {  
       if(isset($_FILES["user_image3"]))  
       {  
            $extension = explode('.', $_FILES['user_image3']['name']);  
            $new_name = rand() . '.' . $extension[1];  
            $destination = './upload/reply/' . $new_name;  
            move_uploaded_file($_FILES['user_image3']['tmp_name'], $destination);  
            return $new_name;  
       }  
  }

  function modification_account($param1=''){
       $id_user= $this->connected;
       $first_name;

       $passwords = md5($this->input->post('user_password_ancien'));
       
       $users = $this->db->query("SELECT * FROM users WHERE passwords='".$passwords."' AND id='".$id_user."' ");

       if ($users->num_rows() > 0) {
          
          foreach ($users->result_array() as $row) {
            $first_name = $row['first_name'];
            // echo($first_name);
             $nouveau   =  $this->input->post('user_password_nouveau');
             $confirmer =  $this->input->post('user_password_confirmer');
             if ($nouveau == $confirmer) {
              $new_pass= md5($nouveau);

              $data = array(
                  'passwords'  => $new_pass
                );

                 $query = $this->crud_model->update_crud($id_user, $data);
                 $this->session->set_flashdata('message', 'votre clée de sécurité a été changer avec succès '.$first_name);
                   redirect('entreprise/basic_secure', 'refresh');

               }
               else{
   
                $this->session->set_flashdata('message2', 'les deux mot de passe doivent être identiques');
                redirect('entreprise/basic_secure', 'refresh');
               }
         
          }

       }
       else{

          $this->session->set_flashdata('message2', 'information incorecte');
          redirect('entreprise/basic_secure', 'refresh');
       }
     
  } 

  function view_1($param1='', $param2='', $param3=''){
      
	  if($param1=='display_delete') {

	  	 $this->session->set_flashdata('message', 'suppression avec succès ');

	    $query = $this->crud_model->delete_notifacation_tag($param2);
	    redirect('entreprise/notification');
	  }

	  if($param1=='display_delete_message') {

	    $query = $this->crud_model->delete_message_tag($param3);
	    redirect('entreprise/message/'.$param2);
	  }
	  else{

	  }

  }














	// pour les follower
   function pagination_users_on_to()
   {

    $this->load->library("pagination");
    $config = array();
    $config["base_url"] = "#";
    $config["total_rows"] = $this->crud_model->fetch_pagination_ti_followe_count();
    $config["per_page"] = 7;
    $config["uri_segment"] = 3;
    $config["use_page_numbers"] = TRUE;
    $config["full_tag_open"] = '<ul class="pagination">';
    $config["full_tag_close"] = '</ul>';
    $config["first_tag_open"] = '<li class="page-item">';
    $config["first_tag_close"] = '</li>';
    $config["last_tag_open"] = '<li class="page-item">';
    $config["last_tag_close"] = '</li>';
    $config['next_link'] = '<li class="page-item active"><i class="btn btn-info">&gt;&gt;</i>';
    $config["next_tag_open"] = '<li class="page-item">';
    $config["next_tag_close"] = '</li>';
    $config["prev_link"] = '<li class="page-item active"><i class="btn btn-info">&lt;&lt;</i>';
    $config["prev_tag_open"] = "<li class='page-item'>";
    $config["prev_tag_close"] = "</li>";
    $config["cur_tag_open"] = "<li class='page-item active'><a href='#' class='page-link'>";
    $config["cur_tag_close"] = "</a></li>";
    $config["num_tag_open"] = "<li class='page-item'>";
    $config["num_tag_close"] = "</li>";
    $config["num_links"] = 1;
    $this->pagination->initialize($config);
    $page = $this->uri->segment(3);
    $start = ($page - 1) * $config["per_page"];

    $output = array(
     'pagination_link' => $this->pagination->create_links(),
     'country_table'   => $this->crud_model->fetch_details_pagination_to_users_count4($config["per_page"], $start)
    );
    echo json_encode($output);
   }

   // recherche de formations des produits
   function fetch_search_user_follow_pagination()
   {
      $output = '';
      $query = '';
      if($this->input->post('query'))
      {
       $query = $this->input->post('query');
      }
      $data = $this->crud_model->fetch_data_search_online_user_follow($query);
      
      if($data->num_rows() > 0)
      {

        $id = $this->connected;
        $etat = '';
        $etat2 = '';

          foreach($data->result() as $row)
          {

            $onlines = $this->db->get("online");
            if ($onlines->num_rows() > 0) {
              foreach ($onlines->result() as $key) {

                if ($row->id == $key->id_user) {
                  $enligne = 'user--online';
                }
                else{

                  $enligne = 'user--busy';
                  
                }


                

              }
            }

            if ($row->id != $id) {
              # code...
               $output .= '

               <a href="javascript:void(0)" class="list-group-item voir_chat_message" data-id="'.$row->id.'" data-chat-user="'.$row->first_name.'">
                  <figure class="'.$enligne.'">
                      <img src="'.base_url().'upload/photo/'.$row->image.'" class="rounded-circle" alt="">
                  </figure><span><span class="name">'.$row->first_name.' '.substr($row->last_name, 0,25).'</span>  <span class="username">@'.$row->first_name.'</span> </span>
              </a>

               ';
            }

            

          }

         
      }
      else
      {
          $output .= '
            <div class="media text-muted pt-3">
                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
                
              </div>
          ';
          // $this->db->pagination_information();
      }

      echo $output;
   }


   function chat_local_view($param1, $param2){
      $data['title']="Discution instantané";
      $data['id_user']= $param1;
      $data['id_recever']= $param2;

      $code = substr(md5(rand(100000000, 200000000)), 0, 10);

      if ($this->input->post('Message_text') !='') {

        $chat['id_user'] = $param1;
        $chat['id_recever'] = $param2;
        $chat['message'] = $this->input->post('Message_text');
        $chat['code'] = $code;

        $md5 = md5(date('d-m-y H:i:s'));


        
        if($_FILES['user_image']['size'] > 0){

          $chat['fichier'] =  $md5.str_replace(' ', '', $_FILES['user_image']['name']);

                // $chat['fichier'] = $this->upload_image_chat_envoie();
                move_uploaded_file($_FILES['user_image']['tmp_name'], 'upload/groupe/fichier/' . $md5.str_replace(' ', '', $_FILES['user_image']['name']));
        }

        $this->crud_model->insert_message($chat);
        
       echo("Message envoyé avec succès 👌");
      }
      else{
        echo("Erreur subvenu lors de l'opération 👌");
      }
      
      
    }


    function show_message_local_chat($param1='', $param2=''){
      $output = '';
      $etat = '';
      $status = '';
      $enligne = '';

      $connected= $param1;
      $CodeEntrep= $param2;

      $id_user = $connected ;
      $id_recever = $CodeEntrep;

      $chat= $this->db->query("SELECT id_user,id_recever, messagerie.created_at, users.first_name,users.last_name, users.image, message, fichier FROM messagerie 
        inner join 
        users on users.id=messagerie.id_user WHERE (id_user='".$CodeEntrep."' AND id_recever='".$id_user."')
        OR (id_recever='".$CodeEntrep."' AND id_user='".$id_user."')
         ORDER BY created_at ASC");
      if($chat->num_rows() < 0) {
          $output .= '

           <div class="col-md-12 col-ms-12 col-xs-12">
                <img src="'.base_url().'upload/annumation/chat.svg" class="rounded-circle img-responsive" alt="">
                
            </div>

           ';
      }
      else{

        foreach ($chat->result_array() as $data) {

            $onlines = $this->db->get("online");
            if ($onlines->num_rows() > 0) {
              foreach ($onlines->result() as $key) {

                if ($data['id_recever'] == $CodeEntrep) {
                  $enligne = 'user--online';
                }
                else{

                  $enligne = 'user--busy';
                  
                }
                

              }
            }

            if ($data['fichier'] !='') {
              $etat = '
              <br>
                <span class="text-info"><a href="'.base_url().'upload/groupe/fichier/'.$data["fichier"].'" download="'.base_url().'upload/groupe/fichier/'.$data["fichier"].'" class="text-muted"><i class="fa fa-download"></i> télécharger ce fichier</a></span>
               ';
            }
            else{
               $etat = '';
            }

            if ($data['id_user'] == $connected) {
              $status = 'message media';
            }
            else{
                $status = 'message media reply';
            }

          $output .= '

           <div class="'.$status.'">
                <figure class="'.$enligne.'">
                    <a href="javascript:void(0);">
                        <img src="'.base_url().'upload/photo/'.$data["image"].'" class="rounded-circle" alt="">
                    </a>
                </figure>
                <div class="message-body media-body">
                    <p>'.nl2br($data['message']).'
                        
                         '. $etat.'
                         <br/>
                         <i class="fa fa-clock-o"></i> '.substr(date(DATE_RFC822, strtotime($data['created_at'])), 0, 23).'
                    </p>
                  
                </div>
            </div>

           ';
      
        }

       
      }


       echo($output);

    }


    function infomation_par_mail()
    {
        if($this->input->post('checkbox_value'))
        {
           $id = $this->input->post('checkbox_value');
           for($count = 0; $count < count($id); $count++)
           {
               
                $mail    = $id[$count];
                $website = "patajob@gmail.com";

                $to =$id[$count];
                $subject = $this->input->post('sujet');
                $message2 = $this->input->post('message');
                 

                $headers= "MIME Version 1.0\r\n";
                $headers .= "Content-type: text/html; charset=UTF-8\r\n";
                $headers .= "From: no-reply@whitefondation.com" . "\r\n" ."Reply-to: sumailiroger681@gmail.com"."\r\n"."X-Mailer: PHP/".phpversion();

                mail($to,$subject,$message2,$headers);

           }

           if(mail($to,$subject,$message2,$headers) > 0){
                echo("message envoyé avec succès");
           } 
           else {
                echo("échec lors de l'envoie de message!!!!!!!!!!!!");
           }


        }
    }
     // fin contact
    // auto complete text candidat d'emplois
    function fetch_auto()
	{
	  	echo $this->crud_model->fetch_data_auto($this->uri->segment(3));
	}

	// auto complete text roffres d'emplois
	function fetch_auto_offres()
	{
	  	echo $this->crud_model->fetch_data_auto_offres($this->uri->segment(3));
	}


    // pagination des candidat
   function pagination_candidat_liste()
   {

    $this->load->library("pagination");
    $config = array();
    $config["base_url"] = "#";
    $config["total_rows"] = $this->crud_model->fetch_pagination_candidat_followe_count();
    $config["per_page"] = 4;
    $config["uri_segment"] = 3;
    $config["use_page_numbers"] = TRUE;
    $config["full_tag_open"] = '<ul class="pagination">';
    $config["full_tag_close"] = '</ul>';
    $config["first_tag_open"] = '<li class="page-item">';
    $config["first_tag_close"] = '</li>';
    $config["last_tag_open"] = '<li class="page-item">';
    $config["last_tag_close"] = '</li>';
    $config['next_link'] = '<li class="page-item active"><i class="btn btn-info">&gt;&gt;</i>';
    $config["next_tag_open"] = '<li class="page-item">';
    $config["next_tag_close"] = '</li>';
    $config["prev_link"] = '<li class="page-item active"><i class="btn btn-info">&lt;&lt;</i>';
    $config["prev_tag_open"] = "<li class='page-item'>";
    $config["prev_tag_close"] = "</li>";
    $config["cur_tag_open"] = "<li class='page-item active'><a href='#' class='page-link'>";
    $config["cur_tag_close"] = "</a></li>";
    $config["num_tag_open"] = "<li class='page-item'>";
    $config["num_tag_close"] = "</li>";
    $config["num_links"] = 1;
    $this->pagination->initialize($config);
    $page = $this->uri->segment(3);
    $start = ($page - 1) * $config["per_page"];

    $output = array(
     'pagination_link' => $this->pagination->create_links(),
     'country_table'   => $this->crud_model->fetch_details_pagination_candidat($config["per_page"], $start)
    );
    echo json_encode($output);
   }

   // recherche de formations des produits
   function fetch_search_candidat_pagination()
   {
      $output = '';
      $query = '';
      if($this->input->post('query'))
      {
       $query = $this->input->post('query');
      }
      $data = $this->crud_model->fetch_data_search_candidats_user($query);
      
      if($data->num_rows() > 0)
      {

        $id = $this->connected;
        $etat = '';
        $etat2 = '';

          foreach($data->result() as $row)
          {

            
            $output .= '

              <div class="col-xs-6 col-lg-6 col-12">
                <div class="card">
                    <div class="card-header col-md-12">
                        <img class="card-img-top" src="'.base_url().'upload/photo/'.$row->image.'" alt="Card image cap" style="height:190px;">

                    </div>
                    <div class="card-body">
                         <div class="col-md-12 text-uppercase">
                            <a href="'.base_url().'entreprise/detail_user/'.$row->id.'" class="text-primary">'.substr($row->first_name.''.$row->last_name, 0,29).'</a>
                            &nbsp;<a href="tel:'.$row->telephone.'" class="text-primary"><i class="fa fa-phone"></i></a>
                        </div>
                        <div class="col-md-12 list-item-heading mb-4">
                            <a href="mailto:'.$row->email.'" class="text-primary"><i class="fa fa-google"></i> '.substr($row->email, 0,50).'</a>
                            Biographie
                            <p>
                                <b>Sexe: </b> '.$row->sexe.'
                                <b>Pays: </b> '.substr($row->nompays, 0,100).' <br>
                                <b>Adresse domicile:</b>
                                '.substr($row->full_adresse, 0,100).'
                            </p>
                        </div>
                        <footer>
                            <p class="text-muted text-small mb-0 font-weight-light text-center">
                            <b><i class="fa fa-clock-o"></i> date de naissance: </b>  '.nl2br(substr(date(DATE_RFC822, strtotime($row->date_nais)), 0, 12)).'</p>
                        </footer>
                    </div>
                </div>
            </div>

               ';

            

          }

         
      }
      else
      {
          $output .= '
           <div class="col-md-12" >
            	<div class="row">
            	    <div class="col-md-2"></div>
	            	<div class="col-md-8">
	            	  <div class="media text-muted pt-3">
		                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
		                
		              </div>
	            	</div>
	            	<div class="col-md-2"></div>
            	</div>
           </div>
          ';
          // $this->db->pagination_information();
      }

      echo $output;
   }


   // pour les offres d'emploie
   /*

   les script pour offres d'emplois
   ================================
   */

   // pagination des candidat
   function pagination_offresEmploi_liste()
   {

    $this->load->library("pagination");
    $config = array();
    $config["base_url"] = "#";
    $config["total_rows"] = $this->crud_model->fetch_pagination_offresEmploi_followe_count();
    $config["per_page"] = 4;
    $config["uri_segment"] = 3;
    $config["use_page_numbers"] = TRUE;
    $config["full_tag_open"] = '<ul class="pagination">';
    $config["full_tag_close"] = '</ul>';
    $config["first_tag_open"] = '<li class="page-item">';
    $config["first_tag_close"] = '</li>';
    $config["last_tag_open"] = '<li class="page-item">';
    $config["last_tag_close"] = '</li>';
    $config['next_link'] = '<li class="page-item active"><i class="btn btn-info">&gt;&gt;</i>';
    $config["next_tag_open"] = '<li class="page-item">';
    $config["next_tag_close"] = '</li>';
    $config["prev_link"] = '<li class="page-item active"><i class="btn btn-info">&lt;&lt;</i>';
    $config["prev_tag_open"] = "<li class='page-item'>";
    $config["prev_tag_close"] = "</li>";
    $config["cur_tag_open"] = "<li class='page-item active'><a href='#' class='page-link'>";
    $config["cur_tag_close"] = "</a></li>";
    $config["num_tag_open"] = "<li class='page-item'>";
    $config["num_tag_close"] = "</li>";
    $config["num_links"] = 1;
    $this->pagination->initialize($config);
    $page = $this->uri->segment(3);
    $start = ($page - 1) * $config["per_page"];

    $output = array(
     'pagination_link' => $this->pagination->create_links(),
     'country_table'   => $this->crud_model->fetch_details_pagination_offresEmploi($config["per_page"], $start)
    );
    echo json_encode($output);
   }

   // recherche de offresEmploi des produits
   function fetch_search_offresEmploi_pagination()
   {
      $output = '';
      $query = '';
      if($this->input->post('query'))
      {
       $query = $this->input->post('query');
      }
      $MESOFFRES = $this->crud_model->fetch_data_search_offres_emplois($query);

      
      if($MESOFFRES->num_rows() > 0)
      {

        $connected_user = $this->session->userdata('entreprise_login');
        $etat = '';
        $enligne = '';
        $link_reply ='';
        $link_postuler ='';
        $url_post ='';
        $opera_job ='';
        $today = date('Y-m-d');
        
        foreach ($MESOFFRES->result_array() as $row) {

         if ($row["date_fin_depot"] >= $today) {
         	
         	  $url_post = base_url()."entreprise/nouveau_job/".$row['codejob'];
	          $link_postuler = '<a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>
	            
	            <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
	          ';

	          if ($row['ceo'] == $connected_user) {

	            $url_post = base_url()."entreprise/edit_new_job/".$row['codejob'];

	            $opera_job = '

	                  <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
	                              <i class="fa fa-edit"></i></a>
	            ';

	            $link_reply = base_url().'entreprise/reply_to_our_job/'.$row['codejob'];
	            
	          }
	          else{
	            $opera_job = '';
	            $link_reply ='javascript:void(0);';

	          }

         }
         else{
         	$url_post = base_url()."entreprise/nouveau_job/".$row['codejob'];

            if ($row['ceo'] == $connected_user) {

              $url_post = base_url()."entreprise/edit_new_job/".$row['codejob'];

              $opera_job = '

                    <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
                                <i class="fa fa-edit"></i></a>
              ';

              $link_reply = base_url().'entreprise/reply_to_our_job/'.$row['codejob'];
              
            }
            else{
              $opera_job = '';
              $link_reply ='javascript:void(0);';

            }
           $link_postuler = '<a href="javascript:void(0)" class="btn btn-warning mb-2 pr-2"><i class="fa fa-calendar"></i> Déjà cloturée</a>
              
              <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
            ';
         }

          
          $count_candidat;
          $likes = $this->db->query("SELECT COUNT(idjob) AS nombre FROM demandejob WHERE idjob=".$row['idjob']." ");
          if ($likes->num_rows() > 0) {
            foreach ($likes->result_array() as $key_val) {
              $count_candidat = $key_val['nombre'];
            }
          }
          else{
            $count_candidat = 0;
          }

          $output .= '
            <div class="card colmd-12">
            <div class="sl-item card-body">
               
                <div class="sl-right">
                    <div> <a href="javascript:void(0)" class="link">'.$row["nom"] .'</a> <span class="sl-date"> <b class="text-info"> fin dépot <i class="fa fa-clock-o"></i> </b> '.nl2br(substr(date(DATE_RFC822, strtotime($row["date_fin_depot"])), 0, 23)).'  </span>
                        <div class="mt-20 row">
                            <div class="col-md-3 col-xs-12"><img src="'.base_url().'upload/photo/'.$row['logo'].'" alt="user" class="img-fluid rounded" /></div>
                            <div class="col-md-9 col-xs-12">
                              <strong>
                                <span class="text-primary">
                                  '.$row["nomcat"].' -
                                </span>
                                '.$row["titre"].'
                              </strong>

                                <p> '.nl2br(substr($row['description_job'], 0,200)).'  ... </p> 

                                '.$link_postuler.'

                                '.$opera_job.'
                                

                            
                            </div>
                        </div>
                        <div class="like-comm mt-20"> 


                            
                            <a href="'. $link_reply.'" class="btn btn-outline-dark btn-block"><i class="fa fa-group"></i> '.$count_candidat.' canditat(s)</a> 
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
            
            ';



        }
         
      }
      else
      {
          $output .= '
           <div class="col-md-12" >
            	<div class="row">
            	    <div class="col-md-2"></div>
	            	<div class="col-md-8">
	            	  <div class="media text-muted pt-3">
		                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
		                
		              </div>
	            	</div>
	            	<div class="col-md-2"></div>
            	</div>
           </div>
          ';
          // $this->db->pagination_information();
      }

      echo $output;
   }


   // fin des script 
   /*
   fin des scripts offres
   =======================
   =======================
   */


   function show_candidat_by_province(){
	 	
	 	  $output = '';
		  $query = '';
		  if($this->input->post('idp'))
		  {
		   $query = $this->input->post('idp');
		  }
		  $data = $this->crud_model->fultrage_fetch_data_candidat_by_province($query);
		  
		  if($data->num_rows() > 0)
		  {


			   foreach($data->result() as $row)
			   {

			   	  



			     $output .= '

	              <div class="col-xs-6 col-lg-6 col-12">
	                <div class="card">
	                    <div class="card-header col-md-12">
	                        <img class="card-img-top" src="'.base_url().'upload/photo/'.$row->image.'" alt="Card image cap" style="height:190px;">

	                    </div>
	                    <div class="card-body">
	                         <div class="col-md-12 text-uppercase">
	                            <a href="'.base_url().'entreprise/detail_user/'.$row->id.'" class="text-primary">'.substr($row->first_name.''.$row->last_name, 0,29).'</a>
	                            &nbsp;<a href="tel:'.$row->telephone.'" class="text-primary"><i class="fa fa-phone"></i></a>
	                        </div>
	                        <div class="col-md-12 list-item-heading mb-4">
	                            <a href="mailto:'.$row->email.'" class="text-primary"><i class="fa fa-google"></i> '.substr($row->email, 0,50).'</a>
	                            Biographie
	                            <p>
	                                <b>Sexe: </b> '.$row->sexe.'
	                                <b>Pays: </b> '.substr($row->nompays, 0,100).' <br>
	                                <b>Adresse domicile:</b>
	                                '.substr($row->full_adresse, 0,100).'
	                            </p>
	                        </div>
	                        <footer>
	                            <p class="text-muted text-small mb-0 font-weight-light text-center">
	                            <b><i class="fa fa-clock-o"></i> date de naissance: </b>  '.nl2br(substr(date(DATE_RFC822, strtotime($row->date_nais)), 0, 12)).'</p>
	                        </footer>
	                    </div>
	                </div>
	            </div>

	               ';
			   }
		  }
		  else
		  {
		  		$output .= '
			      <div class="col-md-12" >
		            	<div class="row">
		            	    <div class="col-md-2"></div>
			            	<div class="col-md-8">
			            	  <div class="media text-muted pt-3">
				                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
				                
				              </div>
			            	</div>
			            	<div class="col-md-2"></div>
		            	</div>
		           </div>
			    ';
		   		// $this->db->pagination_information();
		  }

	  	echo $output;

	}

	function show_candidat_by_sexe(){
	 	
	 	  $output = '';
		  $query = '';
		  if($this->input->post('sexe'))
		  {
		   $query = $this->input->post('sexe');
		  }
		  $data = $this->crud_model->fultrage_fetch_data_candidat_by_sexe($query);
		  
		  if($data->num_rows() > 0)
		  {


			   foreach($data->result() as $row)
			   {

			   	  



			     $output .= '

	              <div class="col-xs-6 col-lg-6 col-12">
	                <div class="card">
	                    <div class="card-header col-md-12">
	                        <img class="card-img-top" src="'.base_url().'upload/photo/'.$row->image.'" alt="Card image cap" style="height:190px;">

	                    </div>
	                    <div class="card-body">
	                         <div class="col-md-12 text-uppercase">
	                            <a href="'.base_url().'entreprise/detail_user/'.$row->id.'" class="text-primary">'.substr($row->first_name.''.$row->last_name, 0,29).'</a>
	                            &nbsp;<a href="tel:'.$row->telephone.'" class="text-primary"><i class="fa fa-phone"></i></a>
	                        </div>
	                        <div class="col-md-12 list-item-heading mb-4">
	                            <a href="mailto:'.$row->email.'" class="text-primary"><i class="fa fa-google"></i> '.substr($row->email, 0,50).'</a>
	                            Biographie
	                            <p>
	                                <b>Sexe: </b> '.$row->sexe.'
	                                <b>Pays: </b> '.substr($row->nompays, 0,100).' <br>
	                                <b>Adresse domicile:</b>
	                                '.substr($row->full_adresse, 0,100).'
	                            </p>
	                        </div>
	                        <footer>
	                            <p class="text-muted text-small mb-0 font-weight-light text-center">
	                            <b><i class="fa fa-clock-o"></i> date de naissance: </b>  '.nl2br(substr(date(DATE_RFC822, strtotime($row->date_nais)), 0, 12)).'</p>
	                        </footer>
	                    </div>
	                </div>
	            </div>

	               ';
			   }
		  }
		  else
		  {
		  		$output .= '
			      <div class="col-md-12" >
		            	<div class="row">
		            	    <div class="col-md-2"></div>
			            	<div class="col-md-8">
			            	  <div class="media text-muted pt-3">
				                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
				                
				              </div>
			            	</div>
			            	<div class="col-md-2"></div>
		            	</div>
		           </div>
			    ';
		   		// $this->db->pagination_information();
		  }

	  	echo $output;

	}

	function show_candidat_by_ville(){
	 	
	 	  $output = '';
		  $query = '';
		  if($this->input->post('idv'))
		  {
		   $query = $this->input->post('idv');
		  }
		  $data = $this->crud_model->fultrage_fetch_data_candidat_by_ville($query);
		  
		  if($data->num_rows() > 0)
		  {


			   foreach($data->result() as $row)
			   {

			   	  



			     $output .= '

	              <div class="col-xs-6 col-lg-6 col-12">
	                <div class="card">
	                    <div class="card-header col-md-12">
	                        <img class="card-img-top" src="'.base_url().'upload/photo/'.$row->image.'" alt="Card image cap" style="height:190px;">

	                    </div>
	                    <div class="card-body">
	                         <div class="col-md-12 text-uppercase">
	                            <a href="'.base_url().'entreprise/detail_user/'.$row->id.'" class="text-primary">'.substr($row->first_name.''.$row->last_name, 0,29).'</a>
	                            &nbsp;<a href="tel:'.$row->telephone.'" class="text-primary"><i class="fa fa-phone"></i></a>
	                        </div>
	                        <div class="col-md-12 list-item-heading mb-4">
	                            <a href="mailto:'.$row->email.'" class="text-primary"><i class="fa fa-google"></i> '.substr($row->email, 0,50).'</a>
	                            Biographie
	                            <p>
	                                <b>Sexe: </b> '.$row->sexe.'
	                                <b>Pays: </b> '.substr($row->nompays, 0,100).' <br>
	                                <b>Adresse domicile:</b>
	                                '.substr($row->full_adresse, 0,100).'
	                            </p>
	                        </div>
	                        <footer>
	                            <p class="text-muted text-small mb-0 font-weight-light text-center">
	                            <b><i class="fa fa-clock-o"></i> date de naissance: </b>  '.nl2br(substr(date(DATE_RFC822, strtotime($row->date_nais)), 0, 12)).'</p>
	                        </footer>
	                    </div>
	                </div>
	            </div>

	               ';
			   }
		  }
		  else
		  {
		  		$output .= '
			      <div class="col-md-12" >
		            	<div class="row">
		            	    <div class="col-md-2"></div>
			            	<div class="col-md-8">
			            	  <div class="media text-muted pt-3">
				                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
				                
				              </div>
			            	</div>
			            	<div class="col-md-2"></div>
		            	</div>
		           </div>
			    ';
		   		// $this->db->pagination_information();
		  }

	  	echo $output;

	}


   /*
   offres d'emplois  des scripts offres
   ====================================
   ====================================
   */


	function show_offres_by_categorie(){
	 	
	 	  $output = '';
		  $query = '';
		  if($this->input->post('idcat'))
		  {
		   $query = $this->input->post('idcat');
		  }
		  $MESOFFRES = $this->crud_model->fultrage_fetch_data_offre_by_categorie($query);
		  
		  if($MESOFFRES->num_rows() > 0)
		  {


			   $connected_user = $this->session->userdata('entreprise_login');
		        $etat = '';
		        $enligne = '';
		        $link_reply ='';
		        $link_postuler ='';
		        $url_post ='';
		        $opera_job ='';
		        $today = date('Y-m-d');
		        
		        foreach ($MESOFFRES->result_array() as $row) {

		         if ($row["date_fin_depot"] >= $today) {
		         	
		         	  $url_post = base_url()."entreprise/nouveau_job/".$row['codejob'];
			          $link_postuler = '<a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>
			            
			            <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
			          ';

			          if ($row['ceo'] == $connected_user) {

			            $url_post = base_url()."entreprise/edit_new_job/".$row['codejob'];

			            $opera_job = '

			                  <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
			                              <i class="fa fa-edit"></i></a>
			            ';

			            $link_reply = base_url().'entreprise/reply_to_our_job/'.$row['codejob'];
			            
			          }
			          else{
			            $opera_job = '';
			            $link_reply ='javascript:void(0);';

			          }

		         }
		         else{
		         	$url_post = base_url()."entreprise/nouveau_job/".$row['codejob'];

		            if ($row['ceo'] == $connected_user) {

		              $url_post = base_url()."entreprise/edit_new_job/".$row['codejob'];

		              $opera_job = '

		                    <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
		                                <i class="fa fa-edit"></i></a>
		              ';

		              $link_reply = base_url().'entreprise/reply_to_our_job/'.$row['codejob'];
		              
		            }
		            else{
		              $opera_job = '';
		              $link_reply ='javascript:void(0);';

		            }
		           $link_postuler = '<a href="javascript:void(0)" class="btn btn-warning mb-2 pr-2"><i class="fa fa-calendar"></i> Déjà cloturée</a>
		              
		              <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
		            ';
		         }

		          
		          $count_candidat;
		          $likes = $this->db->query("SELECT COUNT(idjob) AS nombre FROM demandejob WHERE idjob=".$row['idjob']." ");
		          if ($likes->num_rows() > 0) {
		            foreach ($likes->result_array() as $key_val) {
		              $count_candidat = $key_val['nombre'];
		            }
		          }
		          else{
		            $count_candidat = 0;
		          }

		          $output .= '
		            <div class="card colmd-12">
		            <div class="sl-item card-body">
		               
		                <div class="sl-right">
		                    <div> <a href="javascript:void(0)" class="link">'.$row["nom"] .'</a> <span class="sl-date"> <b class="text-info"> fin dépot <i class="fa fa-clock-o"></i> </b> '.nl2br(substr(date(DATE_RFC822, strtotime($row["date_fin_depot"])), 0, 23)).'  </span>
		                        <div class="mt-20 row">
		                            <div class="col-md-3 col-xs-12"><img src="'.base_url().'upload/photo/'.$row['logo'].'" alt="user" class="img-fluid rounded" /></div>
		                            <div class="col-md-9 col-xs-12">
		                              <strong>
		                                <span class="text-primary">
		                                  '.$row["nomcat"].' -
		                                </span>
		                                '.$row["titre"].'
		                              </strong>

		                                <p> '.nl2br(substr($row['description_job'], 0,200)).'  ... </p> 

		                                '.$link_postuler.'

		                                '.$opera_job.'
		                                

		                            
		                            </div>
		                        </div>
		                        <div class="like-comm mt-20"> 


		                            
		                            <a href="'. $link_reply.'" class="btn btn-outline-dark btn-block"><i class="fa fa-group"></i> '.$count_candidat.' canditat(s)</a> 
		                        </div>
		                    </div>
		                </div>
		            </div>
		            
		            </div>
		            
		            ';



		        }
		  }
		  else
		  {
		  		$output .= '
			      <div class="col-md-12" >
		            	<div class="row">
		            	    <div class="col-md-2"></div>
			            	<div class="col-md-8">
			            	  <div class="media text-muted pt-3">
				                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
				                
				              </div>
			            	</div>
			            	<div class="col-md-2"></div>
		            	</div>
		           </div>
			    ';
		   		// $this->db->pagination_information();
		  }

	  	echo $output;

	}

	function show_offres_by_contrat(){
	 	
	 	  $output = '';
		  $query = '';
		  if($this->input->post('idcontrat'))
		  {
		   $query = $this->input->post('idcontrat');
		  }
		  $MESOFFRES = $this->crud_model->fultrage_fetch_data_offre_by_contrat($query);
		  
		  if($MESOFFRES->num_rows() > 0)
		  {


			   $connected_user = $this->session->userdata('entreprise_login');
		        $etat = '';
		        $enligne = '';
		        $link_reply ='';
		        $link_postuler ='';
		        $url_post ='';
		        $opera_job ='';
		        $today = date('Y-m-d');
		        
		        foreach ($MESOFFRES->result_array() as $row) {

		         if ($row["date_fin_depot"] >= $today) {
		         	
		         	  $url_post = base_url()."entreprise/nouveau_job/".$row['codejob'];
			          $link_postuler = '<a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>
			            
			            <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
			          ';

			          if ($row['ceo'] == $connected_user) {

			            $url_post = base_url()."entreprise/edit_new_job/".$row['codejob'];

			            $opera_job = '

			                  <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
			                              <i class="fa fa-edit"></i></a>
			            ';

			            $link_reply = base_url().'entreprise/reply_to_our_job/'.$row['codejob'];
			            
			          }
			          else{
			            $opera_job = '';
			            $link_reply ='javascript:void(0);';

			          }

		         }
		         else{
		         	$url_post = base_url()."entreprise/nouveau_job/".$row['codejob'];

		            if ($row['ceo'] == $connected_user) {

		              $url_post = base_url()."entreprise/edit_new_job/".$row['codejob'];

		              $opera_job = '

		                    <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
		                                <i class="fa fa-edit"></i></a>
		              ';

		              $link_reply = base_url().'entreprise/reply_to_our_job/'.$row['codejob'];
		              
		            }
		            else{
		              $opera_job = '';
		              $link_reply ='javascript:void(0);';

		            }
		           $link_postuler = '<a href="javascript:void(0)" class="btn btn-warning mb-2 pr-2"><i class="fa fa-calendar"></i> Déjà cloturée</a>
		              
		              <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
		            ';
		         }

		          
		          $count_candidat;
		          $likes = $this->db->query("SELECT COUNT(idjob) AS nombre FROM demandejob WHERE idjob=".$row['idjob']." ");
		          if ($likes->num_rows() > 0) {
		            foreach ($likes->result_array() as $key_val) {
		              $count_candidat = $key_val['nombre'];
		            }
		          }
		          else{
		            $count_candidat = 0;
		          }

		          $output .= '
		            <div class="card colmd-12">
		            <div class="sl-item card-body">
		               
		                <div class="sl-right">
		                    <div> <a href="javascript:void(0)" class="link">'.$row["nom"] .'</a> <span class="sl-date"> <b class="text-info"> fin dépot <i class="fa fa-clock-o"></i> </b> '.nl2br(substr(date(DATE_RFC822, strtotime($row["date_fin_depot"])), 0, 23)).'  </span>
		                        <div class="mt-20 row">
		                            <div class="col-md-3 col-xs-12"><img src="'.base_url().'upload/photo/'.$row['logo'].'" alt="user" class="img-fluid rounded" /></div>
		                            <div class="col-md-9 col-xs-12">
		                              <strong>
		                                <span class="text-primary">
		                                  '.$row["nomcat"].' -
		                                </span>
		                                '.$row["titre"].'
		                              </strong>

		                                <p> '.nl2br(substr($row['description_job'], 0,200)).'  ... </p> 

		                                '.$link_postuler.'

		                                '.$opera_job.'
		                                

		                            
		                            </div>
		                        </div>
		                        <div class="like-comm mt-20"> 


		                            
		                            <a href="'. $link_reply.'" class="btn btn-outline-dark btn-block"><i class="fa fa-group"></i> '.$count_candidat.' canditat(s)</a> 
		                        </div>
		                    </div>
		                </div>
		            </div>
		            
		            </div>
		            
		            ';



		        }
		  }
		  else
		  {
		  		$output .= '
			      <div class="col-md-12" >
		            	<div class="row">
		            	    <div class="col-md-2"></div>
			            	<div class="col-md-8">
			            	  <div class="media text-muted pt-3">
				                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
				                
				              </div>
			            	</div>
			            	<div class="col-md-2"></div>
		            	</div>
		           </div>
			    ';
		   		// $this->db->pagination_information();
		  }

	  	echo $output;

	}

	function show_offres_by_salaire(){
	 	
	 	  $output = '';
		  $query = '';
		  if($this->input->post('idsalaire'))
		  {
		   $query = $this->input->post('idsalaire');
		  }
		  $MESOFFRES = $this->crud_model->fultrage_fetch_data_offre_by_salaire($query);
		  
		  if($MESOFFRES->num_rows() > 0)
		  {


			   $connected_user = $this->session->userdata('entreprise_login');
		        $etat = '';
		        $enligne = '';
		        $link_reply ='';
		        $link_postuler ='';
		        $url_post ='';
		        $opera_job ='';
		        $today = date('Y-m-d');
		        
		        foreach ($MESOFFRES->result_array() as $row) {

		         if ($row["date_fin_depot"] >= $today) {
		         	
		         	  $url_post = base_url()."entreprise/nouveau_job/".$row['codejob'];
			          $link_postuler = '<a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>
			            
			            <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
			          ';

			          if ($row['ceo'] == $connected_user) {

			            $url_post = base_url()."entreprise/edit_new_job/".$row['codejob'];

			            $opera_job = '

			                  <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
			                              <i class="fa fa-edit"></i></a>
			            ';

			            $link_reply = base_url().'entreprise/reply_to_our_job/'.$row['codejob'];
			            
			          }
			          else{
			            $opera_job = '';
			            $link_reply ='javascript:void(0);';

			          }

		         }
		         else{
		         	$url_post = base_url()."entreprise/nouveau_job/".$row['codejob'];

		            if ($row['ceo'] == $connected_user) {

		              $url_post = base_url()."entreprise/edit_new_job/".$row['codejob'];

		              $opera_job = '

		                    <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
		                                <i class="fa fa-edit"></i></a>
		              ';

		              $link_reply = base_url().'entreprise/reply_to_our_job/'.$row['codejob'];
		              
		            }
		            else{
		              $opera_job = '';
		              $link_reply ='javascript:void(0);';

		            }
		           $link_postuler = '<a href="javascript:void(0)" class="btn btn-warning mb-2 pr-2"><i class="fa fa-calendar"></i> Déjà cloturée</a>
		              
		              <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
		            ';
		         }

		          
		          $count_candidat;
		          $likes = $this->db->query("SELECT COUNT(idjob) AS nombre FROM demandejob WHERE idjob=".$row['idjob']." ");
		          if ($likes->num_rows() > 0) {
		            foreach ($likes->result_array() as $key_val) {
		              $count_candidat = $key_val['nombre'];
		            }
		          }
		          else{
		            $count_candidat = 0;
		          }

		          $output .= '
		            <div class="card colmd-12">
		            <div class="sl-item card-body">
		               
		                <div class="sl-right">
		                    <div> <a href="javascript:void(0)" class="link">'.$row["nom"] .'</a> <span class="sl-date"> <b class="text-info"> fin dépot <i class="fa fa-clock-o"></i> </b> '.nl2br(substr(date(DATE_RFC822, strtotime($row["date_fin_depot"])), 0, 23)).'  </span>
		                        <div class="mt-20 row">
		                            <div class="col-md-3 col-xs-12"><img src="'.base_url().'upload/photo/'.$row['logo'].'" alt="user" class="img-fluid rounded" /></div>
		                            <div class="col-md-9 col-xs-12">
		                              <strong>
		                                <span class="text-primary">
		                                  '.$row["nomcat"].' -
		                                </span>
		                                '.$row["titre"].'
		                              </strong>

		                                <p> '.nl2br(substr($row['description_job'], 0,200)).'  ... </p> 

		                                '.$link_postuler.'

		                                '.$opera_job.'
		                                

		                            
		                            </div>
		                        </div>
		                        <div class="like-comm mt-20"> 


		                            
		                            <a href="'. $link_reply.'" class="btn btn-outline-dark btn-block"><i class="fa fa-group"></i> '.$count_candidat.' canditat(s)</a> 
		                        </div>
		                    </div>
		                </div>
		            </div>
		            
		            </div>
		            
		            ';



		        }
		  }
		  else
		  {
		  		$output .= '
			      <div class="col-md-12" >
		            	<div class="row">
		            	    <div class="col-md-2"></div>
			            	<div class="col-md-8">
			            	  <div class="media text-muted pt-3">
				                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
				                
				              </div>
			            	</div>
			            	<div class="col-md-2"></div>
		            	</div>
		           </div>
			    ';
		   		// $this->db->pagination_information();
		  }

	  	echo $output;

	}

	function show_offres_by_qualification(){
	 	
	 	  $output = '';
		  $query = '';
		  if($this->input->post('qualification'))
		  {
		   $query = $this->input->post('qualification');
		  }
		  $MESOFFRES = $this->crud_model->fultrage_fetch_data_offre_by_qualification($query);
		  
		  if($MESOFFRES->num_rows() > 0)
		  {


			   $connected_user = $this->session->userdata('entreprise_login');
		        $etat = '';
		        $enligne = '';
		        $link_reply ='';
		        $link_postuler ='';
		        $url_post ='';
		        $opera_job ='';
		        $today = date('Y-m-d');
		        
		        foreach ($MESOFFRES->result_array() as $row) {

		         if ($row["date_fin_depot"] >= $today) {
		         	
		         	  $url_post = base_url()."entreprise/nouveau_job/".$row['codejob'];
			          $link_postuler = '<a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>
			            
			            <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
			          ';

			          if ($row['ceo'] == $connected_user) {

			            $url_post = base_url()."entreprise/edit_new_job/".$row['codejob'];

			            $opera_job = '

			                  <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
			                              <i class="fa fa-edit"></i></a>
			            ';

			            $link_reply = base_url().'entreprise/reply_to_our_job/'.$row['codejob'];
			            
			          }
			          else{
			            $opera_job = '';
			            $link_reply ='javascript:void(0);';

			          }

		         }
		         else{
		         	$url_post = base_url()."entreprise/nouveau_job/".$row['codejob'];

		            if ($row['ceo'] == $connected_user) {

		              $url_post = base_url()."entreprise/edit_new_job/".$row['codejob'];

		              $opera_job = '

		                    <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
		                                <i class="fa fa-edit"></i></a>
		              ';

		              $link_reply = base_url().'entreprise/reply_to_our_job/'.$row['codejob'];
		              
		            }
		            else{
		              $opera_job = '';
		              $link_reply ='javascript:void(0);';

		            }
		           $link_postuler = '<a href="javascript:void(0)" class="btn btn-warning mb-2 pr-2"><i class="fa fa-calendar"></i> Déjà cloturée</a>
		              
		              <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
		            ';
		         }

		          
		          $count_candidat;
		          $likes = $this->db->query("SELECT COUNT(idjob) AS nombre FROM demandejob WHERE idjob=".$row['idjob']." ");
		          if ($likes->num_rows() > 0) {
		            foreach ($likes->result_array() as $key_val) {
		              $count_candidat = $key_val['nombre'];
		            }
		          }
		          else{
		            $count_candidat = 0;
		          }

		          $output .= '
		            <div class="card colmd-12">
		            <div class="sl-item card-body">
		               
		                <div class="sl-right">
		                    <div> <a href="javascript:void(0)" class="link">'.$row["nom"] .'</a> <span class="sl-date"> <b class="text-info"> fin dépot <i class="fa fa-clock-o"></i> </b> '.nl2br(substr(date(DATE_RFC822, strtotime($row["date_fin_depot"])), 0, 23)).'  </span>
		                        <div class="mt-20 row">
		                            <div class="col-md-3 col-xs-12"><img src="'.base_url().'upload/photo/'.$row['logo'].'" alt="user" class="img-fluid rounded" /></div>
		                            <div class="col-md-9 col-xs-12">
		                              <strong>
		                                <span class="text-primary">
		                                  '.$row["nomcat"].' -
		                                </span>
		                                '.$row["titre"].'
		                              </strong>

		                                <p> '.nl2br(substr($row['description_job'], 0,200)).'  ... </p> 

		                                '.$link_postuler.'

		                                '.$opera_job.'
		                                

		                            
		                            </div>
		                        </div>
		                        <div class="like-comm mt-20"> 


		                            
		                            <a href="'. $link_reply.'" class="btn btn-outline-dark btn-block"><i class="fa fa-group"></i> '.$count_candidat.' canditat(s)</a> 
		                        </div>
		                    </div>
		                </div>
		            </div>
		            
		            </div>
		            
		            ';



		        }
		  }
		  else
		  {
		  		$output .= '
			      <div class="col-md-12" >
		            	<div class="row">
		            	    <div class="col-md-2"></div>
			            	<div class="col-md-8">
			            	  <div class="media text-muted pt-3">
				                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
				                
				              </div>
			            	</div>
			            	<div class="col-md-2"></div>
		            	</div>
		           </div>
			    ';
		   		// $this->db->pagination_information();
		  }

	  	echo $output;

	}


	function facturePaiement($param1=''){
       $customer_id = "paiement facture ".$param1;
       $html_content = '';
       $html_content .= $this->crud_model->fetch_single_details_facture_entreprise($param1);
       
       // echo($html_content);
       $this->pdf->loadHtml($html_content);
       $this->pdf->render();
       $this->pdf->stream("paiement reçu_".$customer_id.".pdf", array("Attachment"=>0));
    }























}









 ?>