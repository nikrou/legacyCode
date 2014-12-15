<?php
// +-----------------------------------------------------------------------+
// | legacyCode - A plugin for phyxo to inject deprecated code             |
// | Copyright(C) 2014 Nicolas Roudaire             http://www.nikrou.net/ |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License version 2 as     |
// | published by the Free Software Foundation                             |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,            |
// | MA 02110-1301 USA.                                                    |
// +-----------------------------------------------------------------------+

/*
Plugin Name: legacyCode
Version: 0.1.0
Description: Legacy code for deprecated functions/classes used by plugins
Author: Nicolas Roudaire
Author URI: http://www.nikrou.net
*/

if (!defined('PHPWG_ROOT_PATH')) {
    die('Hacking attempt!');
}

use Phyxo\Plugin\PluginMaintain as BasePluginMaintain;

class PluginMaintain extends BasePluginMaintain
{
}

include_once(__DIR__.'/include/functions_dblayer.inc.php');
