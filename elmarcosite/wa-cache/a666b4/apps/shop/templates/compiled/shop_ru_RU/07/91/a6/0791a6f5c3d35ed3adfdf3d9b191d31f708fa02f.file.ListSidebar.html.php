<?php /* Smarty version Smarty-3.1.14, created on 2022-12-24 05:45:29
         compiled from "C:\OpenServer\domains\elmarco\elmarcosite\wa-apps\shop\templates\actions\prod\main\ListSidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:18738236463a667c9c5c587-13197961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0791a6f5c3d35ed3adfdf3d9b191d31f708fa02f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-apps\\shop\\templates\\actions\\prod\\main\\ListSidebar.html',
      1 => 1669905702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18738236463a667c9c5c587-13197961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_locales' => 0,
    '_menu' => 0,
    '_item' => 0,
    '_sub_item' => 0,
    '_tooltips' => 0,
    'sidebar_menu_state' => 0,
    'wa_app_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_63a667c9c6f8a5_71173392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63a667c9c6f8a5_71173392')) {function content_63a667c9c6f8a5_71173392($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_tooltips'] = new Smarty_variable(array(), null, 0);?>

<?php $_smarty_tpl->tpl_vars['_locales'] = new Smarty_variable(array("pin_menu"=>htmlspecialchars(_w("Pin menu"), ENT_QUOTES, 'UTF-8', true),"unpin_menu"=>htmlspecialchars(_w("Unpin menu"), ENT_QUOTES, 'UTF-8', true)), null, 0);?>

<?php $_smarty_tpl->tpl_vars['_menu'] = new Smarty_variable(shopMainMenu::get(array('inline_icons'=>true)), null, 0);?>

<div class="s-products-page-menu" id="js-products-page-menu" style="visibility: hidden">
    <div class="sidebar width-15rem hide-scrollbar">
        <ul class="menu s-main-menu">
            <li class="s-toggle-wrapper">
                <div class="item js-toggle-products-page-sidebar">
                    <span class="s-icon-main icon"><i class="fas fa-bars"></i></span>
                    <span class="s-name"><?php echo $_smarty_tpl->tpl_vars['_locales']->value["unpin_menu"];?>
</span>
                </div>
            </li>

            <?php  $_smarty_tpl->tpl_vars['_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_item']->key => $_smarty_tpl->tpl_vars['_item']->value){
$_smarty_tpl->tpl_vars['_item']->_loop = true;
?>
                <li>
                    <?php if (!empty($_smarty_tpl->tpl_vars['_item']->value["submenu"])){?>
                        <div class="item js-group-toggle js-<?php echo $_smarty_tpl->tpl_vars['_item']->value["id"];?>
-toggle">
                            <span class="s-icon-main icon"><?php echo $_smarty_tpl->tpl_vars['_item']->value["icon"];?>
</span>
                            <span class="s-name">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_item']->value["name"], ENT_QUOTES, 'UTF-8', true);?>

                                <span class="hint s-icon-toggle is-expanded"><i class="fas fa-caret-down"></i></span>
                                <span class="hint s-icon-toggle"><i class="fas fa-caret-right"></i></span>
                            </span>
                        </div>

                        <ul class="menu s-sub-menu">
                            <?php  $_smarty_tpl->tpl_vars['_sub_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_sub_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_item']->value["submenu"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_sub_item']->key => $_smarty_tpl->tpl_vars['_sub_item']->value){
$_smarty_tpl->tpl_vars['_sub_item']->_loop = true;
?>
                                <li>
                                    <a class="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_sub_item']->value["url"], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span class="s-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_sub_item']->value["name"], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php }else{ ?>
                        <a class="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_item']->value["url"], ENT_QUOTES, 'UTF-8', true);?>
">
                            <span class="s-icon-main icon"><?php echo $_smarty_tpl->tpl_vars['_item']->value["icon"];?>
</span>
                            <span class="s-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_item']->value["name"], ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                    <?php }?>
                </li>
            <?php } ?>
        </ul>
    </div>

    <script>
        ( function($) {
            var $products_page = $("#js-products-page"),
                $product_page = $("#js-product-page");

            if ($products_page.length) {
                var ready_promise = $products_page.data("ready");
                ready_promise.done( function(controller) {
                    controller.sidebar = init();
                });
            } else if ($product_page.length) {
                var ready_promise = $product_page.data("ready");
                ready_promise.done( function(controller) {
                    init();
                });
            }

            function init() {
                return $.wa_shop_products.init.initProductsSidebar({
                    $wrapper: $("#js-products-page-menu"),
                    tooltips: <?php echo json_encode($_smarty_tpl->tpl_vars['_tooltips']->value);?>
,
                    locales: <?php echo json_encode($_smarty_tpl->tpl_vars['_locales']->value);?>
,
                    sidebar_menu_state: <?php if (!empty($_smarty_tpl->tpl_vars['sidebar_menu_state']->value)){?>true<?php }else{ ?>false<?php }?>,
                    urls: {
                        "sidebar_menu_state" : "<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?module=backend&action=sidebarMenuSaveState"
                    }
                });
            }
        })(jQuery);
    </script>
</div>
<?php }} ?>