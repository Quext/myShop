<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:30
         compiled from "/Applications/MAMP/htdocs/myShop/engine/Library/ExtJs/overrides/Ext.view.BoundList.js" */ ?>
<?php /*%%SmartyHeaderCode:17764771195cfad6863cbb67-28711041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1b9d2e1abfa927db83387b50ea03ef644997af4' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/engine/Library/ExtJs/overrides/Ext.view.BoundList.js',
      1 => 1559938519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17764771195cfad6863cbb67-28711041',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad6863d03b7_02974786',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad6863d03b7_02974786')) {function content_5cfad6863d03b7_02974786($_smarty_tpl) {?>/**
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
 * Shopware UI - BoundList Override
 *
 * This files provides an override to address the
 * boundlist easier in our Selenium Tests.
 *
 * The override adds an addtional HTML5 "data"-attrbute
 * to the element. The value of the attribute is
 * either the "name" property of the ComboBox or
 * the action
 */
Ext.override(Ext.view.BoundList,
/** @lends Ext.view.BoundList# */
{
    /**
     * Suffix for the added data-attribute.
     * @string
     */
    dataSuffix: 'action',

    /**
     * Adds an additional HTML5 "data"-attribute
     * to easier address the element in our
     * selenium tests.
     *
     * @public
     * @return void
     */
    afterRender: function() {
        var me = this;
        me.callOverridden(arguments);

        if(me.el.dom && me.pickerField) {
            var dom = me.el.dom,
                value = me.action || me.pickerField.name;

            dom.setAttribute('data-' + me.dataSuffix, value);
        }
    }
});
<?php }} ?>