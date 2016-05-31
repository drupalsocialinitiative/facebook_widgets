<?php
/**
 * @file
 * Contains \Drupal\facebook_widgets\Controller\FacebookWidgetsController
 */

namespace Drupal\facebook_widgets\Controller;

use Drupal\social_widgets\Controller\SocialWidgetsController;

/**
 * Class FacebookWidgetsController
 *
 * @package Drupal\facebook_widgets\Controller
 */
class FacebookWidgetsController extends SocialWidgetsController {

  public function listWidgets($social_network = 'Facebook') {
    return parent::listWidgets($social_network);
  }
}
