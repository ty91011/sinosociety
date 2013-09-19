<?php

# Codebase: China Listing
# Author: Thomas Yu
# Date: August 2013

/**
 * Description of home
 *
 * @author Thomas Yu
 */
class Account extends CI_Controller
{
    public function __construct()
    {
	parent::__construct();
	$this->load->model("user_model");
	$this->load->helper("form");
    }
    
    public function index()
    {
	$this->user_model->secure();
	
	$this->load->view("templates/header");
	
	$user_id = $this->session->userdata("user_id");
	$data = $this->user_model->load($user_id);
	
	$this->load->view("account/index", $data);
	$this->load->view("templates/footer");
    }
    
    public function edit()
    {
	$this->user_model->secure();
	
	$this->load->view("templates/header");
	
	$user_id = $this->session->userdata("user_id");
	$data = $this->user_model->load($user_id);
	
	$this->load->view("account/edit", $data);
	$this->load->view("templates/footer");
    }
    
    public function update_action()
    {
	$name = $this->input->post("name");
	$email = $this->input->post("email");
	$password = $this->input->post("password");
	
	$location = $this->input->post("location");
	$state = $this->input->post("state");
	$phone = $this->input->post("phone");
	$company = $this->input->post("company");
	$license = $this->input->post("license");
	$type = $this->input->post("type");
	
	$config['upload_path'] = "./img/";
	$config['allowed_types'] = 'gif|jpg|png|jpeg';
	
	$this->load->library('upload', $config);

	if ( ! $this->upload->do_upload())
	{
		$error = array('error' => $this->upload->display_errors());
	}
	else
	{
		$data = array('upload_data' => $this->upload->data());
		$id = $this->session->userdata("user_id");
		rename($data['upload_data']['full_path'], "./img/usr/$id.jpg");
		$this->session->set_userdata("photo", "/img/usr/$id.jpg");
	}	
	
	
	$data = array(
	    "name" => $name,
	    "email" => $email,
	    "password" => $password,
	    "location" => $location,
	    "state" => $state,
	    "type" => $type,
	    "phone" => $phone,
	    "license" => $license,
	    "company" => $company,
	);

	if($password == "")
	{
	    unset($data['password']);
	}
	if(empty($type))
	{
	    unset($data['type']);
	}
	$this->load->model("user_model");
	$user_id = $this->user_model->update($data);
	redirect(base_url("/account/"));
    }
    
    public function submit()
    {
	
    }
    
    public function complete()
    {
	$user_id = $this->session->userdata("user_id");
	$data = array(
	    "user" => $this->user_model->load($user_id)
	);
	
	$this->load->view("templates/header");
	$this->load->view("account/complete", $data);
	$this->load->view("templates/footer");
    }
    
    public function login()
    {
	$email = $this->input->post("email");
	$password = $this->input->post("password");
	$account = $this->user_model->login($email, $password);
	
	// Error logging in
	if(!count($account))
	{
	    redirect();
	}

	$this->session->set_userdata("user_id", $account['id']);
	$this->session->set_userdata("name", $account['name']);
	redirect(base_url("account"));


    }
    
    public function logout()
    {
	$this->session->sess_destroy();
	redirect(base_url());
    }

    public function add_advertisement()
    {
	$this->user_model->secure();
	$data = null;
	$this->load->view("templates/header", $data);
	$this->load->view("account/add_advertisement", $data);
	$this->load->view("templates/footer", $data);	
    }
    
    public function add_property_for_sale()
    {
	$this->user_model->secure();
	$data = null;
	$this->load->view("templates/header", $data);
	$this->load->view("account/add_property_for_sale", $data);
	$this->load->view("templates/footer", $data);	
    }
    
    public function add_property_for_rent()
    {
	$this->user_model->secure();
	$data = null;
	$this->load->view("templates/header", $data);
	$this->load->view("account/add_property_for_rent", $data);
	$this->load->view("templates/footer", $data);	
    }
    
    public function add_property_action()
    {
	$listing = $this->input->post();
	$listing['user_id'] = $this->session->userdata("user_id");
	$this->session->set_userdata("listing", $listing);
	$data = array("listing" => $this->input->post());

	
	$this->load->view("templates/header", $data);
	$this->load->view("account/confirm_property", $data);
	$this->load->view("templates/footer", $data);	
    }
    
    public function confirm_add_property_action()
    {
	$property_id = $this->Property_Model->add($this->session->userdata("listing"));
	
	$data = array(
	    "property_id" => $property_id
	);
	
	$this->load->view("templates/header", $data);
	$this->load->view("account/complete_property", $data);
	$this->load->view("templates/footer", $data);
	
	$this->session->set_userdata("listing", array());
    }
    
    public function listings()
    {
	$data['properties'] = $this->Property_Model->get_properties();
	
	$this->load->view("templates/header", $data);
	$this->load->view("account/listings", $data);
	$this->load->view("templates/footer", $data);	
    }
}

?>
