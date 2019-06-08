<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:34
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/order/model/detail_batch.js" */ ?>
<?php /*%%SmartyHeaderCode:12548540985cfad68aa62c86-75175114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa8e278908e6c20b703e43ef27e5c1d9308a90c3' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/order/model/detail_batch.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12548540985cfad68aa62c86-75175114',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68aa6ee93_69376899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68aa6ee93_69376899')) {function content_5cfad68aa6ee93_69376899($_smarty_tpl) {?>/**
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
 * @author shopware AG
 */

/**
 * Shopware Model - Order models.
 *
 * The detail_batch model ist responsible to load all other stores needed for the detail page.
 *
 */
//
Ext.define('Shopware.apps.Order.model.DetailBatch', {

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

   /**
    * The batch model is only a data container which contains all
    * data for the global stores in the model association data.
    * An Ext.data.Model needs one field.
    * @array
    */
    fields: [
       //
       'id'
    ],

    /**
     * Define the associations of the order model.
     * @array
     */
    associations:[
        { type:'hasMany', model:'Shopware.apps.Base.model.OrderStatus', name:'getOrderStatus', associationKey:'orderStatus' },
        { type:'hasMany', model:'Shopware.apps.Base.model.PaymentStatus', name:'getPaymentStatus', associationKey:'paymentStatus' },
        { type:'hasMany', model:'Shopware.apps.Base.model.Shop', name:'getShops', associationKey:'shops' },
        { type:'hasMany', model:'Shopware.apps.Base.model.Country', name:'getCountries', associationKey:'countries' },
        { type:'hasMany', model:'Shopware.apps.Base.model.CountryState', name:'getState', associationKey:'states' },
        { type:'hasMany', model:'Shopware.apps.Base.model.Payment', name:'getPayments', associationKey:'payments' },
        { type:'hasMany', model:'Shopware.apps.Base.model.Dispatch', name:'getDispatches', associationKey:'dispatches' },
        { type:'hasMany', model:'Shopware.apps.Base.model.DocType', name:'getDocumentTypes', associationKey:'documentTypes' },
    ]
});
//

<?php }} ?>