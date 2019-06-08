<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:33
         compiled from "/Applications/MAMP/htdocs/myShop/engine/Shopware/Plugins/Default/Backend/SwagUpdate/Views/backend/index/view/swag_update_menu.js" */ ?>
<?php /*%%SmartyHeaderCode:647718665cfad6897b4b71-67036362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfaf3d07a92c908803bf9d33d54a3985d46e0594' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/engine/Shopware/Plugins/Default/Backend/SwagUpdate/Views/backend/index/view/swag_update_menu.js',
      1 => 1559938521,
      2 => 'file',
    ),
    '7f2f18580f3cb21307a59d5b17c63382f95c9818' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/custom/plugins/SwagPaymentPayPalUnified/Resources/views/backend/paypal_unified/menu_icon.tpl',
      1 => 1559942657,
      2 => 'file',
    ),
    '8ef2d56a5eabb9ebe145d8abdea12a8dc4b77699' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/index/store/news_local.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '647718665cfad6897b4b71-67036362',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad6897da681_07561683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad6897da681_07561683')) {function content_5cfad6897da681_07561683($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Index.store.NewsLocal', {
    extend: 'Ext.data.Store',
    model: 'Shopware.apps.Index.model.News',
    autoLoad: true,
    proxy: {
        type: 'localstorage',
        id: 'widget-settings-shopware-news-cache-<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'backend/index/store/news_local','name'=>'script'/'ext'/'lang','default'=>'en_GB')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'backend/index/store/news_local','name'=>'script'/'ext'/'lang','default'=>'en_GB'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
en_GB<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'backend/index/store/news_local','name'=>'script'/'ext'/'lang','default'=>'en_GB'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    }
});
//
<?php }} ?>