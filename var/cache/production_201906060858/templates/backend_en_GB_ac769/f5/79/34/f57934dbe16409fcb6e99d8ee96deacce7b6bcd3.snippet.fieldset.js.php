<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/component/element/fieldset.js" */ ?>
<?php /*%%SmartyHeaderCode:3768436055cfad68779a8a7-44262906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f57934dbe16409fcb6e99d8ee96deacce7b6bcd3' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/component/element/fieldset.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3768436055cfad68779a8a7-44262906',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad6877a1b01_32256585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad6877a1b01_32256585')) {function content_5cfad6877a1b01_32256585($_smarty_tpl) {?>/**
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
 * @category   Shopware
 * @package    Base
 * @subpackage Component
 * @version    $Id$
 * @author shopware AG
 */
//
//
Ext.define('Shopware.apps.Base.view.element.Fieldset', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.base-element-fieldset',

    bodyPadding: 10,
    border: false,

    layout: 'form',
    defaults: {
        anchor: '100%',
        labelWidth: 250,
        hideEmptyLabel: false
    },

    /**
     * Initialize the component.
     *
     * @public
     * @return void
     */
    initComponent:function () {
        var me = this;

        me.callParent(arguments);
    }
});
//
<?php }} ?>