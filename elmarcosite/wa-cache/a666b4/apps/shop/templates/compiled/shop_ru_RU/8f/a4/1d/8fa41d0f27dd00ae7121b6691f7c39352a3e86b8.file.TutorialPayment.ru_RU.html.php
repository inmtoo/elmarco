<?php /* Smarty version Smarty-3.1.14, created on 2022-12-24 05:45:12
         compiled from "C:\OpenServer\domains\elmarco\elmarcosite\wa-apps\shop\templates\actions\tutorial\TutorialPayment.ru_RU.html" */ ?>
<?php /*%%SmartyHeaderCode:201271514463a667b820a380-71496057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fa41d0f27dd00ae7121b6691f7c39352a3e86b8' => 
    array (
      0 => 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-apps\\shop\\templates\\actions\\tutorial\\TutorialPayment.ru_RU.html',
      1 => 1558440420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201271514463a667b820a380-71496057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'stepArray' => 0,
    'step' => 0,
    'active' => 0,
    'key' => 0,
    'next_step_key' => 0,
    'wa_app_static_url' => 0,
    'prev_step' => 0,
    'next_step' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_63a667b823bbb8_42169710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63a667b823bbb8_42169710')) {function content_63a667b823bbb8_42169710($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['actions']->value)){?>
    <?php $_smarty_tpl->tpl_vars['stepArray'] = new Smarty_variable(array_keys($_smarty_tpl->tpl_vars['actions']->value), null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['step'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['step']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stepArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['step']->key => $_smarty_tpl->tpl_vars['step']->value){
$_smarty_tpl->tpl_vars['step']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['step']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['step']->value===$_smarty_tpl->tpl_vars['active']->value){?>
            <?php $_smarty_tpl->tpl_vars['next_step_key'] = new Smarty_variable($_smarty_tpl->tpl_vars['key']->value, null, 0);?>
        <?php }?>
    <?php } ?>
    <?php if (isset($_smarty_tpl->tpl_vars['stepArray']->value[$_smarty_tpl->tpl_vars['next_step_key']->value+1])){?>
        <?php $_smarty_tpl->tpl_vars['next_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['stepArray']->value[$_smarty_tpl->tpl_vars['next_step_key']->value+1], null, 0);?>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['stepArray']->value[$_smarty_tpl->tpl_vars['next_step_key']->value-1])){?>
        <?php $_smarty_tpl->tpl_vars['prev_step'] = new Smarty_variable($_smarty_tpl->tpl_vars['stepArray']->value[$_smarty_tpl->tpl_vars['next_step_key']->value-1], null, 0);?>
    <?php }?>
<?php }?>

<div class="s-unboarding-wrapper">
    <h1>Настройте способы оплаты</h1>

    <p><img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/backend/tutorial/ru/step-4-1.png" alt=""></p>

    <div class="s-actions-wrapper">
        <a href="<?php if (isset($_smarty_tpl->tpl_vars['prev_step']->value)&&$_smarty_tpl->tpl_vars['actions']->value[$_smarty_tpl->tpl_vars['prev_step']->value]){?><?php echo $_smarty_tpl->tpl_vars['actions']->value[$_smarty_tpl->tpl_vars['prev_step']->value]['href'];?>
<?php }else{ ?>javascript:void(0)<?php }?>" class="button yellow">&larr; Назад</a>
        <a href="<?php if (isset($_smarty_tpl->tpl_vars['next_step']->value)&&$_smarty_tpl->tpl_vars['actions']->value[$_smarty_tpl->tpl_vars['next_step']->value]){?><?php echo $_smarty_tpl->tpl_vars['actions']->value[$_smarty_tpl->tpl_vars['next_step']->value]['href'];?>
<?php }else{ ?>javascript:void(0)<?php }?>" class="button green">Следующий шаг &rarr;</a>
    </div>

    <script>
        (function ($) {
            new TutorialSidebar({
                $wrapper: $("#tutorial-actions"),
                active_step: <?php echo json_encode($_smarty_tpl->tpl_vars['active']->value);?>
,
                $actions: <?php echo json_encode($_smarty_tpl->tpl_vars['actions']->value);?>

            });
        })(jQuery);
    </script>
</div><?php }} ?>