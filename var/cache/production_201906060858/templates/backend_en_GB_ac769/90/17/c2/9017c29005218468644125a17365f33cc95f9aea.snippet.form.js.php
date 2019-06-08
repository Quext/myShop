<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/store/form.js" */ ?>
<?php /*%%SmartyHeaderCode:4283531795cfad6870544a5-09476437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9017c29005218468644125a17365f33cc95f9aea' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/store/form.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4283531795cfad6870544a5-09476437',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad687066270_54825722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad687066270_54825722')) {function content_5cfad687066270_54825722($_smarty_tpl) {?>/**
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
 * @package    Shopware_Base
 * @subpackage Config
 * @version    $Id$
 * @author shopware AG
 */
//
Ext.define('Shopware.apps.Base.store.Form', {
    extend: 'Ext.data.Store',
    alternateClassName: 'Shopware.store.Form',
    storeId: 'base.Form',

    model:'Shopware.apps.Base.model.Form',
    proxy: {
        type: 'ajax',
        url: '<?php echo '/myShop/backend/config/getForm';?>',
        api: {
            create: '<?php echo '/myShop/backend/config/saveForm';?>',
            update: '<?php echo '/myShop/backend/config/saveForm';?>',
            destroy: '<?php echo '/myShop/backend/config/deleteForm';?>'
        },
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>