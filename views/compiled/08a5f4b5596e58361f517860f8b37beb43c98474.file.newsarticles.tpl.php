<?php /* Smarty version Smarty-3.1.18, created on 2016-11-04 12:54:38
         compiled from "views/newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10513277855800b33fe51f48-32609624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a5f4b5596e58361f517860f8b37beb43c98474' => 
    array (
      0 => 'views/newsarticles.tpl',
      1 => 1478260472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10513277855800b33fe51f48-32609624',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5800b34000f422_80493670',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800b34000f422_80493670')) {function content_5800b34000f422_80493670($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/vhosts/20670.hosts.ma-cloud.nl/httpdocs/Bewijzenmap2/BAE/BOVI/PHP/myband/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/vhosts/20670.hosts.ma-cloud.nl/httpdocs/Bewijzenmap2/BAE/BOVI/PHP/myband/libs/plugins/modifier.date_format.php';
?><section id='story'>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
   <h1>Verhaal van de week</h1>
    <h2><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['Writer'];?>
</p>
    <content id="Content"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],562);?>
</content>
    <br></br>
    <img id="images"src=img/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
>
    <br></br>
    
    <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%d %B %Y");?>
</p>
    
    <?php } ?>
</section>


<?php }} ?>
