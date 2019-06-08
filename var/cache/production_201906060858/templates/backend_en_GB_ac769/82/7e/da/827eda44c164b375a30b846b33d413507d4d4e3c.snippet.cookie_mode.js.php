<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/store/cookie_mode.js" */ ?>
<?php /*%%SmartyHeaderCode:12961708865cfad68715e1e1-63885185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '827eda44c164b375a30b846b33d413507d4d4e3c' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/store/cookie_mode.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12961708865cfad68715e1e1-63885185',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68716d4b4_96145215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68716d4b4_96145215')) {function content_5cfad68716d4b4_96145215($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */


Ext.define('Shopware.apps.Base.store.CookieMode', {
    extend: 'Ext.data.Store',
    model: 'Shopware.apps.Base.model.CookieMode',

    alternateClassName: 'Shopware.store.CookieMode',
    storeId: 'base.CookieMode',

    data: [
        {
            id: 0, // Shopware\Components\Privacy\CookieRemoveSubscriber::COOKIE_MODE_NOTICE
            name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'privacy/cookie_mode_option_0','namespace'=>'backend/base/store/cookie_mode')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'privacy/cookie_mode_option_0','namespace'=>'backend/base/store/cookie_mode'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Show hint only<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'privacy/cookie_mode_option_0','namespace'=>'backend/base/store/cookie_mode'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        {
            id: 1, // Shopware\Components\Privacy\CookieRemoveSubscriber::COOKIE_MODE_TECHNICAL
            name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'privacy/cookie_mode_option_1','namespace'=>'backend/base/store/cookie_mode')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'privacy/cookie_mode_option_1','namespace'=>'backend/base/store/cookie_mode'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Allow technically necessary cookies (browser session, CSRF), set other cookies after permission<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'privacy/cookie_mode_option_1','namespace'=>'backend/base/store/cookie_mode'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        {
            id: 2, // Shopware\Components\Privacy\CookieRemoveSubscriber::COOKIE_MODE_ALL
            name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'privacy/cookie_mode_option_2','namespace'=>'backend/base/store/cookie_mode')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'privacy/cookie_mode_option_2','namespace'=>'backend/base/store/cookie_mode'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Do not set any cookies until you have permission<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'privacy/cookie_mode_option_2','namespace'=>'backend/base/store/cookie_mode'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
    ]
});
<?php }} ?>