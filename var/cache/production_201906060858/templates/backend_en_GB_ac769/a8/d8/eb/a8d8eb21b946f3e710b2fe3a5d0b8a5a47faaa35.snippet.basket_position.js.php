<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:55
         compiled from "/Applications/MAMP/htdocs/myShop/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/model/basket_position.js" */ ?>
<?php /*%%SmartyHeaderCode:1274588195cfad69f364424-51357497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8d8eb21b946f3e710b2fe3a5d0b8a5a47faaa35' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/model/basket_position.js',
      1 => 1559938521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1274588195cfad69f364424-51357497',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad69f36bdb4_71281162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad69f36bdb4_71281162')) {function content_5cfad69f36bdb4_71281162($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

//
Ext.define('Shopware.apps.PluginManager.model.BasketPosition', {
    extend: 'Ext.data.Model',

    fields: [
        { name: 'technicalName', type: 'string' },
        { name: 'priceType', type: 'string' },
        { name: 'price', type: 'float' }
    ],

    associations: [{
        type: 'hasMany',
        model: 'Shopware.apps.PluginManager.model.Plugin',
        name: 'getPlugin',
        associationKey: 'plugin'
    }]

});
//<?php }} ?>