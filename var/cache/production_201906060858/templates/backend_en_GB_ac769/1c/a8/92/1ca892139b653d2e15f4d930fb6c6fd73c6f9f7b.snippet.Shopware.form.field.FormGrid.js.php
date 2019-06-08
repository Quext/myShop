<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.FormGrid.js" */ ?>
<?php /*%%SmartyHeaderCode:10027361065cfad687b0c066-76189014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ca892139b653d2e15f4d930fb6c6fd73c6f9f7b' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.FormGrid.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10027361065cfad687b0c066-76189014',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad687b11ce6_97489709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad687b11ce6_97489709')) {function content_5cfad687b11ce6_97489709($_smarty_tpl) {?>/**
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

Ext.define('Shopware.form.field.FormGrid', {
    extend: 'Shopware.form.field.Grid',
    alias: 'widget.shopware-form-field-form-grid',
    createColumns: function() {
        var me = this;

        return [
            me.createSortingColumn(),
            { dataIndex: 'emailSubject', flex: 1 },
            { dataIndex: 'name', flex: 1 },
            { dataIndex: 'email', flex: 1 },
            me.createActionColumn()
        ];
    },

    createSearchField: function() {
        return Ext.create('Shopware.form.field.FormSingleSelection', this.getComboConfig());
    }
});<?php }} ?>