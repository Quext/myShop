<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:30
         compiled from "/Applications/MAMP/htdocs/myShop/engine/Library/ExtJs/overrides/Ext.form.Field.js" */ ?>
<?php /*%%SmartyHeaderCode:13583603985cfad686356e32-76779499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6e32ab18750c1455016b6c462b391f705ba45fd' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/engine/Library/ExtJs/overrides/Ext.form.Field.js',
      1 => 1559938519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13583603985cfad686356e32-76779499',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68635bd62_40411710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68635bd62_40411710')) {function content_5cfad68635bd62_40411710($_smarty_tpl) {?>/**
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
 * Overrides the Ext.button.Button to provide
 * an additional HTML5 data attribute to provide
 * a better adressing in selenium ui tests.
 *
 * @category   Enlight
 * @package    Enlight_ExtJs
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @license    http://enlight.de/license     New BSD License
 */
Ext.define('Enlight.form.Field',
    {
        override: 'Ext.form.Field',

        afterRender: function () {
            var me = this;
            me.callParent(arguments);
            me.initHelpSupportElements();
        },

    }, function()
    {
        Ext.form.Field.mixin('helpSupportElems', Enlight.form.mixin.HelpSupportElements);
});
<?php }} ?>