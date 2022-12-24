<?php /* Smarty version Smarty-3.1.14, created on 2022-12-24 05:47:22
         compiled from "C:\OpenServer\domains\elmarco\elmarcosite\wa-apps\shop\templates\actions\settings\SettingsTypefeatFeatureWidget.html" */ ?>
<?php /*%%SmartyHeaderCode:82092910163a6683a843921-05820675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ff91758fb5f844c620ee0f6a24c0db0db32a2f2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\elmarco\\elmarcosite\\wa-apps\\shop\\templates\\actions\\settings\\SettingsTypefeatFeatureWidget.html',
      1 => 1621849848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82092910163a6683a843921-05820675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selection' => 0,
    'product_id' => 0,
    'wa_app_url' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_63a6683a851ba9_47936655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63a6683a851ba9_47936655')) {function content_63a6683a851ba9_47936655($_smarty_tpl) {?><script>
( function($) {
    var selection = <?php echo json_encode($_smarty_tpl->tpl_vars['selection']->value);?>
;
    if (selection) {
        var $document = $(document),
            name = "is_feature_dialog_initialized",
            is_initialized = $document.data(name);

        if (!is_initialized) {
            var is_locked = false;
            $document.on("click", selection, function(event) {
                event.preventDefault();

                if (!is_locked) {
                    is_locked = true;
                    initialize($(this))
                        .always( function() {
                            is_locked = false;
                        });
                }
            });
            $document.data(name, true);
        }
    }

    function initialize($target) {
        var deferred = $.Deferred();

        var product_id = <?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['product_id']->value)===null||$tmp==='' ? null : $tmp));?>
;

        // Вид, обычный или разделитель
        var mode = $target.data("mode");
        mode = (typeof mode === "string" ? mode : "varchar");

        // Предустановленный тип товара
        var type_id = $target.data("type-id");
        type_id = (typeof type_id !== "undefined" && type_id ? type_id : "all_existing");

        // Данный для редактирования
        var code = $target.data("code");
        code = (typeof code === "string" ? code : "");
        var feature_id = $target.data("id");
        feature_id = (typeof feature_id !== "undefined" ? feature_id : "");

        var href = "<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?module=settingsTypefeat&action=featureEdit",
            data = {
                mode: mode,
                code: code,
                type_id: type_id,
                feature_id: feature_id
            };

        if (product_id) {
            data["product_id"] = product_id;
        }

        trigger("before_load");

        getDialogSources()
            .fail( function() {
                trigger("load_fail");
                deferred.reject();
            })
            .done( function () {
                getDialogHTML(href, data)
                    .fail( function() {
                        trigger("load_fail");
                        deferred.reject();
                    })
                    .done( function(html) {
                        trigger("load_done");
                        initDialog(html);
                        deferred.resolve();
                    });
            });

        return deferred.promise();

        function getDialogSources() {
            var sources = [{
                id  : "wa-shop-features-add_feature-js",
                type: "js",
                uri : "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/backend/settings/features/dialogs/add_feature.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
            }, {
                id: "wa-shop-features-add_feature-css",
                type: "css",
                uri: "<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/backend/settings/features/dialogs/add_feature.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"
            }, {
                id: "wa-content-color-picker-js",
                type: "js",
                uri: "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"
            }, {
                id: "wa-content-color-picker-css",
                type: "css",
                uri: "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"
            }];

            return loadSources(sources);

            function loadSources(sources, async) {
                async = (typeof async === "boolean" ? async : true);

                var deferred = $.Deferred();

                loader(sources).then( function() {
                    deferred.resolve();
                }, function(bad_sources) {
                    if (console && console.error) {
                        console.error("Error loading resource", bad_sources);
                    }
                    deferred.reject(bad_sources);
                });

                return deferred.promise();

                function loader(sources) {
                    var deferred = $.Deferred(),
                        counter = sources.length;

                    var bad_sources = [];

                    if (async) {
                        $.each(sources, function(i, source) {
                            loadSource(source);
                        });

                    } else {
                        runner();
                        function runner(i) {
                            i = (typeof i === "number" ? i : 1);
                            loadSource(sources[i - 1]).always( function() {
                                if (i < sources.length) {
                                    runner(i + 1);
                                }
                            });
                        }
                    }

                    return deferred.promise();

                    function loadSource(source) {
                        var result;

                        switch (source.type) {
                            case "css":
                                result = loadCSS(source).then(onLoad, onError);
                                break;

                            case "js":
                                result = loadJS(source).then(onLoad, onError);
                                break;

                            default:
                                var deferred = $.Deferred();
                                deferred.reject();
                                result = deferred.promise();
                                counter -= 1;
                                break;
                        }

                        return result;
                    }

                    function loadCSS(source) {
                        var deferred = $.Deferred(),
                            promise = deferred.promise();

                        var $link = $("#" + source.id);
                        if ($link.length) {
                            promise = $link.data("promise");

                        } else {
                            $link = $("<link />", {
                                id: source.id,
                                rel: "stylesheet"
                            }).appendTo("head")
                                .data("promise", promise);

                            $link
                                .on("load", function() {
                                    deferred.resolve(source);
                                }).on("error", function() {
                                deferred.reject(source);
                            });

                            $link.attr("href", source.uri);
                        }

                        return promise;
                    }

                    function loadJS(source) {
                        var deferred = $.Deferred(),
                            promise = deferred.promise();

                        var $script = $("#" + source.id);
                        if ($script.length) {
                            promise = $script.data("promise");

                        } else {
                            var script = document.createElement("script");
                            document.getElementsByTagName("head")[0].appendChild(script);

                            $script = $(script)
                                .attr("id", source.id)
                                .data("promise", promise);

                            $script
                                .on("load", function() {
                                    deferred.resolve(source);
                                }).on("error", function() {
                                deferred.reject(source);
                            });

                            $script.attr("src", source.uri);
                        }

                        return promise;
                    }

                    function onLoad(source) {
                        counter -= 1;
                        watcher();
                    }

                    function onError(source) {
                        bad_sources.push(source);
                        counter -= 1;
                        watcher();
                    }

                    function watcher() {
                        if (counter === 0) {
                            if (!bad_sources.length) {
                                deferred.resolve();
                            } else {
                                deferred.reject(bad_sources);
                            }
                        }
                    }
                }
            }
        }

        function getDialogHTML(href, data) {
            return $.post(href, data, "json");
        }

        function initDialog(html) {
            var data = { html: html };
            trigger("html_ready", [data]);

            // Это точечная коррекция класов под оформление диалога в редакторе
            html = data.html;

            $.waDialog({
                html: html,
                options: {
                    onSuccess: function(feature_data, data) {
                        trigger((feature_id ? "feature_updated" : "feature_created"), [feature_data, data]);
                    },
                    initFeatureDialog: function (options) {
                        return $.wa.new.FeatureDialog(options);
                    }
                },
                onOpen: function($dialog, dialog) { trigger("open", dialog); },
                onClose: function() { trigger("close"); }
            });
        }

        function trigger(event_name, data) {
            data = (typeof data !== "undefined" ? data : []);
            $target.trigger("feature_dialog_" + event_name, data);
        }
    }

})(jQuery);
</script><?php }} ?>