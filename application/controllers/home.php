<?php

# Codebase: China Listing
# Author: Thomas Yu
# Date: August 2013

/**
 * Description of home
 *
 * @author Thomas Yu
 */
class home extends CI_Controller
{
    public function index()
    {
	$this->load->view("templates/header");
	
	$this->load->model("Property_Model");
	$data['properties'] = $this->Property_Model->get_properties();
	//var_dump($data['properties']);
	$this->load->view("home", $data);
	$this->load->view("templates/footer");
    }
}

?>
