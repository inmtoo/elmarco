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
  'upload_datetime' => 
  array (
    'type' => 'datetime',
    'null' => 0,
  ),
  'edit_datetime' => 
  array (
    'type' => 'datetime',
  ),
  'description' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'sort' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'width' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'height' => 
  array (
    'type' => 'int',
    'null' => 0,
    'default' => '0',
  ),
  'size' => 
  array (
    'type' => 'int',
  ),
  'filename' => 
  array (
    'type' => 'varchar',
    'params' => '255',
    'null' => 0,
    'default' => '',
  ),
  'original_filename' => 
  array (
    'type' => 'varchar',
    'params' => '255',
  ),
  'ext' => 
  array (
    'type' => 'varchar',
    'params' => '10',
  ),
  'badge_type' => 
  array (
    'type' => 'int',
  ),
  'badge_code' => 
  array (
    'type' => 'text',
  ),
);
