<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:36
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article/store/category_path.js" */ ?>
<?php /*%%SmartyHeaderCode:4288794095cfad68c20e516-66581078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88ae853c949c193098124c3063deaa5c41e991b4' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article/store/category_path.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4288794095cfad68c20e516-66581078',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68c219771_96413735',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68c219771_96413735')) {function content_5cfad68c219771_96413735($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage CategoryPath
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Article Module
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Article.store.CategoryPath', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend:'Ext.data.Store',

    /**
     * Fields of the store records
     * @array
     */
    fields: [ 'id', 'name' ],
    /**
     * Disable auto loading for this store
     * @boolean
     */
    autoLoad: false,

    pageSize: 15,
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
        url: '<?php echo '/myShop/backend/category/getPathByQuery';?>',

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