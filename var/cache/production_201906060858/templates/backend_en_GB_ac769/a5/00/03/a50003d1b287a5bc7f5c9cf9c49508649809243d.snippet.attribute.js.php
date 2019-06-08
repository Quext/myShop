<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:35
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/product_stream/store/attribute.js" */ ?>
<?php /*%%SmartyHeaderCode:6810987795cfad68b194b74-26263454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a50003d1b287a5bc7f5c9cf9c49508649809243d' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/product_stream/store/attribute.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6810987795cfad68b194b74-26263454',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68b19edb8_00590741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68b19edb8_00590741')) {function content_5cfad68b19edb8_00590741($_smarty_tpl) {?>/**
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
 * @package    ProductStream
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */
//
Ext.define('Shopware.apps.ProductStream.store.Attribute', {
    extend:'Ext.data.Store',
    fields: [ 'column', 'label' ],
    autoLoad: false,
    pageSize: 20,
    proxy:{
        type:'ajax',
        url: '<?php echo '/myShop/backend/ProductStream/getAttributes';?>',
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }
});
//<?php }} ?>