<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:34
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/customer/view/detail/comment.js" */ ?>
<?php /*%%SmartyHeaderCode:17827413185cfad68ade0502-73312150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed3d4e929af72cb319696f1360820bcafb10c06a' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/customer/view/detail/comment.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17827413185cfad68ade0502-73312150',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68adfa713_15185000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68adfa713_15185000')) {function content_5cfad68adfa713_15185000($_smarty_tpl) {?>/**
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
 * @subpackage Detail
 * @version    $Id$
 * @author shopware AG
 */

// 

/**
 * Shopware UI - Customer detail page
 *
 * The comment field set contains the internal comment to the customer
 * which is stored in the base model and filled over the s_user table
 */
// 
Ext.define('Shopware.apps.Customer.view.detail.Comment', {
    /**
     * Define that the comment field set is an extension of the Ext.form.FieldSet
     * @string
     */
    extend: 'Ext.form.FieldSet',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias: 'widget.customer-comment-field-set',
    /**
     * Set css class for this component
     * @string
     */
    cls: Ext.baseCSSPrefix + 'comment-field-set',
    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets: {
        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'comment'/'title','default'=>'Comment','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'comment'/'title','default'=>'Comment','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Comment<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'comment'/'title','default'=>'Comment','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        label: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'comment'/'comment_label','default'=>'Comment','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'comment'/'comment_label','default'=>'Comment','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Comment<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'comment'/'comment_label','default'=>'Comment','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        support: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'comment'/'comment_support','default'=>'Internal communication only','namespace'=>'backend/customer/view/detail')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'comment'/'comment_support','default'=>'Internal communication only','namespace'=>'backend/customer/view/detail'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
For internal use only<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'comment'/'comment_support','default'=>'Internal communication only','namespace'=>'backend/customer/view/detail'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Layout type for the component.
     * @string
     */
    layout: 'anchor',

    /**
     * Component event method which is fired when the component
     * is initials. The component is initials when the user
     * want to create a new customer or edit an existing customer
     * @return void
     */
    initComponent: function () {
        var me = this;
        me.title = me.snippets.title;

        me.items = [{
            anchor: '100%',
            minWidth: 300,
            xtype: 'textarea',
            name: 'internalComment',
            margin: '5 0 0',
            padding: '0 0 5',
            style: 'font-size: 12px',
            grow: true,
            supportText: me.snippets.support
        }];

        me.callParent(arguments);
    }
});
// 
<?php }} ?>