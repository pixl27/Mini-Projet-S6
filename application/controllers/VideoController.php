<?php
    class VideoController extends CI_Controller {

        public function __construct()
        {
             parent::__construct();
             $this->load->helper("url");
             $this->load->model("VideoModel");
             $this->load->library("pagination");

        }
       function index() {
         			  $this->load->helper('url');
		            $this->load->view("web/liste");

        }


    public function listerDetailVideo(){


      $this->load->helper('url');
      $this->load->model('VideoModel');
    //  echo $_GET["idvideo"];
      $idFacture =$_GET["idvideo"];
      $data = array('detailvideo' => $this->VideoModel->get_byID($idFacture),'categorie'=>$this->VideoModel->getCategorie());
      $this->load->view("web/detail",$data);
    }
    public function gotoBackOffice(){
            $this->load->helper('url');
                    $data = array('categoria'=>$this->VideoModel->getCategorie());
                  $this->load->view("web/Ajouter",$data);
    }
    public function lister(){
      $this->load->helper('url');
      $this->load->model('VideoModel');
//      $idClient = $this->session->userdata('Id');
$datedebut = "";
$datefin   = "";
$prixmin = 0;
$prixmax   = 0;
$offset    = $this->input->get("offset");
$order = $this->input->get("order");
$langue = $this->input->get("langue");
$by = "asc";
      $Etat = $this->input->get("categorie");
      if($offset==''){
        $offset = 0;
      }
      $data = array('listefacture' => $this->VideoModel->get_All(),'categoria'=>$this->VideoModel->getCategorie(),'datedebut' => $datedebut,'datefin' =>$datefin,'prixmin' => $prixmin ,'prixmax' =>$prixmax,'categorie' => $Etat,'offset'=>$offset,'langue' => $langue);
      $this->load->view("web/liste",$data);
    }
    public function listerCategorie(){
      $nomcateg = $_GET['categorie'];
      $this->load->helper('url');
      $this->load->model('VideoModel');
//      $idClient = $this->session->userdata('Id');
      $data = array('listefacture' => $this->VideoModel->get_byCategorie($nomcateg));
      $this->load->view("web/liste",$data);
    }
    public function gotosearch(){
            $this->load->helper('url');
            $data = array('categoria'=>$this->VideoModel->getCategorie());
                  $this->load->view("web/rechercher",$data);
    }
    public function recherche(){
      /////
          $this->load->model('VideoModel');

      /////
      $this->load->helper('url');
      //$this->load->model('FactureModel');
      $datedebut = $this->input->post("datedebut");
      $datefin   = $this->input->post("datefin");
      $prixmin = $this->input->post("notemin");
      $prixmax   = $this->input->post("notemax");
      $offset    = $this->input->post("offset");
      $order = $this->input->post("order");
      $langue = $this->input->post("langue");
      $by = "asc";
            $Etat = $this->input->post("categorie");
      if($offset==''){
        $offset = 0;
      }
      $idClient = $this->session->userdata('Id');

      $data = array('listefacture' => $this->VideoModel->rechercher($datedebut,$datefin,$Etat,$prixmin,$prixmax,$langue,$offset,$order,$by),'datedebut' => $datedebut,'datefin' =>$datefin,'prixmin' => $prixmin ,'prixmax' =>$prixmax,'categorie' => $Etat,'offset'=>$offset
    ,'langue' => $langue);
      $this->load->view("web/liste",$data);
    }
    public function upload_Poster($filename,$chemin)
{
  $this->load->model('VideoModel');

  $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
$nom = $this->input->get('name');
$Categorie = $this->input->get('categorie');
$DateAjout = $this->input->get('dateajout');
$DateSortie = $this->input->get('datesortie');
$Note = $this->input->get('note');
$Image = $this->input->get('image');
$Lien = $this->input->get('lien');
$Description = $this->input->get('description');
$Background = $this->input->get('background');
$Langue = $this->input->get('langue');
$Streaming = $this->input->get('streaming');
$DateAjout=date("Y/m/d", strtotime($DateAjout));
$DateSortie=date("Y/m/d", strtotime($DateSortie));
$this->upload_Poster($Image,'assets\images\posters');
// $this->upload_Poster($Background,'assets\images\other');

      $this->load->helper(array('form', 'url'));
      $config['upload_path']          = "$chemin";
      $config['allowed_types']        = 'gif|jpg|png|pdf|doc';
      $config['max_size']      =   "5000";
      $config['max_width']     =   "1907";
      $config['max_height']    =   "1280";
      echo $upload_max_size = ini_get('upload_max_filesize');
      echo $post_max_size=ini_get('post_max_size');
print_r($_FILES);
      $this->load->library('upload');
            $this->upload->initialize($config);
            if($this->upload->do_upload('image'))
          {
            $data = $this->upload->data();
             echo "file upload success";
          }
          else
          {
             echo "file upload failed";
             echo $this->upload->display_errors();
          }

}

public function updateImageChef(){

  $this->load->model('VideoModel');

  $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
$nom = $this->input->post('name');
$Categorie = $this->input->post('categorie');
$DateAjout = $this->input->post('dateajout');
$DateSortie = $this->input->post('datesortie');
$Note = $this->input->post('note');
$Image = $this->input->post('image');
$Lien = $this->input->post('lien');
$Description = $this->input->post('description');
$Background = $this->input->post('background');
$Langue = $this->input->post('langue');
$Streaming = $this->input->post('streaming');
$DateAjout=date("Y/m/d", strtotime($DateAjout));
$DateSortie=date("Y/m/d", strtotime($DateSortie));


       $config['upload_path'] = './assets/images';
       $config['allowed_types'] = 'gif|jpg|png';
       $config['max_size'] = '2048';
       $config['max_width'] = '2000';
       $config['max_height'] = '2000';
                 $this->load->library('upload', $config);
                 $this->upload->initialize($config);
                 if ( ! $this->upload->do_upload('upload')  )
  {
      $error = array('error' => $this->upload->display_errors());
      echo $this->upload->display_errors();
  }
  else
  {
      $data = array('upload_data' => $this->upload->data());
      echo "<p>File sucesfully uploaded</p>";

}
                      if ( ! $this->upload->do_upload('background')  )
       {
           $error = array('error' => $this->upload->display_errors());
           echo $this->upload->display_errors();
       }
       else
       {
           $data = array('upload_data' => $this->upload->data());
           echo "<p>File sucesfully uploaded</p>";

          $this->load->helper('url');
           echo  $_FILES['upload']['name'];
          $img =  $_FILES['upload']['name'];

         $this->VideoModel->insert($nom,$Categorie,$DateAjout,$DateSortie,$Note,$_FILES['upload']['name'],$Lien,$Description,$_FILES['background']['name'],$Langue,$Streaming);
         $data = array('listefacture' => $this->VideoModel->get_All(),'categoria'=>$this->VideoModel->getCategorie());
         $this->load->view("web/Read",$data);


     }
     }


    public function insert(){
      $this->load->model('VideoModel');

      $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
    $nom = $this->input->post('name');
$Categorie = $this->input->post('categorie');
 $DateAjout = $this->input->post('dateajout');
 $DateSortie = $this->input->post('datesortie');
$Note = $this->input->post('note');
 $Image = $this->input->post('image');
 $Lien = $this->input->post('lien');
$Description = $this->input->post('description');
$Background = $this->input->post('background');
 $Langue = $this->input->post('langue');
 $Streaming = $this->input->post('streaming');
 $DateAjout=date("Y/m/d", strtotime($DateAjout));
 $DateSortie=date("Y/m/d", strtotime($DateSortie));

  // $this->upload_Poster($Background,'assets\images\other');
$this->VideoModel->insert($nom,$Categorie,$DateAjout,$DateSortie,$Note,$Image,$Lien,$Description,$Background,$Langue,$Streaming);
    }
    public function delete(){
          $this->load->helper(array('form', 'url'));
      $this->load->model('VideoModel');
      $id = $this->input->post('Id');
      $this->VideoModel->delete($id);
      $data = array('listefacture' => $this->VideoModel->get_All(),'categoria'=>$this->VideoModel->getCategorie());
      $this->load->view("web/Read",$data);

    }

    public function read(){

      $this->load->helper('url');
      $this->load->model('VideoModel');

      $data = array('listefacture' => $this->VideoModel->get_All(),'categoria'=>$this->VideoModel->getCategorie());
      $this->load->view("web/Read",$data);

    }
    public function gotoFormUpdate(){
      $this->load->helper('url');
      $this->load->model('VideoModel');
      $id = $this->input->post('Id');
          $data = array('listefacture' => $this->VideoModel->get_byID($id),'categoria'=>$this->VideoModel->getCategorie());
      $this->load->view("web/Modifier",$data);
    }
    public function update(){

  $back = $this->input->post('back');
      $img = $this->input->post('image');
      $this->load->model('VideoModel');
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $nom = $this->input->post('name');
      $Categorie = $this->input->post('categorie');
      $DateAjout = $this->input->post('dateajout');
      $DateSortie = $this->input->post('datesortie');
      $Note = $this->input->post('note');
      $Image = $this->input->post('upload');
      $Lien = $this->input->post('lien');
      if($Image=="" ){
$Image = $img;

      }

      $Description = $this->input->post('description');
      $Background = $this->input->post('background');
        if($Background==""){
$Background=$back;
        }
      $Langue = $this->input->post('langue');
      $Streaming = $this->input->post('streaming');
      $id = $this->input->post('Id');
      $DateAjout=date("Y/m/d", strtotime($DateAjout));
      $DateSortie=date("Y/m/d", strtotime($DateSortie));


             $config['upload_path'] = './assets/images';
             $config['allowed_types'] = 'gif|jpg|png';
             $config['max_size'] = '2048';
             $config['max_width'] = '2000';
             $config['max_height'] = '2000';
                       $this->load->library('upload', $config);
                       $this->upload->initialize($config);
                       if ( ! $this->upload->do_upload('upload')  )
        {
            $error = array('error' => $this->upload->display_errors());

        }
        else
        {
            $data = array('upload_data' => $this->upload->data());


      }
                            if ( ! $this->upload->do_upload('background')  )
             {
                 $error = array('error' => $this->upload->display_errors());

             }
             else
             {
                 $data = array('upload_data' => $this->upload->data());

                $this->load->helper('url');
                $img =  $_FILES['upload']['name'];





           }
           $this->VideoModel->update($id,$nom,$Categorie,$DateAjout,$DateSortie,$Note,$Image,$Lien,$Description,$Background,$Langue,$Streaming);
           $data = array('listefacture' => $this->VideoModel->get_All(),'categoria'=>$this->VideoModel->getCategorie());
           $this->load->view("web/Read",$data);

    }



}



?>
