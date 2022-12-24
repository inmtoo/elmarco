<?php /* Smarty version Smarty-3.1.14, created on 2022-12-24 05:45:23
         compiled from "C:\OpenServer\domains\elmarco\elmarcosite\wa-apps\shop\templates\actions\products\product_list_thumbs.html" */ ?>
<?php /*%%SmartyHeaderCode:13959292163a667c3df1511-97900439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8ae417134f830f041803ecca4aa034c8a01496c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-apps\\shop\\templates\\actions\\products\\product_list_thumbs.html',
      1 => 1664959922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13959292163a667c3df1511-97900439',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link_edit' => 0,
    'wa_app_static_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_63a667c3df56e7_79724344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63a667c3df56e7_79724344')) {function content_63a667c3df56e7_79724344($_smarty_tpl) {?><ul class="thumbs li250px" id="product-list">
    <li style="display:none" class="hidden header"><input type="checkbox" class="s-select-all"></li>
    <script id="template-product-list-thumbs" type="text/html">
    <?php $_smarty_tpl->tpl_vars['link_edit'] = new Smarty_variable(shopHelper::getBackendEditorUrl('@s'), null, 0);?>
    
    {% var current_editor = '<?php echo shopHelper::getCurrentChapter();?>
'; %}
    {% for (var i = 0, n = o.products.length, p = o.products[0]; i < n; p = o.products[++i]) { %}
    <li class="product
        {% if (i == n-1) { %}last{% } %}
        {% if (p.status != '1') { %}gray{% } %}
        {% if (p.alien) { %}s-alien{% } %}"
        data-product-id="{%#p.id%}"
        {% if (p.alien) { %}title="Этот товар находится в одной из подкатегорий"{% } %}
    >
        <div class="s-product-image s-image">
            <a href="{%#'<?php echo $_smarty_tpl->tpl_vars['link_edit']->value;?>
'.replace('@s', p.id).replace('edit/', '')%}{% if (current_editor === 'new_chapter' && !p.edit_rights) { %}prices/{% } %}">
                {% if (p.badge) { %}
                    <div class="s-image-corner top right">{%#p.badge%}</div>
                {% } %}
                {% if (p.image) { %}
                    <img src="{%#p.image.thumb_url%}" class="drag-handle">
                {% } else { %}
                    <img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/image-dummy.png" class="drag-handle not-found is-empty">
                {% } %}
            </a>
        </div>
        <div class="s-product-details">
            <input type="checkbox" id="s-product-checkbox-{%#p.id%}">
            <label for="s-product-checkbox-{%#p.id%}">
                <strong>{%#p.name%}</strong>
            </label>
            <span class="small nowrap">{%#p.price_range%}{% if (p.stock_unit) { %}/{%#p.stock_unit.name_short%}{% } %}</span>
            <!-- extend info according to sorting method -->
            {% if (o.sort == 'rating') { %}
                <span class="rate nowrap" title="{%#'Средняя оценка покупателей: %s / 5'.replace('%s', p.rating)%}">
                    {%#p.rating_str%}
                </span>
            {% } else if (o.sort == 'base_price') { %}
                <span class="hint base-price nowrap">
                    Базовая цена: <strong>{%#p.base_price_range%}</strong>
                </span>
            {% } else if (o.sort == 'total_sales') { %}
                <span class="hint total-sales nowrap">
                    Общие продажи: <strong>{%#p.total_sales_str%}</strong>
                </span>
            {% } else if (o.sort == 'stock_worth') { %}
                <span class="hint stock-worth nowrap">
                    Стоимость активов после реализации: <strong>{%#p.stock_worth_html%}</strong>
                </span>
            {% } else if (o.sort == 'count') { %}
                <span class="small stock nowrap">
                    {%#p.icon%} {%#((p.count === null)?'<span class="gray">∞</span>':''+p.count)%}
                </span>
            {% } else if (o.sort == 'create_datetime') { %}
                <a class="small show-on-hover nowrap" href="{%#'<?php echo $_smarty_tpl->tpl_vars['link_edit']->value;?>
'.replace('@s', p.id)%}{% if (current_editor === 'new_chapter' && !p.edit_rights) { %}prices/{% } %}"><i class="icon10 edit s-instant-edit"></i> редактировать</a>
                <br>
                <span class="hint stock nowrap">
                    {%#'Добавлен %s'.replace('%s', p.create_datetime_str)%}
                </span>
            {% } %}
            {% if (o.sort != 'create_datetime') { %}
            {% if (p.edit_rights) { %}
                <a class="small show-on-hover nowrap" href="{%#'<?php echo $_smarty_tpl->tpl_vars['link_edit']->value;?>
'.replace('@s', p.id)%}"><i class="icon10 edit s-instant-edit"></i> редактировать</a>
            {% } %}
            {% } %}
        </div>
    </li>
    {% } %}
    
    </script>
</ul><?php }} ?>