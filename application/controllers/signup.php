<?php

# Codebase: China Listing
# Author: Thomas Yu
# Date: August 2013

/**
 * Description of home
 *
 * @author Thomas Yu
 */
class Signup extends CI_Controller
{
    public function __construct()
    {
	parent::__construct();
    }
    
    public function index()
    {
	$this->load->view("templates/header");
	
	$this->load->model("Property_Model");
	$data['properties'] = $this->Property_Model->get_properties();
	//var_dump($data['properties']);
	$this->load->view("signup", $data);
	$this->load->view("templates/footer");
    }
    
    public function submit()
    {
	$name = $this->input->post("name");
	$email = $this->input->post("email");
	$password = $this->input->post("password");
	$type = $this->input->post("type");
	
	$data = array(
	    "name" => $name,
	    "email" => $email,
	    "password" => $password,
	    "type" => $type
	);

	$this->load->model("user_model");
	$user_id = $this->user_model->insert($data);

	// Error in inserting
	if(!$user_id)
	{
	    redirect(base_url("signup"));
	}

	$this->session->set_userdata("user_id", $user_id);
	$this->session->set_userdata("name", $name);
	$this->session->set_userdata("type", $type);
	$this->session->set_userdata("email", $email);
	
	redirect(base_url("account/complete"));
    }
}

?>
