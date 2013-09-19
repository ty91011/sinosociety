<?php

class Properties extends CI_Controller
{
    public function __construct()
    {
	parent::__construct();
	$this->load->model('Property_Model');
    }
    
    public function index()
    {
	$data['properties'] = $this->Property_Model->get_properties();
	$data['title'] = "Properties";
	
	$this->load->view("templates/header", $data);
	$this->load->view("properties/index", $data);
	$this->load->view("templates/footer", $data);
    }
    
    public function view($id)
    {

	$data['listing'] = $this->Property_Model->get_property($id);
	$this->load->view("templates/header", $data);
	$this->load->view("properties/view", $data);
	$this->load->view("templates/footer", $data);
    }
    

}
?>
