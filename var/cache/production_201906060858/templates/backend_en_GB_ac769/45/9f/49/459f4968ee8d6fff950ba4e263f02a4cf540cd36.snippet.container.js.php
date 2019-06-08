<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:55
         compiled from "/Applications/MAMP/htdocs/myShop/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/components/container.js" */ ?>
<?php /*%%SmartyHeaderCode:18852563155cfad69f41bb05-00457941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '459f4968ee8d6fff950ba4e263f02a4cf540cd36' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/components/container.js',
      1 => 1559938521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18852563155cfad69f41bb05-00457941',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad69f4241c3_80574880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad69f4241c3_80574880')) {function content_5cfad69f4241c3_80574880($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.PluginManager.view.components.Container', {
    extend: 'Ext.container.Container',
    alternateClassName: 'PluginManager.container.Container',
    alias: 'widget.plugin-manager-container-container',

    handler: null,

    initComponent: function() {
        var me = this;

        me.on('afterrender', function(comp) {

            comp.el.on('click', function() {
                if (me.disabled) {
                    return;
                }

                if (Ext.isFunction(me.handler)) {
                    me.handler();
                } else {
                    me.fireEvent('click', me);
                }
            });

        });
        me.callParent(arguments);
    }
});
//<?php }} ?>