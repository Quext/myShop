<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.ProductFeedFieldHandler.js" */ ?>
<?php /*%%SmartyHeaderCode:7994469565cfad687d467f0-86439085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52e6e8dc4216fd8c13d503babc98d74e4dc3636c' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.ProductFeedFieldHandler.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7994469565cfad687d467f0-86439085',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad687d49d18_38189863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad687d49d18_38189863')) {function content_5cfad687d49d18_38189863($_smarty_tpl) {?>/**
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
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

Ext.define('Shopware.attribute.ProductFeedFieldHandler', {
    extend: 'Shopware.attribute.AbstractEntityFieldHandler',
    entity: "Shopware\\Models\\ProductFeed\\ProductFeed",
    singleSelectionClass: 'Shopware.form.field.ProductFeedSingleSelection',
    multiSelectionClass: 'Shopware.form.field.ProductFeedGrid'
});<?php }} ?>