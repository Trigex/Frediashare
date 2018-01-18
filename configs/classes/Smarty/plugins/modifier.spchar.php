<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty custom plugin
 *
 * Type:     modifier<br>
 * Name:     custom<br>
 * Purpose:  convert special characters
 * @param string
 * @return string
 */
function smarty_modifier_spchar($string)
{
    $s = '"';
    $new_string = str_replace ( '&amp;', "&", $string );
    $new_string = str_replace ( '&#39;', "'", $new_string );
    $new_string = str_replace ( '&#34;', $s, $new_string );
    $new_string = stripslashes ( $new_string );
    
    return $new_string;
}
?>