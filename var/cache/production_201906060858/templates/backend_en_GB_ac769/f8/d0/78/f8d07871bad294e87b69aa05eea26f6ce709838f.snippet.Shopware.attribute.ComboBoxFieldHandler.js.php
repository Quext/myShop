<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.ComboBoxFieldHandler.js" */ ?>
<?php /*%%SmartyHeaderCode:19577075695cfad687dbc242-89094997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8d07871bad294e87b69aa05eea26f6ce709838f' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.ComboBoxFieldHandler.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19577075695cfad687dbc242-89094997',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad687dc17f1_65179683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad687dc17f1_65179683')) {function content_5cfad687dc17f1_65179683($_smarty_tpl) {?>/**
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

Ext.define('Shopware.attribute.ComboBoxFieldHandler', {
    extend: 'Shopware.attribute.FieldHandlerInterface',
    supports: function(attribute) {
        return (attribute.get('columnType') == 'combobox');
    },
    create: function(field, attribute) {
        var data = [];
        field.xtype = 'combobox';
        field.displayField = 'value';
        field.valueField = 'key';

        if (attribute.get('arrayStore')) {
            data = Ext.JSON.decode(attribute.get('arrayStore'))
        }

        field.store = Ext.create('Ext.data.Store', {
            fields: ['key', 'value'],
            data: data
        });
        return field;
    }
});<?php }} ?>