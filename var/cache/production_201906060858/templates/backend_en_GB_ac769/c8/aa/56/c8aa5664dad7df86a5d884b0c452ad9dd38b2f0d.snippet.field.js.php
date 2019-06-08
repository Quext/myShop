<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:34
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article/model/field.js" */ ?>
<?php /*%%SmartyHeaderCode:13881588315cfad68ad7b528-21355647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8aa5664dad7df86a5d884b0c452ad9dd38b2f0d' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article/model/field.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13881588315cfad68ad7b528-21355647',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68ad88802_94789939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68ad88802_94789939')) {function content_5cfad68ad88802_94789939($_smarty_tpl) {?>/**
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
 * @subpackage Batch
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article models.
 */
//
Ext.define('Shopware.apps.Article.model.Field', {

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

   /**
    * The batch model is only a data container which contains all
    * data for the global stores in the model association data.
    * An Ext.data.Model needs one field.
    * @array
    */
    fields: [
       //
        { name: 'id', type: 'int' },
        { name: 'default',  type: 'string' },
        { name: 'type',  type: 'string' },
        { name: 'store',  type: 'string' },
        { name: 'label',  type: 'string' },
        { name: 'required',  type: 'boolean' },
        { name: 'name',  type: 'string' },
        { name: 'help',  type: 'string' },
        { name: 'translatable', type: 'boolean' }
    ]

});
//

<?php }} ?>