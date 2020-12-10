<?php

namespace Drupal\example_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines an ExampleController class.
 */
class ExampleController extends ControllerBase {

  /**
   * Content function.
   */
  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => 'Hello, this is an example',
    ];
  }

}
