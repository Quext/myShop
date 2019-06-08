<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:34
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article_list/view/batch_process/window.js" */ ?>
<?php /*%%SmartyHeaderCode:16098940685cfad68ac5a771-23471673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b93faee2c2fcc137d9fa28011a8d3e3d0b53ff71' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article_list/view/batch_process/window.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16098940685cfad68ac5a771-23471673',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68ac75168_47850107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68ac75168_47850107')) {function content_5cfad68ac75168_47850107($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.ArticleList.view.BatchProcess.Window', {
    /**
     * Define that the plugin manager main window is an extension of the enlight application window
     *
     * @string
     */
    extend: 'Enlight.app.Window',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     *
     * @string
     */
    alias: 'widget.multi-edit-batch-process-window',

    /**
     * Set no border for the window
     *
     * @boolean
     */
    border: false,

    /**
     * Define window width
     *
     * @integer
     */
    width: 600,

    /**
     * Define window height
     *
     * @integer
     */
    height: 400,

    /**
     * True to display the 'maximize' tool button and allow the user to maximize the window, false to hide the button and disallow maximizing the window.
     *
     * @boolean
     */
    maximizable: true,

    /**
     * True to display the 'minimize' tool button and allow the user to minimize the window, false to hide the button and disallow minimizing the window.
     *
     * @boolean
     */
    minimizable: true,

    /**
     * A flag which causes the object to attempt to restore the state of internal properties from a saved state on startup.
     *
     * @boolean
     */
    stateful: true,

    /**
     * The unique id for this object to use for state management purposes.
     *
     * @string
     */
    stateId: 'shopware-multiedit-batch-process-window',

    /**
     * Title of the window.
     *
     * @string
     */
    titleTemplate: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'batchProcess'/'windowTitle','default'=>'Batch Process','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batchProcess'/'windowTitle','default'=>'Batch Process','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Batch Process<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batchProcess'/'windowTitle','default'=>'Batch Process','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    /**
     * @boolean
     */
    resizable: true,

    /**
     * Set the windows layout to "fit"
     *
     * @string
     */
    layout: 'fit',

    /**
     * Initializes the component.
     *
     * @public
     * @return void
     */
    initComponent: function () {
        var me = this;

        me.title = me.titleTemplate;

        me.dockedItems = [{
            xtype: 'toolbar',
            dock: 'bottom',
            ui: 'shopware-ui',
            cls: 'shopware-toolbar',
            items: me.getFormButtons()
        }];

        me.items = [{
            xtype: 'multi-edit-batch-process-grid',
            editableColumnsStore: me.editableColumnsStore

        }];

        me.addEvents('runBatch');

        me.callParent(arguments);
    },


    /**
     * Creates the save and cancel button for the form panel.
     *
     * @return [array] - Contains the cancel button and the save button
     */
    getFormButtons: function() {
        var me = this,
            buttons = [ '->' ];

        var cancelButton = Ext.create('Ext.button.Button', {
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'close','default'=>'Close','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'close','default'=>'Close','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Close<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'close','default'=>'Close','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            scope: me,
            cls: 'secondary',
            handler:function () {
                me.destroy();
            }
        });
        buttons.push(cancelButton);

        var addToQueue = Ext.create('Ext.button.Button', {
            action: 'addToQueue',
            cls: 'secondary',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'batchProcess'/'addToQueue','default'=>'Add to queue','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batchProcess'/'addToQueue','default'=>'Add to queue','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add to queue<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batchProcess'/'addToQueue','default'=>'Add to queue','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });

        var addToQueueAndRun = Ext.create('Ext.button.Button', {
            action: 'addToQueueAndRun',
            cls: 'primary',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'batchProcess'/'addToQueueAndRun','default'=>'Add to queue and run','namespace'=>'backend/article_list/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batchProcess'/'addToQueueAndRun','default'=>'Add to queue and run','namespace'=>'backend/article_list/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add to queue and run<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batchProcess'/'addToQueueAndRun','default'=>'Add to queue and run','namespace'=>'backend/article_list/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });
        buttons.push(addToQueueAndRun);

        return buttons;
    }
});
//
<?php }} ?>