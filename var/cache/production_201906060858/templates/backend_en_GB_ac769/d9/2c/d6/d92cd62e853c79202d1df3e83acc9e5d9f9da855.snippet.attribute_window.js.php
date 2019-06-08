<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:35
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/customer/view/customer_stream/conditions/field/attribute_window.js" */ ?>
<?php /*%%SmartyHeaderCode:14068423785cfad68b7355c1-13953834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd92cd62e853c79202d1df3e83acc9e5d9f9da855' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/customer/view/customer_stream/conditions/field/attribute_window.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14068423785cfad68b7355c1-13953834',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68b751653_54521308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68b751653_54521308')) {function content_5cfad68b751653_54521308($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Customer.view.customer_stream.conditions.field.AttributeWindow', {
    extend: 'Enlight.app.Window',
    modal: true,
    width: 600,
    height: 145,
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'attribute'/'input_text','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'attribute'/'input_text','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please choose a customer attribute<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'attribute'/'input_text','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    layout: {
        type: 'vbox',
        align: 'stretch'
    },

    applyCallback: function(field) { },

    initComponent: function() {
        var me = this;

        me.items = me.createItems();
        me.dockedItems = [me.createToolbar()];
        me.callParent(arguments);
    },

    createItems: function() {
        var me = this;

        var store = Ext.create('Shopware.store.AttributeConfig');
        store.getProxy().extraParams.table = 's_user_attributes';

        me.attributeCombo = Ext.create('Ext.form.field.ComboBox', {
            name: 'attribute',
            labelWidth: 180,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'select_attribute','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'select_attribute','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select attribute<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'select_attribute','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            pageSize: 20,
            store: store,
            valueField: 'columnName',
            allowBlank: false,
            displayField: 'label'
        });

        return [{
            xtype: 'form',
            bodyPadding: 20,
            border: false,
            items: [me.attributeCombo],
            layout: {
                type: 'vbox',
                align: 'stretch'
            },
            flex: 1
        }];
    },

    createToolbar: function() {
        var me = this;
        return Ext.create('Ext.toolbar.Toolbar', {
            dock: 'bottom',
            items: ['->', {
                xtype: 'button',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'apply','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'apply','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Apply<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'apply','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                cls: 'primary',
                handler: function() {
                    if (me.attributeCombo.getValue()) {
                        me.applyCallback(me.attributeCombo.getValue());
                        me.destroy();
                    }
                }
            }]
        });
    }
});
// 
<?php }} ?>