<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_Model');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function accueil()
	{
		$data['result'] = $this->M_Model->getAllData();
		$this->load->view('accueil',$data);
	}

	public function connexion(){

        
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required|min_length[5]');

        if($this->form_validation->run() == TRUE)
        {
           $username = $_POST['username'];
           $password = $_POST['password']; 
           
           $this->db->select('*');
           $this->db->from('identification');
           $this->db->where(array('users' => $username , 'motdepasse' => $password ));

           $query = $this->db->get();

           $user = $query->row();

           if($user->users)
           {
                $this->session->set_flashdata("success","You are logged in");

                $_SESSION['user_logged'] = TRUE;
                $_SESSION['username'] = $user->users;

                redirect("U_Controller/mapage","refresh");
           }
           else
           {
            $this->session->set_flashdata("error","No such account exists in database");
            redirect("M_Controller/connexion","refresh");
            }
        }
        $this->load->view('connexion');
	}

	

}
