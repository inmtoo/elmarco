<?php
return array (
  'installer' => 
  array (
    'id' => 'installer',
    'name' => 'Инсталлер',
    'description' => 'Install new apps from the Webasyst Store',
    'icon' => 
    array (
      48 => 'wa-apps/installer/img/installer.svg',
      24 => 'wa-apps/installer/img/installer.svg',
      16 => 'wa-apps/installer/img/installer.svg',
    ),
    'mobile' => false,
    'version' => '2.7.2',
    'critical' => '2.7.2',
    'system' => true,
    'vendor' => 'webasyst',
    'csrf' => true,
    'ui' => '1.3,2.0',
    'build' => 732,
    'img' => 'wa-apps/installer/img/installer.svg',
  ),
  'shop' => 
  array (
    'id' => 'shop',
    'ui' => '1.3',
    'name' => 'Магазин',
    'description' => 'Shop-Script is a robust shopping cart software that allows you to quickly establish your own online store and sell online.',
    'icon' => 
    array (
      16 => 'wa-apps/shop/img/shop16.png',
      24 => 'wa-apps/shop/img/shop24.png',
      48 => 'wa-apps/shop/img/shop48.png',
      96 => 'wa-apps/shop/img/shop96.png',
    ),
    'sash_color' => '#27bf52',
    'rights' => true,
    'frontend' => true,
    'auth' => true,
    'themes' => true,
    'plugins' => true,
    'pages' => true,
    'mobile' => true,
    'my_account' => true,
    'version' => '9.4.3',
    'critical' => '9.0.0',
    'vendor' => 'webasyst',
    'csrf' => true,
    'payment_plugins' => 
    array (
      'taxes' => true,
      'rights' => 'settings',
    ),
    'shipping_plugins' => 
    array (
      'desired_date' => true,
      'draft' => true,
      'ready' => true,
      'cancel' => true,
      'taxes' => true,
      'custom_fields' => true,
      'dimensions' => false,
      'sync' => true,
      'callback' => 
      array (
      ),
      'rights' => 'settings',
    ),
    'sms_plugins' => true,
    'license' => 'commercial',
    'routing_params' => 
    array (
      'checkout_version' => 2,
      'checkout_storefront_id' => '5781299feb9bd2d765657b365393fe1d',
    ),
    'build' => 70,
    'img' => 'wa-apps/shop/img/shop48.png',
  ),
  'site' => 
  array (
    'id' => 'site',
    'name' => 'Сайт',
    'icon' => 
    array (
      48 => 'wa-apps/site/img/site512.png',
      24 => 'wa-apps/site/img/site512.png',
      16 => 'wa-apps/site/img/site512.png',
    ),
    'sash_color' => '#49a2e0',
    'frontend' => true,
    'version' => '2.5.32',
    'critical' => '2.5.0',
    'vendor' => 'webasyst',
    'system' => true,
    'rights' => true,
    'plugins' => true,
    'themes' => true,
    'pages' => true,
    'auth' => true,
    'csrf' => true,
    'my_account' => true,
    'build' => 280,
    'img' => 'wa-apps/site/img/site512.png',
    'ui' => '1.3',
  ),
  'team' => 
  array (
    'id' => 'team',
    'name' => 'Команда',
    'icon' => 
    array (
      48 => 'wa-apps/team/img/team.svg',
      24 => 'wa-apps/team/img/team.svg',
      16 => 'wa-apps/team/img/team.svg',
    ),
    'version' => '2.1.4',
    'vendor' => 'webasyst',
    'sash_color' => '#f0dc03',
    'system' => true,
    'rights' => true,
    'plugins' => true,
    'csrf' => true,
    'ui' => '1.3,2.0',
    'build' => 178,
    'img' => 'wa-apps/team/img/team.svg',
  ),
  'webasyst' => 
  array (
    'id' => 'webasyst',
    'name' => 'Вебасист',
    'prefix' => 'webasyst',
    'version' => '2.7.2',
    'critical' => '2.7.2',
    'vendor' => 'webasyst',
    'csrf' => true,
    'header_items' => 
    array (
      'settings' => 
      array (
        'icon' => 
        array (
          48 => 'wa-content/img/wa-settings/settings.svg',
        ),
        'name' => 'Настройки',
        'link' => 'settings',
        'rights' => 'backend',
        'img' => 'wa-content/img/wa-settings/settings.svg',
      ),
    ),
    'ui' => '1.3,2.0',
    'build' => 732,
    'icon' => 
    array (
    ),
  ),
);
