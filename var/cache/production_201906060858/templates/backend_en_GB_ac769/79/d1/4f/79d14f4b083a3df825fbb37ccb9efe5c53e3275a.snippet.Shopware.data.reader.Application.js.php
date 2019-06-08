<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:30
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/component/Shopware.data.reader.Application.js" */ ?>
<?php /*%%SmartyHeaderCode:17609917395cfad6864ba200-73341407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79d14f4b083a3df825fbb37ccb9efe5c53e3275a' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/component/Shopware.data.reader.Application.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17609917395cfad6864ba200-73341407',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad6864c1be8_35599469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad6864c1be8_35599469')) {function content_5cfad6864c1be8_35599469($_smarty_tpl) {?>/**
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
 * @subpackage Component
 * @copyright  Copyright (c) shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author     shopware AG
 */

Ext.define('Shopware.data.reader.Application', {
    extend: 'Ext.data.reader.Json',
    alternateClassName: 'Ext.data.ApplicationReader',
    alias : 'reader.application',

    extractData : function(root) {
        var me = this,
            records = [],
            Model   = me.model,
            length  = root.length,
            modelIteration = null,
            convertedValues, node, record, i;

        if (!root.length && Ext.isObject(root)) {
            root = [root];
            length = 1;
        }

        modelIteration = me.model;

        for (i = 0; i < length; i++) {
            node = root[i];

            if (!node.isModel) {
                //SW FIX
                    //internal reference of convertRecordData function lost
                    //reproducible if you load a one to many association and additionally a many to one association
                    me.setModel(modelIteration, true);
                //fix end

                record = new Model(undefined, me.getId(node), node, convertedValues = {});

                record.phantom = false;

                me.convertRecordData(convertedValues, node, record);

                records.push(record);

                if (me.implicitIncludes) {
                    me.readAssociated(record, node);
                }
            } else {
                records.push(node);
            }
        }
        return records;
    }
});


<?php }} ?>