<?php

# Codebase: China Listing
# Author: Thomas Yu
# Date: August 2013

/**
 * Description of Property
 *
 * @author Thomas Yu
 */
class user_model extends CI_Model
{
    const TABLE_NAME = "user";
    
    public $name;
    public $email;
    public $password;
    
    public function __construct()
    {
        
    }
    
    public function insert($data)
    {
	$res = $this->db->insert(self::TABLE_NAME, $data);
	if(!$res) 
	{ 
	    return false; 
	}	
	return $this->db->insert_id();
    }
    
    public function update($data)
    {
	$id = $this->session->userdata("user_id");
	$this->db->where('id', $id);
	$this->db->update(self::TABLE_NAME, $data);
    }
    
    public function login($email, $password)
    {

	$this->db->where("email", $email);
	$this->db->where("password", $password);
	$query = $this->db->get(self::TABLE_NAME);
	$account = $query->first_row("array");
	if(!count($account))
	{
	    redirect(base_url("/login"));
	}
	if(file_get_contents("./img/usr/$account[id].jpg"))
	{
	    $this->session->set_userdata("photo", "/img/usr/$account[id].jpg");
	}
	else
	{
	    $this->session->set_userdata("photo", "http://www.edrants.com/wp-content/uploads/2009/09/placeholder.jpg");
	}
	return $account;
    }
    
    public function load($id)
    {
	$query = $this->db->get_where(self::TABLE_NAME, array("id" => $id));
	return $query->first_row("array");
    }
    
    public function isLoggedIn()
    {
	return $this->session->userdata("user_id");
    }
    
    public function secure()
    {
	if(!$this->isLoggedIn())
	{
	    redirect(base_url("/login"));
	}
    }
    
}

?>
