<?php /* Smarty version Smarty-3.1.14, created on 2022-12-24 05:51:34
         compiled from "C:\OpenServer\domains\elmarco\elmarcosite\wa-apps\shop\templates\actions\product\include.feature.html" */ ?>
<?php /*%%SmartyHeaderCode:183017162763a669360a5b50-82813087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '516e2900157f3be39c14e27fc286af9e1662ddc9' => 
    array (
      0 => 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-apps\\shop\\templates\\actions\\product\\include.feature.html',
      1 => 1608796920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183017162763a669360a5b50-82813087',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'namespace' => 0,
    'code' => 0,
    'feature' => 0,
    '_prefix' => 0,
    'features_selectable' => 0,
    'value_id' => 0,
    'item_features' => 0,
    'value' => 0,
    'feature_selectable' => 0,
    'value_checked' => 0,
    'inline_edit' => 0,
    'product' => 0,
    'selected_' => 0,
    'type' => 0,
    'feature_unit' => 0,
    'd' => 0,
    'i' => 0,
    'code_' => 0,
    'units' => 0,
    'unit' => 0,
    'default_unit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_63a6693617a9e4_14985071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63a6693617a9e4_14985071')) {function content_63a6693617a9e4_14985071($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-system\\vendors\\smarty3\\plugins\\modifier.regex_replace.php';
if (!is_callable('smarty_modifier_wa_date')) include 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-system/vendors/smarty-plugins\\modifier.wa_date.php';
if (!is_callable('smarty_modifier_replace')) include 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-system\\vendors\\smarty3\\plugins\\modifier.replace.php';
?>
<?php ob_start();?><?php echo smarty_modifier_regex_replace(smarty_modifier_regex_replace(($_smarty_tpl->tpl_vars['namespace']->value).('-features-'),'@([^\d_\w]+)@','-'),'@([\-]{2,})@','-');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['_prefix'] = new Smarty_variable($_tmp1, null, 0);?>
<?php if (strpos($_smarty_tpl->tpl_vars['code']->value,'.')===false){?>
    <div class="field<?php if ($_smarty_tpl->tpl_vars['feature']->value['type']=='divider'){?> divider<?php }?>"
         data-type="<?php echo $_smarty_tpl->tpl_vars['feature']->value['type'];?>
"
         data-multiple="<?php echo $_smarty_tpl->tpl_vars['feature']->value['multiple'];?>
"
         data-selectable="<?php echo $_smarty_tpl->tpl_vars['feature']->value['selectable'];?>
"
         data-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8', true);?>
"
         data-default-unit="<?php echo $_smarty_tpl->tpl_vars['feature']->value['default_unit'];?>
"
    >
        <div class="name" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <label for="<?php echo $_smarty_tpl->tpl_vars['_prefix']->value;?>
<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
">
                <?php if (empty($_smarty_tpl->tpl_vars['feature']->value['internal'])){?>
                    <i class="icon10 exclamation"
                       title="Эта характеристика не принадлежит типу товаров, который выбран для данного товара"></i>
                <?php }?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                <?php if ($_smarty_tpl->tpl_vars['feature']->value['status']!='public'){?>
                    <i class="icon16 ss visibility" title="Видна только в бекенде"></i>
                <?php }?>
            </label>
            <span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['feature']->value['selectable']){?>
            <?php $_smarty_tpl->tpl_vars['feature_selectable'] = new Smarty_variable(($_smarty_tpl->tpl_vars['feature']->value['multiple']&&!empty($_smarty_tpl->tpl_vars['features_selectable']->value[$_smarty_tpl->tpl_vars['code']->value])&&!empty($_smarty_tpl->tpl_vars['features_selectable']->value[$_smarty_tpl->tpl_vars['code']->value]['selected'])), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['feature_selectable_disabled'] = new Smarty_variable(0, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['feature']->value['multiple']){?>
                <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][]" value="">
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['value_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['value_id']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <?php $_smarty_tpl->tpl_vars['value_checked'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['value_id']->value]), null, 0);?>
                    <div class="value"
                         data-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                         data-value-id="<?php echo $_smarty_tpl->tpl_vars['value_id']->value;?>
"
                         <?php if ($_smarty_tpl->tpl_vars['feature_selectable']->value&&!$_smarty_tpl->tpl_vars['value_checked']->value){?> style="display: none;"<?php }?>
                    >
                        <label>
                            <input type="checkbox"
                                   name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][]"
                                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                                   <?php if ($_smarty_tpl->tpl_vars['value_checked']->value){?> checked="checked"<?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['feature_selectable']->value){?> disabled="disabled"<?php }?>
                            >
                            <?php if (is_object($_smarty_tpl->tpl_vars['value']->value)&&isset($_smarty_tpl->tpl_vars['value']->value['icon'])){?><?php echo $_smarty_tpl->tpl_vars['value']->value['icon'];?>
<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>

                        </label>
                    </div>
                <?php } ?>

                <?php if (!empty($_smarty_tpl->tpl_vars['inline_edit']->value)&&(empty(Smarty::$_smarty_vars['capture'])||empty(Smarty::$_smarty_vars['capture']['feature-value-multiple-template-js']))){?>
                    <!-- <?php $_smarty_tpl->_capture_stack[0][] = array("feature-value-multiple-template-js", null, null); ob_start(); ?> edit new feature value jquery template -->
                    <div class="value">
                        <label>
                            <input type="checkbox"
                                   checked="checked"
                                   disabled="disabled"
                                   name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[{%=o.feature.input%}]"
                                   value=""
                            >
                            {% include (o.feature.value_template, {'feature': o.feature}); %}
                        </label>
                        <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/features/value/delete/" class="inline-link js-action" title="Отмена">
                            <i class="icon10 delete"></i>
                        </a>
                    </div>
                    <!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> -->
                <?php }?>

            <?php }else{ ?>
                <div class="value">
                    <select id="<?php echo $_smarty_tpl->tpl_vars['_prefix']->value;?>
<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]">
                        <option value=""<?php if (empty($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value])){?> selected="selected"<?php }?>>&nbsp;</option>
                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['value_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['value_id']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                            <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable((!empty($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&((string)$_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]==$_smarty_tpl->tpl_vars['value']->value)), null, 0);?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['selected_']->value){?> selected="selected"<?php }?><?php if (is_object($_smarty_tpl->tpl_vars['value']->value)){?> style="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['style'])===null||$tmp==='' ? '' : $tmp);?>
"<?php }?>>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>

                            </option>
                        <?php } ?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['inline_edit']->value)&&empty(Smarty::$_smarty_vars['capture'])&&empty(Smarty::$_smarty_vars['capture']['feature-value-template-js'])){?>
                            <!-- <?php $_smarty_tpl->_capture_stack[0][] = array("feature-value-template-js", null, null); ob_start(); ?> edit feature jquery template -->
                            <option value="{%=o.value%}">{%=o.value%}</option>
                            <!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> -->
                        <?php }?>
                    </select>
                </div>
            <?php }?>

        <?php if (!empty($_smarty_tpl->tpl_vars['inline_edit']->value)){?>
            <div class="value js-value-add" <?php if ($_smarty_tpl->tpl_vars['feature_selectable']->value){?> style="display: none;"<?php }?>>
                <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/features/value/add/" class="inline-link hint js-action">
                    <b><i>добавить значение</i></b>
                </a>
            </div>
        <?php }?>
<?php }else{ ?>
    <div class="value">
        <?php if ((strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'2d')===0)||(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'3d')===0)){?>
            <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['feature']->value['type'],3), null, 0);?>
            <?php if (strpos($_smarty_tpl->tpl_vars['type']->value,'dimension')===0){?>
                <?php $_smarty_tpl->tpl_vars['units'] = new Smarty_variable(shopDimension::getUnits($_smarty_tpl->tpl_vars['type']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['d'] = new Smarty_variable(intval($_smarty_tpl->tpl_vars['feature']->value['type']), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['feature_unit'] = new Smarty_variable(null, null, 0);?>
                <?php if (!$_smarty_tpl->tpl_vars['feature_unit']->value&&isset($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['d']->value-1])&&is_object($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['d']->value-1])){?>
                    <?php $_smarty_tpl->tpl_vars['feature_unit'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['d']->value-1]->unit, null, 0);?>
                <?php }?>
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['d']->value){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['d']->value; $_smarty_tpl->tpl_vars['i']->value++){
?>
                    <?php $_smarty_tpl->tpl_vars['code_'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['code']->value).".".((string)$_smarty_tpl->tpl_vars['i']->value), null, 0);?>
                    <?php if (!$_smarty_tpl->tpl_vars['feature_unit']->value&&isset($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value])&&is_object($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value])){?>
                        <?php $_smarty_tpl->tpl_vars['feature_unit'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value]->unit, null, 0);?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['i']->value){?>×<?php }?>
                    <input id="<?php echo $_smarty_tpl->tpl_vars['_prefix']->value;?>
<?php if ($_smarty_tpl->tpl_vars['i']->value){?><?php echo $_smarty_tpl->tpl_vars['code_']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
<?php }?>"
                           type="text"
                           value="<?php if (isset($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value])&&is_object($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value]->convert($_smarty_tpl->tpl_vars['feature_unit']->value,false), ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                           name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code_']->value;?>
][value]"
                           class="numerical short"
                    >
                <?php }} ?>
                <select name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
.0][unit]">
                    <?php $_smarty_tpl->tpl_vars['default_unit'] = new Smarty_variable(isset($_smarty_tpl->tpl_vars['feature']->value['default_unit'])&&isset($_smarty_tpl->tpl_vars['units']->value[$_smarty_tpl->tpl_vars['feature']->value['default_unit']]), null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['units']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['unit']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
 $_smarty_tpl->tpl_vars['unit']->index++;
 $_smarty_tpl->tpl_vars['unit']->first = $_smarty_tpl->tpl_vars['unit']->index === 0;
?>
                        <?php if ($_smarty_tpl->tpl_vars['feature_unit']->value){?>
                            <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable($_smarty_tpl->tpl_vars['feature_unit']->value==$_smarty_tpl->tpl_vars['unit']->value['value'], null, 0);?>
                        <?php }else{ ?>
                            <?php if ($_smarty_tpl->tpl_vars['default_unit']->value){?>
                                <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable($_smarty_tpl->tpl_vars['feature']->value['default_unit']==$_smarty_tpl->tpl_vars['unit']->value['value'], null, 0);?>
                            <?php }else{ ?>
                                <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable($_smarty_tpl->tpl_vars['unit']->first, null, 0);?>
                            <?php }?>
                        <?php }?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"
                                title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"
                                <?php if ($_smarty_tpl->tpl_vars['selected_']->value){?> selected="selected"<?php }?>
                        ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                    <?php } ?>
                </select>
            <?php }else{ ?>
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 0;
  if ($_smarty_tpl->tpl_vars['i']->value<intval($_smarty_tpl->tpl_vars['feature']->value['type'])){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<intval($_smarty_tpl->tpl_vars['feature']->value['type']); $_smarty_tpl->tpl_vars['i']->value++){
?>
                    <?php $_smarty_tpl->tpl_vars['code_'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['code']->value).".".((string)$_smarty_tpl->tpl_vars['i']->value), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['i']->value){?>×<?php }?>
                    <input id="<?php echo $_smarty_tpl->tpl_vars['_prefix']->value;?>
<?php echo $_smarty_tpl->tpl_vars['code_']->value;?>
"
                           type="text"
                           value="<?php if (isset($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value][$_smarty_tpl->tpl_vars['i']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                           name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code_']->value;?>
]"
                           class="numerical short"
                    >
                <?php }} ?>
            <?php }?>
        <?php }elseif(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'dimension')===0){?>
            <?php $_smarty_tpl->tpl_vars['units'] = new Smarty_variable(shopDimension::getUnits($_smarty_tpl->tpl_vars['feature']->value['type']), null, 0);?>
            <input id="<?php echo $_smarty_tpl->tpl_vars['_prefix']->value;?>
<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" type="text"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                   name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][value]"
            >
            <select name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][unit]">
                <?php $_smarty_tpl->tpl_vars['default_unit'] = new Smarty_variable(isset($_smarty_tpl->tpl_vars['feature']->value['default_unit'])&&isset($_smarty_tpl->tpl_vars['units']->value[$_smarty_tpl->tpl_vars['feature']->value['default_unit']]), null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['units']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['unit']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
 $_smarty_tpl->tpl_vars['unit']->index++;
 $_smarty_tpl->tpl_vars['unit']->first = $_smarty_tpl->tpl_vars['unit']->index === 0;
?>
                    <?php if (isset($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value])){?>
                        <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]->unit==$_smarty_tpl->tpl_vars['unit']->value['value'], null, 0);?>
                    <?php }else{ ?>
                        <?php if ($_smarty_tpl->tpl_vars['default_unit']->value){?>
                            <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable($_smarty_tpl->tpl_vars['feature']->value['default_unit']==$_smarty_tpl->tpl_vars['unit']->value['value'], null, 0);?>
                        <?php }else{ ?>
                            <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable($_smarty_tpl->tpl_vars['unit']->first, null, 0);?>
                        <?php }?>
                    <?php }?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"
                            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['selected_']->value){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                <?php } ?>
            </select>
        <?php }elseif(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'range')===0){?>
            <?php if ($_smarty_tpl->tpl_vars['feature']->value['type']=='range.date'){?>
                <label class="js-datepicker-wrapper">
                    <input id="<?php echo $_smarty_tpl->tpl_vars['_prefix']->value;?>
<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
-start" type="text"
                           value="<?php if (isset($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&!$_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]->begin->is_null()){?><?php echo smarty_modifier_wa_date((($tmp = @$_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]->begin->value)===null||$tmp==='' ? '' : $tmp));?>
<?php }?>"
                           class="s-product-feature-date js-datepicker">
                    <input name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][value][begin]"
                           id="<?php echo $_smarty_tpl->tpl_vars['_prefix']->value;?>
<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
-start-hidden" type="hidden"
                           value="<?php if (isset($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&!$_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]->begin->is_null()){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]->begin->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }?>"
                           class="s-product-feature-date js-datepicker-hidden">
                    <i class="icon16 calendar js-focus-on-field"></i>
                </label>
                <span>—</span>
                <label class="js-datepicker-wrapper">
                    <input id="<?php echo $_smarty_tpl->tpl_vars['_prefix']->value;?>
<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
-end" type="text"
                           value="<?php if (isset($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&!$_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]->end->is_null()){?><?php echo smarty_modifier_wa_date((($tmp = @$_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]->end->value)===null||$tmp==='' ? '' : $tmp));?>
<?php }?>"
                           class="s-product-feature-date js-datepicker">
                    <input name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][value][end]"
                           id="<?php echo $_smarty_tpl->tpl_vars['_prefix']->value;?>
<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
-end-hidden" type="hidden"
                           value="<?php if (isset($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&!$_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]->end->is_null()){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]->end->value)===null||$tmp==='' ? '' : $tmp);?>
<?php }?>"
                           class="s-product-feature-date js-datepicker-hidden">
                    <i class="icon16 calendar js-focus-on-field"></i>
                </label>
            <?php }else{ ?>
                <input id="<?php echo $_smarty_tpl->tpl_vars['_prefix']->value;?>
<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
-begin" type="text"
                       value="<?php if (isset($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&!$_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]->begin->is_null()){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]->begin->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                       name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][value][begin]" class="numerical short">
                <span>—</span>
                <input id="<?php echo $_smarty_tpl->tpl_vars['_prefix']->value;?>
<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
-end" type="text"
                       value="<?php if (isset($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&!$_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]->end->is_null()){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]->end->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                       name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][value][end]" class="numerical short">
            <?php }?>
            <?php $_smarty_tpl->tpl_vars['units'] = new Smarty_variable(shopDimension::getUnits($_smarty_tpl->tpl_vars['feature']->value['type']), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['units']->value){?>
                <select name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][unit]">
                    <?php $_smarty_tpl->tpl_vars['default_unit'] = new Smarty_variable(isset($_smarty_tpl->tpl_vars['feature']->value['default_unit'])&&isset($_smarty_tpl->tpl_vars['units']->value[$_smarty_tpl->tpl_vars['feature']->value['default_unit']]), null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['units']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['unit']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
 $_smarty_tpl->tpl_vars['unit']->index++;
 $_smarty_tpl->tpl_vars['unit']->first = $_smarty_tpl->tpl_vars['unit']->index === 0;
?>
                        <?php if (isset($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value])){?>
                            <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]->unit==$_smarty_tpl->tpl_vars['unit']->value['value'], null, 0);?>
                        <?php }else{ ?>
                            <?php if ($_smarty_tpl->tpl_vars['default_unit']->value){?>
                                <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable($_smarty_tpl->tpl_vars['feature']->value['default_unit']==$_smarty_tpl->tpl_vars['unit']->value['value'], null, 0);?>
                            <?php }else{ ?>
                                <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable($_smarty_tpl->tpl_vars['unit']->first, null, 0);?>
                            <?php }?>
                        <?php }?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"
                                title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['selected_']->value){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                    <?php } ?>
                </select>
            <?php }?>
        <?php }elseif(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'text')===0){?>
            
            <textarea id="<?php echo $_smarty_tpl->tpl_vars['_prefix']->value;?>
<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]"><?php if (isset($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
        <?php }elseif(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'color')===0){?>
            <input id="<?php echo $_smarty_tpl->tpl_vars['_prefix']->value;?>
<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][value]" type="text"
                   value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]['value'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="название цвета">
            <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/features/value/color/" class="inline-link js-action" style="display: inline;">
                <i class="icon16 color" style="background: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]['hex'])===null||$tmp==='' ? '#FFFFFF' : $tmp);?>
;"></i>
            </a>
            <span>#</span>
            <input name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][code]" type="text"
                   value="<?php echo htmlspecialchars(smarty_modifier_replace((($tmp = @$_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]['hex'])===null||$tmp==='' ? '' : $tmp),'#',''), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="000000" class="small">
        <?php }elseif(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'boolean')===0){?>
            <?php if (isset($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value])){?>
                <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value]->value, null, 0);?>
            <?php }else{ ?>
                <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable(false, null, 0);?>
            <?php }?>
            <label>
                <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]" value="1"
                       <?php if ($_smarty_tpl->tpl_vars['value']->value===1){?> checked="checked"<?php }?>>
                Да
            </label>
            </div>
            <div class="value">
                <label>
                    <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]" value="0"
                           <?php if ($_smarty_tpl->tpl_vars['value']->value===0){?> checked="checked"<?php }?>>
                    Нет
                </label>
            </div>
            <div class="value">
                <label>
                    <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]" value=""
                           <?php if ($_smarty_tpl->tpl_vars['value']->value===false){?> checked="checked"<?php }?>>
                    Не указано
                </label>
        <?php }elseif(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'divider')===0){?>
            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]" value="-">
        <?php }elseif(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'date')===0){?>
            <label class="js-datepicker-wrapper">
                <input id="<?php echo $_smarty_tpl->tpl_vars['_prefix']->value;?>
<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['feature']->value['type'];?>
" type="text"
                       class="s-product-feature-date js-datepicker"
                       value="<?php if (isset($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value])){?><?php echo smarty_modifier_wa_date((($tmp = @$_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value])===null||$tmp==='' ? '' : $tmp));?>
<?php }?>">
                <input name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]"
                       id="<?php echo $_smarty_tpl->tpl_vars['_prefix']->value;?>
<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
-hidden" data-type="<?php echo $_smarty_tpl->tpl_vars['feature']->value['type'];?>
" type="hidden"
                       class="s-product-feature-date js-datepicker-hidden"
                       value="<?php if (isset($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value])){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value])===null||$tmp==='' ? '' : $tmp);?>
<?php }?>">
                <i class="icon16 calendar js-focus-on-field"></i>
            </label>

        <?php }else{ ?>
            <input id="<?php echo $_smarty_tpl->tpl_vars['_prefix']->value;?>
<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" type="text" name="<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]" data-type="<?php echo $_smarty_tpl->tpl_vars['feature']->value['type'];?>
"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_features']->value[$_smarty_tpl->tpl_vars['code']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
        <?php }?>
        </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['feature']->value['type']=='divider'&&empty($_smarty_tpl->tpl_vars['feature']->value['internal'])){?>
            <a class="inline-link js-delete-divider" style="float:right;" href="javascript:void(0);">
                <i class="icon10 delete"></i>
                <b><i>удалить</i></b>
            </a>
        <?php }?>
    </div>
<?php }?><?php }} ?>