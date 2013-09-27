<?php

# Codebase: China Listing
# Author: Thomas Yu
# Date: August 2013

/**
 * Description of home
 *
 * @author Thomas Yu
 */
class Data_feed extends CI_Controller
{
    public function __construct()
    {
	parent::__construct();
    }
    
    public function add()
    {
	$this->load->view("templates/header");
	$this->load->view("data_feed/add");
	$this->load->view("templates/footer");
    }
    
    public function add_action()
    {
	$config['upload_path'] = "./data/";
	$config['allowed_types'] = '*';
	
	$this->load->library('upload', $config);

	if ( ! $this->upload->do_upload("datafeed"))
	{
	    $error = array('error' => $this->upload->display_errors());
	    var_dump($error);
	    die();
	}
	else
	{
	    $data = array('upload_data' => $this->upload->data());
	    $id = uniqid();
	    rename($data['upload_data']['full_path'], "./data/$id.csv");
	    $str = file_get_contents("./data/$id.csv");
	    $data = str_getcsv($str, "\n");
	    foreach($data AS &$row)
	    {
		$arr[] = str_getcsv($row);
	    }
	    
	    // Shift off the title row
	    $titles = array_shift($arr);
	    
	    $data = array(
		"listings" => $arr,
		"titles" => $titles
	    );
	    
	    $this->load->view("templates/header");
	    $this->load->view("data_feed/confirm", $data);
	    $this->load->view("templates/footer");	    
	}	
	
    }
    
    public function add_listings()
    {
	$listings = $this->input->post("listings");
	foreach($listings AS $listing)
	{
	    if(!isset($listing['enabled']))
	    {
		continue;
	    }
	    $data = array(
		"user_id" => $this->session->userdata("user_id"),
		"address" => $listing[1],
		"city" => $listing[2],
		"state" => $listing[3],
		"zipcode" => $listing[4],
		"agent_id" => $listing[5],
		"agent_email" => $listing[6],
		"agent_phone" => $listing[7],
		"bathrooms" => $listing[8],
		"bedrooms" => $listing[9],
		"square_feet" => $listing[10],
		"year_built" => $listing[11],
		"broker_id" => $listing[12],
		"broker_email" => $listing[13],
		"broker_phone" => $listing[14],
		"create_time" => $listing[15],
		"property_listing_url" => $listing[16],
		"lot_size" => $listing[17],
		"mls_id" => $listing[18],
	    );
	    $this->load->model("property_model");
	    $property_id = $this->property_model->insert($data);
	}
	
	redirect(base_url("account/listings"));
    }
   
}

?>
