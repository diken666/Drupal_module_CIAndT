<?php

namespace Drupal\CIAndT\Controller;

use Drupal\Core\Controller\ControllerBase;


class MyController extends ControllerBase {
    public function content() {
        return array(
            '#type' => 'markup',
            '#markup' => t('我的drupal模块')
        );
    }
}

