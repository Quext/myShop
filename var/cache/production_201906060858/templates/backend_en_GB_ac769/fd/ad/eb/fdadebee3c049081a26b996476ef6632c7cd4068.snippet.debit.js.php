<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:34
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/order/model/debit.js" */ ?>
<?php /*%%SmartyHeaderCode:15162142865cfad68a9361e1-27257140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdadebee3c049081a26b996476ef6632c7cd4068' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/order/model/debit.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15162142865cfad68a9361e1-27257140',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68a94b407_07754838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68a94b407_07754838')) {function content_5cfad68a94b407_07754838($_smarty_tpl) {?>/**
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

/**
 * Shopware Model - Order list backend module.
 */
//
Ext.define('Shopware.apps.Order.model.Debit', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',
    /**
     * Extends the models fields with the order id field.
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'customerId', type: 'int', useNull: true },
        { name: 'account', type:'string' },
        { name: 'bankCode', type:'string' },
        { name: 'bankName', type:'string' },
        { name: 'accountHolder', type:'string' }
    ]
});
//

<?php }} ?>