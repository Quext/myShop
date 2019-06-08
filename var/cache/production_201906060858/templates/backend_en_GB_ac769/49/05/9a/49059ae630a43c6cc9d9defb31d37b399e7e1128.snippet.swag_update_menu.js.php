<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:33
         compiled from "/Applications/MAMP/htdocs/myShop/engine/Shopware/Plugins/Default/Backend/SwagUpdate/Views/backend/index/view/swag_update_menu.js" */ ?>
<?php /*%%SmartyHeaderCode:17665851745cfad689dc88e1-99421778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49059ae630a43c6cc9d9defb31d37b399e7e1128' => 
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
    'c275314f08c204663502b23c0fedf0baba363646' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/index/store/news.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17665851745cfad689dc88e1-99421778',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad689de59b2_03250640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad689de59b2_03250640')) {function content_5cfad689de59b2_03250640($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Index.store.News', {
    extend: 'Ext.data.Store',
    model: 'Shopware.apps.Index.model.News',
    remoteFilter: true,
    clearOnLoad: true,
    proxy: {
        type: 'ajax',
        url: '<?php echo '/myShop/backend/widgets/getShopwareNews';?>',
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>