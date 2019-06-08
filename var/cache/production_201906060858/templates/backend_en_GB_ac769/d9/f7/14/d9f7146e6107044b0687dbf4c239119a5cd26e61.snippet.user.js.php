<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:30
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/model/user.js" */ ?>
<?php /*%%SmartyHeaderCode:14382985805cfad686bc7d61-21453601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9f7146e6107044b0687dbf4c239119a5cd26e61' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/model/user.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14382985805cfad686bc7d61-21453601',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad686bd7740_86072928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad686bd7740_86072928')) {function content_5cfad686bd7740_86072928($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Global Stores and Models
 *
 * The user model represents a data row of the s_core_auth or the
 * Shopware\Models\User\User doctrine model.
 */
//
Ext.define('Shopware.apps.Base.model.User', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName:'Shopware.model.User',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty:'id',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name:'id', type:'int' },
        { name:'roleId', type:'int' },
        { name:'username', type:'string' },
        { name:'password', type:'string' },
        { name:'localeId', type:'int' },
        { name:'sessionId', type:'string' },
        { name:'lastLogin', type:'date' },
        { name:'name', type:'string' },
        { name:'email', type:'string' },
        { name:'active', type:'int' },
        { name:'failedLogins', type:'int' },
        { name:'lockedUntil', type:'date' }
    ]
});
//

<?php }} ?>