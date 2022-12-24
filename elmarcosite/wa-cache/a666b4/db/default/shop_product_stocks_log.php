<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'product_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'sku_id' => 
  array (
    'type' => 'int',
    'null' => 0,
  ),
  'stock_id' => 
  array (
    'type' => 'int',
  ),
  'stock_name' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'before_count' => 
  array (
    'type' => 'decimal',
    'params' => '15,3',
  ),
  'after_count' => 
  array (
    'type' => 'decimal',
    'params' => '15,3',
  ),
  'diff_count' => 
  array (
    'type' => 'decimal',
    'params' => '15,3',
  ),
  'type' => 
  array (
    'type' => 'varchar',
    'params' => '32',
    'null' => 0,
  ),
  'description' => 
  array (
    'type' => 'text',
  ),
  'datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'order_id' => 
  array (
    'type' => 'int',
  ),
  'transfer_id' => 
  array (
    'type' => 'int',
  ),
);
