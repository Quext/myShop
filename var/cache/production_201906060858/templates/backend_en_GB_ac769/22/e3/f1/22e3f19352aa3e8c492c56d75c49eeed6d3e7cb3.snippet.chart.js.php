<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:35
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/customer/store/chart.js" */ ?>
<?php /*%%SmartyHeaderCode:17551657545cfad68b7cfdc3-92018812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22e3f19352aa3e8c492c56d75c49eeed6d3e7cb3' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/customer/store/chart.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17551657545cfad68b7cfdc3-92018812',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68b7d5de0_04123368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68b7d5de0_04123368')) {function content_5cfad68b7d5de0_04123368($_smarty_tpl) {?>/**
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
 * Shopware Store - Customer list backend module.
 *
 * The chart store is used for the order chart which displayed on top of the
 * order tab.
 */
// 
Ext.define('Shopware.apps.Customer.store.Chart', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend: 'Ext.data.Store',
    /**
     * Disable auto loading
     * @boolean
     */
    autoLoad: false,
    /**
     * To upload all selected items in one request
     * @boolean
     */
    batch: true,
    /**
     * Define the used model for this store
     * @string
     */
    model: 'Shopware.apps.Customer.model.Chart'
});
// 
<?php }} ?>