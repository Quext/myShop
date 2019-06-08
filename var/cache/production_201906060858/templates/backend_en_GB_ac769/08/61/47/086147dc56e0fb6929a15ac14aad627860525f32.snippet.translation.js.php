<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:30
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/store/translation.js" */ ?>
<?php /*%%SmartyHeaderCode:5938545065cfad686ef1df2-10900799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '086147dc56e0fb6929a15ac14aad627860525f32' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/store/translation.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5938545065cfad686ef1df2-10900799',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad686ef9042_64510293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad686ef9042_64510293')) {function content_5cfad686ef9042_64510293($_smarty_tpl) {?>/**
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
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Global Stores and Models
 *
 * todo@all: Documentation
 */
Ext.define('Shopware.apps.Base.store.Translation', {
    extend: 'Ext.data.Store',

    alternateClassName: 'Shopware.store.Translation',
    storeId: 'base.Translation',
    model : 'Shopware.apps.Base.model.Shop',
    pageSize: 1000,

    remoteSort: true,
    remoteFilter: true,

    proxy:{
        type:'ajax',
        url: '<?php echo '/myShop/backend/base/getShops';?>',
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    },

    filters: [{
        property: 'default',
        value: false
    }]
}).create();

<?php }} ?>