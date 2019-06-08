<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:35
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/customer/view/customer_stream/conditions/field/attribute_value.js" */ ?>
<?php /*%%SmartyHeaderCode:12475920215cfad68b70af13-81910199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de71a17756ecf7d3844087f142a56618bab9bd1f' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/customer/view/customer_stream/conditions/field/attribute_value.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12475920215cfad68b70af13-81910199',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68b72e038_84448030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68b72e038_84448030')) {function content_5cfad68b72e038_84448030($_smarty_tpl) {?>/**
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
 * @subpackage CustumerStream
 * @version    $Id$
 * @author shopware AG
 */

// 

// 

Ext.define('Shopware.apps.Customer.view.customer_stream.conditions.field.AttributeValue', {
    extend: 'Ext.form.FieldContainer',
    layout: { type: 'vbox', align: 'stretch' },
    mixins: {
        formField: 'Ext.form.field.Base'
    },

    initComponent: function() {
        var me = this;

        me.items = me.createItems();

        me.operator = me.operatorField.getValue();

        me.operatorField.on('change', function (field, value) {
            me.operator = value;

            if (value === 'BETWEEN') {
                me.betweenContainer.show();
                me.valueField.hide();
                me.fromField.setDisabled(false);
                me.toField.setDisabled(false);
                me.valueField.setDisabled(true);
            } else {
                me.betweenContainer.hide();
                me.valueField.show();
                me.fromField.setDisabled(true);
                me.toField.setDisabled(true);
                me.valueField.setDisabled(false);
            }
        });

        me.callParent(arguments);
    },

    createItems: function () {
        var me = this;

        return [
            me.createValueField(),
            me.createBetweenContainer()
        ];
    },

    getValue: function() {
        var value = this.valueField.getValue();

        if (this.operator === 'BETWEEN') {
            return {
                min: this.fromField.getValue(),
                max: this.toField.getValue()
            };
        } else if (this.operator === 'IN') {
            return value.split(',');
        }

        return value;
    },

    setValue: function(value) {
        var me = this;

        if (Ext.isObject(value)) {
            me.fromField.setValue(value.min);
            me.toField.setValue(value.max);

            return;
        }
        me.valueField.setValue(value);
    },

    getSubmitData: function() {
        var result = {};
        result[this.name] = this.getValue();

        return result;
    },

    createFromField: function() {
        var me = this;

        me.fromField = Ext.create('Ext.form.field.Number', {
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'attribute'/'from_text','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'attribute'/'from_text','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
From<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'attribute'/'from_text','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            allowBlank: false,
            width: '100%',
            listeners: {
                change: function() {
                    me.toField.setMinValue(this.getValue() + 1);
                }
            }
        });
        return me.fromField;
    },

    createToField: function() {
        var me = this;

        me.toField = Ext.create('Ext.form.field.Number', {
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'attribute'/'to_text','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'attribute'/'to_text','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'attribute'/'to_text','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            allowBlank: false,
            width: '100%',
            listeners: {
                change: function() {
                    me.fromField.setMaxValue(this.getValue() - 1);
                }
            }
        });
        return me.toField;
    },

    createValueField: function () {
        var me = this;

        me.valueField = Ext.create('Ext.form.field.Text', {
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'attribute'/'value','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'attribute'/'value','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Value<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'attribute'/'value','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            allowBlank: false,
            name: 'value'
        });
        return me.valueField;
    },

    createBetweenContainer: function () {
        var me = this;

        me.betweenContainer = Ext.create('Ext.container.Container', {
            layout: { type: 'vbox' },
            hidden: true,
            items: [me.createFromField(), me.createToField()]
        });
        return me.betweenContainer;
    }
});
// 
<?php }} ?>