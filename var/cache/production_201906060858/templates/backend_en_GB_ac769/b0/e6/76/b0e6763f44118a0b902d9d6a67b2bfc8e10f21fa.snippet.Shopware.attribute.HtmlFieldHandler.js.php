<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.HtmlFieldHandler.js" */ ?>
<?php /*%%SmartyHeaderCode:983845455cfad687918757-05024207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0e6763f44118a0b902d9d6a67b2bfc8e10f21fa' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.HtmlFieldHandler.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '983845455cfad687918757-05024207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad687921fb8_82267675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad687921fb8_82267675')) {function content_5cfad687921fb8_82267675($_smarty_tpl) {?>/**
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
 *
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

Ext.define('Shopware.attribute.HtmlFieldHandler', {
    extend: 'Shopware.attribute.FieldHandlerInterface',

    supports: function(attribute) {
        return (attribute.get('columnType') === 'html');
    },

    create: function(field, attribute) {
        field.xtype = 'tinymce';
        /** <?php if ($_smarty_tpl->tpl_vars['user']->value->extended_editor==1){?> */
        field.height = 300;
        /** <?php }else{ ?> */
        field.height = 200;
        /** <?php }?> */
        return field;
    }
});<?php }} ?>