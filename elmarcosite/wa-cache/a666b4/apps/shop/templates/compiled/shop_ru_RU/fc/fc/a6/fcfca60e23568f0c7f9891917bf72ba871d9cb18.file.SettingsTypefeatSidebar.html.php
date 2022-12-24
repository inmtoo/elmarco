<?php /* Smarty version Smarty-3.1.14, created on 2022-12-24 05:47:22
         compiled from "C:\OpenServer\domains\elmarco\elmarcosite\wa-apps\shop\templates\actions\settings\SettingsTypefeatSidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:99541589863a6683a3ab464-14525795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcfca60e23568f0c7f9891917bf72ba871d9cb18' => 
    array (
      0 => 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-apps\\shop\\templates\\actions\\settings\\SettingsTypefeatSidebar.html',
      1 => 1644918912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99541589863a6683a3ab464-14525795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_url' => 0,
    'count_all_features' => 0,
    'count_features_all_types' => 0,
    'count_features_no_types' => 0,
    'count_features_builtin' => 0,
    'types' => 0,
    '_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_63a6683a3e1605_37653776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63a6683a3e1605_37653776')) {function content_63a6683a3e1605_37653776($_smarty_tpl) {?><div class="s-sidebar-section js-sidebar-section" id="js-features-settings-sidebar">
    
    <div class="s-section-header">
        
        <ul class="menu-v with-icons">
            <li class="js-type-wrapper">
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=settings#/typefeat/">
                    <span class="s-icon"><i class="icon16 funnel"></i></span>
                    <span class="s-name">Все характеристики</span>
                    <span class="s-counter js-counter"><?php echo $_smarty_tpl->tpl_vars['count_all_features']->value;?>
</span>
                </a>
            </li>
            <li class="js-type-wrapper" data-id="all_existing">
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=settings#/typefeat/all_existing/">
                    <span class="s-icon"><i class="icon16 funnel"></i></span>
                    <span class="s-name">Доступные для всех типов товаров</span>
                    <span class="s-counter js-counter"><?php echo $_smarty_tpl->tpl_vars['count_features_all_types']->value;?>
</span>
                </a>
            </li>
            <li class="js-type-wrapper" data-id="empty">
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=settings#/typefeat/empty/">
                    <span class="s-icon"><i class="icon16 funnel"></i></span>
                    <span class="s-name">Недоступные ни для одного типа товаров</span>
                    <span class="s-counter js-counter"><?php echo $_smarty_tpl->tpl_vars['count_features_no_types']->value;?>
</span>
                </a>
            </li>
            <li class="js-type-wrapper" data-id="builtin">
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=settings#/typefeat/builtin/">
                    <span class="s-icon"><i class="icon16 funnel"></i></span>
                    <span class="s-name">Системные</span>
                    <span class="s-counter js-counter"><?php echo $_smarty_tpl->tpl_vars['count_features_builtin']->value;?>
</span>
                </a>
            </li>
        </ul>

        
        <div class="s-types-section">
            <div class="wa-table-box space-5">
                <div class="s-column">
                    <h5 class="heading">
                        <span class="s-title">Типы товаров</span>
                        <span class="shop-tooltip"><i class="icon10 info"></i><span>У каждого типа товаров — например, «Телевизоры», «Телефоны» или «Часы» — может быть собственный набор характеристик. Для витрины можно выбрать те типы товаров, которые нужно показывать на ней. Для пользователей панели управления можно настраивать индивидуальные уровни доступа к разным типам товаров.</span></span>
                    </h5>
                </div>
                <div class="s-column align-right">
                    <span class="s-icon js-type-add" title="Новый тип товаров"><i class="icon16 add"></i></span>
                </div>
            </div>
        </div>

        
        <?php if (count($_smarty_tpl->tpl_vars['types']->value)>5){?>
            <div class="s-search-section">
                <div class="wa-table-box middle space-5">
                    <div class="s-column">
                        <span class="s-icon js-run-search"><i class="icon16 ss search-bw"></i></span>
                    </div>
                    <div class="s-column">
                        <input class="s-search-field js-search-field" type="text" name="search" placeholder="<?php echo htmlspecialchars(_w('Type a product type name'), ENT_QUOTES, 'UTF-8', true);?>
">
                    </div>
                </div>
            </div>
        <?php }?>
    </div>

    
    <div class="s-section-body">
        
        <ul class="s-types-list menu-v with-icons js-types-list">
            <?php  $_smarty_tpl->tpl_vars['_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_type']->key => $_smarty_tpl->tpl_vars['_type']->value){
$_smarty_tpl->tpl_vars['_type']->_loop = true;
?>
                <?php if (empty($_smarty_tpl->tpl_vars['_type']->value['id'])){?><?php continue 1?><?php }?>

                <li class="s-type-wrapper js-type-wrapper" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_type']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <a class="s-type-block" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=settings#/typefeat/<?php echo $_smarty_tpl->tpl_vars['_type']->value['id'];?>
/">
                        <span class="s-icon"><?php echo shopHelper::getIcon($_smarty_tpl->tpl_vars['_type']->value['icon']);?>
</span>
                        <span class="s-name js-name"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_type']->value['name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</span>
                        <span class="s-counter"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_type']->value['features_count'])===null||$tmp==='' ? '' : $tmp);?>
</span>
                    </a>

                    <div class="s-type-actions">
                        <ul class="menu-h dropdown">
                            <li>
                                <a class="s-visible-link" href="javascript:void(0);">
                                    <span class="s-dotted-icon"><i class="s-dot"></i><i class="s-dot"></i><i class="s-dot"></i></span>
                                </a>
                                <ul class="menu-v with-icons right">
                                    <li>
                                        <a class="js-type-edit" href="javascript:void(0);">
                                            <span class="s-icon"><i class="icon16 edit"></i></span>
                                            <span class="s-name">Редактировать</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="js-type-copy" href="javascript:void(0);">
                                            <span class="s-icon"><i class="icon16 notebooks"></i></span>
                                            <span class="s-name">Создать дубликат</span>
                                        </a>
                                    </li>
                                    <li>
                                        <?php if (count($_smarty_tpl->tpl_vars['types']->value)===2){?>
                                            <a class="disabled" href="javascript:void(0);" title="Нельзя удалить единственный тип товаров.">
                                                <span class="s-icon"><i class="icon16 delete-bw"></i></span>
                                                <span class="s-name">Удалить</span>
                                            </a>
                                        <?php }else{ ?>
                                            <a class="js-type-delete" href="javascript:void(0);">
                                                <span class="s-icon"><i class="icon16 delete"></i></span>
                                                <span class="s-name">Удалить</span>
                                            </a>
                                        <?php }?>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>

    <script>
        ( function($) {
            var $sidebar = $("#js-features-settings-sidebar"),
                $page = $("#js-features-settings-page");

            var ready_promise = $page.data("ready").promise();
            ready_promise.then( function(controller) {
                controller.initSidebar({
                    $wrapper: $sidebar,
                    urls: {
                        "app_url": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
,
                        "type_edit": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settingsTypefeat&action=typeEdit",
                        "type_copy": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settingsTypefeat&action=typeDuplicate",
                        "type_delete": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settingsTypefeat&action=typeDeleteDialog",
                        "type_save": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settings&action=typefeatTypeSave",
                        "type_delete_controller": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settingsTypefeat&action=typeDelete"
                    }
                });
            });
        })(jQuery);
    </script>
</div>
<?php }} ?>