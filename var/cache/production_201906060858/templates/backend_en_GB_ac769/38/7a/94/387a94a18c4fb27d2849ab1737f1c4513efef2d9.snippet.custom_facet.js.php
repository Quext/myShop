<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/store/custom_facet.js" */ ?>
<?php /*%%SmartyHeaderCode:9016680875cfad687eaa780-23101058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '387a94a18c4fb27d2849ab1737f1c4513efef2d9' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/store/custom_facet.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9016680875cfad687eaa780-23101058',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad687eb2cb5_78832443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad687eb2cb5_78832443')) {function content_5cfad687eb2cb5_78832443($_smarty_tpl) {?>/**
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

//

Ext.define('Shopware.apps.Base.store.CustomFacet', {
    extend:'Shopware.store.Listing',

    sorters: [{
        property: 'position',
        direction: 'ASC'
    }],

    configure: function() {
        return {
            controller: 'CustomFacet'
        };
    },
    model: 'Shopware.apps.Base.model.CustomFacet'
});

//
<?php }} ?>