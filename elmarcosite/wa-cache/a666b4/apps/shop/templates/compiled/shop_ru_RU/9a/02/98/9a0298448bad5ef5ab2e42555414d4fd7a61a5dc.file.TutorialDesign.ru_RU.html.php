<?php /* Smarty version Smarty-3.1.14, created on 2022-12-24 05:45:09
         compiled from "C:\OpenServer\domains\elmarco\elmarcosite\wa-apps\shop\templates\actions\tutorial\TutorialDesign.ru_RU.html" */ ?>
<?php /*%%SmartyHeaderCode:172075730063a667b5bd5760-73320125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a0298448bad5ef5ab2e42555414d4fd7a61a5dc' => 
    array (
      0 => 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-apps\\shop\\templates\\actions\\tutorial\\TutorialDesign.ru_RU.html',
      1 => 1613045820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172075730063a667b5bd5760-73320125',
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
    'theme_names' => 0,
    '_themes' => 0,
    'letter' => 0,
    'wa_app_static_url' => 0,
    'prev_step' => 0,
    'next_step' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_63a667b5c0a7d0_78794995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63a667b5c0a7d0_78794995')) {function content_63a667b5c0a7d0_78794995($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['actions']->value)){?>
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
<?php $_smarty_tpl->tpl_vars['_themes'] = new Smarty_variable(join('», «',$_smarty_tpl->tpl_vars['theme_names']->value), null, 0);?>
<?php if (count($_smarty_tpl->tpl_vars['theme_names']->value)==1){?><?php $_smarty_tpl->tpl_vars['letter'] = new Smarty_variable('а', null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['letter'] = new Smarty_variable('ы', null, 0);?><?php }?>

<div class="s-unboarding-wrapper">
    <h1>Выберите и настройте тему дизайна</h1>

    <div class="s-tutorial-block">
        <p>
            <?php if (!empty($_smarty_tpl->tpl_vars['_themes']->value)){?>
            В вашем магазине уже установлен<?php echo $_smarty_tpl->tpl_vars['letter']->value;?>
 тем<?php echo $_smarty_tpl->tpl_vars['letter']->value;?>
 дизайна <strong>«<?php echo $_smarty_tpl->tpl_vars['_themes']->value;?>
»</strong><br/>
            Настройте ее как вам нужно на вкладке «Оформление» в разделе «Магазин → Витрина».
            <?php }else{ ?>
            В вашем магазине еще не установлены темы дизайна.
            <?php }?>
        </p>

        <p><img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/backend/tutorial/ru/step-3-1.png"></p>
    </div>

    <div class="s-tutorial-block">
        <p>Если вам нужен совсем другой дизайн, выберите и установите любую тему дизайна из магазина Webasyst на вкладке «Темы дизайна». Темы есть бесплатные и платные. Все они устанавливаются автоматически — одной кнопкой.</p>

        <p><img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/backend/tutorial/ru/step-3-2.png"></p>

        <p>После установки новой темы дизайна выберите ее в разделе «Магазин → Витрина» на вкладке «Настройки».</p>

        <div class="video-links">
            Посмотрите видеоурок
            <ul class="menu-v compact">
                <li><a href="https://www.youtube.com/watch?v=cbZa8wykuYA&list=PL3TRPSqkoZRlZ7FcxdpmykLtVDKPUGpKz&index=8" target="_blank">Как настраивать дизайн витрины <i class="icon16 new-window"></i></a></li>
            </ul>
        </div>
    </div>

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
</div>
<?php }} ?>