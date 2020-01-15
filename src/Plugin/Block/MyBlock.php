<?php

/**
 * @file
 * Contains Drupal\CIAndT\Plugin\Block\MyBlock
 */

namespace Drupal\CIAndT\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'MyBlock' Block.
 *
 * @Block(
 *   id = "my_block",
 *   admin_label = @Translation("my block"),
 *   category = @Translation("Custom"),
 * )
 */


class MyBlock extends BlockBase {

   /**
     * {@inheritdoc}
     */
    public function build() {
        return [
            '#markup' => $this->t('<h1>Hello, World!</h1>'),
        ];
    }

    // public function defaultConfiguration() {
    //     $default_config = \Drupal::config('CIAndT.settings');
    //     return [
    //       'my_block_name' => $default_config->get('CIAndT.name'),
    //     ];
    // }
}
