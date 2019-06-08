<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:34
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article_list/view/query_field.js" */ ?>
<?php /*%%SmartyHeaderCode:16334276655cfad68abe24f9-41221944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de5d502783aacd9f68e7b07e1a4e1de74c8e7b92' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article_list/view/query_field.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16334276655cfad68abe24f9-41221944',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68ac101b9_81176412',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68ac101b9_81176412')) {function content_5cfad68ac101b9_81176412($_smarty_tpl) {?>/**
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
 */

//

/**
 * Shopware UI - Main Panel
 */
//
Ext.define('Shopware.apps.ArticleList.view.QueryField', {
    extend: 'Ext.form.Panel',
    alias: 'widget.query-field',

    bodyBorder: 0,

    border: false,


    padding: '10 10 0 10',


    /**
     * Initializes the component, sets up toolbar and pagingbar and and registers some events
     *
     * @return void
     */
    initComponent: function () {
        var me = this;

        // Create the items of the container
        me.items = me.createItems();

        me.addEvents(
            'suggest',

            'filter'
        );

        me.callParent(arguments);
    },

    /**
     * Creates the items for the card layout
     * @return Array
     */
    createItems: function () {
        var me = this;

        return [{
            xtype: 'fieldset',
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'addFilter'/'queryTitle','default'=>'Your query','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'addFilter'/'queryTitle','default'=>'Your query','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your query<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'addFilter'/'queryTitle','default'=>'Your query','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            defaults : {
                margin: '0 0 10 0'
            },
            items: [
                me.getFilterInputField(),
            {
                xtype: 'label',
                name: 'status-label',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'queryField'/'enterQuery','default'=>'Enter your Query here:','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'queryField'/'enterQuery','default'=>'Enter your Query here:','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Enter your query here:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'queryField'/'enterQuery','default'=>'Enter your Query here:','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            }]
        }];

    },

    /**
     * Returns the whole input field including indicator, combo and execute-button
     *
     * @returns Object
     */
    getFilterInputField: function () {
        var me = this;
        return {
            xtype: 'container',
            layout: {
                type: 'hbox',
                pack: 'start',
                align: 'stretchmax'
            },
            items: [
                me.getCombo(),
                {
                    xtype: 'button',
                    text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'addFilter'/'run','default'=>'Execute','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'addFilter'/'run','default'=>'Execute','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Execute<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'addFilter'/'run','default'=>'Execute','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    name: 'run-button',
                    iconCls: 'sprite-magnifier--arrow',
                    tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'runFilter','default'=>'Immediatly show matching articles','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'runFilter','default'=>'Immediatly show matching articles','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Run filter and display matching products immediately<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'runFilter','default'=>'Immediatly show matching articles','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    disabled: true,
                    handler: function () {
                        me.fireEvent('filter');
                    }
                }
            ]
        };
    },

    /**
     * Returns the combo box the filter input field bases on
     *
     * @returns Object
     */
    getCombo: function() {
        var me = this;
        me.combo = Ext.create('Shopware.form.field.FilterCombo', {
            name: 'filterString',
            flex: '1',

            // Debug
            'queryMode': 'local',
            queryDelay: 500,

            displayField: 'title',
            autoSelect: true,
            typeAhead: false,
            hideLabel: true,
            hideTrigger: true,

            listConfig: {
                resizable: false,
                maxWidth: 300,
                height: 3333,
                maxHeight: '100%',
                loadingText: 'Searching...',
                emptyText: 'No matching posts found.',

            pageSize: 10
        },

            // override default onSelect to do redirect
            listeners: {
                // Disable spellcheck
                'afterrender': { fn: function () {
                    me.combo.inputEl.dom.spellcheck = false;
                }, scope: this },
                'focus': { fn: me.comboChangeCallback, scope: this},
                'change': { fn: me.comboChangeCallback, scope: this }
            }
        });

        return me.combo;
    },

    comboChangeCallback: function(combo) {
        var me = this,
            position,
            text = combo.getValue();

        if (text == null) {
            return;
        }

        position = combo.inputEl.dom.selectionStart;

        me.fireEvent('suggest', text, position);
    }


});
//
<?php }} ?>