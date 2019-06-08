<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:35
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/product_stream/store/preview.js" */ ?>
<?php /*%%SmartyHeaderCode:13822233575cfad68b183b67-86878291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b32600e1b83e3c6a1bba20f0658dfa2da487a2fe' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/product_stream/store/preview.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13822233575cfad68b183b67-86878291',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68b18ea65_32873581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68b18ea65_32873581')) {function content_5cfad68b18ea65_32873581($_smarty_tpl) {?>/**
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
 * @package    ProductStream
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */
//
Ext.define('Shopware.apps.ProductStream.store.Preview', {
    extend: 'Ext.data.Store',
    model: 'Shopware.apps.ProductStream.model.Product',
    proxy: {
        type: 'ajax',
        api: {
            read: '<?php echo '/myShop/backend/ProductStream/loadPreview';?>'
        },
        reader: {
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    }
});
//<?php }} ?>