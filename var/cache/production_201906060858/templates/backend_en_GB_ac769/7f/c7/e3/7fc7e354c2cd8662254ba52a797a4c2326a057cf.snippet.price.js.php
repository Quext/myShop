<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:34
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article/model/price.js" */ ?>
<?php /*%%SmartyHeaderCode:13376593265cfad68abbb756-54416977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fc7e354c2cd8662254ba52a797a4c2326a057cf' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article/model/price.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13376593265cfad68abbb756-54416977',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68abc9161_99084841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68abc9161_99084841')) {function content_5cfad68abc9161_99084841($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage Batch
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article backend module.
 */
//
Ext.define('Shopware.apps.Article.model.Price', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'from', type: 'int' },
        { name: 'to', type: 'string' },
        { name: 'price', type: 'float' },
        { name: 'pseudoPrice', type: 'float' },
        { name: 'percent', type: 'float' },
        { name: 'cloned', type: 'boolean', defaultValue: false },
        { name: 'customerGroupKey', type: 'string' }
    ],
    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Base.model.CustomerGroup', name: 'getCustomerGroup', associationKey: 'customerGroup'}
    ]

});
//
<?php }} ?>