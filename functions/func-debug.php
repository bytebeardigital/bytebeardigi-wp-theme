<?php
/**
 * Debugging tools
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

/**
 * Pretty printing debugging tool
 */
function pr($vars){
	echo '<pre style="background:black;color:white;padding:1em;font-family:Courier;white-space:pre-wrap;">';
	  echo '<div style="color:lime;">Debug:</div>';
	  foreach(func_get_args() as $arg){
		echo '<div>' . print_r($arg, true) . '</div>';
	  }
	echo '</pre>';
  }
  
  function dd($vars){
	pr($vars);
	die;
  }
  