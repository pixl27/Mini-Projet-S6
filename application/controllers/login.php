<?php class login extends CI_Controller {
    public function index() {
  //      $data = array('nom' => 'Robert');

		    // On stocke notre page dans la variable $page
//        $page = $this->load->view('utilisateur/profil', $data, true);

        // On affiche notre page avec le template
		$this->load->helper('url');
		//$page = $this->load->view('web/Collection')
	 $this->load->model('VideoModel');
		$data = array('categorie'=>$this->VideoModel->getCategorie());
		$this->load->view('web/login',$data);

    }
  

}
?>
