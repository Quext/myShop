<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.CustomerGrid.js" */ ?>
<?php /*%%SmartyHeaderCode:4917860405cfad687b21b94-03361405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9c5d37756b71b01283d234f805f833d57901f27' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.CustomerGrid.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4917860405cfad687b21b94-03361405',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad687b2a1e2_39144555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad687b2a1e2_39144555')) {function content_5cfad687b2a1e2_39144555($_smarty_tpl) {?>/**
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

Ext.define('Shopware.form.field.CustomerGrid', {
    extend: 'Shopware.form.field.Grid',
    alias: 'widget.shopware-form-field-customer-grid',
    mixins: ['Shopware.model.Helper'],

    createColumns: function() {
        var me = this;
        var activeColumn = { dataIndex: 'active', width: 30 };
        me.applyBooleanColumnConfig(activeColumn);

        return [
            me.createSortingColumn(),
            activeColumn,
            { dataIndex: 'number' },
            { dataIndex: 'email', flex: 1, renderer: me.mailRenderer },
            { dataIndex: 'firstname', flex: 1 },
            { dataIndex: 'lastname', flex: 1 },
            { dataIndex: 'customerGroup', flex: 1 },
            { dataIndex: 'company', flex: 1 },
            me.createActionColumn()
        ];
    },

    mailRenderer: function(value) {
        return Ext.String.format('<a href="mailto:[0]" data-qtip="[0]">[0]</a>', value)
    },

    createSearchField: function() {
        return Ext.create('Shopware.form.field.CustomerSingleSelection', this.getComboConfig());
    }
});<?php }} ?>