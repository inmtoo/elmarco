<?php /* Smarty version Smarty-3.1.14, created on 2022-12-24 05:53:08
         compiled from "C:\OpenServer\domains\elmarco\elmarcosite\wa-apps\shop\themes\default\product.html" */ ?>
<?php /*%%SmartyHeaderCode:38762343363a66994afe8a6-46002074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e46b45be5e6d60372bba759a205bca6ff9446331' => 
    array (
      0 => 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-apps\\shop\\themes\\default\\product.html',
      1 => 1649318563,
      2 => 'file',
    ),
    '664fdb5ca72239ae88a9a74e749b4dec60336800' => 
    array (
      0 => 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-apps\\shop\\themes\\default\\product.cart.html',
      1 => 1591777020,
      2 => 'file',
    ),
    '38a073fc1659493aead095bd576e9b4724ee2c9a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-apps\\shop\\themes\\default\\review.html',
      1 => 1588062360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38762343363a66994afe8a6-46002074',
  'function' => 
  array (
    '_render_sku_features' => 
    array (
      'parameter' => 
      array (
        '_features' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'in_stock' => 
    array (
      'parameter' => 
      array (
        'n' => 0,
        'low' => 5,
        'critical' => 2,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    '_head_prefix' => 0,
    'wa' => 0,
    'wa_theme_url' => 0,
    'wa_theme_version' => 0,
    '_features' => 0,
    '_feature_id' => 0,
    '_true_params' => 0,
    '_is_good_param' => 0,
    'sku_features' => 0,
    '_feature' => 0,
    '_itemprop' => 0,
    '_feature_value' => 0,
    'product' => 0,
    '_sku' => 0,
    '_sku_features_html' => 0,
    'reviews_total_count' => 0,
    'page' => 0,
    'frontend_product' => 0,
    '_' => 0,
    'theme_settings' => 0,
    'compare' => 0,
    'video' => 0,
    '_thumb' => 0,
    '_absolute_thumb_uri' => 0,
    'image' => 0,
    '_skus_features_html' => 0,
    'c' => 0,
    't' => 0,
    'rates' => 0,
    '_total_count' => 0,
    '_count' => 0,
    'i' => 0,
    'reviews' => 0,
    'review' => 0,
    'upselling' => 0,
    'crossselling' => 0,
    'compare_ids' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_63a66994c445a0_17980841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63a66994c445a0_17980841')) {function content_63a66994c445a0_17980841($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_head_prefix'] = new Smarty_variable("og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# product: http://ogp.me/ns/product#", null, 0);?>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals("headPrefix",$_smarty_tpl->tpl_vars['_head_prefix']->value);?>


<link href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
swipebox/css/swipebox.css" rel="stylesheet">
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
swipebox/js/jquery.swipebox.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
js/page.product.js?v=<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script>

<?php if (!function_exists('smarty_template_function__render_sku_features')) {
    function smarty_template_function__render_sku_features($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['_render_sku_features']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <table class="features" id="product-features">
        <?php  $_smarty_tpl->tpl_vars['_feature_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_feature_value']->_loop = false;
 $_smarty_tpl->tpl_vars['_feature_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_feature_value']->key => $_smarty_tpl->tpl_vars['_feature_value']->value){
$_smarty_tpl->tpl_vars['_feature_value']->_loop = true;
 $_smarty_tpl->tpl_vars['_feature_id']->value = $_smarty_tpl->tpl_vars['_feature_value']->key;
?>
            <?php $_smarty_tpl->tpl_vars['_true_params'] = new Smarty_variable(array("weight","brand","model","width","height","depth","color","manufacturer"), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['_is_good_param'] = new Smarty_variable((in_array($_smarty_tpl->tpl_vars['_feature_id']->value,$_smarty_tpl->tpl_vars['_true_params']->value)), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['_itemprop'] = new Smarty_variable('', null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['_is_good_param']->value){?><?php $_smarty_tpl->tpl_vars['_itemprop'] = new Smarty_variable($_smarty_tpl->tpl_vars['_feature_id']->value, null, 0);?><?php }?>
            <?php $_smarty_tpl->tpl_vars['_feature'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['sku_features']->value,$_smarty_tpl->tpl_vars['_feature_id']->value,null), null, 0);?>

            <?php if ($_smarty_tpl->tpl_vars['_feature']->value&&$_smarty_tpl->tpl_vars['_feature']->value['type']=='divider'){?>
                <tr class="divider">
                    <td colspan="2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
            <?php }elseif($_smarty_tpl->tpl_vars['_feature']->value){?>
                <tr>
                    <td class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td class="value" itemprop="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_itemprop']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php if (is_array($_smarty_tpl->tpl_vars['_feature_value']->value)){?>
                            <?php if ($_smarty_tpl->tpl_vars['_feature']->value['type']=='color'){?>
                                <?php echo implode('<br>',$_smarty_tpl->tpl_vars['_feature_value']->value);?>

                            <?php }else{ ?>
                                <?php echo implode(', ',$_smarty_tpl->tpl_vars['_feature_value']->value);?>

                            <?php }?>
                        <?php }else{ ?>
                            <?php echo $_smarty_tpl->tpl_vars['_feature_value']->value;?>

                        <?php }?>
                    </td>
                </tr>
            <?php }?>
        <?php } ?>
    </table>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php $_smarty_tpl->tpl_vars['_skus_features_html'] = new Smarty_variable(array(), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['_sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_sku']->key => $_smarty_tpl->tpl_vars['_sku']->value){
$_smarty_tpl->tpl_vars['_sku']->_loop = true;
?>
    <?php if (!empty($_smarty_tpl->tpl_vars['_sku']->value['features'])){?>
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "_sku_features_html", null); ob_start(); ?><?php smarty_template_function__render_sku_features($_smarty_tpl,array('_features'=>$_smarty_tpl->tpl_vars['_sku']->value['features']));?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php $_smarty_tpl->createLocalArrayVariable('_skus_features_html', null, 0);
$_smarty_tpl->tpl_vars['_skus_features_html']->value[$_smarty_tpl->tpl_vars['_sku']->value['id']] = $_smarty_tpl->tpl_vars['_sku_features_html']->value;?>
    <?php }?>
<?php } ?>

<article itemscope itemtype="http://schema.org/Product" id="js-product-page">

    <h1>
        <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
        <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['rating'])&&$_smarty_tpl->tpl_vars['product']->value['rating']>0){?>
            <span class="rating nowrap" title="<?php echo sprintf('Средняя оценка покупателей: %s / 5',$_smarty_tpl->tpl_vars['product']->value['rating']);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['reviews_total_count']->value)){?>itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->ratingHtml($_smarty_tpl->tpl_vars['product']->value['rating'],16);?>

                <?php if (!empty($_smarty_tpl->tpl_vars['reviews_total_count']->value)){?>
                    <meta itemprop="ratingValue" content = "<?php echo $_smarty_tpl->tpl_vars['product']->value['rating'];?>
">
                    <meta itemprop="reviewCount" content = "<?php echo $_smarty_tpl->tpl_vars['reviews_total_count']->value;?>
">
                <?php }?>
            </span>
        <?php }?>
    </h1>

    <!-- product internal nav -->
    <nav>
        <ul class="product-nav top-padded">
            <li class="selected"><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value);?>
">Обзор</a></li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value,'reviews');?>
">Отзывы</a>
                <span class="hint"><?php echo $_smarty_tpl->tpl_vars['reviews_total_count']->value;?>
</span>
            </li>
            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value,'page',array('page_url'=>$_smarty_tpl->tpl_vars['page']->value['url']));?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
            <?php } ?>

            <!-- plugin hook: 'frontend_product.menu' -->
            
            <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value['menu'];?>
<?php } ?>

        </ul>
    </nav>

    <!-- purchase -->
    <div class="product-sidebar leadbox">

        <div class="cart" id="cart-flyer">

            <?php /*  Call merged included template "product.cart.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("product.cart.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '38762343363a66994afe8a6-46002074');
content_63a66994b4fc73_83196731($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "product.cart.html" */?>

            <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['compare_products']){?>
            <!-- compare -->
            <div>
                <a <?php if ($_smarty_tpl->tpl_vars['compare']->value){?>style="display:none"<?php }?> class="compare-add inline-link" data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" href="#"><b><i>Добавить к сравнению</i></b></a>
                <a <?php if (!$_smarty_tpl->tpl_vars['compare']->value){?>style="display:none"<?php }?> class="compare-remove inline-link" data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" href="#"><b><i>Удалить из сравнения</i></b></a>
                <a id="compare-link" <?php if (count($_smarty_tpl->tpl_vars['compare']->value)<2){?>style="display:none"<?php }?> rel="nofollow" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/compare/',array('id'=>implode(',',$_smarty_tpl->tpl_vars['compare']->value)));?>
" class="bold">Сравнить <span class="count"><?php echo count($_smarty_tpl->tpl_vars['compare']->value);?>
</span></a>
            </div>
            <?php }?>

            <!-- plugin hook: 'frontend_product.cart' -->
            
            <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value['cart'];?>
<?php } ?>

        </div>

        <!-- plugin hook: 'frontend_product.block_aux' -->
        
        <?php if (!empty($_smarty_tpl->tpl_vars['frontend_product']->value)){?>
            <div class="aux">
                <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value['block_aux'];?>
<?php } ?>
            </div>
        <?php }?>

    </div>

    <!-- product info & gallery -->
    <div class="product-info" id="overview">

        <?php $_smarty_tpl->tpl_vars['video'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->video, null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['video']->value){?>
            <div id="video-container" class="video-container" itemscope itemtype="http://schema.org/VideoObject">
                <div itemprop="embedHTML">
                    <iframe src="<?php echo $_smarty_tpl->tpl_vars['video']->value['url'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['video']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['video']->value['height'];?>
" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <meta itemprop="width" content="<?php echo $_smarty_tpl->tpl_vars['video']->value['width'];?>
">
                <meta itemprop="height" content="<?php echo $_smarty_tpl->tpl_vars['video']->value['height'];?>
">
                <meta itemprop="name" content="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product']->value['name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
">
                <meta itemprop="description" content="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product']->value['description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
">
                <meta itemprop="uploadDate" content="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product']->value['create_datetime'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
">
                <?php if (!empty($_smarty_tpl->tpl_vars['video']->value['images'][0])){?>
                    <?php $_smarty_tpl->tpl_vars['_thumb'] = new Smarty_variable($_smarty_tpl->tpl_vars['video']->value['images'][0], null, 0);?>
                    <?php ob_start();?><?php echo substr($_smarty_tpl->tpl_vars['_thumb']->value,1);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['_absolute_thumb_uri'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa']->value->url(true)).$_tmp1, null, 0);?>
                    <meta itemprop="thumbnailUrl" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_absolute_thumb_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
                <?php }?>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['images']||$_smarty_tpl->tpl_vars['video']->value){?>

            <figure class="product-gallery">

                <?php if ($_smarty_tpl->tpl_vars['product']->value['images']){?>

                    <!-- main image -->
                    <div class="image" id="product-core-image" <?php if ($_smarty_tpl->tpl_vars['video']->value){?>style="display:none"<?php }?>>

                        <div class="corner top right">
                            <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->badgeHtml($_smarty_tpl->tpl_vars['product']->value['badge']);?>

                        </div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['product']->value,'970');?>
">
                            <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['product']->value,'750',array('itemprop'=>'image','id'=>'product-image','alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true)));?>

                        </a>
                        <div id="switching-image" style="display: none;"></div>
                    </div>

                <?php }?>

                <!-- thumbs -->
                <?php if (count($_smarty_tpl->tpl_vars['product']->value['images'])>1||(count($_smarty_tpl->tpl_vars['product']->value['images'])===1&&$_smarty_tpl->tpl_vars['video']->value)){?>
                    <div class="more-images" id="product-gallery">
                        <?php if ($_smarty_tpl->tpl_vars['video']->value){?>
                            <div class="image video selected">
                                <a id="product-image-video" href="<?php echo $_smarty_tpl->tpl_vars['video']->value['url'];?>
" class="swipebox">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['video']->value['images'][0];?>
">
                                </a>
                            </div>
                        <?php }?>
                        <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                            <div class="image<?php if ($_smarty_tpl->tpl_vars['image']->value['id']==$_smarty_tpl->tpl_vars['product']->value['image_id']&&empty($_smarty_tpl->tpl_vars['video']->value)){?> selected<?php }?>">
                                <a id="product-image-<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->imgUrl($_smarty_tpl->tpl_vars['image']->value,'970');?>
" class="swipebox">
                                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->imgHtml($_smarty_tpl->tpl_vars['image']->value,'96x96');?>

                                </a>
                            </div>
                        <?php } ?>
                    </div>
                <?php }?>

            </figure>

        <?php }?>

        <!-- plugin hook: 'frontend_product.block' -->
        
        <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value['block'];?>
<?php } ?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['description']){?>
            <div class="description" id="product-description" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
        <?php }?>

        <!-- product features -->
        <div class="s-features-section js-features-section">
            <?php if (!empty($_smarty_tpl->tpl_vars['_skus_features_html']->value[$_smarty_tpl->tpl_vars['product']->value['sku_id']])){?><?php echo $_smarty_tpl->tpl_vars['_skus_features_html']->value[$_smarty_tpl->tpl_vars['product']->value['sku_id']];?>
<?php }?>
        </div>

        <!-- categories -->
        <?php if ($_smarty_tpl->tpl_vars['product']->value['categories']){?>
            <p><em>
                Категории:
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['c']->value['status']){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/category',array('category_url'=>$_smarty_tpl->tpl_vars['c']->value['full_url']));?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                <?php }?><?php } ?>
            </em></p>
        <?php }?>

        <!-- tags -->
        <?php if ($_smarty_tpl->tpl_vars['product']->value['tags']){?>
            <p class="tags" id="product-tags">
                Теги:
                <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/tag',array('tag'=>str_replace('%2F','/',urlencode(htmlspecialchars_decode($_smarty_tpl->tpl_vars['t']->value)))));?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</a>
                <?php } ?>
            </p>
        <?php }?>


        <!-- product reviews -->
        <section class="reviews">
            <h2><?php echo sprintf('%s отзывы',htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</h2>

            <?php if (!empty($_smarty_tpl->tpl_vars['rates']->value)){?>
                <p class="rating">
                    Средняя оценка покупателей:
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->ratingHtml($_smarty_tpl->tpl_vars['product']->value['rating'],16);?>
 (<a href="reviews/"><?php echo $_smarty_tpl->tpl_vars['reviews_total_count']->value;?>
</a>)
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['rating']>0){?><span class="hint"><?php echo sprintf('%s из 5 звезд',$_smarty_tpl->tpl_vars['product']->value['rating']);?>
</span><?php }?>
                </p>

                <table class="rating-distribution">
                    <?php $_smarty_tpl->tpl_vars['_total_count'] = new Smarty_variable(0, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['_count'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_count']->_loop = false;
 $_smarty_tpl->tpl_vars['_rate'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_count']->key => $_smarty_tpl->tpl_vars['_count']->value){
$_smarty_tpl->tpl_vars['_count']->_loop = true;
 $_smarty_tpl->tpl_vars['_rate']->value = $_smarty_tpl->tpl_vars['_count']->key;
?>
                        <?php $_smarty_tpl->tpl_vars['_total_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['_total_count']->value+$_smarty_tpl->tpl_vars['_count']->value, null, 0);?>
                    <?php } ?>
                    
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = -1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 0+1 - (5) : 5-(0)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 5, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (empty($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value])||!$_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value]){?><?php $_smarty_tpl->tpl_vars['_count'] = new Smarty_variable(0, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['rates']->value[$_smarty_tpl->tpl_vars['i']->value], null, 0);?><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['i']->value||$_smarty_tpl->tpl_vars['_count']->value){?>
                            <tr>
                                <td class="min-width hint"><?php echo $_smarty_tpl->tpl_vars['_count']->value;?>
</td>
                                <td>
                                    <div class="bar">
                                        <div class="filling" style="width: <?php if ($_smarty_tpl->tpl_vars['_total_count']->value>0){?><?php echo str_replace(',','.',100*$_smarty_tpl->tpl_vars['_count']->value/$_smarty_tpl->tpl_vars['_total_count']->value);?>
<?php }else{ ?>0<?php }?>%;<?php if (!$_smarty_tpl->tpl_vars['i']->value){?> background: #ddd;<?php }?>"></div>
                                    </div>
                                </td>
                                <td>
                                    <span class="rating"><?php $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int)ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['i']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['i']->value)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0){
for ($_smarty_tpl->tpl_vars['j']->value = 1, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++){
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?><i class="icon10 star"></i><?php }} else { ?><span class="hint">без оценки</span><?php }  ?></span>
                                </td>
                            </tr>
                        <?php }?>
                    <?php }} ?>
                </table>
            <?php }?>

            <ul>
                <?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value){
$_smarty_tpl->tpl_vars['review']->_loop = true;
?>
                    <li data-id=<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
 data-parent-id="0">
                        <?php /*  Call merged included template "review.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("review.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('reply_allowed'=>false), 0, '38762343363a66994afe8a6-46002074');
content_63a66994c14653_39708286($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "review.html" */?>
                    </li>
                <?php } ?>
            </ul>
            <?php if (!$_smarty_tpl->tpl_vars['reviews']->value){?>
                <p><?php echo sprintf('Оставьте <a href="%s">отзыв об этом товаре</a> первым!','reviews/');?>
</p>
            <?php }else{ ?>
                <?php echo sprintf(_w('Read <a href="%s">all %d review</a> on %s','Read <a href="%s">all %d reviews</a> on %s',$_smarty_tpl->tpl_vars['reviews_total_count']->value,false),'reviews/',$_smarty_tpl->tpl_vars['reviews_total_count']->value,htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true));?>

            <?php }?>
        </section>

    </div>

    <script>
        ( function($, waTheme) {
            initProductPage({
                $wrapper: $("#js-product-page"),
                skus_features_html: <?php echo json_encode($_smarty_tpl->tpl_vars['_skus_features_html']->value);?>

            });
        })(jQuery);
    </script>
</article>


<!-- RELATED PRODUCTS -->
<?php $_smarty_tpl->tpl_vars['upselling'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->upSelling(12), null, 0);?>
<?php $_smarty_tpl->tpl_vars['crossselling'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->crossSelling(12), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['upselling']->value||$_smarty_tpl->tpl_vars['crossselling']->value){?>
    <div class="product-info">

        <?php if ($_smarty_tpl->tpl_vars['crossselling']->value){?>
            <section class="related">
                <h3><?php echo sprintf('Покупатели, которые приобрели %s, также купили',htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</h3>
                <?php echo $_smarty_tpl->getSubTemplate ("list-thumbs-mini.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['crossselling']->value,'ulclass'=>"related-bxslider"), 0);?>

            </section>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['upselling']->value){?>
            <section class="related">
                <h3>
                    Рекомендуем посмотреть
                    <?php $_smarty_tpl->tpl_vars['compare_ids'] = new Smarty_variable(array_merge(array($_smarty_tpl->tpl_vars['product']->value['id']),array_keys($_smarty_tpl->tpl_vars['upselling']->value)), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['compare_products']){?>
                        <input type="button" onClick="javascript:window.location='<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/compare',array('id'=>implode(',',$_smarty_tpl->tpl_vars['compare_ids']->value)));?>
';" value="Сравнить все" class="gray" />
                    <?php }?>
                </h3>
                <?php echo $_smarty_tpl->getSubTemplate ("list-thumbs-mini.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['upselling']->value,'ulclass'=>"related-bxslider"), 0);?>

            </section>
        <?php }?>

    </div>
<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-12-24 05:53:08
         compiled from "C:\OpenServer\domains\elmarco\elmarcosite\wa-apps\shop\themes\default\product.cart.html" */ ?>
<?php if ($_valid && !is_callable('content_63a66994b4fc73_83196731')) {function content_63a66994b4fc73_83196731($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-system\\vendors\\smarty3\\plugins\\modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['_cart_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart'), null, 0);?>
<?php if (method_exists($_smarty_tpl->tpl_vars['wa']->value->shop,'checkout')){?>
    <?php $_smarty_tpl->tpl_vars['_cart_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->checkout()->cartUrl(), null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['_is_dialog'] = new Smarty_variable(false, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['wa']->value->get('cart')){?><?php $_smarty_tpl->tpl_vars['_is_dialog'] = new Smarty_variable(true, null, 0);?><?php }?>


<?php $_smarty_tpl->tpl_vars['_images'] = new Smarty_variable(array(), null, 0);?>
<?php $_smarty_tpl->createLocalArrayVariable('_images', null, 0);
$_smarty_tpl->tpl_vars['_images']->value["default"] = array("id"=>"default","uri_200"=>$_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['product']->value,"200"));?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['images']){?>
    <?php  $_smarty_tpl->tpl_vars['_image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_image']->key => $_smarty_tpl->tpl_vars['_image']->value){
$_smarty_tpl->tpl_vars['_image']->_loop = true;
?>
        <?php $_smarty_tpl->createLocalArrayVariable('_images', null, 0);
$_smarty_tpl->tpl_vars['_images']->value[$_smarty_tpl->tpl_vars['_image']->value['id']] = array("id"=>$_smarty_tpl->tpl_vars['_image']->value['id'],"uri_200"=>$_smarty_tpl->tpl_vars['wa']->value->shop->imgUrl($_smarty_tpl->tpl_vars['_image']->value,"200"));?>
    <?php } ?>
<?php }?>

<form id="cart-form<?php if ($_smarty_tpl->tpl_vars['wa']->value->get('cart')){?>-dialog<?php }?>" method="post" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontendCart/add');?>
">

    <h4><?php echo sprintf('Купить %s',htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</h4>
    <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('cart')){?>
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['product']->value,'96x96',array('itemprop'=>'image','id'=>'product-image','alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true)));?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['summary']){?>
        <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['summary'],512);?>
</p>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']){?>

        <!-- SELECTABLE FEATURES selling mode -->
        <?php $_smarty_tpl->tpl_vars['default_sku_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['sku_features'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['product_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['status'], null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['selectable_features_control']=='inline'){?>
            <div class="options">
                <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features_selectable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
                    <div class="inline-select<?php if ($_smarty_tpl->tpl_vars['f']->value['type']=='color'){?> color<?php }?>">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <?php if (!isset($_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']])){?><?php $_smarty_tpl->createLocalArrayVariable('default_sku_features', null, 0);
$_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']] = $_smarty_tpl->tpl_vars['v_id']->value;?><?php }?>
                            <a data-value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
" href="#"<?php if ($_smarty_tpl->tpl_vars['v_id']->value==ifset($_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']])){?> class="selected"<?php }?><?php if ($_smarty_tpl->tpl_vars['f']->value['type']=='color'){?> style="<?php echo $_smarty_tpl->tpl_vars['v']->value->style;?>
; margin-bottom: 20px;"<?php }?>>
                                <?php if ($_smarty_tpl->tpl_vars['f']->value['type']=='color'){?>&nbsp;<i class="icon16 checkmark color_checkmark"></i><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['f']->value['type']=='color'){?>&nbsp;<span class="color_name"><?php echo strip_tags($_smarty_tpl->tpl_vars['v']->value);?>
</span><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?>
                            </a>
                        <?php } ?>
                        <input type="hidden" data-feature-id="<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="sku-feature" name="features[<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
]" value="<?php echo ifset($_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']]);?>
">
                    </div>

                <?php } ?>
            </div>
        <?php }else{ ?>
            <div class="options">
                <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features_selectable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
                    <?php echo $_smarty_tpl->tpl_vars['f']->value['name'];?>
:
                    <select data-feature-id="<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="sku-feature" name="features[<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
]">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v_id']->value==ifset($_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']])){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                        <?php } ?>
                    </select>
                    <br>
                <?php } ?>
            </div>
        <?php }?>

        <!-- list all SKUs for Schema.org markup -->
        <?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?>
            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                <?php $_smarty_tpl->tpl_vars['sku_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['status']&&$_smarty_tpl->tpl_vars['sku']->value['available']&&($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['sku']->value['count']===null||$_smarty_tpl->tpl_vars['sku']->value['count']>0), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['sku']->value['name']){?><meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
                <meta itemprop="price" content="<?php echo shop_currency($_smarty_tpl->tpl_vars['sku']->value['price'],$_smarty_tpl->tpl_vars['product']->value['currency'],null,0);?>
">
                <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
">
                <?php if ((!($_smarty_tpl->tpl_vars['sku']->value['count']===null)&&$_smarty_tpl->tpl_vars['sku']->value['count']<=0)){?>
                    <link itemprop="availability" href="http://schema.org/OutOfStock" />
                <?php }else{ ?>
                    <link itemprop="availability" href="http://schema.org/InStock" />
                <?php }?>
            </div>
        <?php } ?>

    <?php }else{ ?>

        <!-- FLAT SKU LIST selling mode -->
        <?php $_smarty_tpl->tpl_vars['product_available'] = new Smarty_variable(false, null, 0);?>
        <?php if (count($_smarty_tpl->tpl_vars['product']->value['skus'])>1){?>

            
            <ul class="skus">
                <?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars['sku_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['status']&&$_smarty_tpl->tpl_vars['sku']->value['available']&&($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['sku']->value['count']===null||$_smarty_tpl->tpl_vars['sku']->value['count']>0), null, 0);?>
                <li itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                    <label<?php if (!$_smarty_tpl->tpl_vars['sku']->value['available']){?> class="disabled"<?php }?>>
                    <input name="sku_id" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
"<?php if (!$_smarty_tpl->tpl_vars['sku']->value['available']){?> disabled="true"<?php }?><?php if (!$_smarty_tpl->tpl_vars['sku_available']->value){?>data-disabled="1"<?php }?><?php if ($_smarty_tpl->tpl_vars['sku']->value['id']==$_smarty_tpl->tpl_vars['product']->value['sku_id']){?> checked="checked"<?php }?> data-compare-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['sku']->value['compare_price'],$_smarty_tpl->tpl_vars['product']->value['currency'],null,0);?>
" data-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['sku']->value['price'],$_smarty_tpl->tpl_vars['product']->value['currency'],null,0);?>
"<?php if ($_smarty_tpl->tpl_vars['sku']->value['image_id']){?> data-image-id="<?php echo $_smarty_tpl->tpl_vars['sku']->value['image_id'];?>
"<?php }?>> <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <?php if ($_smarty_tpl->tpl_vars['sku']->value['sku']){?><span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['sku'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?>
                    <meta itemprop="price" content="<?php echo shop_currency($_smarty_tpl->tpl_vars['sku']->value['price'],$_smarty_tpl->tpl_vars['product']->value['currency'],null,0);?>
">
                    <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
">
                    <span class="price tiny nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['sku']->value['price'],$_smarty_tpl->tpl_vars['product']->value['currency']);?>
</span>
                    <?php if ((!($_smarty_tpl->tpl_vars['sku']->value['count']===null)&&$_smarty_tpl->tpl_vars['sku']->value['count']<=0)){?>
                        <link itemprop="availability" href="http://schema.org/OutOfStock" />
                    <?php }else{ ?>
                        <link itemprop="availability" href="http://schema.org/InStock" />
                    <?php }?>
                    </label>
                </li>
                <?php $_smarty_tpl->tpl_vars['product_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_available']->value||$_smarty_tpl->tpl_vars['sku_available']->value, null, 0);?>
                <?php } ?>
            </ul>

        <?php }else{ ?>

            
            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                <?php $_smarty_tpl->tpl_vars['sku'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']], null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['sku']->value['sku']){?><span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['sku'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sku']->value['name']){?><meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
                <meta itemprop="price" content="<?php echo shop_currency($_smarty_tpl->tpl_vars['sku']->value['price'],$_smarty_tpl->tpl_vars['product']->value['currency'],null,0);?>
">
                <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->currency();?>
">
                <?php if (!$_smarty_tpl->tpl_vars['sku']->value['available']){?>
                <link itemprop="availability" href="http://schema.org/Discontinued" />
                <p><em class="bold error">Этот товар временно недоступен для заказа</em></p>
                <?php }elseif(!$_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')&&!($_smarty_tpl->tpl_vars['sku']->value['count']===null||$_smarty_tpl->tpl_vars['sku']->value['count']>0)){?>
                <link itemprop="availability" href="http://schema.org/OutOfStock" />
                <div class="stocks"><strong class="stock-none"><i class="icon16 stock-transparent"></i><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')){?>Под заказ<?php }else{ ?>Нет в наличии<?php }?></strong></div>
                <?php }else{ ?>
                <link itemprop="availability" href="http://schema.org/InStock" />
                <?php }?>
                <input name="sku_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['sku_id'];?>
">
                <?php $_smarty_tpl->tpl_vars['product_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['status']&&$_smarty_tpl->tpl_vars['sku']->value['available']&&($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['sku']->value['count']===null||$_smarty_tpl->tpl_vars['sku']->value['count']>0), null, 0);?>
            </div>

        <?php }?>

    <?php }?>

    <!-- stock info -->
    <?php if ($_smarty_tpl->tpl_vars['product_available']->value||count($_smarty_tpl->tpl_vars['product']->value['skus'])>1){?>
        <div class="stocks">
            <?php if (!function_exists('smarty_template_function_in_stock')) {
    function smarty_template_function_in_stock($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['in_stock']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                <?php if ($_smarty_tpl->tpl_vars['n']->value>$_smarty_tpl->tpl_vars['low']->value||$_smarty_tpl->tpl_vars['n']->value===null){?>
                    <strong class="stock-high"><i class="icon16 stock-green"></i>В наличии</strong>
                <?php }elseif($_smarty_tpl->tpl_vars['n']->value>$_smarty_tpl->tpl_vars['critical']->value){?>
                    <strong class="stock-low"><i class="icon16 stock-yellow"></i><?php echo _w("Only a few items left");?>
</strong>
                <?php }elseif($_smarty_tpl->tpl_vars['n']->value>0){?>
                    <strong class="stock-critical"><i class="icon16 stock-red"></i><?php echo _w("Only %d left in stock","Only %d left in stock",$_smarty_tpl->tpl_vars['n']->value);?>
</strong>
                <?php }else{ ?>
                    <strong class="stock-none"><i class="icon16 stock-transparent"></i><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')){?>Под заказ<?php }else{ ?>Нет в наличии<?php }?></strong>
                <?php }?>
            <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

            <?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?>
                <div <?php if ($_smarty_tpl->tpl_vars['sku']->value['id']!=$_smarty_tpl->tpl_vars['product']->value['sku_id']){?>style="display:none"<?php }?> class="sku-<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
-stock">
                    <?php if ($_smarty_tpl->tpl_vars['sku']->value['stock']){?>
                        <?php  $_smarty_tpl->tpl_vars['stock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stock']->_loop = false;
 $_smarty_tpl->tpl_vars['stock_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stock']->key => $_smarty_tpl->tpl_vars['stock']->value){
$_smarty_tpl->tpl_vars['stock']->_loop = true;
 $_smarty_tpl->tpl_vars['stock_id']->value = $_smarty_tpl->tpl_vars['stock']->key;
?>
                            <?php if (isset($_smarty_tpl->tpl_vars['sku']->value['stock'][$_smarty_tpl->tpl_vars['stock_id']->value])){?>
                                <?php $_smarty_tpl->tpl_vars['stock_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['sku']->value['stock'][$_smarty_tpl->tpl_vars['stock_id']->value], null, 0);?>
                            <?php }else{ ?>
                                <?php $_smarty_tpl->tpl_vars['stock_count'] = new Smarty_variable(null, null, 0);?>
                            <?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['stock']->value['name'];?>
: <?php smarty_template_function_in_stock($_smarty_tpl,array('n'=>$_smarty_tpl->tpl_vars['stock_count']->value,'low'=>$_smarty_tpl->tpl_vars['stock']->value['low_count'],'critical'=>$_smarty_tpl->tpl_vars['stock']->value['critical_count']));?>
<br>
                        <?php } ?>
                    <?php }else{ ?>
                        <?php smarty_template_function_in_stock($_smarty_tpl,array('n'=>$_smarty_tpl->tpl_vars['sku']->value['count']));?>

                    <?php }?>
                </div>
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']){?>
                <div class="sku-no-stock" style="display: none;">
                    <strong class="stock-none">Товар с выбранным набором характеристик недоступен для покупки</strong>
                </div>
            <?php }?>
        </div>
    <?php }?>

    <div class="purchase">

        <?php if ($_smarty_tpl->tpl_vars['services']->value){?>
        <!-- services -->
        <div class="services">
            <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
            <div class="service-<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
">
                <label>
                    <input data-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['s']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency'],null,0);?>
" <?php if (!$_smarty_tpl->tpl_vars['product_available']->value){?>disabled="disabled"<?php }?> type="checkbox" name="services[]" value="<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['s']->value['price']&&!isset($_smarty_tpl->tpl_vars['s']->value['variants'])){?>(+<span class="service-price"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['s']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency']);?>
</span>)<?php }?>
                </label>
                <?php if (isset($_smarty_tpl->tpl_vars['s']->value['variants'])){?>
                <select data-variant-id="<?php echo $_smarty_tpl->tpl_vars['s']->value['variant_id'];?>
" class="service-variants" name="service_variant[<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
]" disabled>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <option <?php if ($_smarty_tpl->tpl_vars['s']->value['variant_id']==$_smarty_tpl->tpl_vars['v']->value['id']){?>selected<?php }?> data-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['v']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency'],null,0);?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 (+<?php echo shop_currency($_smarty_tpl->tpl_vars['v']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency']);?>
)</option>
                    <?php } ?>
                </select>
                <?php }else{ ?>
                <input type="hidden" name="service_variant[<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['s']->value['variant_id'];?>
">
                <?php }?>
            </div>
            <?php } ?>
        </div>
        <?php }?>

        <!-- price -->
        <div class="add2cart">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['compare_price']>0){?><span class="compare-at-price nowrap"> <?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['compare_price']);?>
 </span><?php }?>
            <span data-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['product']->value['price'],null,null,0);?>
" class="price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['price']);?>
</span>
            <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
            
            <input type="submit" <?php if (!$_smarty_tpl->tpl_vars['product_available']->value){?>disabled="disabled"<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->cart->total()>0){?>В корзину<?php }else{ ?>Купить<?php }?>">
            <i class="adding2cart"></i>
            <span class="added2cart" style="display: none;"><?php echo sprintf('%s теперь <a href="%s"><strong>в вашей корзине покупок</strong></a>',htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true),$_smarty_tpl->tpl_vars['_cart_url']->value);?>
</span>
        </div>
    </div>
</form>

<script>
    ( function($) {
        $.getScript("<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
product.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
", function() {
            if (typeof Product === "function") {
                new Product('#cart-form<?php if ($_smarty_tpl->tpl_vars['wa']->value->get('cart')){?>-dialog<?php }?>', {
                    is_dialog: <?php echo json_encode($_smarty_tpl->tpl_vars['_is_dialog']->value);?>
,
                    images: <?php if (!empty($_smarty_tpl->tpl_vars['_is_dialog']->value)){?><?php echo json_encode($_smarty_tpl->tpl_vars['_images']->value);?>
<?php }else{ ?>[]<?php }?>,
                    compare_price: <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['compare_price'])){?><?php echo shop_currency($_smarty_tpl->tpl_vars['product']->value['compare_price'],null,null,0);?>
<?php }else{ ?>0<?php }?>,
                    currency: <?php echo json_encode($_smarty_tpl->tpl_vars['currency_info']->value);?>
,
                    skus: <?php echo json_encode($_smarty_tpl->tpl_vars['product']->value['skus']);?>

                    <?php if (count($_smarty_tpl->tpl_vars['product']->value['skus'])>1||$_smarty_tpl->tpl_vars['product']->value['sku_type']){?>
                        ,services: <?php echo json_encode($_smarty_tpl->tpl_vars['sku_services']->value);?>

                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']){?>
                        ,features: <?php echo json_encode($_smarty_tpl->tpl_vars['sku_features_selectable']->value);?>

                    <?php }?>
                });
            }
        });
    })(jQuery);
</script><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-12-24 05:53:08
         compiled from "C:\OpenServer\domains\elmarco\elmarcosite\wa-apps\shop\themes\default\review.html" */ ?>
<?php if ($_valid && !is_callable('content_63a66994c14653_39708286')) {function content_63a66994c14653_39708286($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-system\\vendors\\smarty3\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
?>

<?php if (!empty($_smarty_tpl->tpl_vars['ajax_append']->value)){?><li data-id=<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
 data-parent-id="<?php echo $_smarty_tpl->tpl_vars['review']->value['parent_id'];?>
"><?php }?>

<figure class="s-review-wrapper review" itemprop="review" itemscope itemtype="http://schema.org/Review" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">
    <div class="summary">
        <h6>
            <?php if (!$_smarty_tpl->tpl_vars['review']->value['parent_id']&&!empty($_smarty_tpl->tpl_vars['review']->value['rate'])){?>
            <span itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                <?php $_smarty_tpl->tpl_vars['rate'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['review']->value['rate']), null, 0);?>
                <meta itemprop="worstRating" content = "1">
                <meta itemprop="ratingValue" content="<?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
">
                <meta itemprop="bestRating" content = "5">
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->ratingHtml($_smarty_tpl->tpl_vars['rate']->value);?>

            </span>
            <?php }?>
            <span itemprop="name"><?php if ($_smarty_tpl->tpl_vars['review']->value['title']){?><?php echo $_smarty_tpl->tpl_vars['review']->value['title'];?>
<?php }?></span>
        </h6>
         
        <?php if (empty($_smarty_tpl->tpl_vars['review']->value['site'])){?>
            <span class="username" itemprop="author"><?php echo $_smarty_tpl->tpl_vars['review']->value['author']['name'];?>
</span>
        <?php }else{ ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['review']->value['site'];?>
" class="username" itemprop="author"><?php echo $_smarty_tpl->tpl_vars['review']->value['author']['name'];?>
</a>
        <?php }?>

        <?php if (ifempty($_smarty_tpl->tpl_vars['review']->value['author']['is_user'])>0){?>
            <span class="staff"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings('name');?>
</span>
        <?php }?>

        <meta itemprop="itemReviewed" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
        <meta itemprop="datePublished" content="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['review']->value['datetime'],'Y-m-d');?>
">
        <meta itemprop="author" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['review']->value['author']['name'])===null||$tmp==='' ? "author" : $tmp);?>
">
        <span class="date" title="<?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['review']->value['datetime']);?>
"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['review']->value['datetime'],"humandatetime");?>
</span>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['review']->value['text']){?>
        <p itemprop="description"><?php echo $_smarty_tpl->tpl_vars['review']->value['text'];?>
</p>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['review']->value['images'])){?><div class="s-images-list"><?php  $_smarty_tpl->tpl_vars['_image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['review']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_image']->key => $_smarty_tpl->tpl_vars['_image']->value){
$_smarty_tpl->tpl_vars['_image']->_loop = true;
?><a class="s-image-wrapper js-show-image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_image']->value['url_0'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_image']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><img class="s-image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_image']->value['url_2'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_image']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
"></a><?php } ?></div><?php }?>

    <?php if ($_smarty_tpl->tpl_vars['reply_allowed']->value){?>
        <div class="actions">
            <a href="<?php if (isset($_smarty_tpl->tpl_vars['reply_link']->value)){?><?php echo $_smarty_tpl->tpl_vars['reply_link']->value;?>
<?php }else{ ?>#<?php }?>" class="review-reply inline-link"><b><i>ответить</i></b></a>
        </div>
    <?php }?>

    <script>
        ( function($) {
            var $document = $(document),
                $review = $(".s-review-wrapper[data-id=\"" + <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
 + "\"]");

            $review.on("click", ".js-show-image", function(event) {
                event.preventDefault();

                var $image = $(this),
                    images = [];

                $review.find(".js-show-image").each(function () {
                    var $_image = $(this);
                    images.push({
                        href: $_image.attr("href"),
                        title: escape($_image.attr("title"))
                    });
                });

                var k = $image.prevAll('.js-show-image').length;
                if (k) {
                    images = images.slice(k).concat(images.slice(0, k));
                }

                $.swipebox(images, {
                    useSVG : false,
                    hideBarsDelay: false,
                    afterOpen: function() {
                        $document.on("scroll", closeSwipe);
                        function closeSwipe() {
                            var $closeButton = $("#swipebox-close");
                            if ($closeButton.length) {
                                $closeButton.trigger("click");
                            }
                            $document.off("scroll", closeSwipe);
                        }
                    }
                });

                function escape(string) {
                    return $("<div />").text(string).html();
                }
            });
        })(jQuery);
    </script>
</figure>

<?php if (!empty($_smarty_tpl->tpl_vars['ajax_append']->value)){?><ul class="reviews-branch"></ul></li><?php }?><?php }} ?>