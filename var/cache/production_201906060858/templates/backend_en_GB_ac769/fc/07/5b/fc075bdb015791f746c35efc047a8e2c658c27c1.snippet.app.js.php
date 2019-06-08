<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:34
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article/app.js" */ ?>
<?php /*%%SmartyHeaderCode:8217494265cfad68a4aa0e2-10694815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc075bdb015791f746c35efc047a8e2c658c27c1' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/article/app.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8217494265cfad68a4aa0e2-10694815',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68a4bc370_52851240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68a4bc370_52851240')) {function content_5cfad68a4bc370_52851240($_smarty_tpl) {?>/**
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
 * @subpackage Detail
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Application - Article module
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Article', {

    /**
     * The name of the module. Used for internal purpose
     * @string
     */
    name:'Shopware.apps.Article',

    /**
     * Extends from our special controller, which handles the sub-application behavior and the event bus
     * @string
     */
    extend:'Enlight.app.SubApplication',

    /**
     * Enable bulk loading
     * @boolean
     */
    bulkLoad:true,

    /**
     * Sets the loading path for the sub-application.
     *
     * @string
     */
    loadPath:'<?php echo '/myShop/backend/Article/load';?>',

    /**
     * Array of views to require from AppName.view namespace.
     * @array
     */
    views:[
        'detail.Toolbar',
        'detail.Window',
        'detail.Settings',
        'detail.Properties',
        'detail.Prices',
        'detail.Base',
        'category.Tree',
        'category.Seo',
        'category.List',
        'category.DropZone',
        'image.List',
        'image.Info',
        'image.DropZone',
        'image.DataView',
        'image.Mapping',
        'image.NewRule',
        'image.Progress',
        'variant.List',
        'variant.Configurator',
        'variant.Detail',
        'variant.NumberProgress',
        'variant.Progress',
        'variant.ImageRelationProcess',
        'variant.configurator.Dependency',
        'variant.configurator.Sets',
        'variant.configurator.GroupEdit',
        'variant.configurator.OptionEdit',
        'variant.configurator.Mapping',
        'variant.configurator.Template',
        'variant.configurator.PriceVariation',
        'variant.configurator.PriceVariationRule',
        'esd.List',
        'esd.Detail',
        'esd.Serials',
        'statistics.List',
        'statistics.Chart',
        'crossselling.Tab',
        'crossselling.Base',
        'crossselling.ProductStreams',
        'resources.Links',
        'resources.Downloads'
    ],

    /**
     * Array of stores to require from AppName.store namespace.
     * @array
     */
    stores:[
        'Batch',
        'Detail',
        'CategoryPath',
        'CategoryTree',
        'Variant',
        'Group',
        'Option',
        'Esd',
        'EsdFile',
        'Statistic',
        'Serial',
        'Variation',
        'Dependency',
        'ConfiguratorSet',
        'MediaMapping',
        'Property'
    ],

    /**
     * Array of models to require from AppName.model namespace.
     * @array
     */
    models: [
        'Batch',
        'PriceGroup',
        'PropertyGroup',
        'PropertyOption',
        'Template',
        'Category',
        'Media',
        'SeoCategory',
        'Unit',
        'Similar',
        'Accessory',
        'Article',
        'Price',
        'Detail',
        'Link',
        'Download',
        'Esd',
        'EsdFile',
        'Statistic',
        'Serial',
        'Configurator',
        'ConfiguratorGroup',
        'ConfiguratorSet',
        'ConfiguratorOption',
        'ConfiguratorTemplate',
        'Dependency',
        'PriceVariation',
        'Field',
        'Stream',
        'MediaMapping',
        'MediaMappingRule',
        'Property'
    ],

    /**
     * Requires controllers for sub-application
     * @array
     */
    controllers: [ 'Main', 'Detail', 'Category', 'Media', 'Variant', 'PriceVariation', 'Esd', 'Statistic', 'Crossselling' ]
});
//

<?php }} ?>