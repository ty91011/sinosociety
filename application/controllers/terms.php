<?php

# Codebase: China Listing
# Author: Thomas Yu
# Date: August 2013

/**
 * Description of home
 *
 * @author Thomas Yu
 */
class Terms extends CI_Controller
{
    public function __construct()
    {
	parent::__construct();
    }
    
    public function index()
    {
	$this->load->view("templates/header");
	$this->load->view("terms");
	$this->load->view("templates/footer");
    }
   
}

?>
