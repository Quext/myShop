<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:30
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/model/shop.js" */ ?>
<?php /*%%SmartyHeaderCode:8622259085cfad686c4c9d2-90835604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ca1d95359f8e58c290127b7872f43280ed37741' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/model/shop.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8622259085cfad686c4c9d2-90835604',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad686c59968_82892092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad686c59968_82892092')) {function content_5cfad686c59968_82892092($_smarty_tpl) {?>/**
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
 * The shop model represents a data row of the s_core_shops or the
 * Shopware\Models\Shop\Shop doctrine model.
 */
//
Ext.define('Shopware.apps.Base.model.Shop', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.Shop',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Shopware.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name: 'id', type: 'int' },
        { name: 'default', type: 'boolean' },
        { name: 'localeId', type: 'int' },
        { name: 'categoryId', type: 'int' },
        { name: 'name', type: 'string' }
    ]
});
//
<?php }} ?>