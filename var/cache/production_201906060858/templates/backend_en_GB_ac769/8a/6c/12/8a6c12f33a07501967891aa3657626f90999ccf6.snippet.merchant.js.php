<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:32
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/index/view/widgets/merchant.js" */ ?>
<?php /*%%SmartyHeaderCode:6742694755cfad688c06ef2-38501516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a6c12f33a07501967891aa3657626f90999ccf6' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/index/view/widgets/merchant.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6742694755cfad688c06ef2-38501516',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad688c5d9f4_33486751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad688c5d9f4_33486751')) {function content_5cfad688c5d9f4_33486751($_smarty_tpl) {?>/**
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
 * Shopware UI - Sales Widget
 *
 * This file holds off the sales widget.
 */
//
Ext.define('Shopware.apps.Index.view.widgets.Merchant', {
    extend: 'Shopware.apps.Index.view.widgets.Base',
    alias: 'widget.swag-merchant-widget',
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'orders'/'title','default'=>'Last orders','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'orders'/'title','default'=>'Last orders','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last orders<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'orders'/'title','default'=>'Last orders','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    layout: 'fit',

    /**
     * Snippets for this widget.
     * @object
     */
    snippets: {
        headers: {
            date: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'headers'/'date','default'=>'Date','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'headers'/'date','default'=>'Date','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Date<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'headers'/'date','default'=>'Date','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            company_name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'headers'/'name','default'=>'Company name','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'headers'/'name','default'=>'Company name','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Company name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'headers'/'name','default'=>'Company name','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            customer: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'headers'/'customer','default'=>'Customer','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'headers'/'customer','default'=>'Customer','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Customer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'headers'/'customer','default'=>'Customer','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            customer_group: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'headers'/'customer_group','default'=>'Customer group','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'headers'/'customer_group','default'=>'Customer group','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Customer group<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'headers'/'customer_group','default'=>'Customer group','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        success_msg: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'success_msg'/'title','default'=>'Merchant widget','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'success_msg'/'title','default'=>'Merchant widget','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Merchant widget<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'success_msg'/'title','default'=>'Merchant widget','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'success_msg'/'text','default'=>'Selected merchant was successfully unlocked','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'success_msg'/'text','default'=>'Selected merchant was successfully unlocked','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Selected merchant has been unlocked successfully.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'success_msg'/'text','default'=>'Selected merchant was successfully unlocked','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        failure_msg: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'success_msg'/'title','default'=>'Merchant widget','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'success_msg'/'title','default'=>'Merchant widget','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Merchant widget<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'success_msg'/'title','default'=>'Merchant widget','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            text: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'failure_msg'/'text','default'=>'Selected merchant couldn\'t be unlocked successfully.','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'failure_msg'/'text','default'=>'Selected merchant couldn\'t be unlocked successfully.','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Selected merchant could not be unlocked.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'failure_msg'/'text','default'=>'Selected merchant couldn\'t be unlocked successfully.','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
        },
        tooltips: {
            customer: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'tooltips'/'customer','default'=>'Open customer','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'tooltips'/'customer','default'=>'Open customer','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Open customer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'tooltips'/'customer','default'=>'Open customer','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            unlock: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'tooltips'/'allow','default'=>'Unlock merchant','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'tooltips'/'allow','default'=>'Unlock merchant','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Approve merchant<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'tooltips'/'allow','default'=>'Unlock merchant','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            decline: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'merchant'/'tooltips'/'decline','default'=>'Decline merchant','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'tooltips'/'decline','default'=>'Decline merchant','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Deny merchant<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'merchant'/'tooltips'/'decline','default'=>'Decline merchant','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
    },

    merchantStore: null,

    constructor: function() {
        var me = this;

        me.merchantStore = Ext.create('Ext.data.Store', {
            model: 'Shopware.apps.Index.model.Merchant',
            remoteFilter: true,
            clearOnLoad: false,
            autoLoad: true,

            proxy: {
                type: 'ajax',
                url: '<?php echo '/myShop/backend/widgets/getLastMerchant';?>',
                reader: {
                    type: 'json',
                    root: 'data'
                }
            }
        });

        me.callParent(arguments);
    },

    /**
     * Initializes the widget.
     *
     * @public
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.registerEvents();

        me.tools = [{
            type: 'refresh',
            scope: me,
            handler: me.refreshView
        }];

        me.items = [{
            xtype: 'grid',
            viewConfig: {
                hideLoadingMsg: true
            },
            border: 0,
            store: me.merchantStore,
            columns: me.createColumns()
        }];

        me.createTaskRunner();
        me.callParent(arguments);
    },

    /**
     * Register additional events for the widget.
     *
     * @public
     * @return void
     */
    registerEvents: function() {
        this.addEvents(
            'allowMerchant',
            'declineMerchant'
        );
    },

    /**
     * Registers a new task runner to refresh
     * the store after a given time interval.
     *
     * @public
     * @param [object] store - Ext.data.Store
     * @return void
     */
    createTaskRunner: function() {
        var me = this;

        me.storeRefreshTask = Ext.TaskManager.start({
            scope: me,
            run: me.refreshView,
            interval: 300000
        });
    },

    /**
     * Helper method which will be called by the
     * task runner and when the user clicks the
     * refresh icon in the panel header.
     *
     * @public
     * @return void
     */
    refreshView: function() {
        var me = this;

        if(!me.merchantStore) {
            return false;
        }
        me.merchantStore.load();
    },

    /**
     * Helper method which creates the columns for the
     * grid panel in this widget.
     *
     * @return [array] generated columns
     */
    createColumns: function() {
        var me = this;

        return [{
            dataIndex: 'date',
            header: me.snippets.headers.date,
            renderer: me.dateColumn,
            flex: 1
        }, {
            dataIndex: 'company_name',
            header: me.snippets.headers.company_name,
            flex: 1
        }, {
            dataIndex: 'customer',
            header: me.snippets.headers.customer,
            renderer: me.emailColumn,
            flex: 1
        }, {
            dataIndex: 'customergroup_name',
            header: me.snippets.headers.customer_group,
            flex: 1
        }, {
            xtype: 'actioncolumn',
            width: 80,
            items: [{
                iconCls:'sprite-user--arrow',
                tooltip: me.snippets.tooltips.customer,
                handler: function(view, rowIndex, colIndex, item, event, record) {

                    /** Open the customer */
                    Shopware.app.Application.addSubApplication({
                        name: 'Shopware.apps.Customer',
                        action: 'detail',
                        params: {
                            customerId: ~~(1 * record.get('id'))
                        }
                    });
                }
            },{
                iconCls: 'sprite-tick-circle',
                tooltip: me.snippets.tooltips.unlock,
                handler: function(view, rowIndex, colIndex, item, event, record) {
                    me.fireEvent('allowMerchant', record);
                }
            }, {
                iconCls: 'sprite-cross-circle',
                tooltip: me.snippets.tooltips.decline,
                handler: function(view, rowIndex, colIndex, item, event, record) {
                    me.fireEvent('declineMerchant', record);
                }
            }]
        }]
    },

    /**
     * Formats the email column
     *
     * @param [string] value
     * @return [string]
     */
    emailColumn: function(value, cellEl, record) {
        return Ext.String.format('<a href="mailto:{0}">{1}</a>', record.get('email'), value);
    },

    /**
     * Formats the date column
     *
     * @param [string] - The order time value
     * @return [string] - The passed value, formatted with Ext.util.Format.date()
     */
    dateColumn:function (value, metaData, record) {
        if ( value === Ext.undefined ) {
            return value;
        }

        return Ext.util.Format.date(value) + ' ' + Ext.util.Format.date(value, timeFormat);
    }
});
//
<?php }} ?>