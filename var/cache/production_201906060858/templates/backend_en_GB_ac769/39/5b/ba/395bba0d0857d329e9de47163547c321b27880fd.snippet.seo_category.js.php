<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:34
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article/model/seo_category.js" */ ?>
<?php /*%%SmartyHeaderCode:5456249475cfad68ab2e5f7-92580395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '395bba0d0857d329e9de47163547c321b27880fd' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article/model/seo_category.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5456249475cfad68ab2e5f7-92580395',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68ab38338_61522807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68ab38338_61522807')) {function content_5cfad68ab38338_61522807($_smarty_tpl) {?>
/**
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
 * Shopware Model - Article models.
 * The attribute model contains the data for the dynamic article attributes.
 */
//
Ext.define('Shopware.apps.Article.model.SeoCategory', {

    extend: 'Ext.data.Model',

    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'shopId', type: 'int' },
        { name: 'categoryId', type: 'int' }
    ]

});
//
<?php }} ?>