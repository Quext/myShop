<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:34
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/order/model/configuration.js" */ ?>
<?php /*%%SmartyHeaderCode:9833338135cfad68a9cc796-51244666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3451c1c50c3eca02e0a189b744197a014402a0c5' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/order/model/configuration.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9833338135cfad68a9cc796-51244666',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68a9e2107_66218863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68a9e2107_66218863')) {function content_5cfad68a9e2107_66218863($_smarty_tpl) {?>/**
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
 * The document model contains the configuration for the document creation. It
 * will be used in the order detail page document tab and in the detail controller.
 */
//
Ext.define('Shopware.apps.Order.model.Configuration', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name: 'orderId', type:'int' },

        // todo dateFields needs type 'date', but if used the dates in the created documents are formatted improperly
        { name: 'deliveryDate' },
        { name: 'displayDate' },
        { name: 'vatId', type:'string' },
        { name: 'invoiceNumber', type:'string' },
        { name: 'documentType', type:'int' },
        { name: 'docComment', type:'string' },
        { name: 'voucher', type:'int', useNull: true },
        { name: 'taxFree', type:'int' }
    ],
    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        /**
         * Set proxy type to ajax
         * @string
         */
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */

        api:{
            create:'<?php echo '/myShop/backend/Order/createDocument/targetField/documents';?>'
        },

        /**
         * Configure the data reader
         * @object
         */
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }


});
//
<?php }} ?>