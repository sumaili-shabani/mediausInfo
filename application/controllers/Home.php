<?php 

defined('BASEPATH') OR exit('No direct script access allowed');  
class home extends CI_Controller
{
		private $token;
		private $connected;
		public function __construct()
		{
		  parent::__construct();
		  
		  $this->load->library('form_validation');
		  $this->load->library('encrypt');
	      $this->load->library('pdf');
		  $this->load->model('crud_model'); 

		  $this->load->helper('url');

		  $this->token = "sk_test_51GzffmHcKfZ3B3C9DATC3YXIdad2ummtHcNgVK4E5ksCLbFWWLYAyXHRtVzjt8RGeejvUb6Z2yUk740hBAviBSyP00mwxmNmP1";
		  $this->connected = $this->session->userdata('admin_login');

		}


		function index(){
			$data['title']			="Les infos à la une";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$data['populars']  	= $this->crud_model->Select_popular_menu();
			$data['padding_articles']  	= $this->crud_model->Select_padding_articles_tri();
			
			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			$data['offres_art']  = $this->crud_model->Select_offres_emploies();
			$data['appel_offres_art']  = $this->crud_model->Select_appels_offres();

			$data['maison_art']  = $this->crud_model->Select_maison_art();

			$data['videos_footer']  = $this->crud_model->Select_our_videos();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


			$this->load->view('frontend/exemple', $data);
      		// $this->load->view('backend/admin/templete_admin', $data);
		}

		function about(){
			$data['title']			="Les infos à la une";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$data['populars']  	= $this->crud_model->Select_popular_menu();
			$data['padding_articles']  	= $this->crud_model->Select_padding_articles_tri();
			
			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			$data['offres_art']  = $this->crud_model->Select_offres_emploies();
			$data['appel_offres_art']  = $this->crud_model->Select_appels_offres();

			$data['maison_art']  = $this->crud_model->Select_maison_art();

			$data['videos_footer']  = $this->crud_model->Select_our_videos();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


			$this->load->view('frontend/about', $data);
      		// $this->load->view('backend/admin/templete_admin', $data);
		}

		function contrat(){

			$data['title'] ="Contrat et politique de confidentialité de confidentialité du site";

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$data['populars']  	= $this->crud_model->Select_popular_menu();
			$data['padding_articles']  	= $this->crud_model->Select_padding_articles_tri();

			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			$data['offres_art']  = $this->crud_model->Select_offres_emploies();
			$data['appel_offres_art']  = $this->crud_model->Select_appels_offres();

			$data['maison_art']  = $this->crud_model->Select_maison_art();

			$data['videos_footer']  = $this->crud_model->Select_our_videos();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


			$this->load->view('frontend/contrat', $data);

		}

		function offres_emplois(){

			$data['title']="Liste des offres d'emplois";

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$data['populars']  	= $this->crud_model->Select_popular_menu();
			$data['padding_articles']  	= $this->crud_model->Select_padding_articles_tri();


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
		      
		    $data['users'] = $this->crud_model->fetch_connected($this->connected);

			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			$data['offres_art']  = $this->crud_model->Select_offres_emploies();
			$data['appel_offres_art']  = $this->crud_model->Select_appels_offres();

			$data['maison_art']  = $this->crud_model->Select_maison_art();

			$data['videos_footer']  = $this->crud_model->Select_our_videos();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();

			$this->load->view('frontend/offres_emplois', $data);

		}

		function publication($param1='', $param2=''){

			$data['title']			="Détail des articles";
			$data['title2']			= $param2;

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$data['populars']  	= $this->crud_model->Select_popular_menu();
			$data['padding_articles']  	= $this->crud_model->Select_padding_articles_tri();



			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			$data['offres_art']  = $this->crud_model->Select_offres_emploies();
			$data['appel_offres_art']  = $this->crud_model->Select_appels_offres();

			$data['maison_art']  = $this->crud_model->Select_maison_art();

			$data['videos_footer']  = $this->crud_model->Select_our_videos();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['articles_recents_detail'] = $this->crud_model->Select_articles_recents_datail();

			$data['article_tag']  = $this->crud_model->Select_our_article_tag($param1);


			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


			$this->load->view('frontend/publication', $data);

		}
		// fin script publication 

		 function article($param1=''){


	 		$title_job = $this->crud_model->get_name_article_pub($param1);
			$data['title']			= $title_job;

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$data['populars']  	= $this->crud_model->Select_popular_menu();
			$data['padding_articles']  	= $this->crud_model->Select_padding_articles_tri();

			

			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			$data['offres_art']  = $this->crud_model->Select_offres_emploies();
			$data['appel_offres_art']  = $this->crud_model->Select_appels_offres();

			$data['maison_art']  = $this->crud_model->Select_maison_art();

			$data['videos_footer']  = $this->crud_model->Select_our_videos();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['articles_recents_detail'] = $this->crud_model->Select_articles_recents_datail();

			$data['offre_tag']  = $this->crud_model->Select_our_articles_tag($param1);

			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


			$this->load->view('frontend/article', $data);

		}


		function contact(){

			$data['title']			="Contrat pour information";

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$data['populars']  	= $this->crud_model->Select_popular_menu();
			$data['padding_articles']  	= $this->crud_model->Select_padding_articles_tri();


			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			$data['offres_art']  = $this->crud_model->Select_offres_emploies();
			$data['appel_offres_art']  = $this->crud_model->Select_appels_offres();

			$data['maison_art']  = $this->crud_model->Select_maison_art();

			$data['videos_footer']  = $this->crud_model->Select_our_videos();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();



			$this->load->view('frontend/contact', $data);

		}

		

		function condition(){

			$data['title']			="Condition et terme d'utilisation du site";
			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			$data['offres_art']  = $this->crud_model->Select_offres_emploies();
			$data['appel_offres_art']  = $this->crud_model->Select_appels_offres();

			$data['maison_art']  = $this->crud_model->Select_maison_art();

			$data['videos_footer']  = $this->crud_model->Select_our_videos();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


			$this->load->view('frontend/condition', $data);

		}



		// script pour les videos
		function video_all(){

			$data['title']			="Nos vidéos!";
			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			$data['offres_art']  = $this->crud_model->Select_offres_emploies();
			$data['appel_offres_art']  = $this->crud_model->Select_appels_offres();

			$data['maison_art']  = $this->crud_model->Select_maison_art();

			$data['videos_footer']  = $this->crud_model->Select_our_videos();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


			$this->load->view('frontend/video', $data);

		}

		function video($param1=''){

			$data['title']			="Détail de la vidéos ".$param1;
			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			$data['offres_art']  = $this->crud_model->Select_offres_emploies();
			$data['appel_offres_art']  = $this->crud_model->Select_appels_offres();

			$data['maison_art']  = $this->crud_model->Select_maison_art();

			$data['videos_footer']  = $this->crud_model->Select_our_videos();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['articles_recents_detail'] = $this->crud_model->Select_articles_recents_datail();

			$data['videos_tag']  = $this->crud_model->Select_our_videos_tag($param1);

			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


			$this->load->view('frontend/video_tag', $data);

		}
		// fin script video 

		// script pour les maison
		function maison_all(){

			$data['title']			="Vous cherchez une maison ,un terrain , un bureau,..?";
			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			$data['offres_art']  = $this->crud_model->Select_offres_emploies();
			$data['appel_offres_art']  = $this->crud_model->Select_appels_offres();

			$data['maison_art']  = $this->crud_model->Select_maison_art();

			$data['videos_footer']  = $this->crud_model->Select_our_videos();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


			$this->load->view('frontend/maison', $data);

		}

		function maison($param1=''){

			$data['title']			="Détail de la vidéos ".$param1;
			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			$data['offres_art']  = $this->crud_model->Select_offres_emploies();
			$data['appel_offres_art']  = $this->crud_model->Select_appels_offres();

			$data['maison_art']  = $this->crud_model->Select_maison_art();

			$data['videos_footer']  = $this->crud_model->Select_our_videos();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['articles_recents_detail'] = $this->crud_model->Select_articles_recents_datail();

			$data['maison_tag']  = $this->crud_model->Select_our_maison_tag($param1);

			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


			$this->load->view('frontend/maison_tag', $data);

		}

		// fin script maison 

		// script pour les offre
		function offre_all(){

			$data['title']			="Les offres d'emplois";
			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			$data['offres_art']  = $this->crud_model->Select_offres_emploies();
			$data['appel_offres_art']  = $this->crud_model->Select_appels_offres();

			$data['maison_art']  = $this->crud_model->Select_maison_art();

			$data['videos_footer']  = $this->crud_model->Select_our_videos();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


			$this->load->view('frontend/offre_all', $data);

		}

		function offre($param1=''){

			$data['title']			= "Détail de l'offre ".$param1;
			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			$data['offres_art']  = $this->crud_model->Select_offres_emploies();
			$data['appel_offres_art']  = $this->crud_model->Select_appels_offres();

			$data['maison_art']  = $this->crud_model->Select_maison_art();

			$data['videos_footer']  = $this->crud_model->Select_our_videos();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['articles_recents_detail'] = $this->crud_model->Select_articles_recents_datail();

			$data['offre_tag']  = $this->crud_model->Select_our_offre_tag($param1);

			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


			$this->load->view('frontend/offre_tag', $data);

		}

		// script pour les offre
		function appel_offres_all(){

			$data['title']			="Les appels d'offres d'emplois";
			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			$data['offres_art']  = $this->crud_model->Select_offres_emploies();
			$data['appel_offres_art']  = $this->crud_model->Select_appels_offres();

			$data['maison_art']  = $this->crud_model->Select_maison_art();

			$data['videos_footer']  = $this->crud_model->Select_our_videos();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


			$this->load->view('frontend/appel_offre_all', $data);

		}

		function appel_offre($param1=''){

			$data['title']			= "Détail de l'appel d'offre ".$param1;
			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			$data['offres_art']  = $this->crud_model->Select_offres_emploies();
			$data['appel_offres_art']  = $this->crud_model->Select_appels_offres();

			$data['maison_art']  = $this->crud_model->Select_maison_art();

			$data['videos_footer']  = $this->crud_model->Select_our_videos();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['articles_recents_detail'] = $this->crud_model->Select_articles_recents_datail();

			$data['appeloffre_tag']  = $this->crud_model->Select_our_appel_offre_tag($param1);

			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


			$this->load->view('frontend/appel_offre', $data);

		}

		function detail_offre($param1=''){

			$data['title']			= "Détail du fichier de l'offre ";
			$data['categories']  	= $this->crud_model->Select_category_menu();
			$data['categories2']  	= $this->crud_model->Select_category();

			$data['rand7']  		= $this->crud_model->Select_article_7_cool();
			$data['carousels_one']  = $this->crud_model->Select_article_carousel_cool();
			$data['ones'] 			= $this->crud_model->Select_article_carousel_one();

			$data['articles_recents'] = $this->crud_model->Select_articles_recents();

			$data['article_interview']  = $this->crud_model->Select_article_intervieux_cool();

			$data['article_blog_one']  = $this->crud_model->Select_article_by_cat();

			$data['article_publicite']  = $this->crud_model->Select_article_publicite();

			$data['offres_art']  = $this->crud_model->Select_offres_emploies();
			$data['appel_offres_art']  = $this->crud_model->Select_appels_offres();

			$data['maison_art']  = $this->crud_model->Select_maison_art();

			$data['videos_footer']  = $this->crud_model->Select_our_videos();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['articles_recents_detail'] = $this->crud_model->Select_articles_recents_datail();

			$data['offre_tag']  = $this->crud_model->Select_our_offre_tag($param1);
			
			$data['pub_publicite']  = $this->crud_model->Select_galery_publicite();
			$data['pub_publicite3']  = $this->crud_model->Select_galery_publicite_lm3();


			$this->load->view('frontend/detail_offre', $data);

		}

		// fin script offre 

		




		function show_carousel_4_article(){
			$output = '';
			$pubs 	= $this->crud_model->Select_article_4_cool();
			if ($pubs->num_rows() <= 0) {
				# code...
			}
			else{

				foreach ($pubs->result_array() as $row) {
					 $nombre_vue = $this->crud_model->show_number_vue_tag($row['idart']);
					 $output .= '
					<li>
						<div class="news-post image-post">
							<img src="'.base_url().'upload/article/'.$row["image"].'" alt="" style="width: 550px; height: 425px; " >
							<div class="hover-box">
								<div class="inner-hover">
									<a class="category-post world" href="'.base_url().'home/publication/'.$row["idcat"].'/'.$row["nom_cat"].'"> '.$row["nom_cat"].' </a>
									<h2>
										<a href="'.base_url().'home/article/'.$row["idart"].'">
										 '.substr($row["nom"], 0,90).' ... 
										 </a>
									</h2>
									<ul class="post-tags">
										<li><i class="fa fa-clock-o"></i>'.nl2br(substr(date(DATE_RFC822, strtotime($row["created_at"])), 0, 23)).'</li>
										
										<li><i class="fa fa-eye"></i>'.$nombre_vue.'</li>
									</ul>
								</div>
							</div>
						</div>
					</li>

					 ';
				}

			}

			echo($output);
			
		}

		/*

		les script commence pour la videos
		===================================

		*/
	// pagination de formations
	 function pagination_access_our_video()
	 {

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_videos();
	  $config["per_page"] = 4;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="pagination mb-0 pagination-list">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="page-item active"><i class="">&gt;&gt;</i>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="page-item active"><i class="">&lt;&lt;</i>';
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
	   'country_table'   => $this->crud_model->fetch_details_pagination_videos($config["per_page"], $start)
	  );
	  echo json_encode($output);
	 }


	 // recherche de formations
	 function fetch_search_our_video()
	 {
		  $output = '';
		  $query = '';
		  if($this->input->post('query'))
		  {
		   $query = $this->input->post('query');
		  }
		  $data = $this->crud_model->fetch_data_search_videos($query);
		  
		  if($data->num_rows() > 0)
		  {

		  	  
			   foreach($data->result() as $key)
			   {



			    $output .= '
			      <div class="col-md-6">
			        <div class="news-post video-post">
			          <img alt="" src="'.base_url().'upload/video/'.$key->image.'" style="height: 270px;">
			          <a href="'.base_url().'home/video/'.$key->idv.'" class="video-link"><i class="fa fa-play-circle-o"></i></a>
			          <div class="hover-box">
			            <h2><a href="'.base_url().'home/video/'.$key->idv.'">'.substr($key->nom, 0,80).' ...</a></h2>
			            <ul class="post-tags">
			              <li><i class="fa fa-clock-o"></i>'.substr(date(DATE_RFC822, strtotime($key->created_at)), 0, 23).'</li>
			            </ul>
			          </div>
			        </div>
			      </div>
			    ';
			   }
		  }
		  else
		  {
		   		$output .= '
		            <div class="media text-muted pt-3">
		                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
		                
		              </div>
		        ';
		  }

	  	echo $output;
	 }

	 // fin script video 


	 /*

		les script commence pour la maison
		===================================

		*/
	// pagination de maison
	 function pagination_access_our_maison()
	 {

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_maison();
	  $config["per_page"] = 3;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="pagination mb-0 pagination-list">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="page-item active"><i class="">&gt;&gt;</i>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="page-item active"><i class="">&lt;&lt;</i>';
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
	   'country_table'   => $this->crud_model->fetch_details_pagination_maisons($config["per_page"], $start)
	  );
	  echo json_encode($output);
	 }


	 // recherche de formations
	 function fetch_search_our_maison()
	 {
		  $output = '';
		  $query = '';
		  if($this->input->post('query'))
		  {
		   $query = $this->input->post('query');
		  }
		  $data = $this->crud_model->fetch_data_search_maisons($query);
		  
		  if($data->num_rows() > 0)
		  {

		  	  
			   foreach($data->result() as $key)
			   {



			    $output .= '
			       <div class="news-post article-post">
			        <div class="row">
			          <div class="col-sm-6">
			            <div class="post-gallery">
			              <img alt="" src="'.base_url().'upload/maison/'.$key->image.'" style="height: 270px;">
			              <a class="category-post world" href="javascript:void(0);">maison</a>
			            </div>
			          </div>
			          <div class="col-sm-6">
			            <div class="post-content">
			              <h2><a href="'.base_url().'home/maison/'.$key->idm.'">'.substr($key->nom, 0,1000).' &nbsp; '.substr($key->adresse, 0,80).' </a></h2>
			              <ul class="post-tags">
			              	<li>'.substr($key->auteur, 0,200).'&nbsp;&nbsp;<i class="fa fa-phone"></i> 
                				'.substr($key->telephone, 0,80).'</li>
			                <li><i class="fa fa-clock-o"></i>'.substr(date(DATE_RFC822, strtotime($key->created_at)), 0, 23).'</li>

			              </ul>
			              <p>'.substr($key->description, 0,800).' ...</p>
			              <a href="'.base_url().'home/maison/'.$key->idm.'" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Voir le détail</a>
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
		            <div class="media text-muted pt-3">
		                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
		                
		              </div>
		        ';
		  }

	  	echo $output;
	 }

	 // fin script maison 


	 /*

		les script commence pour les offres
		===================================

		*/
	// pagination de formations offres
	 function pagination_access_our_offre()
	 {

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_offre();
	  $config["per_page"] = 4;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="pagination mb-0 pagination-list">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="page-item active"><i class="">&gt;&gt;</i>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="page-item active"><i class="">&lt;&lt;</i>';
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
	   'country_table'   => $this->crud_model->fetch_details_pagination_offres($config["per_page"], $start)
	  );
	  echo json_encode($output);
	 }


	 // recherche de formations
	 function fetch_search_our_offre()
	 {
		  $output = '';
		  $query = '';
		  if($this->input->post('query'))
		  {
		   $query = $this->input->post('query');
		  }
		  $data = $this->crud_model->fetch_data_search_offres($query);
		  $today = date('Y-m-d');
          $status = '';
		  
		  if($data->num_rows() > 0)
		  {

		  	  
			   foreach($data->result() as $key)
			   {



			      if ($key->date_fin >= $today) {
			        $status= '<p> <span class="badge badge-success" style="background-color:green;">.</span></p>';
			      }
			      else{
			        $status= '<p> <span class="badge badge-success" style="background-color:red;">.</span></p>';
			      }

			     $output .= '

			      <div class="table-row">

			          <div class="second-col">
			            <p>'.substr($key->societe, 0,80).' ...</p>

			            <div class="post-autor-date">
			                '.$status.' 
			            </div>

			            <div class="post-autor-date">
			                <p> <a href="'.base_url().'home/detail_offre/'.$key->ido.'">lire le fichier</a></p>
			                <p>mise à jour '.substr(date(DATE_RFC822, strtotime($key->created_at)), 0, 23).'</p>
			            </div>

			          </div>


			          <div class="first-col">
			            <h2><a href="'.base_url().'home/offre/'.$key->ido.'">'.substr($key->nom, 0,80).'  - '.substr($key->lieu, 0,80).'</a></h2>
			            <p>'.substr($key->description, 0,300).' ... </p>
			          </div>
			          <div class="second-col">
			            <p><span>3</span> '.substr(date(DATE_RFC822, strtotime($key->date_debit)), 0, 23).' au </p>
			            <p><span>6</span> '.substr(date(DATE_RFC822, strtotime($key->date_fin)), 0, 23).'
			            </p>
			            <p>
			            <i class="fa fa-download"><a download="'.base_url().'upload/offre/'.$key->fichier.'" href="'.base_url().'upload/offre/'.$key->fichier.'"> télécharger</a></i>
			            </p>
			          </div>

			        </div>
			      
			     ';
			   }
		  }
		  else
		  {
		   		$output .= '
		            <div class="media text-muted pt-3">
		                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
		                
		              </div>
		        ';
		  }

	  	echo $output;
	 }

	 // fin script offres 

	  /*

		les script commence pour les appels d'offres
		===================================

		*/
	// pagination de formations appels d'offres
	 function pagination_access_our_appel_offre()
	 {

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_appel_offre();
	  $config["per_page"] = 4;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="pagination mb-0 pagination-list">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="page-item active"><i class="">&gt;&gt;</i>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="page-item active"><i class="">&lt;&lt;</i>';
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
	   'country_table'   => $this->crud_model->fetch_details_pagination_appel_offres($config["per_page"], $start)
	  );
	  echo json_encode($output);
	 }


	 // recherche de formations
	 function fetch_search_our_appel_offre()
	 {
		  $output = '';
		  $query = '';
		  if($this->input->post('query'))
		  {
		   $query = $this->input->post('query');
		  }
		  $data = $this->crud_model->fetch_data_search_appel_offre($query);
		  
		  if($data->num_rows() > 0)
		  {

		  	  
			   foreach($data->result() as $key)
			   {



			    $output .= '
			      <div class="col-md-6">
			        <div class="news-post video-post">
			          <img alt="" src="'.base_url().'upload/offre/'.$key->image.'" style="height: 270px;">
			         
			          <div class="hover-box">
			            <h2><a href="'.base_url().'home/appel_offre/'.$key->ida.'">'.substr($key->nom, 0,80).' ...</a></h2>
			            <ul class="post-tags">
			              <li><i class="fa fa-clock-o"></i>'.substr(date(DATE_RFC822, strtotime($key->created_at)), 0, 23).'</li>
			            </ul>
			          </div>
			        </div>
			      </div>
			    ';
			   }
		  }
		  else
		  {
		   		$output .= '
		            <div class="media text-muted pt-3">
		                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
		                
		              </div>
		        ';
		  }

	  	echo $output;
	 }

	 // fin script pour le detail dea articles 


	
		// insertion de vues 
		function insert_vue(){

			$idart 		= $this->input->post('idart');
			$machine 	= $this->input->post('machine');
			$test_existe = $this->crud_model->Select_idart_tag_insert($idart,$machine);
			if ($test_existe->num_rows() > 0) {
				echo("adresse ip existe deja");
			}
			else{

				$data_insert = array(
		            'idart'        => $this->input->post('idart'),
		            'machine'       => $this->input->post('machine')
		        );

		        $query = $this->crud_model->insert_vues_ip($data_insert);

			}
			
		}

		/*

		les script commence pour la articles
		===================================

		*/

	 // auto complete text roffres d'emplois
	  function fetch_auto_offres_articles()
	  {
	      echo $this->crud_model->fetch_data_auto_articles($this->uri->segment(3));
	  }

	// pagination de articles
	 function pagination_access_our_article()
	 {

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_articles();
	  $config["per_page"] = 4;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="flex-wr-c-c m-rl--7 p-t-15 pagination mb-0 pagination-list">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active page-item active"><i class="" style="color:white;">&gt;&gt;</i>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active page-item active"><i class="" style="color:white;">&lt;&lt;</i>';
	  $config["prev_tag_open"] = "<li class='page-item'>";
	  $config["prev_tag_close"] = "</li>";
	  $config["cur_tag_open"] = "<li class='flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active page-item active'><a href='#' class='page-link'>";
	  $config["cur_tag_close"] = "</a></li>";
	  $config["num_tag_open"] = "<li class='page-item'>";
	  $config["num_tag_close"] = "</li>";
	  $config["num_links"] = 1;
	  $this->pagination->initialize($config);
	  $page = $this->uri->segment(3);
	  $start = ($page - 1) * $config["per_page"];

	  $output = array(
	   'pagination_link' => $this->pagination->create_links(),
	   'country_table'   => $this->crud_model->fetch_details_pagination_articles($config["per_page"], $start)
	  );
	  echo json_encode($output);
	 }


	 // recherche de formations
	 function fetch_search_our_articles()
	 {
		  $output = '';
		  $query = '';
		  if($this->input->post('query'))
		  {
		   $query = $this->input->post('query');
		  }
		  $data = $this->crud_model->fetch_data_search_articles($query);
		  
		  if($data->num_rows() > 0)
		  {

		  	  
			   foreach($data->result() as $key)
			   {

			   	 $vues  =  $this->db->query("SELECT COUNT(idart) AS total FROM vues WHERE idart=".$key->idart." ");
			      if ($vues->num_rows() <=0) {
			        $nombre_vue = 0;
			      }
			      else{
			        foreach ($vues->result_array() as $key_vue) {
			          $nombre_vue = $key_vue['total'];
			        }
			      }

			    $output .= '
			      <div class="col-sm-6 p-r-25 p-r-15-sr991">
			        <!-- Item latest -->
			        <div class="m-b-45">
			          <a href="'.base_url().'home/article/'.$key->idart.'" class="wrap-pic-w hov1 trans-03">
			            <img src="'.base_url().'upload/article/'.$key->image.'" alt="IMG" style="height: 200px;">
			          </a>
			          <div class="p-t-16">
			            <h5 class="p-b-5">
			              <a href="'.base_url().'home/article/'.$key->idart.'" class="f1-m-3 cl2 hov-cl10 trans-03">
			                '.nl2br(substr($key->nom, 0,100)).'...
			              </a>
			            </h5>
			            <span class="cl8">
			             
			              <span class="f1-s-3 m-rl-3">
			                <i class="fa fa-eye"></i>  '.$nombre_vue.' vue(s) &nbsp;&nbsp; - &nbsp;&nbsp;
			              </span>
			              <span class="f1-s-3">
			                '.nl2br(substr(date(DATE_RFC822, strtotime($key->created_at)), 0, 23)).'
			              </span>
			            </span>
			          </div>
			        </div>
			      </div>

			      
			     ';

			   }
		  }
		  else
		  {
		   		$output .= '
		            <div class="media text-muted pt-3">
		                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
		                
		              </div>
		        ';
		  }

	  	echo $output;
	 }

	 // fin script articles 

	 function operation_contact(){

	  	if ($_FILES['user_image']['size'] > 0) {
	 		
	 		$logo = $this->upload_image_fichier_contact_radio();
	 		$insert_data = array(  

		           'nom'           =>     $this->input->post('name'),  
		           'sujet'         =>     $this->input->post("subject"),
		           'email'         =>     $this->input->post("email"),  
		           'message'       =>     $this->input->post("message"),
		           'fichier'       =>     $logo  
		           
			 ); 

	      	$requete=$this->crud_model->insert_contact($insert_data);
	      	echo("Nous vous répondrons dans un instant");	
	 	}
	 	else{
	 		$insert_data = array(  

		           'nom'           =>     $this->input->post('name'),  
		           'sujet'         =>     $this->input->post("subject"),
		           'email'         =>     $this->input->post("email"),  
		           'message'       =>     $this->input->post("message")		           
			 ); 

	      	$requete=$this->crud_model->insert_contact($insert_data);
	      	echo("Nous vous répondrons dans un instant");
	 	}
  
      }


      function upload_image_fichier_contact_radio()  
	  {  
	       if(isset($_FILES["user_image"]))  
	       {  
	            $extension = explode('.', $_FILES['user_image']['name']);  
	            $new_name = rand() . '.' . $extension[1];  
	            $destination = './upload/contact/' . $new_name;  
	            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
	            return $new_name;  
	       }  
	  }


	  /*
   les script pour offres d'emplois
   ================================
   */

    // auto complete text roffres d'emplois
	function fetch_auto_offres()
	{
	      echo $this->crud_model->fetch_data_auto_offres($this->uri->segment(3));
	}

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
    $config["full_tag_open"] = '<ul class="flex-wr-c-c m-rl--7 p-t-15 pagination mb-0 pagination-list">';
    $config["full_tag_close"] = '</ul>';
    $config["first_tag_open"] = '<li class="page-item">';
    $config["first_tag_close"] = '</li>';
    $config["last_tag_open"] = '<li class="page-item">';
    $config["last_tag_close"] = '</li>';
    $config['next_link'] = '<li class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active page-item active"><i class="btn btn-info">&gt;&gt;</i>';
    $config["next_tag_open"] = '<li class="page-item">';
    $config["next_tag_close"] = '</li>';
    $config["prev_link"] = '<li class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active page-item active"><i class="btn btn-info">&lt;&lt;</i>';
    $config["prev_tag_open"] = "<li class='page-item'>";
    $config["prev_tag_close"] = "</li>";
    $config["cur_tag_open"] = "<li class='flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active page-item active'><a href='#' class='page-link'>";
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
            <div class="card colmd-12 mb-2">
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
                  <div class="card col-md-12 mb-2">
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
                  <div class="card colmd-12 mb-2">
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
                  <div class="card col-md-12 mb-2">
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
                  <div class="card col-md-12 mb-2">
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















		

}



 ?>