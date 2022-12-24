<?php /* Smarty version Smarty-3.1.14, created on 2022-12-24 05:45:40
         compiled from "wa-apps\shop\templates\actions\category\ProductsCategory.html" */ ?>
<?php /*%%SmartyHeaderCode:89887943063a667d45773f8-39865993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24623ecbf6b9b39f0c84a67d31f7af86df6cd6fc' => 
    array (
      0 => 'wa-apps\\shop\\templates\\actions\\category\\ProductsCategory.html',
      1 => 1668667190,
      2 => 'file',
    ),
    'dcac5a7d40daa8b894532e93023c433b7da8467c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-apps\\shop\\templates\\actions\\category\\feature.template.html',
      1 => 1668667190,
      2 => 'file',
    ),
    '2e75a619ea667475f293838042b5264758a8d5f7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-apps\\shop\\templates\\actions\\category\\filter.template.html',
      1 => 1561471260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89887943063a667d45773f8-39865993',
  'function' => 
  array (
    'showFilters' => 
    array (
      'parameter' => 
      array (
        'filter_data' => 
        array (
        ),
        'settings' => 
        array (
        ),
        'allow' => true,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'settings' => 0,
    'parent' => 0,
    'frontend_url' => 0,
    'frontend_base_url' => 0,
    'flat_url_type' => 0,
    'event_dialog' => 0,
    'plugin_html' => 0,
    '_feature_values' => 0,
    '_start' => 0,
    '_end' => 0,
    '_type' => 0,
    'tag' => 0,
    'currency' => 0,
    '_badge' => 0,
    'routes' => 0,
    'domain_routes' => 0,
    'domain' => 0,
    'route' => 0,
    'url' => 0,
    'category_og' => 0,
    'editable_ogs_list' => 0,
    'editable_ogs' => 0,
    'og' => 0,
    'other_ogs' => 0,
    'k' => 0,
    'v' => 0,
    'wa' => 0,
    'wa_url' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_63a667d46a4db7_70910838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63a667d46a4db7_70910838')) {function content_63a667d46a4db7_70910838($_smarty_tpl) {?><div class="dialog large" id="s-product-category-dialog">
    <div class="dialog-background"></div>
    <form id="s-product-list-create-form" method="post"
          action="?module=category&action=save&category_id=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['settings']->value['id'])===null||$tmp==='' ? 0 : $tmp);?>
&parent_id=<?php if (!empty($_smarty_tpl->tpl_vars['parent']->value)){?><?php echo $_smarty_tpl->tpl_vars['parent']->value['id'];?>
<?php }else{ ?>0<?php }?>"
          enctype="multipart/form-data">
        <div class="dialog-window s-category-settings">
            <div class="dialog-content">
                <div class="dialog-content-indent">
                    
                    <h1>
                        <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['id'])){?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                            <i class="icon16 <?php if ($_smarty_tpl->tpl_vars['settings']->value['type']==shopCategoryModel::TYPE_STATIC){?>folder<?php }else{ ?>funnel<?php }?>"></i>
                            <span class="hint float-right">id: <?php echo $_smarty_tpl->tpl_vars['settings']->value['id'];?>
</span>
                        <?php }else{ ?>
                            Новая категория
                        <?php }?>
                    </h1>
                    <div class="fields form s-dialog-form">


                        
                        <div class="field-group">
                            <div class="field">
                                <div class="name">Название</div>
                                <div class="value">
                                    <input type="text" name="name" class="large long s-full-width-input js-product-list-name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                                </div>
                            </div>
                        </div>

                        
                        <div class="field-group">
                            <div class="field">
                                <div class="name">
                                    Ссылка
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['frontend_urls']){?>
                                    <?php  $_smarty_tpl->tpl_vars['frontend_url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['frontend_url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['frontend_urls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['frontend_url']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['frontend_url']->key => $_smarty_tpl->tpl_vars['frontend_url']->value){
$_smarty_tpl->tpl_vars['frontend_url']->_loop = true;
 $_smarty_tpl->tpl_vars['frontend_url']->index++;
 $_smarty_tpl->tpl_vars['frontend_url']->first = $_smarty_tpl->tpl_vars['frontend_url']->index === 0;
?>
                                        <div class="value no-shift<?php if (!$_smarty_tpl->tpl_vars['frontend_url']->first){?> small<?php }?>">
                                            <?php if ($_smarty_tpl->tpl_vars['frontend_url']->first){?>
                                                <span class="s-frontend-base-url" style="display:none;"><?php echo waIdna::dec($_smarty_tpl->tpl_vars['frontend_url']->value['base']);?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['frontend_url']->value['url'];?>
" class="s-frontend-base-url" target="_blank"><?php echo waIdna::dec($_smarty_tpl->tpl_vars['frontend_url']->value['base']);?>
<span id="s-settings-frontend-url"><?php echo waIdna::dec($_smarty_tpl->tpl_vars['settings']->value['url']);?>
</span><span class="slash"></span></a>
                                                <input type="text" id="s-settings-frontend-url-input" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['url'];?>
" name="url" style="display:none;">
                                                <a href="javascript:void(0);" class="small gray inline-link js-settings-frontend-url-edit-link"><i class="icon10 edit"></i><b><i>редактировать</i></b></a>
                                                <em class="errormsg"></em>
                                            <?php }else{ ?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['frontend_url']->value['url'];?>
" target="_blank"><?php echo waIdna::dec($_smarty_tpl->tpl_vars['frontend_url']->value['url']);?>
</a>
                                            <?php }?>
                                        </div>
                                    <?php } ?>
                                <?php }else{ ?>
                                    <div class="value">
                                        <?php echo $_smarty_tpl->tpl_vars['frontend_base_url']->value;?>
<?php if (!empty($_smarty_tpl->tpl_vars['parent']->value)&&!$_smarty_tpl->tpl_vars['flat_url_type']->value){?><?php echo $_smarty_tpl->tpl_vars['parent']->value['full_url'];?>
/<?php }?><input type="text" name="url" value="" class="js-product-list-url">/
                                        <span class="errormsg"></span>
                                    </div>
                                <?php }?>

                                <div class="value no-shift">
                                    <label>
                                        <input value="1" name="hidden" <?php if (!$_smarty_tpl->tpl_vars['settings']->value['status']&&$_smarty_tpl->tpl_vars['settings']->value['id']!==''){?>checked<?php }?> type="checkbox">
                                        Скрытая категория <span class="hint">Не показывать ссылки на эту категорию на витрине</span>
                                    </label>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['has_children']){?>
                                    <div class="value no-shift">
                                        <label>
                                            <input value="1" name="update_subcategories" type="checkbox">
                                            Применить ко всем подкатегориям
                                            <span class="hint">При сохранении этой категории ко всем ее подкатегориям будет применено выбранное выше значение настройки «Скрытая категория».</span>
                                        </label>
                                    </div>
                                <?php }?>

                            </div>
                        </div>

                        
                        <?php if (!empty($_smarty_tpl->tpl_vars['event_dialog']->value)){?><?php  $_smarty_tpl->tpl_vars['plugin_html'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin_html']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['event_dialog']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin_html']->key => $_smarty_tpl->tpl_vars['plugin_html']->value){
$_smarty_tpl->tpl_vars['plugin_html']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin_id']->value = $_smarty_tpl->tpl_vars['plugin_html']->key;
?><?php echo $_smarty_tpl->tpl_vars['plugin_html']->value;?>
<?php } ?><?php }?>


                        
                        <?php if (empty($_smarty_tpl->tpl_vars['settings']->value['id'])){?>
                            <div class="field-group">
                                <div class="field">
                                    <div class="name">
                                        Тип
                                    </div>
                                    <div class="value no-shift">
                                        <ul class="thumbs li150px s-list-type-selector">
                                            <?php if (ifset($_smarty_tpl->tpl_vars['parent']->value,'type',0)!=1){?>
                                                <li style="margin-bottom: 0;">
                                                    <label>
                                                        <input id="s-type-static" type="radio" name="type" value="0" checked="checked">
                                                        <strong>Категория</strong>
                                                        <i class="icon16 folder"></i>
                                                        <br><br>
                                                        <span class="hint">Статическая категория, в которой товары добавляются и упорядочиваются вручную.</span>
                                                    </label>
                                                </li>
                                            <?php }?>
                                            <li style="margin-bottom: 0;">
                                                <label>
                                                    <input id="s-type-dynamic" type="radio" name="type" value="1" <?php if (ifset($_smarty_tpl->tpl_vars['parent']->value,'type',0)==1){?>checked="checked"<?php }?>>
                                                    <strong>Фильтр</strong>
                                                    <i class="icon16 funnel"></i>
                                                    <br><br>
                                                    <span class="hint">Динамическая категория, формируемая в соответствии с параметрами поиска.</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php }else{ ?>
                            <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['type'];?>
">
                        <?php }?>

                        
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['id']===''||$_smarty_tpl->tpl_vars['settings']->value['type']==shopCategoryModel::TYPE_DYNAMIC){?>
                            <div class="field-group js-category-dynamic-settings" <?php if ($_smarty_tpl->tpl_vars['settings']->value['id']===''&&empty($_smarty_tpl->tpl_vars['parent']->value)){?> style="display: none;" <?php }?>>
                                <div class="field">
                                    <div class="name">
                                        Параметры фильтрации товаров
                                    </div>
                                    <div class="value">
                                        <table class="zebra s-condition-block js-condition-list">
                                            <tbody class="js-feature-insertion-block">
                                            <tr style="<?php if (empty($_smarty_tpl->tpl_vars['parent']->value)){?>display: none;<?php }?>">
                                                <td class="min-width" style="vertical-align: top;">
                                                    <input type="checkbox" disabled="disabled" checked="checked" class="js-always-disabled">
                                                </td>
                                                <td colspan="3">
                                                    <?php echo sprintf('Только в категории «<strong>%s</strong>»',(($tmp = @$_smarty_tpl->tpl_vars['parent']->value['name'])===null||$tmp==='' ? '' : $tmp));?>

                                                    <p class="hint" style="margin-bottom: 0;">Динамическая фильтрация производится только среди товаров родительской категории.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="min-width: 200px;width: 32%;">
                                                    <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['create_datetime'])){?>
                                                        <label><input class="js-condition-create-datetime-interval s-condition" type="checkbox" name="condition[create_datetime]" value="create_datetime" checked>
                                                            Дата добавления
                                                        </label>
                                                    <?php }else{ ?>
                                                        Дата добавления
                                                    <?php }?>
                                                </td>
                                                <td colspan="2">
                                                    <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['create_datetime'])){?>
                                                        <?php $_smarty_tpl->tpl_vars['_feature_values'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['conditions']['create_datetime'], null, 0);?>

                                                        <?php $_smarty_tpl->tpl_vars['_start'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['_feature_values']->value,"begin",null), null, 0);?>
                                                        <input type="hidden" name="create_datetime[0]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_start']->value)===null||$tmp==='' ? '' : $tmp);?>
">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['_start']->value)){?>
                                                            <?php $_smarty_tpl->tpl_vars['_start'] = new Smarty_variable(waDateTime::format('date',strtotime($_smarty_tpl->tpl_vars['_start']->value)), null, 0);?>
                                                        <?php }?>

                                                        <?php $_smarty_tpl->tpl_vars['_end'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['_feature_values']->value,"end",null), null, 0);?>
                                                        <input type="hidden" name="create_datetime[1]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_end']->value)===null||$tmp==='' ? '' : $tmp);?>
">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['_end']->value)){?>
                                                            <?php $_smarty_tpl->tpl_vars['_end'] = new Smarty_variable(waDateTime::format('date',strtotime($_smarty_tpl->tpl_vars['_end']->value)), null, 0);?>
                                                        <?php }?>

                                                        <div style="margin-bottom: 4px;">
                                                            <?php if (!empty($_smarty_tpl->tpl_vars['_start']->value)&&!empty($_smarty_tpl->tpl_vars['_end']->value)){?>
                                                                <?php echo $_smarty_tpl->tpl_vars['_start']->value;?>
 – <?php echo $_smarty_tpl->tpl_vars['_end']->value;?>

                                                            <?php }elseif(!empty($_smarty_tpl->tpl_vars['_start']->value)){?>
                                                                ≥ <?php echo $_smarty_tpl->tpl_vars['_start']->value;?>

                                                            <?php }elseif(!empty($_smarty_tpl->tpl_vars['_end']->value)){?>
                                                                ≤ <?php echo $_smarty_tpl->tpl_vars['_end']->value;?>

                                                            <?php }else{ ?>
                                                                Дата не задана.
                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                    <div class="hint">Значение можно настроить в новом разделе.</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="min-width: 200px;width: 32%;">
                                                    <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['edit_datetime'])){?>
                                                        <label><input class="js-condition-edit-datetime-interval s-condition" type="checkbox" name="condition[edit_datetime]" value="edit_datetime" checked>
                                                            Дата последнего изменения
                                                        </label>
                                                    <?php }else{ ?>
                                                        Дата последнего изменения
                                                    <?php }?>
                                                </td>
                                                <td colspan="2">
                                                    <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['edit_datetime'])){?>
                                                        <?php $_smarty_tpl->tpl_vars['_feature_values'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['conditions']['edit_datetime'], null, 0);?>

                                                        <?php $_smarty_tpl->tpl_vars['_start'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['_feature_values']->value,"begin",null), null, 0);?>
                                                        <input type="hidden" name="edit_datetime[0]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_start']->value)===null||$tmp==='' ? '' : $tmp);?>
">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['_start']->value)){?>
                                                            <?php $_smarty_tpl->tpl_vars['_start'] = new Smarty_variable(waDateTime::format('date',strtotime($_smarty_tpl->tpl_vars['_start']->value)), null, 0);?>
                                                        <?php }?>

                                                        <?php $_smarty_tpl->tpl_vars['_end'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['_feature_values']->value,"end",null), null, 0);?>
                                                        <input type="hidden" name="edit_datetime[1]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_end']->value)===null||$tmp==='' ? '' : $tmp);?>
">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['_end']->value)){?>
                                                            <?php $_smarty_tpl->tpl_vars['_end'] = new Smarty_variable(waDateTime::format('date',strtotime($_smarty_tpl->tpl_vars['_end']->value)), null, 0);?>
                                                        <?php }?>

                                                        <div style="margin-bottom: 4px;">
                                                            <?php if (!empty($_smarty_tpl->tpl_vars['_start']->value)&&!empty($_smarty_tpl->tpl_vars['_end']->value)){?>
                                                                <?php echo $_smarty_tpl->tpl_vars['_start']->value;?>
 – <?php echo $_smarty_tpl->tpl_vars['_end']->value;?>

                                                            <?php }elseif(!empty($_smarty_tpl->tpl_vars['_start']->value)){?>
                                                                ≥ <?php echo $_smarty_tpl->tpl_vars['_start']->value;?>

                                                            <?php }elseif(!empty($_smarty_tpl->tpl_vars['_end']->value)){?>
                                                                ≤ <?php echo $_smarty_tpl->tpl_vars['_end']->value;?>

                                                            <?php }else{ ?>
                                                                Дата не задана.
                                                            <?php }?>
                                                        </div>
                                                    <?php }?>
                                                    <div class="hint">Значение можно настроить в новом разделе.</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="min-width: 200px;width: 32%;">
                                                    <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['type'])){?>
                                                        <label><input class="js-condition-type s-condition" type="checkbox" name="condition[type]" value="type" checked>
                                                            Тип товаров
                                                        </label>
                                                    <?php }else{ ?>
                                                        Тип товаров
                                                    <?php }?>
                                                </td>
                                                <td colspan="2">
                                                    <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['type'])&&!empty($_smarty_tpl->tpl_vars['settings']->value['conditions']['type']['options'])){?>
                                                        <div style="margin-bottom: 4px;">
                                                            <?php  $_smarty_tpl->tpl_vars['_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['conditions']['type']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_type']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_type']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_type']->key => $_smarty_tpl->tpl_vars['_type']->value){
$_smarty_tpl->tpl_vars['_type']->_loop = true;
 $_smarty_tpl->tpl_vars['_type']->iteration++;
 $_smarty_tpl->tpl_vars['_type']->last = $_smarty_tpl->tpl_vars['_type']->iteration === $_smarty_tpl->tpl_vars['_type']->total;
?>
                                                                <span class="s-type"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_type']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<input type="hidden" name="type[]" value="<?php echo $_smarty_tpl->tpl_vars['_type']->value['id'];?>
"></span><?php if (!$_smarty_tpl->tpl_vars['_type']->last){?>,<?php }?>
                                                            <?php } ?>
                                                        </div>
                                                    <?php }?>
                                                    <div class="hint">Значение можно настроить в новом разделе.</div>
                                                </td>
                                            </tr>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['cloud'])){?>
                                                <tr>
                                                    <td colspan="2">
                                                        <label><input class="js-condition-tag js-condition-tag s-condition" type="checkbox" name="condition[tag]" value="tag"
                                                               <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['conditions']['tag']['values'])){?>checked<?php }?>>
                                                        Теги</label>
                                                    </td>

                                                    <td colspan="2">
                                                        <div class="js-condition-tag-block block double-padded align-center">
                                                            <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['cloud']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                                                                <label>
                                                                     <span class="s-tag nowrap" style="font-size: <?php echo $_smarty_tpl->tpl_vars['tag']->value['size'];?>
%;" data-id="<?php echo $_smarty_tpl->tpl_vars['tag']->value['id'];?>
">
                                                                         <input type="checkbox" class="js-tag-value" name="tag[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
                                                                                <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['conditions']['tag']['values'])&&in_array($_smarty_tpl->tpl_vars['tag']->value['name'],$_smarty_tpl->tpl_vars['settings']->value['conditions']['tag']['values'])){?>checked<?php }?>> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                                                     </span>
                                                                </label>
                                                            <?php } ?>
                                                            <span class="errormsg"></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php }?>
                                            <tr>
                                                <td colspan="2" style="min-width: 200px;width: 32%;">
                                                    <label><input class="js-condition-rating-interval s-condition" type="checkbox" name="condition[rating]" value="rating"
                                                                  <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['rating'])){?>checked<?php }?>>
                                                        Рейтинг</label>
                                                </td>
                                                <td colspan="2">
                                                    <div class="js-feature-slider-rating s-feature-slider-block" data-slider="range" data-code="rating">
                                                        от
                                                        <input type="text" name="rating[0]" class="js-begin short" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['rating']['begin'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['rating']['begin'];?>
<?php }else{ ?>0<?php }?>"
                                                               value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['rating']['begin'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['rating']['begin'];?>
<?php }else{ ?>0<?php }?>">
                                                        до
                                                        <input type="text" name="rating[1]" class="js-end short" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['rating']['end'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['rating']['end'];?>
<?php }else{ ?>&infin;<?php }?>"
                                                               value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['rating']['end'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['rating']['end'];?>
<?php }?>">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="min-width: 200px;width: 32%;">
                                                    <label><input class="js-condition-price-interval s-condition" type="checkbox" name="condition[price]" value="price"
                                                                  <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['price'])){?>checked<?php }?>>
                                                        Цена</label>
                                                </td>
                                                <td colspan="2">
                                                    <div class="js-feature-slider-base-price s-feature-slider-block" data-slider="range" data-code="base-price">
                                                        от
                                                        <input type="text" name="price[0]" class="js-begin short" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['price']['begin'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['price']['begin'];?>
<?php }else{ ?>0<?php }?>"
                                                               value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['price']['begin'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['price']['begin'];?>
<?php }else{ ?>0<?php }?>">
                                                        до
                                                        <input type="text" name="price[1]" class="js-end short" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['price']['end'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['price']['end'];?>
<?php }else{ ?>&infin;<?php }?>"
                                                               value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['price']['end'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['price']['end'];?>
<?php }?>">
                                                        <?php echo $_smarty_tpl->tpl_vars['currency']->value;?>

                                                        <div class="js-range-slider"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="min-width: 200px;width: 32%;">
                                                    <label><input class="js-condition-compare-price-interval s-condition" type="checkbox" name="condition[compare_price]" value="compare_price"
                                                                  <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['compare_price'])){?>checked<?php }?>>
                                                        Зачеркнутая цена</label>
                                                </td>
                                                <td colspan="2">
                                                    <div class="js-feature-slider-compare-price s-feature-slider-block" data-slider="range" data-code="compare_price">
                                                        от
                                                        <input type="text" name="compare_price[0]" class="js-begin short" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['compare_price']['begin'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['compare_price']['begin'];?>
<?php }else{ ?>0<?php }?>"
                                                               value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['compare_price']['begin'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['compare_price']['begin'];?>
<?php }else{ ?>0<?php }?>">
                                                        до
                                                        <input type="text" name="compare_price[1]" class="js-end short" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['compare_price']['end'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['compare_price']['end'];?>
<?php }else{ ?>&infin;<?php }?>"
                                                               value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['compare_price']['end'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['compare_price']['end'];?>
<?php }?>">
                                                        <?php echo $_smarty_tpl->tpl_vars['currency']->value;?>

                                                        <div class="js-range-slider"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="min-width: 200px;width: 32%;">
                                                    <label><input class="js-condition-purchase-price-interval s-condition" type="checkbox" name="condition[purchase_price]" value="purchase_price"
                                                                  <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['purchase_price'])){?>checked<?php }?>>
                                                        Закупочная цена</label>
                                                </td>
                                                <td colspan="2">
                                                    <div class="js-feature-slider-purchase-price s-feature-slider-block" data-slider="range" data-code="purchase_price">
                                                        от
                                                        <input type="text" name="purchase_price[0]" class="js-begin short" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['purchase_price']['begin'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['purchase_price']['begin'];?>
<?php }else{ ?>0<?php }?>"
                                                               value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['purchase_price']['begin'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['purchase_price']['begin'];?>
<?php }else{ ?>0<?php }?>">
                                                        до
                                                        <input type="text" name="purchase_price[1]" class="js-end short" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['purchase_price']['end'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['purchase_price']['end'];?>
<?php }else{ ?>&infin;<?php }?>"
                                                               value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['purchase_price']['end'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['purchase_price']['end'];?>
<?php }?>">
                                                        <?php echo $_smarty_tpl->tpl_vars['currency']->value;?>

                                                        <div class="js-range-slider"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="min-width: 200px;width: 32%;">
                                                    <label><input class="js-condition-count-interval s-condition" type="checkbox" name="condition[count]" value="count"
                                                                  <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['count'])){?>checked<?php }?>>
                                                        В наличии</label>
                                                </td>
                                                <td colspan="2">
                                                    <div class="js-feature-slider-count s-feature-slider-block" data-slider="range" data-code="count">
                                                        от
                                                        <input type="text" name="count[0]" class="js-begin short" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['count']['begin'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['count']['begin'];?>
<?php }else{ ?>0<?php }?>"
                                                               value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['count']['begin'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['count']['begin'];?>
<?php }else{ ?>0<?php }?>">
                                                        до
                                                        <input type="text" name="count[1]" class="js-end short" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['count']['end'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['count']['end'];?>
<?php }else{ ?>&infin;<?php }?>"
                                                               value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['count']['end'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['count']['end'];?>
<?php }?>">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="min-width: 200px;width: 32%;">
                                                    <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['badge'])){?>
                                                        <label><input class="js-condition-edit-badge s-condition" type="checkbox" name="condition[badge]" value="badge" checked>
                                                            Наклейка
                                                        </label>
                                                    <?php }else{ ?>
                                                        Наклейка
                                                    <?php }?>
                                                </td>
                                                <td colspan="2">
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['conditions']['badge'])&&!empty($_smarty_tpl->tpl_vars['settings']->value['conditions']['badge']['values'])){?>
                                                        <?php  $_smarty_tpl->tpl_vars['_badge'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_badge']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['conditions']['badge']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_badge']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_badge']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_badge']->key => $_smarty_tpl->tpl_vars['_badge']->value){
$_smarty_tpl->tpl_vars['_badge']->_loop = true;
 $_smarty_tpl->tpl_vars['_badge']->iteration++;
 $_smarty_tpl->tpl_vars['_badge']->last = $_smarty_tpl->tpl_vars['_badge']->iteration === $_smarty_tpl->tpl_vars['_badge']->total;
?>
                                                            <span><?php if ($_smarty_tpl->tpl_vars['_badge']->value==="new"){?>New!<?php }elseif($_smarty_tpl->tpl_vars['_badge']->value==="lowprice"){?>Скидка!<?php }elseif($_smarty_tpl->tpl_vars['_badge']->value==="bestseller"){?>Хит!<?php }else{ ?>Своя наклейка<?php }?><input type="hidden" name="badge[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_badge']->value, ENT_QUOTES, 'UTF-8', true);?>
"></span><?php if (!$_smarty_tpl->tpl_vars['_badge']->last){?>,<?php }?>
                                                        <?php } ?>
                                                    <?php }?>
                                                    <div class="hint" style="margin-top: 4px;">Значение можно настроить в новом разделе.</div>
                                                </td>
                                            </tr>
                                            <?php /*  Call merged included template "./feature.template.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./feature.template.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '89887943063a667d45773f8-39865993');
content_63a667d46126f1_53296566($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./feature.template.html" */?>
                                            </tbody>
                                        </table>
                                        <table class="js-autocomplete-wrapper" style="margin-top: 10px; margin-left: 4px;">
                                            <tbody>
                                                <tr <?php if ($_smarty_tpl->tpl_vars['settings']->value['feature_count']<=0){?> style="display: none"<?php }?>>
                                                    <td>
                                                        <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['feature_count'])&&$_smarty_tpl->tpl_vars['settings']->value['feature_count']>0){?>
                                                            <a href="javascript:void(0);" class="js-show-more inline-link" data-offset="0" data-count="<?php echo $_smarty_tpl->tpl_vars['settings']->value['feature_count'];?>
">
                                                                <b><i>Показать все (<?php echo $_smarty_tpl->tpl_vars['settings']->value['feature_count'];?>
)</i></b>
                                                            </a>
                                                        <?php }?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="js-autocomplete-block">
                                                        <input type="text" class="js-autocomplete ui-autocomplete-input" autocomplete="off" placeholder="Начните писать для поиска" style="margin-top: 12px;">
                                                        <span class="errormsg"></span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- extra custom condition items -->
                                        <input type="hidden" name="custom_conditions" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['custom_conditions'];?>
">
                                    </div>
                                </div>
                            </div>
                        <?php }?>

                        
                        <div class="field-group">
                            <div class="field">
                                <div class="name">
                                    Сортировка товаров
                                </div>
                                <div class="value no-shift">
                                    <select name="sort_products" class="js-sort-type">
                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['type']==shopCategoryModel::TYPE_STATIC){?>
                                            <option value="" <?php if (empty($_smarty_tpl->tpl_vars['settings']->value['sort_products'])){?>selected="selected"<?php }?> <?php if ((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['include_sub_categories'])===null||$tmp==='' ? '0' : $tmp)){?>disabled="disabled"<?php }?>>Вручную (как задано в бекенде)</option>
                                        <?php }?>
                                        <option value="name ASC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='name ASC'){?>selected="selected"<?php }?>>По наименованию</option>
                                        <option value="price DESC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='price DESC'){?>selected="selected"<?php }?>>Самые дорогие</option>
                                        <option value="price ASC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='price ASC'){?>selected="selected"<?php }?>>Самые дешевые</option>
                                        <option value="rating DESC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='rating DESC'){?>selected="selected"<?php }?>>С высокой оценкой</option>
                                        <option value="rating ASC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='rating ASC'){?>selected="selected"<?php }?>>С низкой оценкой</option>
                                        <option value="total_sales DESC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='total_sales DESC'){?>selected="selected"<?php }?>>Хиты по сумме продаж</option>
                                        <option value="total_sales ASC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='total_sales ASC'){?>selected="selected"<?php }?>>Низкие продажи</option>
                                        <option value="count DESC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='count DESC'){?>selected="selected"<?php }?>>В наличии</option>
                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['type']==shopCategoryModel::TYPE_DYNAMIC){?>
                                            <option value="" <?php if (empty($_smarty_tpl->tpl_vars['settings']->value['sort_products'])){?>selected="selected"<?php }?>>Дата добавления</option>
                                        <?php }else{ ?>
                                            <option value="create_datetime DESC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='create_datetime DESC'){?>selected="selected"<?php }?>>Дата добавления
                                            </option>
                                        <?php }?>
                                        <option value="stock_worth DESC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='stock_worth DESC'){?>selected="selected"<?php }?>>Стоимость активов после реализации</option>
                                    </select>
                                    <label class="small">
                                        <input type="checkbox" name="enable_sorting" <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_sorting']){?>checked="checked"<?php }?> value="1"> Посетители сайта могут выбирать порядок сортировки
                                    </label>
                                    <br>
                                    <span class="hint"><?php echo sprintf_wp('Sorting option “%s” is available only when the “%s” setting is disabled.',_w('Manual (as defined in the backend)'),_w('Include products from subcategories'));?>
</span>
                                </div>
                            </div>
                        </div>

                        
                        <div class="field-group">
                            <div class="field">
                                <div class="name">
                                    Отображение
                                </div>
                                <div class="value no-shift"<?php if ($_smarty_tpl->tpl_vars['settings']->value['type']==shopCategoryModel::TYPE_DYNAMIC){?> style="display: none;"<?php }?>>
                                    <label>
                                        <input type="checkbox" class="js-subcategory-toggle" name="include_sub_categories" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['include_sub_categories'])===null||$tmp==='' ? '0' : $tmp)){?>checked="checked"<?php }?> value="1">
                                        Включить товары из подкатегорий
                                        <span class="hint">Включение этой настройки автоматически добавит в список товаров данной категории все товары из ее подкатегорий</span><br>
                                        <span class="hint js-sort-manual-message bold" <?php if (!$_smarty_tpl->tpl_vars['settings']->value['include_sub_categories']){?>style="display: none;"<?php }?>>Сортировка товаров вручную может работать непредсказуемо в этом режиме. Для получения стабильного результата выберите другой вариант сортировки.</span>
                                    </label>
                                </div>
                                <div class="value no-shift">
                                    <label>
                                        <input type="checkbox" name="allow_filter" value="1"
                                               class="js-category-allow-filter" <?php if ($_smarty_tpl->tpl_vars['settings']->value['allow_filter']){?>checked<?php }?>> Разрешить фильтрацию товаров
                                        <span class="hint">Фильтрация товаров позволит покупателям подбирать товары внутри этой категории по значениям характеристик, например, по цвету, производителю, цене</span>
                                    </label>
                                    <?php /*  Call merged included template "./filter.template.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./filter.template.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '89887943063a667d45773f8-39865993');
content_63a667d4666375_82212665($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./filter.template.html" */?>
                                </div>
                            </div>
                        </div>

                        
                        <div class="field js-product-category-visibility-block">
                            <div class="name">
                                Видимость категории
                            </div>
                            <div class="value no-shift">
                                <label><input type="radio" name="storefront" value="" <?php if (!$_smarty_tpl->tpl_vars['settings']->value['routes']){?>checked="checked"<?php }?>>
                                    Все витрины
                                </label>
                            </div>
                            <div class="value no-shift">
                                <label><input type="radio" name="storefront" value="route" <?php if ($_smarty_tpl->tpl_vars['settings']->value['routes']){?>checked="checked"<?php }?>>
                                    Только выбранные витрины
                                </label>
                            </div>
                            <?php if (!empty($_smarty_tpl->tpl_vars['routes']->value)){?>
                                <div class="value">

                                    <?php  $_smarty_tpl->tpl_vars['domain_routes'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['domain_routes']->_loop = false;
 $_smarty_tpl->tpl_vars['domain'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['routes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['domain_routes']->key => $_smarty_tpl->tpl_vars['domain_routes']->value){
$_smarty_tpl->tpl_vars['domain_routes']->_loop = true;
 $_smarty_tpl->tpl_vars['domain']->value = $_smarty_tpl->tpl_vars['domain_routes']->key;
?>
                                        <?php  $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['route']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['domain_routes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['route']->key => $_smarty_tpl->tpl_vars['route']->value){
$_smarty_tpl->tpl_vars['route']->_loop = true;
?>
                                            <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(($_smarty_tpl->tpl_vars['domain']->value).("/").($_smarty_tpl->tpl_vars['route']->value['url']), null, 0);?>
                                            <label>
                                                <input <?php if (in_array($_smarty_tpl->tpl_vars['url']->value,$_smarty_tpl->tpl_vars['settings']->value['routes'])){?>checked<?php }?> <?php if (!$_smarty_tpl->tpl_vars['settings']->value['routes']){?>disabled<?php }?> type="checkbox" name="routes[]"
                                                       value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"> <?php echo waIdna::dec($_smarty_tpl->tpl_vars['url']->value);?>

                                            </label>
                                            <br>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['has_children']){?>
                                <div class="value" style="margin-top: 20px">
                                    <label class="italic">
                                        <input type="checkbox" name="propagate_visibility" value="1"> Применить новые настройки видимости к подкатегориям
                                    </label>
                                </div>
                            <?php }?>
                        </div>

                        
                        <div class="field-group">
                            <div class="field">
                                <div class="name">Заголовок</div>
                                <div class="value">
                                    <input value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['meta_title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"
                                           id="s-meta-title"
                                           name="meta_title"
                                           placeholder="<?php echo htmlspecialchars(shopCategoryModel::getDefaultMetaTitle($_smarty_tpl->tpl_vars['settings']->value), ENT_QUOTES, 'UTF-8', true);?>
" class="long bold">
                                </div>
                            </div>
                            <div class="field">
                                <div class="name">META Keywords</div>
                                <div class="value">
            <textarea name="meta_keywords"
                      placeholder="<?php echo htmlspecialchars(shopCategoryModel::getDefaultMetaKeywords($_smarty_tpl->tpl_vars['settings']->value), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['meta_keywords'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                </div>
                            </div>
                            <div class="field">
                                <div class="name">META Description</div>
                                <div class="value">
                                    <textarea name="meta_description"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['meta_description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                </div>
                            </div>
                        </div>

                        
                        <?php $_smarty_tpl->tpl_vars['category_og'] = new Smarty_variable(ifempty($_smarty_tpl->tpl_vars['settings']->value['og'],array()), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['editable_ogs_list'] = new Smarty_variable(explode(',','title,image,video,description,type'), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['editable_ogs'] = new Smarty_variable(array_intersect_key($_smarty_tpl->tpl_vars['category_og']->value,array_fill_keys($_smarty_tpl->tpl_vars['editable_ogs_list']->value,1)), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['other_ogs'] = new Smarty_variable(array_diff_key($_smarty_tpl->tpl_vars['category_og']->value,$_smarty_tpl->tpl_vars['editable_ogs']->value), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['og'] = new Smarty_variable($_smarty_tpl->tpl_vars['editable_ogs']->value, null, 0);?>

                        <div class="field-group" style="display: none;">
                            <div class="field">
                                <div class="name">Соцсети</div>
                                <div class="value no-shift">
                                    <label><input type="checkbox" class="js-category-social-metatag" <?php if (!$_smarty_tpl->tpl_vars['editable_ogs']->value){?> checked<?php }?>> Для соцсетей использовать эти же заголовки</label>
                                </div>
                            </div>

                            <div class="field">
                                <div class="name">Заголовок для соцсетей <span class="hint">og:title</span></div>
                                <div class="value">
                                    <input name="og[title]" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['og']->value['title']), ENT_QUOTES, 'UTF-8', true);?>
" class="long bold">
                                </div>
                            </div>
                            <div class="field">
                                <div class="name">URL изображения для соцсетей <span class="hint">og:image</span></div>
                                <div class="value">
                                    <input name="og[image]" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['og']->value['image']), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="" class="long">
                                    <br>
                                    <span class="hint">Если адрес не указан явно, соцсеть автоматически выберет одно из изображений на странице.</span>
                                </div>
                            </div>
                            <div class="field">
                                <div class="name">URL видео для соцсетей <span class="hint">og:video</span></div>
                                <div class="value">
                                    <input name="og[video]" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['og']->value['video']), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="" class="long">
                                </div>
                            </div>
                            <div class="field">
                                <div class="name">Описание для соцсетей <span class="hint">og:description</span></div>
                                <div class="value">
                                    <textarea name="og[description]"><?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['og']->value['description']), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                </div>
                            </div>
                            <div class="field">
                                <div class="name">Тип страницы для соцсетей <span class="hint">og:type</span></div>
                                <div class="value">
                                    <input name="og[type]" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['og']->value['type']), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="article">
                                </div>
                            </div>

                            <div class="field">
                                <div class="value">
                                    <p class="hint">Подробная информация о параметрах для соцсетей и их возможных значениях опубликована на сайте протокола <a href="http://ogp.me" target="_blank">Open Graph</a>.</p>
                                </div>
                            </div>

                            
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['other_ogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <input type="hidden" name="og[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8', true);?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php } ?>

                            
                            <?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['editable_ogs_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value){
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
                                <input type="hidden" name="og[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8', true);?>
]" value="" class="editable-og-disabler"<?php if ($_smarty_tpl->tpl_vars['editable_ogs']->value){?> disabled<?php }?>>
                            <?php } ?>
                        </div>

                        
                        <div class="field-group">
                            <div class="field description">
                                <div class="name">
                                    <label for="description">
                                        Описание
                                    </label>
                                </div>
                                <div class="value">
                                    <i class="icon16 loading"></i>
                                    <div class="s-editor-core-wrapper wa-editor-core-wrapper" style="display:none;">
                                        <ul class="wa-editor-wysiwyg-html-toggle s-wysiwyg-html-toggle">
                                            <li class="selected"><a class="wysiwyg" href="#">Визуальный редактор</a></li>
                                            <li><a class="html" href="#">HTML</a></li>
                                        </ul>
                                        <div>
                    <textarea style="display:none" id="s-category-description-content" name="description"
                              data-modification-wysiwyg-msg="Редактор WYSIWYG может изменить ваш HTML-код. Это необходимо для правильного форматирования текста. Код Smarty может быть сломан, и устаревшие HTML-теги могут быть заменены на современные. Вы действительно хотите переключиться на WYSIWYG-редактор?"
                    ><?php if (isset($_smarty_tpl->tpl_vars['settings']->value['description'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
                                            <div class="ace">
                                                <div id="wa-ace-editor-container"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="field-group">
                            <div class="field">
                                <div class="name">
                                    <label for="custom-settings">
                                        Дополнительные параметры
                                    </label>
                                </div>
                                <div class="value">
                                    <textarea name="params" rows="10" cols="5"><?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['params'])){?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if ($_smarty_tpl->tpl_vars['k']->value!='order'){?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo (htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true)).("\n");?>
<?php }?><?php } ?><?php }?></textarea><br>
                                    <span class="hint">Необязательный набор дополнительных параметров <em>key=value</em> (используются в шаблонах дизайна в виде <em>&#123;$category.params.key&#125;</em>). Каждую пару key=value указывайте с новой строки.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <input type="submit" value="Сохранить" class="button green">
                    или <a class="cancel" href="#">отмена</a>
                    <span class="s-category-error errormsg js-category-error"></span>
                </div>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

        </div>
    </form>
</div>

<script type="text/javascript">
    //VARS NEED TO wysiwyg and
    var wa_url = '<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
';
    var wa_app = 'shop';
    var wa_lang = '<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
';
    (function ($) {
        new shopDialogProductsCategory({
            $wrapper: $('#s-product-category-dialog'),
            category_id: <?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['id'])===null||$tmp==='' ? "new" : $tmp));?>
,
            category_type: <?php echo json_encode($_smarty_tpl->tpl_vars['settings']->value['type']);?>
,
            account_name: "<?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
",
            filter_count: <?php echo $_smarty_tpl->tpl_vars['settings']->value['filter_count'];?>
,
            templates: {
               filter_element_html:<?php echo json_encode(Smarty::$_smarty_vars['capture']['_filterElement']);?>

            },
            texts: {
                show_all: <?php echo json_encode(_w('Show all'));?>

            }
        });
    })(jQuery);
</script>

<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-12-24 05:45:40
         compiled from "C:\OpenServer\domains\elmarco\elmarcosite\wa-apps\shop\templates\actions\category\feature.template.html" */ ?>
<?php if ($_valid && !is_callable('content_63a667d46126f1_53296566')) {function content_63a667d46126f1_53296566($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-system\\vendors\\smarty3\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_regex_replace')) include 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-system\\vendors\\smarty3\\plugins\\modifier.regex_replace.php';
if (!is_callable('smarty_modifier_replace')) include 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-system\\vendors\\smarty3\\plugins\\modifier.replace.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['features'])){?>
    <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_smarty_tpl->tpl_vars['f_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
 $_smarty_tpl->tpl_vars['f_id']->value = $_smarty_tpl->tpl_vars['f']->key;
?>
        <?php $_smarty_tpl->tpl_vars['conditions_feature'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['settings']->value,'conditions','feature',array()), null, 0);?>
        <tr>
            <td colspan="2" class="js-condition-feature-names">
                <label>
                    <input class="js-condition-feature s-condition" type="checkbox" name="" data-feature_id="<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" value=""
                           <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['feature'][$_smarty_tpl->tpl_vars['f']->value['code']])){?>checked<?php }?>>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                </label>
                <span class="hint"><?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
</span>
                <?php if ((isset($_smarty_tpl->tpl_vars['f']->value['status'])&&$_smarty_tpl->tpl_vars['f']->value['status']=='private')){?><i class="icon16 ss visibility" title="Видна только в бекенде"></i><?php }?>
            </td>
            <td colspan="2">
                <div class="js-condition-feature-block s-feature-block-values">

                    
                    <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['id'])){?>
                        <?php $_smarty_tpl->tpl_vars['_feature_values'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['conditions_feature']->value,$_smarty_tpl->tpl_vars['f']->value['code'],null), null, 0);?>

                        <div class="js-feature-list-value">
                            
                            <?php if (($_smarty_tpl->tpl_vars['f']->value['type']==="date"||$_smarty_tpl->tpl_vars['f']->value['type']==="range.date")){?>
                                <?php $_smarty_tpl->tpl_vars['_start'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['_feature_values']->value,"begin",null), null, 0);?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['_start']->value)){?>
                                    <input type="hidden" name="condition[features][<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
][values][begin]" value="<?php echo $_smarty_tpl->tpl_vars['_start']->value;?>
">
                                    <?php $_smarty_tpl->tpl_vars['_start'] = new Smarty_variable(waDateTime::format('date',strtotime($_smarty_tpl->tpl_vars['_start']->value)), null, 0);?>
                                <?php }?>

                                <?php $_smarty_tpl->tpl_vars['_end'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['_feature_values']->value,"end",null), null, 0);?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['_end']->value)){?>
                                    <input type="hidden" name="condition[features][<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
][values][end]" value="<?php echo $_smarty_tpl->tpl_vars['_end']->value;?>
">
                                    <?php $_smarty_tpl->tpl_vars['_end'] = new Smarty_variable(waDateTime::format('date',strtotime($_smarty_tpl->tpl_vars['_end']->value)), null, 0);?>
                                <?php }?>

                                <div>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['_start']->value)&&!empty($_smarty_tpl->tpl_vars['_end']->value)){?>
                                        <?php echo $_smarty_tpl->tpl_vars['_start']->value;?>
 – <?php echo $_smarty_tpl->tpl_vars['_end']->value;?>

                                    <?php }elseif(!empty($_smarty_tpl->tpl_vars['_start']->value)){?>
                                        ≥ <?php echo $_smarty_tpl->tpl_vars['_start']->value;?>

                                    <?php }elseif(!empty($_smarty_tpl->tpl_vars['_end']->value)){?>
                                        ≤ <?php echo $_smarty_tpl->tpl_vars['_end']->value;?>

                                    <?php }else{ ?>
                                        Дата не задана.
                                    <?php }?>
                                </div>
                                <div class="hint" style="margin-top: 4px;">Значение можно настроить в новом разделе.</div>

                            
                            <?php }else{ ?>
                                
                                <?php if (substr($_smarty_tpl->tpl_vars['f']->value['type'],0,5)=='range'||$_smarty_tpl->tpl_vars['_feature_values']->value["type"]==="range"){?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['_feature_values']->value)){?>
                                        <div class="js-feature-slider-<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
 s-feature-slider-block" data-slider="range" data-code="<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
">
                                            <?php $_smarty_tpl->tpl_vars['begin'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['_feature_values']->value,'begin',null), null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['end'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['_feature_values']->value,'end',null), null, 0);?>

                                            от
                                            <input type="text" class="js-begin" name="condition[features][<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
][values][begin]" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['begin']->value)){?><?php echo $_smarty_tpl->tpl_vars['begin']->value;?>
<?php }?>"
                                                   value="<?php if (isset($_smarty_tpl->tpl_vars['begin']->value)){?><?php echo $_smarty_tpl->tpl_vars['begin']->value;?>
<?php }?>">
                                            до
                                            <input type="text" class="js-end" name="condition[features][<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
][values][end]" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['end']->value)){?><?php echo $_smarty_tpl->tpl_vars['end']->value;?>
<?php }?>"
                                                   value="<?php if (isset($_smarty_tpl->tpl_vars['end']->value)){?><?php echo $_smarty_tpl->tpl_vars['end']->value;?>
<?php }?>">

                                            <?php $_smarty_tpl->tpl_vars['_unit_id'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['_feature_values']->value,'unit',null), null, 0);?>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['_unit_id']->value)){?>
                                                <?php $_smarty_tpl->tpl_vars['_unit'] = new Smarty_variable(shopDimension::getUnit($_smarty_tpl->tpl_vars['f']->value['type'],$_smarty_tpl->tpl_vars['_unit_id']->value), null, 0);?>
                                                <input type="hidden" name="condition[features][<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
][values][unit]" value="<?php echo $_smarty_tpl->tpl_vars['_unit_id']->value;?>
">
                                            <?php }else{ ?>
                                                <?php $_smarty_tpl->tpl_vars['_unit'] = new Smarty_variable(shopDimension::getBaseUnit($_smarty_tpl->tpl_vars['f']->value['type']), null, 0);?>
                                            <?php }?>

                                            <?php if (!empty($_smarty_tpl->tpl_vars['_unit']->value)&&isset($_smarty_tpl->tpl_vars['_unit']->value['title'])){?>
                                                <span class="s-unit"><?php echo $_smarty_tpl->tpl_vars['_unit']->value['title'];?>
</span>
                                            <?php }?>

                                            <div class="js-range-slider"></div>
                                        </div>
                                    <?php }?>

                                <?php }elseif(!empty($_smarty_tpl->tpl_vars['f']->value['values'])){?>
                                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                        <label>
                                            <input class="s-condition js-feature-value" type="checkbox" data-f_val="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
" name="condition[features][<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
][values][]" value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
"
                                                   checked="checked">
                                            <?php if ($_smarty_tpl->tpl_vars['f']->value['type']=='color'){?>
                                                <i class="icon16 color s-color-icon" style="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['style'])===null||$tmp==='' ? '' : $tmp);?>
"></i>
                                            <?php }?>
                                            <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value,64,'...',true), ENT_QUOTES, 'UTF-8', true);?>

                                        </label>
                                    <?php } ?>
                                    <?php if ($_smarty_tpl->tpl_vars['f']->value['count']>count($_smarty_tpl->tpl_vars['f']->value['values'])){?>
                                        <a href="javascript:void(0);" class="js-show-all-feature inline-link" data-feature_id="<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
"><b><i>Показать все</i></b></a>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        </div>

                        <input type="hidden" name="condition[features][<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
][type]" value="<?php echo $_smarty_tpl->tpl_vars['f']->value['type'];?>
">
                        <span class="errormsg"></span>
                    <?php }?>
                </div>
            </td>
        </tr>
    <?php } ?>
<?php }?>

<!-- <?php $_smarty_tpl->_capture_stack[0][] = array("template_feature_field_values", null, null); ob_start(); ?> feature field values jquery template -->

    {% var count = 0; %}
    {% if (o.feature.type === 'date' || o.feature.type === 'range.date') { %}
        <div style="margin-top: -15px;">Дата не задана.</div>
        <div class="hint" style="margin-top: 4px;">Значение можно настроить в новом разделе.</div>
    {% } else { %}
        {% for (var v_id in o.feature.values) { %}
            {% if (o.feature.values.hasOwnProperty(v_id)) { %}
                {% if (o.feature.type.substr(0, 5) !== 'range') { %}
                    <!-- checkbox feature values template -->
                    <label {% if (!o.show_all && count>= 7) { %}class="js-feature-hidden" style="display: none;"{% } %}>
                        <input class="s-condition js-feature-value" type="checkbox" name="condition[features][{%=o.feature.code%}][values][]" value="{%=v_id%}" {% if (!o.default_checked) {
                               %}disabled="disabled" {% } %}>
                        {% if (o.feature.type == 'color') { %}
                        <i class="icon16 color s-color-icon" style="background:{%=o.feature.values[v_id].hex%};"></i>
                        {%=o.feature.values[v_id].value%}
                        {% } else { %}
                        {%=o.feature.values[v_id]%}
                        {% } %}
                    </label>
                    {% if (!o.show_all && count == 7) { %}
                    <a href="javascript:void(0);" class="js-show-all-feature inline-link"><b><i>Показать все</i></b></a>
                    {% } %}
                    {% count++; %}
                {% }else { %}
                    <!-- slider feature values template (only range) -->
                    <div class="js-feature-slider-{%=o.feature.code%} s-feature-slider-block">
                        {% if (o.feature.values[v_id]) { %}
                        от <input type="text" class="js-begin" name="condition[features][{%=o.feature.code%}][values][begin]"
                                        value="{% if (o.feature.values[v_id].begin) { %}{%=o.feature.values[v_id].begin%}{% }else{ %}0{% } %}"
                                        placeholder="{% if (o.feature.values[v_id].begin) { %}{%=o.feature.values[v_id].begin%}{% }else{ %}0{% } %}" {% if (!o.default_checked) {
                                        %}disabled="disabled" {% } %}>
                        до <input type="text" class="js-end" name="condition[features][{%=o.feature.code%}][values][end]"
                                      value="{% if (o.feature.values[v_id].end) { %}{%=o.feature.values[v_id].end%}{% }else{ %}100{% } %}"
                                      placeholder="{% if (o.feature.values[v_id].end) { %}{%=o.feature.values[v_id].end%}{% }else{ %}100{% } %}" {% if (!o.default_checked) { %}disabled="disabled"
                                      {% } %}>
                        {% if (o.feature.unit) { %}{%=o.feature.unit%}{% } %}
                        <div class="js-range-slider"></div>
                        {% } %}
                    </div>
                {% } %}
            {% } %}
        {% } %}
        {% if (!o.show_all) { %}
            <input type="hidden" name="condition[features][{%=o.feature.code%}][type]" value="{%=o.feature.type%}" {% if (!o.default_checked) { %}disabled="disabled" {% } %}>
            <span class="errormsg"></span>
        {% } %}
    {% } %}

<!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> -->

<script type="text/x-jquery-tmpl" id="template_feature_field_values">
<?php echo smarty_modifier_replace(smarty_modifier_regex_replace(Smarty::$_smarty_vars['capture']["template_feature_field_values"],'@(^.*-->)|(<!\-\-.*$)@m',''),'</','<\/');?>

</script>

<!-- <?php $_smarty_tpl->_capture_stack[0][] = array("template_feature_field", null, null); ob_start(); ?> feature field jquery template  -->
<tr>
    <td colspan="2">
        <label><input class="js-condition-feature s-condition" type="checkbox" name="" data-loading="ok" data-feature_id="{%=o.feature.id%}" value="" {% if (o.default_checked) {
                      %}checked="checked" {% } %}> {%=o.feature.name%}</label>
        <span class="hint">{%=o.feature.code%}</span>
        {% if (o.feature.status == 'private') { %}<i class="icon16 ss visibility" title="Видна только в бекенде"></i>{% } %}
    </td>
    <td colspan="2">
        <div class="js-condition-feature-block s-feature-block-values" {% if (!o.show_all && !o.default_checked) { %}style="display:none" {% } %}>
            <?php echo Smarty::$_smarty_vars['capture']["template_feature_field_values"];?>

        </div>
    </td>
</tr>
<!--  <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> -->

<script type="text/x-jquery-tmpl" id="template_feature_field">
    <?php echo smarty_modifier_replace(smarty_modifier_regex_replace(Smarty::$_smarty_vars['capture']["template_feature_field"],'@(^.*-->)|(<!\-\-.*$)@m',''),'</','<\/');?>


</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-12-24 05:45:40
         compiled from "C:\OpenServer\domains\elmarco\elmarcosite\wa-apps\shop\templates\actions\category\filter.template.html" */ ?>
<?php if ($_valid && !is_callable('content_63a667d4666375_82212665')) {function content_63a667d4666375_82212665($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_showFilters')) {
    function smarty_template_function_showFilters($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['showFilters']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value){
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
        <li title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['code'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" class="js-filter-item <?php if (!'allow'){?>unsortable<?php }?>">
            <i class="icon16 sort"></i>
            <label>
                <input type="checkbox" name="filter[]" data-filter-id="<?php echo $_smarty_tpl->tpl_vars['filter']->value['id'];?>
" class="js-filter-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['id'];?>
"
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['type']==1){?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['conditions']['feature'][$_smarty_tpl->tpl_vars['filter']->value['code']]['values'])){?>
                                <?php if (count($_smarty_tpl->tpl_vars['settings']->value['conditions']['feature'][$_smarty_tpl->tpl_vars['filter']->value['code']]['values'])<2){?>
                                    data-disabled="1" disabled="disabled" title="Фильтрация по этой характеристике недоступна, потому что для нее выбрано только одно значение в секции «Параметры фильтрации товаров»."
                                <?php }?>
                            <?php }?>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['filter']->value['id']=='price'&&!$_smarty_tpl->tpl_vars['settings']->value['allow_filter'])||$_smarty_tpl->tpl_vars['allow']->value){?>checked="checked"<?php }?>>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['code'])){?>
                    <span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['type_name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</span>
                <?php }?>
            </label>
        </li>
    <?php } ?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<div class="block js-category-filter" <?php if (!$_smarty_tpl->tpl_vars['settings']->value['allow_filter']){?>style="display:none;"<?php }?>>
    <ul class="menu-v compact small js-category-filters">
        
        <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['allow_filter_data'])){?>
            <?php smarty_template_function_showFilters($_smarty_tpl,array('filter_data'=>$_smarty_tpl->tpl_vars['settings']->value['allow_filter_data'],'settings'=>$_smarty_tpl->tpl_vars['settings']->value));?>

        <?php }?>

        <?php smarty_template_function_showFilters($_smarty_tpl,array('filter_data'=>$_smarty_tpl->tpl_vars['settings']->value['filter'],'settings'=>$_smarty_tpl->tpl_vars['settings']->value,'allow'=>false));?>

    </ul>

    <a href="#" class="js-show-more-filters inline-link"></a>
    <div class="js-filter-autocomplete-block">
        <input type="text" class="js-filter-autocomplete ui-autocomplete-input" autocomplete="off" placeholder="Начните писать для поиска" style="margin-top: 12px;">
    </div>
</div>

<?php $_smarty_tpl->_capture_stack[0][] = array('_filterElement', null, null); ob_start(); ?>
    <li title="%code" class="js-filter-item unsortable">
        <label>
            <input type="checkbox" name="filter[]" data-filter-id="%id" class="js-filter-checkbox" value="%id">
            %name
            <span class="hint">%code %type_name</span>
        </label>
    </li>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }} ?>