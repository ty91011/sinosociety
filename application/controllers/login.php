<?php

# Codebase: China Listing
# Author: Thomas Yu
# Date: August 2013

/**
 * Description of home
 *
 * @author Thomas Yu
 */
class login extends CI_Controller
{
    public function __construct()
    {
	parent::__construct();
    }
    
    public function index()
    {
	$data = null;
	
	$this->load->view("templates/header");
	$this->load->view("login", $data);
	$this->load->view("templates/footer");
    }
}

?>
