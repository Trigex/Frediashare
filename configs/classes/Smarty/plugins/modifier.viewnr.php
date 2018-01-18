<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty lower modifier plugin
 *
 * Type:     modifier<br>
 * Name:     viewnr<br>
 * Purpose:  number format
 * @link http://smarty.php.net/manual/en/language.modifier.viewnr.php
 *          lower (Smarty online manual)
 * @author   Monte Ohrt <monte at ohrt dot com>
 * @param string
 * @return string
 */
function smarty_modifier_viewnr($string)
{
    global $config;
    if ( $config['views_delim'] == 'comma' ) $delim = ','; else $delim = '.';
    return number_format($string,0,',',$delim);
}

?>