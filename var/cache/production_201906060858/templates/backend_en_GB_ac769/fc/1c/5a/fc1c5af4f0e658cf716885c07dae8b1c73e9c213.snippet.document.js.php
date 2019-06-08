<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:35
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/order/controller/document.js" */ ?>
<?php /*%%SmartyHeaderCode:7160959965cfad68b9f1fd9-99514508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc1c5af4f0e658cf716885c07dae8b1c73e9c213' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/order/controller/document.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7160959965cfad68b9f1fd9-99514508',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68ba1aae5_80855385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68ba1aae5_80855385')) {function content_5cfad68ba1aae5_80855385($_smarty_tpl) {?>/**
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
 * @subpackage Controller
 * @version    $Id$
 * @author shopware AG
 */

//
//
Ext.define('Shopware.apps.Order.controller.Document', {
    extend: 'Ext.app.Controller',

    /**
     * all references to get the elements by the applicable selector
     *
     * @type { Array }
     */
    refs: [
        { ref: 'listing', selector: 'order-list' },
        { ref: 'documentWindow', selector: 'order-detail-window' }
    ],

    /**
     * A template method that is called when your application boots.
     * It is called before the Application's launch function is executed
     * so gives a hook point to run any code before your Viewport is created.
     */
    init: function() {
        var me = this;

        me.control({
            'order-detail-window order-document-list': {
                'delete-document': me.onDeleteDocument,
                'open-mail': me.openMail
            }
        });

        me.callParent(arguments)
    },

    /**
     * Opens the window to send an email with a selected document to the customer.
     *
     * @param { Shopware.apps.Order.model.Receipt } record
     */
    openMail: function(record) {
        var me = this,
            order = me.getDocumentWindow().record,
            documentTypeStore = Ext.create('Shopware.apps.Order.store.DocType');

        // The window depends on a completely loaded documentTypeStore. So we load it here and open the window
        // after successful loading.
        documentTypeStore.load({
            scope: me,
            callback: function() {
                this.getView('mail.Window').create({
                    record: order,
                    order: order,
                    preSelectedAttachment: record,
                    documentTypeStore: documentTypeStore,
                    listStore: me.subApplication.getStore('Order')
                }).show();
            }
        });
    },

    /**
     * Calls a ajax request to delete a document.
     *
     * @param { Ext.grid.Panel } grid
     * @param { Ext.data.Model } record
     */
    onDeleteDocument: function(grid, record) {
        Ext.MessageBox.confirm(
            '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'delete'/'confirmation'/'title','default'=>'Delete order document','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'delete'/'confirmation'/'title','default'=>'Delete order document','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete order document<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'delete'/'confirmation'/'title','default'=>'Delete order document','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'delete'/'confirmation'/'message','default'=>'A deleted order document cannot be restored. Do you really want to delete the document?','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'delete'/'confirmation'/'message','default'=>'A deleted order document cannot be restored. Do you really want to delete the document?','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
A deleted order document cannot be restored. Do you really want to delete the document?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'delete'/'confirmation'/'message','default'=>'A deleted order document cannot be restored. Do you really want to delete the document?','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            function (clickedButton) {
                if (clickedButton === 'no' || clickedButton === 'cancel') {
                    return;
                }

                grid.getStore().remove(record);

                Ext.Ajax.request({
                    url: '<?php echo '/myShop/backend/order/deleteDocument';?>',
                    method: 'POST',
                    params: {
                        documentId: record.get('id')
                    },
                    success: function(response) {
                        response = Ext.JSON.decode(response.responseText);
                        if (!response.success) {
                            Shopware.Notification.createGrowlMessage(
                                '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'attachemnt'/'error','default'=>'Error','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'attachemnt'/'error','default'=>'Error','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'attachemnt'/'error','default'=>'Error','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                                response.errorMessage
                            );
                        }
                    },
                    failure: function(response) {
                        Shopware.Notification.createGrowlMessage(
                            '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'document'/'attachemnt'/'error','default'=>'Error','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'attachemnt'/'error','default'=>'Error','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'document'/'attachemnt'/'error','default'=>'Error','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            response.status + '<br />' + response.statusText
                        );
                    }
                });
            }
        );
    }
});
//
<?php }} ?>