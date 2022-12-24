<?php /* Smarty version Smarty-3.1.14, created on 2022-12-24 05:47:33
         compiled from "C:\OpenServer\domains\elmarco\elmarcosite\wa-apps\shop\templates\actions\settings\SettingsTypefeatTypeEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:31651775163a668459b2405-73843526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a3c07f7481a07369927452092ff16d70fa0f3f9' => 
    array (
      0 => 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-apps\\shop\\templates\\actions\\settings\\SettingsTypefeatTypeEdit.html',
      1 => 1649318563,
      2 => 'file',
    ),
    '834f7d4b8458ac7eaead5af9a1b56c5f3f951400' => 
    array (
      0 => 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-apps\\shop\\templates\\actions\\settings\\SettingsTypefeatTypeEditConfirm.html',
      1 => 1644918912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31651775163a668459b2405-73843526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    '_component_switch' => 0,
    '_confirm_fractional_dialog' => 0,
    '_title' => 0,
    'type_templates' => 0,
    'icons' => 0,
    '_icon_class' => 0,
    '_active_icon' => 0,
    '_icon_uri' => 0,
    'is_premium' => 0,
    '_tooltips' => 0,
    'fractional' => 0,
    '_unit' => 0,
    '_locales' => 0,
    'selected_storefront' => 0,
    'all_storefronts_is_checked' => 0,
    'storefronts' => 0,
    '_storefront' => 0,
    '_all_is_checked' => 0,
    'template_id' => 0,
    'info' => 0,
    'wa' => 0,
    '_templates' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_63a66845a36f16_44117478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63a66845a36f16_44117478')) {function content_63a66845a36f16_44117478($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable(_w("New product type"), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['type']->value['id'])){?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable(_w("Product type settings"), null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_active_icon'] = new Smarty_variable($_smarty_tpl->tpl_vars['type']->value['icon_class'], null, 0);?><?php $_smarty_tpl->tpl_vars['_icon_uri'] = new Smarty_variable($_smarty_tpl->tpl_vars['type']->value['icon_url'], null, 0);?><?php $_smarty_tpl->tpl_vars['_locales'] = new Smarty_variable(array("units_unique_error"=>_w("A stock and a base unit must be different."),"order_multiplicity_factor_error"=>htmlspecialchars(_w("Enter a number from 0.001 to 999,999.999. Maximum 3 decimal digits."), ENT_QUOTES, 'UTF-8', true),"order_count_step_error"=>htmlspecialchars(_w("The quantity adjustment value with “+/-” buttons must be greater than 0 and must be divisible by the add-to-cart step without remainder."), ENT_QUOTES, 'UTF-8', true),"order_count_min_error"=>htmlspecialchars(_w("The minimum orderable product quantity must be greater than 0 and must be divisible by the add-to-cart step without remainder."), ENT_QUOTES, 'UTF-8', true),"stock_base_ratio_required"=>htmlspecialchars(_w("The value must be greater than 0."), ENT_QUOTES, 'UTF-8', true),"denominator_step_required"=>htmlspecialchars(_w("Specify the add-to-cart step to set the quantity adjustment value in the shopping cart with “+/-” buttons."), ENT_QUOTES, 'UTF-8', true),"denominator_min_required"=>htmlspecialchars(_w("Specify the add-to-cart step to set the minimum orderable product quantity."), ENT_QUOTES, 'UTF-8', true)), null, 0);?><?php $_smarty_tpl->tpl_vars['_templates'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_component_switch", null); ob_start(); ?><div class="vue-component-switch"><div class="wa-switch wa-small" v-bind:class="class_switch"><input type="checkbox" v-bind:checked="checked" v-bind:disabled="disabled"></div><div class="shop-tooltip" v-if="title_data"><span v-html="title_data"></span></div></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('_templates', null, 0);
$_smarty_tpl->tpl_vars['_templates']->value["component-switch"] = $_smarty_tpl->tpl_vars['_component_switch']->value;?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_confirm_fractional_dialog", null); ob_start(); ?><?php /*  Call merged included template "./SettingsTypefeatTypeEditConfirm.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./SettingsTypefeatTypeEditConfirm.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>$_smarty_tpl->tpl_vars['type']->value), 0, '31651775163a668459b2405-73843526');
content_63a668459dfc55_83012973($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./SettingsTypefeatTypeEditConfirm.html" */?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->createLocalArrayVariable('_templates', null, 0);
$_smarty_tpl->tpl_vars['_templates']->value["dialog-confirm-fractional"] = $_smarty_tpl->tpl_vars['_confirm_fractional_dialog']->value;?>

<div class="wa-dialog s-settings-type-add-dialog" id="js-settings-type-add-dialog">
    <div class="wa-dialog-background"></div>
    <div class="wa-dialog-body">
        
        <header class="wa-dialog-header">
            <h1 class="s-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1>
        </header>

        
        <form action="" method="post">
            <div class="wa-dialog-content">

                
                <?php if (!empty($_smarty_tpl->tpl_vars['type_templates']->value)){?><div class="s-type-toggle-section js-type-toggle-section"><ul class="s-toggle-list"><li class="s-toggle-wrapper selected"><label class="s-label"><input class="s-field" type="radio" name="source" value="custom" checked><span class="s-name">Новый тип товаров</span></label></li><li class="s-toggle-wrapper"><label class="s-label"><input class="s-field" type="radio" name="source" value="template"><span class="s-name">Выбрать из шаблонов</span></label></li></ul></div><?php }?>

                <div class="s-fields-wrapper">
                    <div class="field-group" data-content-id="custom">
                        <div class="field">
                            <div class="name">Название типа товаров</div>
                            <div class="value">
                                <input type="text" name="name" class="wa-input large" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['type']->value['name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
">
                            </div>
                        </div>
                        <div class="field">
                            <div class="name">Иконка типа товаров</div>
                            <div class="value">
                                <ul class="s-type-icons-list js-type-icons-list">
                                    <?php  $_smarty_tpl->tpl_vars['_icon_class'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_icon_class']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['icons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_icon_class']->key => $_smarty_tpl->tpl_vars['_icon_class']->value){
$_smarty_tpl->tpl_vars['_icon_class']->_loop = true;
?>
                                        <li class="s-toggle-wrapper">
                                            <label class="s-label">
                                                <input class="s-field" type="radio" name="icon" value="<?php echo $_smarty_tpl->tpl_vars['_icon_class']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_active_icon']->value)&&$_smarty_tpl->tpl_vars['_active_icon']->value===$_smarty_tpl->tpl_vars['_icon_class']->value){?>checked<?php }?>>
                                                <span class="s-name"><i class="icon16 <?php echo $_smarty_tpl->tpl_vars['_icon_class']->value;?>
"></i></span>
                                            </label>
                                        </li>
                                    <?php } ?>
                                </ul>

                                <div class="s-custom-icon-wrapper">
                                    <div class="s-description small">Или введите URL иконки (16 х 16 пикселей):</div>
                                    <input class="s-field wa-input" type="text" name="icon_url" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_icon_uri']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
">
                                </div>
                            </div>
                        </div>

                        <?php if (!empty($_smarty_tpl->tpl_vars['is_premium']->value)){?>
                        <div class="field s-fractional-wrapper">
                            <div class="name">
                                <div class="s-label">Единицы измерения количества<br>и добавление в корзину</div>
                                <div class="s-label-small">Задайте значения по умолчанию, которые будут использоваться для новых товаров.</div>
                            </div>
                            <div class="value">

                                <?php $_smarty_tpl->tpl_vars['_tooltips'] = new Smarty_variable(array("disabled"=>sprintf_wp("Enable selection of different quantity units in the <a href=\"%s\" target=\"_blank\">settings</a> to make this option available.",'?action=settings#/unit/'),"stock_unit"=>_w("A stock quantity unit is used for storing product stock quantities and for adding products to the shopping cart."),"base_unit"=>_w("A base quantity unit can be used for the comparison of product prices in the storefront. For instance, pound—to compare the prices of weight products with packages of different size."),"stock_base_ratio"=>_w("Numeric conversion ratio between a stock and a base unit. For example, weight value corresponding to a standard product package. Editable in product properties."),"order_multiplicity_factor"=>_w("Minimal value by which the product quantity in the shopping cart can be changed."),"order_multiplicity_factor_disabled"=>sprintf_wp("To set up an add-to-cart step, enable fractional product support in the <a href=\"%s\" target=\"_blank\">settings</a>.",'?action=settings#/unit/'),"order_count_min"=>_w("Minimal product quantity that can be added to the shopping cart."),"order_count_min_disabled"=>sprintf_wp("To set up a minimum orderable quantity, enable fractional product support in the <a href=\"%s\" target=\"_blank\">settings</a>.",'?action=settings#/unit/'),"order_count_step"=>_w("The value by which the product quantity must be changed via the “+/-” buttons in the shopping cart."),"order_count_step_disabled"=>sprintf_wp("To set up a quantity adjustment value via “+/-” buttons, enable fractional product support in the <a href=\"%s\" target=\"_blank\">settings</a>.",'?action=settings#/unit/')), null, 0);?>

                                <div class="s-fractional-section js-fractional-section">
                                    <div class="s-options-list">

                                        
                                        <div class="s-option-wrapper">
                                            <div class="s-column-switch">
                                                <component-switch
                                                    class="s-switch wa-small"
                                                    v-model="fractional.stock_unit.enabled"
                                                    v-bind:class_switch="'js-switch-stock-unit'"
                                                    v-bind:title="!fractional.stock_unit.status ? '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_tooltips']->value["disabled"], ENT_QUOTES, 'UTF-8', true);?>
' : ''"
                                                    v-bind:disabled="!fractional.stock_unit.status"
                                                    v-on:change="onChangeStockUnitEnabled"></component-switch>

                                                <input name="stock_unit_fixed" type="hidden" v-model="stock_unit_fixed">
                                            </div>
                                            <div class="s-column-content"
                                                 v-bind:class="{ 'is-disabled': !fractional.stock_unit.status }">

                                                <div class="flexbox space-12">
                                                    <div class="s-title-wrapper">
                                                        <span class="s-title">Складская</span>
                                                        <span class="shop-tooltip"><i class="icon10 info"></i><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_tooltips']->value["stock_unit"], ENT_QUOTES, 'UTF-8', true);?>
</span></span>
                                                    </div>
                                                    <div class="s-default-wrapper wide">
                                                        <select class="s-select" name="stock_unit_id"
                                                                v-bind:class="{ 'wa-error-field' : errors['units_error'] }"
                                                                v-bind:disabled="!fractional.stock_unit.status || !fractional.stock_unit.enabled"
                                                                v-on:change="onChangeStockUnit"
                                                                v-model="fractional.stock_unit.value">
                                                            <?php  $_smarty_tpl->tpl_vars['_unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fractional']->value["units"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_unit']->key => $_smarty_tpl->tpl_vars['_unit']->value){
$_smarty_tpl->tpl_vars['_unit']->_loop = true;
?>
                                                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_unit']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                            <?php } ?>
                                                        </select>

                                                        <div class="wa-error-text"
                                                             v-if="errors['units_error']"
                                                             v-html="errors['units_error'].text"></div>

                                                        <template v-if="fractional.stock_unit.status && fractional.stock_unit.enabled">
                                                            <div class="s-rights-wrapper">
                                                                <label>
                                                                    <input class="s-checkbox js-checkbox" type="checkbox"
                                                                           v-on:change="onChangeStockUnitEditable"
                                                                           v-model="fractional.stock_unit.editable">
                                                                    <span class="s-label">Разрешить изменять в свойствах товаров</span>
                                                                </label>
                                                            </div>
                                                        </template>
                                                        <template v-else>
                                                            <div class="s-hint-disabled">Для всех товаров этого типа</div>
                                                        </template>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <div class="s-option-wrapper">
                                            <div class="s-column-switch">
                                                <component-switch
                                                    class="s-switch wa-small"
                                                    v-model="fractional.base_unit.enabled"
                                                    v-bind:class_switch="'js-switch-base-unit'"
                                                    v-bind:title="!fractional.base_unit.status ? '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_tooltips']->value["disabled"], ENT_QUOTES, 'UTF-8', true);?>
' : ''"
                                                    v-bind:disabled="!fractional.base_unit.status"
                                                    v-on:change="onChangeBaseUnitEnabled"></component-switch>

                                                <input name="base_unit_fixed" type="hidden" v-model="base_unit_fixed">
                                            </div>
                                            <div class="s-column-content"
                                                 v-bind:class="{ 'is-disabled': !fractional.base_unit.status }">

                                                <div class="flexbox space-12">
                                                    <div class="s-title-wrapper">
                                                        <span class="s-title">Базовая</span>
                                                        <span class="shop-tooltip"><i class="icon10 info"></i><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_tooltips']->value["base_unit"], ENT_QUOTES, 'UTF-8', true);?>
</span></span>
                                                    </div>

                                                    <div class="s-default-wrapper wide">
                                                        <select class="s-select" name="base_unit_id"
                                                                v-bind:class="{ 'wa-error-field' : errors['units_error'] }"
                                                                v-bind:disabled="!fractional.base_unit.status || !fractional.base_unit.enabled"
                                                                v-on:change="onChangeBaseUnit"
                                                                v-model="fractional.base_unit.value">
                                                            <option value="">Не задано</option>
                                                            <?php  $_smarty_tpl->tpl_vars['_unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fractional']->value["units"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_unit']->key => $_smarty_tpl->tpl_vars['_unit']->value){
$_smarty_tpl->tpl_vars['_unit']->_loop = true;
?>
                                                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['_unit']->value['value']===$_smarty_tpl->tpl_vars['fractional']->value["base_unit"]["value"]){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_unit']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                            <?php } ?>
                                                        </select>

                                                        <div class="wa-error-text"
                                                             v-if="errors['units_error']"
                                                             v-html="errors['units_error'].text"></div>

                                                        <template v-if="fractional.base_unit.status && fractional.base_unit.enabled">
                                                            <div class="s-rights-wrapper">
                                                                <label>
                                                                    <input class="s-checkbox js-checkbox" type="checkbox"
                                                                           v-on:change="onChangeBaseUnitEditable"
                                                                           v-model="fractional.base_unit.editable">
                                                                    <span class="s-label">Разрешить изменять в свойствах товаров</span>
                                                                </label>
                                                            </div>
                                                        </template>
                                                        <template v-else>
                                                            <div class="s-hint-disabled">Для всех товаров этого типа</div>
                                                        </template>
                                                    </div>
                                                </div>

                                                <div class="s-ratio-wrapper flexbox space-12"
                                                     v-if="fractional.base_unit.status && fractional.base_unit.enabled && fractional.base_unit.value">

                                                    <div class="s-title-wrapper">
                                                        <span class="s-title">Соотношение единиц</span>
                                                        <span class="shop-tooltip"><i class="icon10 info"></i><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_tooltips']->value["stock_base_ratio"], ENT_QUOTES, 'UTF-8', true);?>
</span></span>
                                                    </div>

                                                    <div class="s-default-wrapper wide"><input name="stock_base_ratio_fixed" type="hidden" v-model="stock_base_ratio_fixed"><span><?php echo sprintf(_w("1 %s"),"{ "."{ "."selected_stock_unit } }");?>
&nbsp;=&nbsp;<input class="wa-input is-number" name="stock_base_ratio"v-bind:class="{ 'wa-error-field' : errors['stock_base_ratio_error'] }"v-on:input="checkStockBaseRatio"v-on:change="onChangeStockBaseRatio"v-model="fractional.stock_base_ratio.value">&nbsp;{ { selected_base_unit } }</span><div class="wa-error-text"v-if="errors['stock_base_ratio_error']"v-html="errors['stock_base_ratio_error'].text"></div><div class="s-label">Разрешено изменять в свойствах товаров</div></div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <div class="s-option-wrapper">
                                            <div class="s-column-switch">
                                                <component-switch
                                                    class="s-switch wa-small"
                                                    v-model="fractional.order_multiplicity_factor.enabled"
                                                    v-bind:title="!fractional.order_multiplicity_factor.status ? '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_tooltips']->value["order_multiplicity_factor_disabled"], ENT_QUOTES, 'UTF-8', true);?>
' : ''"
                                                    v-bind:disabled="!fractional.order_multiplicity_factor.status"
                                                    v-on:change="onChangeCountDenominatorEnabled"></component-switch>

                                                <input name="order_multiplicity_factor_fixed" type="hidden" v-model="order_multiplicity_factor_fixed">
                                            </div>
                                            <div class="s-column-content"
                                                 v-bind:class="{ 'is-disabled': !fractional.order_multiplicity_factor.status }">

                                                <div class="flexbox space-12">
                                                    <div class="s-title-wrapper">
                                                        <span class="s-title">Шаг добавления в корзину</span>
                                                        <span class="shop-tooltip"><i class="icon10 info"></i><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_tooltips']->value["order_multiplicity_factor"], ENT_QUOTES, 'UTF-8', true);?>
</span></span>
                                                    </div>
                                                    <div class="s-default-wrapper wide">
                                                        <input class="wa-input is-number" name="order_multiplicity_factor"
                                                               v-model="fractional.order_multiplicity_factor.value"
                                                               v-bind:class="{ 'wa-error-field' : errors['order_multiplicity_factor_error'] }"
                                                               v-bind:disabled="!fractional.order_multiplicity_factor.status || !fractional.order_multiplicity_factor.enabled"
                                                               v-on:change="onChangeCountDenominator"
                                                               v-on:input="onInputCountDenominator">&nbsp;<span class="s-stock-unit-name">{ { selected_stock_unit } }</span>

                                                        <template v-if="fractional.order_multiplicity_factor.status && fractional.order_multiplicity_factor.enabled">
                                                            <div class="wa-error-text"
                                                                 v-if="errors['order_multiplicity_factor_error']"
                                                                 v-html="errors['order_multiplicity_factor_error'].text"></div>

                                                            <div class="s-rights-wrapper">
                                                                <label>
                                                                    <input class="s-checkbox js-checkbox" type="checkbox"
                                                                           v-on:change="onChangeCountDenominatorEditable"
                                                                           v-model="fractional.order_multiplicity_factor.editable">
                                                                    <span class="s-label">Разрешить изменять в свойствах товаров</span>
                                                                </label>
                                                            </div>
                                                        </template>
                                                        <template v-else>
                                                            <div class="s-hint-disabled">Для всех товаров этого типа</div>
                                                        </template>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <div class="s-option-wrapper">
                                            <div class="s-column-switch">
                                                <component-switch
                                                    class="s-switch wa-small"
                                                    v-model="fractional.order_count_min.enabled"
                                                    v-bind:title="!fractional.order_count_min.status ? '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_tooltips']->value["order_count_min_disabled"], ENT_QUOTES, 'UTF-8', true);?>
' : ''"
                                                    v-bind:disabled="!fractional.order_count_min.status"
                                                    v-on:change="onChangeOrderCountMinEnabled"></component-switch>

                                                <input name="order_count_min_fixed" type="hidden" v-model="order_count_min_fixed">

                                            </div>
                                            <div class="s-column-content"
                                                 v-bind:class="{ 'is-disabled': !fractional.order_count_min.status }">

                                                <div class="flexbox space-12">
                                                    <div class="s-title-wrapper">
                                                        <span class="s-title">Минимальное количество для заказа</span>
                                                        <span class="shop-tooltip"><i class="icon10 info"></i><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_tooltips']->value["order_count_min"], ENT_QUOTES, 'UTF-8', true);?>
</span></span>
                                                    </div>

                                                    <div class="s-default-wrapper wide">
                                                    <template v-if="fractional.order_multiplicity_factor.value">
                                                        <template v-if="fractional.order_count_min.status && fractional.order_count_min.enabled">
                                                            <input class="wa-input is-number" name="order_count_min"
                                                                   v-model="fractional.order_count_min.value"
                                                                   v-bind:class="{ 'wa-error-field' : errors['order_count_min_error'] }"
                                                                   v-on:change="onChangeOrderCountMinValue"
                                                                   v-on:input="checkOrderCountMin">&nbsp;<span class="s-stock-unit-name">{ { selected_stock_unit } }</span>
                                                        </template>
                                                        <template v-else>
                                                            <input class="wa-input is-number" name="order_count_min" disabled
                                                                   v-model="fractional.order_multiplicity_factor.value">&nbsp;<span class="s-stock-unit-name">{ { selected_stock_unit } }</span>
                                                        </template>
                                                    </template>
                                                    <template v-else>
                                                        <div class="shop-tooltip">
                                                            <input class="wa-input is-number" disabled>&nbsp;<span class="s-stock-unit-name">{ { selected_stock_unit } }</span>
                                                            <span><?php echo $_smarty_tpl->tpl_vars['_locales']->value["denominator_min_required"];?>
</span>
                                                        </div>
                                                    </template>

                                                    <template v-if="fractional.order_count_min.status && fractional.order_count_min.enabled">
                                                        <div class="wa-error-text"
                                                             v-if="errors['order_count_min_error']"
                                                             v-html="errors['order_count_min_error'].text"></div>

                                                        <template v-if="!fractional.order_multiplicity_factor.enabled || !fractional.order_multiplicity_factor.editable">
                                                            <div class="s-rights-wrapper">
                                                                <label>
                                                                    <input class="s-checkbox js-checkbox" type="checkbox"
                                                                           v-on:change="onChangeOrderCountMinEditable"
                                                                           v-model="fractional.order_count_min.editable">
                                                                    <span class="s-label">Разрешить изменять в свойствах товаров</span>
                                                                </label>
                                                            </div>
                                                        </template>
                                                        <template v-else>
                                                            <div class="s-rights-wrapper">
                                                                <span class="s-label">Разрешено изменять в свойствах товаров</span>
                                                            </div>
                                                        </template>
                                                    </template>
                                                    <template v-else>
                                                        <div class="s-hint-disabled">Для всех товаров этого типа</div>
                                                    </template>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <div class="s-option-wrapper">
                                            <div class="s-column-switch">
                                                <component-switch
                                                    class="s-switch wa-small"
                                                    v-model="fractional.order_count_step.enabled"
                                                    v-bind:title="!fractional.order_count_step.status ? '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_tooltips']->value["order_count_step_disabled"], ENT_QUOTES, 'UTF-8', true);?>
' : ''"
                                                    v-bind:disabled="!fractional.order_count_step.status"
                                                    v-on:change="onChangeOrderCountStepEnabled"></component-switch>

                                                <input name="order_count_step_fixed" type="hidden" v-model="order_count_step_fixed">

                                            </div>
                                            <div class="s-column-content"
                                                 v-bind:class="{ 'is-disabled': !fractional.order_count_step.status }">

                                                <div class="flexbox space-12">
                                                    <div class="s-title-wrapper">
                                                        <span class="s-title">Изменение количества кнопками «+/-»</span>
                                                        <span class="shop-tooltip"><i class="icon10 info"></i><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_tooltips']->value["order_count_step"], ENT_QUOTES, 'UTF-8', true);?>
</span></span>
                                                    </div>

                                                    <div class="s-default-wrapper wide">
                                                        <template v-if="fractional.order_multiplicity_factor.value">
                                                            <template v-if="fractional.order_count_step.status && fractional.order_count_step.enabled">
                                                            <input class="wa-input is-number" name="order_count_step"
                                                                   v-model="fractional.order_count_step.value"
                                                                   v-bind:class="{ 'wa-error-field' : errors['order_count_step_error'] }"
                                                                   v-on:change="onChangeOrderCountStepValue"
                                                                   v-on:input="checkOrderCountStep">&nbsp;<span class="s-stock-unit-name">{ { selected_stock_unit } }</span>
                                                            </template>
                                                            <template v-else>
                                                                <input class="wa-input is-number" name="order_count_step" disabled
                                                                       v-model="fractional.order_multiplicity_factor.value">&nbsp;<span class="s-stock-unit-name">{ { selected_stock_unit } }</span>
                                                            </template>
                                                        </template>
                                                        <template v-else>
                                                            <div class="shop-tooltip">
                                                                <input class="wa-input is-number" disabled>&nbsp;<span class="s-stock-unit-name">{ { selected_stock_unit } }</span>
                                                                <span><?php echo $_smarty_tpl->tpl_vars['_locales']->value["denominator_step_required"];?>
</span>
                                                            </div>
                                                        </template>

                                                        <template v-if="fractional.order_count_step.status && fractional.order_count_step.enabled">
                                                            <div class="wa-error-text"
                                                                 v-if="errors['order_count_step_error']"
                                                                 v-html="errors['order_count_step_error'].text"></div>

                                                            <template v-if="!fractional.order_multiplicity_factor.enabled || !fractional.order_multiplicity_factor.editable">
                                                                <div class="s-rights-wrapper">
                                                                    <label>
                                                                        <input class="s-checkbox js-checkbox" type="checkbox"
                                                                               v-on:change="onChangeOrderCountStepEditable"
                                                                               v-model="fractional.order_count_step.editable">
                                                                        <span class="s-label">Разрешить изменять в свойствах товаров</span>
                                                                    </label>
                                                                </div>
                                                            </template>
                                                            <template v-else>
                                                                <div class="s-rights-wrapper">
                                                                    <span class="s-label">Разрешено изменять в свойствах товаров</span>
                                                                </div>
                                                            </template>
                                                        </template>
                                                        <template v-else>
                                                            <div class="s-hint-disabled">Для всех товаров этого типа</div>
                                                        </template>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php }?>

                        <div class="field" style="margin-top: 15px;">
                            <div class="name">Выберите витрину</div>
                            <div class="value">

                                <?php $_smarty_tpl->tpl_vars['selected_storefront'] = new Smarty_variable(null, null, 0);?>

                                <div class="s-field-section js-storefront-field-section">
                                    <div class="s-radio-list">
                                        <div class="s-radio-wrapper <?php if (!$_smarty_tpl->tpl_vars['selected_storefront']->value&&!empty($_smarty_tpl->tpl_vars['all_storefronts_is_checked']->value)){?>is-active<?php }?>">
                                            <label class="s-radio-label">
                                                <input class="s-radio js-storefront-group-field" type="radio" name="type[all_storefronts_is_checked]" value="all" <?php if (!$_smarty_tpl->tpl_vars['selected_storefront']->value&&!empty($_smarty_tpl->tpl_vars['all_storefronts_is_checked']->value)){?>checked<?php }?>>
                                                <span class="s-text<?php if (!$_smarty_tpl->tpl_vars['selected_storefront']->value){?> bold<?php }?>">Использовать для всех витрин</span>
                                            </label>
                                        </div>
                                        <div class="s-radio-wrapper <?php if (!$_smarty_tpl->tpl_vars['selected_storefront']->value&&empty($_smarty_tpl->tpl_vars['all_storefronts_is_checked']->value)){?>is-active<?php }?>">
                                            <label class="s-radio-label">
                                                <input class="s-radio js-storefront-group-field" type="radio" name="type[all_storefronts_is_checked]" value="0" <?php if (!$_smarty_tpl->tpl_vars['selected_storefront']->value&&empty($_smarty_tpl->tpl_vars['all_storefronts_is_checked']->value)){?>checked<?php }?>>
                                                <span class="s-text">Использовать для выбранных витрин</span>
                                            </label>

                                            <div class="s-checkbox-list"><?php $_smarty_tpl->tpl_vars['_all_is_checked'] = new Smarty_variable(true, null, 0);?><?php  $_smarty_tpl->tpl_vars['_storefront'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_storefront']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['storefronts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_storefront']->key => $_smarty_tpl->tpl_vars['_storefront']->value){
$_smarty_tpl->tpl_vars['_storefront']->_loop = true;
?><?php if (empty($_smarty_tpl->tpl_vars['_storefront']->value['is_checked'])){?><?php $_smarty_tpl->tpl_vars['_all_is_checked'] = new Smarty_variable(false, null, 0);?><?php break 1?><?php }?><?php } ?><label class="s-checkbox-wrapper s-all-checkbox-wrapper"><input class="s-checkbox js-all-storefronts-field" type="checkbox" <?php if (!empty($_smarty_tpl->tpl_vars['_all_is_checked']->value)){?>checked<?php }?>><span class="s-text">Выбрать все</span></label><?php  $_smarty_tpl->tpl_vars['_storefront'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_storefront']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['storefronts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_storefront']->key => $_smarty_tpl->tpl_vars['_storefront']->value){
$_smarty_tpl->tpl_vars['_storefront']->_loop = true;
?><label class="s-checkbox-wrapper"><input class="s-checkbox js-storefront-field" type="checkbox" name="storefronts[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_storefront']->value['domain'], ENT_QUOTES, 'UTF-8', true);?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_storefront']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_storefront']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_storefront']->value['is_checked'])){?>checked<?php }?>><span class="s-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_storefront']->value['domain'], ENT_QUOTES, 'UTF-8', true);?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_storefront']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
</span></label><?php } ?></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <?php if (!empty($_smarty_tpl->tpl_vars['type_templates']->value)){?>
                        <div class="field-group" data-content-id="template" style="display: none;">
                            <div class="field">
                                <div class="name">Шаблон типа товаров</div>
                                <div class="value">
                                    <ul class="s-templates-list">
                                        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['template_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type_templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['template_id']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
                                            <li class="s-template-wrapper">
                                                <label class="s-label">
                                                    <input class="s-field" type="radio" name="template" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                                    <i class="icon16 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['icon'], ENT_QUOTES, 'UTF-8', true);?>
"></i>
                                                    <span class="s-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                    <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['description'])){?>
                                                        <span class="s-description hint"><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</span>
                                                    <?php }?>
                                                </label>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>

                <div class="s-errors-place js-errors-place"></div>
            </div>

            
            <footer class="wa-dialog-footer">
                <button class="s-button button green js-submit-button" type="submit">Сохранить</button>
                <span class="s-divider">или</span>
                <a href="javascript:void(0);" class="js-close-dialog">отмена</a>
            </footer>

            <input type="hidden" name="id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['type']->value['id'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
">
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

        </form>
    </div>

    <script>
        ( function($) {
            var $wrapper = $("#js-settings-type-add-dialog").removeAttr("id"),
                dialog = $wrapper.data("dialog");

            <?php if (($_smarty_tpl->tpl_vars['type']->value['count']<=0)){?>
            setTimeout(function () {
               $wrapper.find('input[name="name"]').focus();
            }, 150);
            <?php }?>

            dialog.options.initDialog({
                $wrapper: $wrapper,
                dialog: dialog,

                locales: <?php echo json_encode($_smarty_tpl->tpl_vars['_locales']->value);?>
,
                templates: <?php echo json_encode($_smarty_tpl->tpl_vars['_templates']->value);?>
,
                fractional: <?php echo json_encode($_smarty_tpl->tpl_vars['fractional']->value);?>
,
                is_premium: <?php if (!empty($_smarty_tpl->tpl_vars['is_premium']->value)){?>true<?php }else{ ?>false<?php }?>,
                type: {
                    count: <?php if (($_smarty_tpl->tpl_vars['type']->value['count']>0)){?><?php echo $_smarty_tpl->tpl_vars['type']->value['count'];?>
<?php }else{ ?>0<?php }?>
                },

                onSuccess: function(new_type_id) {
                    // console.log( new_type_id );
                }
            });

        })(jQuery);
    </script>
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-12-24 05:47:33
         compiled from "C:\OpenServer\domains\elmarco\elmarcosite\wa-apps\shop\templates\actions\settings\SettingsTypefeatTypeEditConfirm.html" */ ?>
<?php if ($_valid && !is_callable('content_63a668459dfc55_83012973')) {function content_63a668459dfc55_83012973($_smarty_tpl) {?><div class="wa-dialog s-settings-type-edit-confirm-dialog" id="js-settings-type-edit-confirm-dialog">
    <div class="wa-dialog-background"></div>
    <div class="wa-dialog-body">
        <form action="" method="post">
            <div class="js-vue-section">
                
                <header class="wa-dialog-header">
                    <h1 class="s-title"><?php echo sprintf(_w("Confirm “%s” product type’s parameters update"),$_smarty_tpl->tpl_vars['type']->value["name"]);?>
</h1>
                </header>

                
                <div class="wa-dialog-content">
                    <div class="s-content-section" v-if="confirm_values.enabled">
                        <div class="s-section-header">
                            <div class="s-title">Включенные параметры</div>
                            <div class="wa-message info flexbox space-8">
                                <div class="message-icon"><i class="icon16 info"></i></div>
                                <div class="message-text wide">Для включенных параметров укажите значения, которые нужно применить к существующим товарам.</div>
                            </div>
                        </div>
                        <div class="s-section-body">
                            <div class="s-fields-wrapper">
                                
                                <div class="s-field-wrapper" v-if="confirm_values.enabled.stock_unit">
                                    <div class="name">Складская</div>
                                    <div class="value">
                                        <select class="s-select" name="migrate[stock_unit_id]"
                                                v-bind:class="{ 'wa-error-field' : errors['units_error'] }"
                                                v-bind:disabled="!fractional.stock_unit.editable"
                                                v-on:change="onChangeStockUnit"
                                                v-model="fractional.stock_unit.migrate">
                                            <?php  $_smarty_tpl->tpl_vars['_unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fractional']->value["units"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_unit']->key => $_smarty_tpl->tpl_vars['_unit']->value){
$_smarty_tpl->tpl_vars['_unit']->_loop = true;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['_unit']->value['value']!='0'){?>
                                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_unit']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                <?php }?>
                                            <?php } ?>
                                        </select>

                                        <div class="wa-error-text"
                                             v-if="errors['units_error']"
                                             v-html="errors['units_error'].text"></div>
                                    </div>
                                </div>

                                
                                <div class="s-field-wrapper" v-if="confirm_values.enabled.base_unit">
                                    <div class="name">Базовая</div>
                                    <div class="value">
                                        <select class="s-select" name="migrate[base_unit_id]"
                                                v-bind:class="{ 'wa-error-field' : errors['units_error'] }"
                                                v-bind:disabled="!fractional.base_unit.editable"
                                                v-on:change="onChangeBaseUnit"
                                                v-model="fractional.base_unit.migrate">
                                            <option value="">Не задано</option>
                                            <?php  $_smarty_tpl->tpl_vars['_unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fractional']->value["units"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_unit']->key => $_smarty_tpl->tpl_vars['_unit']->value){
$_smarty_tpl->tpl_vars['_unit']->_loop = true;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['_unit']->value['value']!='0'){?>
                                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['_unit']->value['value']===$_smarty_tpl->tpl_vars['fractional']->value["base_unit"]["value"]){?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_unit']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                <?php }?>
                                            <?php } ?>
                                        </select>

                                        <div class="wa-error-text"
                                             v-if="errors['units_error']"
                                             v-html="errors['units_error'].text"></div>
                                    </div>
                                </div>

                                
                                <div class="s-field-wrapper" v-if="confirm_values.enabled.stock_base_ratio && fractional.base_unit.migrate">
                                    <div class="name">Соотношение единиц</div>
                                    <div class="value">
                                        <div class="s-magic-string">
                                            <div class="s-magic-tail"><?php echo sprintf(_w("1 %s"),"{ "."{ "."selected_stock_unit } }");?>
&nbsp;=</div>
                                            <span>
                                                <input class="wa-input is-number js-input" name="migrate[stock_base_ratio]"
                                                       v-bind:class="{ 'wa-error-field' : errors['stock_base_ratio_required'] }"
                                                       v-on:change="onChangeStockBaseRatio"
                                                       v-on:input="checkStockBaseRatio"
                                                       v-model="fractional.stock_base_ratio.migrate">&nbsp;{ { selected_base_unit } }
                                            </span>
                                        </div>

                                        <div class="wa-error-text"
                                             v-if="errors['stock_base_ratio_required']"
                                             v-html="errors['stock_base_ratio_required'].text"></div>
                                    </div>
                                </div>

                                
                                <div class="s-field-wrapper" v-if="confirm_values.enabled.order_multiplicity_factor"
                                     v-bind:class="{ 'is-disabled' : !fractional.order_multiplicity_factor.editable }">
                                    <div class="name">Шаг добавления в корзину</div>
                                    <div class="value">
                                        <input class="wa-input is-number js-input" name="migrate[order_multiplicity_factor]"
                                               v-bind:disabled="!fractional.order_multiplicity_factor.editable"
                                               v-bind:class="{ 'wa-error-field' : errors['order_multiplicity_factor_error'] }"
                                               v-on:change="onChangeCountDenominator"
                                               v-on:input="onInputCountDenominator"
                                               v-model="fractional.order_multiplicity_factor.migrate">&nbsp;{ { selected_stock_unit } }

                                        <div class="wa-error-text"
                                             v-if="errors['order_multiplicity_factor_error']"
                                             v-html="errors['order_multiplicity_factor_error'].text"></div>
                                    </div>
                                </div>

                                
                                <div class="s-field-wrapper" v-if="confirm_values.enabled.order_count_min"
                                     v-bind:class="{ 'is-disabled' : !fractional.order_count_min.editable }">
                                    <div class="name">Минимальное количество для заказа</div>
                                    <div class="value">
                                        <input class="wa-input is-number js-input" name="migrate[order_count_min]"
                                               v-bind:disabled="!fractional.order_count_min.editable"
                                               v-bind:class="{ 'wa-error-field' : errors['order_count_min_error'] }"
                                               v-on:change="onChangeOrderCountMin"
                                               v-on:input="checkOrderCountMin"
                                               v-model="fractional.order_count_min.migrate">&nbsp;{ { selected_stock_unit } }

                                        <div class="wa-error-text"
                                             v-if="errors['order_count_min_error']"
                                             v-html="errors['order_count_min_error'].text"></div>
                                    </div>
                                </div>

                                
                                <div class="s-field-wrapper" v-if="confirm_values.enabled.order_count_step"
                                     v-bind:class="{ 'is-disabled' : !fractional.order_count_step.editable} ">
                                    <div class="name">Изменение количества кнопками «+/-»</div>
                                    <div class="value">
                                        <input class="wa-input is-number js-input" name="migrate[order_count_step]"
                                               v-bind:disabled="!fractional.order_count_step.editable"
                                               v-bind:class="{ 'wa-error-field' : errors['order_count_step_error'] }"
                                               v-on:change="onChangeOrderCountStep"
                                               v-on:input="checkOrderCountStep"
                                               v-model="fractional.order_count_step.migrate">&nbsp;{ { selected_stock_unit } }

                                        <div class="wa-error-text"
                                             v-if="errors['order_count_step_error']"
                                             v-html="errors['order_count_step_error'].text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-content-section" v-if="confirm_values.disabled">
                        <div class="s-section-header">
                            <div class="s-title">Выключенные параметры</div>
                            <div class="wa-message error flexbox space-8">
                                <div class="message-icon"><i class="icon16 exclamation"></i></div>
                                <div class="message-text wide">Для выключенных параметров будут установлены базовые значения в свойствах товаров.</div>
                            </div>
                        </div>
                        <div class="s-section-body">
                            <div class="s-fields-wrapper">
                                
                                <div class="s-field-wrapper" v-if="confirm_values.disabled.stock_unit">
                                    <div class="name">Складская</div>
                                    <div class="value">
                                        <select class="s-select" v-model="fractional.stock_unit.default" disabled>
                                            <option value="">Не задано</option>
                                            <?php  $_smarty_tpl->tpl_vars['_unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fractional']->value["units"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_unit']->key => $_smarty_tpl->tpl_vars['_unit']->value){
$_smarty_tpl->tpl_vars['_unit']->_loop = true;
?>
                                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_unit']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                
                                <div class="s-field-wrapper" v-if="confirm_values.disabled.base_unit">
                                    <div class="name">Базовая</div>
                                    <div class="value">
                                        <select class="s-select" v-model="fractional.base_unit.default" disabled>
                                            <option value="">Не задано</option>
                                            <?php  $_smarty_tpl->tpl_vars['_unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fractional']->value["units"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_unit']->key => $_smarty_tpl->tpl_vars['_unit']->value){
$_smarty_tpl->tpl_vars['_unit']->_loop = true;
?>
                                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_unit']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                
                                <div class="s-field-wrapper is-disabled" v-if="confirm_values.disabled.order_multiplicity_factor">
                                    <div class="name">Шаг добавления в корзину</div>
                                    <div class="value">
                                        <input class="wa-input is-number" v-model="fractional.order_multiplicity_factor.default" disabled>&nbsp;{ { selected_stock_unit } }
                                    </div>
                                </div>

                                
                                <div class="s-field-wrapper is-disabled" v-if="confirm_values.disabled.order_count_min">
                                    <div class="name">Минимальное количество для заказа</div>
                                    <div class="value">
                                        <input class="wa-input is-number" v-model="fractional.order_multiplicity_factor.value" disabled>&nbsp;{ { selected_stock_unit } }
                                        <span>Равно шагу добавления товара в корзину.</span>
                                    </div>
                                </div>

                                
                                <div class="s-field-wrapper is-disabled" v-if="confirm_values.disabled.order_count_step">
                                    <div class="name">Изменение количества кнопками «+/-»</div>
                                    <div class="value">
                                        <input class="wa-input is-number" v-model="fractional.order_multiplicity_factor.value" disabled>&nbsp;{ { selected_stock_unit } }
                                        <span>Равно шагу добавления товара в корзину.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <footer class="wa-dialog-footer">
                    <button class="s-button button yellow js-submit-button" type="submit">Сохранить</button>
                    <button class="s-button button gray js-close-button" type="button">Уйти без сохранения</button>
                    <button class="s-button button blue js-cancel-button" type="button">Остаться</button>
                </footer>
            </div>
        </form>
    </div>

    <script>
        ( function($) {
            var $wrapper = $("#js-settings-type-edit-confirm-dialog").removeAttr("id"),
                dialog = $wrapper.data("dialog");

            dialog.options.initDialog({
                $wrapper: $wrapper,
                dialog: dialog
            });

        })(jQuery);
    </script>
</div>
<?php }} ?>