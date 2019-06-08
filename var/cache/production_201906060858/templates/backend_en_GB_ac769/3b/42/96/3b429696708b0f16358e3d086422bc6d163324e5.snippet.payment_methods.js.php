<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:35
         compiled from "/Applications/MAMP/htdocs/myShop/engine/Shopware/Plugins/Default/Core/PaymentMethods/Views/emotion/backend/order/payment_methods/view/detail/payment_methods.js" */ ?>
<?php /*%%SmartyHeaderCode:13939903585cfad68bcdc4e3-44144787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b429696708b0f16358e3d086422bc6d163324e5' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/engine/Shopware/Plugins/Default/Core/PaymentMethods/Views/emotion/backend/order/payment_methods/view/detail/payment_methods.js',
      1 => 1559938521,
      2 => 'file',
    ),
    'e11dd191394c751f93ae9511c8a2f60353228d21' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/engine/Shopware/Plugins/Default/Core/PaymentMethods/Views/emotion/backend/order/payment_methods/controller/detail.js',
      1 => 1559938521,
      2 => 'file',
    ),
    '1f5ed6a8596855917c51539e646fb4657736de90' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/order/model/batch.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13939903585cfad68bcdc4e3-44144787',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68bd03363_28538893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68bd03363_28538893')) {function content_5cfad68bd03363_28538893($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

//
Ext.define('Shopware.apps.Order.model.Batch', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Shopware.apps.Order.model.Order',

    /**
     * Add properties for the batch processing status
     * @array
     */
    fields: [
        //
        { name : 'success', type: 'bool', default: null },
        { name : 'errorMessage', type: 'string', useNull: true, default: null }
    ],
});
//

<?php }} ?>