<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:32
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/index/model/batch.js" */ ?>
<?php /*%%SmartyHeaderCode:4713215785cfad6888fe961-34775372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a952e7b561af8660939d59ddc3598c982ba639e' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/index/model/batch.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4713215785cfad6888fe961-34775372',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad688908675_02551248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad688908675_02551248')) {function content_5cfad688908675_02551248($_smarty_tpl) {?>/**
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
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Index.model.Batch', {
    extend: 'Ext.data.Model',
    fields: [
        //
        'id',
        'currentUsers'
    ],

    /**
     * Define the associations of the order model.
     * One order has a customer, many details, billing- & shipping address and a payment information.
     * @array
     */
    associations:[
        { type:'hasMany', model:'Shopware.apps.Index.model.Visitors', name:'getVisitors', associationKey:'visitors' },
        { type:'hasMany', model:'Shopware.apps.Index.model.Customers', name:'getCustomers', associationKey:'customers' }
    ]
});
//
<?php }} ?>