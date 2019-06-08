<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.BlogGrid.js" */ ?>
<?php /*%%SmartyHeaderCode:19312081435cfad687a08977-35255320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '234bf395a63e3a65c6cea79ff8314f14fbee7e73' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.BlogGrid.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19312081435cfad687a08977-35255320',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad687a0e467_16550010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad687a0e467_16550010')) {function content_5cfad687a0e467_16550010($_smarty_tpl) {?>/**
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

Ext.define('Shopware.form.field.BlogGrid', {
    extend: 'Shopware.form.field.Grid',
    alias: 'widget.shopware-form-field-blog-grid',
    mixins: ['Shopware.model.Helper'],

    createColumns: function() {
        var me = this;

        var displayColumn = { dataIndex: 'displayDate', flex: 1 };
        me.applyDateColumnConfig(displayColumn);

        return [
            me.createSortingColumn(),
            { dataIndex: 'authorName' },
            { dataIndex: 'title', flex: 1 },
            displayColumn,
            me.createActionColumn()
        ];
    },

    createSearchField: function() {
        return Ext.create('Shopware.form.field.BlogSingleSelection', this.getComboConfig());
    }
});<?php }} ?>