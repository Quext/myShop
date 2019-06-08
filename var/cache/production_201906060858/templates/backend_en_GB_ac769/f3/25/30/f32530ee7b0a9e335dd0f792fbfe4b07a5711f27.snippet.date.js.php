<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/component/element/date.js" */ ?>
<?php /*%%SmartyHeaderCode:9734488075cfad68776fdf8-78634090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f32530ee7b0a9e335dd0f792fbfe4b07a5711f27' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/component/element/date.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9734488075cfad68776fdf8-78634090',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad687775970_22398489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad687775970_22398489')) {function content_5cfad687775970_22398489($_smarty_tpl) {?>/*
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
 * @subpackage Component
 * @version    $Id$
 * @author shopware AG
 */
Ext.define('Shopware.apps.Base.view.element.Date', {
    extend: 'Ext.form.field.Date',
    alias: [
        'widget.base-element-date',
        'widget.base-element-datefield'
    ],

    setValue: function(value) {
        this.callParent([this.formatValue(value)]);
    },

    formatValue: function(value) {
        if(!value) {
            return null;
        } else if (typeof value === 'string') {
            return (value === "0000-00-00") ? null : new Date(value);
        } else {
            return value;
        }
    }
});
<?php }} ?>