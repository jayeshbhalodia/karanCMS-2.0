<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * Code Igniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package		CodeIgniter
 * @author		Rick Ellis
 * @copyright	Copyright (c) 2006, pMachine, Inc.
 * @license		http://www.codeignitor.com/user_guide/license.html
 * @link			http://www.codeigniter.com
 * @since        Version 1.0
 * @filesource
 */
// ------------------------------------------------------------------------

/**
 * Code Igniter Asset Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category		Helpers
 * @author       Karan Jilka 
 */
// ------------------------------------------------------------------------
function module_path($module, $file, $path)
{
    list($path, $view) = Modules::find($file, $module, $path);
    return $path . $view;
}

function theme_path($module, $file, $path)
{
    $CI =& get_instance();
    list($path, $view) = Modules::find($file, $module, $path);
    return $path . $view;
}

function module_url()
{
    
}

function theme_url()
{
    
}
