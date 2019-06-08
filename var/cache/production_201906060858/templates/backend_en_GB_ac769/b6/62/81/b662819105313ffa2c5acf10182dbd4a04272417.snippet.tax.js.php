<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/store/tax.js" */ ?>
<?php /*%%SmartyHeaderCode:2401329595cfad68701f9a4-13848698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b662819105313ffa2c5acf10182dbd4a04272417' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/store/tax.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2401329595cfad68701f9a4-13848698',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad687026310_94666375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad687026310_94666375')) {function content_5cfad687026310_94666375($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Base.store.Tax', {
    extend : 'Ext.data.Store',

    alternateClassName: 'Shopware.store.Tax',
    storeId: 'base.Tax',
    model : 'Shopware.apps.Base.model.Tax',
    pageSize: 1000,
    remoteFilter: true,

    proxy:{
        type:'ajax',
        url:'<?php echo '/myShop/backend/base/getTaxes';?>',
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }
});
<?php }} ?>