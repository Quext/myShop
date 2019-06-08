<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:30
         compiled from "/Applications/MAMP/htdocs/myShop/engine/Library/ExtJs/overrides/Ext.Template.js" */ ?>
<?php /*%%SmartyHeaderCode:4626019535cfad68637f914-96384828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc10abe9738d21621360d4004818bb591289197c' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/engine/Library/ExtJs/overrides/Ext.Template.js',
      1 => 1559938519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4626019535cfad68637f914-96384828',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad6863839a7_48044447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad6863839a7_48044447')) {function content_5cfad6863839a7_48044447($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

/**
 * Override template syntax for smarty support.
 */
//
Ext.override(Ext.Template, {
    re: /[{\[]([\w\-]+)(?:\:([\w\.]*)(?:\((.*?)?\))?)?[}\]]/g
});
Ext.override(Ext.String, {
    format: function(format) {
        var formatRe = /[{\[](\d+)[}\]]/g;
        var args = Ext.Array.toArray(arguments, 1);
        return format.replace(formatRe, function(m, i) {
            return args[i];
        });
    }
});
//
<?php }} ?>