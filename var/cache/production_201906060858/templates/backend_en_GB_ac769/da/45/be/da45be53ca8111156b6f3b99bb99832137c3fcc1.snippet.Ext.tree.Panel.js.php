<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:30
         compiled from "/Applications/MAMP/htdocs/myShop/engine/Library/ExtJs/overrides/Ext.tree.Panel.js" */ ?>
<?php /*%%SmartyHeaderCode:12932967665cfad6863face1-10193817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da45be53ca8111156b6f3b99bb99832137c3fcc1' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/engine/Library/ExtJs/overrides/Ext.tree.Panel.js',
      1 => 1559938519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12932967665cfad6863face1-10193817',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad6863fe675_95592702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad6863fe675_95592702')) {function content_5cfad6863fe675_95592702($_smarty_tpl) {?>/**
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
 * Overrides the Ext.tree.Panel to disable for all browsers except Google
 * Chrome which performs well here.
 */
Ext.override(Ext.tree.Panel, {
    animate: Ext.isChrome,

    /**
     * Initializes the component and forces the panel
     * to disable all animations.
     *
     * @public
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.animate = Ext.isChrome;
        me.callOverridden(arguments);
    }
});
<?php }} ?>