<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:34
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article_list/store/filter.js" */ ?>
<?php /*%%SmartyHeaderCode:4400467725cfad68ad23a52-60957238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d6f71ea330069861f912e168e7ab77c36a3bbe6' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article_list/store/filter.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4400467725cfad68ad23a52-60957238',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68ad2b518_66928441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68ad2b518_66928441')) {function content_5cfad68ad2b518_66928441($_smarty_tpl) {?>/**
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
 */

/**
 * Shopware Store - Filter store
 *
 * Holds all filters being shown in the left navigation
 */
Ext.define('Shopware.apps.ArticleList.store.Filter', {

    /**
     * Define that this component is an extension of the Ext.data.Store
     */
    extend: 'Ext.data.Store',

    /**
     * Define unique store id to create the store by the store manager
     */
    storeId: 'multiEdit.Filter',

    /**
     * Define how much rows loaded with one request
     */
    pageSize: 100,

   /**
    * Auto load the store after the component
    * is initialized
    * @boolean
    */
    autoLoad: false,

    /**
     * Do not remote sort the store
     */
    remoteSort: false,

    /**
     * Also disable remote filtering
     */
    remoteFilter: false,

    groupField: 'groupName',

   /**
    * Define the used model for this store
    * @string
    */
    model : 'Shopware.apps.ArticleList.model.Filter',

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
        url:'<?php echo '/myShop/backend/ArticleList/getFilter';?>',

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