<?php

namespace Drupal\cool;

abstract class BaseBlock implements Controllers\BlockController {

  static public function getId() {
    throw new \Exception('You need to implement the getId() method');
  }

  public static function getAdminTitle() {
    throw new \Exception('You need to implement the getAdminTitle() method');
  }

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

  public static function getContent() {
    throw new \Exception('You need to implement the getContent() method');
  }

}
