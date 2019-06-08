<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:34
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article_list/model/filter.js" */ ?>
<?php /*%%SmartyHeaderCode:8712542015cfad68a672ee1-21669248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '886c411c56667262a04b1a6bfb7977775717b2dc' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article_list/model/filter.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8712542015cfad68a672ee1-21669248',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68a6b4c69_09464110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68a6b4c69_09464110')) {function content_5cfad68a6b4c69_09464110($_smarty_tpl) {?>/**
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
 * Shopware Model - Filter model
 *
 * The filter model represents a single filter
 */
//
//
Ext.define('Shopware.apps.ArticleList.model.Filter', {
    /**
     * Extends the standard Ext Model
     *
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used for this model
     *
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'int', useNull: true },
        { name: 'name', type: 'string' },
        { name: 'filterString', type: 'string' },
        { name: 'description', type: 'string' },
        { name: 'create', type: 'datetime' },
        { name: 'isFavorite', type: 'boolean' },
        { name: 'isSimple', type: 'boolean' },
        {
            name : 'groupName',
            type: 'string',
            convert : function(value, record) {
                return record.get('isFavorite') ? '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'group_favorite','default'=>'Favorite','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'group_favorite','default'=>'Favorite','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Favorites<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'group_favorite','default'=>'Favorite','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'group_filter','default'=>'Filter','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'group_filter','default'=>'Filter','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Other filters<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'group_filter','default'=>'Filter','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
            }
        }
    ],

    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        /**
         * Set proxy type to ajax
         *
         * @string
         */
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         *
         * @object
         */
        api: {
            create: '<?php echo '/myShop/backend/ArticleList/saveFilter';?>',
            update: '<?php echo '/myShop/backend/ArticleList/saveFilter';?>',
            destroy: '<?php echo '/myShop/backend/ArticleList/deleteFilter';?>'
        },

        /**
         * Configure the data reader
         *
         * @object
         */
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }
});
//
<?php }} ?>