<?php /* Smarty version Smarty-3.1.12, created on 2019-06-08 22:46:57
         compiled from "/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/error/exception.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15679241185cfc1ec1105737-48375168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12bd1cb0c7cb1c9b190de385bf9c5a8423df6107' => 
    array (
      0 => '/Applications/MAMP/htdocs/myShop/themes/Backend/ExtJs/backend/error/exception.tpl',
      1 => 1559938522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15679241185cfc1ec1105737-48375168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'exception' => 0,
    'error_file' => 0,
    'error_trace' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5cfc1ec11286d4_58109076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfc1ec11286d4_58109076')) {function content_5cfc1ec11286d4_58109076($_smarty_tpl) {?>

<h2><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ExceptionHeader','default'=>'Ups! An error has occurred!','namespace'=>'frontend/error/exception','tag'=>'span')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ExceptionHeader','default'=>'Ups! An error has occurred!','namespace'=>'frontend/error/exception','tag'=>'span'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Oops! An error has occurred!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ExceptionHeader','default'=>'Ups! An error has occurred!','namespace'=>'frontend/error/exception','tag'=>'span'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>

<?php if ($_smarty_tpl->tpl_vars['exception']->value){?>
    <p>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ExceptionText','default'=>'The following hints should help you.','namespace'=>'frontend/error/exception','tag'=>'span')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ExceptionText','default'=>'The following hints should help you.','namespace'=>'frontend/error/exception','tag'=>'span'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The following notes should help you.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ExceptionText','default'=>'The following hints should help you.','namespace'=>'frontend/error/exception','tag'=>'span'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </p>

    <h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['exception']->value->getMessage(), ENT_QUOTES, 'utf-8', true);?>
 in <?php echo $_smarty_tpl->tpl_vars['error_file']->value;?>
 on line <?php echo $_smarty_tpl->tpl_vars['exception']->value->getLine();?>
</h3>

    <h3>Stack trace:</h3>
    <div style="overflow:auto;">
        <pre><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error_trace']->value, ENT_QUOTES, 'utf-8', true);?>
</pre>
    </div>
<?php }else{ ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'InformText','default'=>'Wir wurden bereits über das Problem informiert und arbeiten an einer Lösung, bitte versuchen Sie es in Kürze erneut.','namespace'=>'frontend/error/exception','tag'=>'span')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'InformText','default'=>'Wir wurden bereits über das Problem informiert und arbeiten an einer Lösung, bitte versuchen Sie es in Kürze erneut.','namespace'=>'frontend/error/exception','tag'=>'span'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
We have been informed about the problem and try to solve it. Please try again within a short time.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'InformText','default'=>'Wir wurden bereits über das Problem informiert und arbeiten an einer Lösung, bitte versuchen Sie es in Kürze erneut.','namespace'=>'frontend/error/exception','tag'=>'span'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<div class="doublespace">&nbsp;</div>
<?php }} ?>