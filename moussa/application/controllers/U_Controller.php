<?php


class U_Controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['user_logged']))
        {
            $this->session->set_flashdata("error","Please login first to view this page");
            redirect("M_Controller/connexion");
        }
        $this->load->model('M_Model');
    }

    public function mapage(){
        $data['result'] = $this->M_Model->getAllData();
        $this->load->view('mapage',$data);
        //,array('error'=>'')    
    }

    public function upload(){
        $config['upload_path']='./images/';
        $config['allowed_types']='jpg|jpeg|gif|png';
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload())
        {
            $error = array('error'=>$this->upload->display_errors());
            $this->load->view('mapage',$error);
        }
        else
        {
            $file_data = $this->upload->data();
            $data['img'] = $file_data['file_name'];
            $this->load->view('M_Model',$data);
        }
    }

	public function create()
	{
		$this->M_Model->createData();
		redirect("U_Controller/mapage");
	}
}