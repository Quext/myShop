<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:30
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/model/media.js" */ ?>
<?php /*%%SmartyHeaderCode:1020887585cfad686d4bd96-27263758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29c5c6b3d48ed091ffb05e5888817ce785505f02' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/model/media.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1020887585cfad686d4bd96-27263758',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad686d556e8_75016034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad686d556e8_75016034')) {function content_5cfad686d556e8_75016034($_smarty_tpl) {?>/**
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
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Base.model.Media', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            field: 'Shopware.form.field.Media'
        };
    },

    fields: [
        //
        'created',
        'description',
        'extension',
        'id',
        'name',
        'type',
        'path',
        'userId',
        'width',
        'height',
        'albumId',
        'thumbnail'
    ]
});
//

<?php }} ?>