<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/component/Shopware.window.ExpiredPluginWarning.js" */ ?>
<?php /*%%SmartyHeaderCode:5555630945cfad687637357-02397688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4cb90d252e6c903987a7f24cce097cf2909f8a7' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/component/Shopware.window.ExpiredPluginWarning.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5555630945cfad687637357-02397688',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68766bac3_88696260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68766bac3_88696260')) {function content_5cfad68766bac3_88696260($_smarty_tpl) {?>/**
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
 * @version    $Id$
 * @author shopware AG
 */
//

Ext.define('Shopware.window.ExpiredPluginWarning', {
    extend: 'Enlight.app.Window',
    autoScroll: true,
    layout: 'fit',
    height: 430,
    width: 870,
    autoShow: true,
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'expired_plugins_popup/title','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_popup/title','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Plugin Warning<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_popup/title','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    footerButton: false,

    initComponent: function() {
        var me = this;

        me.items = [
            {
                xtype: 'form',
                items: [me.createContentPage()],
                dockedItems: [{
                    xtype: 'toolbar',
                    dock: 'bottom',
                    ui: 'shopware-ui',
                    cls: 'shopware-toolbar',
                    items: me.getWindowButtons()
                }]
            },
        ];

        me.callParent(arguments);
    },

    createContentPage: function () {
        return {
            xtype: 'container',
            html: '<style>.plugin-window { color: #475C6A; } .plugin-window h2 { color: #495B67;font-weight: bold;font-size: 24px;margin-bottom: 20px } .plugin-window p { margin-bottom: 20px;line-height: 140%;} .plugin-window img { width: calc(100% - 100px);padding: 50px;margin-top: 40px;position: absolute;top: 50%;left: 50%;transform: translateX(-50%); } .plugin-window .bar { width: 50%;float: left;position: relative; } .plugin-window .bar:last-child { margin-left: 50%; } .plugin-window strong { font-weight: bold; }</style><div class="plugin-window"><div class="bar"><img src="' + this.getImage() + '"></div><div class="bar"><div style="margin-top: 50px;margin-right: 30px;">' + this.getText() + '</div></div></div>'
        }
    },

    getImage: function() {
        return '/myShop/themes/Backend/ExtJs/backend/_resources/images/plugin_manager/warning.svg';
    },

    getText: function() {
        return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'expired_plugins_popup/content','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_popup/content','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<h2>Warning!</h2><p>At least one of your plugin licenses has expired. You can review this in your <a href="https://account.shopware.com/shops/shops" target="_blank">Shopware account</a> under <strong>“Licenses”</strong> after choosing your shop, where you can also immediately renew your license.</p><p>With any questions, you can contact us at <a href="mailto:sales@shopware.com">sales@shopware.com</a>. You can also reach us M-F by calling <a href="tel:+4402030952445">+44 (0) 203 095 2445</a> (UK 8am – 4pm GMT)<br> / <a href="tel:0080074676260">00 800 746 7626 0</a> (worldwide 9am – 5pm CET).</p><p>Your Shopware team</p><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_popup/content','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
    },

    getWindowButtons: function() {
        var me = this;

        return [
            '->',
            {
                xtype: 'button',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'expired_plugins_popup/cancel','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_popup/cancel','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Close<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_popup/cancel','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                scope: me,
                cls: 'secondary',
                handler: function () {
                    me.destroy();
                }
            },
            {
                xtype: 'button',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'expired_plugins_popup/goToPluginManager','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_popup/goToPluginManager','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Open plugin overview<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'expired_plugins_popup/goToPluginManager','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                scope: me,
                cls: 'primary',
                handler: function () {
                    Shopware.app.Application.addSubApplication({
                        name: 'Shopware.apps.PluginManager',
                        action: 'ExpiredPlugins'
                    });

                    me.destroy();
                }
            }
        ];
    }
});<?php }} ?>