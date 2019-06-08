<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:34
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article/model/dependency.js" */ ?>
<?php /*%%SmartyHeaderCode:14448362445cfad68ad31e28-77055435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c80da068797c461a4601dc8a84418e49c7f0f46f' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article/model/dependency.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14448362445cfad68ad31e28-77055435',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68ad4a4f1_75347815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68ad4a4f1_75347815')) {function content_5cfad68ad4a4f1_75347815($_smarty_tpl) {?>/**
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
 * @subpackage Category
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article backend module.
 */
//
Ext.define('Shopware.apps.Article.model.Dependency', {

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

    /**
     * Fields array which contains the model fields
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'integer', useNull: true },
        { name: 'configuratorSetId', type: 'integer', useNull: true },
        { name: 'parentId', type: 'integer', useNull: true },
        { name: 'childId', type: 'integer', useNull: true },
        {
            name: 'parentGroupId',
            type: 'integer',
            convert: function(value, record) {
                if (value) {
                    return value;
                }
                if (record && record.raw && record.raw.parentOption) {
                    return record.raw.parentOption.groupId;
                }
                return null;
            }
       },
       {
            name: 'childGroupId',
            type: 'integer',
            convert: function(value, record) {
                if (value) {
                    return value;
                }
                if (record && record.raw && record.raw.childOption) {
                    return record.raw.childOption.groupId;
                }
                return null;
            }
       }
    ],

    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Article.model.ConfiguratorOption', name: 'getParentOption', associationKey: 'parentOption' },
        { type: 'hasMany', model: 'Shopware.apps.Article.model.ConfiguratorOption', name: 'getChildOption', associationKey: 'childOption' }
    ],

    proxy: {
        type: 'ajax',
        api: {
            destroy: '<?php echo '/myShop/backend/Article/deleteConfiguratorDependency';?>'
        }
    }



});
//

<?php }} ?>