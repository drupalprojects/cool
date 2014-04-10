<?php

namespace Drupal\minka_core\Controllers;

interface PageController {

  /**
   * Path to be used by hook_menu().
   */
  static public function getPath();

  /**
   * Passed to hook_menu().
   */
  static public function getDefinition();

  /**
   * Responsible for the page construction itself.
   */
  static public function pageCallback();

  /**
   * Responsible for the page access restriction.
   */
  static public function accessCallback();
}
