<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:55
         compiled from "/Applications/MAMP/htdocs/myShop/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/components/listing.js" */ ?>
<?php /*%%SmartyHeaderCode:4654205125cfad69f45ac65-19204878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0582b85e1260673d500dcc5474a5817de333bb5' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/components/listing.js',
      1 => 1559938521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4654205125cfad69f45ac65-19204878',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad69f46a076_43689314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad69f46a076_43689314')) {function content_5cfad69f46a076_43689314($_smarty_tpl) {?>/**
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
 * @subpackage Components
 * @version    $Id$
 * @author shopware AG
 */

//
Ext.define('Shopware.apps.PluginManager.view.components.Listing', {
    extend: 'Ext.container.Container',

    alternateClassName: 'PluginManager.components.Listing',

    alias: 'widget.plugin-manager-listing',

    cls: 'plugin-manager-listing',

    currentPage: 1,
    loadedPluginCount: 0,

    initComponent: function() {
        var me = this;

        me.listingContainer = Ext.create('Ext.container.Container', {
            items: [ ],
            cls: 'listing-container'
        });

        me.store.on('load', function(store, records) {
            me.loadedPluginCount = me.loadedPluginCount + me.store.pageSize;
            me.addItems(records);
        });

        me.loadingIndicator = Ext.create('Ext.Component', {
            width: 60,
            height: 60,
            cls: 'plugin-manager-loading-indicator-wrapper',
            html: '<div class="plugin-manager-loading-indicator"></div>'
        });

        me.loadingMask = Ext.create('Ext.container.Container', {
            items: [ me.loadingIndicator ],
            cls: 'listing-loading-mask',
            padding: 20,
            style: 'text-align: center; font-size: 20px;',
            hidden: true
        });

        me.items = [ me.listingContainer, me.loadingMask ];

        me.registerInfiniteScrolling();

        me.callParent(arguments);
    },

    registerInfiniteScrolling: function() {
        var me = this;

        if (!me.scrollContainer) {
            return;
        }
        me.scrollContainer.on('afterrender', function() {

            me.scrollContainer.el.on('scroll', function(event, el) {
                if (me.running) {
                    return;
                }

                //reload triggered
                if (me.loadedPluginCount <= 0) {
                    return;
                }

                //all plugins loaded?
                if (me.store.totalCount <= me.loadedPluginCount) {
                    return;
                }

                var scrollTop = el.scrollTop + el.offsetHeight;
                var height = me.listingContainer.getHeight();

                var itemHeight = 170;

                if ((height - scrollTop) <= itemHeight * 4) {
                    me.running = true;

                    me.currentPage++;
                    me.loadingMask.show();

                    me.store.loadPage(me.currentPage, {
                        callback: function() {
                            me.running = false;
                            me.loadingMask.hide();
                        }
                    });
                }
            });
        });
    },

    resetListing: function() {
        var me = this;

        me.running = false;
        me.listingContainer.removeAll();
        me.currentPage = 1;
        me.store.currentPage = 1;
        me.loadedPluginCount = 0;
    },

    addItems: function(records) {
        var me = this, plugins = [];

        Ext.each(records, function(record) {
            var item = Ext.create('PluginManager.components.StorePlugin', {
                record: record
            });

            plugins.push(item);
        });
        me.listingContainer.add(plugins);

    }
});
//<?php }} ?>