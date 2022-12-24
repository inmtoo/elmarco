<?php /* Smarty version Smarty-3.1.14, created on 2022-12-24 05:47:22
         compiled from "C:\OpenServer\domains\elmarco\elmarcosite\wa-apps\shop\templates\actions\settings\SettingsTypefeatList.html" */ ?>
<?php /*%%SmartyHeaderCode:184540367063a6683a55c6b7-81714407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bb0dfd691a9eb78d4746ea9c2809b8b14ea9d44' => 
    array (
      0 => 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-apps\\shop\\templates\\actions\\settings\\SettingsTypefeatList.html',
      1 => 1664959922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184540367063a6683a55c6b7-81714407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebar_html' => 0,
    'title' => 0,
    'is_filter_page' => 0,
    'can_be_delete' => 0,
    'codes' => 0,
    '_code' => 0,
    'wa_url' => 0,
    '_title' => 0,
    'type_url_id' => 0,
    'features' => 0,
    '_feature' => 0,
    '_classes' => 0,
    '_is_visible' => 0,
    '_sku_enabled' => 0,
    '_is_divider' => 0,
    'builtin_title' => 0,
    'too_many_features' => 0,
    'wa' => 0,
    'wa_app_static_url' => 0,
    'wa_app_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_63a6683a5a59c7_37221248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63a6683a5a59c7_37221248')) {function content_63a6683a5a59c7_37221248($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_join')) include 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-system/vendors/smarty-plugins\\modifier.join.php';
?><div class="s-features-settings-page is-not-ready" id="js-features-settings-page" style="visibility: hidden;">
    <script>
        ( function($) {
            $("#js-features-settings-page").data("ready", $.Deferred());
        })(jQuery);
    </script>

    <div class="s-page-table-box">
        <div class="sidebar left200px">
            <?php echo $_smarty_tpl->tpl_vars['sidebar_html']->value;?>

        </div>

        <div class="content left200px bordered-left blank">

            <div class="s-content-section js-content-section">
                
                <div class="s-section-header">

                    <div class="wa-table-box space-10 middle">
                        <div class="s-column">
                            
                            <h1 class="s-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1>
                        </div>
                        <div class="s-column align-right">
                            <?php if (empty($_smarty_tpl->tpl_vars['is_filter_page']->value)){?><div class="s-type-actions"><a class="s-action inline-link js-type-edit" href="javascript:void(0);"><i class="icon16 edit"></i><b><i>Редактировать</i></b></a><?php if ($_smarty_tpl->tpl_vars['can_be_delete']->value){?><a class="s-action inline-link js-type-delete" href="javascript:void(0);"><i class="icon16 delete"></i><b><i>Удалить</i></b></a><?php }else{ ?><span title="Нельзя удалить единственный тип товаров."><i class="icon16 delete-bw"></i><i>Удалить</i></span><?php }?></div><?php }?>
                        </div>
                    </div>

                    
                    <div class="s-search-section">
                        <i class="s-icon icon16 ss search-bw"></i>
                        <input class="s-field js-search-field" type="text" name="search" placeholder="<?php echo htmlspecialchars(_w('Feature search'), ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off">
                    </div>
                </div>

                
                <div class="s-section-body">

                    <?php if (isset($_smarty_tpl->tpl_vars['codes']->value)){?>
                    <section class="s-features-section">
                        <h5 class="s-section-title heading">
                            <span class="s-title">Товарные коды</span>
                            <span class="shop-tooltip"><i class="icon10 info"></i><span>Товарные коды заполняются в заказе для каждой единицы товара. Могут использоваться для маркировки товаров, продажи лицензий программного обеспечения или заполнения серийных номеров.</span></span>
                            <span class="s-icon js-code-add"><i class="icon16 add"></i></span>
                        </h5>
                        <?php if (!empty($_smarty_tpl->tpl_vars['codes']->value)){?>
                            <?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable(_w('To delete this product code, disable or delete the corresponding plugin.'), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['_disabled'] = new Smarty_variable("is-disabled", null, 0);?>
                            <div class="s-features-list s-codes-list js-codes-list">
                                <div class="s-empty-search js-empty-search">Нет товарных кодов, удовлетворяющих условиям поиска</div>
                                <?php  $_smarty_tpl->tpl_vars['_code'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_code']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['codes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_code']->key => $_smarty_tpl->tpl_vars['_code']->value){
$_smarty_tpl->tpl_vars['_code']->_loop = true;
?>
                                    <div class="s-feature-wrapper js-code-wrapper" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_code']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" data-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_code']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <div class="s-feature-block">
                                            <div class="s-column-actions">
                                                <?php if (!empty($_smarty_tpl->tpl_vars['_code']->value['icon'])&&$_smarty_tpl->tpl_vars['_code']->value['code_plugin_enabled']){?><img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['_code']->value['icon'];?>
"><?php }else{ ?><i class="icon16 ss parameter"></i><?php }?>
                                            </div>
                                            <div class="s-column-name">
                                                <div class="js-search-place"><div class="s-name-wrapper"><span class="s-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_code']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></div><div class="s-code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_code']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</div></div>
                                            </div>
                                            <div class="s-column-actions">
                                                <div class="s-actions-list align-right"><a class="s-action js-code-edit" href="javascript:void(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_code']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
);" title="Редактировать"><i class="icon16 edit"></i></a><a class="s-action js-code-copy" href="javascript:void(0);" title="Создать дубликат"><i class="icon16 notebooks"></i></a><a class="s-action <?php if ($_smarty_tpl->tpl_vars['_code']->value['protected_code']){?>js-code-undeletable<?php }else{ ?>js-code-delete<?php }?>" href="javascript:void(0);" title="<?php if ($_smarty_tpl->tpl_vars['_code']->value['protected_code']){?><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
<?php }else{ ?>Удалить<?php }?>"><i class="icon16 <?php if ($_smarty_tpl->tpl_vars['_code']->value['protected_code']){?>delete-bw<?php }else{ ?>delete<?php }?>"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php }else{ ?>
                            <div class="s-message-empty">
                                <?php if ($_smarty_tpl->tpl_vars['type_url_id']->value=='empty'){?>
                                    В вашем магазине нет товарных кодов, недоступных ни для какого типа товаров.
                                <?php }elseif($_smarty_tpl->tpl_vars['type_url_id']->value=='all_existing'){?>
                                    В вашем магазине нет товарных кодов, доступных для всех типов товаров.
                                <?php }else{ ?>
                                    Товарные коды не добавлены.
                                <?php }?>
                            </div>
                        <?php }?>
                    </section>
                    <?php }?>

                    <section class="s-features-section">
                        <h5 class="s-section-title heading">
                            <span class="s-title">Характеристики</span>
                            <span class="shop-tooltip"><i class="icon10 info"></i><span><?php if (wa_is_int($_smarty_tpl->tpl_vars['type_url_id']->value)){?>На страницах товаров на витрине характеристики показаны в том порядке, который настроен для этого типа товаров.<br><br>Чтобы изменить сортировку характеристик, перетащите их в нужное место в списке.<?php }else{ ?>Чтобы изменить сортировку характеристик, выберите тип товаров.<?php }?></span></span>
                            <?php if ($_smarty_tpl->tpl_vars['type_url_id']->value!='builtin'){?>
                                <ul class="menu-h dropdown">
                                    <li>
                                        <a class="inline-link s-visible-link" href="javascript:void(0);">
                                            <i class="icon16 add"></i>
                                        </a>
                                        <ul class="menu-v without-icons" style="max-width: none; width: 250px;">
                                            <li>
                                                <a class="js-feature-add-new"
                                                   href="javascript:void(0);"
                                                   data-type-id="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['type_url_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
">
                                                    <span class="s-name">Новая характеристика</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="js-feature-add-divider"
                                                   href="javascript:void(0);"
                                                   data-type-id="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['type_url_id']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"
                                                   data-mode="divider">
                                                    <span class="s-name">Заголовок группы характеристик</span>
                                                </a>
                                            </li>
                                            <?php if (empty($_smarty_tpl->tpl_vars['is_filter_page']->value)){?>
                                                <li class="with-border">
                                                    <a class="js-feature-add-existing" href="javascript:void(0);">
                                                        <span class="s-name">Характеристика или заголовок из&nbsp;других типов товаров</span>
                                                    </a>
                                                </li>
                                            <?php }?>
                                        </ul>
                                    </li>
                                </ul>
                            <?php }?>
                        </h5>

                        <?php if (!empty($_smarty_tpl->tpl_vars['features']->value)){?>
                            <div class="s-features-list js-features-list">
                                <div class="s-empty-search js-empty-search">Нет характеристик, удовлетворяющих условиям поиска</div>
                                <?php  $_smarty_tpl->tpl_vars['_feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_feature']->key => $_smarty_tpl->tpl_vars['_feature']->value){
$_smarty_tpl->tpl_vars['_feature']->_loop = true;
?>
                                    <?php $_smarty_tpl->tpl_vars['_classes'] = new Smarty_variable(array(), null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['_is_visible'] = new Smarty_variable(true, null, 0);?>
                                    <?php if (empty($_smarty_tpl->tpl_vars['_feature']->value['visible_in_frontend'])){?>
                                        <?php $_smarty_tpl->createLocalArrayVariable('_classes', null, 0);
$_smarty_tpl->tpl_vars['_classes']->value[] = "is-disabled";?>
                                        <?php $_smarty_tpl->tpl_vars['_is_visible'] = new Smarty_variable(false, null, 0);?>
                                    <?php }?>

                                    <?php $_smarty_tpl->tpl_vars['_sku_enabled'] = new Smarty_variable(false, null, 0);?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['_feature']->value['available_for_sku'])){?>
                                        <?php $_smarty_tpl->tpl_vars['_sku_enabled'] = new Smarty_variable(true, null, 0);?>
                                    <?php }?>

                                    <?php $_smarty_tpl->tpl_vars['_is_divider'] = new Smarty_variable(false, null, 0);?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['_feature']->value['type'])){?>
                                        <?php if ($_smarty_tpl->tpl_vars['_feature']->value['type']==="divider"){?>
                                            <?php $_smarty_tpl->tpl_vars['_is_divider'] = new Smarty_variable(true, null, 0);?>
                                            <?php $_smarty_tpl->createLocalArrayVariable('_classes', null, 0);
$_smarty_tpl->tpl_vars['_classes']->value[] = "is-divider";?>
                                        <?php }else{ ?>
                                            <?php $_smarty_tpl->createLocalArrayVariable('_classes', null, 0);
$_smarty_tpl->tpl_vars['_classes']->value[] = "is-custom-feature";?>
                                        <?php }?>
                                    <?php }else{ ?>
                                        <?php $_smarty_tpl->createLocalArrayVariable('_classes', null, 0);
$_smarty_tpl->tpl_vars['_classes']->value[] = "is-feature";?>
                                    <?php }?>

                                    <div class="s-feature-wrapper js-feature-wrapper <?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_classes']->value," ");?>
" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_feature']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" data-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_feature']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
" data-visibility-enabled="<?php if ($_smarty_tpl->tpl_vars['_is_visible']->value){?>1<?php }?>" data-sku-enabled="<?php if ($_smarty_tpl->tpl_vars['_sku_enabled']->value){?>1<?php }?>">
                                        <div class="s-feature-block">
                                            <div class="s-column-actions">

                                                <div class="s-actions-list"><?php if (empty($_smarty_tpl->tpl_vars['is_filter_page']->value)){?><a class="s-action js-feature-sort-toggle" href="javascript:void(0);" title="Перетащите, чтобы изменить порядок характеристик"><i class="icon16 sort"></i></a><?php }?><a class="s-action js-feature-visibility-toggle" href="javascript:void(0);" title="Показывать на сайте"><i class="icon16 <?php if ($_smarty_tpl->tpl_vars['_is_visible']->value){?>visibility-on<?php }else{ ?>ss visibility<?php }?>"></i></a><?php if (empty($_smarty_tpl->tpl_vars['_is_divider']->value)){?><?php if ($_smarty_tpl->tpl_vars['_feature']->value['builtin']){?><?php if ($_smarty_tpl->tpl_vars['_feature']->value['code']==='weight'){?><?php $_smarty_tpl->tpl_vars['builtin_title'] = new Smarty_variable(_w('“Weight” is a special feature, which must always be available for editing in product SKUs’ properties.'), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['_feature']->value['code']==='gtin'){?><?php $_smarty_tpl->tpl_vars['builtin_title'] = new Smarty_variable(_w('“GTIN (Global Trade Item Number)” is a special feature, which must always be available for editing in product SKUs’ properties.'), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['builtin_title'] = new Smarty_variable(_w('You cannot disable the editing of this feature’s values in product SKUs’ properties, because some products in your store have SKUs generated from this feature’s values in “Selectable parameters” mode.'), null, 0);?><?php }?><a class="s-action js-feature-sku-toggle-always" href="javascript:void(0);" title="<?php echo $_smarty_tpl->tpl_vars['builtin_title']->value;?>
"><i class="icon16 hierarchical"></i></a><?php }else{ ?><a class="s-action js-feature-sku-toggle" href="javascript:void(0);" title="Включает возможность задать значения характеристики для артикулов товаров"><i class="icon16 <?php if ($_smarty_tpl->tpl_vars['_sku_enabled']->value){?>hierarchical<?php }else{ ?>hierarchical-off<?php }?>"></i></a><?php }?><?php }?></div>

                                            </div>
                                            <div class="s-column-name">

                                                <div class="js-search-place"><div class="s-name-wrapper"><span class="s-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['_is_divider']->value)){?><span class="s-description">Заголовок группы характеристик</span><?php }?></div><div class="s-code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_feature']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
</div></div>

                                            </div>
                                            <div class="s-column-actions">

                                                <div class="s-actions-list align-right"><a class="s-action js-feature-edit" href="javascript:void(0);" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_feature']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" data-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_feature']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
" title="Редактировать"><i class="icon16 edit"></i></a><a class="s-action js-feature-copy" href="javascript:void(0);" title="Создать дубликат"><i class="icon16 notebooks"></i></a><?php if ($_smarty_tpl->tpl_vars['_feature']->value['builtin']){?><a class="s-action js-feature-undeletable" href="javascript:void(0);" title="Эта характеристика — особенная, ее нельзя удалить. Ее можно только отключить для отдельных типов товаров, где она вам не нужна."><i class="icon16 delete-bw"></i></a><?php }else{ ?><a class="s-action js-feature-delete" href="javascript:void(0);" title="Удалить"><i class="icon16 delete"></i></a><?php }?></div>

                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php }else{ ?>
                            <div class="s-message-empty">
                                <?php if ($_smarty_tpl->tpl_vars['too_many_features']->value){?>
                                    В этом списке слишком много характеристик, чтобы показать их все сразу. Выберите тип товаров слева, чтобы просмотреть его характеристики.
                                <?php }elseif($_smarty_tpl->tpl_vars['type_url_id']->value=='empty'){?>
                                    В вашем магазине нет характеристик, недоступных ни для какого типа товаров.
                                <?php }elseif($_smarty_tpl->tpl_vars['type_url_id']->value=='all_existing'){?>
                                    В вашем магазине нет характеристик, доступных для всех типов товаров.
                                <?php }else{ ?>
                                    Характеристики не добавлены.
                                <?php }?>
                            </div>
                        <?php }?>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <?php echo shopSettingsTypefeatFeatureWidgetAction::widget(array("selection"=>".js-feature-add-new, .js-feature-add-divider, .js-feature-edit"));?>


    <script>
        ( function($) {

            document.title = <?php echo json_encode(_w('Product types & features'));?>
 + ' — ' + <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->accountName());?>
;

            var sources = [{
                id: "wa-dialog-css",
                type: "css",
                uri: "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/dialog/dialog.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"
            }, {
                id: "wa-dialog-js",
                type: "js",
                uri: "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/dialog/dialog.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"
            }, {
                id: "wa-features-settings-css",
                type: "css",
                uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/backend/settings/features.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
            }, {
                id: "vue-js",
                type: "js",
                uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/settings/features/vue/vue.min.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
            }, {
                id: "wa-features-settings-js",
                type: "js",
                uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/settings/features/features.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
            }];

            $.shop.loadSources(sources).then(init, function() {
                alert("Page Loading Error");
            });

            function init() {
                window.shop_feature_settings_page = new ShopFeatureSettingsPage({
                    $wrapper: $("#js-features-settings-page").removeClass("is-not-ready").removeAttr("style"),
                    type_id: <?php if (!empty($_smarty_tpl->tpl_vars['type_url_id']->value)){?><?php echo json_encode($_smarty_tpl->tpl_vars['type_url_id']->value);?>
<?php }else{ ?>null<?php }?>,
                    urls: {
                        "transliterate": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=backend&action=transliterate",
                        "reload": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settingsTypefeat&action=list",
                        "toggle": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settingsTypefeat&action=toggle",
                        "feature_edit": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settingsTypefeat&action=featureEdit",
                        "feature_delete": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settingsTypefeat&action=featureDelete",
                        "feature_delete_dialog": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settingsTypefeat&action=featureDeleteDialog",
                        "feature_add_existing": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settingsTypefeat&action=featureAddExisting",
                        "feature_copy": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settingsTypefeat&action=featureDuplicate",
                        "feature_save": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settingsTypefeat&action=featureSave",
                        "feature_sort": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settingsTypefeat&action=featureSort",
                        "code_edit": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settingsTypefeat&action=codeEdit",
                        "code_delete": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settingsTypefeat&action=codeDelete",
                        "code_delete_dialog": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settingsTypefeat&action=codeDeleteDialog",
                        "code_copy": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settingsTypefeat&action=codeDuplicate",
                        "code_save": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settingsTypefeat&action=codeSave"
                    }
                });
            }

        })(jQuery);
    </script>
</div>
<?php }} ?>