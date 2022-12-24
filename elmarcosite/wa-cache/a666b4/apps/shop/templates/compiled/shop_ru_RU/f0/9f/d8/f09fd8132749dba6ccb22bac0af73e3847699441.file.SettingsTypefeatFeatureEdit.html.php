<?php /* Smarty version Smarty-3.1.14, created on 2022-12-24 05:47:48
         compiled from "C:\OpenServer\domains\elmarco\elmarcosite\wa-apps\shop\templates\actions\settings\SettingsTypefeatFeatureEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:36336651363a6685431eb04-59093663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f09fd8132749dba6ccb22bac0af73e3847699441' => 
    array (
      0 => 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-apps\\shop\\templates\\actions\\settings\\SettingsTypefeatFeatureEdit.html',
      1 => 1644918912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36336651363a6685431eb04-59093663',
  'function' => 
  array (
    '_render_feature_value_item' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'feature' => 0,
    '_is_divider' => 0,
    '_active_kind_id' => 0,
    'kinds' => 0,
    '_active_kind' => 0,
    '_active_format_id' => 0,
    'formats' => 0,
    '_title' => 0,
    'product_id' => 0,
    'can_disable_sku' => 0,
    'selected_type' => 0,
    'all_types_is_checked' => 0,
    'types' => 0,
    '_type' => 0,
    '_all_is_checked' => 0,
    '_kind' => 0,
    '_is_active' => 0,
    '_format_id' => 0,
    '_active_format' => 0,
    '_format' => 0,
    'active_dimensions' => 0,
    '_dimension' => 0,
    '_button_text' => 0,
    'wa' => 0,
    'sku_values_count' => 0,
    '_skus_warning_message' => 0,
    'wa_app_url' => 0,
    '_kind_warning_message' => 0,
    '_feature_value_item' => 0,
    '_unit_select' => 0,
    '_color_widget' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_63a668543a7713_21681925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63a668543a7713_21681925')) {function content_63a668543a7713_21681925($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_is_divider'] = new Smarty_variable(false, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['feature']->value['type'])&&$_smarty_tpl->tpl_vars['feature']->value['type']==="divider"){?><?php $_smarty_tpl->tpl_vars['_is_divider'] = new Smarty_variable(true, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable(_w("New feature"), null, 0);?><?php $_smarty_tpl->tpl_vars['_button_text'] = new Smarty_variable(_w("Save"), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['feature']->value['id'])){?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable(sprintf("Характеристика «%s»",(($tmp = @$_smarty_tpl->tpl_vars['feature']->value['name'])===null||$tmp==='' ? '' : $tmp)), null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['_is_divider']->value)){?><?php if (!empty($_smarty_tpl->tpl_vars['feature']->value['name'])){?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable(sprintf("Заголовок группы характеристик «%s»",(($tmp = @$_smarty_tpl->tpl_vars['feature']->value['name'])===null||$tmp==='' ? '' : $tmp)), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable(_w("Feature group heading"), null, 0);?><?php }?><?php }?><?php $_smarty_tpl->tpl_vars['_active_kind_id'] = new Smarty_variable(null, null, 0);?><?php $_smarty_tpl->tpl_vars['_active_kind'] = new Smarty_variable(null, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['feature']->value['kind'])){?><?php $_smarty_tpl->tpl_vars['_active_kind_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['feature']->value['kind'], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_active_kind_id']->value)&&!empty($_smarty_tpl->tpl_vars['kinds']->value[$_smarty_tpl->tpl_vars['_active_kind_id']->value])){?><?php $_smarty_tpl->tpl_vars['_active_kind'] = new Smarty_variable($_smarty_tpl->tpl_vars['kinds']->value[$_smarty_tpl->tpl_vars['_active_kind_id']->value], null, 0);?><?php }?><?php }?><?php $_smarty_tpl->tpl_vars['_active_format_id'] = new Smarty_variable(null, null, 0);?><?php $_smarty_tpl->tpl_vars['_active_format'] = new Smarty_variable(null, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_active_kind']->value['formats'])&&!empty($_smarty_tpl->tpl_vars['feature']->value['format'])){?><?php $_smarty_tpl->tpl_vars['_active_format_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['feature']->value['format'], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_active_format_id']->value)&&in_array($_smarty_tpl->tpl_vars['_active_format_id']->value,$_smarty_tpl->tpl_vars['_active_kind']->value['formats'])&&!empty($_smarty_tpl->tpl_vars['formats']->value[$_smarty_tpl->tpl_vars['_active_format_id']->value])){?><?php $_smarty_tpl->tpl_vars['_active_format'] = new Smarty_variable($_smarty_tpl->tpl_vars['formats']->value[$_smarty_tpl->tpl_vars['_active_format_id']->value], null, 0);?><?php }?><?php }?><?php if (!function_exists('smarty_template_function__render_feature_value_item')) {
    function smarty_template_function__render_feature_value_item($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['_render_feature_value_item']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><div class="s-feature-value-wrapper"><div class="wa-table-box inline"><div class="s-column"><div class="s-actions"><span class="s-action js-feature-value-sort"><i class="s-icon icon16 sort"></i></span></div></div><div class="s-column"><div class="s-fields"><input class="js-field-id" type="hidden" name="values[id][]" value=""><input class="s-field js-field-value" type="text" name="values[value][]" value="" placeholder="Значение" required></div></div><div class="s-column"><div class="s-actions align-right"><span class="s-action js-feature-value-remove"><i class="s-icon icon10 delete"></i></span></div></div></div></div><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', "_unit_select", null); ob_start(); ?><select class="s-select js-field-unit" name="values[unit][]"></select><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_color_widget", null); ob_start(); ?><div class="s-color-picker-widget"><i class="s-icon icon16 color"></i><input class="s-field js-field-code" type="text" name="values[code][]" required><div class="s-place js-color-picker"></div></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_feature_value_item", null); ob_start(); ?><?php smarty_template_function__render_feature_value_item($_smarty_tpl,array());?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="wa-dialog s-settings-feature-edit-dialog" id="js-settings-feature-edit-dialog">
    <div class="wa-dialog-background"></div>
    <div class="wa-dialog-body">

        <form action="" method="post">
            
            <header class="wa-dialog-header">
                <h1 class="s-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1>
                <?php if (!empty($_smarty_tpl->tpl_vars['product_id']->value)){?>
                    <div class="wa-message wa-small info flexbox space-8">
                        <div class="message-icon"><i class="fas fa-info-circle"></i></div>
                        <div class="message-text wide">Характеристика будет доступна для всех товаров этого типа.</div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['_is_divider']->value){?>
                    <div class="s-header-description">
                        <p>Заголовки помогают разделить длинный список характеристик на группы. Примеры заголовков: «Основные&nbsp;характеристики», «Дополнительные&nbsp;характеристики», «Информация&nbsp;о&nbsp;производителе».</p>
                    </div>
                <?php }?>
            </header>

            
            <div class="wa-dialog-content">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
">

                <div class="s-fields-wrapper">
                    <div class="wa-table-box fixed space-10">
                        <div class="s-column">
                            <div class="s-field-section">
                                <label class="s-label">Название <span class="shop-tooltip"><i class="icon10 info"></i><span>Название характеристики, его видно на витрине и в панели управления магазина.</span></span></label>
                                <input class="s-field js-name-field" type="text" name="feature[name]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" required>
                            </div>

                            <div class="s-field-section">
                                <label class="s-label">Идентификатор <span class="shop-tooltip"><i class="icon10 info"></i><span>Используется для идентификации характеристики в системе. Например, его можно использовать, чтобы показать информацию о характеристике в шаблоне дизайна.</span></span></label>
                                <?php if ($_smarty_tpl->tpl_vars['feature']->value['builtin']){?>
                                    <input type="hidden" name="feature[code]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['code'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
">
                                    <input class="s-field js-code-field" type="text" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['code'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" disabled>
                                <?php }else{ ?>
                                    <input class="s-field js-code-field" type="text" name="feature[code]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['code'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" required>
                                <?php }?>
                            </div>

                            <div class="s-field-section"><div class="s-checkbox-list"><label class="s-checkbox-wrapper"><input type="hidden" name="feature[visible_in_frontend]" value=""><input class="s-checkbox js-visibility-field" type="checkbox" name="feature[visible_in_frontend]" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['feature']->value['visible_in_frontend'])){?>checked<?php }?>><i class="s-icon icon16 <?php if (!empty($_smarty_tpl->tpl_vars['feature']->value['visible_in_frontend'])){?>visibility-on<?php }else{ ?>ss visibility<?php }?>"></i><span class="s-text">Показывать на сайте</span>&nbsp;<span class="shop-tooltip"><i class="icon10 info"></i><span>Отключите, чтобы характеристика была видна только администратору магазина и не была видна покупателям на витрине.</span></span></label><?php if (empty($_smarty_tpl->tpl_vars['_is_divider']->value)){?><label class="s-checkbox-wrapper"><?php if ($_smarty_tpl->tpl_vars['can_disable_sku']->value){?><input type="hidden" name="feature[available_for_sku]" value=""><input class="s-checkbox js-available-field" type="checkbox" name="feature[available_for_sku]" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['feature']->value['available_for_sku'])){?>checked<?php }?>><?php }else{ ?><input type="hidden" name="feature[available_for_sku]" value="1"><input class="s-checkbox" type="checkbox" checked disabled><?php }?><i class="s-icon icon16 <?php if (!empty($_smarty_tpl->tpl_vars['feature']->value['available_for_sku'])){?>hierarchical<?php }else{ ?>hierarchical-off<?php }?>"></i><span class="s-text">Возможность задать значения характеристики для артикулов товаров</span>&nbsp;<?php if (!$_smarty_tpl->tpl_vars['can_disable_sku']->value){?><?php if ($_smarty_tpl->tpl_vars['feature']->value['code']=='weight'){?><span class="shop-tooltip"><i class="icon10 info"></i><span>«Вес» — это особенная характеристика, которая всегда должна быть доступна для редактирования в свойствах артикулов товаров.</span></span><?php }elseif($_smarty_tpl->tpl_vars['feature']->value['code']==='gtin'){?><span class="shop-tooltip"><i class="icon10 info"></i><span>«GTIN (Global Trade Item Number)» — это особенная характеристика, которая всегда должна быть доступна для редактирования в свойствах артикулов товаров.</span></span><?php }else{ ?><span class="shop-tooltip"><i class="icon10 info"></i><span>Нельзя отключить доступность редактирования этой характеристики в свойствах артикулов товаров, потому что в вашем магазине есть товары, артикулы которых сформированы из значений этой характеристики в режиме «Выбор параметров».</span></span><?php }?><?php }?></label><?php }?></div></div>

                            <div class="s-field-section js-type-field-section">
                                <label class="s-label">Типы товаров</label>

                                <div class="s-radio-list">
                                    <?php if ($_smarty_tpl->tpl_vars['selected_type']->value){?>
                                        <div class="s-radio-wrapper is-active">
                                            <label class="s-radio-label">
                                                <input class="s-radio js-type-group-field" type="radio" name="feature[all_types_is_checked]" value="<?php echo $_smarty_tpl->tpl_vars['selected_type']->value['id'];?>
" checked>
                                                <span class="s-text"><?php echo sprintf_wp('Use for product type “<strong>%s</strong>”',htmlspecialchars($_smarty_tpl->tpl_vars['selected_type']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</span>
                                            </label>
                                        </div>
                                    <?php }?>
                                    <div class="s-radio-wrapper <?php if (!$_smarty_tpl->tpl_vars['selected_type']->value&&!empty($_smarty_tpl->tpl_vars['all_types_is_checked']->value)){?>is-active<?php }?>">
                                        <label class="s-radio-label">
                                            <input class="s-radio js-type-group-field" type="radio" name="feature[all_types_is_checked]" value="all" <?php if (!$_smarty_tpl->tpl_vars['selected_type']->value&&!empty($_smarty_tpl->tpl_vars['all_types_is_checked']->value)){?>checked<?php }?>>
                                            <span class="s-text<?php if (!$_smarty_tpl->tpl_vars['selected_type']->value){?> bold<?php }?>">Использовать для всех типов товаров</span>
                                        </label>
                                    </div>
                                    <div class="s-radio-wrapper <?php if (!$_smarty_tpl->tpl_vars['selected_type']->value&&empty($_smarty_tpl->tpl_vars['all_types_is_checked']->value)){?>is-active<?php }?>">
                                        <label class="s-radio-label">
                                            <input class="s-radio js-type-group-field" type="radio" name="feature[all_types_is_checked]" value="0" <?php if (!$_smarty_tpl->tpl_vars['selected_type']->value&&empty($_smarty_tpl->tpl_vars['all_types_is_checked']->value)){?>checked<?php }?>>
                                            <span class="s-text">Использовать только для выбранных типов</span>
                                        </label>

                                        <div class="s-checkbox-list"><?php $_smarty_tpl->tpl_vars['_all_is_checked'] = new Smarty_variable(true, null, 0);?><?php  $_smarty_tpl->tpl_vars['_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_type']->key => $_smarty_tpl->tpl_vars['_type']->value){
$_smarty_tpl->tpl_vars['_type']->_loop = true;
?><?php if (empty($_smarty_tpl->tpl_vars['_type']->value['is_checked'])){?><?php $_smarty_tpl->tpl_vars['_all_is_checked'] = new Smarty_variable(false, null, 0);?><?php break 1?><?php }?><?php } ?><label class="s-checkbox-wrapper s-all-checkbox-wrapper"><input class="s-checkbox js-all-types-field" type="checkbox" <?php if (!empty($_smarty_tpl->tpl_vars['_all_is_checked']->value)){?>checked<?php }?>><span class="s-text">Выбрать все</span></label><?php  $_smarty_tpl->tpl_vars['_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_type']->key => $_smarty_tpl->tpl_vars['_type']->value){
$_smarty_tpl->tpl_vars['_type']->_loop = true;
?><label class="s-checkbox-wrapper"><input class="s-checkbox js-type-field" type="checkbox" name="types[<?php echo $_smarty_tpl->tpl_vars['_type']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['_type']->value['id'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_type']->value['is_checked'])){?>checked<?php }?>><?php echo shopHelper::getIcon($_smarty_tpl->tpl_vars['_type']->value['icon']);?>
<span class="s-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_type']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></label><?php } ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if (!empty($_smarty_tpl->tpl_vars['_is_divider']->value)){?>
                            <input type="hidden" name="feature[type]" value="divider">
                        <?php }else{ ?>
                            <div class="s-column">
                                
                                <div class="s-field-section js-field-kind-section">
                                    <label class="s-label">Тип <span class="shop-tooltip"><i class="icon10 info"></i><span>Выберите тип значений, которые необходимо хранить в этой характеристике.</span></span></label>
                                    <select class="s-select js-select" name="feature[kind]" <?php if ($_smarty_tpl->tpl_vars['feature']->value['builtin']){?>disabled="disabled"<?php }?>>
                                        <?php  $_smarty_tpl->tpl_vars['_kind'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_kind']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kinds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_kind']->key => $_smarty_tpl->tpl_vars['_kind']->value){
$_smarty_tpl->tpl_vars['_kind']->_loop = true;
?>
                                            <?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(false, null, 0);?>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['_active_kind']->value)&&$_smarty_tpl->tpl_vars['_active_kind']->value['id']===$_smarty_tpl->tpl_vars['_kind']->value['id']){?>
                                                <?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(true, null, 0);?>
                                            <?php }?>
                                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_kind']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_kind']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php } ?>
                                    </select>
                                </div>

                                
                                <div class="s-field-section js-field-format-section" style="<?php if (empty($_smarty_tpl->tpl_vars['_active_kind']->value['formats'])){?>display:none;<?php }?>">
                                    <label class="s-label">
                                        Формат <span class="shop-tooltip"><i class="icon10 info"></i><span>Выберите, как должны заполняться значения для этой характеристики</span></span>
                                    </label>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['_active_kind']->value)){?>
                                        <select class="s-select js-select" name="feature[format]" <?php if ($_smarty_tpl->tpl_vars['feature']->value['builtin']){?>disabled="disabled"<?php }?>>
                                            <?php  $_smarty_tpl->tpl_vars['_format_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_format_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_active_kind']->value['formats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_format_id']->key => $_smarty_tpl->tpl_vars['_format_id']->value){
$_smarty_tpl->tpl_vars['_format_id']->_loop = true;
?>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['formats']->value[$_smarty_tpl->tpl_vars['_format_id']->value])){?>
                                                    <?php $_smarty_tpl->tpl_vars['_format'] = new Smarty_variable($_smarty_tpl->tpl_vars['formats']->value[$_smarty_tpl->tpl_vars['_format_id']->value], null, 0);?>
                                                    <?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(false, null, 0);?>
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['_active_format']->value)&&$_smarty_tpl->tpl_vars['_active_format']->value['id']===$_smarty_tpl->tpl_vars['_format']->value['id']){?>
                                                        <?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(true, null, 0);?>
                                                    <?php }?>
                                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_format']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_format']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                <?php }?>
                                            <?php } ?>
                                        </select>
                                    <?php }?>
                                </div>

                                
                                <div class="s-field-section js-field-default-unit-section" style="<?php if (empty($_smarty_tpl->tpl_vars['_active_kind']->value['dimensions'])){?>display:none;<?php }?>">
                                    <label class="s-label">
                                        Единица измерения по умолчанию <span class="shop-tooltip right"><i class="icon10 info"></i><span>Вы сможете выбирать единицы измерения для значений характеристики во время их заполнения в свойствах товаров.</span></span>
                                    </label>
                                    <select class="s-select js-select" name="feature[default_unit]">
                                        
                                        <?php $_smarty_tpl->tpl_vars['active_dimensions'] = new Smarty_variable(array(), null, 0);?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['_active_kind']->value['length_dimensions'])&&!empty($_smarty_tpl->tpl_vars['_active_format']->value['is_multidimensional'])){?>
                                            <?php $_smarty_tpl->tpl_vars['active_dimensions'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_kind']->value['length_dimensions'], null, 0);?>
                                        <?php }elseif(isset($_smarty_tpl->tpl_vars['_active_kind']->value['dimensions'])){?>
                                            <?php $_smarty_tpl->tpl_vars['active_dimensions'] = new Smarty_variable($_smarty_tpl->tpl_vars['_active_kind']->value['dimensions'], null, 0);?>
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['active_dimensions']->value)){?>
                                            <?php  $_smarty_tpl->tpl_vars['_dimension'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_dimension']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['active_dimensions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_dimension']->key => $_smarty_tpl->tpl_vars['_dimension']->value){
$_smarty_tpl->tpl_vars['_dimension']->_loop = true;
?>
                                                <?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable((!empty($_smarty_tpl->tpl_vars['feature']->value['default_unit'])&&$_smarty_tpl->tpl_vars['feature']->value['default_unit']===$_smarty_tpl->tpl_vars['_dimension']->value['id']), null, 0);?>
                                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_dimension']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_dimension']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php } ?>
                                        <?php }?>
                                    </select>
                                </div>

                                
                                <div class="s-field-section js-field-value-section">
                                    <label class="s-label">Значение</label>
                                    <div class="s-feature-values-section js-feature-values-section">
                                        <div class="s-section-header">
                                            <a class="inline-link js-feature-value-add" href="javascript:void(0);"><i class="icon16 add"></i><b><i>Добавить значение характеристики</i></b></a>
                                        </div>
                                        <div class="s-section-body">
                                            <div class="s-feature-values-list"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>

            
            <footer class="wa-dialog-footer">
                <div class="s-errors-place js-errors-place"></div>

                <div class="wa-table-box middle">
                    <div class="s-column">
                        <button class="s-button button green js-submit-button" type="submit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_button_text']->value, ENT_QUOTES, 'UTF-8', true);?>
</button>
                        <span class="s-divider">или</span>
                        <a href="javascript:void(0);" class="js-close-dialog">отмена</a>
                    </div>
                    <div class="s-column align-right">
                        
                    </div>
                </div>
            </footer>
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

        </form>

    </div>

    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "_kind_warning_message", null); ob_start(); ?><div class="s-warning-message"><i class="icon10 exclamation"></i>&nbsp;<span class="s-text">При изменении типа характеристики ее значения для всех товаров будут автоматически приведены к новому типу.</span><span class="shop-tooltip right"><i class="icon10 info"></i><span style="width: 300px;">В случаях, когда приведение значения характеристики к новому типу данных невозможно, такое значение может быть потеряно. Например, при смене типа характеристики с текстового на числовой текстовые значения, содержащие только числа, например, «100» или «200», будут конвертированы в соответствующие числа 100 и 200, а все значения, не имеющие числового представления, например, «да», «нет», «красный», будут потеряны и преобразованы в число 0. Восстановить такие потерянные значения невозможно.</span></span></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_skus_warning_message", null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['can_disable_sku']->value&&$_smarty_tpl->tpl_vars['sku_values_count']->value>0){?><div class="s-warning-message"><i class="icon10 exclamation"></i>&nbsp;<span class="s-text"><?php echo _w('If you disable the availability of this feature in product SKUs’ properties, this will delete all its values from %d SKU.','If you disable the availability of this feature in product SKUs’ properties, this will delete all its values from %d SKUs.',$_smarty_tpl->tpl_vars['sku_values_count']->value);?>
</span>&nbsp;<span class="shop-tooltip right"><i class="icon10 info"></i><span style="width: 300px;">Будут удалены только значения характеристики в свойствах <strong>артикулов</strong>. Значения характеристики в свойствах <strong>товаров</strong> сохранятся.</span></span></div><?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <script>
        ( function($) {
            var $wrapper = $("#js-settings-feature-edit-dialog").removeAttr("id"),
                dialog = $wrapper.data("dialog");

            dialog.options.initFeatureDialog({
                $wrapper: $wrapper,
                dialog: dialog,
                kinds: <?php echo json_encode($_smarty_tpl->tpl_vars['kinds']->value);?>
,
                formats: <?php echo json_encode($_smarty_tpl->tpl_vars['formats']->value);?>
,
                feature: <?php if (!empty($_smarty_tpl->tpl_vars['feature']->value)){?><?php echo json_encode($_smarty_tpl->tpl_vars['feature']->value);?>
<?php }else{ ?>null<?php }?>,
                feature_id: <?php if (!empty($_smarty_tpl->tpl_vars['feature']->value['id'])){?><?php echo json_encode($_smarty_tpl->tpl_vars['feature']->value['id']);?>
<?php }else{ ?>null<?php }?>,
                active_kind_id: <?php if (!empty($_smarty_tpl->tpl_vars['_active_kind']->value)){?><?php echo json_encode($_smarty_tpl->tpl_vars['_active_kind']->value['id']);?>
<?php }else{ ?>null<?php }?>,
                active_format_id: <?php if (!empty($_smarty_tpl->tpl_vars['_active_format']->value)){?><?php echo json_encode($_smarty_tpl->tpl_vars['_active_format']->value['id']);?>
<?php }else{ ?>null<?php }?>,
                show_skus_warning: <?php if (!empty($_smarty_tpl->tpl_vars['_skus_warning_message']->value)){?>true<?php }else{ ?>false<?php }?>,
                urls: {
                    "transliterate": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=backend&action=transliterate",
                    "feature_save": <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
 + "?module=settingsTypefeat&action=featureSave"
                },
                templates: {
                    "kind_warning_message": <?php echo json_encode($_smarty_tpl->tpl_vars['_kind_warning_message']->value);?>
,
                    "skus_warning_message": <?php echo json_encode($_smarty_tpl->tpl_vars['_skus_warning_message']->value);?>
,
                    "feature_value_item": <?php echo json_encode($_smarty_tpl->tpl_vars['_feature_value_item']->value);?>
,
                    "unit_select": <?php echo json_encode($_smarty_tpl->tpl_vars['_unit_select']->value);?>
,
                    "color_widget": <?php echo json_encode($_smarty_tpl->tpl_vars['_color_widget']->value);?>

                }
            });
        })(jQuery);
    </script>
</div>
<?php }} ?>