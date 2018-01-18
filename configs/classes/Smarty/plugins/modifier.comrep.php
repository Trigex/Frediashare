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
 * Purpose:  convert ' ' to ','
 * @param string
 * @return string
 */
function smarty_modifier_comrep($string)
{
    return str_ireplace(' ', ',', $string);
}

?>
