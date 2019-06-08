<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:35
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/customer/view/customer_stream/conditions/ordered_with_payment_condition.js" */ ?>
<?php /*%%SmartyHeaderCode:19892968535cfad68b663be6-39602937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30f46357cf2f4167f0b1c83cb8830dfc27538277' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/customer/view/customer_stream/conditions/ordered_with_payment_condition.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19892968535cfad68b663be6-39602937',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68b673805_13152888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68b673805_13152888')) {function content_5cfad68b673805_13152888($_smarty_tpl) {?>/**
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
 * @subpackage CustomerStream
 * @version    $Id$
 * @author shopware AG
 */

// 
// 
Ext.define('Shopware.apps.Customer.view.customer_stream.conditions.OrderedWithPaymentCondition', {

    getLabel: function() {
        return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ordered_with_payment_condition','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ordered_with_payment_condition','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ordered with payment method<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ordered_with_payment_condition','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
    },

    supports: function(conditionClass) {
        return (conditionClass == 'Shopware\\Bundle\\CustomerSearchBundle\\Condition\\OrderedWithPaymentCondition');
    },

    create: function(callback) {
        callback(this._create());
    },

    load: function(conditionClass, items, callback) {
        callback(this._create());
    },

    _create: function() {
        var factory = Ext.create('Shopware.attribute.SelectionFactory');

        return {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ordered_with_payment_condition_selection','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ordered_with_payment_condition_selection','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ordered with one of the following payment methods<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ordered_with_payment_condition_selection','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            conditionClass: 'Shopware\\Bundle\\CustomerSearchBundle\\Condition\\OrderedWithPaymentCondition',
            items: [{
                xtype: 'shopware-form-field-payment-grid',
                name: 'paymentIds',
                flex: 1,
                allowSorting: false,
                useSeparator: false,
                allowBlank: false,
                store: factory.createEntitySearchStore('Shopware\\Models\\Payment\\Payment'),
                searchStore: factory.createEntitySearchStore('Shopware\\Models\\Payment\\Payment')
            }]
        };
    }
});
// 
<?php }} ?>