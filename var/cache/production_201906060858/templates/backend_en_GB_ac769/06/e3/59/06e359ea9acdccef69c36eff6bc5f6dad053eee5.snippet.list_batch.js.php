<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:35
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/order/store/list_batch.js" */ ?>
<?php /*%%SmartyHeaderCode:20332807985cfad68b72f6a9-27697294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06e359ea9acdccef69c36eff6bc5f6dad053eee5' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/order/store/list_batch.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20332807985cfad68b72f6a9-27697294',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68b735282_32413213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68b735282_32413213')) {function content_5cfad68b735282_32413213($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage DetailBatch
 * @version    $Id$
 * @author     Daniel Nögel
 * @author     $Author$
 */

/**
 * Shopware Store - Article Module
 *
 * The batch store of the order module is responsible to initial
 * all global stores of the detail page which used for the data selection.
 */
//
Ext.define('Shopware.apps.Order.store.ListBatch', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend:'Ext.data.Store',
    /**
     * to upload all selected items in one request
     * @boolean
     */
    batch:true,
    autoLoad: false,
    /**
     * Define the used model for this store
     * @string
     */
    model:'Shopware.apps.Order.model.ListBatch'
});
//

<?php }} ?>