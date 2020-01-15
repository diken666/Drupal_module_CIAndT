<?php

namespace Drupal\CIAndT\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'MyBlock' Block.
 *
 * @Block(
 *   id = "my_block",
 *   admin_label = @Translation("my block"),
 *   category = @Translation("My Block"),
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
}
