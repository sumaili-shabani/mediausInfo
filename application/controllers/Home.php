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


		function publication($param1='', $param2=''){

			$data['title']			="Détail des articles";
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


			$this->load->view('frontend/show_art', $data);

		}
		// fin script publication 



		function index(){
			$data['title']			="Les infos à la une";
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

		function contact(){

			$data['title']			="Contrat du site";
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

		function contrat(){

			$data['title']			="Contrat du site";
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


	 function article($param1=''){

			$data['title']			= "Détail de l'article ".$param1;
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


			$this->load->view('frontend/article_tag', $data);

		}

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
			      <div class="col-md-6">
			        <div class="news-post image-post2">
			          <div class="post-gallery">
			            <img src="'.base_url().'upload/article/'.$key->image.'" alt="" style="height: 250px;">
			            <div class="hover-box">
			              <div class="inner-hover">
			                <a class="category-post world" href="'.base_url().'home/publication/'.$key->idcat.'/'.$key->nom_cat.'"> '.$key->nom_cat.' </a>

			                <h2><a href="'.base_url().'home/article/'.$key->idart.'">'.nl2br(substr($key->nom, 0,50)).'...</a></h2>
			                <ul class="post-tags">
			                  <li><i class="fa fa-clock-o"></i> '.nl2br(substr(date(DATE_RFC822, strtotime($key->created_at)), 0, 23)).'</li>
			                  <li><a href="#"><i class="fa fa-eye"></i><span>  '.$nombre_vue.'</span></a></li>
			                </ul>
			              </div>
			            </div>
			          </div>
			          <div class="post-content">
			            <p>
			              '.nl2br(substr($key->description, 0,200)).' ...
			            </p>
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












		

}



 ?>