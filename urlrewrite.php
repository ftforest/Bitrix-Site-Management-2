<?php
$arUrlRewrite=array (
  2 => 
  array (
    'CONDITION' => '#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/video([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1&videoconf',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  18 => 
  array (
    'CONDITION' => '#^/flowers_shop/bouquets/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/flowers_shop/bouquets/index.php',
    'SORT' => 100,
  ),
  12 => 
  array (
    'CONDITION' => '#^/flowers_shop/services/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/flowers_shop/services/index.php',
    'SORT' => 100,
  ),
  13 => 
  array (
    'CONDITION' => '#^/flowers_shop/products/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/flowers_shop/products/index.php',
    'SORT' => 100,
  ),
  19 => 
  array (
    'CONDITION' => '#^/flowers_shop/flowers/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/flowers_shop/flowers/index.php',
    'SORT' => 100,
  ),
  17 => 
  array (
    'CONDITION' => '#^/flowers_shop/buket-2/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/flowers_shop/buket-2/index.php',
    'SORT' => 100,
  ),
  14 => 
  array (
    'CONDITION' => '#^/flowers_shop/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/flowers_shop/news/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/stssync/calendar/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/calendar/index.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/personal/order/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.order',
    'PATH' => '/personal/order/index.php',
    'SORT' => 100,
  ),
  10 => 
  array (
    'CONDITION' => '#^/personal/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.section',
    'PATH' => '/personal/index.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/store/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog.store',
    'PATH' => '/store/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
);
