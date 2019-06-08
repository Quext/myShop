<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:32
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/index/view/widgets/notice.js" */ ?>
<?php /*%%SmartyHeaderCode:15933882475cfad688bc8c38-83632021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5042b8e24247f455791fb9bc3e8d5c8cbddf64e6' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/index/view/widgets/notice.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15933882475cfad688bc8c38-83632021',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad688bff1b6_55776692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad688bff1b6_55776692')) {function content_5cfad688bff1b6_55776692($_smarty_tpl) {?>/**
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
 * Shopware UI - Upload Widget
 *
 * This file holds off the upload widget.
 *
 * @link http://www.shopware.de/
 * @license http://www.shopware.de/license
 * @package index
 * @subpackage views/widgets/Upload
 */
//
Ext.define('Shopware.apps.Index.view.widgets.Notice', {
    extend: 'Shopware.apps.Index.view.widgets.Base',
    alias: 'widget.swag-notice-widget',

    resizable: {
        handles: 's'
    },

    /**
     * Snippets for the widget.
     * @object
     */
    snippets: {
        buttons: {
            reset: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'notice'/'buttons'/'reset','default'=>'Reset','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'notice'/'buttons'/'reset','default'=>'Reset','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Reset<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'notice'/'buttons'/'reset','default'=>'Reset','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            submit: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'notice'/'buttons'/'submit','default'=>'Submit','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'notice'/'buttons'/'submit','default'=>'Submit','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Submit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'notice'/'buttons'/'submit','default'=>'Submit','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        success_msg: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'notice'/'success_msg'/'title','default'=>'Notice widget','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'notice'/'success_msg'/'title','default'=>'Notice widget','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Notice widget<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'notice'/'success_msg'/'title','default'=>'Notice widget','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'notice'/'success_msg'/'text','default'=>'Your notice was successfully saved.','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'notice'/'success_msg'/'text','default'=>'Your notice was successfully saved.','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your notice has been saved successfully.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'notice'/'success_msg'/'text','default'=>'Your notice was successfully saved.','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        failure_msg: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'notice'/'success_msg'/'title','default'=>'Notice widget','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'notice'/'success_msg'/'title','default'=>'Notice widget','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Notice widget<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'notice'/'success_msg'/'title','default'=>'Notice widget','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            text: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'notice'/'failure_msg'/'text','default'=>'Your notice couldn\'t be saved successfully.','namespace'=>'backend/index/view/widgets')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'notice'/'failure_msg'/'text','default'=>'Your notice couldn\'t be saved successfully.','namespace'=>'backend/index/view/widgets'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your notice could not be saved.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'notice'/'failure_msg'/'text','default'=>'Your notice couldn\'t be saved successfully.','namespace'=>'backend/index/view/widgets'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
        }
    },

    /**
     * Initializes the widget.
     *
     * @public
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.items = [ me.createFormPanel() ];
        me.dockedItems = [ me.createActionToolbar() ];

        me.callParent(arguments);
        me.getNotice();
    },

    /**
     * Creates the form panel for this widget.
     *
     * @public
     * @return [object] Ext.form.Panel
     */
    createFormPanel: function() {
        var me = this;

        me.textArea = Ext.create('Ext.form.field.TextArea', {
            name: 'notice',
            flex: 1
        });

        return me.formPanel = Ext.create('Ext.form.Panel', {
            unstyled: true,
            margin: '10 0 0',
            url: '<?php echo '/myShop/backend/widgets/saveNotice';?>',
            layout: {
                type: 'vbox',
                align : 'stretch',
                pack  : 'start'
            },
            items: [ me.textArea ]
        });
    },

    /**
     * Creates the action toolbar for the widget.
     * @return [object] Ext.toolbar.Toolbar
     */
    createActionToolbar: function() {
        var me = this;

        me.resetBtn = Ext.create('Ext.button.Button', {
            cls: 'small secondary',
            text: me.snippets.buttons.reset,
            handler: function() {
                me.textArea.reset();
            }
        });

        me.submitBtn = Ext.create('Ext.button.Button', {
            cls: 'small primary',
            text: me.snippets.buttons.submit,
            handler: function() {
                me.submitFormPanel();
            }
        });

        return Ext.create('Ext.toolbar.Toolbar', {
            dock: 'bottom',
            cls: 'shopware-toolbar',
            items: [ '->', me.resetBtn, me.submitBtn ]
        })
    },

    /**
     * Submits the form panel to the serverside using
     * an AJAX request
     * @return [false|null]
     */
    submitFormPanel: function() {
        var me = this,
            form = me.formPanel.getForm(),
            field = me.textArea;

        if(!form.isValid()) {
            return false;
        }

        form.submit({
            success: function() {
                Shopware.Msg.createGrowlMessage(me.snippets.success_msg.title, me.snippets.success_msg.text);
            },
            failure: function() {
                Shopware.Msg.createGrowlMessage(me.snippets.failure_msg.title, me.snippets.failure_msg.text);
            }
        })
    },

    /**
     * Gets the last saved notice from the server side
     * using an AJAX request and sets it into
     * the textarea.
     *
     * @public
     * @return void
     */
    getNotice: function() {
        var me = this;

        Ext.Ajax.request({
            url: '<?php echo '/myShop/backend/widgets/getNotice';?>',
            method: 'POST',
            success: function(response) {
                var response = Ext.decode(response.responseText);

                if(!response.success) {
                    return;
                }
                if(!response.notice || response.notice == 'false') {
                    return;
                }
                me.textArea.setValue(response.notice);
            }
        })
    }
});
//
<?php }} ?>