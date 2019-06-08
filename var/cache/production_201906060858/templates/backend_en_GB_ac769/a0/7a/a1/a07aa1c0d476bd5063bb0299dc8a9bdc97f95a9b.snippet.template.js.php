<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:30
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/model/template.js" */ ?>
<?php /*%%SmartyHeaderCode:20322214005cfad686d5ae38-08093375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a07aa1c0d476bd5063bb0299dc8a9bdc97f95a9b' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/model/template.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20322214005cfad686d5ae38-08093375',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad686d65e73_02572385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad686d65e73_02572385')) {function content_5cfad686d65e73_02572385($_smarty_tpl) {?>/**
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
 * Shopware UI - Global Stores and Models
 */
//
Ext.define('Shopware.apps.Base.model.Template', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.Template',

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty : 'id',

    /**
    * The fields used for this model
    * @array
    */
    fields: [
        //
        { name: 'id', type : 'int' },
        { name: 'name', type: 'string' },
        { name: 'template', type : 'string' }
    ]
});
//
<?php }} ?>