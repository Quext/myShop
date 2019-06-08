<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:34
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/product_stream/view/condition_list/field/release_date.js" */ ?>
<?php /*%%SmartyHeaderCode:21040747695cfad68ae5c282-67692646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a873d0cdfb42545204bf12d14d22f5badeee8877' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/product_stream/view/condition_list/field/release_date.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21040747695cfad68ae5c282-67692646',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68ae84f39_75779719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68ae84f39_75779719')) {function content_5cfad68ae84f39_75779719($_smarty_tpl) {?>/**
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
 * @package    ProductStream
 * @subpackage Window
 * @version    $Id$
 * @author shopware AG
 */
//
//
Ext.define('Shopware.apps.ProductStream.view.condition_list.field.ReleaseDate', {

    extend: 'Ext.form.FieldContainer',
    layout: { type: 'vbox', align: 'stretch' },
    mixins: [ 'Ext.form.field.Base' ],
    height: 70,
    value: undefined,

    initComponent: function() {
        var me = this;
        me.items = me.createItems();
        me.callParent(arguments);
    },

    createItems: function() {
        var me = this;
        return [
            me.createDirectionField(),
            me.createDayField()
        ];
    },

    createDirectionField: function() {
        var me = this;

        me.directionStore = Ext.create('Ext.data.Store', {
            fields: ['value', 'label'],
            data: [
                { value: 'past', label: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'release_date'/'past','default'=>'Past','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'release_date'/'past','default'=>'Past','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Past<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'release_date'/'past','default'=>'Past','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' },
                { value: 'future', label: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'release_date'/'future','default'=>'Future','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'release_date'/'future','default'=>'Future','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Future<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'release_date'/'future','default'=>'Future','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' }
            ]
        });

        me.directionField = Ext.create('Ext.form.field.ComboBox', {
            allowBlank: false,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'release_date'/'input_text','default'=>'Release date in the','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'release_date'/'input_text','default'=>'Release date in the','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Released in the<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'release_date'/'input_text','default'=>'Release date in the','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            value: 'past',
            displayField: 'label',
            valueField: 'value',
            store: me.directionStore,
            labelWidth: 160
        });

        return me.directionField;
    },

    createDayField: function() {
        var me = this;

        me.dayField = Ext.create('Ext.form.field.Number', {
            labelWidth: 30,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'days','default'=>'days','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'days','default'=>'days','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
days<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'days','default'=>'days','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            allowBlank: false,
            minValue: 1,
            value: 1,
        });
        return me.dayField;
    },

    getValue: function() {
        return this.value;
    },

    setValue: function(value) {
        var me = this;

        me.value = value;

        if (!Ext.isObject(value)) {
            me.directionField.setValue('past');
            me.dayField.setValue(1);
            return;
        }

        if (value.hasOwnProperty('direction')) {
            me.directionField.setValue(value.direction);
        }
        if (value.hasOwnProperty('days')) {
            me.dayField.setValue(value.days);
        }
    },

    getSubmitData: function() {
        var value = {};

        value[this.name] = {
            direction: this.directionField.getValue(),
            days: this.dayField.getValue()
        };
        return value;
    },

    validate: function() {

        return true;
    }
});
//<?php }} ?>