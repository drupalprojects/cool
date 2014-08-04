<?php

namespace Drupal\cool;

abstract class BaseBlock implements Controllers\BlockController {

  static public function getId();

  public static function getAdminTitle();

  static public function getDefinition() {
    return array();
  }

  public static function getConfiguration() {
    return array();
  }

  public static function saveConfiguration($edit) {
    
  }

  public static function getSubject() {
    return '';
  }

  public static function getContent();

}
