<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


?>

<div class="row">
<center>
    <form method='post' action='/account/pay_property' id='form'>
	<input type="hidden" name="cost" value="<?=$cost;?>">
    <a href="#" onclick="$('#form').submit(); return false;" class="large button round">Post Property<?
    if($cost != "0.00")
    {
	echo " for $$cost";
    }
    ?></a>
    </form>
    <br>
    <img style="align: center" src="/img/placeholder.png">
</center>
</div>