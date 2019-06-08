<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:32
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/index/view/search.js" */ ?>
<?php /*%%SmartyHeaderCode:1157093615cfad688a141e7-06542591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '779c827b85fd039200e1a6f622316960e1543adf' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/index/view/search.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1157093615cfad688a141e7-06542591',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'esEnabled' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad688a37356_80674671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad688a37356_80674671')) {function content_5cfad688a37356_80674671($_smarty_tpl) {?>/**
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

/**
 * Shopware Global Search
 *
 * This component creates the global search for the Shopware
 * Backend.
 */
//
Ext.define('Shopware.apps.Index.view.Search', {
    extend: 'Ext.container.Container',
    alias: 'widget.searchfield',
    alternateClassName: 'Shopware.Search',
    cls: 'searchfield-container',

    /*<?php if ($_smarty_tpl->tpl_vars['esEnabled']->value){?>*/
        minSearchLength: 2,
    /*<?php }else{ ?>*/
        minSearchLength: 4,
    /*<?php }?>*/

    /**
     * URL which handles the search requests
     *
     * @string
     */
    requestUrl: '<?php echo '/myShop/backend/search';?>',

    /**
     * Class name which will be set on focus
     *
     * @string
     */
    focusCls: 'searchcontainer-focus',

    /**
     * Initialize the search and creates the search field and
     * the drop down menu
     */
    initComponent: function () {
        var me = this;

        me.callParent(arguments);

        me.searchField = Ext.create('Ext.form.field.Text', {
            emptyText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'search','default'=>'Search...','namespace'=>'backend/index/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'search','default'=>'Search...','namespace'=>'backend/index/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'search','default'=>'Search...','namespace'=>'backend/index/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            cls: 'searchfield',
            margin: '5 0',
            allowBlank: true,
            enableKeyEvents: true,
            /*<?php if ($_smarty_tpl->tpl_vars['esEnabled']->value){?>*/
            checkChangeBuffer: 50,
            /*<?php }else{ ?>*/
            checkChangeBuffer: 400,
            /*<?php }?>*/
            listeners: {
                scope: me,
                change: me.sendSearchRequest,
                focus: function (field) {
                    me.addCls(me.focusCls);
                    me.sendSearchRequest(field);
                },
                blur: function () {

                    // Hide search drop down
                    Ext.defer(function () {
                        Shopware.searchField.searchDropDown.hide();
                        me.removeCls(me.focusCls);
                    }, 1000);
                }
            }

        });

        me.searchDropDown = Ext.create('Ext.container.Container', {
            cls: Ext.baseCSSPrefix + 'search-dropdown',
            renderTo: Ext.getBody(),
            style: 'position: fixed; z-index: 20030',
            hidden: true
        });

        me.add(me.searchField);
        Shopware.searchField = me;
    },

    /**
     * This function sends the AJAX request depending by the field parameter and replaces
     * the content of the drop down menu
     *
     * @param (object) field
     */
    sendSearchRequest: function (field) {
        var value = field.getValue(),
            me = this;

        // Check the length of the search query
        if (value.length < this.minSearchLength) {
            me.searchDropDown.update('');
            me.searchDropDown.hide();
            return false;
        }

        // Request the search result
        Ext.Ajax.request({
            url: me.requestUrl,
            params: { search: value },
            method: 'POST',
            success: function (response) {
                var html = response.responseText,
                    parent = me.searchField.getEl().parent('.searchfield-container'),
                    left = parent.dom.offsetLeft,
                    top = parent.dom.offsetTop;


                me.searchDropDown.update(html);
                me.searchDropDown.getEl().applyStyles({
                    top: top + 'px',
                    left: left + 'px'
                });
                me.searchDropDown.show();
            }
        });

    }
});
<?php }} ?>