<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:33
         compiled from "/Applications/MAMP/htdocs/myShop/engine/Shopware/Plugins/Default/Backend/SwagUpdate/Views/backend/index/view/swag_update_menu.js" */ ?>
<?php /*%%SmartyHeaderCode:2727036535cfad689186346-14112675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6df02c4e72bf9abbe75907557e4c11d54af6a21' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/engine/Shopware/Plugins/Default/Backend/SwagUpdate/Views/backend/index/view/swag_update_menu.js',
      1 => 1559938521,
      2 => 'file',
    ),
    '7f2f18580f3cb21307a59d5b17c63382f95c9818' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/custom/plugins/SwagPaymentPayPalUnified/Resources/views/backend/paypal_unified/menu_icon.tpl',
      1 => 1559942657,
      2 => 'file',
    ),
    '268c94276ba316537f300052d3118ec436cf212a' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/index/view/widgets/base.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2727036535cfad689186346-14112675',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad6891a2b83_04063849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad6891a2b83_04063849')) {function content_5cfad6891a2b83_04063849($_smarty_tpl) {?>/**
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

/**
 * Base for Shopware Widgets
 *
 * This file contains a basic class for all widgets in the backend. Please
 * note that this class is just a base file and does only contain base logic that applies to all widgets.
 */
Ext.define('Shopware.apps.Index.view.widgets.Base', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.widget-base',
    layout: 'fit',
    anchor: '100%',
    minHeight: 200,
    cls: Ext.baseCSSPrefix + 'widget-component',
    bodyPadding: '16 28',
    frame: true,
    closable: false,
    collapsible: false,

    initComponent: function() {
        var me = this,
            tools = me.tools || [],
            defaults = [{
                type: 'close',
                margin: '0 8',
                scope: me,
                handler: function() {
                    me.fireEvent('closeWidget', me);
                }
            }];

        me.tools = Ext.Array.merge(tools, defaults);

        me.callParent();
    }
});

Ext.define('Ext.chart.theme.Widget', {
    extend: 'Ext.chart.theme.Base',

    constructor: function (config) {
        this.callParent([Ext.apply({
            axis: {
                stroke: '#536773',
                'stroke-width': 1
            },
            series: {
                'stroke-width': 0
            },
            marker: {
                stroke: '#2EDC79',
                radius: 3,
                size: 3
            },
            colors: [ '#2EDC79', '#13C6A2' ],
            seriesThemes: [{
                fill: '#2EDC79'
            }, {
                fill: '#13C6A2'
            },{
                fill: '#2EDC79'
            }, {
                fill: '#13C6A2'
            }],
            markerThemes: [{
                fill: '#2EDC79',
                type: 'circle'
            }, {
                fill: '#2EDC79',
                type: 'cross'
            }, {
                fill: '#2EDC79',
                type: 'plus'
            }, {
                fill: '#13C6A2',
                type: 'circle'
            }, {
                fill: '#13C6A2',
                type: 'cross'
            }]
        }, config)]);
    }
});

<?php }} ?>