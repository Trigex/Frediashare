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
 * Purpose:  convert 'and' to '&'
 * @param string
 * @return string
 */
function smarty_modifier_endconv($string)
{
    return str_replace('and', '&', $string);
}

?>
