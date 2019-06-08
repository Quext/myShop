<?php /* Smarty version Smarty-3.1.12, created on 2019-06-07 23:26:31
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/store/attribute_config.js" */ ?>
<?php /*%%SmartyHeaderCode:5029711435cfad6871272f1-24250540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0fe88bb8853541c89ab29e2bea4e2615b04a308' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/base/store/attribute_config.js',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5029711435cfad6871272f1-24250540',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfad68712afa0_66359957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfad68712afa0_66359957')) {function content_5cfad68712afa0_66359957($_smarty_tpl) {?>
Ext.define('Shopware.store.AttributeConfig', {
    extend: 'Shopware.store.Listing',
    model: 'Shopware.model.AttributeConfig',
    remoteSort: false,

    configure: function() {
        return {
            controller: 'AttributeData'
        }
    }
});
<?php }} ?>