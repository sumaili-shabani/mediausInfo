<?php 

defined('BASEPATH') OR exit('No direct script access allowed');  
class admin extends CI_Controller
{
	private $token;
	private $connected;
	public function __construct()
	{
	  parent::__construct();
	  if(!$this->session->userdata('admin_login'))
	  {
	      	redirect(base_url().'login');
	  }
	  $this->load->library('form_validation');
	  $this->load->library('encrypt');
    $this->load->library('pdf');
	  $this->load->model('crud_model'); 

	  $this->load->helper('url');

	  $this->token = "sk_test_51GzffmHcKfZ3B3C9DATC3YXIdad2ummtHcNgVK4E5ksCLbFWWLYAyXHRtVzjt8RGeejvUb6Z2yUk740hBAviBSyP00mwxmNmP1";
	  $this->connected = $this->session->userdata('admin_login');

	}

	function index(){
		$data['title']="mon profile admin";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		$data['users'] = $this->crud_model->fetch_connected($this->connected);
		$this->load->view('backend/admin/exemple', $data);
        // $this->load->view('backend/admin/templete_admin', $data);
	}


  /*

    DEBIT FONCTION APPEL DES VIEWS UTILISATION DE PORTAIL JOB
    MES SCRIPTS JOB COMMENCE DEJE
    ========================================================
    */

  function province(){
    $data['title'] = "Ajout d'une province";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
    $this->load->view('backend/admin/province', $data);

  }

  function ville(){
    $data['title']="Ajout des villes et chefs lieu de provinces";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
    $data['provinces'] = $this->crud_model->fetch_province(); 
    $this->load->view('backend/admin/ville', $data);
  }

  function contrat(){
    $data['title']="Ajout d'un type de contrat";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
    $this->load->view('backend/admin/contrat', $data);
  }

  function pays(){
    $data['title']="Ajout d'un pays au système";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
    $this->load->view('backend/admin/pays', $data);
  }

  function category_entreprise(){
    $data['title']="Ajout d'une catégorie d'entreprise";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
    $this->load->view('backend/admin/category_entreprise', $data);
  }

  function calification(){
    $data['title']="Ajout d'une calification pour l'emploi";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
    $this->load->view('backend/admin/calification', $data);
  }

  function competense(){
    $data['title']="Ajout d'une compétense pour les emplois";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
    $this->load->view('backend/admin/competense', $data);
  }

  function salaire(){
    $data['title']="Ajout d'un salaire pour  l'emplois";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
    $this->load->view('backend/admin/salaire', $data);
  }

  function service(){
    $data['title']="Ajout d'un service au système";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
    $this->load->view('backend/admin/service', $data);
  }


  function show_services(){
     return $donnee = $this->crud_model->show_services();
  }

  function paquet(){
    $data['title']="Ajout d'un paquet des offres au système";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
    $data['services'] = $this->show_services();
    $this->load->view('backend/admin/paquet', $data);
  }

  /*

  UTILISATION DE PORTAIL JOB
  MES SCRIPTS JOB COMMENCE DEJE
  ========================================================
  */

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
      $this->load->view('backend/admin/detail_job', $data);

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
      $this->load->view('backend/admin/reply_to_our_job', $data);

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

      $ceo = $this->crud_model->get_ceo_info_entreprise_tag_code($codejob);
      // if ($ceo != $this->connected) {
      //   # code...
      //   $this->session->set_flashdata('message2', 'ta manière de hqcking est vraiment vas! désolé pour toi fenaint');
      //   redirect('entreprise/mes_job_publier','refresh');
      // }

      $data['category'] = $this->crud_model->fetch_category_register();
        // $this->load->view('backend/user/viewx', $data);
      $this->load->view('backend/admin/edit_new_job', $data);

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
        $this->load->view('backend/admin/user_tag', $data);
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
      $this->load->view('backend/admin/offres_emplois', $data);
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
      $this->load->view('backend/admin/candidats', $data);
    }


function paiement_pading(){

      $data['title']="Paiement en attente de validation";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      $data['padding'] = $this->crud_model->fetch_padding_paiement();
      // $this->load->view('backend/admin/viewx', $data);
      $this->load->view('backend/admin/paiement_pading', $data);
}

function paiement_normale(){

      $data['title']="Paiement en attente de validation";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      $data['padding'] = $this->crud_model->fetch_normal_paiement();
      // $this->load->view('backend/admin/viewx', $data);
      $this->load->view('backend/admin/paiement_normale', $data);
}


	function profile(){
      $data['title']="mon profile admin";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      // $this->load->view('backend/admin/viewx', $data);
      $this->load->view('backend/admin/profile', $data);
    }

    function basic(){
        $data['title']="Information basique de mon compte";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/admin/basic', $data);
    }

    function basic_image(){
        $data['title']="Information basique de ma photo";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/admin/basic_image', $data);
    }

    function basic_secure(){
        $data['title']="Paramètrage de sécurité de mon compte";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/admin/basic_secure', $data);
    }

    function notification($param1=''){
      $data['title']    ="Listes des formations";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
      $data['users']    = $this->crud_model->fetch_connected($this->connected);
      $this->load->view('backend/admin/notification', $data);
    }

	function role(){
		$data['title']="Paramétrage  privilège  au système";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		$this->load->view('backend/admin/role', $data);		
	}

	function site(){
		$data['title']="Paramétrage  du site";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		$this->load->view('backend/admin/site', $data);		
	}

  function publicity_view(){
    $data['title']="Paramétrage  des publicités";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
    $this->load->view('backend/admin/publicite_view', $data);   
  }

  function publicity_personnele(){
    $data['title']="Paramétrage  des publicités";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
    $this->load->view('backend/admin/publicity_personnele', $data);   
  }

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

  function download_photo_galery()
   {
      if($this->input->post('images'))
      {
        $this->load->library('zip');
        $images = $this->input->post('images');
        foreach($images as $image)
        {
          $this->zip->read_file($image);
          // echo($image);
        }
        $this->zip->download(''.time().'.zip');
      }
   }


	function category(){
		$data['title']="Paramétrage  des categories d'informations ";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		$this->load->view('backend/admin/category', $data);	
	}

	function video(){
		$data['title']="Nos vidéos";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		$data['videos']  = $this->crud_model->Select_videos();  
		$this->load->view('backend/admin/video', $data);	
	}

  function maison(){
    $data['title']="Paramétrage  de maison à louer";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
    $data['maisons']  = $this->crud_model->Select_maison();  
    $this->load->view('backend/admin/maison', $data);  
  }

  function offre(){
    $data['title']="Paramétrage  des offres d'emploie";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
    $data['offres']  = $this->crud_model->Select_offre();  
    $this->load->view('backend/admin/offre', $data); 
  }

  function appel_offre(){
    $data['title']="Paramétrage  des appels d'offres";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
    $data['appels']  = $this->crud_model->Select_appel_offre();  
    $this->load->view('backend/admin/appel_offre', $data); 
  }

	function article(){
		$data['title']="Paramétrage  des articles et publication";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		$data['videos']  = $this->crud_model->Select_videos(); 
		$data['articles']  		= $this->crud_model->Select_articles();
		$data['categories']  	= $this->crud_model->Select_category();

		$this->load->view('backend/admin/article', $data);	
	}

  function publicite(){
    $data['title']        ="Paramétrage  des publicités de publication";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
    $data['videos']       = $this->crud_model->Select_videos(); 
    $data['articles']     = $this->crud_model->Select_articles();
    $data['categories']   = $this->crud_model->Select_category();

    $this->load->view('backend/admin/publicite', $data);  
  }

  function stat_users(){
    $data['title']="Statistique sur nos utilisateurs";
     $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
    $data['nombre_users']   = $this->crud_model->statistiques_nombre("users");
    $data['nombre_users_m'] = $this->crud_model->statistiques_nombre_where("users","sexe","M");
    $data['nombre_users_f'] = $this->crud_model->statistiques_nombre_where("users","sexe","F");
    $data['nombre_users_a'] = $this->crud_model->statistiques_nombre_where_null("users","sexe","NULL");
    $this->load->view('backend/admin/stat_users', $data);
  }

  function stat_pub(){
    $data['title']="Statistique sur publication";
     $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
    $this->load->view('backend/admin/stat_pub', $data);
  }

  function padding_article(){
      $data['title']        ="Paramétrage  des articles et publication";
       $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
      $data['videos']       = $this->crud_model->Select_videos(); 
      $data['articles']     = $this->crud_model->Select_padding_articles2();
      $data['categories']   = $this->crud_model->Select_category();
      $this->load->view('backend/admin/padding_article', $data);
  }

  function contact_info(){
    $data['title']="Les informations de contact";
     $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
    $this->load->view('backend/admin/contact_info', $data);
  }

  

	// script pour la sauvegarge de données 
    function database($param1 = '', $param2 = '')
    {
        
        if($param1 == 'restore')
        {
            // $this->crud_model->import_db();
            $this->session->set_flashdata('message',"Importation de la base des données avec succès!!!");
            redirect(base_url() . 'admin/database/', 'refresh');
        }
        if($param1 == 'create')
        {
          $this->crud_model->create_backup();
          $this->session->set_flashdata('message',"Sauvegarde de la base des données avec succès!!!");
          redirect(base_url() . 'admin/database/', 'refresh');
        }

        $data['title'] = "Sauvegarde et restauration de la base des données";
         $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/admin/database', $data);
    }
    // fin script sauvegarde des données 

    function dashbord(){
	    $data['title']="Tableau de bord admin";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      $data['nombre_users']   = $this->crud_model->statistiques_nombre("users");
      $data['nombre_article'] = $this->crud_model->statistiques_nombre("article");
      $data['nombre_padding_article'] = $this->crud_model->statistiques_nombre("padding_article");
     
			$this->load->view('backend/admin/dashbord', $data);
			
	}

	function users(){
      $data['title']="Nos utilisateurs";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
      $data['nombre_users']   = $this->crud_model->statistiques_nombre("users");
      $data['nombre_users_m'] = $this->crud_model->statistiques_nombre_where("users","sexe","M");
      $data['nombre_users_f'] = $this->crud_model->statistiques_nombre_where("users","sexe","F");
      $data['nombre_users_a'] = $this->crud_model->statistiques_nombre_where_null("users","sexe","NULL");
      $data['users']  = $this->crud_model->Select_users();   
      $data['roles']  = $this->crud_model->Select_roles();    
      $this->load->view('backend/admin/users', $data);
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
            'sexe'          => $this->input->post('sexe'),
            'email'         => $this->input->post('mail_ok'), 

            'facebook'        => $this->input->post('facebook'),
            'linkedin'        => $this->input->post('linkedin'),
            'twitter'         => $this->input->post('twitter')
        );

        $id_user= $this->connected;
        $query = $this->crud_model->update_crud($id_user, $data);
        $this->session->set_flashdata('message', 'votre profile a été mis à jour avec succès!!!🆗');
         redirect('admin/basic', 'refresh');
      }

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
           redirect('admin/basic_image', 'refresh');
     }
     else{

        $this->session->set_flashdata('message2', 'Veillez selectionner la photo');
        redirect('admin/basic_image', 'refresh');

     }
     
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
                   redirect('admin/basic_secure', 'refresh');

               }
               else{
   
                $this->session->set_flashdata('message2', 'les deux mot de passe doivent être identiques');
                redirect('admin/basic_secure', 'refresh');
               }
         
          }

       }
       else{

          $this->session->set_flashdata('message2', 'information incorecte');
          redirect('admin/basic_secure', 'refresh');
       }
     
  } 

  function view_1($param1='', $param2='', $param3=''){
      
	  if($param1=='display_delete') {
	  	$this->session->set_flashdata('message', 'suppression avec succès ');
	    $query = $this->crud_model->delete_notifacation_tag($param2);
	    redirect('admin/notification');
	  }

	  if($param1=='display_delete_message') {

	    $query = $this->crud_model->delete_message_tag($param3);
	    redirect('admin/message/'.$param2);
	  }
	  else{

	  }

  }

  // script des utilisateurs 
      function fetch_users(){  

           $fetch_data = $this->crud_model->make_datatables_users();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = '<img src="'.base_url().'upload/photo/'.$row->image.'" class="table-user-thumb" width="50" height="35" />';  
                $sub_array[] = nl2br(substr($row->first_name, 0,50)).'...';  
                $sub_array[] = nl2br(substr($row->last_name, 0,50)).'...'; 

                $sub_array[] = nl2br(substr($row->sexe, 0,50)).'';

                $sub_array[] = nl2br(substr($row->email, 0,50));

                $sub_array[] = nl2br(substr($row->telephone, 0,50));
                $sub_array[] = nl2br(substr($row->id.'_/'.$row->image, 0,10));

                
 
                $sub_array[] = '<button type="button" name="update" id="'.$row->id.'" class="btn btn-warning btn-icon update"><i class="fa fa-edit"></i></button>'; 

                $sub_array[] = '<button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-icon delete"><i class="fa fa-trash"></i></button>';
                
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_users(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_users(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function operation_users(){

          if($_FILES["user_image"]["size"] > 0)  
          {  
               $insert_data = array(  
                   'first_name'     =>     $this->input->post('first_name'),  
                   'last_name'      =>     $this->input->post("last_name"),
                   'email'          =>     $this->input->post("email"),
                   'telephone'      =>     $this->input->post("telephone"),
                   'full_adresse'   =>     $this->input->post("full_adresse"),
                   'date_nais'      =>     $this->input->post("date_nais"), 
                   'idrole'         =>     $this->input->post("idrole"),
                   'sexe'           =>     $this->input->post("sexe"),
                   'facebook'       =>     $this->input->post("facebook"),
                   'twitter'        =>     $this->input->post("twitter"),
                   'linkedin'       =>     $this->input->post("linkedin"),
                   'passwords'      =>     md5(123456),
                   'image'          =>     $this->upload_image_users()
                );    
          }  
          else  
          {  
                 $user_image = "icone-user.png";  
                 $insert_data = array(  
                   'first_name'     =>     $this->input->post('first_name'),  
                   'last_name'      =>     $this->input->post("last_name"),
                   'email'          =>     $this->input->post("email"),
                   'telephone'      =>     $this->input->post("telephone"),
                   'full_adresse'   =>     $this->input->post("full_adresse"),
                   'date_nais'      =>     $this->input->post("date_nais"), 
                   'idrole'         =>     $this->input->post("idrole"),
                   'sexe'           =>     $this->input->post("sexe"),
                   'facebook'       =>     $this->input->post("facebook"),
                   'twitter'        =>     $this->input->post("twitter"),
                   'linkedin'       =>     $this->input->post("linkedin"),
                   'image'          =>     $user_image
                );   
          }

        $requete=$this->crud_model->insert_users($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_users(){

          if($_FILES["user_image"]["size"] > 0)  
          {  
               $updated_data = array(  
                   'first_name'     =>     $this->input->post('first_name'),  
                   'last_name'      =>     $this->input->post("last_name"),
                   'email'          =>     $this->input->post("email"),
                   'telephone'      =>     $this->input->post("telephone"),
                   'full_adresse'   =>     $this->input->post("full_adresse"),
                   'date_nais'      =>     $this->input->post("date_nais"), 
                   'sexe'           =>     $this->input->post("sexe"),
                   'facebook'       =>     $this->input->post("facebook"),
                   'twitter'        =>     $this->input->post("twitter"),
                   'linkedin'       =>     $this->input->post("linkedin"),
                   'image'          =>     $this->upload_image_users()
                );    
          }  
          
          else  
          {   
               $updated_data = array(  
                   'first_name'     =>     $this->input->post('first_name'),  
                   'last_name'      =>     $this->input->post("last_name"),
                   'email'          =>     $this->input->post("email"),
                   'telephone'      =>     $this->input->post("telephone"),
                   'full_adresse'   =>     $this->input->post("full_adresse"),
                   'date_nais'      =>     $this->input->post("date_nais"), 
                   'sexe'           =>     $this->input->post("sexe"),
                   'facebook'       =>     $this->input->post("facebook"),
                   'twitter'        =>     $this->input->post("twitter"),
                   'linkedin'       =>     $this->input->post("linkedin")
                );   
          }
  
          
          $this->crud_model->update_users($this->input->post("id"), $updated_data);

          echo("modification avec succès");
      }

      function supression_users(){
 
          $this->crud_model->delete_users($this->input->post("id"));
          echo("suppression avec succès");
        
      }

      function fetch_single_users()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_users($this->input->post('id'));  
           foreach($data as $row)  
           {  
                $output['first_name'] = $row->first_name;  
                $output['last_name'] = $row->last_name; 

                $output['email'] = $row->email;
                $output['telephone'] = $row->telephone;
                $output['full_adresse'] = $row->full_adresse;
                $output['biographie'] = $row->biographie;
                $output['date_nais'] = $row->date_nais;
                $output['sexe'] = $row->sexe;
                $output['idrole'] = $row->idrole;

                $output['facebook'] = $row->facebook;
                $output['linkedin'] = $row->linkedin;
                $output['twitter'] = $row->twitter;
                $output['image'] = $row->image;

                if($row->image != '')  
                {  
                     $output['user_image'] = '<img src="'.base_url().'upload/photo/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
                }  
                else  
                {  
                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }  

                
           }  
           echo json_encode($output);  
      }

      // fun script utilisateurs 

      // script de role
      function fetch_role(){  

           $fetch_data = $this->crud_model->make_datatables_role();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
               
                $sub_array[] = nl2br(substr($row->nom, 0,50)); 
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
               
 
                $sub_array[] = '<button type="button" name="update" idrole="'.$row->idrole.'" class="btn btn-secondary btn-icon update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idrole="'.$row->idrole.'" class="btn btn-danger btn-icon delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_role(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_role(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_role()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_role($_POST["idrole"]);  
           foreach($data as $row)  
           {  
                $output['nom'] 		= $row->nom;  
                
               
           }  
           echo json_encode($output);  
      }  


      function operation_role(){

          $insert_data = array(  
	           'nom'           	=>     $this->input->post('nom')
		  );  

	      $requete=$this->crud_model->insert_role($insert_data);
	      echo("Ajout information avec succès");
	      
      }

      function modification_role(){
  
          $updated_data = array(  
	           'nom'           	=>     $this->input->post('nom')
		  );
  
          $this->crud_model->update_role($this->input->post("idrole"), $updated_data);

          echo("modification avec succès");
      }

      function supression_role(){
 
          $this->crud_model->delete_role($this->input->post("idrole"));
          echo("suppression avec succès");
        
      }

       // script de tbl_info
    function fetch_tbl_info(){  

           $fetch_data = $this->crud_model->make_datatables_tbl_info();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = '<img src="'.base_url().'upload/tbl_info/'.$row->icone.'" class="img-thumbnail" width="50" height="35" />';  
                $sub_array[] = nl2br(substr($row->nom_site, 0,10)).'...'; 
                $sub_array[] = nl2br(substr($row->email, 0,10)).'...';  
                $sub_array[] = nl2br(substr($row->tel1, 0,10)).'...'; 
                // $sub_array[] = nl2br(substr($row->tel2, 0,5)).'...'; 
                $sub_array[] = nl2br(substr($row->adresse, 0,10)).'...'; 
                $sub_array[] = nl2br(substr($row->facebook, 0,10)).'...'; 
                $sub_array[] = nl2br(substr($row->twitter, 0,10)).'...'; 
                $sub_array[] = nl2br(substr($row->linkedin, 0,10)).'...'; 
                // $sub_array[] = nl2br(substr($row->termes, 0,10)).'...'; 
                // $sub_array[] = nl2br(substr($row->confidentialite, 0,10)).'...'; 
                
 
                $sub_array[] = '<button type="button" name="update" idinfo="'.$row->idinfo.'" class="btn btn-warning btn-icon update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idinfo="'.$row->idinfo.'" class="btn btn-danger btn-icon delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_tbl_info(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tbl_info(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_tbl_info()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_tbl_info($_POST["idinfo"]);  
           foreach($data as $row)  
           {  
                $output['nom_site']     = $row->nom_site;  
                $output['adresse']      = $row->adresse; 
                $output['tel1']       = $row->tel1; 
                $output['tel2']       = $row->tel2; 
                $output['email']      = $row->email; 
                $output['facebook']     = $row->facebook; 
                $output['twitter']      = $row->twitter; 
                $output['linkedin']     = $row->linkedin;

                $output['termes']       = $row->termes;
                $output['confidentialite']  = $row->confidentialite;

                $output['description']   = $row->description;
                $output['mission']       = $row->mission;
                $output['objectif']      = $row->objectif;
                $output['blog']      = $row->blog;


                if($row->icone != '')  
                {  
                     $output['user_image'] = '<img src="'.base_url().'upload/tbl_info/'.$row->icone.'" class="img-thumbnail" width="70" height="70" /><input type="hidden" name="hidden_user_image" value="'.$row->icone.'" />';  
                }  
                else  
                {  
                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }  
           }  
           echo json_encode($output);  
      }  


      function operation_tbl_info(){


          if($_FILES["user_image"]["size"] > 0)  
          {  
               $insert_data = array(  
               'nom_site'             =>     $this->input->post('nom_site'),  
               'tel1'               =>     $this->input->post("tel1"), 
               'tel2'                 =>     $this->input->post('tel2'), 
               'adresse'              =>     $this->input->post("adresse"), 
               'facebook'             =>     $this->input->post("facebook"), 
               'twitter'              =>     $this->input->post("twitter"),
               'linkedin'             =>     $this->input->post("linkedin"), 
               'email'              =>     $this->input->post("email"),
               'termes'               =>     $this->input->post("termes"),
               'confidentialite'        =>     $this->input->post("confidentialite"), 
               'description'        =>     $this->input->post("description"), 
               'mission'            =>     $this->input->post("mission"), 
               'objectif'           =>     $this->input->post("objectif"),
               'blog'               =>     $this->input->post("blog"), 
               'icone'              =>     $this->upload_image_tbl_info()
          );    
          }  
          else  
          {  
               $user_image = "icone-user.png";  
               $insert_data = array(  
               'nom_site'             =>     $this->input->post('nom_site'),  
               'tel1'               =>     $this->input->post("tel1"), 
               'tel2'                 =>     $this->input->post('tel2'), 
               'adresse'              =>     $this->input->post("adresse"), 
               'facebook'             =>     $this->input->post("facebook"), 
               'twitter'              =>     $this->input->post("twitter"),
               'linkedin'             =>     $this->input->post("linkedin"), 
               'email'              =>     $this->input->post("email"),
               'termes'               =>     $this->input->post("termes"),
               'confidentialite'        =>     $this->input->post("confidentialite"), 
               'description'        =>     $this->input->post("description"), 
               'mission'            =>     $this->input->post("mission"), 
               'objectif'           =>     $this->input->post("objectif"), 
               'blog'               =>     $this->input->post("blog"),
               'icone'                  =>     $user_image
          );   
          }

        
         
        $requete=$this->crud_model->insert_tbl_info($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_tbl_info(){
  
          if($_FILES["user_image"]["size"] > 0)  
          {  
               $updated_data = array(  
               'nom_site'             =>     $this->input->post('nom_site'),  
               'tel1'               =>     $this->input->post("tel1"), 
               'tel2'                 =>     $this->input->post('tel2'), 
               'adresse'              =>     $this->input->post("adresse"), 
               'facebook'             =>     $this->input->post("facebook"), 
               'twitter'              =>     $this->input->post("twitter"),
               'linkedin'             =>     $this->input->post("linkedin"), 
               'email'              =>     $this->input->post("email"),
               'termes'               =>     $this->input->post("termes"),
               'confidentialite'        =>     $this->input->post("confidentialite"), 
               'description'        =>     $this->input->post("description"), 
               'mission'            =>     $this->input->post("mission"), 
               'objectif'           =>     $this->input->post("objectif"),
               'blog'               =>     $this->input->post("blog"), 
               'icone'                  =>     $this->upload_image_tbl_info()
          );    
          }  
          else  
          {  
               $updated_data = array(  
               'nom_site'             =>     $this->input->post('nom_site'),  
               'tel1'               =>     $this->input->post("tel1"), 
               'tel2'                 =>     $this->input->post('tel2'), 
               'adresse'              =>     $this->input->post("adresse"), 
               'facebook'             =>     $this->input->post("facebook"), 
               'twitter'              =>     $this->input->post("twitter"),
               'linkedin'             =>     $this->input->post("linkedin"), 
               'email'              =>     $this->input->post("email"),
               'termes'               =>     $this->input->post("termes"),
               'description'        =>     $this->input->post("description"), 
               'mission'            =>     $this->input->post("mission"), 
               'objectif'           =>     $this->input->post("objectif"), 
               'blog'               =>     $this->input->post("blog"),
               'confidentialite'        =>     $this->input->post("confidentialite")
          );    
          }
  
          $this->crud_model->update_tbl_info($this->input->post("idinfo"), $updated_data);

          echo("modification avec succès");
      }

      


      function supression_tbl_info(){
 
          $this->crud_model->delete_tbl_info($this->input->post("idinfo"));

          echo("suppression avec succès");
        
      }

      // fin script tbl_info

       // script de category
    function fetch_category_info(){  

       $fetch_data = $this->crud_model->make_datatables_category_info();  
       $data = array();  
       foreach($fetch_data as $row)  
       {  
            $sub_array = array();  
           
            $sub_array[] = nl2br(substr($row->nom, 0,50)); 
            $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
           

            $sub_array[] = '<button type="button" name="update" idcat="'.$row->idcat.'" class="btn btn-icon btn-secondary update"><i class="fa fa-edit"></i></button>';  
            $sub_array[] = '<button type="button" name="delete" idcat="'.$row->idcat.'" class="btn btn-icon btn-danger delete"><i class="fa fa-trash"></i></button>';  
            $data[] = $sub_array;  
       }  
       $output = array(  
            "draw"                =>     intval($_POST["draw"]),  
            "recordsTotal"        =>     $this->crud_model->get_all_data_category_info(),  
            "recordsFiltered"     =>     $this->crud_model->get_filtered_data_category_info(),  
            "data"                =>     $data  
       );  
       echo json_encode($output);  
		  }

		  function fetch_single_category_info()  
		  {  
		       $output = array();  
		       $data = $this->crud_model->fetch_single_category_info($_POST["idcat"]);  
		       foreach($data as $row)  
		       {  
		            $output['nom'] 		= $row->nom;  
		            
		           
		       }  
		       echo json_encode($output);  
		  }  


		  function operation_category_info(){

		      $insert_data = array(  
		           'nom'           	=>     $this->input->post('nom')
			  );  

		      $requete=$this->crud_model->insert_category_info($insert_data);
		      echo("Ajout information avec succès");
		      
		  }

		  function modification_category_info(){

		      $updated_data = array(  
		           'nom'           	=>     $this->input->post('nom')
			  );

		      $this->crud_model->update_category_info($this->input->post("idcat"), $updated_data);

		      echo("modification avec succès");
		  }

		  function supression_category_info(){

		      $this->crud_model->delete_category_info($this->input->post("idcat"));
		      echo("suppression avec succès");
		    
		  }

  // fin de sript category 

		  // script de video
      function fetch_video(){  

           $fetch_data = $this->crud_model->make_datatables_video();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = '<img src="'.base_url().'upload/video/'.$row->image.'" class="table-user-thumb" />';  
                $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
                $sub_array[] = nl2br(substr($row->description, 0,20)).'...'; 

                $sub_array[] = nl2br(substr($row->lien, 0,20)).'';

                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

               
                $sub_array[] = '<button type="button" name="update" idv="'.$row->idv.'" class="btn btn-secondary btn-icon update"><i class="fa fa-edit"></i></button>'; 

                $sub_array[] = '<button type="button" name="delete" idv="'.$row->idv.'" class="btn btn-danger btn-icon delete"><i class="fa fa-trash"></i></button>';
                
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_video(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_video(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function operation_video(){

          if($_FILES["user_image"]["size"] > 0)  
          {  
               $insert_data = array(  
                   'nom'     							=>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description"),
                   'lien'           =>     $this->input->post("lien"),
                   'image'          =>     $this->upload_image_video()
                );    
          }  
          else  
          {  
                 $user_image = "icone-user.png";  
                 $insert_data = array(  
                   'nom'     							=>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description"),
                   'lien'           =>     $this->input->post("lien"),
                   'image'          =>     $user_image
                );   
          }

        $requete=$this->crud_model->insert_video($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_video(){

          if($_FILES["user_image"]["size"] > 0)  
          {  
               $updated_data = array(  
                   'nom'     							=>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description"),
                   'lien'           =>     $this->input->post("lien"),
                   'image'          =>     $this->upload_image_video()
                );    
          }  
          
          else  
          {   
               $updated_data = array(  
                   'nom'     							=>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description"),
                   'lien'           =>     $this->input->post("lien")
                );   
          }
  
          
          $this->crud_model->update_video($this->input->post("idv"), $updated_data);

          echo("modification avec succès");
      }

      function supression_video(){
 
          $this->crud_model->delete_video($this->input->post("idv"));
          echo("suppression avec succès");
        
      }

      function fetch_single_video()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_video($this->input->post('idv'));  
           foreach($data as $row)  
           {  
                $output['nom'] = $row->nom;  
                $output['description'] = $row->description; 

                $output['lien'] = $row->lien;
                
                $output['image'] = $row->image;

                if($row->image != '')  
                {  
                     $output['user_image'] = '<img src="'.base_url().'upload/video/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
                }  
                else  
                {  
                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }  

                
           }  
           echo json_encode($output);  
      }

  // fin de sript video 


    // script de article
      function fetch_article(){  

           $fetch_data = $this->crud_model->make_datatables_article();  
           $data = array();  
           $etat = '';
           foreach($fetch_data as $row)  
           {  
                $sub_array = array(); 

                if ($row->type=='texte') {
                	$etat = '
                <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                    <span><i class="fa fa-file" ></i></span>
                </div>
                 ';
                }
                elseif ($row->type=='video'){
                	$etat = '
		                <div class="user-avatar bg-dim-danger d-none d-sm-flex">
		                    <span><i class="fa fa-video-camera"></i></span>
		                </div>
		            ';
                }
                else{

                	$etat = '';
                }


                $sub_array[] = $etat;
               
                // $sub_array[] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35" />';  
                $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
                $sub_array[] = nl2br(substr($row->description, 0,10)).'...'; 

                $sub_array[] = nl2br(substr($row->nom_cat, 0,15)).' ...';

                $sub_array[] = nl2br(substr($row->type, 0,15)).'';

                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

               
                $sub_array[] = '<button type="button" name="update" idart="'.$row->idart.'" class="btn btn-secondary btn-icon update"><i class="fa fa-edit"></i></button>'; 

                $sub_array[] = '<button type="button" name="delete" idart="'.$row->idart.'" class="btn btn-danger btn-icon delete"><i class="fa fa-trash"></i></button>';
                
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_article(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_article(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }


      function fetch_article_pub(){  

           $fetch_data = $this->crud_model->make_datatables_article();  
           $data = array();  
           $etat = '';
           foreach($fetch_data as $row)  
           {  
                $sub_array = array(); 

                if ($row->type=='texte') {
                  $etat = '
                <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                    <span><i class="fa fa-file" ></i></span>
                </div>
                 ';
                }
                elseif ($row->type=='video'){
                  $etat = '
                    <div class="user-avatar bg-dim-danger d-none d-sm-flex">
                        <span><i class="fa fa-video-camera"></i></span>
                    </div>
                ';
                }
                else{

                  $etat = '';
                }


                $sub_array[] = '<input type="checkbox" class="delete_checkbox" value="'.$row->idart.'" id="delete_checkbox" />'; 

                // $sub_array[] = $etat;
               
                $sub_array[] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35" />';  
                $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
                $sub_array[] = nl2br(substr($row->description, 0,10)).'...'; 

                $sub_array[] = nl2br(substr($row->nom_cat, 0,15)).' ...';

                $sub_array[] = nl2br(substr($row->type, 0,15)).'';

                // $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

               
                $sub_array[] = '<button type="button" name="update" idart="'.$row->idart.'" class="btn btn-warning btn-icon update"><i class="fa fa-edit"></i></button>'; 

                $sub_array[] = '<button type="button" name="delete" idart="'.$row->idart.'" class="btn btn-danger btn-icon delete"><i class="fa fa-trash"></i></button>';
                
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_article(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_article(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }



      function operation_article(){

          if($_FILES["user_image"]["size"] > 0)  
          {  
               $insert_data = array(  
                   'nom'     	      =>     $this->input->post('nom'),  
                   'description'    =>     htmlspecialchars($this->input->post("description")),
                   'lien'           =>     $this->input->post("lien"),
                   'idcat'     	    =>     $this->input->post('idcat'), 
                   'type'     	    =>     $this->input->post('type'), 
                   'image'          =>     $this->upload_image_article()
                );    
          }  
          else  
          {  
                 $user_image = "icone-user.png";  
                 $insert_data = array(  
                   'nom'     	      =>     $this->input->post('nom'),  
                   'description'    =>     htmlspecialchars($this->input->post("description")),
                   'lien'           =>     $this->input->post("lien"),
                   'idcat'     	    =>     $this->input->post('idcat'), 
                   'type'     	    =>     $this->input->post('type'),
                   'image'          =>     $user_image
                );   
          }

        $requete=$this->crud_model->insert_article($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_article(){

          if($_FILES["user_image"]["size"] > 0)  
          {  
               $updated_data = array(  
                   'nom'     	      =>     $this->input->post('nom'),  
                   'description'    =>     htmlspecialchars($this->input->post("description")),
                   'lien'           =>     $this->input->post("lien"),
                   'idcat'     	    =>     $this->input->post('idcat'), 
                   'type'     	    =>     $this->input->post('type'), 
                   'image'          =>     $this->upload_image_article()
                );    
          }  
          
          else  
          {   
               $updated_data = array(  
                   'nom'     	    =>     $this->input->post('nom'),  
                   'description'    =>     htmlspecialchars($this->input->post("description")),
                   'lien'           =>     $this->input->post("lien"),
                   'idcat'     	    =>     $this->input->post('idcat'), 
                   'type'     	    =>     $this->input->post('type')
                );   
          }
  
          
          $this->crud_model->update_article($this->input->post("idart"), $updated_data);

          echo("modification avec succès");
      }

      function supression_article(){
 
          $this->crud_model->delete_article($this->input->post("idart"));
          echo("suppression avec succès");
        
      }

      function fetch_single_article()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_article($this->input->post('idart'));  
           foreach($data as $row)  
           {  
                $output['nom'] = $row->nom;  
                $output['description'] = $row->description; 

                $output['lien'] 	= $row->lien;
                $output['type'] 	= $row->type;
                $output['idcat'] 	= $row->idcat;
                
                $output['image'] 	= $row->image;
                $output['text_description']   ='
                  <textarea class="form-control textarea" name="description" id="description" placeholder="Parler un peu sur la description de l\'article">
                      '.$row->description.'
                  </textarea>
                ';


                if($row->image != '')  
                {  
                     $output['user_image'] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
                }  
                else  
                {  
                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }  

                
           }  
           echo json_encode($output);  
      }

  // fin de sript article 

      // script de maison
      function fetch_maison(){  

           $fetch_data = $this->crud_model->make_datatables_maison();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = '<img src="'.base_url().'upload/maison/'.$row->image.'" class="img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35" />';  
                $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
                $sub_array[] = nl2br(substr($row->description, 0,20)).'...'; 

                $sub_array[] = nl2br(substr($row->adresse, 0,20)).'';

                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

               
                $sub_array[] = '<button type="button" name="update" idm="'.$row->idm.'" class="btn btn-warning btn-sm update"><i class="fa fa-edit"></i></button>'; 

                $sub_array[] = '<button type="button" name="delete" idm="'.$row->idm.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>';
                
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_maison(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_maison(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function operation_maison(){

          if($_FILES["user_image"]["size"] > 0)  
          {  
               $insert_data = array(  
                   'nom'            =>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description"),
                   'adresse'        =>     $this->input->post("adresse"),
                   'auteur'         =>     $this->input->post("auteur"),
                   'telephone'      =>     $this->input->post("telephone"),
                   'image'          =>     $this->upload_image_maison()
                );    
          }  
          else  
          {  
                 $user_image = "icone-user.png";  
                 $insert_data = array(  
                   'nom'            =>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description"),
                   'adresse'        =>     $this->input->post("adresse"),
                   'auteur'         =>     $this->input->post("auteur"),
                   'telephone'      =>     $this->input->post("telephone"),
                   'image'          =>     $user_image
                );   
          }

        $requete=$this->crud_model->insert_maison($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_maison(){

          if($_FILES["user_image"]["size"] > 0)  
          {  
               $updated_data = array(  
                   'nom'            =>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description"),
                   'adresse'        =>     $this->input->post("adresse"),
                   'auteur'         =>     $this->input->post("auteur"),
                   'telephone'      =>     $this->input->post("telephone"),
                   'image'          =>     $this->upload_image_maison()
                );    
          }  
          
          else  
          {   
               $updated_data = array(  
                   'nom'              =>     $this->input->post('nom'),  
                   'description'      =>     $this->input->post("description"),
                   'auteur'         =>     $this->input->post("auteur"),
                   'telephone'      =>     $this->input->post("telephone"),
                   'adresse'          =>     $this->input->post("adresse")
                );   
          }
  
          
          $this->crud_model->update_maison($this->input->post("idm"), $updated_data);

          echo("modification avec succès");
      }

      function supression_maison(){
 
          $this->crud_model->delete_maison($this->input->post("idm"));
          echo("suppression avec succès");
        
      }

      function fetch_single_maison()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_maison($this->input->post('idm'));  
           foreach($data as $row)  
           {  
                $output['nom'] = $row->nom;  
                $output['description'] = $row->description; 

                $output['adresse'] = $row->adresse;

                $output['auteur']     = $row->auteur;
                $output['telephone']  = $row->telephone;
                
                $output['image'] = $row->image;

                if($row->image != '')  
                {  
                     $output['user_image'] = '<img src="'.base_url().'upload/maison/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
                }  
                else  
                {  
                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }  

                
           }  
           echo json_encode($output);  
      }

  // fin de sript maison 

      // script de offre
      function fetch_offre(){  

           $fetch_data = $this->crud_model->make_datatables_offre();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = '<img src="'.base_url().'upload/offre/'.$row->image.'" class="table-user-thumb" width="50" height="35" />';  
                $sub_array[] = nl2br(substr($row->societe.'-'.$row->nom, 0,20)).'...';  
                $sub_array[] = nl2br(substr($row->description, 0,20)).'...'; 

                $sub_array[] = '<a target="_blank" href="'.base_url().'upload/offre/'.$row->fichier.'" class="btn btn-primary btn-sm"><i class="fa fa-file"></i>&nbsp; le lire</a>';


                $sub_array[] = nl2br(substr($row->lieu, 0,20)).'';
                $sub_array[] = nl2br(substr($row->date_debit, 0,20)).'';
                $sub_array[] = nl2br(substr($row->date_fin, 0,20)).'';

                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

               
                $sub_array[] = '<button type="button" name="update" ido="'.$row->ido.'" class="btn btn-icon btn-secondary update"><i class="fa fa-edit"></i></button>'; 

                $sub_array[] = '<button type="button" name="delete" ido="'.$row->ido.'" class="btn btn-icon btn-danger delete"><i class="fa fa-trash"></i></button>';
                
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_offre(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_offre(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function operation_offre(){

          if($_FILES["user_image"]["size"] > 0 && $_FILES["user_image2"]["size"] > 0)  
          {  
               $insert_data = array(  
                   'nom'            =>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description"),
                   'image'          =>     $this->upload_image_offre(),
                   'fichier'        =>     $this->upload_image_offre2(),
                   'societe'        =>     $this->input->post('societe'),  
                   'date_debit'     =>     $this->input->post('date_debit'),  
                   'date_fin'       =>     $this->input->post('date_fin'),
                   'lieu'           =>     $this->input->post('lieu') 
                );    
          }  
          else  
          {  
                 $user_image = "icone-user.png";  
                 $insert_data = array(  
                   'nom'            =>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description"),
                   'image'          =>     $user_image,
                   'societe'        =>     $this->input->post('societe'),  
                   'date_debit'     =>     $this->input->post('date_debit'),  
                   'date_fin'       =>     $this->input->post('date_fin'),
                   'lieu'           =>     $this->input->post('lieu')
                );   
          }

        $requete=$this->crud_model->insert_offre($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_offre(){

          if($_FILES["user_image"]["size"] > 0 && $_FILES["user_image2"]["size"] > 0)  
          {  
               $updated_data = array(  
                   'nom'            =>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description"),
                   'image'          =>     $this->upload_image_offre(),
                   'fichier'        =>     $this->upload_image_offre2(),
                   'societe'        =>     $this->input->post('societe'),  
                   'date_debit'     =>     $this->input->post('date_debit'),  
                   'date_fin'       =>     $this->input->post('date_fin'),
                   'lieu'           =>     $this->input->post('lieu') 
                );    
          }
          elseif($_FILES["user_image"]["size"] > 0 && $_FILES["user_image2"]["size"] <= 0)  
          {  
               $updated_data = array(  
                   'nom'            =>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description"),
                   'image'          =>     $this->upload_image_offre(),
                   'societe'        =>     $this->input->post('societe'),  
                   'date_debit'     =>     $this->input->post('date_debit'),  
                   'date_fin'       =>     $this->input->post('date_fin'),
                   'lieu'           =>     $this->input->post('lieu') 
                );    
          } 

          elseif($_FILES["user_image2"]["size"] > 0 && $_FILES["user_image"]["size"] <= 0)  
          {  
               $updated_data = array(  
                   'nom'            =>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description"),
                   'fichier'        =>     $this->upload_image_offre2(),
                   'societe'        =>     $this->input->post('societe'),  
                   'date_debit'     =>     $this->input->post('date_debit'),  
                   'date_fin'       =>     $this->input->post('date_fin'),
                   'lieu'           =>     $this->input->post('lieu')
                );    
          } 

          elseif($_FILES["user_image2"]["size"] <= 0 && $_FILES["user_image"]["size"] <= 0)  
          {  
                $updated_data = array(  
                   'nom'              =>     $this->input->post('nom'),  
                   'description'      =>     $this->input->post("description"),
                   'societe'        =>     $this->input->post('societe'),  
                   'date_debit'     =>     $this->input->post('date_debit'),  
                   'date_fin'       =>     $this->input->post('date_fin'),
                   'lieu'           =>     $this->input->post('lieu') 
                );    
          } 
          else  
          {   
               $updated_data = array(  
                   'nom'              =>     $this->input->post('nom'),  
                   'description'      =>     $this->input->post("description"),
                   'societe'        =>     $this->input->post('societe'),  
                   'date_debit'     =>     $this->input->post('date_debit'),  
                   'date_fin'       =>     $this->input->post('date_fin'),
                   'lieu'           =>     $this->input->post('lieu') 
                );   
          }
  
          
          $this->crud_model->update_offre($this->input->post("ido"), $updated_data);

          echo("modification avec succès");
      }

      function supression_offre(){
 
          $this->crud_model->delete_offre($this->input->post("ido"));
          echo("suppression avec succès");
        
      }

      function fetch_single_offre()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_offre($this->input->post('ido'));  
           foreach($data as $row)  
           {  
                $output['nom'] = $row->nom;  
                $output['description']  = $row->description;
                $output['societe']      = $row->societe;  
                $output['date_debit']   = $row->date_debit;  
                $output['date_fin']     = $row->date_fin; 
                $output['lieu']         = $row->lieu;   
                
                $output['image'] = $row->image;


                if($row->image != '')  
                {  
                     $output['user_image'] = '<img src="'.base_url().'upload/offre/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
                }  
                else  
                {  
                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }  

                
           }  
           echo json_encode($output);  
      }

  // fin de sript offre

      // script de appel_offre
      function fetch_appel_offre(){  

           $fetch_data = $this->crud_model->make_datatables_appel_offre();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = '<img src="'.base_url().'upload/offre/'.$row->image.'" class="img-thumbnail user-avatar bg-dark  d-sm-flex" width="50" height="35" />';  
                $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
                $sub_array[] = nl2br(substr($row->description, 0,20)).'...'; 

                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

               
                $sub_array[] = '<button type="button" name="update" ida="'.$row->ida.'" class="btn btn-warning btn-sm update"><i class="fa fa-edit"></i></button>'; 

                $sub_array[] = '<button type="button" name="delete" ida="'.$row->ida.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>';
                
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_appel_offre(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_appel_offre(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function operation_appel_offre(){

          if($_FILES["user_image"]["size"] > 0)  
          {  
               $insert_data = array(  
                   'nom'            =>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description"),
                   'image'          =>     $this->upload_image_offre()
                );    
          }  
          else  
          {  
                 $user_image = "icone-user.png";  
                 $insert_data = array(  
                   'nom'            =>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description"),
                   'image'          =>     $user_image
                );   
          }

        $requete=$this->crud_model->insert_appel_offre($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_appel_offre(){

          if($_FILES["user_image"]["size"] > 0)  
          {  
               $updated_data = array(  
                   'nom'            =>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description"),
                   'image'          =>     $this->upload_image_offre()
                );    
          }  
          
          else  
          {   
               $updated_data = array(  
                   'nom'            =>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description")
                );   
          }
  
          
          $this->crud_model->update_appel_offre($this->input->post("ida"), $updated_data);

          echo("modification avec succès");
      }

      function supression_appel_offre(){
 
          $this->crud_model->delete_appel_offre($this->input->post("ida"));
          echo("suppression avec succès");
        
      }

      function fetch_single_appel_offre()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_appel_offre($this->input->post('ida'));  
           foreach($data as $row)  
           {  
                $output['nom'] = $row->nom;  
                $output['description'] = $row->description; 
                
                $output['image'] = $row->image;

                if($row->image != '')  
                {  
                     $output['user_image'] = '<img src="'.base_url().'upload/offre/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
                }  
                else  
                {  
                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }  

                
           }  
           echo json_encode($output);  
      }

  // fin de sript appel_offre 

       // script de publicite
      function fetch_publicite(){  

           $fetch_data = $this->crud_model->make_datatables_publicite();  
           $data = array();  
           $etat2 = '';
           $etat = '';
           foreach($fetch_data as $row)  
           {  
                $sub_array = array(); 

                if ($row->type=='texte') {
                  $etat2 = '
                <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                    <span><i class="fa fa-file" ></i></span>
                </div>
                 ';
                }
                elseif ($row->type=='video'){
                  $etat2 = '
                    <div class="user-avatar bg-dim-danger d-none d-sm-flex">
                        <span><i class="fa fa-video-camera"></i></span>
                    </div>
                ';
                }
                else{

                  $etat2 = '';
                }

                if ($row->etat == 1) {
                  $etat = '<a href="javascript:void(0);" type="button" name="pdf" idp="'.$row->idp.'" class="btn btn-success btn-xs desactiver"><i class="fa fa-check"></i> Activé</a>';
                }
                else{

                    $etat = '<a href="javascript:void(0);" type="button" name="pdf" idp="'.$row->idp.'" class="btn btn-danger btn-xs  activer"><i class="fa fa-close"></i> Desactivé</a>';
                }

                $sub_array[] = $etat2; 


               
               
                // $sub_array[] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35" />';  
                $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
                $sub_array[] = nl2br(substr($row->description, 0,10)).'...'; 

                $sub_array[] = nl2br(substr($row->nom_cat, 0,15)).' ...';

                $sub_array[] = nl2br(substr($row->type, 0,15)).'';

                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

               
                 $sub_array[] = $etat; 

                $sub_array[] = '<button type="button" name="delete2" idp="'.$row->idp.'" class="btn btn-danger btn-icon delete2"><i class="fa fa-trash"></i></button>';
                
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_publicite(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_publicite(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      

      function operation_publicite()
      {
          if($this->input->post('checkbox_value'))
          {
             $id = $this->input->post('checkbox_value');
             for($count = 0; $count < count($id); $count++)
             {
                $insert_data = array(  
                   'idart'    =>     $id[$count]  
                ); 
                $this->crud_model->insert_publicite($insert_data);
             }
             echo("suppression avec succès");
          }

      }

      function activation_publicite(){

          $updated_data = array(  
             'etat'  =>     1
          ); 

          $this->crud_model->update_publicite($this->input->post("idp"), $updated_data);
          echo("la publicité est activée avec succès 👌");
      }

      function desactivation_publicite(){

          $updated_data = array(  
             'etat'  =>     0
          ); 

          $this->crud_model->update_publicite($this->input->post("idp"), $updated_data);
          echo("🏧 la publicité est desactivée avec succès🏧");
      }

      
      function supression_publicite(){
 
          $this->crud_model->delete_publicite($this->input->post("idp"));
          echo("suppression avec succès");
        
      }
  // fin de sript publicite 

      // script de padding_article
      function fetch_padding_article(){  

           $fetch_data = $this->crud_model->make_datatables_padding_article();  
           $data = array();  
           $etat = '';
           foreach($fetch_data as $row)  
           {  
                $sub_array = array(); 

                if ($row->type=='texte') {
                  $etat = '
                <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                    <span><i class="fa fa-file" ></i></span>
                </div>
                 ';
                }
                elseif ($row->type=='video'){
                  $etat = '
                    <div class="user-avatar bg-dim-danger d-none d-sm-flex">
                        <span><i class="fa fa-video-camera"></i></span>
                    </div>
                ';
                }
                else{

                  $etat = '';
                }

                

                $sub_array[] = $etat;
               
                $sub_array[] = '<img src="'.base_url().'upload/photo/'.$row->photo.'" class="img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35" />';  
                $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
                $sub_array[] = nl2br(substr($row->description, 0,10)).'...'; 

                $sub_array[] = nl2br(substr($row->nom_cat, 0,15)).' ...';

                $sub_array[] = nl2br(substr($row->type, 0,15)).'';

                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

               
                $sub_array[] = '<button type="button" name="update" idart="'.$row->idart.'" class="btn btn-warning btn-sm update"><i class="fa fa-edit"></i></button>'; 

                $sub_array[] = '<button type="button" name="delete" idart="'.$row->idart.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>';
                
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_padding_article(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_padding_article(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }


      function fetch_article_pub_padding_article(){  

           $fetch_data = $this->crud_model->make_datatables_padding_article();  
           $data = array();  
           $etat = '';
           foreach($fetch_data as $row)  
           {  
                $sub_array = array(); 

                if ($row->type=='texte') {
                  $etat = '
                <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                    <span><i class="fa fa-file" ></i></span>
                </div>
                 ';
                }
                elseif ($row->type=='video'){
                  $etat = '
                    <div class="user-avatar bg-dim-danger d-none d-sm-flex">
                        <span><i class="fa fa-video-camera"></i></span>
                    </div>
                ';
                }
                else{

                  $etat = '';
                }


                $sub_array[] = '<input type="checkbox" class="form-control delete_checkbox" value="'.$row->idart.'" id="delete_checkbox" />'; 

                // $sub_array[] = $etat;
               
                $sub_array[] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35" />';
                $sub_array[] = '<img src="'.base_url().'upload/photo/'.$row->photo.'" class="img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35" />';  
                $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
                $sub_array[] = nl2br(substr($row->description, 0,10)).'...'; 

                $sub_array[] = nl2br(substr($row->nom_cat, 0,15)).' ...';

                $sub_array[] = nl2br(substr($row->type, 0,15)).'';

                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

               
                $sub_array[] = '<button type="button" name="update" idart="'.$row->idart.'" class="btn btn-warning btn-icon update"><i class="fa fa-edit"></i></button>'; 

                $sub_array[] = '<button type="button" name="delete" idart="'.$row->idart.'" class="btn btn-danger btn-icon delete"><i class="fa fa-trash"></i></button>';
                
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_padding_article(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_padding_article(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }



      function operation_padding_article(){

          if($_FILES["user_image"]["size"] > 0)  
          {  
               $insert_data = array(  
                   'nom'          =>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description"),
                   'lien'           =>     $this->input->post("lien"),
                   'idcat'          =>     $this->input->post('idcat'), 
                   'type'           =>     $this->input->post('type'), 
                   'id_user'        =>     $this->connected, 
                   'image'          =>     $this->upload_image_article()
                );    
          }  
          else  
          {  
                 $user_image = "icone-user.png";  
                 $insert_data = array(  
                   'nom'          =>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description"),
                   'lien'           =>     $this->input->post("lien"),
                   'idcat'          =>     $this->input->post('idcat'), 
                   'type'           =>     $this->input->post('type'),
                   'id_user'        =>     $this->connected, 
                   'image'          =>     $user_image
                );   
          }



          $users_cool = $this->crud_model->get_info_user();
          foreach ($users_cool as $key) {

              if ($key['idrole'] == 1) {
                $url ="admin/padding_article";

                $id_user_recever = $key['id'];

                $nom   = $this->crud_model->get_name_user($this->connected);
                $message = $nom." Vient d'ajouter un article ".$this->input->post('nom');

                $notification = array(
                  'titre'     =>    "Nouveau article",
                  'icone'     =>    "fa fa-newspaper-o",
                  'message'   =>     $message,
                  'url'       =>     $url,
                  'id_user'   =>     $id_user_recever
                );
                
                $not = $this->crud_model->insert_notification($notification);

              }
              
                # code...
          }





        $requete=$this->crud_model->insert_padding_article($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_padding_article(){

          if($_FILES["user_image"]["size"] > 0)  
          {  
               $updated_data = array(  
                   'nom'          =>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description"),
                   'lien'           =>     $this->input->post("lien"),
                   'idcat'          =>     $this->input->post('idcat'), 
                   'type'           =>     $this->input->post('type'),
                   'id_user'        =>     $this->input->post('id_user'),  
                   'image'          =>     $this->upload_image_article()
                );    
          }  
          
          else  
          {   
               $updated_data = array(  
                   'nom'          =>     $this->input->post('nom'),  
                   'description'    =>     $this->input->post("description"),
                   'lien'           =>     $this->input->post("lien"),
                   'idcat'          =>     $this->input->post('idcat'),
                   'id_user'        =>     $this->input->post('id_user'),  
                   'type'           =>     $this->input->post('type')
                );   
          }
  
          
          $this->crud_model->update_padding_article($this->input->post("idart"), $updated_data);

          echo("modification avec succès");
      }

      function supression_padding_article(){
 
          $this->crud_model->delete_padding_article($this->input->post("idart"));
          echo("suppression avec succès");
        
      }

      function fetch_single_padding_article()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_padding_article($this->input->post('idart'));  
           foreach($data as $row)  
           {  
                $output['nom'] = $row->nom;  
                $output['description'] = $row->description; 

                $output['lien']   = $row->lien;
                $output['type']   = $row->type;
                $output['idcat']  = $row->idcat;
                $output['id_user']  = $row->id_user;
                $output['text_description']   ='
                  <textarea class="form-control textarea" name="description" id="description" placeholder="Parler un peu sur la description de l\'article">
                      '.$row->description.'
                  </textarea>
                ';
                
                $output['image']  = $row->image;

                if($row->image != '')  
                {  
                     $output['user_image'] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
                }  
                else  
                {  
                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }  

                
           }  
           echo json_encode($output);  
      }


      function validation_article()
      {
          if($this->input->post('checkbox_value'))
          {
             $id = $this->input->post('checkbox_value');
             for($count = 0; $count < count($id); $count++)
             {

                $arts = $this->crud_model->fetch_article_tag($id[$count]);
                foreach ($arts as $key) {

                    $nom = $key['first_name'];

                    $insert_data = array(  
                       'nom'            =>     $key['nom'],  
                       'description'    =>     $key["description"],
                       'lien'           =>     $key["lien"],
                       'idcat'          =>     $key['idcat'], 
                       'type'           =>     $key['type'],  
                       'image'          =>     $key['image']
                    ); 

                    $users_cool = $this->crud_model->get_info_user_tag($key['id_user']);
                    foreach ($users_cool as $key2) {

                        if ($key2['idrole'] == 2) {
                          $url ="user/article";

                          $id_user_recever = $key2['id'];

                          $nom_user   = $this->crud_model->get_name_user($id_user_recever);
                          $message = $nom_user." votre article ".$key['nom'];

                          $notification = array(
                            'titre'     =>    "Félicitation",
                            'icone'     =>    "fa fa-check",
                            'message'   =>     $message,
                            'url'       =>     $url,
                            'id_user'   =>     $id_user_recever
                          );
                          
                          $not = $this->crud_model->insert_notification($notification);

                        }
                        
                          # code...
                    }

                    $this->crud_model->insert_article($insert_data);

                    $this->crud_model->delete_padding_article($id[$count]);
                }

                
             }

             echo("Insertion avec succès");
          }

      }


      function validation_article_rejeter()
      {
          if($this->input->post('checkbox_value'))
          {
             $id = $this->input->post('checkbox_value');
             for($count = 0; $count < count($id); $count++)
             {

                $arts = $this->crud_model->fetch_article_tag($id[$count]);
                foreach ($arts as $key) {

                    $nom = $key['first_name'];

                    $insert_data = array(  
                       'nom'            =>     $key['nom'],  
                       'description'    =>     $key["description"],
                       'lien'           =>     $key["lien"],
                       'idcat'          =>     $key['idcat'], 
                       'type'           =>     $key['type'],  
                       'image'          =>     $key['image']
                    ); 

                    $users_cool = $this->crud_model->get_info_user_tag($key['id_user']);
                    foreach ($users_cool as $key2) {

                        if ($key2['idrole'] == 2) {
                          $url ="user/article";

                          $id_user_recever = $key2['id'];

                          $nom_user   = $this->crud_model->get_name_user($id_user_recever);
                          $message = $nom_user." votre article ".$key['nom']." a été rejeté suite à une cause valable. pour plus d'informations d'invalidité de votre article, veillez contacter l'administrateur du site par son compte mail";

                          $notification = array(
                            'titre'     =>    "Salut",
                            'icone'     =>    "fa fa-close",
                            'message'   =>     $message,
                            'url'       =>     $url,
                            'id_user'   =>     $id_user_recever
                          );
                          
                          $not = $this->crud_model->insert_notification($notification);

                        }
                        
                          # code...
                    }

                    // $this->crud_model->insert_article($insert_data);

                    $this->crud_model->delete_padding_article($id[$count]);
                }

                
             }

             echo("Suppression avec succès");
          }

      }

  // fin de sript padding_article 

    function upload_galery()
   {
      sleep(3);
      if($_FILES["files"]["name"] != '')
      {
       $output = '';
       $config["upload_path"] = './upload/galery/';
       $config["allowed_types"] = 'gif|jpg|png|webp';
       $this->load->library('upload', $config);
       $this->upload->initialize($config);
       for($count = 0; $count<count($_FILES["files"]["name"]); $count++)
       {
        $extension = explode('.', $_FILES["files"]["name"][$count]);  
        $new_name = rand() . '.' . $extension[1];

        $_FILES["file"]["name"] = $new_name;
        $_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
        $_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
        $_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
        $_FILES["file"]["size"] = $_FILES["files"]["size"][$count];

        // echo($_FILES["files"]["name"][$count]).'<br>';
        // echo($new_name).PHP_EOL;


        if($this->upload->do_upload('file'))
        {
         $data = $this->upload->data();

         $insert_data = array(  
             'image'         =>     $new_name              
         ); 
         $requete=$this->crud_model->insert_galery($insert_data);

         $output .= '
         <div class="col-md-3" align="center" style="margin-bottom:24px;">
          <img src="'.base_url().'upload/galery/'.$data["file_name"].'" class="img-thumbnail img-responsive" style="height: 200px;" />
            <br />
            <input type="checkbox" name="images[]" class="select" value="upload/galery/'.$data["file_name"].'" />
         </div>
         ';
        }
       }
       echo $output;   
      }
   }

   function fetch_single_galery_entrep()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_galery_entreprise($_POST["idg"]);  
         foreach($data as $row)  
         {  
              $output['url']    = $row->url;  
              
             
         }  
         echo json_encode($output);  
    }

    function fetch_single_galery_entrep_personnele()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_galery_entreprise_personnele($_POST["idg"]);  
         foreach($data as $row)  
         {  
              $output['url']    = $row->url;  
              
             
         }  
         echo json_encode($output);  
    }

    function modification_galery_entrep(){
  
          $updated_data = array(  
                 'url'            =>     $this->input->post('url')
          );
  
          $this->crud_model->update_galery_entrep($this->input->post("idg"), $updated_data);

          echo("modification avec succès");
    }

    function modification_galery_entrep_personnele(){
  
          $updated_data = array(  
                 'url'            =>     $this->input->post('url')
          );
  
          $this->crud_model->update_galery_entrep_personnele($this->input->post("idg"), $updated_data);
          echo("modification avec succès");
    }


     function upload_galery2()
   {
      sleep(3);
      if($_FILES["files"]["name"] != '')
      {
       $output = '';
       $config["upload_path"] = './upload/galery/';
       $config["allowed_types"] = 'gif|jpg|png|webp';
       $this->load->library('upload', $config);
       $this->upload->initialize($config);
       for($count = 0; $count<count($_FILES["files"]["name"]); $count++)
       {
        $extension = explode('.', $_FILES["files"]["name"][$count]);  
        $new_name = rand() . '.' . $extension[1];

        $_FILES["file"]["name"] = $new_name;
        $_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
        $_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
        $_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
        $_FILES["file"]["size"] = $_FILES["files"]["size"][$count];

        // echo($_FILES["files"]["name"][$count]).'<br>';
        // echo($new_name).PHP_EOL;


        if($this->upload->do_upload('file'))
        {
         $data = $this->upload->data();

         $insert_data = array(  
             'image'         =>     $new_name              
         ); 
         $requete=$this->crud_model->insert_galery2($insert_data);

         $output .= '
         <div class="col-md-3" align="center" style="margin-bottom:24px;">
          <img src="'.base_url().'upload/galery/'.$data["file_name"].'" class="img-thumbnail img-responsive" style="height: 200px;" />
            <br />
            <input type="checkbox" name="images[]" class="select" value="upload/galery/'.$data["file_name"].'" />
         </div>
         ';
        }
       }
       echo $output;   
      }
   }


    

      // pagination contact 
   function pagination_galery_member()
  {

  $this->load->library("pagination");
  $config = array();
  $config["base_url"] = "#";
  $config["total_rows"] = $this->crud_model->fetch_pagination_galery();
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
   'country_table'   => $this->crud_model->fetch_details_pagination_galery($config["per_page"], $start)
  );
  echo json_encode($output);
  }
    // fin pagination

  // pagination contact 
  function pagination_galery_member2()
  {

  $this->load->library("pagination");
  $config = array();
  $config["base_url"] = "#";
  $config["total_rows"] = $this->crud_model->fetch_pagination_galery_personnel();
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
   'country_table'   => $this->crud_model->fetch_details_pagination_galery2($config["per_page"], $start)
  );
  echo json_encode($output);
  }

  function supression_photo_galery(){

    $this->crud_model->delete_photo_galery($this->input->post("idg"));
    echo("suppression avec succès");

  }

  function supression_photo_galery_personnele(){

    $this->crud_model->delete_photo_galery_personnele($this->input->post("idg"));
    echo("suppression avec succès");

  }























      function upload_image_users()  
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

      function upload_image_video()  
      {  
           if(isset($_FILES["user_image"]))  
           {  
                $extension = explode('.', $_FILES['user_image']['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = './upload/video/' . $new_name;  
                move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
                return $new_name;  
           }  
      }

       function upload_image_offre()  
      {  
           if(isset($_FILES["user_image"]))  
           {  
                $extension = explode('.', $_FILES['user_image']['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = './upload/offre/' . $new_name;  
                move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
                return $new_name;  
           }  
      }

       function upload_image_offre2()  
      {  
           if(isset($_FILES["user_image2"]))  
           {  
                $extension = explode('.', $_FILES['user_image2']['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = './upload/offre/' . $new_name;  
                move_uploaded_file($_FILES['user_image2']['tmp_name'], $destination);  
                return $new_name;  
           }  
      }

       function upload_image_maison()  
      {  
           if(isset($_FILES["user_image"]))  
           {  
                $extension = explode('.', $_FILES['user_image']['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = './upload/maison/' . $new_name;  
                move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
                return $new_name;  
           }  
      }

      function upload_image_article()  
      {  
           if(isset($_FILES["user_image"]))  
           {  
                $extension = explode('.', $_FILES['user_image']['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = './upload/article/' . $new_name;  
                move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
                return $new_name;  
           }  
      }

      function upload_image_qrcode()  
      {  
           if(isset($_FILES["user_image"]))  
           {  
                $extension = explode('.', $_FILES['user_image2']['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = './upload/qrcode/' . $new_name;  
                move_uploaded_file($_FILES['user_image2']['tmp_name'], $destination);  
                return $new_name;  
           }  
      }

      function upload_image_tbl_info()  
  	  {  
  	       if(isset($_FILES["user_image"]))  
  	       {  
  	            $extension = explode('.', $_FILES['user_image']['name']);  
  	            $new_name = rand() . '.' . $extension[1];  
  	            $destination = './upload/tbl_info/' . $new_name;  
  	            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
  	            return $new_name;  
  	       }  
  	  }


      // script pour formulaire de contact 
      

        // ajout des contacts
        function fetch_contact(){  

           $fetch_data = $this->crud_model->make_datatables_contact();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  

              if ($row->fichier != '') {
                $etat = '<a href="'.base_url().'upload/contact/'.$row->fichier.'" class="badge badge-white"><i class="fa fa-file"></i></a>';
              }
              else{
                $etat = '';
              }

                $sub_array = array();

                $sub_array[] = '
                <input type="checkbox" class="delete_checkbox" value="'.$row->email.'" />
                ';  
                  
                $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
                $sub_array[] = nl2br(substr($row->sujet, 0,20)).'...'; 
                $sub_array[] = $row->email; 
                $sub_array[] = nl2br(substr($row->message, 0,50)).'...';
                $sub_array[] = substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23);

                $sub_array[] = $etat; 

                $sub_array[] = '<button type="button" name="delete" idcontact="'.$row->id.'" class="btn btn-secondary btn-icon update"><i class="fa fa-comment-o"></i></button>'; 
  
                $sub_array[] = '<button type="button" name="delete" idcontact="'.$row->id.'" class="btn btn-danger btn-icon delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_contact(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_contact(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_contact()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_contact($this->input->post('idcontact'));  
           foreach($data as $row)  
           {  
                $output['nom'] = $row->nom;  
                $output['message'] = $row->message;
                $output['email'] = $row->email;
                $output['sujet'] = $row->sujet; 
 
           }  
           echo json_encode($output);  
      } 

      function operation_contact(){

        $insert_data = array(  
             'nom'          =>     $this->input->post('name'),  
             'sujet'       =>     $this->input->post("subject"),
             'email'         =>     $this->input->post("email"),  
             'message'       =>     $this->input->post("message")  
             
      );  
         
        $requete=$this->crud_model->insert_contact($insert_data);
        echo("Ajout message  avec succès");
        
      }

      
      function supression_contact()
      {
 
          $this->crud_model->delete_contact($this->input->post("idcontact"));

          echo("suppression avec succès");
        
      }

      function supression_paiement_pading()
      {
 
          $this->crud_model->delete_paiement_pading($this->input->post("idp"));

          echo("suppression avec succès");
        
      }

    // fin projets

    function infomation_par_mail()
     {
        if($this->input->post('checkbox_value'))
        {
           $id = $this->input->post('checkbox_value');
           for($count = 0; $count < count($id); $count++)
           {
               
                $mail    = $id[$count];
                $website = "whitefondation@gmail.com";

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

     // suppression trancation
     function suppression_multiple_fausse_tranaction()
     {
        if($this->input->post('checkbox_value'))
        {
           $id = $this->input->post('checkbox_value');
           for($count = 0; $count < count($id); $count++)
           {
                $idp    = $id[$count];
                $this->crud_model->delete_paiement_pading($idp);

                echo("suppression avec succès");


           }
        }
     }
     // fin suppression trancation

     // valider trancation
     function valider_multiple_fausse_tranaction()
     {
        if($this->input->post('checkbox_value'))
        {
           $id = $this->input->post('checkbox_value');
           for($count = 0; $count < count($id); $count++)
           {
                $idp    = $id[$count];
                $info_pro = $this->crud_model->get_info_padding_transaction($idp);



               

                foreach ($info_pro as $key) {
                    $code = rand();
                    $idpersonne   =  $key['idpersonne'];
                    $date_paie    =  $key['date_paie'];
                    $montant      =  $key['montant'];
                    $motif        =  $key['motif'];
                    $token        =  $key['token'];
                    $codeFacture  =  $code;

                    $insertdata = array(
                        'idpersonne'      => $idpersonne,
                        'date_paie'       => $date_paie,
                        'montant'         => $montant,
                        'motif'           => $motif ,
                        'token'           => $token,
                        'codeFacture'     => $codeFacture,
                    );

                    $query = $this->crud_model->insert_paiement_compte($insertdata);
                    if ($query > 0) {
                        # code...
                        $url    ="entreprise/facturePaiement/". $code;
                        $nom    = $this->crud_model->get_name_user($idpersonne);

                        // $nom = $this->input->post('titre');
                        $message ="Bonjour ".$nom." votre paiement a été validé avec succès 👌";

                        $notification = array(
                          'titre'     =>    "Félicitation",
                          'icone'     =>    "fa fa-check",
                          'message'   =>     $message,
                          'url'       =>     $url,
                          'id_user'   =>     $idpersonne
                        );
                        
                        $not = $this->crud_model->insert_notification($notification);

                        echo("Validation paiement mise à jour avec succès!! 👌");

                        // manupilation et augmentation de jours 
                        $info_users = $this->crud_model->get_info_expiration_compte_users($idpersonne);
                        foreach ($info_users as $row) {
                          # code...
                          $fin_event = $row['fin_event'];
                          $new_fin_event =  $this->crud_model->get_expire_day_count($fin_event);

                          $updateData = array(
                              'debit_event' =>  $fin_event,
                              'fin_event'   =>  $new_fin_event
                          );

                          $uptodate = $this->crud_model->update_crud($idpersonne,  $updateData);



                        }

                    }

                }

                $this->crud_model->delete_paiement_pading($idp);

              

           }
        }
     }
     // fin valider trancation

     // invalider trancation
     function invalider_multiple_fausse_tranaction()
     {
        if($this->input->post('checkbox_value'))
        {
           $id = $this->input->post('checkbox_value');
           for($count = 0; $count < count($id); $count++)
           {
                $idp    = $id[$count];
                $info_pro = $this->crud_model->get_info_paiement_transaction($idp);


                foreach ($info_pro as $key) {
                    $code = rand();
                    $idpersonne   =  $key['idpersonne'];
                    $date_paie    =  $key['date_paie'];
                    $montant      =  $key['montant'];
                    $motif        =  $key['motif'];
                    $token        =  $key['token'];
                    $codeFacture  =  $key['codeFacture'];

                    $url    = "entreprise/facturePaiement/". $codeFacture;
                    $nom    = $this->crud_model->get_name_user($idpersonne);

                    // $nom = $this->input->post('titre');
                    $message ="Bonjour ".$nom." votre paiement a été invalidé suite à une cause valide. prière de vérifier la cause d'invalidité de votre paiement au près de l'administrateur du système 👌";

                    $notification = array(
                      'titre'     =>    "Désolé votre paiement a été invalide",
                      'icone'     =>    "fa fa-check",
                      'message'   =>     $message,
                      'url'       =>     $url,
                      'id_user'   =>     $idpersonne
                    );
                    
                    $not = $this->crud_model->insert_notification($notification);

                   

                    // manupilation et augmentation de jours 
                    $info_users = $this->crud_model->get_info_expiration_compte_users($idpersonne);
                    foreach ($info_users as $row) {
                      # code...
                      $fin_event = $row['fin_event'];
                      $debit_event = $row['debit_event'];
                      $new_fin_event =  $this->crud_model->get_expire_day_count($fin_event);

                      $updateData = array(
                          'debit_event' =>  $debit_event,
                          'fin_event'   =>  $debit_event
                      );

                      $uptodate = $this->crud_model->update_crud($idpersonne,  $updateData);



                    }


                    

                }

                $this->crud_model->delete_paiement_normal($idp);
                echo("votre paiement à été annulé");

              

           }
        }
     }
     // fin valider trancation

     function facture($param1=''){
       $customer_id = "paiement facture ".$param1;
       $html_content = '';
       $html_content .= $this->crud_model->fetch_single_details_facture($param1);

       $dataUpdate = array(
        'etat_paiement' =>  1
       );
       $cool = $this->crud_model->update_paiement_etat($param1, $dataUpdate);

       // echo($html_content);
       $this->pdf->loadHtml($html_content);
       $this->pdf->render();
       $this->pdf->stream("paiement reçu_".$customer_id.".pdf", array("Attachment"=>0));
    }


    



     // pour les follower
   function pagination_users_on_to()
   {

    $this->load->library("pagination");
    $config = array();
    $config["base_url"] = "#";
    $config["total_rows"] = $this->crud_model->fetch_pagination_ti_followe_count();
    $config["per_page"] = 6;
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
     'country_table'   => $this->crud_model->fetch_details_pagination_to_users_count($config["per_page"], $start)
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


    /*

    UTILISATION DE PORTAIL JOB
    MES SCRIPTS JOB COMMENCE DEJE
    ========================================================
    */


    // debit des scripts provinces
    function fetch_province(){  

           $fetch_data = $this->crud_model->make_datatables_province();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                // $sub_array[] = nl2br(substr($row->idp, 0,50)).'';
                $sub_array[] = nl2br(substr($row->nomp, 0,50)).'';
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

                
 
                $sub_array[] = '<button type="button" name="update" idp="'.$row->idp.'" class="btn btn-secondary btn-icon update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idp="'.$row->idp.'" class="btn btn-danger btn-icon delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_province(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_province(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);


      }

      function operation_province($param1 ='', $param2='', $param3=''){
        if ($param1='Add') {

          $insert_data = array( 
              'nomp'                 =>     $this->input->post('nomp')    
          );  
           
          $requete=$this->crud_model->insert_province($insert_data);

          echo("Enregistrement avec succès");
               
          # code...
        }
       

    }

    function modification_province()  
      {  
           $updated_data = array(  
              'nomp'    =>     $this->input->post('nomp') 
           );   

          $this->crud_model->update_province($this->input->post("idp"), $updated_data);
          echo("information mise à jour avec succès"); 
      }

      function suppression_province()  
      {  
          $this->crud_model->delete_province($this->input->post("idp"));       
          echo("suppression avec succès");  
      }  
   

      function fetch_single_province()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_province($this->input->post("idp"));  
           foreach($data as $row)  
           {  
                $output['nomp']   = $row->nomp; 
           }  
           echo json_encode($output);  
      }  
   
    // fin de script provinces

       // debit des scripts ville
    function fetch_ville(){  

           $fetch_data = $this->crud_model->make_datatables_ville();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  

                $sub_array[] = nl2br(substr($row->nomp, 0,50)).'';
                $sub_array[] = nl2br(substr($row->nomv, 0,50)).'';
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

                
 
                $sub_array[] = '<button type="button" name="update" idv="'.$row->idv.'" class="btn btn-secondary btn-icon update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idv="'.$row->idv.'" class="btn btn-danger btn-icon delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_ville(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_ville(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);


      }

      function operation_ville($param1 ='', $param2='', $param3=''){
        if ($param1='Add') {

          $insert_data = array( 
               'nomv'                 =>     $this->input->post('nomv'),
               'idp'                 =>     $this->input->post('idp')    
      );  
           
          $requete=$this->crud_model->insert_ville($insert_data);

          echo("Enregistrement avec succès");
               
          # code...
        }
       

    }

    function modification_ville()  
      {  
           $updated_data = array(  
              'nomv'                =>     $this->input->post('nomv'),
            'idp'                 =>     $this->input->post('idp') 
          );   

          $this->crud_model->update_ville($this->input->post("idv"), $updated_data);
          echo("information mise à jour avec succès"); 
      }

      function suppression_ville()  
      {  
          $this->crud_model->delete_ville($this->input->post("idv"));      
           echo("suppression avec succès");  
      }  
   

      function fetch_single_ville()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_ville($this->input->post("idv"));  
           foreach($data as $row)  
           {  
                $output['nomv']   = $row->nomv; 
                $output['idp']    = $row->idp; 
           }  
           echo json_encode($output);  
      }  
   
    // fin de script province et ville

      // debit des scripts contrat
    function fetch_contrat(){  

         $fetch_data = $this->crud_model->make_datatables_contrat();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  

              $sub_array[] = nl2br(substr($row->nomc, 0,50)).'';
              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

              

              $sub_array[] = '<button type="button" name="update" idc="'.$row->idc.'" class="btn btn-secondary btn-icon update"><i class="fa fa-edit"></i></button>';  
              $sub_array[] = '<button type="button" name="delete" idc="'.$row->idc.'" class="btn btn-danger btn-icon delete"><i class="fa fa-trash"></i></button>';  
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_contrat(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_contrat(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);


    }

    function operation_contrat($param1 ='', $param2='', $param3=''){
      if ($param1='Add') {

        $insert_data = array( 
             'nomc'                 =>     $this->input->post('nomc')   
        );  
         
        $requete=$this->crud_model->insert_contrat($insert_data);

        echo("Enregistrement avec succès");
             
        # code...
      }
       

    }

    function modification_contrat()  
    {  
         $updated_data = array(  
            'nomc'                =>     $this->input->post('nomc')
         );   

        $this->crud_model->update_contrat($this->input->post("idc"), $updated_data);
        echo("information mise à jour avec succès"); 
    }

    function suppression_contrat()  
    {  
        $this->crud_model->delete_contrat($this->input->post("idc"));      
         echo("suppression avec succès");  
    }  
 

    function fetch_single_contrat()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_contrat($this->input->post("idc"));  
         foreach($data as $row)  
         {  
              $output['nomc']   = $row->nomc; 
         }  
         echo json_encode($output);  
    }  
 
  // fin de script contrat

    // debit des scripts pays
    function fetch_pays(){  

           $fetch_data = $this->crud_model->make_datatables_pays();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  

                $sub_array[] = nl2br(substr($row->nompays, 0,50)).'';
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

                $sub_array[] = '<button type="button" name="update" idPays="'.$row->idPays.'" class="btn btn-secondary btn-icon update"><i class="fa fa-edit"></i></button>';

                $sub_array[] = '<button type="button" name="delete" idPays="'.$row->idPays.'" class="btn btn-danger btn-icon delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_pays(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_pays(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);


      }

      function operation_pays($param1 ='', $param2='', $param3=''){
        if ($param1='Add') {

          $insert_data = array( 
               'nompays'                 =>     $this->input->post('nompays')   
          );  
           
          $requete=$this->crud_model->insert_pays($insert_data);

          echo("Enregistrement avec succès");
               
          # code...
        }
       

      }

      function modification_pays()  
      {  
           $updated_data = array(  
              'nompays'                =>     $this->input->post('nompays')
           );   

          $this->crud_model->update_pays($this->input->post("idPays"), $updated_data);
          echo("information mise à jour avec succès"); 
      }

      function suppression_pays()  
      {  
          $this->crud_model->delete_pays($this->input->post("idPays"));      
           echo("suppression avec succès");  
      }  
   

      function fetch_single_pays()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_pays($this->input->post("idPays"));  
           foreach($data as $row)  
           {  
                $output['nompays']   = $row->nompays; 
           }  
           echo json_encode($output);  
      }  
   
    // fin de script pays

      // debit des scripts category
    function fetch_category(){  

           $fetch_data = $this->crud_model->make_datatables_category();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  

                $sub_array[] = nl2br(substr($row->nomcat, 0,50)).'';
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

                
 
                $sub_array[] = '<button type="button" name="update" idcat="'.$row->idcat.'" class="btn btn-secondary btn-icon update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idcat="'.$row->idcat.'" class="btn btn-danger btn-icon delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_category(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_category(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);


      }

      function operation_category($param1 ='', $param2='', $param3=''){
        if ($param1='Add') {

          $insert_data = array( 
               'nomcat'                 =>     $this->input->post('nomcat')   
          );  
           
          $requete=$this->crud_model->insert_category($insert_data);

          echo("Enregistrement avec succès");
               
          # code...
        }
       

    }

    function modification_category()  
      {  
           $updated_data = array(  
              'nomcat'                =>     $this->input->post('nomcat')
           );   

          $this->crud_model->update_category($this->input->post("idcat"), $updated_data);
          echo("information mise à jour avec succès"); 
      }

      function suppression_category()  
      {  
          $this->crud_model->delete_category($this->input->post("idcat"));      
           echo("suppression avec succès");  
      }  
   

      function fetch_single_category()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_category($this->input->post("idcat"));  
           foreach($data as $row)  
           {  
                $output['nomcat']   = $row->nomcat; 
           }  
           echo json_encode($output);  
      }  
   
    // fin de script categorie

    // debit des scripts calification de l'emmploi
    function fetch_calification(){  

           $fetch_data = $this->crud_model->make_datatables_calification();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  

                $sub_array[] = nl2br(substr($row->nomcalification, 0,50)).'';
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

                
 
                $sub_array[] = '<button type="button" name="update" idcalification="'.$row->idcalification.'" class="btn btn-secondary btn-icon update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idcalification="'.$row->idcalification.'" class="btn btn-danger btn-icon delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_calification(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_calification(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);


      }

      function operation_calification($param1 ='', $param2='', $param3=''){
        if ($param1='Add') {

          $insert_data = array( 
               'nomcalification'         =>     $this->input->post('nomcalification')   
          );  
           
          $requete=$this->crud_model->insert_calification($insert_data);

          echo("Enregistrement avec succès");
               
          # code...
        }
       

    }

      function modification_calification()  
      {  
           $updated_data = array(  
              'nomcalification'      =>     $this->input->post('nomcalification')
           );   

          $this->crud_model->update_calification($this->input->post("idcalification"), $updated_data);
          echo("information mise à jour avec succès"); 
      }

      function suppression_calification()  
      {  
          $this->crud_model->delete_calification($this->input->post("idcalification"));      
           echo("suppression avec succès");  
      }  
   

      function fetch_single_calification()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_calification($this->input->post("idcalification"));  
           foreach($data as $row)  
           {  
                $output['nomcalification']   = $row->nomcalification; 
           }  
           echo json_encode($output);  
      }  
   
    // fin de script calification

      // debit des scripts competense de l'emmploi
    function fetch_competense(){  

         $fetch_data = $this->crud_model->make_datatables_competense();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  

              $sub_array[] = nl2br(substr($row->nomcompetense, 0,50)).'';
              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

              

              $sub_array[] = '<button type="button" name="update" idcompetense="'.$row->idcompetense.'" class="btn btn-secondary btn-icon update"><i class="fa fa-edit"></i></button>';  
              $sub_array[] = '<button type="button" name="delete" idcompetense="'.$row->idcompetense.'" class="btn btn-danger btn-icon delete"><i class="fa fa-trash"></i></button>';  
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_competense(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_competense(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);


    }

    function operation_competense($param1 ='', $param2='', $param3=''){
      if ($param1='Add') {

        $insert_data = array( 
             'nomcompetense'         =>     $this->input->post('nomcompetense')   
        );  
         
        $requete=$this->crud_model->insert_competense($insert_data);

        echo("Enregistrement avec succès");
             
        # code...
      }
     

  }

    function modification_competense()  
    {  
         $updated_data = array(  
            'nomcompetense'      =>     $this->input->post('nomcompetense')
         );   

        $this->crud_model->update_competense($this->input->post("idcompetense"), $updated_data);
        echo("information mise à jour avec succès"); 
    }

    function suppression_competense()  
    {  
        $this->crud_model->delete_competense($this->input->post("idcompetense"));      
         echo("suppression avec succès");  
    }  
 

    function fetch_single_competense()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_competense($this->input->post("idcompetense"));  
         foreach($data as $row)  
         {  
              $output['nomcompetense']   = $row->nomcompetense; 
         }  
         echo json_encode($output);  
    }  
   
    // fin de script competense

     // debit des scripts salaire de l'emmploi
    function fetch_salaire(){  

           $fetch_data = $this->crud_model->make_datatables_salaire();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  

                $sub_array[] = nl2br(substr($row->nomsalaire, 0,50)).'';
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

                
 
                $sub_array[] = '<button type="button" name="update" idsalaire="'.$row->idsalaire.'" class="btn btn-secondary btn-icon update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idsalaire="'.$row->idsalaire.'" class="btn btn-danger btn-icon delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_salaire(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_salaire(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);


      }

      function operation_salaire($param1 ='', $param2='', $param3=''){
        if ($param1='Add') {

          $insert_data = array( 
               'nomsalaire'         =>     $this->input->post('nomsalaire')   
          );  
           
          $requete=$this->crud_model->insert_salaire($insert_data);

          echo("Enregistrement avec succès");
               
          # code...
        }
       

    }

      function modification_salaire()  
      {  
           $updated_data = array(  
              'nomsalaire'      =>     $this->input->post('nomsalaire')
           );   

          $this->crud_model->update_salaire($this->input->post("idsalaire"), $updated_data);
          echo("information mise à jour avec succès"); 
      }

      function suppression_salaire()  
      {  
          $this->crud_model->delete_salaire($this->input->post("idsalaire"));      
           echo("suppression avec succès");  
      }  
   

      function fetch_single_salaire()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_salaire($this->input->post("idsalaire"));  
           foreach($data as $row)  
           {  
                $output['nomsalaire']   = $row->nomsalaire; 
           }  
           echo json_encode($output);  
      }  
   
    // fin de script salaire

    // debit des scripts service de l'emmploi
      function fetch_service(){  

         $fetch_data = $this->crud_model->make_datatables_service();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  

              $sub_array[] = nl2br(substr($row->noms, 0,50)).'';
              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

              

              $sub_array[] = '<button type="button" name="update" ids="'.$row->ids.'" class="btn btn-secondary btn-icon update"><i class="fa fa-edit"></i></button>';  
              $sub_array[] = '<button type="button" name="delete" ids="'.$row->ids.'" class="btn btn-danger btn-icon delete"><i class="fa fa-trash"></i></button>';  
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_service(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_service(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);


      }

      function operation_service($param1 ='', $param2='', $param3=''){
        if ($param1='Add') {

          $insert_data = array( 
               'noms'         =>     $this->input->post('noms')   
          );  
           
          $requete=$this->crud_model->insert_service($insert_data);

          echo("Enregistrement avec succès");
               
          # code...
        }
       

    }

    function modification_service()  
    {  
         $updated_data = array(  
            'noms'      =>     $this->input->post('noms')
         );   

        $this->crud_model->update_service($this->input->post("ids"), $updated_data);
        echo("information mise à jour avec succès"); 
    }

    function suppression_service()  
    {  
        $this->crud_model->delete_service($this->input->post("ids"));      
         echo("suppression avec succès");  
    }  
 

    function fetch_single_service()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_service($this->input->post("ids"));  
         foreach($data as $row)  
         {  
              $output['noms']   = $row->noms; 
         }  
         echo json_encode($output);  
    }  
 
  // fin de script service

    // debit des scripts paquet de l'emmploi
    function fetch_paquet(){  

           $fetch_data = $this->crud_model->make_datatables_paquet();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  

                $sub_array[] = nl2br(substr($row->nompaquet, 0,50)).'';
                $sub_array[] = nl2br(substr($row->noms, 0,50)).'';
                $sub_array[] = nl2br(substr($row->prix, 0,50)).' $';
                $sub_array[] = nl2br(substr($row->nombre_jour, 0,50)).' jour(s)';
                $sub_array[] = nl2br(substr($row->nombre_pub, 0,50)).' pub';
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

                $sub_array[] = '<button type="button" name="update" idpaquet="'.$row->idpaquet.'" class="btn btn-secondary btn-icon update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idpaquet="'.$row->idpaquet.'" class="btn btn-danger btn-icon delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_paquet(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_paquet(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);


      }

      function operation_paquet($param1 ='', $param2='', $param3=''){
        if ($param1='Add') {

          $insert_data = array( 
               'nompaquet'         =>     $this->input->post('nompaquet'),
               'ids'               =>     $this->input->post('ids'),
               'prix'              =>     $this->input->post('prix'),
               'nombre_pub'        =>     $this->input->post('nombre_pub'),
               'nombre_jour'       =>     $this->input->post('nombre_jour')   
          );  
           
          $requete=$this->crud_model->insert_paquet($insert_data);

          echo("Enregistrement avec succès");
               
          # code...
        }
       

    }

      function modification_paquet()  
      {  
           $updated_data = array(  
               'nompaquet'         =>     $this->input->post('nompaquet'),
               'ids'               =>     $this->input->post('ids'),
               'prix'              =>     $this->input->post('prix'),
               'nombre_pub'        =>     $this->input->post('nombre_pub'),
               'nombre_jour'       =>     $this->input->post('nombre_jour')
           );   

          $this->crud_model->update_paquet($this->input->post("idpaquet"), $updated_data);
          echo("information mise à jour avec succès"); 
      }

      function suppression_paquet()  
      {  
          $this->crud_model->delete_paquet($this->input->post("idpaquet"));      
           echo("suppression avec succès");  
      }  
   

      function fetch_single_paquet()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_paquet($this->input->post("idpaquet"));  
           foreach($data as $row)  
           {  
                $output['ids']   = $row->ids;
                $output['nompaquet']   = $row->nompaquet;
                $output['nombre_jour']   = $row->nombre_jour;
                $output['nombre_pub']   = $row->nombre_pub;
                $output['prix']   = $row->prix; 
           }  
           echo json_encode($output);  
      }  
   
      // fin de script paquet

      // mesa script pour les canditats 
      /*
      ca commence deja
      ===============

      */

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
     'country_table'   => $this->crud_model->fetch_details_pagination_candidat_admin($config["per_page"], $start)
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
                            <a href="'.base_url().'admin/detail_user/'.$row->id.'" class="text-primary">'.substr($row->first_name.''.$row->last_name, 0,29).'</a>
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
                              <a href="'.base_url().'admin/detail_user/'.$row->id.'" class="text-primary">'.substr($row->first_name.''.$row->last_name, 0,29).'</a>
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
                              <a href="'.base_url().'admin/detail_user/'.$row->id.'" class="text-primary">'.substr($row->first_name.''.$row->last_name, 0,29).'</a>
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
                              <a href="'.base_url().'admin/detail_user/'.$row->id.'" class="text-primary">'.substr($row->first_name.''.$row->last_name, 0,29).'</a>
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
     'country_table'   => $this->crud_model->fetch_details_pagination_offresEmploi_admin($config["per_page"], $start)
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

        $connected_user = $this->session->userdata('admin_login');
        $etat = '';
        $enligne = '';
        $link_reply ='';
        $link_postuler ='';
        $url_post ='';
        $opera_job ='';
        $today = date('Y-m-d');
        
        foreach ($MESOFFRES->result_array() as $row) {

         if ($row["date_fin_depot"] >= $today) {
          
            $url_post = base_url()."admin/nouveau_job/".$row['codejob'];
            $link_postuler = '<a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>
              
              <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
            ';

            if ($row['ceo'] != $connected_user) {

              $url_post = base_url()."admin/edit_new_job/".$row['codejob'];

              $opera_job = '

                    <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
                                <i class="fa fa-edit"></i></a>
              ';

              $link_reply = base_url().'admin/reply_to_our_job/'.$row['codejob'];
              
            }
            else{
              $opera_job = '';
              $link_reply ='javascript:void(0);';

            }

         }
         else{
          $url_post = base_url()."admin/nouveau_job/".$row['codejob'];

            if ($row['ceo'] == $connected_user) {

              $url_post = base_url()."admin/edit_new_job/".$row['codejob'];

              $opera_job = '

                    <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
                                <i class="fa fa-edit"></i></a>
              ';

              $link_reply = base_url().'admin/reply_to_our_job/'.$row['codejob'];
              
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


         $connected_user = $this->session->userdata('admin_login');
            $etat = '';
            $enligne = '';
            $link_reply ='';
            $link_postuler ='';
            $url_post ='';
            $opera_job ='';
            $today = date('Y-m-d');
            
            foreach ($MESOFFRES->result_array() as $row) {

             if ($row["date_fin_depot"] >= $today) {
              
                $url_post = base_url()."admin/nouveau_job/".$row['codejob'];
                $link_postuler = '<a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>
                  
                  <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
                ';

                if ($row['ceo'] != $connected_user) {

                  $url_post = base_url()."admin/edit_new_job/".$row['codejob'];

                  $opera_job = '

                        <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
                                    <i class="fa fa-edit"></i></a>
                  ';

                  $link_reply = base_url().'admin/reply_to_our_job/'.$row['codejob'];
                  
                }
                else{
                  $opera_job = '';
                  $link_reply ='javascript:void(0);';

                }

             }
             else{
              $url_post = base_url()."admin/nouveau_job/".$row['codejob'];

                if ($row['ceo'] == $connected_user) {

                  $url_post = base_url()."admin/edit_new_job/".$row['codejob'];

                  $opera_job = '

                        <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
                                    <i class="fa fa-edit"></i></a>
                  ';

                  $link_reply = base_url().'admin/reply_to_our_job/'.$row['codejob'];
                  
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


         $connected_user = $this->session->userdata('admin_login');
            $etat = '';
            $enligne = '';
            $link_reply ='';
            $link_postuler ='';
            $url_post ='';
            $opera_job ='';
            $today = date('Y-m-d');
            
            foreach ($MESOFFRES->result_array() as $row) {

             if ($row["date_fin_depot"] >= $today) {
              
                $url_post = base_url()."admin/nouveau_job/".$row['codejob'];
                $link_postuler = '<a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>
                  
                  <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
                ';

                if ($row['ceo'] != $connected_user) {

                  $url_post = base_url()."admin/edit_new_job/".$row['codejob'];

                  $opera_job = '

                        <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
                                    <i class="fa fa-edit"></i></a>
                  ';

                  $link_reply = base_url().'admin/reply_to_our_job/'.$row['codejob'];
                  
                }
                else{
                  $opera_job = '';
                  $link_reply ='javascript:void(0);';

                }

             }
             else{
              $url_post = base_url()."admin/nouveau_job/".$row['codejob'];

                if ($row['ceo'] == $connected_user) {

                  $url_post = base_url()."admin/edit_new_job/".$row['codejob'];

                  $opera_job = '

                        <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
                                    <i class="fa fa-edit"></i></a>
                  ';

                  $link_reply = base_url().'admin/reply_to_our_job/'.$row['codejob'];
                  
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


        $connected_user = $this->session->userdata('admin_login');
            $etat = '';
            $enligne = '';
            $link_reply ='';
            $link_postuler ='';
            $url_post ='';
            $opera_job ='';
            $today = date('Y-m-d');
            
            foreach ($MESOFFRES->result_array() as $row) {

             if ($row["date_fin_depot"] >= $today) {
              
                $url_post = base_url()."admin/nouveau_job/".$row['codejob'];
                $link_postuler = '<a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>
                  
                  <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
                ';

                if ($row['ceo'] != $connected_user) {

                  $url_post = base_url()."admin/edit_new_job/".$row['codejob'];

                  $opera_job = '

                        <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
                                    <i class="fa fa-edit"></i></a>
                  ';

                  $link_reply = base_url().'admin/reply_to_our_job/'.$row['codejob'];
                  
                }
                else{
                  $opera_job = '';
                  $link_reply ='javascript:void(0);';

                }

             }
             else{
              $url_post = base_url()."admin/nouveau_job/".$row['codejob'];

                if ($row['ceo'] == $connected_user) {

                  $url_post = base_url()."admin/edit_new_job/".$row['codejob'];

                  $opera_job = '

                        <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
                                    <i class="fa fa-edit"></i></a>
                  ';

                  $link_reply = base_url().'admin/reply_to_our_job/'.$row['codejob'];
                  
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


         $connected_user = $this->session->userdata('admin_login');
            $etat = '';
            $enligne = '';
            $link_reply ='';
            $link_postuler ='';
            $url_post ='';
            $opera_job ='';
            $today = date('Y-m-d');
            
            foreach ($MESOFFRES->result_array() as $row) {

             if ($row["date_fin_depot"] >= $today) {
              
                $url_post = base_url()."admin/nouveau_job/".$row['codejob'];
                $link_postuler = '<a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>
                  
                  <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
                ';

                if ($row['ceo'] != $connected_user) {

                  $url_post = base_url()."admin/edit_new_job/".$row['codejob'];

                  $opera_job = '

                        <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
                                    <i class="fa fa-edit"></i></a>
                  ';

                  $link_reply = base_url().'admin/reply_to_our_job/'.$row['codejob'];
                  
                }
                else{
                  $opera_job = '';
                  $link_reply ='javascript:void(0);';

                }

             }
             else{
              $url_post = base_url()."admin/nouveau_job/".$row['codejob'];

                if ($row['ceo'] == $connected_user) {

                  $url_post = base_url()."admin/edit_new_job/".$row['codejob'];

                  $opera_job = '

                        <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
                                    <i class="fa fa-edit"></i></a>
                  ';

                  $link_reply = base_url().'admin/reply_to_our_job/'.$row['codejob'];
                  
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

  function edit_job($param1 =''){

      $updatedata = array(
          'ids'           => $this->input->post('ids'),
          'idcat'           => $this->input->post('idcat'),
          'titre'           => $this->input->post('titre'),
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
      redirect('admin/edit_new_job/'.$codejob,'refresh');


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














  	  





		







		

}



 ?>