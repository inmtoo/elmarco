<?php /* Smarty version Smarty-3.1.14, created on 2022-12-24 05:45:29
         compiled from "C:\OpenServer\domains\elmarco\elmarcosite\wa-apps\shop\templates\layouts\BackendProductsListSection.html" */ ?>
<?php /*%%SmartyHeaderCode:170714261563a667c9d3f6a2-99630299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8849a300ca750103a8029e2991401904ff54546' => 
    array (
      0 => 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-apps\\shop\\templates\\layouts\\BackendProductsListSection.html',
      1 => 1664959922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170714261563a667c9d3f6a2-99630299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebar' => 0,
    'content' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
    '_templates' => 0,
    '_locales' => 0,
    '_urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_63a667c9d48ff0_13950221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63a667c9d48ff0_13950221')) {function content_63a667c9d48ff0_13950221($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_templates'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['_locales'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['_urls'] = new Smarty_variable(array(), null, 0);?>

<div class="s-products-page" id="js-products-page">
    <script>
        ( function($) {
            $("#js-products-page").data("ready", $.Deferred());
        })(jQuery);
    </script>

    <div class="s-products-page-body">
        
        <?php echo $_smarty_tpl->tpl_vars['sidebar']->value;?>


        
        <div class="s-products-page-content" id="js-products-page-content">
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </div>
    </div>

    <script>
        ( function($) {

            var sources = [{
                id: "wa-shop-products-main-sidebar-js",
                type: "js",
                uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/products/main/sidebar.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
            }, {
                id: "wa-shop-products-main-js",
                type: "js",
                uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/products/main/main.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
            }];

            $.wa.loadSources(sources).done( function() {
                $.wa_shop_products.init.initProductsMain({
                    $wrapper: $("#js-products-page"),
                    templates: <?php echo json_encode($_smarty_tpl->tpl_vars['_templates']->value);?>
,
                    locales: <?php echo json_encode($_smarty_tpl->tpl_vars['_locales']->value);?>
,
                    urls: <?php echo json_encode($_smarty_tpl->tpl_vars['_urls']->value);?>

                });
            });

        })(jQuery);
    </script>
</div><?php }} ?>