<?php
/**
 * @file
 * Contains \Drupal\example_module\Controller\ExampleController.
 */
 
namespace Drupal\example_module\Controller;
 
use Drupal\Core\Controller\ControllerBase;
 
class ExampleController extends ControllerBase {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello, this is an example'),
    );
  }
}


