<?php class Acceuil extends CI_Controller {




    public function index() {

              $this->load->helper('url');
              $this->load->library('form_validation');
    }
	public function connexion() {
		 $this->load->helper('url');
		$login = $this->input->post("login");
		$pass = $this->input->post("Password");
		$this->load->model("ClientModel");
    $this->load->model("VideoModel");
		$return = $this->ClientModel->authentification($login,$pass);
		$client['clients'] = $this->ClientModel->get_LP($login,$pass);
		$this->load->library('session');
		$this->session;
    /////Cookie

    /////Cookie
			foreach($client['clients'] as $row)
{
			$this->session->set_userdata('Id',$row['Id']);
}
		if($return == 1){
      if($login=='admin' && $pass='admin'){

        $this->load->model('VideoModel');

        $data = array('listefacture' => $this->VideoModel->get_All());
        $this->load->view("web/Read",$data);
      }
		//echo 'Salut : ' .$login. '</br>';
else {
    $data = array('categoria'=>$this->VideoModel->getCategorie());
		    $this->load->view('web/index',$data);
      }
    	//	$this->load->view('web/newindex',$data);
		}
		else {
			redirect('', 'refresh');
		}
	}
	public function inscription() {
		$this->load->helper('url');
    $this->load->helper('form');
		$nom = $this->input->post("nom");
		$pass = $this->input->post("pass");
		$this->load->model("ClientModel");
		$this->ClientModel->insert($nom,$pass);
		redirect('', 'refresh');
	}
	public function connexionAdmin() {
		 $this->load->helper('url');
		$login = $this->input->post("login");
		$pass = $this->input->post("Password");
		$this->load->model("AdminModel");
		$return = $this->AdminModel->authentification($login,$pass);
		$admin['admin'] = $this->AdminModel->get_LP($login,$pass);
		if($return == 1){
		$newdata =null;
		$this->load->library('Layout');
		$this->layout->view('web/Test');
		}
		else {
			redirect('', 'refresh');

		}
	}
	function deconnexion(){


		 $this->load->helper('url');
		 	$this->load->library('session');

			//session_start();
			$this->session->unset_userdata('id');
	//$this->load->library('Layout');
		//$this->load->view('web/index');
		redirect('', 'refresh');
	}

}
?>
