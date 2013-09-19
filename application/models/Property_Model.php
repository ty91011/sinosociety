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
    
    public function get_properties($filter = array())
    {
        $query = $this->db->get(self::TABLE_NAME, $filter);
	return $query->result_array();
    }
}

?>
