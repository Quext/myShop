<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:55
         compiled from "/Applications/MAMP/htdocs/myShop/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/loading/mask.js" */ ?>
<?php /*%%SmartyHeaderCode:21324289915cfad69f944e06-19223058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c14af7641e3e46311f5c6f219bc19eaa92017589' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/loading/mask.js',
      1 => 1559938521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21324289915cfad69f944e06-19223058',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad69f954159_56069703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad69f954159_56069703')) {function content_5cfad69f954159_56069703($_smarty_tpl) {?>/**
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
 * @package    PluginManager
 * @subpackage Loading
 * @version    $Id$
 * @author shopware AG
 */
//

//
Ext.define('Shopware.apps.PluginManager.view.loading.Mask', {
    extend: 'Ext.window.Window',

    modal: true,
    cls: 'plugin-manager-loading-mask',

    layout: {
        type: 'hbox',
        align: 'stretch'
    },
    bodyPadding: 20,
    header: false,
    width: 550,

    initComponent: function() {
        var me = this;

        me.items = [
            me.createIcon(),
            {
                xtype: 'container',
                flex: 1,
                layout: {
                    type: 'vbox',
                    align: 'stretch'
                },
                padding: '0 20',
                items: [
                    me.createHeadline(),
                    me.createDescription(),
                    me.createLoadingIndicator()
                ]
            }
        ];

        me.callParent(arguments);
    },

    createIcon: function() {
        var me = this, path = '';

        if (!me.plugin.get('iconPath')) {
            path = '/myShop/themes/Backend/ExtJs/backend/_resources/resources/themes/images/shopware-ui/plugin_manager/default_icon.png';
        } else {
            path = me.plugin.get('iconPath');
        }

        return Ext.create('Ext.Component', {
            width: 128,
            height: 128,
            html: '<img src="'+ path +'" />'
        });
    },

    createHeadline: function() {
        var me = this;

        return Ext.create('Ext.Component', {
            cls: 'headline',
            html: me.plugin.get('label')
        });
    },

    createDescription: function() {
        var me = this;

        return Ext.create('Ext.Component', {
            flex: 1,
            html: me.description
        });
    },

    createLoadingIndicator: function() {
        var me = this;

        me.loadingIndicator = Ext.create('Ext.Component', {
            width: 60,
            height: 60,
            cls: 'plugin-manager-loading-indicator-wrapper',
            html: '<div class="plugin-manager-loading-indicator"></div>'
        });

        return me.loadingIndicator;
    }
});
//<?php }} ?>