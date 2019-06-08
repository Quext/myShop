<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/model/dynamic_reader.js" */ ?>
<?php /*%%SmartyHeaderCode:19981746625cfad6878db557-23210004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1234faaa8a877839d9260b373292bf87db8a7b1' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/model/dynamic_reader.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19981746625cfad6878db557-23210004',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad6878e09b3_74847172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad6878e09b3_74847172')) {function content_5cfad6878e09b3_74847172($_smarty_tpl) {?>/**
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

Ext.define('Shopware.model.DynamicReader', {
    extend: 'Ext.data.reader.Json',
    root: 'data',
    type: 'json',

    readRecords: function(data) {
        if (!data) {
            return this.callParent(arguments);
        }
        if (!data.data) {
            return this.callParent(arguments);
        }
        if (!data.data[0]) {
            return this.callParent(arguments);
        }
        this.model.setFields(Object.keys(data.data[0]));
        return this.callParent(arguments);
    }
});<?php }} ?>