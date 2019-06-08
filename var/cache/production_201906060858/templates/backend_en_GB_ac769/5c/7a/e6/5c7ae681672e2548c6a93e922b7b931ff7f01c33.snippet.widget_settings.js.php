<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:32
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/index/model/widget_settings.js" */ ?>
<?php /*%%SmartyHeaderCode:6922502615cfad6888e4d95-29739221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c7ae681672e2548c6a93e922b7b931ff7f01c33' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/index/model/widget_settings.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6922502615cfad6888e4d95-29739221',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad6888eaea8_93857377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad6888eaea8_93857377')) {function content_5cfad6888eaea8_93857377($_smarty_tpl) {?>/**
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

//

Ext.define('Shopware.apps.Index.model.WidgetSettings', {

    extend: 'Ext.data.Model',

    fields: [
        'authId',
        'height',
        'columnsShown',
        'dock',
        'pinned',
        'minimized',
        { name: 'data', type: 'auto' }
    ]
});

//
<?php }} ?>