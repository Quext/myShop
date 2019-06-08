<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:35
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/customer/view/chart/amount_chart_factory.js" */ ?>
<?php /*%%SmartyHeaderCode:7994113165cfad68b277da5-77194473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b86360460bfe0601ee892923e2a6d20adb45a9b' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/customer/view/chart/amount_chart_factory.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7994113165cfad68b277da5-77194473',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68b29ffb6_68935323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68b29ffb6_68935323')) {function content_5cfad68b29ffb6_68935323($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage Chart
 * @version    $Id$
 * @author shopware AG
 */

// 
// 
Ext.define('Shopware.apps.Customer.view.chart.AmountChartFactory', {

    createChart: function (streamStore, callback) {
        var fields = [];
        var modelFields = [];

        streamStore.each(function (item, id) {
            if (item.get('id') !== null) {
                fields.push({ name: 'stream_' + item.get('id'), title: item.get('name'), currency: true });
                modelFields.push({ name: 'stream_' + item.get('id'), type: 'float' });
            }
        });

        fields.push({ name: 'unassigned', title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'unassigned_stream','namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'unassigned_stream','namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Without Customer Stream<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'unassigned_stream','namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', currency: true });
        modelFields.push({ name: 'unassigned', type: 'float' });
        modelFields.push({ name: 'yearMonth', type: 'string' });

        var store = Ext.create('Ext.data.Store', {
            fields: modelFields,
            proxy: {
                type: 'ajax',
                url: '<?php echo '/myShop/backend/CustomerStream/loadAmountPerStreamChart';?>',
                reader: {
                    type: 'json',
                    root: 'data'
                }
            }
        }).load({
            callback: function () {
                var chart = Ext.create('Shopware.apps.Customer.view.chart.Chart', {
                    store: store,
                    getFields: function() {
                        return fields;
                    }
                });

                callback(chart);
            }
        });
    }

});
// 
<?php }} ?>