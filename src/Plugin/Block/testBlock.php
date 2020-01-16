<?php

namespace Durpal\CIAndT\Plugin\Block;

use Durpal\Core\Block\BlockBase;

/**
 * Provides a 'testBlock' Block.
 *
 * @Block(
 *   id = "test_block",
 *   admin_label = @Translation("test block"),
 *   category = @Translation("Custom"),
 * )
 */

class testBlock extends BlockBase {
    public function build() {
        return array(
            '#type' => '#markup',
            '#markup'=> $this->t('testBlock')
        );
    }
}