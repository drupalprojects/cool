<?php

namespace Drupal\cool_examples\Controllers\BlockControllers;

class CurrentTimeBlock implements \Drupal\cool\Controllers\BlockController {

  public static function getId() {
    return 'cool_example_current_time_block';
  }

  public static function getAdminTitle() {
    return 'Cool Block - Admin title';
  }

  static public function getDefinition() {
    return array();
  }

  public static function getSubject() {
    return 'Block title';
  }

  public static function getContent() {
    return 'The current time is ' . date('d/m/Y', time());
  }

}
