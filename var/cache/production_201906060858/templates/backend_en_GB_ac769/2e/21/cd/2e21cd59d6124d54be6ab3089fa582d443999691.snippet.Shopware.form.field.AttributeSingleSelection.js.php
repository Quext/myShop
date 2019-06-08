<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.AttributeSingleSelection.js" */ ?>
<?php /*%%SmartyHeaderCode:12011572595cfad687cce3e8-18666448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e21cd59d6124d54be6ab3089fa582d443999691' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.AttributeSingleSelection.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12011572595cfad687cce3e8-18666448',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad687cd5ab7_21586627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad687cd5ab7_21586627')) {function content_5cfad687cd5ab7_21586627($_smarty_tpl) {?>/**
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

Ext.define('Shopware.form.field.AttributeSingleSelection', {
    extend: 'Shopware.form.field.SingleSelection',
    alias: 'widget.shopware-form-field-attribute-single-selection',

    getComboConfig: function() {
        var me = this;
        var config = me.callParent(arguments);
        config.valueField = 'columnName';
        return config;
    },

    getLabelOfObject: function(values) {
        var label = values.label;

        if (!label) {
            label = values.columnName;
        }
        if (values.helpText) {
            label += ' [' + values.helpText + ']';
        }
        return label;
    },

    resolveValue: function(value) {
        var me = this;

        me.store.load({
            params: { columns: Ext.JSON.encode([value]) },
            callback: function(records) {
                me.combo.setValue(records);
            }
        });
    }
});<?php }} ?>