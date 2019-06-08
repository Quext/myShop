<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:34
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/order/model/dispatch.js" */ ?>
<?php /*%%SmartyHeaderCode:18555226285cfad68aa92ed9-26778846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aceaa936b524b0df2dd3bf1a41d133d836cfabfa' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/order/model/dispatch.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18555226285cfad68aa92ed9-26778846',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68aa98306_54342774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68aa98306_54342774')) {function content_5cfad68aa98306_54342774($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Order list backend module.
 *
 * The dispatch model of the order model is an simple extension of the global standard dispatch model.
 * The difference to standard model is the definition of the proxy. The standard model
 * needs a proxy to load the model data for combo boxes or something else. The order
 * dispatch model is only used for the order-dispatch association.
 */
//
Ext.define('Shopware.apps.Order.model.Dispatch', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Shopware.apps.Base.model.Dispatch',

    /**
     * One or more BelongsTo associations for this model.
     * @string
     */
    belongsTo: 'Shopware.apps.Order.model.Order'
});
//

<?php }} ?>