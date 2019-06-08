<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:30
         compiled from "/Applications/MAMP/htdocs/myShop/engine/Library/ExtJs/overrides/Ext.form.field.Number.js" */ ?>
<?php /*%%SmartyHeaderCode:12746150915cfad6863f0e94-08912979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04ebd45733c5b9f078a8377493837cd806890d1d' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/engine/Library/ExtJs/overrides/Ext.form.field.Number.js',
      1 => 1559938519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12746150915cfad6863f0e94-08912979',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad6863f42b3_40854021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad6863f42b3_40854021')) {function content_5cfad6863f42b3_40854021($_smarty_tpl) {?>/**
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
 * Shopware UI - Number field Override
 *
 * Sets the default submitLocaleSeparator value to false
 * so we can easily handle i18n number separators
 *
 * Shopware AG (c) 2014. All rights reserved.
 *
 * @link http://www.shopware.de/
 * @author t.garcia
 * @date 2014-06-20
 * @license http://www.shopware.de/license
 * @package overrides
 */
Ext.override(Ext.form.field.Number,
/** @lends Ext.form.field.Number */
{
    submitLocaleSeparator: false
});
<?php }} ?>