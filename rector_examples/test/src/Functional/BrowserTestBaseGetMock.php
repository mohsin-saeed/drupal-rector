<?php

namespace Drupal\Tests\rector_examples\Functional;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Tests\BrowserTestBase;

class BrowserTestBaseGetMock extends BrowserTestBase {

  /**
   * An example that was copied from the change record.
   */
  public function simple_example() {
      $this->entityTypeManager = $this->getMock(EntityTypeManagerInterface::class);
  }

  /**
   * An example similar to the one above but more commonly used
   */
  public function class_name_as_string() {
    $this->entityTypeManager = $this->getMock('Drupal\Core\Entity\EntityTypeManagerInterface');
  }
}
