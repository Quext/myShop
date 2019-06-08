<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:35
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/order/view/list/navigation.js" */ ?>
<?php /*%%SmartyHeaderCode:11439705035cfad68b3a4182-21731225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8bf5654ea291b2659463250d991f62baef16c6c' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/order/view/list/navigation.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11439705035cfad68b3a4182-21731225',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68b3af976_16012102',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68b3af976_16012102')) {function content_5cfad68b3af976_16012102($_smarty_tpl) {?>/**
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
 * @subpackage View
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Order list navigation
 *
 * Displayed on the left side of the order list module.
 */
//
Ext.define('Shopware.apps.Order.view.list.Navigation', {

    /**
     * Define that the additional information is an Ext.panel.Panel extension
     * @string
     */
    extend:'Ext.container.Container',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.order-list-navigation',

    /**
     * Set border layout for the panel content
     * @string
     */
    layout:'anchor',
    /**
     * Set css class for this component
     * @string
     */
    cls:Ext.baseCSSPrefix + 'order-list-navigation',

    /**
     * Sets the width of the panel
     * @integer
     */
    width: 390,

    /**
     * Initialed the info panel is collapsed
     * @boolean
     */
    collapsed:false,

    /**
     * Define that the info panel can be collapsed
     * @boolean
     */
    collapsible:true,

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets: {
        title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'navigation_title','default'=>'Navigation options','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation_title','default'=>'Navigation options','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Navigation options<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation_title','default'=>'Navigation options','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * The initComponent template method is an important initialization step for a Component.
     * It is intended to be implemented by each subclass of Ext.Component to provide any needed constructor logic.
     * The initComponent method of the class being created is called first,
     * with each initComponent method up the hierarchy to Ext.Component being called thereafter.
     * This makes it easy to implement and, if needed, override the constructor logic of the Component at any step in the hierarchy.
     * The initComponent method must contain a call to callParent in order to ensure that the parent class' initComponent method is also called.
     *
     * @return void
     */
    initComponent:function () {
        var me = this;

        me.items = me.getPanels();
        me.title = me.snippets.title;
        me.callParent(arguments);
    },

    getPanels: function() {
        var me = this;

        return [
            Ext.create('Shopware.apps.Order.view.list.Filter', {
                documentStore: me.documentStore,
                orderStatusStore: me.orderStatusStore,
                paymentStatusStore: me.paymentStatusStore
            })
        ];
    }
});
//
<?php }} ?>