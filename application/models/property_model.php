<?php

# Codebase: China Listing
# Author: Thomas Yu
# Date: August 2013

/**
 * Description of Property
 *
 * @author Thomas Yu
 */
class property_model extends CI_Model
{
    const TABLE_NAME = "property";
    
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_properties()
    {
        $query = $this->db->get(self::TABLE_NAME);
	return $query->result_array();
    }
    
    public function get_self_properties($user_id, $license = false)
    {
	$this->db->from(self::TABLE_NAME);
	$this->db->where("user_id =", $user_id);
	if($license)
	{
	    $this->db->or_where("license = ", $license);
	}
	$query = $this->db->get();
	return $query->result_array();
	
    }
    
    public function add($data)
    {
	$res = $this->db->insert(self::TABLE_NAME, $data);
	if(!$res) 
	{ 
	    return false; 
	}	
	return $this->db->insert_id();
    }
    
    public function get_property($id)
    {
	$query = $this->db->get_where(self::TABLE_NAME, array("id" => $id));
	return $query->first_row("array");
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
}

?>
