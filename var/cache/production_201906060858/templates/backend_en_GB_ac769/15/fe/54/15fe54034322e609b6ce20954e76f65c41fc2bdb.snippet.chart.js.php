<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:34
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/customer/model/chart.js" */ ?>
<?php /*%%SmartyHeaderCode:17553866245cfad68a8230d7-66960255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15fe54034322e609b6ce20954e76f65c41fc2bdb' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/customer/model/chart.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17553866245cfad68a8230d7-66960255',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68a830195_51087413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68a830195_51087413')) {function content_5cfad68a830195_51087413($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

// 

/**
 * Shopware Model - Customer list backend module.
 *
 * The chart model used for the order chart which displayed on top of the
 * order tab within the customer detail page.
 */
// 
Ext.define('Shopware.apps.Customer.model.Chart', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
        // 
        { name: 'amount', type: 'float' },
        { name: 'date', type: 'date', dateFormat: 'Y-m-d' }
    ],

    /**
     * Configure the data communication
     * @object
     */
    proxy: {
        /**
         * Set proxy type to ajax
         * @string
         */
        type: 'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        api: {
            read: '<?php echo '/myShop/backend/customer/getOrderChart';?>'
        },

        /**
         * Configure the data reader
         * @object
         */
        reader: {
            type: 'json',
            root: 'data'
        }
    }

});
// 
<?php }} ?>