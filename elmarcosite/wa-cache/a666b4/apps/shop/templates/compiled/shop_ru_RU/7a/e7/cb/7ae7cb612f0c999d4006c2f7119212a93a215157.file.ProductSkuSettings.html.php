<?php /* Smarty version Smarty-3.1.14, created on 2022-12-24 05:49:03
         compiled from "C:\OpenServer\domains\elmarco\elmarcosite\wa-apps\shop\templates\actions\product\ProductSkuSettings.html" */ ?>
<?php /*%%SmartyHeaderCode:184830281763a6689fc960f2-27818130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ae7cb612f0c999d4006c2f7119212a93a215157' => 
    array (
      0 => 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-apps\\shop\\templates\\actions\\product\\ProductSkuSettings.html',
      1 => 1664959922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184830281763a6689fc960f2-27818130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'sku_id' => 0,
    'sku' => 0,
    'backend_product_sku_settings' => 0,
    '_' => 0,
    'features' => 0,
    'feature' => 0,
    'code' => 0,
    'sku_features' => 0,
    'product' => 0,
    'units' => 0,
    'unit' => 0,
    'default_unit' => 0,
    'selected_' => 0,
    'image_id' => 0,
    'image' => 0,
    'wa_app_url' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_63a6689fcfbbb4_47008360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63a6689fcfbbb4_47008360')) {function content_63a6689fcfbbb4_47008360($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_format_file_size')) include 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-system/vendors/smarty-plugins\\modifier.wa_format_file_size.php';
?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/fileupload/jquery.iframe-transport.js"></script>

<div class="fields form extra-padded-left">

    <div class="field">
        <div class="name">ID артикула</div>
        <div class="value no-shift">
            <?php if (($_smarty_tpl->tpl_vars['sku_id']->value>0)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku_id']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>—<?php }?>
        </div>
    </div>

    <div class="field">
        <div class="name">Доступен для заказа</div>
        <input type="hidden" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][available]" value="0">
        <div class="value no-shift"><input type="checkbox" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][available]" <?php if (!empty($_smarty_tpl->tpl_vars['sku']->value['available'])){?> checked="checked"<?php }?> value="1"></div>
    </div>
    <div class="field">
        <div class="name">Видимость на витрине</div>
        <input type="hidden" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][status]" value="0">
        <div class="value no-shift"><input type="checkbox" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][status]" <?php if (!empty($_smarty_tpl->tpl_vars['sku']->value['status'])){?> checked="checked"<?php }?> value="1"></div>
    </div>

    <!-- plugin hook: 'backend_product_sku_settings' -->
    
    <?php if (!empty($_smarty_tpl->tpl_vars['backend_product_sku_settings']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_product_sku_settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?><?php }?>

    
    <?php if (!empty($_smarty_tpl->tpl_vars['features']->value['weight'])){?>
        <?php $_smarty_tpl->tpl_vars['feature'] = new Smarty_variable($_smarty_tpl->tpl_vars['features']->value['weight'], null, 0);?>
        <?php if (empty($_smarty_tpl->tpl_vars['feature']->value['multiple'])&&(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'dimension.')===0)){?>
            <?php $_smarty_tpl->tpl_vars['code'] = new Smarty_variable('weight', null, 0);?>
            <div class="field">
                <div class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<br><span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                <div class="value">
                    <?php $_smarty_tpl->tpl_vars['units'] = new Smarty_variable(shopDimension::getUnits($_smarty_tpl->tpl_vars['feature']->value['type']), null, 0);?>
                    <input type="text" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][value]"
                        value="<?php if (isset($_smarty_tpl->tpl_vars['sku_features']->value[$_smarty_tpl->tpl_vars['code']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku_features']->value[$_smarty_tpl->tpl_vars['code']->value]->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                        <?php if (!isset($_smarty_tpl->tpl_vars['sku_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&isset($_smarty_tpl->tpl_vars['product']->value['features'][$_smarty_tpl->tpl_vars['code']->value])){?>
                            placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['features'][$_smarty_tpl->tpl_vars['code']->value]->value, ENT_QUOTES, 'UTF-8', true);?>
"
                        <?php }?>
                    >
                    <select name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
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
                            <?php if (isset($_smarty_tpl->tpl_vars['sku_features']->value[$_smarty_tpl->tpl_vars['code']->value])){?>
                                <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable($_smarty_tpl->tpl_vars['sku_features']->value[$_smarty_tpl->tpl_vars['code']->value]->unit==$_smarty_tpl->tpl_vars['unit']->value['value'], null, 0);?>
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
                    <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['features'][$_smarty_tpl->tpl_vars['code']->value])){?>
                        <p class="hint"><?php echo sprintf('Укажите вес этого артикула, если он отличается от значения веса, заданного для товара (%s).',$_smarty_tpl->tpl_vars['product']->value['features']['weight']);?>
 Значение поля «Вес» используется для расчета стоимости доставки.</p>
                    <?php }?>
                </div>
            </div>
        <?php }?>
    <?php }?>

    <div class="field s-product-sku-images" <?php if (count($_smarty_tpl->tpl_vars['product']->value->images)<=1){?>style="display:none"<?php }?>>
        <div class="name">Изображение для данного артикула</div>
        <div class="value">
        <input type="text" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][image_id]" value="<?php echo $_smarty_tpl->tpl_vars['sku']->value['image_id'];?>
" style="display:none;">
        <ul class="s-product-image-crops">

            

            <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['image_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value->images; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image_id']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
            <li data-image-id="<?php echo $_smarty_tpl->tpl_vars['image_id']->value;?>
"<?php if (($_smarty_tpl->tpl_vars['sku']->value['image_id']==$_smarty_tpl->tpl_vars['image_id']->value)){?> class="selected"<?php }?>>
                <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/main/sku/image/select/<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['image_id']->value;?>
/" class="js-action"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['url_crop'];?>
"></a>
            </li>
            <?php } ?>

        </ul>
        </div>
    </div>

    <div class="field">
        <div class="name">
            Прикрепленный файл
        </div>
        <div class="value no-shift">
            <input type="file" name="" class="fileupload" <?php if ($_smarty_tpl->tpl_vars['sku_id']->value<0){?> disabled="disabled"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['sku']->value['file_name'])){?> style="display:none;"<?php }?>>

            <?php if ($_smarty_tpl->tpl_vars['sku_id']->value<0){?><span class="hint"><br>Сохраните информацию о товаре, чтобы прикрепить файл</span><?php }?>

            <div class="js-progressbar-container" style="display:none;">
                <div class="progressbar blue float-left" style="width: 70%;">
                    <div class="progressbar-outer">
                        <div class="progressbar-inner" style="width: 0%;"></div>
                    </div>
                </div>
                <br clear="left">
                <span class="small italic">Пожалуйста, не закрывайте браузер и не покидайте эту страницу, пока не завершится процесс загрузки.</span>
            </div>

            <div class="s-sku-attachment" <?php if (empty($_smarty_tpl->tpl_vars['sku']->value['file_name'])){?> style="display: none;"<?php }?>>
                <input type="hidden" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][eproduct_manage]" value="1">
                <input type="checkbox" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][eproduct]" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['sku']->value['file_name'])){?> checked="checked"<?php }?>>
                <strong class="s-file-name">
                    <?php if (!empty($_smarty_tpl->tpl_vars['sku']->value['file_name'])){?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['file_name'], ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </strong>
                <span class="s-file-size hint">
                    <?php if (!empty($_smarty_tpl->tpl_vars['sku']->value['file_size'])){?>
                        <?php echo smarty_modifier_wa_format_file_size($_smarty_tpl->tpl_vars['sku']->value['file_size']);?>

                    <?php }?>
                </span>
                <input type="hidden" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][file_name]" class="s-input-file-name" value="<?php if (!empty($_smarty_tpl->tpl_vars['sku']->value['file_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['file_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                <p class="small">Комментарий к прикрепленному файлу (необязательно):<br>
                    <textarea rows="5" cols="40" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][file_description]" class="s-file-description"><?php if (!empty($_smarty_tpl->tpl_vars['sku']->value['file_description'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['file_description'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
                </p>
            </div>

            <p class="hint">Ссылка на загрузку файла будет отправлена покупателю в уведомлении о заказе и будет работать только в случае, если заказ был оплачен. Удобный способ доставки электронных товаров.</p>

            <span class="error-message"></span>
        </div>
    </div>

    <?php if (count($_smarty_tpl->tpl_vars['features']->value)>1){?>
        <h5 class="heading">Характеристики артикула</h5>
        <p class="hint">
            Сохранение значений характеристик для артикулов позволяет улучшить удобство подбора товаров для покупателя. Когда покупатель находит товар с использованием фильтров по характеристикам, артикул для этого товара будет выбран автоматически согласно указанным значениям характеристик.
            <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=settings#/typefeat/" target="_blank" style="display: inline-block;"><i class="icon16 settings" style="display: inline-block; margin: 0 4px 0 0; position: static; float: none;"></i>Настроить типы и характеристики</a>
        </p>
    <?php }?>
    <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['feature']->key;
?>
        <?php if (($_smarty_tpl->tpl_vars['code']->value!=='weight')){?>
            
            <?php if (empty($_smarty_tpl->tpl_vars['feature']->value['multiple'])){?>
                <?php echo $_smarty_tpl->getSubTemplate ("./include.feature.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('namespace'=>"skus[".((string)$_smarty_tpl->tpl_vars['sku_id']->value)."]",'item_features'=>$_smarty_tpl->tpl_vars['sku_features']->value), 0);?>

            <?php }else{ ?>
                <div class="field" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                    <div class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<br><span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                    <div class="value">
                        <select name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]">
                            <option value=""></option>
                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                                <option value="<?php echo (string)htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (isset($_smarty_tpl->tpl_vars['sku_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&($_smarty_tpl->tpl_vars['value']->value==(string)$_smarty_tpl->tpl_vars['sku_features']->value[$_smarty_tpl->tpl_vars['code']->value])){?>selected="selected"<?php }?>>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>

                                </option>
                            <?php } ?>
                        </select>

                    </div>
                </div>
            <?php }?>
        <?php }?>
    <?php } ?>

</div>
<?php }} ?>