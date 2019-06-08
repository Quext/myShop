<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:34
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article/model/configurator_set.js" */ ?>
<?php /*%%SmartyHeaderCode:9374920955cfad68acc98a6-13006559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dec147e5a272fdf7815218b87823a24a0a11015' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article/model/configurator_set.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9374920955cfad68acc98a6-13006559',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68acd51d9_08006451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68acd51d9_08006451')) {function content_5cfad68acd51d9_08006451($_smarty_tpl) {?>/**
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
 * The article model contains all data about the article. Additional the model
 * contains the definition of the model associations. The article model
 * contains a proxy to define which request has to been sent to save, update and delete
 * the article.
 */
//
Ext.define('Shopware.apps.Article.model.ConfiguratorSet', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'int', useNull: true },
        { name: 'articleId', type: 'int', useNull: true },
        { name: 'name', type: 'string' },
        { name: 'type', type: 'int', defaultValue: 0 },
        { name: 'public', type: 'boolean' }
    ],
    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Article.model.ConfiguratorGroup', name: 'getConfiguratorGroups', associationKey: 'groups' },
        { type: 'hasMany', model: 'Shopware.apps.Article.model.ConfiguratorOption', name: 'getConfiguratorOptions', associationKey: 'options' }
    ]

});
//
<?php }} ?>