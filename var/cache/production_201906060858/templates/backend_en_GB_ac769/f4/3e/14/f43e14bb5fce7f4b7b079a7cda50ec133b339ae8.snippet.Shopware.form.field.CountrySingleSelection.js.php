<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.CountrySingleSelection.js" */ ?>
<?php /*%%SmartyHeaderCode:5402354055cfad687a53223-83898223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f43e14bb5fce7f4b7b079a7cda50ec133b339ae8' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.CountrySingleSelection.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5402354055cfad687a53223-83898223',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad687a5ae20_64523014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad687a5ae20_64523014')) {function content_5cfad687a5ae20_64523014($_smarty_tpl) {?>/**
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

//

// 
Ext.define('Shopware.form.field.CountrySingleSelection', {
    extend: 'Shopware.form.field.SingleSelection',
    alias: 'widget.shopware-form-field-country-single-selection',

    getComboConfig: function() {
        var me = this;
        var config = me.callParent(arguments);

        config.store.remoteSort = true;
        config.store.sort([
            {
                property: 'active',
                direction: 'DESC'
            },
            {
                property: 'name',
                direction: 'ASC'
            }
        ]);

        return config;
    }
});
// <?php }} ?>