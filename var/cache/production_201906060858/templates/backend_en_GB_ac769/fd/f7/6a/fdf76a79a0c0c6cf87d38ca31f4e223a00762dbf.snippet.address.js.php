<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:35
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/customer/store/address.js" */ ?>
<?php /*%%SmartyHeaderCode:11582548145cfad68b7ee1c4-76986864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdf76a79a0c0c6cf87d38ca31f4e223a00762dbf' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/customer/store/address.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11582548145cfad68b7ee1c4-76986864',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68b814b12_56018808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68b814b12_56018808')) {function content_5cfad68b814b12_56018808($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

// 

/**
 * Shopware Store - Customer list backend module
 *
 * The orders store is used from the customer order grid which is displayed
 * on bottom of the order tab.
 */
// 
Ext.define('Shopware.apps.Customer.store.Address', {

    extend: 'Shopware.store.Listing',
    model: 'Shopware.apps.Customer.model.Address',
    pageSize: 50,

    configure: function() {
        return {
            controller: 'Address'
        };
    }
});
// 
<?php }} ?>