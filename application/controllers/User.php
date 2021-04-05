<?php 

defined('BASEPATH') OR exit('No direct script access allowed');  
class user extends CI_Controller
{
	private $token;
	private $connected;
	public function __construct()
	{
	  parent::__construct();
	  if(!$this->session->userdata('id'))
	  {
	      	redirect(base_url().'login');
	  }
	  $this->load->library('form_validation');
	  $this->load->library('encrypt');
    $this->load->library('pdf');
	  $this->load->model('crud_model'); 

	  $this->load->helper('url');

	  $this->token = "sk_test_51GzffmHcKfZ3B3C9DATC3YXIdad2ummtHcNgVK4E5ksCLbFWWLYAyXHRtVzjt8RGeejvUb6Z2yUk740hBAviBSyP00mwxmNmP1";
	  $this->connected = $this->session->userdata('id');

	}

	function index(){
		$data['title']="mon profile user";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['users'] = $this->crud_model->fetch_connected($this->connected);
		// $this->load->view('backend/user/profile', $data);
  		// $this->load->view('backend/user/exemple', $data);

    $data['nombre_users']   = $this->crud_model->statistiques_nombre("users");
    $data['nombre_article'] = $this->crud_model->statistiques_nombre("article");
    $data['nombre_padding_article'] = $this->crud_model->statistiques_nombre("padding_article");
     
    $this->load->view('backend/user/dashbord', $data);
	}

  function dashbord(){
    $data['title']="Tableau de bord admin";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      $data['nombre_users']   = $this->crud_model->statistiques_nombre("users");
      $data['nombre_article'] = $this->crud_model->statistiques_nombre("article");
      $data['nombre_padding_article'] = $this->crud_model->statistiques_nombre("padding_article");
     
    $this->load->view('backend/user/dashbord', $data);
      
  }

	function profile(){
      $data['title']="mon profile user";

      $data['pays'] = $this->crud_model->fetch_pays_register();
      $data['provinces'] = $this->crud_model->fetch_province_register();

      $data['MESOFFRES']=$this->crud_model->get_mes_demandes_emplois($this->connected);


      $data['user_skills']  = $this->crud_model->select_competense_users($this->connected);
      $data['user_interese']  = $this->crud_model->select_interesse_users($this->connected);
      $data['educations']   = $this->crud_model->select_etude_faite_users($this->connected);

      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      // $this->load->view('backend/user/viewx', $data);
      $this->load->view('backend/user/profile', $data);
    }

    function basic(){
        redirect('user/profile','refresh');
    }

    function basic_image(){
       redirect('user/profile','refresh');
    }

    function basic_secure(){
       redirect('user/profile','refresh');
    }

    function notification($param1=''){
      $data['title']    ="Listes des formations";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
      $data['users']    = $this->crud_model->fetch_connected($this->connected);
      $this->load->view('backend/user/notification', $data);
    }

    function article(){
      $data['title']        ="Paramétrage  des articles et publication";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
      $data['videos']       = $this->crud_model->Select_videos(); 
      $data['articles']     = $this->crud_model->Select_padding_articles();
      $data['categories']   = $this->crud_model->Select_category();

      $this->load->view('backend/user/article', $data);  
    }



    function fetch_ville_requete(){
        if($this->input->post('idp'))
      {
        echo $this->crud_model->fetch_ville_requete_crud($this->input->post('idp'));
      }
    }

    /*

  UTILISATION DE PORTAIL JOB
  MES SCRIPTS JOB COMMENCE DEJE
  ========================================================
  */


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
      $this->load->view('backend/user/offres_emplois', $data);
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
      $this->load->view('backend/user/detail_job', $data);

    }


    function reply_job($codejob){
        $id_user = $this->connected;
        $idjob   = $this->input->post('idjob');
        $etat = $this->crud_model->get_info_job_tag_to_reply($idjob, $id_user);
        if ($etat->num_rows() >0) {
          $this->session->set_flashdata('message2', 'Désolé vous avez déjà postuler sur cette offre!!🔕');
      redirect('user/nouveau_job/'.$codejob,'refresh');
        }
        else{

          $ceo    = $this->input->post('ceo');
          $titre    = $this->input->post('titre');
          $insertdata = array(
            'id_user'           => $id_user,
            'idjob'             => $idjob,
            'codejob'           => $this->input->post('codejob'),
            'motivation'        => $this->input->post('motivation'),

            'experienceP'       => $this->input->post('experienceP'),
            'niveau'          => $this->input->post('niveau'),
            'langue'          => $this->input->post('langue'),
            'formation'       => $this->input->post('formation'),
            'fichier'         => $this->upload_fichier_job_reply()
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
               redirect('user/nouveau_job/'.$codejob,'refresh');
          }
          else{
            $this->session->set_flashdata('message2', 'erreur veillez vérifier les informations requises');
             redirect('user/nouveau_job/'.$codejob,'refresh');
          }

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

  // auto complete text roffres d'emplois
  function fetch_auto_offres()
  {
      echo $this->crud_model->fetch_data_auto_offres($this->uri->segment(3));
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
     'country_table'   => $this->crud_model->fetch_details_pagination_offresEmploi_user($config["per_page"], $start)
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
        $link_reply ='javascript:void(0);';
        $link_postuler ='';
        $url_post ='';
        $opera_job ='';
        $today = date('Y-m-d');
        
        foreach ($MESOFFRES->result_array() as $row) {

         if ($row["date_fin_depot"] >= $today) {
          
            $url_post = base_url()."user/nouveau_job/".$row['codejob'];
            $link_postuler = '<a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>
              
              <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
            ';

            

         }
         else{
           $url_post = base_url()."user/nouveau_job/".$row['codejob'];

            if ($row['ceo'] == $connected_user) {

              $url_post = 'javascript:void(0);';

              $opera_job = '

                    <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
                                <i class="fa fa-edit"></i></a>
              ';

              $link_reply = 'javascript:void(0);';
              
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


         $connected_user = $this->session->userdata('id');
            $etat = '';
            $enligne = '';
            $link_reply ='javascript:void(0);';
            $link_postuler ='';
            $url_post ='';
            $opera_job ='';
            $today = date('Y-m-d');
            
            foreach ($MESOFFRES->result_array() as $row) {

               if ($row["date_fin_depot"] >= $today) {
                
                  $url_post = base_url()."user/nouveau_job/".$row['codejob'];
                  $link_postuler = '<a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>
                    
                    <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
                  ';

                  

               }
               else{
                 $url_post = base_url()."user/nouveau_job/".$row['codejob'];

                  if ($row['ceo'] == $connected_user) {

                    $url_post = 'javascript:void(0);';

                    $opera_job = '

                          <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
                                      <i class="fa fa-edit"></i></a>
                    ';

                    $link_reply = 'javascript:void(0);';
                    
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


         $connected_user = $this->session->userdata('id');
            $etat = '';
            $enligne = '';
            $link_reply ='javascript:void(0);';
            $link_postuler ='';
            $url_post ='';
            $opera_job ='';
            $today = date('Y-m-d');
            
             foreach ($MESOFFRES->result_array() as $row) {

               if ($row["date_fin_depot"] >= $today) {
                
                  $url_post = base_url()."user/nouveau_job/".$row['codejob'];
                  $link_postuler = '<a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>
                    
                    <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
                  ';

                  

               }
               else{
                 $url_post = base_url()."user/nouveau_job/".$row['codejob'];

                  if ($row['ceo'] == $connected_user) {

                    $url_post = 'javascript:void(0);';

                    $opera_job = '

                          <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
                                      <i class="fa fa-edit"></i></a>
                    ';

                    $link_reply = 'javascript:void(0);';
                    
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


        $connected_user = $this->session->userdata('id');
            $etat = '';
            $enligne = '';
            $link_reply ='javascript:void(0);';
            $link_postuler ='';
            $url_post ='';
            $opera_job ='';
            $today = date('Y-m-d');
            
             foreach ($MESOFFRES->result_array() as $row) {

               if ($row["date_fin_depot"] >= $today) {
                
                  $url_post = base_url()."user/nouveau_job/".$row['codejob'];
                  $link_postuler = '<a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>
                    
                    <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
                  ';

                  

               }
               else{
                 $url_post = base_url()."user/nouveau_job/".$row['codejob'];

                  if ($row['ceo'] == $connected_user) {

                    $url_post = 'javascript:void(0);';

                    $opera_job = '

                          <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
                                      <i class="fa fa-edit"></i></a>
                    ';

                    $link_reply = 'javascript:void(0);';
                    
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


         $connected_user = $this->session->userdata('id');
            $etat = '';
            $enligne = '';
            $link_reply ='javascript:void(0);';
            $link_postuler ='';
            $url_post ='';
            $opera_job ='';
            $today = date('Y-m-d');
            
             foreach ($MESOFFRES->result_array() as $row) {

               if ($row["date_fin_depot"] >= $today) {
                
                  $url_post = base_url()."user/nouveau_job/".$row['codejob'];
                  $link_postuler = '<a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>
                    
                    <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
                  ';

                  

               }
               else{
                 $url_post = base_url()."user/nouveau_job/".$row['codejob'];

                  if ($row['ceo'] == $connected_user) {

                    $url_post = 'javascript:void(0);';

                    $opera_job = '

                          <a href="'.$url_post.'" class="btn btn-warning mb-2 pr-2">
                                      <i class="fa fa-edit"></i></a>
                    ';

                    $link_reply = 'javascript:void(0);';
                    
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
         redirect('user/basic', 'refresh');
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
           redirect('user/basic_image', 'refresh');
     }
     if ($_FILES['user_image2']['size'] > 0) {
       # code...
        $data = array(
          'cv'     => $this->upload_cv()
        );
       $query = $this->crud_model->update_crud($id_user, $data);
       $this->session->set_flashdata('message', 'modification avec succès');
           redirect('user/basic_image', 'refresh');
     }
     else{

        $this->session->set_flashdata('message2', 'Veillez selectionner la photo');
        redirect('user/basic_image', 'refresh');

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
                   redirect('user/basic_secure', 'refresh');

               }
               else{
   
                $this->session->set_flashdata('message2', 'les deux mot de passe doivent être identiques');
                redirect('user/basic_secure', 'refresh');
               }
         
          }

       }
       else{

          $this->session->set_flashdata('message2', 'information incorecte');
          redirect('user/basic_secure', 'refresh');
       }
     
  } 

  function view_1($param1='', $param2='', $param3=''){
      
	  if($param1=='display_delete') {

	  	 $this->session->set_flashdata('message', 'suppression avec succès ');

	    $query = $this->crud_model->delete_notifacation_tag($param2);
	    redirect('user/notification');
	  }

	  if($param1=='display_delete_message') {

	    $query = $this->crud_model->delete_message_tag($param3);
	    redirect('user/message/'.$param2);
	  }
	  else{

	  }

  }

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


                $sub_array[] = '<input type="checkbox" class="delete_checkbox" value="'.$row->idart.'" id="delete_checkbox" />'; 

                // $sub_array[] = $etat;
               
                $sub_array[] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35" />';
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



      function operation_padding_article(){

          if($_FILES["user_image"]["size"] > 0)  
          {  
               $insert_data = array(  
                   'nom'          =>     $this->input->post('nom'),  
                   'description'    =>     htmlspecialchars($this->input->post("description")),
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
                   'nom'            =>     $this->input->post('nom'),  
                   'description'    =>     htmlspecialchars($this->input->post("description")),
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

              if ($key['idrole'] == 3) {
                $url ="journaliste/padding_article";

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
                   'nom'            =>     $this->input->post('nom'),  
                   'description'    =>     htmlspecialchars($this->input->post("description")),
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
                   'nom'            =>     $this->input->post('nom'),  
                   'description'    =>     htmlspecialchars($this->input->post("description")),
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
                
                $output['image']  = $row->image;

                $output['link']   ='
                <a href="'.base_url().'user/modification/'.$row->idart.'" class="text-center text-info">modifier la description de l\'article</a>';

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
     'country_table'   => $this->crud_model->fetch_details_pagination_to_users_count3($config["per_page"], $start)
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


    function education(){
    $id = $this->session->userdata('id');
    if ($this->input->post('nom_univ') && $this->input->post('gradeobtenu') 
      && $this->input->post('localisation') && $this->input->post('annee_obt')) {
      # code...

      $data = array(
            'nom_univ'        => $this->input->post('nom_univ'),
            'gradeobtenu'     => $this->input->post('gradeobtenu'),
            'localisation'    => $this->input->post('localisation'),
            'annee_obt'       => $this->input->post('annee_obt'),
            'id'              => $id,
            'description'        => $this->input->post('description')
           );
       $query = $this->crud_model->insert_education($data);
        if($query > 0)
        {

          $this->session->set_flashdata('message', 'Information ajoutées avec succès');
          redirect('user/profile/', 'refresh');
        }
        else{
          
          $this->session->set_flashdata("message2", "erreur lors d'enregistrememt");
          redirect('user/profile/', 'refresh');

        }
    }
    else{

      $this->session->set_flashdata("message2", "erreur lors d'enregistrememt");
      redirect('user/profile/', 'refresh');
    }
    

  }


  function suppresion_operations($param1='', $param2='', $param3='', $param4='')
  {
    if ($param1=='delete_users_skills') {
      $id = $param2;
      $idskills = $param3;
      $this->crud_model->delete_users_skills($id, $idskills);

      $this->session->set_flashdata('message', 'Information supprimée avec succès');
      redirect('user/profile/', 'refresh');
    }
    if ($param1=='delete_users_interesse') {
      $id = $param2;
      $idintersse = $param3;
      $this->crud_model->delete_users_interesse($id, $idintersse);

      $this->session->set_flashdata('message', 'Information supprimée avec succès');
      redirect('user/profile/', 'refresh');
    }
    if ($param1=='delete_users_education_faite') {
      $id = $param2;
      $idedic = $param3;
      $this->crud_model->delete_users_education($id, $idedic);

      $this->session->set_flashdata('message', 'Information supprimée avec succès');
      redirect('user/profile/', 'refresh');
    }
  }

  function add_interesse(){

    $id = $this->session->userdata('id');
    $number = count($this->input->post('name')); 
     if($number > 0)  
     {  
          for($i=0; $i<$number; $i++)  
          {  
               if(trim($_POST["name"][$i] != ''))  
               {  

                  $data['nom'] = $this->input->post('name')[$i];
                  $data['id']   = $id;
                  $query = $this->crud_model->insert_interesse_entrep($data);
               }  
          }

          if($query > 0)
          {

            echo "informations ajoutées avec succès";
            redirect('user/profile/', 'refresh');
          }
          else{
            echo "erreur liée aux opérations! veillez-verifier les informations requises";
          }
            
     }  
     else  
     {  
          echo "veillez entrer le nom de votre competense svp!!!";  
     }  
   }

   function add_skill(){

    $id = $this->session->userdata('id');
    $number = count($this->input->post('name')); 
     if($number > 0)  
     {  
          for($i=0; $i<$number; $i++)  
          {  
               if(trim($_POST["name"][$i] != ''))  
               {  

                  $data['nomskills'] = $this->input->post('name')[$i];
                  $data['id']   = $id;
                  $query = $this->crud_model->insert_users_skills($data);
               }  
          }

          if($query > 0)
          {

            echo "informations ajoutées avec succès";
            redirect('user/profile/', 'refresh');
          }
          else{
            echo "erreur liée aux opérations! veillez-verifier les informations requises";
          }
            
     }  
     else  
     {  
          echo "veillez entrer le nom de votre competense svp!!!";  
     }  
   }














}



 ?>