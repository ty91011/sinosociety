<?php

# Codebase: China Listing
# Author: Thomas Yu
# Date: August 2013

/**
 * Description of home
 *
 * @author Thomas Yu
 */
class Buyers extends CI_Controller
{
    public function __construct()
    {
	parent::__construct();
    }
    
    public function index()
    {
	$this->load->view("templates/header");
	$this->load->view("buyers/index");
	$this->load->view("templates/footer");
    }
    
    public function search()
    {
	
    }
   
}

?>
