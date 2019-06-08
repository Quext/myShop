<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:30
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/application/Shopware.model.DataOperation.js" */ ?>
<?php /*%%SmartyHeaderCode:10950038885cfad6868b5ac1-61684570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b532e9e3c77f6a946475b693ca60dc0934ed764b' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/application/Shopware.model.DataOperation.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10950038885cfad6868b5ac1-61684570',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad6868bdfd3_21233496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad6868bdfd3_21233496')) {function content_5cfad6868bdfd3_21233496($_smarty_tpl) {?>
//
//

Ext.define('Shopware.model.DataOperation', {

    extend:'Ext.data.Model',

    phantom: true,

    fields:[
        { name: 'success', type: 'boolean' },
        { name: 'request' },
        { name: 'error', type: 'string' },
        { name: 'operation' },
    ]
});
//
<?php }} ?>