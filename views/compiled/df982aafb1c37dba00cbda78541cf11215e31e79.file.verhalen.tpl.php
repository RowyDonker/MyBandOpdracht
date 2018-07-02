<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 18:22:24
         compiled from "views/verhalen.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110320734558134cf7dff1b4-77620804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df982aafb1c37dba00cbda78541cf11215e31e79' => 
    array (
      0 => 'views/verhalen.tpl',
      1 => 1478178582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110320734558134cf7dff1b4-77620804',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58134cf7f15e31_23178140',
  'variables' => 
  array (
    'result2' => 0,
    'i' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58134cf7f15e31_23178140')) {function content_58134cf7f15e31_23178140($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/vhosts/20670.hosts.ma-cloud.nl/httpdocs/Bewijzenmap2/BAE/BOVI/PHP/myband/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/20670.hosts.ma-cloud.nl/httpdocs/Bewijzenmap2/BAE/BOVI/PHP/myband/libs/plugins/modifier.date_format.php';
?><br></br>

 <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
  <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
  <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>
  
   <section id="left">
    <h2><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Writer'];?>
</p>
    <content><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],250);?>
</content>
    <br></br>

    <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%d %B %Y");?>
</p>
    </section>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
    <?php } else { ?>
    <br>
    <section id="right">
    <h2><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Writer'];?>
</p>
    <content><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],250);?>
</content>
    <br></br>

    <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%d %B %Y");?>
</p>
    </section>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
    <?php }?>
    <?php } ?><?php }} ?>
