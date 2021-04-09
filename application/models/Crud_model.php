<?php 
class crud_model extends CI_Model{

  

  // opertion role
  var $table1 = "role";  
  var $select_column1 = array("idrole", "nom", "created_at");  
  var $order_column1 = array(null, "nom", "created");
  // fin de la role

  // opertion tbl_info
  var $table2 = "tbl_info";  
  var $select_column2 = array("idinfo", "nom_site", "icone", "adresse", "tel1","tel2","facebook","twitter", "linkedin", "email", "termes", "confidentialite", 
    "description", "mission", "objectif","blog");  
  var $order_column2 = array(null, "nom_site", "adresse","tel1","tel2", 
    "description", "mission", "objectif","blog", null, null);
    // fin de la tbl_info

  // opertion category information
  var $table3 = "category";  
  var $select_column3 = array("idcat", "nom", "created_at");  
  var $order_column3 = array(null, "nom", "created_at");
  // fin category

  // opertion category information
  var $table4 = "video";  
  var $select_column4 = array("idv", "nom","description","lien","image", "created_at");  
  var $order_column4 = array(null, "nom","description","lien", "created_at");
  // fin category


  // opertion category information
  var $table5 = "profile_article";  
  var $select_column5 = array("idart", "nom","description","lien","image", 
    "type","idcat","nom_cat","created_at");  
  var $order_column5 = array(null, "nom","description","lien","type","idcat","nom_cat", "created_at");
  // fin category

  // opertion maison information
  var $table6 = "maison";  
  var $select_column6 = array("idm", "nom","auteur","telephone", "description","adresse","image", "created_at");  
  var $order_column6 = array(null, "nom","auteur","telephone","description","adresse","created_at");
  // fin maison

  // opertion offre information
  var $table7 = "offre";  
  var $select_column7 = array("ido", "nom","fichier","description","image", "created_at","societe","date_debit","date_fin","lieu");  
  var $order_column7 = array(null, "nom","fichier","description", "created_at","societe","date_debit","date_fin","lieu");
  // fin offre

  //users
  var $table8 = "users";  
  var $select_column8 = array("id", "first_name", "last_name", "email","image","telephone","full_adresse","biographie","date_nais","facebook","twitter","linkedin","idrole","sexe");  
  var $order_column8 = array(null, "first_name", "last_name","telephone","sexe","id", null, null);
  // fin information

  // opertion offre information
  var $table9 = "appel_offre";  
  var $select_column9 = array("ida", "nom","description","image", "created_at");  
  var $order_column9 = array(null, "nom","description", "created_at");
  // fin offre

  // opertion category information
  var $table10 = "profile_publicite";  
  var $select_column10 = array("idart","idp","etat", "nom","description","lien","image", 
    "type","idcat","nom_cat","created_at");  
  var $order_column10 = array(null, "nom","idp","etat","description","lien","type","idcat","nom_cat", "created_at");
  // fin category

   // opertion padding_article information
  var $table11 = "profile_padding_article";  
  var $select_column11 = array("idart","id_user","first_name","last_name","photo", "nom","description","lien","image", 
    "type","idcat","nom_cat","created_at");  
  var $order_column11 = array(null, "nom","description","lien","type","idcat","nom_cat","id_user","first_name","last_name","photo", "created_at");
  // fin padding_article

  // contact
  var $table12 = "contact";  
  var $select_column12 = array("id", "nom", "sujet","email", "message","fichier","created_at");  
  var $order_column12 = array(null, "nom", "sujet","email","fichier", null, null);
  // fin contact


    /*

    UTILISATION DE PORTAIL JOB
    MES SCRIPTS JOB COMMENCE DEJE
    ========================================================
    */
  // script pour les provinces
  var $table21 = "province";  
  var $select_column21 = array("idp", "nomp", "created_at");  
  var $order_column21 = array("idp", "nomp",null);
  // fin de ces scripts

  // script pour les ville
  var $table23 = "profile_ville";  
  var $select_column23 = array("idp", "nomp", "nomv","idv","created_at");  
  var $order_column23 = array("idv", "nomp","nomv",null);
  // fin de ces scripts

  // script pour les contrat
  var $table24 = "contrat";  
  var $select_column24 = array("idc", "nomc","created_at");  
  var $order_column24 = array("idc", "nomc",null);
  // fin de ces scripts

  // script pour les pays
  var $table25 = "tbl_pays";  
  var $select_column25 = array("idPays", "nompays","created_at");  
  var $order_column25 = array("idPays", "nompays",null);
  // fin de ces scripts

  // script pour les categorie d'entreprise
  var $table26 = "tbl_category";  
  var $select_column26 = array("idcat", "nomcat","created_at");  
  var $order_column26 = array("idcat", "nomcat",null);
  // fin de ces scripts
  // script pour les calification d'emploi
  var $table27 = "tbl_calification";  
  var $select_column27 = array("idcalification", "nomcalification","created_at");  
  var $order_column27 = array("idcalification", "nomcalification",null);
  // fin de ces scripts

  // script pour les calification d'emploi
  var $table28 = "tbl_competense";  
  var $select_column28 = array("idcompetense", "nomcompetense","created_at");  
  var $order_column28 = array("idcompetense", "nomcompetense",null);
  // fin de ces scripts

  // script pour les calification d'emploi
  var $table29 = "tbl_salaire";  
  var $select_column29 = array("idsalaire", "nomsalaire","created_at");  
  var $order_column29 = array("idsalaire", "nomsalaire",null);
  // fin de ces scripts

  // script pour les calification d'emploi
  var $table20 = "service";  
  var $select_column20 = array("ids", "noms","created_at");  
  var $order_column20 = array("ids", "noms",null);
  // fin de ces scripts

  // script pour les calification d'emploi
  var $table111 = "profile_paquet";  
  var $select_column111 = array("ids", "idpaquet","nompaquet","prix","noms","nombre_pub","nombre_jour","created_at");  
  var $order_column111 = array("ids", "noms",null);
  // fin de ces scripts

   //insertion des photos pour la galerie
  function insert_galery($data)  
  {  
      $this->db->insert('galery', $data);  
  }

    //insertion des photos pour la galerie
  function insert_galery2($data)  
  {  
      $this->db->insert('galery2', $data);  
  }

  //suppression des photos pour la galerie
  function delete_photo_galery($idg)  
  {  
       $this->db->where("idg", $idg);  
       $this->db->delete("galery");  
  }

  //suppression des photos pour la galerie
  function delete_photo_galery_personnele($idg)  
  {  
       $this->db->where("idg", $idg);  
       $this->db->delete("galery2");  
  }
  // pagination contact


  function fetch_data_auto($query)
 {
    $this->db->where('idrole', 2);
    $this->db->like('first_name', $query);
    $query = $this->db->get('users');
    if($query->num_rows() > 0)
    {
       foreach($query->result_array() as $row)
       {
        $output[] = array(
         'name'  => $row["first_name"],
         'image'  => $row["image"]
        );
       }
     echo json_encode($output);
    }
 }

// auto complete text roffres d'emplois
 function fetch_data_auto_offres($query)
 {

    $this->db->like('titre', $query);
    $this->db->or_like('titre', $query);
    $this->db->or_like('description_job', $query);
    $this->db->or_like('grade', $query);

    $query = $this->db->get('profile_job');
    if($query->num_rows() > 0)
    {
       foreach($query->result_array() as $row)
       {
        $output[] = array(
         'name'  => $row["titre"],
         'image'  => $row["logo"]
        );
       }
     echo json_encode($output);
    }
 }

 // auto complete text roffres d'emplois
 function fetch_data_auto_articles($query)
 {

    $this->db->like('nom', $query);
    $this->db->or_like('description', $query);
    $this->db->or_like('nom_cat', $query);
    
    $query = $this->db->get('profile_article');
    if($query->num_rows() > 0)
    {
       foreach($query->result_array() as $row)
       {
        $output[] = array(
         'name'  => $row["nom"],
         'image'  => $row["image"]
        );
       }
     echo json_encode($output);
    }
 }

  // pagination galery utilisateur
  function fetch_details_pagination_galery($limit, $start){
    $output = '';
    $this->db->select("*");
    $this->db->from("galery");
    // $this->db->order_by("nom", "ASC");
    $this->db->order_by("idg", "DESC");

    $this->db->limit($limit, $start);
    $query = $this->db->get();
    
    foreach($query->result() as $row)
    {
      
     $output .= '

        <div class="col-md-3" align="center" style="margin-bottom:24px;">
            <img src="'.base_url().'upload/galery/'.$row->image.'" class="img-thumbnail img-responsive" style="height: 200px;" />
              <br />
          <input type="checkbox" name="images[]" idg="'.$row->idg.'" class="select checkbox_id image_galery" value="upload/galery/'.$row->image.'" /> &nbsp;
          <a href="javascript:void(0);" class="text-danger supprimer" idg="'.$row->idg.'">
            <i class="fa fa-trash"></i> supprimer
          </a>

          &nbsp;
          <a href="javascript:void(0);" class="text-primary update" idg="'.$row->idg.'">
            <i class="fa fa-edit"></i> editer
          </a>

       </div>
     ';
    }
    
    return $output;
  }
  // fin pagination

  // pagination galery utilisateur
  function fetch_details_pagination_galery2($limit, $start){
    $output = '';
    $this->db->select("*");
    $this->db->from("galery2");
    // $this->db->order_by("nom", "ASC");
    $this->db->order_by("idg", "DESC");

    $this->db->limit($limit, $start);
    $query = $this->db->get();
    
    foreach($query->result() as $row)
    {
      
     $output .= '

        <div class="col-md-3" align="center" style="margin-bottom:24px;">
            <img src="'.base_url().'upload/galery/'.$row->image.'" class="img-thumbnail img-responsive" style="height: 200px;" />
              <br />
          <input type="checkbox" name="images[]" idg="'.$row->idg.'" class="select checkbox_id image_galery" value="upload/galery/'.$row->image.'" /> &nbsp;
          <a href="javascript:void(0);" class="text-danger supprimer" idg="'.$row->idg.'">
            <i class="fa fa-trash"></i> supprimer
          </a>

          &nbsp;
          <a href="javascript:void(0);" class="text-primary update" idg="'.$row->idg.'">
            <i class="fa fa-edit"></i> editer
          </a>

       </div>
     ';
    }
    
    return $output;
  }
  // fin pagination

  function fetch_pagination_galery(){
    $this->db->order_by("idg", "DESC");
    $query = $this->db->get("galery");
    return $query->num_rows();
  }

  // fin pagination
  function fetch_pagination_galery_personnel(){
    $this->db->order_by("idg", "DESC");
    $query = $this->db->get("galery2");
    return $query->num_rows();
  }

  // contact 
  function insert_contact($data)  
  {  
       $this->db->insert('contact', $data);  
  }
 

  // online 
  function insert_online($data){
      $this->db->insert('online', $data);
  }
  // creation de compte
  function insert_user($data)
  {
    $this->db->insert('users', $data);
    return $this->db->insert_id();
  } 

  // insertion dans la table recuper pwd 
  function insert_recupere($data){
     $this->db->insert('recupere', $data);
  }

  // suppression deconnexion en ligne 
  function delete_online($id_user){
    $this->db->where('id_user', $id_user);
    $this->db->delete("online");
  }

  //modification des utilisateurs
  function update_user($email, $data)
  {
    $this->db->where('email', $email);
    return $this->db->update('users', $data);
  }

  // insertion des notifications 
  function insert_notification($data)  
  {  
     $this->db->insert('notification', $data);  
  }

  // insertion des vues 
  function insert_vues_ip($data)  
  {  
     $this->db->insert('vues', $data);  
  }
  // utilisateur connecte
  function fetch_connected($id){
      $this->db->where('id',$id);
      return $this->db->get('users')->result_array();
  }

   // paiement en attente
  function fetch_padding_paiement(){
      $this->db->order_by('created_at',"desc");
      return $this->db->get('profile_paiement_padding');
  }

  // paiement normal
  function fetch_normal_paiement(){
      $this->db->order_by('created_at',"desc");
      return $this->db->get('profile_paiement');
  }
  
  function get_info_user(){
      $nom = $this->db->get("users")->result_array();
      return $nom;
  }

  function get_info_padding_transaction($idp){
      $nom = $this->db->get_where("paiement_pading", array(
        'idp' =>  $idp
      ))->result_array();
      return $nom;
  }

  function get_info_paiement_transaction($idp){
      $nom = $this->db->get_where("paiement", array(
        'idp' =>  $idp
      ))->result_array();
      return $nom;
  }

  function get_info_expiration_compte_users($id){
      $nom = $this->db->get_where("users", array(
        'id' =>  $id
      ))->result_array();
      return $nom;
  }

  function get_expire_day_count($today){
      $jours = $this->db->query("SELECT DATE_ADD('".$today."', INTERVAL 30 DaY) AS jours")->result_array();
      foreach ($jours as $key) {
        $nom = $key['jours'];
        return $nom;
      }
      
  }

  function get_max_id_user(){
      $jours = $this->db->query("SELECT MAX(id) AS dernier FROM users")->result_array();
      foreach ($jours as $key) {
        $id = $key['dernier'];
        return $id;
      }
      
  }

  function get_info_user_tag($id){
      $this->db->where('id',$id);
      $nom = $this->db->get("users")->result_array();
      return $nom;
  }

  function get_info_info_tag_entreprise($identrep){
      $this->db->where('identrep',$identrep);
      $nom = $this->db->get("entreprise");
      return $nom;
  }

  function get_info_entreprise_tag($id){
      $this->db->where('ceo',$id);
      $nom = $this->db->get("entreprise");
      return $nom;
  }

  function get_info_entreprise_tag_code($codejob){
      $this->db->where('codejob',$codejob);
      $this->db->limit(1);
      $nom = $this->db->get("profile_job")->result_array();
      foreach ($nom as $key) {
        $identrep = $key["identrep"];
        return $identrep ;
      }
      return $nom;
  }

  function get_ceo_info_entreprise_tag_code($codejob){
      $this->db->where('codejob',$codejob);
      $this->db->limit(1);
      $nom = $this->db->get("profile_job")->result_array();
      foreach ($nom as $key) {
        $ceo = $key["ceo"];
        return $ceo ;
      }
      return $nom;
  }

  function get_name_job_pub($codejob){
      $this->db->where("codejob", $codejob);
      $nom = $this->db->get("profile_job")->result_array();
      foreach ($nom as $key) {
        $titre = $key["nomcat"].' - '.$key["titre"];
        return $titre ;
      }

  }

  function get_name_article_pub($idart){
      $this->db->where("idart", $idart);
      $nom = $this->db->get("profile_article")->result_array();
      foreach ($nom as $key) {
        $titre = $key["nom"];
        return $titre ;
      }

  }

  function get_info_job_tag_by_codejob($codejob){
      $this->db->where('codejob',$codejob);
      $this->db->limit(1);
      $nom = $this->db->get("profile_job");
      return $nom;
  }

  function get_info_reply_tojob_tag_by_codejob($codejob){
      $this->db->where('codejob',$codejob);
      $this->db->limit(50);
      $nom = $this->db->get("profile_demandejob");
      return $nom;
  }

  function get_info_job_tag_to_reply($idjob, $id_user){
      $nom = $this->db->get_where("demandejob", array(
        'idjob'   =>  $idjob,
        'id_user' =>  $id_user
      ));
      return $nom;
  }

  function get_offres_entreprise_tag($ceo){

      $today = date('Y-m-d');
      $nom = $this->db->query("SELECT * FROM profile_job 
        WHERE ceo=".$ceo." AND date_fin_depot >= '".$today."' ORDER BY idjob DESC ");
      return $nom;
  }

  function get_mes_demandes_emplois($id_user){

      $today = date('Y-m-d');
      $nom = $this->db->query("SELECT * FROM profile_reply_job 
        WHERE id_user=".$id_user." AND date_fin_depot >= '".$today."' ORDER BY codejob DESC LIMIT 10 ");
      return $nom;
  }

   function insert_nouvelle_entreprise($data)
   {
    $this->db->insert('entreprise', $data);
   } 

  function update_crud($user_id, $data)  
  {  
       $this->db->where("id", $user_id);  
       $this->db->update("users", $data);  
  }

  function update_paiement_etat($codeFacture, $data)  
  {  
       $this->db->where("codeFacture", $codeFacture);  
       $this->db->update("paiement", $data);  
  }

  function update_crud_entreprise($ceo, $data)  
  {  
       $this->db->where("ceo", $ceo);  
       $this->db->update("entreprise", $data);  
  }


   function fetch_article_tag($idart){
      $this->db->where('idart',$idart);
      return $this->db->get('padding_article')->result_array();
  }

  function delete_notifacation_tag($id){
    $this->db->where('id', $id);
    $this->db->delete('notification');
  }

  function get_name_user($id){
      $this->db->where("id", $id);
      $nom = $this->db->get("users")->result_array();
      foreach ($nom as $key) {
        return $key["first_name"];
      }

  }

  function statistiques_nombre($query){
      $my_nombre;
      $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." ");
      if ($data_ok->num_rows() > 0) {

        foreach ($data_ok->result_array() as $key) {
          $my_nombre = $key['nombre'];
        }
        # code...
      }
      else{
           $my_nombre = 0;
      }

      return $my_nombre;
  }

  function statistiques_nombre_where($query, $colone,$value){
      $my_nombre;
      $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." WHERE ".$colone."='".$value."' ");
      if ($data_ok->num_rows() > 0) {

        foreach ($data_ok->result_array() as $key) {
          $my_nombre = $key['nombre'];
        }
        # code...
      }
      else{
           $my_nombre = 0;
      }

      return $my_nombre;

  }

  function statistiques_nombre_where_null($query, $colone,$value){
      $my_nombre;
      $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." WHERE ".$colone." is ".$value." ");
      if ($data_ok->num_rows() > 0) {

        foreach ($data_ok->result_array() as $key) {
          $my_nombre = $key['nombre'];
        }
        # code...
      }
      else{
           $my_nombre = 0;
      }

      return $my_nombre;

  }

  function Select_users()
  {
      $this->db->order_by('first_name','ASC');
      $this->db->limit(50);
      return $this->db->get('users');
  }

  function Select_roles()
  {
      $this->db->order_by('nom','ASC');
      $this->db->limit(50);
      return $this->db->get('role');
  }

  function Select_videos()
  {
      $this->db->order_by('nom','ASC');
      $this->db->limit(50);
      return $this->db->get('video');
  }

  function Select_maison()
  {
      $this->db->order_by('nom','ASC');
      $this->db->limit(50);
      return $this->db->get('maison');
  }

   function Select_offre()
  {
      $this->db->order_by('nom','ASC');
      $this->db->limit(50);
      return $this->db->get('offre');
  }

   function Select_appel_offre()
  {
      $this->db->order_by('nom','ASC');
      $this->db->limit(50);
      return $this->db->get('appel_offre');
  }



  function Select_articles()
  {
      $this->db->order_by('nom','ASC');
      $this->db->limit(50);
      return $this->db->get('profile_article');
  }


   function Select_padding_articles()
  {
      $this->db->order_by('idart','DESC');
      $this->db->where('id_user', $this->session->userdata('id'));
      $this->db->limit(50);
      return $this->db->get('profile_padding_article');
  }

  function Select_padding_articles2()
  {
      $this->db->order_by('idart','DESC');
      // $this->db->where('id_user', $this->session->userdata('id'));
      $this->db->limit(50);
      return $this->db->get('profile_padding_article');
  }

  function Select_category()
  {
      $this->db->order_by('nom','ASC');
      $this->db->limit(50);
      return $this->db->get('category');
  }



  function Select_category_menu()
  {
      $this->db->order_by('nom','ASC');
      $this->db->limit(6);
      return $this->db->get('category');
  }

  function Select_popular_menu()
  {
     
      return $this->db->query('SELECT * FROM profile_vue ORDER BY RAND() LIMIT 5');
  }

  function Select_article_4_cool()
  {
      return $this->db->query('SELECT * FROM profile_article  GROUP BY idcat ORDER BY RAND() LIMIT 4');
  }

  function Select_article_7_cool()
  {
      return $this->db->query('SELECT * FROM profile_article   ORDER BY RAND() LIMIT 7');
  }

  function Select_articles_recents()
  {
      return $this->db->query('SELECT * FROM profile_article   ORDER BY created_at DESC LIMIT 10');
  }

  function Select_articles_recents_datail()
  {
      return $this->db->query('SELECT * FROM profile_article   ORDER BY created_at DESC LIMIT 4');
  }


  function Select_article_carousel_cool()
  {
      return $this->db->query('SELECT * FROM profile_article   ORDER BY RAND() LIMIT 3');
  }

  function Select_article_intervieux_cool()
  {
      return $this->db->query('SELECT * FROM profile_article   ORDER BY RAND() LIMIT 3');
  }

  function Select_article_carousel_one()
  {
      return $this->db->query('SELECT * FROM profile_article   ORDER BY RAND() LIMIT 1');
  }

  function Select_article_by_cat()
  {
      return $this->db->query('SELECT * FROM profile_article  GROUP BY idcat LIMIT 7 ');
  }

  function Select_padding_articles_tri()
  {
      return $this->db->query('SELECT * FROM profile_publicite  ORDER BY RAND() LIMIT 6 ');
  }

  function Select_article_publicite()
  {
      return $this->db->query('SELECT * FROM profile_publicite  LIMIT 10');
  }

  function Select_galery_publicite()
  {
      return $this->db->query('SELECT * FROM galery ORDER BY created_at DESC LIMIT 10');
  }

  function Select_galery_publicite_lm3()
  {
      return $this->db->query('SELECT * FROM galery2 ORDER BY created_at DESC LIMIT 4');
  }

  

  function Select_offres_emploies()
  {
      return $this->db->query('SELECT * FROM offre  LIMIT 6');
  }

  function Select_appels_offres()
  {
      return $this->db->query('SELECT * FROM appel_offre  LIMIT 6');
  }

  function Select_maison_art()
  {
      return $this->db->query('SELECT * FROM maison ORDER BY RAND() LIMIT 5');
  }

  function Select_our_videos()
  {
      return $this->db->query('SELECT * FROM video ORDER BY RAND() LIMIT 10');
  }

  function Select_our_videos_tag($idv)
  {   
      $this->db->limit(1);
      return $this->db->get_where("video", array(
        'idv' =>  $idv
      ));
  }

  function Select_our_article_tag($idcat)
  {   
      $this->db->limit(12);
      $this->db->order_by('created_at','DESC');
      return $this->db->get_where("profile_article", array(
        'idcat' =>  $idcat
      ));
  }

  function Select_our_maison_tag($idm)
  {   
      $this->db->limit(1);
      return $this->db->get_where("maison", array(
        'idm' =>  $idm
      ));
  }

  function Select_our_offre_tag($ido)
  {   
      $this->db->limit(1);
      return $this->db->get_where("offre", array(
        'ido' =>  $ido
      ));
  }

  function Select_our_articles_tag($idart)
  {   
      $this->db->limit(1);
      return $this->db->get_where("profile_article", array(
        'idart' =>  $idart
      ));
  }

   function Select_idart_tag_insert($idart, $machine)
  {   
      $this->db->limit(1);
      return $this->db->get_where("vues", array(
        'idart'   =>  $idart,
        'machine' =>  $machine
      ));
  }

  function Select_our_appel_offre_tag($ida)
  {   
      $this->db->limit(1);
      return $this->db->get_where("appel_offre", array(
        'ida' =>  $ida
      ));
  }


   function Select_contact_info_site()
  {
      return $this->db->query('SELECT * FROM tbl_info  LIMIT 1');
  }

  function show_number_vue_tag($idart)
  {   
      $nombre_vue = 0;
      $vues  =  $this->db->query("SELECT COUNT(idart) AS total FROM vues WHERE idart=".$idart." ");
      if ($vues->num_rows() <=0) {
        $nombre_vue = 0;
      }
      else{
        foreach ($vues->result_array() as $key_vue) {
          $nombre_vue = $key_vue['total'];
        }
      }
      return $nombre_vue;
  }






  // script users
    function make_query_users()  
    {  
          
         $this->db->select($this->select_column8);  
         $this->db->from($this->table8);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("first_name", $_POST["search"]["value"]);  
              $this->db->or_like("last_name", $_POST["search"]["value"]); 
              $this->db->or_like("full_adresse", $_POST["search"]["value"]); 
              $this->db->or_like("biographie", $_POST["search"]["value"]);  
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column8[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('id', 'DESC');  
         }  
    }

    function make_datatables_users(){  
         $this->make_query_users();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_users(){  
         $this->make_query_users();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_users()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table8);  
         return $this->db->count_all_results();  
    }

    function insert_users($data)  
    {  
         $this->db->insert('users', $data);  
    }

    
    function update_users($id, $data)  
    {  
         $this->db->where("id", $id);  
         $this->db->update("users", $data);  
    }


    function delete_users($id)  
    {  
         $this->db->where("id", $id);  
         $this->db->delete("users");  
    }

    function fetch_single_users($id)  
    {  
         $this->db->where("id", $id);  
         $query=$this->db->get('users');  
         return $query->result();  
    }

    //fin de script users

    // script pour role du site
   function make_query_role()  
   {  
          
         $this->db->select($this->select_column1);  
         $this->db->from($this->table1);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("idrole", $_POST["search"]["value"]);  
              $this->db->or_like("nom", $_POST["search"]["value"]);
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column1[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('idrole', 'DESC');  
         }  
    }

   function make_datatables_role(){  
         $this->make_query_role();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_role(){  
         $this->make_query_role();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_role()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table1);  
         return $this->db->count_all_results();  
    }

    function insert_role($data)  
    {  
         $this->db->insert('role', $data);  
    }

    
    function update_role($idrole, $data)  
    {  
         $this->db->where("idrole", $idrole);  
         $this->db->update("role", $data);  
    }

    function update_galery_entrep($idg, $data)  
    {  
         $this->db->where("idg", $idg);  
         $this->db->update("galery", $data);  
    }

    function update_galery_entrep_personnele($idg, $data)  
    {  
         $this->db->where("idg", $idg);  
         $this->db->update("galery2", $data);  
    }


    function delete_role($idrole)  
    {  
         $this->db->where("idrole", $idrole);  
         $this->db->delete("role");  
    }

    function fetch_single_role($idrole)  
    {  
         $this->db->where("idrole", $idrole);  
         $query=$this->db->get('role');  
         return $query->result();  
    } 

    function fetch_single_galery_entreprise($idg)  
    {  
         $this->db->where("idg", $idg);  
         $query=$this->db->get('galery');  
         return $query->result();  
    } 

    function fetch_single_galery_entreprise_personnele($idg)  
    {  
         $this->db->where("idg", $idg);  
         $query=$this->db->get('galery2');  
         return $query->result();  
    } 
  // fin de script role

    // script pour information du site
    function make_query_tbl_info()  
    {  
          
         $this->db->select($this->select_column2);  
         $this->db->from($this->table2);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("adresse", $_POST["search"]["value"]);  
              $this->db->or_like("nom_site", $_POST["search"]["value"]);
              $this->db->or_like("tel1", $_POST["search"]["value"]); 
              $this->db->or_like("tel2", $_POST["search"]["value"]);
              $this->db->or_like("email", $_POST["search"]["value"]);
              $this->db->or_like("idinfo", $_POST["search"]["value"]);
              $this->db->or_like("termes", $_POST["search"]["value"]);
              $this->db->or_like("confidentialite", $_POST["search"]["value"]);  
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column2[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('idinfo', 'DESC');  
         }  
    }

   function make_datatables_tbl_info(){  
         $this->make_query_tbl_info();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_tbl_info(){  
         $this->make_query_tbl_info();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_tbl_info()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table2);  
         return $this->db->count_all_results();  
    }

    function insert_tbl_info($data)  
    {  
         $this->db->insert('tbl_info', $data);  
    }

    
    function update_tbl_info($idinfo, $data)  
    {  
         $this->db->where("idinfo", $idinfo);  
         $this->db->update("tbl_info", $data);  
    }


    function delete_tbl_info($idinfo)  
    {  
         $this->db->where("idinfo", $idinfo);  
         $this->db->delete("tbl_info");  
    }

    function delete_compte_utilisateur($id)  
    {  
         $this->db->where("id", $id);  
         $this->db->delete("users");  
    }

    function fetch_single_tbl_info($idinfo)  
    {  
         $this->db->where("idinfo", $idinfo);  
         $query=$this->db->get('tbl_info');  
         return $query->result();  
    } 

    // fin de tbl_info 

    // script pour ctegorie mrchandise du site categorie information
  function make_query_category_info()  
  {  
      
     $this->db->select($this->select_column3);  
     $this->db->from($this->table3);
     
     if(isset($_POST["search"]["value"]))  
     {  
          $this->db->like("idcat", $_POST["search"]["value"]);  
          $this->db->or_like("nom", $_POST["search"]["value"]);
     }  
     if(isset($_POST["order"]))  
     {  
          $this->db->order_by($this->order_column3[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
     }  
     else  
     {  
          $this->db->order_by('idcat', 'DESC');  
     }  
  }

   function make_datatables_category_info(){  
         $this->make_query_category_info();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_category_info(){  
         $this->make_query_category_info();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_category_info()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table3);  
         return $this->db->count_all_results();  
    }

    function insert_category_info($data)  
    {  
         $this->db->insert('category', $data);  
    }

    
    function update_category_info($idcat, $data)  
    {  
         $this->db->where("idcat", $idcat);  
         $this->db->update("category", $data);  
    }


    function delete_category_info($idcat)  
    {  
         $this->db->where("idcat", $idcat);  
         $this->db->delete("category");  
    }

    function fetch_single_category_info($idcat)  
    {  
         $this->db->where("idcat", $idcat);  
         $query=$this->db->get('category');  
         return $query->result();  
    } 
  ///fin de la categorie information

  // script pour nos video 
  function make_query_video()  
  {  
      
     $this->db->select($this->select_column4);  
     $this->db->from($this->table4);
     
     if(isset($_POST["search"]["value"]))  
     {  
          $this->db->like("idv", $_POST["search"]["value"]);  
          $this->db->or_like("nom", $_POST["search"]["value"]);
          $this->db->or_like("description", $_POST["search"]["value"]);
          $this->db->or_like("lien", $_POST["search"]["value"]);
     }  
     if(isset($_POST["order"]))  
     {  
          $this->db->order_by($this->order_column4[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
     }  
     else  
     {  
          $this->db->order_by('idv', 'DESC');  
     }  
  }

   function make_datatables_video(){  
         $this->make_query_video();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_video(){  
         $this->make_query_video();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_video()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table4);  
         return $this->db->count_all_results();  
    }

    function insert_video($data)  
    {  
         $this->db->insert('video', $data);  
    }

    
    function update_video($idv, $data)  
    {  
         $this->db->where("idv", $idv);  
         $this->db->update("video", $data);  
    }


    function delete_video($idv)  
    {  
         $this->db->where("idv", $idv);  
         $this->db->delete("video");  
    }

    function fetch_single_video($idv)  
    {  
         $this->db->where("idv", $idv);  
         $query=$this->db->get('video');  
         return $query->result();  
    } 
  ///fin de la video information


// script pour nos article 
  function make_query_article()  
  {  
      
     $this->db->select($this->select_column5);  
     $this->db->from($this->table5);
     $this->db->limit(30);
     
     if(isset($_POST["search"]["value"]))  
     {  
          $this->db->like("idart", $_POST["search"]["value"]);  
          $this->db->or_like("nom", $_POST["search"]["value"]);
          $this->db->or_like("description", $_POST["search"]["value"]);
          $this->db->or_like("lien", $_POST["search"]["value"]);
          $this->db->or_like("nom_cat", $_POST["search"]["value"]);
          $this->db->or_like("type", $_POST["search"]["value"]);
     }  
     if(isset($_POST["order"]))  
     {  
          $this->db->order_by($this->order_column5[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
     }  
     else  
     {  
          $this->db->order_by('idart', 'DESC');  
     }  
  }

   function make_datatables_article(){  
         $this->make_query_article();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_article(){  
         $this->make_query_article();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_article()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table5);  
         return $this->db->count_all_results();  
    }

    function insert_article($data)  
    {  
         $this->db->insert('article', $data);  
    }

    
    function update_article($idart, $data)  
    {  
         $this->db->where("idart", $idart);  
         $this->db->update("article", $data);  
    }


    function delete_article($idart)  
    {  
         $this->db->where("idart", $idart);  
         $this->db->delete("article");  
    }

    function fetch_single_article($idart)  
    {  
         $this->db->where("idart", $idart);  
         $query=$this->db->get('article');  
         return $query->result();  
    } 
  ///fin de la article information

    // script pour nos maisons 
  function make_query_maison()  
  {  
      
     $this->db->select($this->select_column6);  
     $this->db->from($this->table6);
     
     if(isset($_POST["search"]["value"]))  
     {  
          $this->db->like("idm", $_POST["search"]["value"]);  
          $this->db->or_like("nom", $_POST["search"]["value"]);
          $this->db->or_like("description", $_POST["search"]["value"]);
          $this->db->or_like("adresse", $_POST["search"]["value"]);
     }  
     if(isset($_POST["order"]))  
     {  
          $this->db->order_by($this->order_column6[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
     }  
     else  
     {  
          $this->db->order_by('idm', 'DESC');  
     }  
  }

   function make_datatables_maison(){  
         $this->make_query_maison();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_maison(){  
         $this->make_query_maison();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_maison()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table6);  
         return $this->db->count_all_results();  
    }

    function insert_maison($data)  
    {  
         $this->db->insert('maison', $data);  
    }

    
    function update_maison($idm, $data)  
    {  
         $this->db->where("idm", $idm);  
         $this->db->update("maison", $data);  
    }


    function delete_maison($idm)  
    {  
         $this->db->where("idm", $idm);  
         $this->db->delete("maison");  
    }

    function fetch_single_maison($idm)  
    {  
         $this->db->where("idm", $idm);  
         $query=$this->db->get('maison');  
         return $query->result();  
    } 
  ///fin de la maison information

  // script pour nos offres 
  function make_query_offre()  
  {  
      
     $this->db->select($this->select_column7);  
     $this->db->from($this->table7);
     
     if(isset($_POST["search"]["value"]))  
     {  
          $this->db->like("ido", $_POST["search"]["value"]);  
          $this->db->or_like("nom", $_POST["search"]["value"]);
          $this->db->or_like("description", $_POST["search"]["value"]);
     }  
     if(isset($_POST["order"]))  
     {  
          $this->db->order_by($this->order_column7[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
     }  
     else  
     {  
          $this->db->order_by('ido', 'DESC');  
     }  
  }

   function make_datatables_offre(){  
         $this->make_query_offre();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_offre(){  
         $this->make_query_offre();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_offre()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table7);  
         return $this->db->count_all_results();  
    }

    function insert_offre($data)  
    {  
         $this->db->insert('offre', $data);  
    }

    
    function update_offre($ido, $data)  
    {  
         $this->db->where("ido", $ido);  
         $this->db->update("offre", $data);  
    }


    function delete_offre($ido)  
    {  
         $this->db->where("ido", $ido);  
         $this->db->delete("offre");  
    }

    function fetch_single_offre($ido)  
    {  
         $this->db->where("ido", $ido);  
         $query=$this->db->get('offre');  
         return $query->result();  
    } 
  ///fin de la maison information

    // script pour nos appel_offre 
  function make_query_appel_offre()  
  {  
      
     $this->db->select($this->select_column9);  
     $this->db->from($this->table9);
     
     if(isset($_POST["search"]["value"]))  
     {  
          $this->db->like("ida", $_POST["search"]["value"]);  
          $this->db->or_like("nom", $_POST["search"]["value"]);
          $this->db->or_like("description", $_POST["search"]["value"]);
     }  
     if(isset($_POST["order"]))  
     {  
          $this->db->order_by($this->order_column9[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
     }  
     else  
     {  
          $this->db->order_by('ida', 'DESC');  
     }  
  }

   function make_datatables_appel_offre(){  
         $this->make_query_appel_offre();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_appel_offre(){  
         $this->make_query_appel_offre();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_appel_offre()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table9);  
         return $this->db->count_all_results();  
    }

    function insert_appel_offre($data)  
    {  
         $this->db->insert('appel_offre', $data);  
    }

    
    function update_appel_offre($ida, $data)  
    {  
         $this->db->where("ida", $ida);  
         $this->db->update("appel_offre", $data);  
    }


    function delete_appel_offre($ida)  
    {  
         $this->db->where("ida", $ida);  
         $this->db->delete("appel_offre");  
    }

    function fetch_single_appel_offre($ida)  
    {  
         $this->db->where("ida", $ida);  
         $query=$this->db->get('appel_offre');  
         return $query->result();  
    } 
  ///fin de la appel_offre information

    // script pour nos publicite 
  function make_query_publicite()  
  {  
      
     $this->db->select($this->select_column10);  
     $this->db->from($this->table10);
     $this->db->limit(50);
     
     if(isset($_POST["search"]["value"]))  
     {  
          $this->db->like("idart", $_POST["search"]["value"]);  
          $this->db->or_like("nom", $_POST["search"]["value"]);
          $this->db->or_like("description", $_POST["search"]["value"]);
          $this->db->or_like("lien", $_POST["search"]["value"]);
          $this->db->or_like("nom_cat", $_POST["search"]["value"]);
          $this->db->or_like("type", $_POST["search"]["value"]);
          $this->db->or_like("etat", $_POST["search"]["value"]);
     }  
     if(isset($_POST["order"]))  
     {  
          $this->db->order_by($this->order_column10[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
     }  
     else  
     {  
          $this->db->order_by('idp', 'DESC');  
     }  
  }

   function make_datatables_publicite(){  
         $this->make_query_publicite();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_publicite(){  
         $this->make_query_publicite();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_publicite()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table10);  
         return $this->db->count_all_results();  
    }

    function insert_publicite($data)  
    {  
         $this->db->insert('publicite', $data);  
    }

    
    function update_publicite($idp, $data)  
    {  
         $this->db->where("idp", $idp);  
         $this->db->update("publicite", $data);  
    }


    function delete_publicite($idp)  
    {  
         $this->db->where("idp", $idp);  
         $this->db->delete("publicite");  
    }

    function fetch_single_publicite($idp)  
    {  
         $this->db->where("idp", $idp);  
         $query=$this->db->get('publicite');  
         return $query->result();  
    } 
  ///fin de la publicite information


    // script pour nos padding_article 
  function make_query_padding_article()  
  {  
    $connected = 0;
    if($this->session->userdata('id'))
    {
          $connected = $this->session->userdata('id');
    }
    elseif($this->session->userdata('admin_login'))
    {
           $connected = $this->session->userdata('admin_login');
    }
    else{
       $connected = 0;
    }

     $this->db->select($this->select_column11);  
     $this->db->from($this->table11);
     $this->db->where('id_user', $connected);
     $this->db->limit(50);
     
     if(isset($_POST["search"]["value"]))  
     {  
          $this->db->like("idart", $_POST["search"]["value"]);  
          $this->db->or_like("nom", $_POST["search"]["value"]);
          $this->db->or_like("description", $_POST["search"]["value"]);
          $this->db->or_like("lien", $_POST["search"]["value"]);
          $this->db->or_like("nom_cat", $_POST["search"]["value"]);
          $this->db->or_like("type", $_POST["search"]["value"]);

          $this->db->or_like("first_name", $_POST["search"]["value"]);
          $this->db->or_like("last_name", $_POST["search"]["value"]);
     }  
     if(isset($_POST["order"]))  
     {  
          $this->db->order_by($this->order_column11[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
     }  
     else  
     {  
          $this->db->order_by('idart', 'DESC');  
     }  
  }

   function make_datatables_padding_article(){  
         $this->make_query_padding_article(); 

         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_padding_article(){

       
         $this->make_query_padding_article();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_padding_article()  
    {  
             
         $this->db->select("*");  
         $this->db->from($this->table11); 
         return $this->db->count_all_results();  
    }

    function insert_padding_article($data)  
    {  
         $this->db->insert('padding_article', $data);  
    }

    
    function update_padding_article($idart, $data)  
    {  
         $this->db->where("idart", $idart);  
         $this->db->update("padding_article", $data);  
    }


    function delete_padding_article($idart)  
    {  
         $this->db->where("idart", $idart);  
         $this->db->delete("padding_article");  
    }

    function fetch_single_padding_article($idart)  
    {  
         $this->db->where("idart", $idart);  
         $query=$this->db->get('padding_article');  
         return $query->result();  
    } 
  ///fin de la padding_article information

    // information de contact 
    // pagination contact
    function fetch_pagination_message_auditeur(){
      $this->db->order_by("id", "DESC");
      $query = $this->db->get("contact");
      return $query->num_rows();
    }

    // pagination message utulisateur
      function fetch_details_pagination_contact_message_auditeur($limit, $start){
          $output = '';
        $this->db->select("*");
        $this->db->from("contact");
        // $this->db->order_by("nom", "ASC");
        $this->db->order_by("id", "DESC");

        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        foreach($query->result() as $row)
        {
          $etat;
          if ($row->fichier !='') {
            $etat ='
              <a href="'.base_url().'upload/contact/'.$row->fichier.'" class="link link-light">
                        <em class="icon ni ni-clip-h"></em>
                    </a>
            '; 
          }
          else{
            $etat ='
              <a href="javascript:void(0);" class="link link-light">
                        
                    </a>
            ';
          }

         $output .= '

        <div class="nk-ibx-item is-unread">

          <input type="checkbox" name="checkbox_id" class="checkbox_id" value="'.$row->email.'">
                
                <div class="nk-ibx-item-elem nk-ibx-item-user">
                    <div class="user-card">
                        <div class="user-avatar">
                            <img src="'.base_url().'/upload/photo/icone-user.png" alt="">
                        </div>
                        <div class="user-name">
                            <div class="lead-text">'.$row->nom.'</div>
                        </div>
                    </div>
                </div>
                <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                    <div class="nk-ibx-context-group">
                        <div class="nk-ibx-context-badges"><span class="badge badge-primary">'.substr($row->sujet, 0,11).'...</span></div>
                        <div class="nk-ibx-context">
                            <span class="nk-ibx-context-text">
                                <span class="heading">'.$row->sujet.' </span>
                        </div>
                    </div>
                </div>
                <div class="nk-ibx-item-elem nk-ibx-item-attach">
                    '.$etat.'
                </div>
                <div class="nk-ibx-item-elem nk-ibx-item-time">
                    <div class="sub-text">'.nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)).'</div>
                </div>
                <div class="nk-ibx-item-elem nk-ibx-item-tools">
                    <div class="ibx-actions">
                        <ul class="ibx-actions-hidden gx-1">
                            <li>
                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-trigger update" id="'.$row->id.'" data-toggle="tooltip" data-placement="top" title="" data-original-title="voir le détail"><em class="icon ni ni-archived"></em>


                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-trigger delete" id="'.$row->id.'" data-toggle="tooltip" data-placement="top" title="" data-original-title="Supprimer"><em class="icon ni ni-trash"></em>

                                </a>
                            </li>
                        </ul>
                        <ul class="ibx-actions-visible gx-2">
                            <li>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li>

                                            <a class="dropdown-item update" href="javascript:void(0);" id="'.$row->id.'"><em class="icon ni ni-eye"></em><span>voir le détail</span></a></li>
                                            <li><a class="dropdown-item delete" href="javascript:void(0);" id="'.$row->id.'"><em class="icon ni ni-trash"></em><span>Supprimer</span></a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .nk-ibx-item -->






         ';
        }
        
        return $output;
      }
      // fin pagination

      // recherche des contacts
     function fetch_data_search_contactAuditeur_to_lean($query)
     {
      $this->db->select("*");
      $this->db->from("contact");
      $this->db->limit(9);
      if($query != '')
      {
       $this->db->like('id', $query);
       $this->db->or_like('nom', $query);
       $this->db->or_like('created_at', $query);

      }
      $this->db->order_by('nom', 'ASC');
      return $this->db->get();
     }

    function fetch_single_contact_information($id)  
    {  
         $this->db->where("id", $id);  
         $query=$this->db->get('contact');  
         return $query->result();  
    }

    function delete_information_contact_send($email)  
    {  
         $this->db->where("email", $email);  
         $this->db->delete("contact");  
    }

    // fin operation script contact


    /*
      le script front-and commencent a partir d'ici
      et voilà le debut
  =======================================================================================================
  =======================================================================================================
    */

   function fetch_tag_pub_carousel($idcat)
   {
      $this->db->select("*");
      $this->db->from("profile_article");
      $this->db->limit(6);
      if($idcat != '')
      {
        $this->db->where("idcat", $idcat);
      }
      $this->db->order_by('nom', 'ASC');
      return $this->db->get();
   }

    function fetch_pagination_videos()
    {
      $query = $this->db->query("SELECT * FROM video");
      return $query->num_rows();
    }

    function fetch_pagination_articles()
    {
      $this->db->limit(50);
      $this->db->order_by('created_at', 'DESC');
      $query = $this->db->query("SELECT * FROM profile_article");
      return $query->num_rows();
    }

    // recherche de videos
   function fetch_data_search_videos($query)
   {
    $this->db->select("*");
    $this->db->from("video");
    $this->db->limit(8);
    if($query != '')
    {
     $this->db->like('nom', $query);
     $this->db->or_like('description', $query);

    }
    $this->db->order_by('nom', 'ASC');
    return $this->db->get();
   }

    // recherche de articles
   function fetch_data_search_articles($query)
   {
    $this->db->select("*");
    $this->db->from("profile_article");
    $this->db->limit(8);
    if($query != '')
    {
     $this->db->like('nom', $query);
     $this->db->or_like('description', $query);

    }
    $this->db->order_by('nom', 'ASC');
    return $this->db->get();
   }

   // detail de livres de formations
   function fetch_details_pagination_videos($limit, $start)
   {
    $output = '';
    $this->db->select("*");
    $this->db->from("video");
    $this->db->order_by("nom", "ASC");
    $this->db->limit($limit, $start);
    $query = $this->db->get();

    foreach($query->result() as $key)
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
    
    return $output;
   }

   // fin script video 
   function fetch_pagination_maison()
    {
      $query = $this->db->query("SELECT * FROM maison");
      return $query->num_rows();
    }

    // recherche de videos
   function fetch_data_search_maisons($query)
   {
    $this->db->select("*");
    $this->db->from("maison");
    $this->db->limit(8);
    if($query != '')
    {
     $this->db->like('nom', $query);
     $this->db->or_like('description', $query);
     $this->db->or_like('adresse', $query);
     $this->db->or_like('auteur', $query);
     $this->db->or_like('telephone', $query);

    }
    $this->db->order_by('nom', 'ASC');
    return $this->db->get();
   }

   // detail de livres de formations
   function fetch_details_pagination_maisons($limit, $start)
   {
    $output = '';
    $this->db->select("*");
    $this->db->from("maison");
    $this->db->order_by("nom", "ASC");
    $this->db->limit($limit, $start);
    $query = $this->db->get();

    foreach($query->result() as $key)
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
    
    return $output;
   }
   // fin de la maison 

   // debit script offre 
   function fetch_pagination_offre()
   {
      $query = $this->db->query("SELECT * FROM offre");
      return $query->num_rows();
   }

   // debit script appel d'offre 
   function fetch_pagination_appel_offre()
   {
      $query = $this->db->query("SELECT * FROM appel_offre LIMIT 50");
      return $query->num_rows();
   }

    // recherche de offre
   function fetch_data_search_offres($query)
   {
    $this->db->select("*");
    $this->db->from("offre");
    $this->db->limit(8);
    if($query != '')
    {
     $this->db->like('nom', $query);
     $this->db->or_like('description', $query);

     $this->db->or_like('societe', $query);
     $this->db->or_like('lieu', $query);

     

    }
    $this->db->order_by('nom', 'ASC');
    return $this->db->get();
   }

    // recherche de appel d'offre
   function fetch_data_search_appel_offre($query)
   {
    $this->db->select("*");
    $this->db->from("appel_offre");
    $this->db->limit(8);
    if($query != '')
    {
     $this->db->like('nom', $query);
     $this->db->or_like('description', $query);
     $this->db->or_like('societe', $query);
     $this->db->or_like('lieu', $query);

    }
    $this->db->order_by('nom', 'ASC');
    return $this->db->get();
   }

   // detail de livres de formations
   function fetch_details_pagination_offres($limit, $start)
   {
    $output = '';
    $this->db->select("*");
    $this->db->from("offre");
    $this->db->order_by("nom", "ASC");
    $this->db->limit($limit, $start);
    $query = $this->db->get();

    $today = date('Y-m-d');
    $status = '';

    foreach($query->result() as $key)
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
            <p><span>6</span> '.substr(date(DATE_RFC822, strtotime($key->date_fin)), 0, 23).'</p>
            <p>
              <i class="fa fa-download"><a download="'.base_url().'upload/offre/'.$key->fichier.'" href="'.base_url().'upload/offre/'.$key->fichier.'"> télécharger</a></i>
            </p>
          </div>

           

            
          
        </div>
      
     ';
    }
    
    return $output;
   }

   // fin script appel d'offre 

   // detail de livres de appels d'offre
   function fetch_details_pagination_appel_offres($limit, $start)
   {
    $output = '';
    $this->db->select("*");
    $this->db->from("appel_offre");
    $this->db->order_by("nom", "ASC");
    $this->db->limit($limit, $start);
    $query = $this->db->get();

    foreach($query->result() as $key)
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
    
    return $output;
   }

   // fin script offre 

   // detail des articles par formations
   function fetch_details_pagination_articles($limit, $start)
   {
    $output = '';
    $this->db->select("*");
    $this->db->from("profile_article");
    $this->db->order_by("created_at", "DESC");
    $this->db->limit($limit, $start);
    $query = $this->db->get();



    foreach($query->result() as $key)
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
    
    return $output;
   }


   // script de contact 
  // contact
  function make_query_contact()  
  {  
      
     $this->db->select($this->select_column12);  
     $this->db->from($this->table12);  
     if(isset($_POST["search"]["value"]))  
     {  
          $this->db->like("sujet", $_POST["search"]["value"]);  
          $this->db->or_like("nom", $_POST["search"]["value"]);  
          $this->db->or_like("email", $_POST["search"]["value"]);  
     }  
     if(isset($_POST["order"]))  
     {  
          $this->db->order_by($this->order_column12[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
     }  
     else  
     {  
          $this->db->order_by('id', 'DESC');  
     }  
  }

  function make_datatables_contact(){  
     $this->make_query_contact();  
     if($_POST["length"] != -1)  
     {  
          $this->db->limit($_POST['length'], $_POST['start']);  
     }  
     $query = $this->db->get();  
     return $query->result();  
  }

  function get_filtered_data_contact(){  
     $this->make_query_contact();  
     $query = $this->db->get();  
     return $query->num_rows();  
  }       
  function get_all_data_contact()  
  {  
     $this->db->select("*");  
     $this->db->from($this->table12);  
     return $this->db->count_all_results();  
  }



  function update_contact($id, $data)  
  {  
     $this->db->where("id", $id);  
     $this->db->update("contact", $data);  
  }


  function delete_contact($id)  
  {  
     $this->db->where("id", $id);  
     $this->db->delete("contact");  
  }

  // suppression paiement padding 
  function delete_paiement_pading($idp)  
  {  
     $this->db->where("idp", $idp);  
     $this->db->delete("paiement_pading");  
  }

  // suppression paiement normal
  function delete_paiement_normal($idp)  
  {  
     $this->db->where("idp", $idp);  
     $this->db->delete("paiement");  
  }

  function fetch_single_contact($id)  
  {  
     $this->db->where("id", $id);  
     $query=$this->db->get('contact');  
     return $query->result();  
  }
  // fin de script 

  // pagination des utilisateurs connectés
  function fetch_pagination_ti_followe_count()
  {
    $query = $this->db->get("profile_users");
    return $query->num_rows();
  }

  // pagination des utilisateurs connectés
  function fetch_pagination_candidat_followe_count()
  {
    $this->db->where("idrole", 2);
    $this->db->limit(100);
    $query = $this->db->get("profile_candidat");
    return $query->num_rows();
  }

  // pagination des offresEmploi connectés
  function fetch_pagination_offresEmploi_followe_count()
  {

    $this->db->limit(100);
    $query = $this->db->get("profile_job");
    return $query->num_rows();
  }

  // pagination des utilisateurs connecters
    function fetch_details_pagination_to_users_count($limit, $start)
    {
        $output = '';
        $this->db->select("*");
        $this->db->from("profile_users");
        $this->db->order_by("first_name", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        $id = $this->session->userdata('admin_login');
        $etat = '';
        $enligne = '';
        
        foreach($query->result() as $row)
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
        
        return $output;
    }
    // fin pagination


    // pagination des utilisateurs connecters 2
    function fetch_details_pagination_to_users_count2($limit, $start)
    {
        $output = '';
        $this->db->select("*");
        $this->db->from("profile_users");
        $this->db->order_by("first_name", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        $id = $this->session->userdata('instuctor_login');
        $etat = '';
        $enligne = '';
        
        foreach($query->result() as $row)
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
        
        return $output;
    }
    // fin pagination


    // pagination des utilisateurs connecters 3
    function fetch_details_pagination_to_users_count3($limit, $start)
    {
        $output = '';
        $this->db->select("*");
        $this->db->from("profile_users");
        $this->db->order_by("first_name", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        $id = $this->session->userdata('id');
        $etat = '';
        $enligne = '';
        
        foreach($query->result() as $row)
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
        
        return $output;
    }
    // fin pagination


    // pagination des utilisateurs connecters 2
    function fetch_details_pagination_to_users_count4($limit, $start)
    {
        $output = '';
        $this->db->select("*");
        $this->db->from("profile_users");
        $this->db->order_by("first_name", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        $id = $this->session->userdata('entreprise_login');
        $etat = '';
        $enligne = '';
        
        foreach($query->result() as $row)
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
        
        return $output;
    }
    // fin pagination


    // fultre selon la province 
   function fultrage_fetch_data_candidat_by_province($query)
   {
    
    $this->db->limit(10);
    $this->db->order_by('first_name', 'ASC');
    $resultat = $this->db->get_where("profile_candidat", array(
      'idp'     =>  $query,
      'idrole'  =>  2
    ));

    return $resultat;
   
   
   }

   // fultre selon le sexe 
   function fultrage_fetch_data_candidat_by_sexe($query)
   {
    
    $this->db->limit(10);
    $this->db->order_by('first_name', 'ASC');
    $resultat = $this->db->get_where("profile_candidat", array(
      'sexe'     =>  $query,
      'idrole'  =>  2
    ));

    return $resultat;
   
   
   }

   // fultre selon les villes 
   function fultrage_fetch_data_candidat_by_ville($query)
   {
    
    $this->db->limit(10);
    $this->db->order_by('first_name', 'DESC');
    $resultat = $this->db->get_where("profile_candidat", array(
      'idv'     =>  $query,
      'idrole'  =>  2
    ));

    return $resultat;
   
   
   }


   // fultre selon la categorie 
   function fultrage_fetch_data_offre_by_categorie($query)
   {
    
    $this->db->limit(10);
    $this->db->order_by('titre', 'ASC');
    $resultat = $this->db->get_where("profile_job", array(
      'idcat'     =>  $query
    ));

    return $resultat;
   
   
   }

   // fultre selon la contrat 
   function fultrage_fetch_data_offre_by_contrat($query)
   {
    
    $this->db->limit(10);
    $this->db->order_by('titre', 'ASC');
    $resultat = $this->db->get_where("profile_job", array(
      'idcontrat'     =>  $query
    ));

    return $resultat;
   
   
   }

    // fultre selon la contrat 
   function fultrage_fetch_data_offre_by_salaire($query)
   {
    
    $this->db->limit(10);
    $this->db->order_by('titre', 'ASC');
    $resultat = $this->db->get_where("profile_job", array(
      'idsalaire'     =>  $query
    ));

    return $resultat;
   
   
   }

   // fultre selon la qualification 
   function fultrage_fetch_data_offre_by_qualification($query)
   {
    
    $this->db->limit(10);
    $this->db->order_by('titre', 'ASC');
    $resultat = $this->db->get_where("profile_job", array(
      'qualification'     =>  $query
    ));

    return $resultat;
   
   
   }


    // pagination des utilisateurs connecters 2
    function fetch_details_pagination_candidat($limit, $start)
    {
        $output = '';

        $this->db->select("*");
        $this->db->where("idrole", 2);
        $this->db->from("profile_candidat");
        $this->db->order_by("first_name", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        $id = $this->session->userdata('entreprise_login');
        $etat = '';
        $enligne = '';
        
        foreach($query->result() as $row)
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
        
        return $output;
    }
    // fin pagination

    // pagination des utilisateurs connecters 2
    function fetch_details_pagination_candidat_admin($limit, $start)
    {
        $output = '';

        $this->db->select("*");
        $this->db->where("idrole", 2);
        $this->db->from("profile_candidat");
        $this->db->order_by("first_name", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        $id = $this->session->userdata('admin_login');
        $etat = '';
        $enligne = '';
        
        foreach($query->result() as $row)
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
        
        return $output;
    }
    // fin pagination


    // pagination des utilisateurs connecters 2
    function fetch_details_pagination_offresEmploi($limit, $start)
    {
        $output = '';

        $this->db->select("*");
        $this->db->from("profile_job");
        $this->db->order_by("titre", "ASC");
        $this->db->limit($limit, $start);
        $MESOFFRES = $this->db->get();

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
        
        return $output;
    }
    // fin pagination

     // pagination des utilisateurs connecters 2
    function fetch_details_pagination_offresEmploi_admin($limit, $start)
    {
        $output = '';

        $this->db->select("*");
        $this->db->from("profile_job");
        $this->db->order_by("titre", "ASC");
        $this->db->limit($limit, $start);
        $MESOFFRES = $this->db->get();

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
        
        return $output;
    }
    // fin pagination

    // pagination des utilisateurs connecters 2
    function fetch_details_pagination_offresEmploi_user($limit, $start)
    {
        $output = '';

        $this->db->select("*");
        $this->db->from("profile_job");
        $this->db->order_by("titre", "ASC");
        $this->db->limit($limit, $start);
        $MESOFFRES = $this->db->get();

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
        
        return $output;
    }
    // fin pagination

    // pagination des utilisateurs connecters 2
    function fetch_details_pagination_offresEmploi_journaliste($limit, $start)
    {
        $output = '';

        $this->db->select("*");
        $this->db->from("profile_job");
        $this->db->order_by("titre", "ASC");
        $this->db->limit($limit, $start);
        $MESOFFRES = $this->db->get();

        $connected_user = $this->session->userdata('instuctor_login');
        $etat = '';
        $enligne = '';
        $link_reply ='javascript:void(0);';
        $link_postuler ='';
        $url_post ='';
        $opera_job ='';
        $today = date('Y-m-d');
        
        foreach ($MESOFFRES->result_array() as $row) {

         if ($row["date_fin_depot"] >= $today) {
          
            $url_post = base_url()."journaliste/nouveau_job/".$row['codejob'];
            $link_postuler = '<a href="'.$url_post.'" class="btn btn-secondary mb-2 pr-2"><i class="fa fa-pencil"></i> Postuler à cette offre</a>
              
              <a href="'.$url_post.'" class="btn btn-success mb-2 pr-2"><i class="fa fa-eye"></i> Lire +</a>
            ';

            

         }
         else{
           $url_post = base_url()."journaliste/nouveau_job/".$row['codejob'];

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
        
        return $output;
    }
    // fin pagination

    // recherche des utilisateurs par fultres
    function fetch_data_search_online_user_follow($query)
    {
      $this->db->select("*");
      $this->db->from("profile_users");
      $this->db->limit(6);
      if($query != '')
      {
       $this->db->like('id', $query);
       $this->db->or_like('first_name', $query);
       $this->db->or_like('last_name', $query);
       $this->db->or_like('full_adresse', $query);
       $this->db->or_like('telephone', $query);

      }
      $this->db->order_by('first_name', 'ASC');
      return $this->db->get();
    }

    // recherche candidats utilisateurs par fultres
    function fetch_data_search_candidats_user($query)
    {
      $this->db->select("*");
      $this->db->where("idrole", 2);
      $this->db->from("profile_candidat");
      $this->db->limit(6);
      if($query != '')
      {
       $this->db->like('id', $query);
       $this->db->or_like('first_name', $query);
       $this->db->or_like('last_name', $query);
       $this->db->or_like('full_adresse', $query);
       $this->db->or_like('telephone', $query);

      }
      $this->db->order_by('first_name', 'ASC');
      return $this->db->get();
    }

     // recherche offres utilisateurs par fultres
    function fetch_data_search_offres_emplois($query)
    {
      $this->db->select("*");
      $this->db->from("profile_job");
      $this->db->limit(6);
      if($query != '')
      {
       $this->db->like('codejob', $query);
       $this->db->or_like('titre', $query);
       $this->db->or_like('description_job', $query);
       $this->db->or_like('grade', $query);
       
      }
      $this->db->order_by('idjob', 'DESC');
      return $this->db->get();
    }


    // messagerie
    function insert_message($data){
        $this->db->insert('messagerie', $data);
    }



    /*

    UTILISATION DE PORTAIL JOB
    MES SCRIPTS JOB COMMENCE DEJE
    ========================================================
    */



     // operation province
       function make_query_province()  
      {  
            
           $this->db->select($this->select_column21);  
           $this->db->from($this->table21);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("nomp", $_POST["search"]["value"]);  
                $this->db->or_like("idp", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column21[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('idp', 'DESC');  
           }  
      }

     function make_datatables_province(){  
           $this->make_query_province();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_province(){  
           $this->make_query_province();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_province()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table21);  
           return $this->db->count_all_results();  
      }

      function insert_province($data){
          $this->db->insert('province', $data);
      }

      function update_province($idp, $data)  
      {  
           $this->db->where("idp", $idp);  
           $this->db->update("province", $data);  
      }

      function delete_province($idp)  
      {  
           $this->db->where("idp", $idp);  
           $this->db->delete("province");  
      }

      function fetch_single_province($idp)  
      {  
           $this->db->where("idp", $idp);  
           $query=$this->db->get('province');  
           return $query->result();  
      }
       // fin operation province

      function fetch_province()
      {
        $this->db->order_by("idp", "ASC");
        $query = $this->db->get("province");
        return $query->result();
      }

      function fetch_pays_register()
      {
        $this->db->order_by("nompays", "ASC");
        $query = $this->db->get("tbl_pays");
        return $query;
      }

      function fetch_idp_candiat()
      {
        $this->db->order_by("nomp", "ASC");
        $this->db->group_by("idp");
        $query = $this->db->get("profile_candidat");
        return $query;
      }

       function fetch_idv_candiat()
      {
        $this->db->order_by("nomv", "ASC");
        $this->db->group_by("idv");
        $query = $this->db->get("profile_candidat");
        return $query;
      }

      function fetch_sexe_candiat()
      {
        $this->db->order_by("sexe", "ASC");
        $this->db->group_by("sexe");
        $query = $this->db->get("profile_candidat");
        return $query;
      }

       function fetch_category_candiat()
      {
        $this->db->order_by("nomcat", "ASC");
        $this->db->group_by("idcat");
        $query = $this->db->get("profile_job");
        return $query;
      }

       function fetch_contrat_offre()
      {
        $this->db->order_by("nomc", "ASC");
        $this->db->group_by("idcontrat");
        $query = $this->db->get("profile_job");
        return $query;
      }

       function fetch_salaire_offre()
      {
        $this->db->order_by("nomsalaire", "ASC");
        $this->db->group_by("idsalaire");
        $query = $this->db->get("profile_job");
        return $query;
      }

       function fetch_qualification_offre()
      {
        $this->db->order_by("qualification", "ASC");
        $this->db->group_by("qualification");
        $query = $this->db->get("profile_job");
        return $query;
      }


      function fetch_service_register()
      {
        $this->db->order_by("noms", "ASC");
        $query = $this->db->get("service");
        return $query;
      }

     

      function fetch_pays_fultrage()
      {
        $this->db->order_by("nompays", "ASC");
        $this->db->group_by("nompays", "ASC");
        $query = $this->db->get("profile_candidat");
        return $query;
      }

      function fetch_province_fultrage()
      {
        $this->db->order_by("nomp", "ASC");
        $this->db->group_by("nomp", "ASC");
        $query = $this->db->get("profile_candidat");
        return $query;
      }

      function fetch_ville_fultrage()
      {
        $this->db->order_by("nomv", "ASC");
        $this->db->group_by("nomv", "ASC");
        $query = $this->db->get("profile_candidat");
        return $query;
      }

      function fetch_sexe_fultrage()
      {

        $query = $this->db->query("SELECT sexe FROM `profile_candidat` WHERE `idrole` = 2  
          AND sexe is NOT null GROUP BY sexe");
        return $query;
      }


       function fetch_province_register()
      {
        $this->db->order_by("nomp", "ASC");
        $query = $this->db->get("province");
        return $query;
      }

      function fetch_ville_requete_crud($idp)
      {
        $this->db->where('idp', $idp);
        $this->db->order_by('nomv', 'ASC');
        $query = $this->db->get('ville');
        $output = '<option value="">Selectionner la ville</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->idv.'">'.$row->nomv.'</option>';
        }
        return $output;
      }


      function fetch_category_register()
      {
        $this->db->order_by("nomcat", "ASC");
        $query = $this->db->get("tbl_category");
        return $query;
      }

      function fetch_contrat_register()
      {
        $this->db->order_by("nomc", "ASC");
        $query = $this->db->get("contrat");
        return $query;
      }

      function fetch_salaire_register()
      {
        $this->db->order_by("nomsalaire", "ASC");
        $query = $this->db->get("tbl_salaire");
        return $query;
      }

      function fetch_gradeT_register()
      {
        $this->db->order_by("nomcalification", "ASC");
        $query = $this->db->get("tbl_calification");
        return $query;
      }

      // fin de ce scripts

      // operation ville
       function make_query_ville()  
      {  
            
           $this->db->select($this->select_column23);  
           $this->db->from($this->table23);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("nomp", $_POST["search"]["value"]);  
                $this->db->or_like("nomv", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column23[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('idv', 'DESC');  
           }  
      }

     function make_datatables_ville(){  
           $this->make_query_ville();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_ville(){  
           $this->make_query_ville();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_ville()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table23);  
           return $this->db->count_all_results();  
      }

      function insert_ville($data){
          $this->db->insert('ville', $data);
      }

      function insert_job($data){
          $this->db->insert('job', $data);
          return $this->db->insert_id();
      }

      function insert_paiement_pading($data){
          $this->db->insert('paiement_pading', $data);
          return $this->db->insert_id();
      }

      function insert_paiement_compte($data){
          $this->db->insert('paiement', $data);
          return $this->db->insert_id();
      }

      function insert_demandejob($data){
          $this->db->insert('demandejob', $data);
          return $this->db->insert_id();
      }

      function update_demandejob($idd, $data)  
      {  
           $this->db->where("idd", $idd);  
           $this->db->update("demandejob", $data);  
      }

      function update_job($codejob, $data)  
      {  
           $this->db->where("codejob", $codejob);  
           $this->db->update("job", $data);  
      }


      function update_ville($idv, $data)  
      {  
           $this->db->where("idv", $idv);  
           $this->db->update("ville", $data);  
      }

      function delete_ville($idv)  
      {  
           $this->db->where("idv", $idv);  
           $this->db->delete("ville");  
      }

      function fetch_single_ville($idv)  
      {  
           $this->db->where("idv", $idv);  
           $query=$this->db->get('ville');  
           return $query->result();  
      }
      
      // fin operation province ville

      // operation contrat
       function make_query_contrat()  
      {  
            
           $this->db->select($this->select_column24);  
           $this->db->from($this->table24);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("nomc", $_POST["search"]["value"]);  
                $this->db->or_like("nomc", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column24[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('idc', 'DESC');  
           }  
      }

     function make_datatables_contrat(){  
           $this->make_query_contrat();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_contrat(){  
           $this->make_query_contrat();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_contrat()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table24);  
           return $this->db->count_all_results();  
      }

      function insert_contrat($data){
          $this->db->insert('contrat', $data);
      }

      function update_contrat($idc, $data)  
      {  
           $this->db->where("idc", $idc);  
           $this->db->update("contrat", $data);  
      }

      function delete_contrat($idc)  
      {  
           $this->db->where("idc", $idc);  
           $this->db->delete("contrat");  
      }

      function fetch_single_contrat($idc)  
      {  
           $this->db->where("idc", $idc);  
           $query=$this->db->get('contrat');  
           return $query->result();  
      }

      // fin operation contrat

      // operation pays
       function make_query_pays()  
      {  
            
           $this->db->select($this->select_column25);  
           $this->db->from($this->table25);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("nompays", $_POST["search"]["value"]);  
                $this->db->or_like("idPays", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column25[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('idPays', 'DESC');  
           }  
      }

     function make_datatables_pays(){  
           $this->make_query_pays();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_pays(){  
           $this->make_query_pays();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_pays()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table25);  
           return $this->db->count_all_results();  
      }

      function insert_pays($data){
          $this->db->insert('tbl_pays', $data);
      }

      function update_pays($idPays, $data)  
      {  
           $this->db->where("idPays", $idPays);  
           $this->db->update("tbl_pays", $data);  
      }

      function delete_pays($idPays)  
      {  
           $this->db->where("idPays", $idPays);  
           $this->db->delete("tbl_pays");  
      }

      function fetch_single_pays($idPays)  
      {  
           $this->db->where("idPays", $idPays);  
           $query=$this->db->get('tbl_pays');  
           return $query->result();  
      }

      // fin operation pays

      // operation catégorie d'entrise
       function make_query_category()  
      {  
            
           $this->db->select($this->select_column26);  
           $this->db->from($this->table26);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("nomcat", $_POST["search"]["value"]);  
                $this->db->or_like("idcat", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column26[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('idcat', 'DESC');  
           }  
      }

     function make_datatables_category(){  
           $this->make_query_category();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_category(){  
           $this->make_query_category();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_category()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table26);  
           return $this->db->count_all_results();  
      }

      function insert_category($data){
          $this->db->insert('tbl_category', $data);
      }

      function update_category($idcat, $data)  
      {  
           $this->db->where("idcat", $idcat);  
           $this->db->update("tbl_category", $data);  
      }

      function delete_category($idcat)  
      {  
           $this->db->where("idcat", $idcat);  
           $this->db->delete("tbl_category");  
      }

      function fetch_single_category($idcat)  
      {  
           $this->db->where("idcat", $idcat);  
           $query=$this->db->get('tbl_category');  
           return $query->result();  
      }

      // fin operation categorie

       // operation calification d'emploi
       function make_query_calification()  
      {  
            
           $this->db->select($this->select_column27);  
           $this->db->from($this->table27);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("nomcalification", $_POST["search"]["value"]);  
                $this->db->or_like("idcalification", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column27[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('idcalification', 'DESC');  
           }  
      }

     function make_datatables_calification(){  
           $this->make_query_calification();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_calification(){  
           $this->make_query_calification();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_calification()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table27);  
           return $this->db->count_all_results();  
      }

      function insert_calification($data){
          $this->db->insert('tbl_calification', $data);
      }

      function update_calification($idcalification, $data)  
      {  
           $this->db->where("idcalification", $idcalification);  
           $this->db->update("tbl_calification", $data);  
      }

      function delete_calification($idcalification)  
      {  
           $this->db->where("idcalification", $idcalification);  
           $this->db->delete("tbl_calification");  
      }

      function fetch_single_calification($idcalification)  
      {  
           $this->db->where("idcalification", $idcalification);  
           $query=$this->db->get('tbl_calification');  
           return $query->result();  
      }
      // fin operation calification d'emploie

      // operation competense d'emploi
       function make_query_competense()  
      {  
            
           $this->db->select($this->select_column28);  
           $this->db->from($this->table28); 
           $this->db->limit(30); 
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("nomcompetense", $_POST["search"]["value"]);  
                $this->db->or_like("idcompetense", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column28[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('idcompetense', 'DESC');  
           }  
      }

     function make_datatables_competense(){  
           $this->make_query_competense();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_competense(){  
           $this->make_query_competense();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_competense()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table28);  
           return $this->db->count_all_results();  
      }

      function insert_competense($data){
          $this->db->insert('tbl_competense', $data);
      }

      function update_competense($idcompetense, $data)  
      {  
           $this->db->where("idcompetense", $idcompetense);  
           $this->db->update("tbl_competense", $data);  
      }

      function delete_competense($idcompetense)  
      {  
           $this->db->where("idcompetense", $idcompetense);  
           $this->db->delete("tbl_competense");  
      }

      function fetch_single_competense($idcompetense)  
      {  
           $this->db->where("idcompetense", $idcompetense);  
           $query=$this->db->get('tbl_competense');  
           return $query->result();  
      }
      // fin operation competense d'emploie

      // operation salaire d'emploi
       function make_query_salaire()  
      {  
            
           $this->db->select($this->select_column29);  
           $this->db->from($this->table29);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("nomsalaire", $_POST["search"]["value"]);  
                $this->db->or_like("idsalaire", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column29[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('idsalaire', 'DESC');  
           }  
      }

     function make_datatables_salaire(){  
           $this->make_query_salaire();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_salaire(){  
           $this->make_query_salaire();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_salaire()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table29);  
           return $this->db->count_all_results();  
      }

      function insert_salaire($data){
          $this->db->insert('tbl_salaire', $data);
      }

      function update_salaire($idsalaire, $data)  
      {  
           $this->db->where("idsalaire", $idsalaire);  
           $this->db->update("tbl_salaire", $data);  
      }

      function delete_salaire($idsalaire)  
      {  
           $this->db->where("idsalaire", $idsalaire);  
           $this->db->delete("tbl_salaire");  
      }

      function fetch_single_salaire($idsalaire)  
      {  
           $this->db->where("idsalaire", $idsalaire);  
           $query=$this->db->get('tbl_salaire');  
           return $query->result();  
      }
      // fin operation salaire d'emploie

       // operation service d'emploi
       function make_query_service()  
      {  
            
           $this->db->select($this->select_column20);  
           $this->db->from($this->table20);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("noms", $_POST["search"]["value"]);  
                $this->db->or_like("ids", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column20[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('ids', 'DESC');  
           }  
      }

     function make_datatables_service(){  
           $this->make_query_service();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_service(){  
           $this->make_query_service();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_service()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table20);  
           return $this->db->count_all_results();  
      }

      function insert_service($data){
          $this->db->insert('service', $data);
      }

      function update_service($ids, $data)  
      {  
           $this->db->where("ids", $ids);  
           $this->db->update("service", $data);  
      }

      function delete_service($ids)  
      {  
           $this->db->where("ids", $ids);  
           $this->db->delete("service");  
      }

      function fetch_single_service($ids)  
      {  
           $this->db->where("ids", $ids);  
           $query=$this->db->get('service');  
           return $query->result();  
      }

      function show_services(){
        $this->db->order_by("noms", "asc");
        return $query = $this->db->get("service")->result_array();
      }
      // fin operation service d'emploie

      // operation paquet d'emploi
       function make_query_paquet()  
      {  
            
           $this->db->select($this->select_column111);  
           $this->db->from($this->table111);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("noms", $_POST["search"]["value"]);  
                $this->db->or_like("nompaquet", $_POST["search"]["value"]);
                $this->db->or_like("prix", $_POST["search"]["value"]);
                $this->db->or_like("nombre_pub", $_POST["search"]["value"]); 
                $this->db->or_like("nombre_jour", $_POST["search"]["value"]); 
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column111[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('ids', 'DESC');  
           }  
      }

     function make_datatables_paquet(){  
           $this->make_query_paquet();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_paquet(){  
           $this->make_query_paquet();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_paquet()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table111);  
           return $this->db->count_all_results();  
      }

      function insert_paquet($data){
          $this->db->insert('paquet', $data);
      }

      function update_paquet($idpaquet, $data)  
      {  
           $this->db->where("idpaquet", $idpaquet);  
           $this->db->update("paquet", $data);  
      }

      function delete_paquet($idpaquet)  
      {  
           $this->db->where("idpaquet", $idpaquet);  
           $this->db->delete("paquet");  
      }

      function fetch_single_paquet($idpaquet)  
      {  
           $this->db->where("idpaquet", $idpaquet);  
           $query=$this->db->get('paquet');  
           return $query->result();  
      }

      // fin operation paquet d'emploie

      function select_competense_users($id){
        $this->db->where('id', $id);
        $query = $this->db->get('user_skills');
        return $query;
      }

      function select_interesse_users($id){
        $this->db->where('id', $id);
        $query = $this->db->get('user_interese');
        return $query;
      }

      function select_etude_faite_users($id){
        $this->db->where('id', $id);
        $query = $this->db->get('education');
        return $query;
      }

      function insert_education($data){
        $this->db->insert('education', $data);
        return $this->db->insert_id();
     }

     function delete_users_skills($id, $idskills){
        $query = $this->db->query("DELETE FROM user_skills WHERE id='".$id."' 
          AND idskills='".$idskills."' ");
      }

      function delete_users_interesse($id, $idintersse){
        $query = $this->db->query("DELETE FROM user_interese WHERE id='".$id."' 
          AND idintersse='".$idintersse."' ");
      }

      function delete_users_education($id, $idedic){
        $query = $this->db->query("DELETE FROM education WHERE id='".$id."' 
          AND idedic='".$idedic."' ");
      }

      function insert_interesse_entrep($data)
     {
      $this->db->insert('user_interese', $data);
      return $this->db->insert_id();
     } 
      function insert_users_skills($data)
     {
      $this->db->insert('user_skills', $data);
      return $this->db->insert_id();
     } 


    // impression paiement de galerie
    function fetch_single_details_facture($codeFacture)
    {

        $this->db->where('codeFacture', $codeFacture);
        $data = $this->db->get('profile_paiement');

        $nom_site = '';
        $icone    = '';
        $email    = '';

        $info = $this->db->get('tbl_info')->result_array();
        foreach ($info as $key) {
          $nom_site = $key['nom_site'];
          $icone    = $key['icone'];
          $email    = $key['email'];
          
        }

        $output = '';
        $nomf;
        $created_at;
        $nom;
        $icone;

         

         $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO <br/>
         <h3>
            RECU DE PAIEMENT  AU SYSTEME ".$nom_site."
         <h3>
         ";

         $output = '<div align="right">';
         $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data" >';
         $output .= '
         <tr>
          <td width="25%"><img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100"/></td>
          <td width="50%" align="center">
           <p><b>'.$message.' </b></p>
           <p><b>Mise à jour : </b>'.date('d/m/Y').'</p>

           <hr>
           
          </td>

          <td width="25%">
          <img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100" />
          </td>


         </tr>
         ';
      
        $output .= '</table>';

         $output .= '</div>';

         $output .= '
            <div class="table-responsive">
             
             <br />
             <table class="table table-bordered panier_table" width="100%" cellspacing="5" cellpadding="5"  id="user_data" border="0">
              <tr>
               <th width="5%">Nom de l\'entreprise</th>
               <th width="30%">Nom du ceo</th>
               <th width="5%">téléphone</th>

               <th width="15%">Montant</th>
               <th width="25%">motif</th>

               <th width="20%">Date</th>
               
              </tr>

          ';

            foreach($data->result_array() as $items)
            {
              $maison = $items["nom"];
              $idpersonne   = $items["idpersonne"];
              $montantT;
              $montantRestant;

              $montant_a_payer = 30;


            $data_paie = $this->db->query("SELECT SUM(montant) AS montant FROM paiement WHERE idpersonne=".$idpersonne." ");
            if ($data_paie->num_rows() > 0) {
              # code...
              foreach($data_paie->result_array() as $items2)
                {
                  $montantT =  $items2["montant"];
                }
            }
            else{
              $montantT = 0;
            }

            // $montantRestant =  $montant_a_payer - $montantT;
            $retour = "javascript:history.go(-1);";



              $nom_complet = $items["first_name"].' '.$items["last_name"];
               $output .= '
               <tr>
                <td width="20%" align="center">
               
                '.$maison.'
                 <br />
                <img src="'.base_url().'upload/photo/'.$items["logo"].'" style="height: 40px; width: 50px; border-radius: 50%;"/></td> 
                <td align="center">
                '.$nom_complet.'
                <br/>
                 <img src="'.base_url().'upload/photo/'.$items["image"].'" style="height: 40px; width: 50px; border-radius: 50%;"/>
                </td>
                <td>'.$items["telephone"].'</td>
                <td>'.$items["montant"].'$</td>
                <td>'.$items["motif"].'</td>

                <td width="15%">'.nl2br(substr(date(DATE_RFC822, strtotime($items["created_at"])), 0, 23)).'</td>


               </tr>
               ';

               $output .= '
               <tr>
                <td colspan="5">
                  <div align="right">Total montant payé</div>
                </td> 
                <td >'.$montantT.'$</td>
                
               </tr>
               ';

               
            }
            $output .= '
             
        </table>

        </div>

        <hr>
    
        <div align="right" style="margin-botton:20px;">

            <a href="'.base_url().'admin/paiement_normale" style="text-decoration: none; color: black;">signature:</a>
      
        </div>
        <div align="center" style="

         background-image: url('.base_url().'upload/tbl_info/'.$icone.'); background-repeat: no-repeat; background-size: 40%; background-position: center; height:100px;">
        </div>
        
        ';


      
        return $output;
    }

     // impression paiement entreprise
    function fetch_single_details_facture_entreprise($codeFacture)
    {

        $this->db->where('codeFacture', $codeFacture);
        $data = $this->db->get('profile_paiement');

        $nom_site = '';
        $icone    = '';
        $email    = '';

        $info = $this->db->get('tbl_info')->result_array();
        foreach ($info as $key) {
          $nom_site = $key['nom_site'];
          $icone    = $key['icone'];
          $email    = $key['email'];
          
        }

        $output = '';
        $nomf;
        $created_at;
        $nom;
        $icone;

         

         $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO <br/>
         <h3>
            RECU DE PAIEMENT  AU SYSTEME ".$nom_site."
         <h3>
         ";

         $output = '<div align="right">';
         $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data" >';
         $output .= '
         <tr>
          <td width="25%"><img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100"/></td>
          <td width="50%" align="center">
           <p><b>'.$message.' </b></p>
           <p><b>Mise à jour : </b>'.date('d/m/Y').'</p>

           <hr>
           
          </td>

          <td width="25%">
          <img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100" />
          </td>


         </tr>
         ';
      
        $output .= '</table>';

         $output .= '</div>';

         $output .= '
            <div class="table-responsive">
             
             <br />
             <table class="table table-bordered panier_table" width="100%" cellspacing="5" cellpadding="5"  id="user_data" border="0">
              <tr>
               <th width="5%">Nom de l\'entreprise</th>
               <th width="30%">Nom du ceo</th>
               <th width="5%">téléphone</th>

               <th width="15%">Montant</th>
               <th width="25%">motif</th>

               <th width="20%">Date</th>
               
              </tr>

          ';

            foreach($data->result_array() as $items)
            {
              $maison = $items["nom"];
              $idpersonne   = $items["idpersonne"];
              $montantT;
              $montantRestant;

              $montant_a_payer = 30;


            $data_paie = $this->db->query("SELECT SUM(montant) AS montant FROM paiement WHERE idpersonne=".$idpersonne." ");
            if ($data_paie->num_rows() > 0) {
              # code...
              foreach($data_paie->result_array() as $items2)
                {
                  $montantT =  $items2["montant"];
                }
            }
            else{
              $montantT = 0;
            }

            // $montantRestant =  $montant_a_payer - $montantT;
            $retour = "javascript:history.go(-1);";



              $nom_complet = $items["first_name"].' '.$items["last_name"];
               $output .= '
               <tr>
                <td width="20%" align="center">
               
                '.$maison.'
                 <br />
                <img src="'.base_url().'upload/photo/'.$items["logo"].'" style="height: 40px; width: 50px; border-radius: 50%;"/></td> 
                <td align="center">
                '.$nom_complet.'
                <br/>
                 <img src="'.base_url().'upload/photo/'.$items["image"].'" style="height: 40px; width: 50px; border-radius: 50%;"/>
                </td>
                <td>'.$items["telephone"].'</td>
                <td>'.$items["montant"].'$</td>
                <td>'.$items["motif"].'</td>

                <td width="15%">'.nl2br(substr(date(DATE_RFC822, strtotime($items["created_at"])), 0, 23)).'</td>


               </tr>
               ';

               $output .= '
               <tr>
                <td colspan="5">
                  <div align="right">Total montant payé</div>
                </td> 
                <td >'.$montantT.'$</td>
                
               </tr>
               ';

               
            }
            $output .= '
             
        </table>

        </div>

        <hr>
    
        <div align="right" style="margin-botton:20px;">

            <a href="'.base_url().'entreprise/dashbord" style="text-decoration: none; color: black;">signature:</a>
      
        </div>
        <div align="center" style="

         background-image: url('.base_url().'upload/tbl_info/'.$icone.'); background-repeat: no-repeat; background-size: 40%; background-position: center; height:100px;">
        </div>
        
        ';


      
        return $output;
    }
























  // validation
  function can_login($email, $password_ok)
  {
    $this->db->where('email', $email);
    $query = $this->db->get('users');
    if($query->num_rows() > 0)
    {
     foreach($query->result() as $row)
     {
        if($row->idrole == '1')
        {

           $password = md5($password_ok);
           $store_password = $row->passwords;
           if($password == $store_password)
           {
            $this->session->set_userdata('admin_login', $row->id);
           }
           else
           {
            return 'mot de passe incorrect';
           }

        }
        elseif($row->idrole == '2')
        {
           $password = md5($password_ok);
           $store_password = $row->passwords;
           if($password == $store_password)
           {
            $this->session->set_userdata('id', $row->id);
           }
           else
           {
            return 'mot de passe incorrect';
           }

        }
        elseif($row->idrole == '3')
        {
           $password = md5($password_ok);
           $store_password = $row->passwords;
           if($password == $store_password)
           {
            $this->session->set_userdata('instuctor_login', $row->id);
           }
           else
           {
            return 'mot de passe incorrect';
           }

        }

        elseif($row->idrole == '4')
        {
           $password = md5($password_ok);
           $store_password = $row->passwords;
           if($password == $store_password)
           {
            $this->session->set_userdata('entreprise_login', $row->id);
           }
           else
           {
            return 'mot de passe incorrect';
           }

        }
        else
        {
         return 'les informations incorrectes';
        }
        



     }
    }
    else
    {
     return 'adresse email incorrecte';
    }
    
  }


    function can_recuperation($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        if($query->num_rows() > 0)
        {
            foreach($query->result() as $row)
            {
               
            }
        }
        else
        {
        return 'Adresse email non trouvée!!!!';
        }
    }


      // sauvegarde des donnees 
    function create_backup() 
    {
        $this->load->dbutil();
        $options = array(
            'format' => 'txt', 
            'add_drop' => TRUE,
            'add_insert' => TRUE,
            'newline' => "\n"
        );
        $tables = array('');
        $file_name = 'information';
        $backup = & $this->dbutil->backup(array_merge($options, $tables));
        $this->load->helper('download');
        force_download($file_name . '.sql', $backup);
    }

    function import_db()
    {
        $this->load->database();
        // $this->db->truncate('users');
        // $this->db->truncate('categorie_aprenant');
        // $this->db->truncate('derogation');
        // $this->db->truncate('edition');
        // $this->db->truncate('formation');
        // $this->db->truncate('inscription_formation');
        // $this->db->truncate('messagerie');
        // $this->db->truncate('notification');
        // $this->db->truncate('online');
        // $this->db->truncate('paiement');
        // $this->db->truncate('presence');
        // $this->db->truncate('question');
        // $this->db->truncate('recouvrement');
        // $this->db->truncate('recupere');
        // $this->db->truncate('reponse');
        // $this->db->truncate('role');
        // $this->db->truncate('rubrique');
        // $this->db->truncate('tbl_info');
        // $this->db->truncate('tranche');
        

        $file_n = $_FILES["file_name"]["name"];
        move_uploaded_file($_FILES["file_name"]["tmp_name"], "upload/" . $_FILES["file_name"]["name"]);
        $filename = "upload/".$file_n;
        $mysql_host = 'localhost';
        $mysql_username = 'root';
        $mysql_password = '';
        $mysql_database = 'media';
        mysql_connect($mysql_host, $mysql_username, $mysql_password) or die('Error connect to MySQL: ' . mysql_error());
        mysql_select_db($mysql_database) or die('Error to connect MySQL: ' . mysql_error());
        $templine = '';
        $lines = file($filename);
        foreach ($lines as $line)
        {
                if (substr($line, 0, 2) == '--' || $line == '')
                {
                    continue;
                }
                $templine .= $line;
                if (substr(trim($line), -1, 1) == ';')
                {
                    mysql_query($templine) or print('Error \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
                    $templine = '';
                if (mysql_errno() == 1062) 
                {
                print 'no way!';
                }
            }
        }
        unlink("upload/" . $file_n);

    }








}

?>