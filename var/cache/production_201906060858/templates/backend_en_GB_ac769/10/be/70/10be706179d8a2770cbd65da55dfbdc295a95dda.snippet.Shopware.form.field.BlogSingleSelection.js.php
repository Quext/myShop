<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.BlogSingleSelection.js" */ ?>
<?php /*%%SmartyHeaderCode:13062422635cfad687a466d1-48812930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10be706179d8a2770cbd65da55dfbdc295a95dda' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.BlogSingleSelection.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13062422635cfad687a466d1-48812930',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad687a4ddb4_32919316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad687a4ddb4_32919316')) {function content_5cfad687a4ddb4_32919316($_smarty_tpl) {?>/**
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

Ext.define('Shopware.form.field.BlogSingleSelection', {
    extend: 'Shopware.form.field.SingleSelection',
    alias: 'widget.shopware-form-field-blog-single-selection',

    getComboConfig: function() {
        var me = this;
        var config = me.callParent(arguments);

        config.tpl = Ext.create('Ext.XTemplate',
            '<tpl for=".">',
                '<tpl if="authorName">',
                    '<div class="x-boundlist-item"><i>{authorName}</i> - {title}</div>',
                '<tpl else>',
                    '<div class="x-boundlist-item">{title}</div>',
                '</tpl>',
            '</tpl>'
        );
        config.displayTpl = Ext.create('Ext.XTemplate',
            '<tpl for=".">',
                '<tpl if="authorName">',
                    '{authorName} - {title}',
                '<tpl else>',
                    '{title}',
                '</tpl>',
            '</tpl>'
        );
        return config;
    }
});<?php }} ?>