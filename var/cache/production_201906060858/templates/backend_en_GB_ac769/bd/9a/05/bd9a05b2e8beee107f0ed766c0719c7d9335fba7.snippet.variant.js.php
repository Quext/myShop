<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:30
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/store/variant.js" */ ?>
<?php /*%%SmartyHeaderCode:16396024255cfad686f26293-96974224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd9a05b2e8beee107f0ed766c0719c7d9335fba7' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/store/variant.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16396024255cfad686f26293-96974224',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad686f2cd07_72723289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad686f2cd07_72723289')) {function content_5cfad686f2cd07_72723289($_smarty_tpl) {?>/**
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
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Global Stores and Models
 *
 * The article store contains all defined shop articles.
 */
Ext.define('Shopware.apps.Base.store.Variant', {
    /**
     * Define that this component is an extension of the Ext.data.Store
     */
    extend: 'Ext.data.Store',

   /**
    * Define the used model for this store
    * @string
    */
    model : 'Shopware.apps.Base.model.Variant',

    /**
     * Define how much rows loaded with one request
     */
    pageSize: 10,

    /**
     * Auto load the store after the component
     * is initialized
     * @boolean
     */
    autoLoad: false,

    /**
     * Enable remote sorting
     */
    remoteSort: true,

    /**
     * Enable remote filtering
     */
    remoteFilter: true,

    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        url:'<?php echo '/myShop/backend/base/getVariants';?>',

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


<?php }} ?>