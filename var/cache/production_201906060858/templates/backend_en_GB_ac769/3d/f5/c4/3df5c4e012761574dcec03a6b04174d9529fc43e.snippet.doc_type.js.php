<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:30
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/model/doc_type.js" */ ?>
<?php /*%%SmartyHeaderCode:18499338875cfad686de8221-91618457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3df5c4e012761574dcec03a6b04174d9529fc43e' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/model/doc_type.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18499338875cfad686de8221-91618457',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad686e0ef97_74838720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad686e0ef97_74838720')) {function content_5cfad686e0ef97_74838720($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Order list backend module.
 * The document type represents a row the s_core_documents table. It
 * contains all data about a supported document type.
 */
//
//
Ext.define('Shopware.apps.Base.model.DocType', {

    snippets: {
        //
        type1: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'invoice','default'=>'Invoice','namespace'=>'backend/static/doc_type')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'invoice','default'=>'Invoice','namespace'=>'backend/static/doc_type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Invoice<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'invoice','default'=>'Invoice','namespace'=>'backend/static/doc_type'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        type2: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'delivery_note','default'=>'Delivery note','namespace'=>'backend/static/doc_type')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delivery_note','default'=>'Delivery note','namespace'=>'backend/static/doc_type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delivery note<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delivery_note','default'=>'Delivery note','namespace'=>'backend/static/doc_type'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        type3: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'credit_note','default'=>'Credit note','namespace'=>'backend/static/doc_type')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'credit_note','default'=>'Credit note','namespace'=>'backend/static/doc_type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Credit note<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'credit_note','default'=>'Credit note','namespace'=>'backend/static/doc_type'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        type4: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'reversal_invoice','default'=>'Reversal invoice','namespace'=>'backend/static/doc_type')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'reversal_invoice','default'=>'Reversal invoice','namespace'=>'backend/static/doc_type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Reversal invoice<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'reversal_invoice','default'=>'Reversal invoice','namespace'=>'backend/static/doc_type'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',
    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name: 'id', type: 'int' },
        {
            name:'name',
            type: 'string',
            convert: function(value, record) {
                var snippet = value;
                var internalId = 'type' + record.get('id');

                if (record && record.snippets) {
                    snippet = record.snippets[internalId];
                }
                if (Ext.isString(snippet) && snippet.length > 0) {
                    return snippet;
                } else {
                    return value;
                }
            }
        },
        { name: 'key', type: 'string' },
        { name: 'template', type: 'string' },
        { name: 'numbers', type: 'string' },
        { name: 'left', type: 'int' },
        { name: 'right', type: 'int' },
        { name: 'top', type: 'int' },
        { name: 'bottom', type: 'int' },
        { name: 'pageBreak', type: 'int' }
    ]

});
//
<?php }} ?>