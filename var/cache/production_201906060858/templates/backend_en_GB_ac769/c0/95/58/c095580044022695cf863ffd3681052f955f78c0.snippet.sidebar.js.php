<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:34
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article_list/view/main/sidebar.js" */ ?>
<?php /*%%SmartyHeaderCode:9072711235cfad68aa110c5-72779597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c095580044022695cf863ffd3681052f955f78c0' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article_list/view/main/sidebar.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9072711235cfad68aa110c5-72779597',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68aa4ecc5_25303068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68aa4ecc5_25303068')) {function content_5cfad68aa4ecc5_25303068($_smarty_tpl) {?>/**
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
//
Ext.define('Shopware.apps.ArticleList.view.main.Sidebar', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.multi-edit-sidebar',

    collapsible: true,

    /**
     * Set width
     */
    width: 210,

    layout: 'accordion',

    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'categoriesAndFilters','default'=>'Categories & Filters','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'categoriesAndFilters','default'=>'Categories & Filters','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Categories & Filters<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'categoriesAndFilters','default'=>'Categories & Filters','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',


    initComponent: function () {
        var me = this;

        me.items = me.getPanels();

        me.callParent(arguments);
    },

    /**
     * Returns the three elements of the accordion layout
     */
    getPanels: function () {
        var me = this;

        return [
            { xtype: 'multi-edit-category-tree' },
            // Wrap the filter grid into a panel so that the
            // accordion elements a formatted properly
            { xtype: 'panel',
                title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'filter','default'=>'Filter','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'filter','default'=>'Filter','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Filter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'filter','default'=>'Filter','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                layout: 'fit',
                items: [
                    {
                        xtype: 'multi-edit-navigation-grid'
                    }
                ] }
        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'doMultiEdit'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
        ,{ xtype: 'multi-edit-menu' }
        /*<?php }?>*/
        ];
    }

});
//
<?php }} ?>