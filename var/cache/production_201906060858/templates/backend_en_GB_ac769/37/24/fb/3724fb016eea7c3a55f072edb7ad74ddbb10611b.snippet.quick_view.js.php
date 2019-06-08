<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:35
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/customer/store/quick_view.js" */ ?>
<?php /*%%SmartyHeaderCode:11255222745cfad68b819fa4-21465244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3724fb016eea7c3a55f072edb7ad74ddbb10611b' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/customer/store/quick_view.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11255222745cfad68b819fa4-21465244',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68b8214e5_29485858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68b8214e5_29485858')) {function content_5cfad68b8214e5_29485858($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

// 

/**
 * Shopware Model - Customer list backend module.
 *
 * The order model represents a single data row of the s_order or the Shopware\Models\Order\Order
 * doctrine mode which contains the head data about a shop order.
 */
// 
Ext.define('Shopware.apps.Customer.store.QuickView', {
    extend: 'Shopware.store.Listing',

    model: 'Shopware.apps.Customer.model.QuickView',

    sorters: [{
        property: 'id',
        direction: 'DESC'
    }],

    configure: function() {
        return {
            controller: 'CustomerQuickView'
        };
    }
});
// 
<?php }} ?>