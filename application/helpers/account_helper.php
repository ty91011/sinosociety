<?php

# Codebase: China Listing
# Author: Thomas Yu
# Date: August 2013

/**
 * Description of security
 *
 * @author Thomas Yu
 */

function isLoggedIn()
{
    $CI = & get_instance();
    return $CI->session->userdata("user_id") > 0;
}

?>
