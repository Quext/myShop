<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:30
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/model/variant.js" */ ?>
<?php /*%%SmartyHeaderCode:13885199275cfad686c9e0b1-18518006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f12bec5d5a00fdafdfc7f098c29c50c4373cfa5' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/model/variant.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13885199275cfad686c9e0b1-18518006',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad686ca9e65_47971199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad686ca9e65_47971199')) {function content_5cfad686ca9e65_47971199($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Global Stores and Models
 *
 * The article_with_variants model is based on the article model. This model is able to hold article variants.
 */
//
Ext.define('Shopware.apps.Base.model.Variant', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
        { name: 'id', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'articleId', type: 'int' },
        { name: 'additionalText', type: 'string' },
        { name: 'supplierName', type: 'string'},
        { name: 'supplierId', type: 'int' },
        { name: 'ordernumber', type: 'string' },
        { name: 'inStock', type: 'string' },
        { name: 'active', type: 'int' },


        //mapping fields for ExtJS
        { name: 'number', type: 'string', mapping: 'ordernumber' },
    ]
});
//

<?php }} ?>