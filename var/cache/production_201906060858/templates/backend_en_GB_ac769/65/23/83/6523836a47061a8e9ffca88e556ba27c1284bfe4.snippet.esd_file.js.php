<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:34
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article/model/esd_file.js" */ ?>
<?php /*%%SmartyHeaderCode:4445737735cfad68ac647a3-14757225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6523836a47061a8e9ffca88e556ba27c1284bfe4' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article/model/esd_file.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4445737735cfad68ac647a3-14757225',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68ac72151_50980178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68ac72151_50980178')) {function content_5cfad68ac72151_50980178($_smarty_tpl) {?>/**
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
 * @subpackage Esd
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article backend module.
 */
//
Ext.define('Shopware.apps.Article.model.EsdFile', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used  for this model
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'filename' }
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
        api: {
            read: '<?php echo '/myShop/backend/Article/getEsdFiles';?>'
        },

        reader:{
            type:'json',
            root:'data',
            totalProperty:'total',
            messageProperty : 'message'
        }
    }

});
//
<?php }} ?>