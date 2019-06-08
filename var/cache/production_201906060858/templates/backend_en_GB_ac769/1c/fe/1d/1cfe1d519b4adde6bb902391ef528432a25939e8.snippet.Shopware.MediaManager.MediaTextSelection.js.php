<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/component/Shopware.MediaManager.MediaTextSelection.js" */ ?>
<?php /*%%SmartyHeaderCode:7214870465cfad6871a65b9-14285571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cfe1d519b4adde6bb902391ef528432a25939e8' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/component/Shopware.MediaManager.MediaTextSelection.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7214870465cfad6871a65b9-14285571',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad6871a9541_73635379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad6871a9541_73635379')) {function content_5cfad6871a9541_73635379($_smarty_tpl) {?>/**
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

/**
 * Shopware UI - Media Manager - Media Selection
 *
 * This components provides an easy to use way to select
 * media in the media manager selection and passes the
 * selected media to the module which includes this component.
 *
 * Alternate class names for this class are:
 * - Shopware.form.field.MediaTextSelection
 * - Shopware.MediaTextSelection
 *
 * @example Ext.create('Shopware.MediaManager.MediaSelection');
 */
Ext.define('Shopware.MediaManager.MediaTextSelection',
/** @lends Shopware.MediaManager.MediaSelection */
{
    extend: 'Shopware.MediaManager.MediaSelection',
    alternateClassName: [ 'Shopware.form.field.MediaTextSelection', 'Shopware.MediaTextSelection' ],
    alias: [ 'widget.mediatextfield', 'widget.mediatextselectionfield' ],

    /**
     * Unlike with the normal Media selection field, the readOnly config defaults to false in Media text selection field.
     * @boolean
     */
    readOnly: false,

    /**
     * True to allow selection of more than one item at a time, false to allow selection of only a single item at a time or no selection at all
     * @boolean
     */
    multiSelect: false
});
<?php }} ?>